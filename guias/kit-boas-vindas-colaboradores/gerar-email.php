<?php
header('Content-Type: text/html; charset=UTF-8');
header('Content-Disposition: attachment; filename="email-kit-boas-vindas.html"');

$base    = dirname(__DIR__, 2);
$siteUrl = 'https://llana.com.br';

function img64($localPath, $url) {
    $data = '';
    if (file_exists($localPath)) {
        $data = file_get_contents($localPath);
    } else {
        $data = @file_get_contents($url);
    }
    if (empty($data)) return $url;
    $mime = (str_ends_with($url, '.png')) ? 'image/png' : 'image/jpeg';
    return 'data:' . $mime . ';base64,' . base64_encode($data);
}

$images = [
    $siteUrl . '/images/elaine-lana.png'       => img64($base . '/images/elaine-lana.png',       $siteUrl . '/images/elaine-lana.png'),
    $siteUrl . '/assets/assinatura-elaine.png'  => img64($base . '/assets/assinatura-elaine.png', $siteUrl . '/assets/assinatura-elaine.png'),
    $siteUrl . '/brindes/CAD12P.jpeg'           => img64($base . '/brindes/CAD12P.jpeg',          $siteUrl . '/brindes/CAD12P.jpeg'),
    $siteUrl . '/brindes/51125.jpeg'            => img64($base . '/brindes/51125.jpeg',           $siteUrl . '/brindes/51125.jpeg'),
    $siteUrl . '/brindes/2095.jpeg'             => img64($base . '/brindes/2095.jpeg',            $siteUrl . '/brindes/2095.jpeg'),
    $siteUrl . '/brindes/54635.jpeg'            => img64($base . '/brindes/54635.jpeg',           $siteUrl . '/brindes/54635.jpeg'),
];

$html = file_get_contents(__DIR__ . '/email-marketing.html');
foreach ($images as $url => $b64) {
    $html = str_replace($url, $b64, $html);
}

echo $html;
