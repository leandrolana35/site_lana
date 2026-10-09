<?php
// Gera HTML com imagens base64 embutidas para importação em plataforma SMTP
// Acesse: https://llana.com.br/guias/brindes-fim-de-ano/gerar-email.php

header('Content-Type: text/html; charset=utf-8');
header('Content-Disposition: attachment; filename="email-fim-de-ano-brindes.html"');

$base    = dirname(__DIR__, 2);
$siteUrl = 'https://llana.com.br';

function img64($localPath, $url) {
    $data = file_exists($localPath) ? file_get_contents($localPath) : @file_get_contents($url);
    if (empty($data)) return $url;
    $mime = str_ends_with($url, '.png') ? 'image/png' : 'image/jpeg';
    return 'data:' . $mime . ';base64,' . base64_encode($data);
}

$elaine_foto = img64($base . '/images/elaine-lana.png',   $siteUrl . '/images/elaine-lana.png');
$assinatura  = img64($base . '/assets/assinatura-elaine.png', $siteUrl . '/assets/assinatura-elaine.png');
$prod_cad12p = img64($base . '/brindes/CAD12P.jpeg',      $siteUrl . '/brindes/CAD12P.jpeg');
$prod_93591  = img64($base . '/brindes/93591.jpeg',       $siteUrl . '/brindes/93591.jpeg');
$prod_51125  = img64($base . '/brindes/51125.jpeg',       $siteUrl . '/brindes/51125.jpeg');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fim de Ano — Cadernos, Canetas e Calendários | LLana Promo</title>
  <!--[if mso]><noscript><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml></noscript><![endif]-->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap');
    body { margin:0; padding:0; background:#FAF8F5; font-family: Inter, -apple-system, Arial, sans-serif; }
    a { color:inherit; }
    .email-wrapper { background:#FAF8F5; padding:24px 16px; }
    @media (max-width:600px) {
      .main-table { width:100% !important; }
      .prod-col { display:block !important; width:100% !important; padding:8px 0 !important; }
    }
  </style>
</head>
<body>
<div class="email-wrapper">

<div style="display:none;max-height:0;overflow:hidden;color:#FAF8F5;font-size:1px;">
  Dezembro se aproxima. Cadernos, canetas e calendários personalizados que ficam com seu cliente o ano inteiro. Veja as sugestões da LLana Promo.
</div>

<table class="main-table" width="600" cellpadding="0" cellspacing="0" align="center"
       style="max-width:600px;width:100%;margin:0 auto;background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 1px 3px rgba(28,25,23,.06),0 4px 20px rgba(28,25,23,.09);">

  <!-- LOGO BAR -->
  <tr>
    <td style="background:#1c1c2e;padding:16px 28px;">
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <span style="font-size:18px;font-weight:900;color:#ffffff;letter-spacing:-.03em;">LL<span style="color:#f0b429;">ana</span></span>
            <span style="font-size:11px;font-weight:600;color:rgba(255,255,255,.55);margin-left:6px;letter-spacing:.02em;">Promo &amp; Gifts</span>
          </td>
          <td align="right">
            <span style="font-size:10px;font-weight:700;color:rgba(255,255,255,.5);letter-spacing:.08em;text-transform:uppercase;">🎁 FIM DE ANO</span>
          </td>
        </tr>
      </table>
    </td>
  </tr>

  <!-- ELAINE INTRO -->
  <tr>
    <td style="background:#ffffff;padding:32px 28px 24px;">
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td style="text-align:center;padding-bottom:24px;">
            <img src="<?= $elaine_foto ?>" alt="Elaine Lana" width="72" height="72"
                 style="border-radius:50%;object-fit:cover;display:block;margin:0 auto 10px;border:3px solid #f0b429;" />
            <p style="margin:0;font-size:14px;font-weight:800;color:#1C1917;">Elaine Lana</p>
            <p style="margin:2px 0 0;font-size:11px;color:#78716C;">Fundadora · LLana Promo & Gifts</p>
          </td>
        </tr>
        <tr>
          <td>
            <p style="margin:0 0 14px;font-size:15px;color:#1C1917;line-height:1.6;font-family:Inter,Arial,sans-serif;">
              Olá, <strong>{nome}</strong>! 🎁
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              O ano está chegando ao fim — e eu sempre digo que dezembro é a prova de quem planejou e quem deixou para depois. 😅
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Essa época é muito especial: é quando agradecemos os clientes que ficaram, os parceiros que confiaram e a equipe que fez tudo acontecer. E o brinde certo diz muito mais do que qualquer e-mail de fim de ano genérico.
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Separei três categorias que funcionam muito bem nesse período: <strong style="color:#1C1917;">cadernos personalizados</strong> (que acompanham o cliente em 2027), <strong style="color:#1C1917;">canetas premium</strong> (que ficam no bolso e nas reuniões) e <strong style="color:#1C1917;">calendários de mesa</strong> (que ficam na frente do cliente o ano inteiro, com o seu logo). 📅
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              O segredo do calendário: ele gera centenas de impressões da sua marca por ano, com um custo por impacto que nenhuma mídia online bate. É o brinde mais estratégico que existe para quem quer ser lembrado.
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Mas atenção: novembro é o mês certo para fechar. Quem espera dezembro paga mais caro, tem prazo apertado ou não consegue personalizar. Já vi isso acontecer demais! ⏰
            </p>
            <p style="margin:0 0 24px;font-size:14px;color:#78716C;line-height:1.75;">
              Se você quiser, é só me chamar no WhatsApp — monto uma proposta personalizada com tudo certinho para você fechar o ano com sua marca na frente.
            </p>
            <p style="margin:0;font-size:14px;color:#78716C;line-height:1.75;">
              Um grande abraço 🧡<br>
              <strong style="color:#1C1917;">Elaine</strong>
            </p>
          </td>
        </tr>
      </table>
    </td>
  </tr>

  <!-- WA BUTTON -->
  <tr>
    <td style="background:#ffffff;padding:0 28px 28px;text-align:center;">
      <a href="https://wa.me/5511971071213?text=Ol%C3%A1%20Elaine!%20Vi%20o%20e-mail%20sobre%20brindes%20de%20fim%20de%20ano%20e%20gostaria%20de%20montar%20um%20kit%20personalizado%20para%20minha%20empresa."
         style="display:inline-block;background:#16a34a;color:#ffffff;font-size:15px;font-weight:800;text-decoration:none;padding:14px 32px;border-radius:99px;">
        💬 Falar com a Elaine no WhatsApp
      </a>
    </td>
  </tr>

  <!-- DIVIDER -->
  <tr><td style="padding:0 28px;"><hr style="border:none;border-top:1px solid #F2EFE9;margin:0;"></td></tr>

  <!-- PRODUCTS SECTION -->
  <tr>
    <td style="background:#F9F7F4;padding:24px 28px;">
      <h2 style="margin:0 0 6px;font-size:16px;font-weight:900;color:#1C1917;letter-spacing:-.02em;">Cadernos e Canetas para o Fim de Ano</h2>
      <p style="margin:0 0 18px;font-size:13px;color:#78716C;">Personalizados com a sua marca. Solicite cotação direto pelo botão.</p>

      <!-- ROW 1 -->
      <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:12px;">
        <tr>
          <td class="prod-col" width="50%" style="padding:0 6px 0 0;vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #E2E8F0;border-radius:10px;overflow:hidden;">
              <tr><td style="background:#FFF7ED;padding:16px;text-align:center;">
                <img src="<?= $prod_cad12p ?>" alt="Caderno Andrômeda Plus" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. CAD12P · 📓 Caderno</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Caderno Andrômeda Plus</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Planner executivo premium — perfeito para o cliente levar para 2027.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20de%20fim%20de%20ano%20e%20quero%20cota%C3%A7%C3%A3o%20do%20Caderno%20Andr%C3%B4meda%20Plus%20(Ref.%20CAD12P)."
                   style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-size:12px;font-weight:700;text-decoration:none;padding:8px 4px;border-radius:6px;">💬 Solicitar Cotação</a>
              </td></tr>
            </table>
          </td>
          <td class="prod-col" width="50%" style="padding:0 0 0 6px;vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #E2E8F0;border-radius:10px;overflow:hidden;">
              <tr><td style="background:#FFF7ED;padding:16px;text-align:center;">
                <img src="<?= $prod_93591 ?>" alt="Caderno Wire-o 15x21cm" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. 93591 · 📓 Caderno</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Caderno Wire-o 15×21cm</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Espiral metálico, capa personalizável, ideal para reuniões e projetos.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20de%20fim%20de%20ano%20e%20quero%20cota%C3%A7%C3%A3o%20do%20Caderno%20Wire-o%2015x21cm%20(Ref.%2093591)."
                   style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-size:12px;font-weight:700;text-decoration:none;padding:8px 4px;border-radius:6px;">💬 Solicitar Cotação</a>
              </td></tr>
            </table>
          </td>
        </tr>
      </table>

      <!-- ROW 2 -->
      <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td class="prod-col" width="50%" style="padding:0 6px 0 0;vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #E2E8F0;border-radius:10px;overflow:hidden;">
              <tr><td style="background:#FFF7ED;padding:16px;text-align:center;">
                <img src="<?= $prod_51125 ?>" alt="Caneta Roller Premium" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. 51125 · ✒️ Caneta</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Caneta Roller Premium</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Escrita suave, acabamento metálico — o brinde que fica no bolso do cliente.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20de%20fim%20de%20ano%20e%20quero%20cota%C3%A7%C3%A3o%20da%20Caneta%20Roller%20Premium%20(Ref.%2051125)."
                   style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-size:12px;font-weight:700;text-decoration:none;padding:8px 4px;border-radius:6px;">💬 Solicitar Cotação</a>
              </td></tr>
            </table>
          </td>
          <td class="prod-col" width="50%" style="padding:0 0 0 6px;vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #E2E8F0;border-radius:10px;overflow:hidden;">
              <tr><td style="background:#FFF7ED;padding:16px;text-align:center;height:138px;vertical-align:middle;">
                <p style="margin:0;font-size:40px;line-height:1;">📅</p>
                <p style="margin:6px 0 0;font-size:11px;font-weight:700;color:#78716C;">Calendário de Mesa<br>Personalizado 2027</p>
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Sob Consulta · 📅 Calendário</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Calendário de Mesa 2027</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">365 dias com o seu logo na frente do cliente. O brinde de maior impacto.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20de%20fim%20de%20ano%20e%20quero%20cota%C3%A7%C3%A3o%20de%20Calend%C3%A1rio%20de%20Mesa%202027%20personalizado."
                   style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-size:12px;font-weight:700;text-decoration:none;padding:8px 4px;border-radius:6px;">💬 Solicitar Cotação</a>
              </td></tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>

  <!-- CTA -->
  <tr>
    <td style="background:#1c1c2e;padding:36px 28px;text-align:center;">
      <h2 style="margin:0 0 10px;font-size:20px;font-weight:900;color:#ffffff;letter-spacing:-.02em;">Não deixe para dezembro 🗓️</h2>
      <p style="margin:0 0 22px;font-size:13px;color:rgba(255,255,255,.65);line-height:1.75;max-width:400px;margin-left:auto;margin-right:auto;">
        Quem fecha em novembro garante prazo, melhor preço e personalização sem estresse. Clientes estratégicos merecem ser presenteados antes da correria.
      </p>
      <a href="https://wa.me/5511971071213?text=Ol%C3%A1%20Elaine!%20Vi%20o%20e-mail%20sobre%20brindes%20de%20fim%20de%20ano%20e%20quero%20montar%20meu%20kit%20personalizado."
         style="display:inline-block;background:#f0b429;color:#1c1c2e;font-size:16px;font-weight:900;text-decoration:none;padding:16px 40px;border-radius:99px;margin-bottom:14px;">
        🎁 Montar Meu Kit de Fim de Ano
      </a>
      <br>
      <a href="https://llana.com.br/guias/brindes-fim-de-ano/?utm_source=email&utm_medium=email-marketing&utm_campaign=fim-de-ano&utm_content=email-cta"
         style="display:inline-block;color:rgba(255,255,255,.55);font-size:12px;font-weight:600;text-decoration:underline;margin-top:10px;">
        Ler o guia completo de brindes de fim de ano →
      </a>
    </td>
  </tr>

  <!-- SIGNATURE -->
  <tr>
    <td style="background:#ffffff;padding:24px 28px;border-top:1px solid #F2EFE9;text-align:center;">
      <img src="<?= $assinatura ?>" alt="Assinatura Elaine Lana" width="160" style="display:block;margin:0 auto 14px;" />
    </td>
  </tr>

  <!-- FOOTER -->
  <tr>
    <td style="background:#F5F0EB;padding:20px 28px;border-top:1px solid #E9E5DE;text-align:center;">
      <p style="margin:0 0 6px;font-size:14px;font-weight:900;color:#1C1917;">
        LL<span style="color:#F97316;">ana</span> <span style="font-weight:400;color:#78716C;">Promo &amp; Gifts</span>
      </p>
      <p style="margin:0 0 10px;font-size:12px;color:#A8A29E;line-height:1.6;">
        Brindes corporativos personalizados para empresas B2B<br>
        📱 (11) 97107-1213 · 🌐 <a href="https://llana.com.br" style="color:#F97316;text-decoration:none;">llana.com.br</a>
      </p>
      <p style="margin:0;font-size:11px;color:#A8A29E;">
        Você recebeu este e-mail porque demonstrou interesse em brindes corporativos.<br>
        <a href="#" style="color:#A8A29E;">Cancelar inscrição</a>
      </p>
    </td>
  </tr>

</table>
</div>
</body>
</html>
