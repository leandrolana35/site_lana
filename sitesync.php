<?php
$isCli = php_sapi_name() === 'cli';
if (!$isCli) {
    $token = getenv('DEPLOY_TOKEN');
    $provided = $_SERVER['HTTP_X_DEPLOY_TOKEN'] ?? $_POST['token'] ?? $_GET['token'] ?? '';
    if (!$token || $provided !== $token) {
        http_response_code(403);
        die('Unauthorized');
    }
}

$log = [];
$log[] = 'Iniciando deploy em ' . date('d/m/Y H:i:s');

$zipUrl = 'https://github.com/leandrolana35/site_lana/archive/refs/heads/main.zip';
$tmpZip = sys_get_temp_dir() . '/site_lana_' . time() . '.zip';
$tmpDir = sys_get_temp_dir() . '/site_lana_' . time();

// Baixa com follow_location explícito para garantir que o redirect do GitHub seja seguido
$ctx = stream_context_create(['http' => [
    'follow_location' => 1,
    'max_redirects'   => 5,
    'timeout'         => 60,
    'user_agent'      => 'Mozilla/5.0 sitesync/2.0',
]]);

$zip = file_get_contents($zipUrl, false, $ctx);
if ($zip === false || strlen($zip) < 1000) {
    http_response_code(500);
    die('Falha ao baixar do GitHub (tamanho: ' . ($zip === false ? 'false' : strlen($zip)) . ')');
}
$log[] = 'ZIP baixado: ' . round(strlen($zip)/1024) . ' KB';
file_put_contents($tmpZip, $zip);

$archive = new ZipArchive();
$openResult = $archive->open($tmpZip);
if ($openResult !== true) {
    http_response_code(500);
    die('Falha ao abrir ZIP (código: ' . $openResult . ')');
}
mkdir($tmpDir, 0755, true);
$archive->extractTo($tmpDir);
$archive->close();
unlink($tmpZip);
$log[] = 'ZIP extraído em ' . $tmpDir;

$srcBase = $tmpDir . '/site_lana-main';
$dstBase = __DIR__;

if (!is_dir($srcBase)) {
    http_response_code(500);
    die('Pasta site_lana-main não encontrada em ' . $tmpDir . '. Conteúdo: ' . implode(', ', scandir($tmpDir)));
}

$copyTargets = ['index.html', '.htaccess', 'sitesync.php', 'brindes', 'tech', 'css', 'js', 'emails', 'images', 'assets', 'guias', 'sitemap.xml', 'llms.txt'];

function copyRecursive($src, $dst, &$log) {
    if (!is_dir($dst)) {
        if (!mkdir($dst, 0755, true)) {
            $log[] = 'ERRO: nao foi possivel criar ' . $dst;
            return;
        }
        $log[] = 'Criado dir: ' . $dst;
    }
    foreach (scandir($src) as $item) {
        if ($item === '.' || $item === '..') continue;
        $s = $src . '/' . $item;
        $d = $dst . '/' . $item;
        if (is_dir($s)) {
            copyRecursive($s, $d, $log);
        } else {
            if (copy($s, $d)) {
                // log apenas para arquivos em novas pastas (evita spam)
            } else {
                $log[] = 'ERRO ao copiar: ' . $s . ' -> ' . $d;
            }
        }
    }
}

function removeDir($dir) {
    if (!is_dir($dir)) return;
    foreach (scandir($dir) as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . '/' . $item;
        is_dir($path) ? removeDir($path) : unlink($path);
    }
    rmdir($dir);
}

foreach ($copyTargets as $target) {
    $src = $srcBase . '/' . $target;
    $dst = $dstBase . '/' . $target;
    if (is_dir($src)) {
        $log[] = 'Sincronizando dir: ' . $target;
        copyRecursive($src, $dst, $log);
    } elseif (is_file($src)) {
        copy($src, $dst);
        $log[] = 'Copiado arquivo: ' . $target;
    } else {
        $log[] = 'Nao encontrado na origem: ' . $target;
    }
}

removeDir($tmpDir);

// Baixa imagens de produtos que ainda não existem localmente
$imgScript = __DIR__ . '/brindes/baixar-imagens.php';
if (file_exists($imgScript)) {
    include $imgScript;
}

echo 'Deploy realizado com sucesso em ' . date('d/m/Y H:i:s') . "\n";
echo implode("\n", $log);
