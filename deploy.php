<?php
$isCli = php_sapi_name() === 'cli';
if (!$isCli) {
    $token = getenv('DEPLOY_TOKEN');
    $provided = $_SERVER['HTTP_X_DEPLOY_TOKEN'] ?? $_GET['token'] ?? '';
    if (!$token || $provided !== $token) {
        http_response_code(403);
        die('Unauthorized');
    }
}
$zipUrl = 'https://github.com/leandrolana35/site_lana/archive/refs/heads/main.zip';
$tmpZip = sys_get_temp_dir() . '/site_lana_' . time() . '.zip';
$tmpDir = sys_get_temp_dir() . '/site_lana_' . time();

$zip = file_get_contents($zipUrl);
if ($zip === false) { http_response_code(500); die('Falha ao baixar do GitHub'); }
file_put_contents($tmpZip, $zip);

$archive = new ZipArchive();
if ($archive->open($tmpZip) !== true) { http_response_code(500); die('Falha ao abrir ZIP'); }
mkdir($tmpDir, 0755, true);
$archive->extractTo($tmpDir);
$archive->close();
unlink($tmpZip);

$srcBase = $tmpDir . '/site_lana-main';
$dstBase = __DIR__;

$copyTargets = ['index.html', 'brindes', 'tech', 'css', 'js'];

function copyRecursive($src, $dst) {
    if (!is_dir($dst)) mkdir($dst, 0755, true);
    foreach (scandir($src) as $item) {
        if ($item === '.' || $item === '..') continue;
        $s = $src . '/' . $item;
        $d = $dst . '/' . $item;
        is_dir($s) ? copyRecursive($s, $d) : copy($s, $d);
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
    if (is_dir($src)) copyRecursive($src, $dst);
    elseif (is_file($src)) copy($src, $dst);
}

removeDir($tmpDir);

echo 'Deploy realizado com sucesso em ' . date('d/m/Y H:i:s');
