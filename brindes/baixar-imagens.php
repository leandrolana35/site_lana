<?php
// Executa somente via CLI (cron ou terminal cPanel) ou com token correto
$isCli = php_sapi_name() === 'cli';
if (!$isCli) {
    $token = getenv('DEPLOY_TOKEN');
    $provided = $_GET['token'] ?? '';
    if (!$token || $provided !== $token) {
        http_response_code(403);
        die('Unauthorized');
    }
}

$base = 'https://unitybrindes.com.br/assets/imagens/imgprods/';
$dest = __DIR__ . '/';

$images = [
    '53268.jpeg'  => '53268-caderno-a5-palha-algodao6998744e6a549.jpeg',
    '53654.jpeg'  => '53654-caderno-dois-em-um69fe7263c98fc.jpeg',
    '93087.jpeg'  => '93087-caderno-a5-couro-reciclado68cc468ed4de8.jpeg',
    '93270.jpeg'  => 'caderno-932706998711c0dc3c.jpeg',
    '93275.jpeg'  => 'caderno-a5-9327568cc43bc74bd4.jpeg',
    '93285.jpeg'  => '93285-caderno-b6-capa-dura-cortica-rpet699873599c71a.jpeg',
    '93419.jpeg'  => 'caderno-934196998711f815e3.jpeg',
    '93428.jpeg'  => 'cadernos-wireo-934286998696c67901.jpeg',
    '93474.jpeg'  => '93474-caderno-pp-antibateriano69987236a41f3.jpeg',
    '93492.jpeg'  => 'blocos-handy-de-bolso-93492699869706023d.jpeg',
    '93493.jpeg'  => 'blocos-handy-de-bolso-93493-6a049f0863071.jpeg',
    '93495.jpeg'  => 'cadernos-brochura-9349569986971d5848.jpeg',
    '93591.jpeg'  => 'caderno-9359168cc43233c2b1.jpeg',
    '93592.jpeg'  => 'caderno-93592699871203f5f6.jpeg',
    '93707.jpeg'  => 'caderno-937076998715ed8528.jpeg',
    'CAD11B.jpeg' => 'cad11b-caderno-personalizado-capa-dura-fotolux-brilho-6a26d25998f83.jpeg',
    'CAD11F.jpeg' => 'cadernos-wireo-cad11f-6a26d25a6fb04.jpeg',
    'CAD11K.jpeg' => 'cadernos-wireo-cad11k-6a26d25b3dea2.jpeg',
    'CAD11M.jpeg' => 'cadernos_wireo_metalizados_cad11m-6a26d5e0579b9.jpeg',
    'CAD11R.jpeg' => 'cadernos-wireo-cad11r-6a26d2612f8b9.jpeg',
    'CAD12.jpeg'  => 'cadernos-wireo-cad12699f3a6e74ba6.jpeg',
    'CAD12P.jpeg' => 'cadernos-wireo-cad12p68cc4508e0362.jpeg',
    'CAD12V.jpeg' => 'cadernos-wireo-cad12v68cc4509ad852.jpeg',
    'CAD13.jpeg'  => 'cadernos_wire-o_coloridos_cad1368cc450e5b36e.jpeg',
    'CAD13P.jpeg' => 'cad13p699f3a6993b5b.jpeg',
];

$ok = 0; $skip = 0; $err = 0;

foreach ($images as $local => $remote) {
    $path = $dest . $local;
    if (file_exists($path) && filesize($path) > 5000) {
        echo "SKIP: $local (já existe)\n";
        $skip++;
        continue;
    }
    $data = @file_get_contents($base . $remote);
    if ($data === false || strlen($data) < 1000) {
        echo "ERRO: $local\n";
        $err++;
        continue;
    }
    file_put_contents($path, $data);
    echo "OK:   $local (" . round(strlen($data)/1024) . " KB)\n";
    $ok++;
    usleep(200000); // 200ms entre downloads
}

echo "\nConcluído: $ok baixados, $skip pulados, $err erros\n";
