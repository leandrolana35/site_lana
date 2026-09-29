<?php
// Gera o HTML do e-mail com imagens embutidas em base64
// Acesse: https://llana.com.br/brindes/kits/fim-de-ano/gerar-email.php
// Salve a página (Ctrl+S) ou copie o fonte para importar no sistema

$base = __DIR__ . '/../../..'; // raiz do site

function img64($path) {
    if (!file_exists($path)) return '';
    $data = base64_encode(file_get_contents($path));
    $mime = 'image/jpeg';
    if (str_ends_with($path, '.png')) $mime = 'image/png';
    if (str_ends_with($path, '.gif')) $mime = 'image/gif';
    return "data:$mime;base64,$data";
}

$elaine_foto = img64($base . '/images/elaine-lana.png');
$assinatura  = img64($base . '/assets/assinatura-elaine.png');
$prod1 = img64($base . '/brindes/CAD12P.jpeg');
$prod2 = img64($base . '/brindes/CA1823.jpeg');
$prod3 = img64($base . '/brindes/97124.jpeg');
$prod4 = img64($base . '/brindes/94268.jpeg');

header('Content-Type: text/html; charset=utf-8');
header('Content-Disposition: attachment; filename="reta-final-brindes.html"');
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reta Final dos Brindes — Elaine LLana</title>
  <!--[if mso]><noscript><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml></noscript><![endif]-->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
    body { margin:0; padding:0; background:#efefef; font-family: Inter, -apple-system, Arial, sans-serif; }
    a { color:inherit; text-decoration:none; }
    @media (max-width:600px) {
      .main-table { width:100% !important; }
      .prod-cell { display:block !important; width:100% !important; padding:8px 0 !important; }
      .msg-block { padding:28px 20px !important; }
    }
  </style>
</head>
<body>
<div style="background:#efefef; padding:24px 16px;">

<div style="display:none;max-height:0;overflow:hidden;color:#efefef;font-size:1px;">
  Ainda dá tempo de garantir seus brindes corporativos com personalização e entrega no prazo &#8199;&#847;
</div>

<table class="main-table" width="600" cellpadding="0" cellspacing="0" align="center"
  style="max-width:600px;width:100%;margin:0 auto;background:#ffffff;border-radius:14px;overflow:hidden;box-shadow:0 2px 16px rgba(0,0,0,.10);">

  <tr>
    <td style="background:#1c1c2e;padding:14px 28px;text-align:right;">
      <span style="font-family:Inter,Arial,sans-serif;font-size:12px;font-weight:700;color:#ffffff;letter-spacing:.08em;text-transform:uppercase;">
        LLana <span style="color:#f0b429;">Promo &amp; Gifts</span>
      </span>
    </td>
  </tr>

  <tr>
    <td class="msg-block" style="padding:36px 40px 28px;background:#ffffff;">
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td width="72" valign="top">
            <?php if ($elaine_foto): ?>
            <img src="<?= $elaine_foto ?>" alt="Elaine Lana" width="60" height="60"
              style="width:60px;height:60px;border-radius:50%;object-fit:cover;border:3px solid #f0b429;display:block;" />
            <?php endif; ?>
          </td>
          <td valign="middle" style="padding-left:14px;">
            <p style="margin:0;font-size:15px;font-weight:700;color:#1c1c2e;font-family:Inter,Arial,sans-serif;">Elaine Lana</p>
            <p style="margin:4px 0 0;font-size:12px;color:#888;font-family:Inter,Arial,sans-serif;">Consultora Comercial · LLana Promo</p>
          </td>
        </tr>
      </table>

      <div style="margin-top:24px;font-family:Inter,Arial,sans-serif;font-size:15px;color:#333;line-height:1.75;">
        <p style="margin:0 0 14px;">Oi! Tudo bem por aí? 😊</p>
        <p style="margin:0 0 14px;">Aqui é a <strong>Elaine</strong>, da LLana Promo — escrevo isso pessoalmente,
        sem robô digitando no meu lugar. (Ele me ajuda em outras coisas, mas o cafezinho ainda sou eu que faço. ☕)</p>
        <p style="margin:0 0 14px;">Fui dar uma olhada no calendário essa semana e <em>quase</em> tive um susto:
        outubro chegou, o Q4 abriu, e o fim do ano vem em velocidade de bala.</p>
        <p style="margin:0 0 14px;">Parece que foi ontem que a gente estava no Carnaval, e de repente já é hora
        de pensar em brindes de fim de ano? Pois é. Acontece todo ano. 😅</p>
        <p style="margin:0 0 14px;">E todo ano tem uma galera que me chama em pânico lá pelo final de novembro:
        <em>"Elaine, preciso de 500 kits para entregar sexta que vem..."</em> 🫠</p>
        <p style="margin:0 0 14px;">Então vim aqui adiantar: o momento ideal para garantir brindes corporativos
        com <strong>personalização de qualidade</strong> e <strong>entrega dentro do prazo</strong> é
        <span style="color:#d97706;font-weight:700;">agora</span>.
        Quando chegar dezembro, os prazos apertam e entramos no modo correria total.</p>
        <p style="margin:0 0 14px;">Separei alguns favoritos do nosso kit de fim de ano — produtos que a gente
        mais pede, que encantam, e que ficam lindos com o logo da sua empresa.</p>
        <p style="margin:0;">Se algum te interessar (ou se quiser montar um kit personalizado do zero),
        é só me chamar no WhatsApp. Respondo rapidinho! 👇</p>
      </div>

      <div style="margin-top:24px;text-align:center;">
        <a href="https://wa.me/5511971071213?text=Oi%20Elaine%21%20Vi%20seu%20e-mail%20e%20quero%20saber%20mais%20sobre%20os%20brindes%20de%20fim%20de%20ano."
          style="display:inline-block;background:#25d366;color:#ffffff;font-family:Inter,Arial,sans-serif;font-size:15px;font-weight:700;text-decoration:none;padding:13px 32px;border-radius:99px;">
          💬 Chamar a Elaine no WhatsApp
        </a>
      </div>
    </td>
  </tr>

  <tr><td style="padding:0 40px;"><hr style="border:none;border-top:1px solid #e8e8e8;margin:0;" /></td></tr>

  <tr>
    <td style="background:#f9f8f6;padding:24px 40px 12px;">
      <p style="margin:0;font-family:Inter,Arial,sans-serif;font-size:13px;font-weight:700;color:#888;letter-spacing:.07em;text-transform:uppercase;">Minha seleção do momento</p>
      <h2 style="margin:6px 0 0;font-family:Inter,Arial,sans-serif;font-size:19px;font-weight:700;color:#1c1c2e;letter-spacing:-.02em;">
        Kit Fim de Ano — favoritos da temporada
      </h2>
    </td>
  </tr>

  <!-- LINHA 1 -->
  <tr>
    <td style="background:#f9f8f6;padding:12px 32px 0;">
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td class="prod-cell" width="50%" style="padding:0 8px 16px;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">
              <tr><td style="background:#f3f4f6;padding:16px;text-align:center;">
                <?php if ($prod1): ?>
                <img src="<?= $prod1 ?>" alt="Caderno Andrômeda Plus" width="130" height="130"
                  style="display:block;margin:auto;object-fit:contain;width:130px;height:130px;" />
                <?php endif; ?>
              </td></tr>
              <tr><td style="padding:14px;">
                <p style="margin:0 0 3px;font-family:Inter,Arial,sans-serif;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.06em;text-transform:uppercase;">Ref. CAD12P</p>
                <p style="margin:0 0 12px;font-family:Inter,Arial,sans-serif;font-size:14px;font-weight:600;color:#1c1c2e;line-height:1.35;">Caderno Andrômeda Plus</p>
                <a href="https://wa.me/5511971071213?text=Oi%20Elaine%21%20Quero%20cota%C3%A7%C3%A3o%20do%20Caderno%20Andr%C3%B4meda%20Plus%20%28Ref.%20CAD12P%29."
                  style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-family:Inter,Arial,sans-serif;font-size:12px;font-weight:700;padding:9px 4px;border-radius:7px;">
                  Solicitar Cotação
                </a>
              </td></tr>
            </table>
          </td>
          <td class="prod-cell" width="50%" style="padding:0 8px 16px;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">
              <tr><td style="background:#f3f4f6;padding:16px;text-align:center;">
                <?php if ($prod2): ?>
                <img src="<?= $prod2 ?>" alt="Caneca Inox Parede Dupla" width="130" height="130"
                  style="display:block;margin:auto;object-fit:contain;width:130px;height:130px;" />
                <?php endif; ?>
              </td></tr>
              <tr><td style="padding:14px;">
                <p style="margin:0 0 3px;font-family:Inter,Arial,sans-serif;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.06em;text-transform:uppercase;">Ref. CA1823</p>
                <p style="margin:0 0 12px;font-family:Inter,Arial,sans-serif;font-size:14px;font-weight:600;color:#1c1c2e;line-height:1.35;">Caneca Inox Parede Dupla</p>
                <a href="https://wa.me/5511971071213?text=Oi%20Elaine%21%20Quero%20cota%C3%A7%C3%A3o%20da%20Caneca%20Inox%20Parede%20Dupla%20%28Ref.%20CA1823%29."
                  style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-family:Inter,Arial,sans-serif;font-size:12px;font-weight:700;padding:9px 4px;border-radius:7px;">
                  Solicitar Cotação
                </a>
              </td></tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>

  <!-- LINHA 2 -->
  <tr>
    <td style="background:#f9f8f6;padding:0 32px 20px;">
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td class="prod-cell" width="50%" style="padding:0 8px 16px;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">
              <tr><td style="background:#f3f4f6;padding:16px;text-align:center;">
                <?php if ($prod3): ?>
                <img src="<?= $prod3 ?>" alt="Caixa de Som LED com Microfone" width="130" height="130"
                  style="display:block;margin:auto;object-fit:contain;width:130px;height:130px;" />
                <?php endif; ?>
              </td></tr>
              <tr><td style="padding:14px;">
                <p style="margin:0 0 3px;font-family:Inter,Arial,sans-serif;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.06em;text-transform:uppercase;">Ref. 97124</p>
                <p style="margin:0 0 12px;font-family:Inter,Arial,sans-serif;font-size:14px;font-weight:600;color:#1c1c2e;line-height:1.35;">Caixa de Som LED com Microfone</p>
                <a href="https://wa.me/5511971071213?text=Oi%20Elaine%21%20Quero%20cota%C3%A7%C3%A3o%20da%20Caixa%20de%20Som%20LED%20com%20Microfone%20%28Ref.%2097124%29."
                  style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-family:Inter,Arial,sans-serif;font-size:12px;font-weight:700;padding:9px 4px;border-radius:7px;">
                  Solicitar Cotação
                </a>
              </td></tr>
            </table>
          </td>
          <td class="prod-cell" width="50%" style="padding:0 8px 16px;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">
              <tr><td style="background:#f3f4f6;padding:16px;text-align:center;">
                <?php if ($prod4): ?>
                <img src="<?= $prod4 ?>" alt="Squeeze Vidro Tampa Bambu" width="130" height="130"
                  style="display:block;margin:auto;object-fit:contain;width:130px;height:130px;" />
                <?php endif; ?>
              </td></tr>
              <tr><td style="padding:14px;">
                <p style="margin:0 0 3px;font-family:Inter,Arial,sans-serif;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.06em;text-transform:uppercase;">Ref. 94268</p>
                <p style="margin:0 0 12px;font-family:Inter,Arial,sans-serif;font-size:14px;font-weight:600;color:#1c1c2e;line-height:1.35;">Squeeze Vidro Tampa Bambu</p>
                <a href="https://wa.me/5511971071213?text=Oi%20Elaine%21%20Quero%20cota%C3%A7%C3%A3o%20do%20Squeeze%20Vidro%20Tampa%20Bambu%20%28Ref.%2094268%29."
                  style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-family:Inter,Arial,sans-serif;font-size:12px;font-weight:700;padding:9px 4px;border-radius:7px;">
                  Solicitar Cotação
                </a>
              </td></tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>

  <!-- CTA FINAL -->
  <tr>
    <td style="background:#1c1c2e;padding:36px 40px;text-align:center;">
      <p style="margin:0 0 8px;font-family:Inter,Arial,sans-serif;font-size:20px;font-weight:700;color:#ffffff;">
        Não deixa pra última hora 😉
      </p>
      <p style="margin:0 0 24px;font-family:Inter,Arial,sans-serif;font-size:14px;color:#b0b8c8;line-height:1.65;">
        Prazo de produção + personalização + entrega leva tempo.<br>
        Garanta os brindes da sua empresa agora com tranquilidade.
      </p>
      <a href="https://wa.me/5511971071213?text=Oi%20Elaine%21%20Vi%20seu%20e-mail%20e%20quero%20montar%20um%20kit%20de%20brindes%20corporativos."
        style="display:inline-block;background:#f0b429;color:#1c1c2e;font-family:Inter,Arial,sans-serif;font-size:15px;font-weight:800;text-decoration:none;padding:14px 36px;border-radius:99px;">
        💬 Falar com a Elaine agora
      </a>
    </td>
  </tr>

  <!-- ASSINATURA -->
  <tr>
    <td style="background:#ffffff;padding:28px 40px 32px;border-top:1px solid #f0f0f0;">
      <?php if ($assinatura): ?>
      <img src="<?= $assinatura ?>" alt="Elaine Lana — Consultora Comercial — (11) 97107-1213 — comercial@llana.com.br"
        width="300" style="max-width:300px;display:block;" />
      <?php endif; ?>
      <p style="margin:16px 0 0;font-family:Inter,Arial,sans-serif;font-size:11px;color:#aaa;line-height:1.6;">
        LLana Promo &amp; Gifts · São Paulo, SP<br>
        Você recebeu este e-mail porque mantemos contato comercial.<br>
        <a href="https://llana.com.br" style="color:#aaa;text-decoration:underline;">llana.com.br</a>
      </p>
    </td>
  </tr>

</table>
</div>
</body>
</html>
