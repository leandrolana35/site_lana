<?php
/**
 * Gera o e-mail da campanha "Brindes que Cabem no Bolso" com
 * imagens embutidas em base64 — pronto para envio por SMTP.
 */

$html = file_get_contents(__DIR__ . '/email-marketing.html');

// Encontra todas as URLs de imagem do domínio llana.com.br
preg_match_all(
    '#https://llana\.com\.br(/[^\s"\']+\.(?:jpeg|jpg|png|gif))#i',
    $html,
    $matches
);
$paths = array_unique($matches[1]);

foreach ($paths as $path) {
    $local = $_SERVER['DOCUMENT_ROOT'] . $path;
    if (!file_exists($local)) continue;

    $data    = base64_encode(file_get_contents($local));
    $ext     = strtolower(pathinfo($local, PATHINFO_EXTENSION));
    $mime    = match ($ext) {
        'png'  => 'image/png',
        'gif'  => 'image/gif',
        default => 'image/jpeg',
    };
    $inline  = "data:{$mime};base64,{$data}";
    $html    = str_replace("https://llana.com.br{$path}", $inline, $html);
}

header('Content-Type: text/html; charset=utf-8');
header('Content-Disposition: attachment; filename="email-bolso7-llana.html"');
header('Cache-Control: no-cache');
echo $html;
