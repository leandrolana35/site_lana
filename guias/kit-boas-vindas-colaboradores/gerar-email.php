<?php
header('Content-Type: text/html; charset=UTF-8');
header('Content-Disposition: attachment; filename="email-kit-boas-vindas.html"');

$base = dirname(__DIR__, 2);

function img64($path) {
    if (!file_exists($path)) return '';
    $data = base64_encode(file_get_contents($path));
    $mime = str_ends_with($path, '.png') ? 'image/png' : 'image/jpeg';
    return "data:$mime;base64,$data";
}

$elaine_foto  = img64($base . '/images/elaine-lana.png');
$assinatura   = img64($base . '/assets/assinatura-elaine.png');
$prod_cad12p  = img64($base . '/brindes/CAD12P.jpeg');
$prod_51125   = img64($base . '/brindes/51125.jpeg');
$prod_2095    = img64($base . '/brindes/2095.jpeg');
$prod_54635   = img64($base . '/brindes/54635.jpeg');

$html = file_get_contents(__DIR__ . '/email-marketing.html');

$html = str_replace('https://llana.com.br/images/elaine-lana.png',        $elaine_foto  ?: 'https://llana.com.br/images/elaine-lana.png',        $html);
$html = str_replace('https://llana.com.br/assets/assinatura-elaine.png',  $assinatura   ?: 'https://llana.com.br/assets/assinatura-elaine.png',  $html);
$html = str_replace('https://llana.com.br/brindes/CAD12P.jpeg',           $prod_cad12p  ?: 'https://llana.com.br/brindes/CAD12P.jpeg',           $html);
$html = str_replace('https://llana.com.br/brindes/51125.jpeg',            $prod_51125   ?: 'https://llana.com.br/brindes/51125.jpeg',            $html);
$html = str_replace('https://llana.com.br/brindes/2095.jpeg',             $prod_2095    ?: 'https://llana.com.br/brindes/2095.jpeg',             $html);
$html = str_replace('https://llana.com.br/brindes/54635.jpeg',            $prod_54635   ?: 'https://llana.com.br/brindes/54635.jpeg',            $html);

echo $html;
