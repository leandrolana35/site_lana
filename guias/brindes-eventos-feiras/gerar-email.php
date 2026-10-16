<?php
// Gera HTML com imagens base64 embutidas para importação em plataforma SMTP
// Acesse: https://llana.com.br/guias/brindes-eventos-feiras/gerar-email.php

header('Content-Type: text/html; charset=utf-8');
header('Content-Disposition: attachment; filename="email-brindes-eventos-feiras.html"');

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
$prod_93591  = img64($base . '/brindes/93591.jpeg',           $siteUrl . '/brindes/93591.jpeg');
$prod_53654  = img64($base . '/brindes/53654.jpeg',           $siteUrl . '/brindes/53654.jpeg');
$prod_51125  = img64($base . '/brindes/51125.jpeg',           $siteUrl . '/brindes/51125.jpeg');
$prod_94058  = img64($base . '/brindes/94058.jpeg',           $siteUrl . '/brindes/94058.jpeg');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brindes para Eventos e Feiras Corporativas | LLana Promo</title>
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
  Feiras e eventos corporativos: o brinde certo atrai para o estande, inicia a conversa e lembra sua marca por meses depois do evento.
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
            <span style="font-size:10px;font-weight:700;color:rgba(255,255,255,.5);letter-spacing:.08em;text-transform:uppercase;">🎪 EVENTOS & FEIRAS</span>
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
              Olá, <strong>{nome}</strong>! 🎪
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Você tem um evento ou feira no calendário? Então já é hora de planejar os brindes — e eu sei que isso é sempre uma das coisas que fica para o último minuto. Mas pode deixar, vou te ajudar a fazer certo! 😄
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Depois de atender empresas em centenas de feiras corporativas, aprendi uma coisa: o brinde de evento tem um papel completamente diferente do brinde de relacionamento. No estande, você tem 30 segundos para criar uma primeira impressão. O brinde certo é o que faz alguém parar, sorrir e começar uma conversa. 🎯
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              O que eu gosto de recomendar é uma estratégia de dois níveis: um <strong style="color:#1C1917;">item básico de volume</strong> para o fluxo geral do estande, e um <strong style="color:#1C1917;">kit premium</strong> para os decisores que você identifica durante o evento. Assim você não desperdiça investimento em quem passa apressado, e encanta quem realmente importa. ✨
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Separei quatro itens que funcionam muito bem em eventos B2B: <strong style="color:#1C1917;">cadernos para anotações nas palestras</strong> (o visitante usa na hora e carrega o seu logo pelo evento inteiro), <strong style="color:#1C1917;">canetas de qualidade</strong> (que ficam no bolso depois), e <strong style="color:#1C1917;">garrafas térmicas</strong> para o kit premium.
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              Uma dica que sempre dou: personalize o caderno com o nome do evento na capa. "ExpoSaúde 2027 + logo da sua empresa" — o visitante lembra de onde veio meses depois. É um detalhe que faz toda a diferença na memória da marca. 📓
            </p>
            <p style="margin:0 0 14px;font-size:14px;color:#78716C;line-height:1.75;">
              E sobre prazo: para feiras com data fixa, recomendo sempre fechar o pedido com pelo menos 15 dias de antecedência para itens simples, 20 para kits. Deixar para a última semana sempre complica — e estresse de entrega não combina com estande. ⏰
            </p>
            <p style="margin:0 0 24px;font-size:14px;color:#78716C;line-height:1.75;">
              Me conta qual é o evento, quantas pessoas você espera atender, e eu já monto uma proposta completa com kit básico e premium, prazo e entrega. Simples assim!
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
      <a href="https://wa.me/5511971071213?text=Ol%C3%A1%20Elaine!%20Vi%20o%20e-mail%20sobre%20brindes%20para%20eventos%20e%20feiras%20e%20gostaria%20de%20montar%20um%20kit%20para%20meu%20pr%C3%B3ximo%20evento."
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
      <h2 style="margin:0 0 6px;font-size:16px;font-weight:900;color:#1C1917;letter-spacing:-.02em;">Seleção para Eventos e Feiras</h2>
      <p style="margin:0 0 18px;font-size:13px;color:#78716C;">Itens básicos e premium personalizados com a sua marca.</p>

      <!-- ROW 1 -->
      <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:12px;">
        <tr>
          <td class="prod-col" width="50%" style="padding:0 6px 0 0;vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #E2E8F0;border-radius:10px;overflow:hidden;">
              <tr><td style="background:#FFF7ED;padding:16px;text-align:center;">
                <img src="<?= $prod_93591 ?>" alt="Caderno Wire-o para Eventos" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. 93591 · 📓 Caderno</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Caderno Wire-o para Eventos</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Capa personalizável com nome do evento + logomarca. O visitante anota durante as palestras e leva o seu logo para casa.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20sobre%20brindes%20para%20eventos%20e%20quero%20cota%C3%A7%C3%A3o%20do%20Caderno%20Wire-o%20(Ref.%2093591)."
                   style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-size:12px;font-weight:700;text-decoration:none;padding:8px 4px;border-radius:6px;">💬 Solicitar Cotação</a>
              </td></tr>
            </table>
          </td>
          <td class="prod-col" width="50%" style="padding:0 0 0 6px;vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #E2E8F0;border-radius:10px;overflow:hidden;">
              <tr><td style="background:#FFF7ED;padding:16px;text-align:center;">
                <img src="<?= $prod_51125 ?>" alt="Caneta Roller Premium" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. 51125 · ✒️ Caneta</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Caneta Roller Premium</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Escrita suave, acabamento metálico. O item básico de qualidade que fica no bolso depois do evento.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20sobre%20brindes%20para%20eventos%20e%20quero%20cota%C3%A7%C3%A3o%20da%20Caneta%20Roller%20Premium%20(Ref.%2051125)."
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
                <img src="<?= $prod_53654 ?>" alt="Caderno Executivo Premium" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. 53654 · 📓 Caderno</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Caderno Executivo Premium</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Para o kit premium de decisores — acabamento superior, capa em relevo. O brinde que diferencia no estande.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20sobre%20brindes%20para%20eventos%20e%20quero%20cota%C3%A7%C3%A3o%20do%20Caderno%20Executivo%20Premium%20(Ref.%2053654)."
                   style="display:block;text-align:center;background:#1c1c2e;color:#ffffff;font-size:12px;font-weight:700;text-decoration:none;padding:8px 4px;border-radius:6px;">💬 Solicitar Cotação</a>
              </td></tr>
            </table>
          </td>
          <td class="prod-col" width="50%" style="padding:0 0 0 6px;vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #E2E8F0;border-radius:10px;overflow:hidden;">
              <tr><td style="background:#FFF7ED;padding:16px;text-align:center;">
                <img src="<?= $prod_94058 ?>" alt="Garrafa Térmica Kit Premium" width="110" height="110" style="object-fit:contain;display:block;margin:auto;" />
              </td></tr>
              <tr><td style="padding:12px;">
                <p style="margin:0 0 3px;font-size:10px;font-weight:700;color:#d97706;letter-spacing:.05em;text-transform:uppercase;">Ref. 94058 · 🍶 Garrafa</p>
                <p style="margin:0 0 10px;font-size:13px;font-weight:600;color:#1C1917;line-height:1.4;">Garrafa Térmica — Kit Premium</p>
                <p style="margin:0 0 10px;font-size:11px;color:#78716C;line-height:1.5;">Item âncora do kit premium. Alta percepção de valor, uso diário — seu logo visível fora do evento.</p>
                <a href="https://wa.me/5511971071213?text=Ol%C3%A1!%20Vi%20o%20e-mail%20sobre%20brindes%20para%20eventos%20e%20quero%20cota%C3%A7%C3%A3o%20da%20Garrafa%20T%C3%A9rmica%20(Ref.%2094058)."
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
      <h2 style="margin:0 0 10px;font-size:20px;font-weight:900;color:#ffffff;letter-spacing:-.02em;">Seu próximo evento começa aqui 🎯</h2>
      <p style="margin:0 0 22px;font-size:13px;color:rgba(255,255,255,.65);line-height:1.75;max-width:400px;margin-left:auto;margin-right:auto;">
        Me conta o evento, o público esperado e o orçamento — e eu monto a estratégia de brinde completa: kit básico, kit premium, personalização e prazo de entrega garantido.
      </p>
      <a href="https://wa.me/5511971071213?text=Ol%C3%A1%20Elaine!%20Vi%20o%20e-mail%20sobre%20brindes%20para%20eventos%20e%20quero%20planejar%20os%20brindes%20do%20meu%20pr%C3%B3ximo%20evento."
         style="display:inline-block;background:#f0b429;color:#1c1c2e;font-size:16px;font-weight:900;text-decoration:none;padding:16px 40px;border-radius:99px;margin-bottom:14px;">
        🎪 Planejar Brindes do Meu Evento
      </a>
      <br>
      <a href="https://llana.com.br/guias/brindes-eventos-feiras/?utm_source=email&utm_medium=email-marketing&utm_campaign=brindes-eventos-feiras&utm_content=email-cta"
         style="display:inline-block;color:rgba(255,255,255,.55);font-size:12px;font-weight:600;text-decoration:underline;margin-top:10px;">
        Ler o guia completo de brindes para eventos →
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
