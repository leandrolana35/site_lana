<?php
// Gera HTML com imagens base64 embutidas para importação em plataforma SMTP
// Acesse: https://llana.com.br/guias/brindes-sustentaveis/gerar-email.php

header('Content-Type: text/html; charset=utf-8');
header('Content-Disposition: attachment; filename="email-brindes-sustentaveis.html"');

$base    = dirname(__DIR__, 2);
$siteUrl = 'https://llana.com.br';

function img64($localPath, $url) {
    $data = file_exists($localPath) ? file_get_contents($localPath) : @file_get_contents($url);
    if (empty($data)) return $url;
    $mime = str_ends_with($url, '.png') ? 'image/png' : 'image/jpeg';
    return 'data:' . $mime . ';base64,' . base64_encode($data);
}

$elaine_foto = img64($base . '/images/elaine-lana.png',       $siteUrl . '/images/elaine-lana.png');
$assinatura  = img64($base . '/assets/assinatura-elaine.png', $siteUrl . '/assets/assinatura-elaine.png');
$prod_54635  = img64($base . '/brindes/54635.jpeg',           $siteUrl . '/brindes/54635.jpeg');
$prod_8102   = img64($base . '/brindes/8102.jpeg',            $siteUrl . '/brindes/8102.jpeg');
$prod_93492  = img64($base . '/brindes/93492.jpeg',           $siteUrl . '/brindes/93492.jpeg');
$prod_53268  = img64($base . '/brindes/53268.jpeg',           $siteUrl . '/brindes/53268.jpeg');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brindes Sustentáveis para Empresas | LLana Promo</title>
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
  Sustentabilidade em forma de brinde: garrafas reutilizáveis e cadernos reciclados que ficam com seu cliente e comunicam os valores da sua empresa.
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
            <span style="font-size:10px;font-weight:700;color:rgba(255,255,255,.5);letter-spacing:.08em;text-transform:uppercase;">🌱 BRINDES SUSTENTÁVEIS</span>
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
              Olá, <strong>{nome}</strong>! 🌱
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Você já parou para pensar o que o brinde que você distribui diz sobre a sua empresa? Não o que está escrito nele — o que ele comunica sobre os seus valores?
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Isso é algo que eu penso muito. Porque hoje, cada vez mais, as empresas B2B estão sendo avaliadas não só pelo que fazem, mas pelo que praticam. E o brinde corporativo é uma das formas mais visíveis — e mais esquecidas — de demonstrar essa consistência. 🍃
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Pensando nisso, montei uma seleção especial de <strong style="color:#1C1917;">brindes sustentáveis</strong> para empresas: <strong style="color:#1C1917;">garrafas reutilizáveis de aço inox</strong> que substituem centenas de copos descartáveis por ano, e <strong style="color:#1C1917;">cadernos com papel reciclado</strong> que ficam com o cliente e carregam sua marca por mais de um ano.
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              O mais interessante é que esses produtos não são mais caros que os convencionais — na verdade, quando você calcula o custo por impressão da sua marca ao longo do tempo, eles saem muito mais baratos. Uma garrafa de qualidade que fica com o cliente por 3 anos vale bem mais do que 10 canetas plásticas. 📊
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Tenho clientes que usam esses brindes em lançamento de relatório de ESG, no onboarding de novos colaboradores, no Dia do Meio Ambiente (5 de junho) e até no fim de ano — como alternativa mais sofisticada ao kit tradicional. Funciona muito bem em todos esses contextos! 🌿
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Todos os produtos abaixo podem ser personalizados com o logo da sua empresa: gravação a laser na garrafa, relevo seco na capa do caderno. Sem tinta, sem químicos — elegante e eco de verdade.
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Se quiser explorar mais, escrevi um guia completo sobre brindes sustentáveis lá no nosso site — tem exemplos, certificações, ROI calculado e tudo. Mas se você preferir ir direto ao ponto, é só me chamar! 😊
            </p>
            <p style="margin:0 0 24px;font-size:14px;color:#78716C;line-height:1.75;">
              Monto uma proposta personalizada para você em menos de 24 horas.
            </p>
            <p style="margin:0;font-size:14px;color:#78716C;line-height:1.75;">
              Um abraço verde 🧡<br>
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
      <a href="https://wa.me/5511971071213?text=Ol%C3%A1%20Elaine!%20Vi%20o%20e-mail%20sobre%20brindes%20sustent%C3%A1veis%20e%20gostaria%20de%20montar%20um%20kit%20eco%20personalizado%20para%20minha%20empresa."
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
      <h2 style="margin:0 0 6px;font-size:16px;font-weight:900;color:#1C1917;letter-spacing:-.02em;">Seleção de Brindes Sustentáveis</h2>
      <p style="margin:0 0 18px;font-size:13px;color:#78716C;">Garrafas reutilizáveis e cadernos reciclados personalizados com a sua marca.</p>

      <!-- ROW 1 -->
      <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:12px;">
        <tr>
          <td class="prod-col" width="50%" style="padding:0 6px 0 0;vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #E2E8F0;border-radius:10px;overflow:hidden;">
              <tr><td style="background:#F0FDF4;padding:16px;text-align:center;">
                <img src="<?= $prod_54635 ?>" alt="Garrafa Squeeze Sustentável" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. 54635 · 🍶 Garrafa</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Garrafa Squeeze Ecológica</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Material reciclável, personalização a laser. Substitui mais de 500 copos descartáveis por ano.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20sobre%20brindes%20sustent%C3%A1veis%20e%20quero%20cota%C3%A7%C3%A3o%20da%20Garrafa%20Squeeze%20(Ref.%2054635)."
                   style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-size:12px;font-weight:700;text-decoration:none;padding:8px 4px;border-radius:6px;">💬 Solicitar Cotação</a>
              </td></tr>
            </table>
          </td>
          <td class="prod-col" width="50%" style="padding:0 0 0 6px;vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #E2E8F0;border-radius:10px;overflow:hidden;">
              <tr><td style="background:#F0FDF4;padding:16px;text-align:center;">
                <img src="<?= $prod_8102 ?>" alt="Garrafa Térmica Inox" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. 8102 · 🍶 Garrafa</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Garrafa Térmica Inox Premium</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Aço inox, vida útil de 5+ anos. Gravação a laser — o brinde eco de maior impacto e durabilidade.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20sobre%20brindes%20sustent%C3%A1veis%20e%20quero%20cota%C3%A7%C3%A3o%20da%20Garrafa%20T%C3%A9rmica%20Inox%20(Ref.%208102)."
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
              <tr><td style="background:#F0FDF4;padding:16px;text-align:center;">
                <img src="<?= $prod_93492 ?>" alt="Caderno Reciclado" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. 93492 · 📓 Caderno</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Caderno com Papel Reciclado</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Papel reciclado, capa personalizável com relevo seco. Elegante e eco — fica com o cliente por um ano.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20sobre%20brindes%20sustent%C3%A1veis%20e%20quero%20cota%C3%A7%C3%A3o%20do%20Caderno%20Reciclado%20(Ref.%2093492)."
                   style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-size:12px;font-weight:700;text-decoration:none;padding:8px 4px;border-radius:6px;">💬 Solicitar Cotação</a>
              </td></tr>
            </table>
          </td>
          <td class="prod-col" width="50%" style="padding:0 0 0 6px;vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #E2E8F0;border-radius:10px;overflow:hidden;">
              <tr><td style="background:#F0FDF4;padding:16px;text-align:center;">
                <img src="<?= $prod_53268 ?>" alt="Caderno Executivo Eco" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. 53268 · 📓 Caderno</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Caderno Executivo Eco</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Capa em material eco, acabamento premium. Ideal para kits de onboarding e ações de ESG.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20sobre%20brindes%20sustent%C3%A1veis%20e%20quero%20cota%C3%A7%C3%A3o%20do%20Caderno%20Executivo%20Eco%20(Ref.%2053268)."
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
      <h2 style="margin:0 0 10px;font-size:20px;font-weight:900;color:#ffffff;letter-spacing:-.02em;">Sua marca alinhada com seus valores 🌿</h2>
      <p style="margin:0 0 22px;font-size:13px;color:rgba(255,255,255,.65);line-height:1.75;max-width:400px;margin-left:auto;margin-right:auto;">
        Consultoria gratuita, sugestão de kit eco para o seu contexto e orçamento em até 24 horas. Atendemos empresas que querem consistência entre discurso e prática.
      </p>
      <a href="https://wa.me/5511971071213?text=Ol%C3%A1%20Elaine!%20Vi%20o%20e-mail%20sobre%20brindes%20sustent%C3%A1veis%20e%20quero%20montar%20um%20kit%20eco%20personalizado."
         style="display:inline-block;background:#f0b429;color:#1c1c2e;font-size:16px;font-weight:900;text-decoration:none;padding:16px 40px;border-radius:99px;margin-bottom:14px;">
        🌱 Montar Meu Kit Sustentável
      </a>
      <br>
      <a href="https://llana.com.br/guias/brindes-sustentaveis/?utm_source=email&utm_medium=email-marketing&utm_campaign=brindes-sustentaveis&utm_content=email-cta"
         style="display:inline-block;color:rgba(255,255,255,.55);font-size:12px;font-weight:600;text-decoration:underline;margin-top:10px;">
        Ler o guia completo de brindes sustentáveis →
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
