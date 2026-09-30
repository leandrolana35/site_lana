# LLana Promo — Instruções para Claude Code

## Projeto
Site estático em HTML/CSS/JS hospedado na HostGator (llana.com.br).
Deploy via GitHub Actions → webhook `sitesync.php` (baixa zip do main e copia os diretórios listados em `$copyTargets`).

## E-mail Marketing — Padrão obrigatório

Sempre que for solicitado um e-mail marketing, seguir este formato:

### Estrutura do e-mail
1. **Arquivo de template**: criar em `brindes/[categoria]/email-marketing.html` (não em `emails/`, pois `brindes/` é sync confiável)
2. **Script gerador**: criar `brindes/[categoria]/gerar-email.php` junto — ele lê as imagens do disco, converte para base64 e faz download do HTML com tudo embutido
3. **URL de download**: `https://llana.com.br/brindes/[categoria]/gerar-email.php`

### Layout do e-mail
- **Cabeçalho**: fundo `#1c1c2e` com "LLana Promo & Gifts" (gifts em `#f0b429`), alinhado à direita
- **Bloco pessoal da Elaine**: foto circular (`images/elaine-lana.png`) + nome + cargo, seguido de texto amigável/pessoal (8–12 parágrafos)
- **Tom**: pessoal e descontraído, como se a Elaine estivesse escrevendo à mão, com emojis naturais
- **Botão WhatsApp verde**: `https://wa.me/5511971071213` com mensagem pré-preenchida contextual
- **Grade de produtos**: 2 colunas × N linhas; cada card tem imagem 130×130, ref. em laranja (`#d97706`), nome do produto, botão "Solicitar Cotação" escuro (`#1c1c2e`)
- **CTA final**: fundo `#1c1c2e`, texto de urgência, botão amarelo (`#f0b429`)
- **Assinatura**: imagem `assets/assinatura-elaine.png` + rodapé discreto
- **Table-based layout**: usar `<table>` para compatibilidade com clientes de e-mail
- **Imagens dos produtos**: usar URLs de `https://llana.com.br/brindes/[ref].jpeg` no template HTML; no `gerar-email.php` converter para base64 para envio por SMTP

### Produtos
- Usar produtos da página de destino relevante (ex: `brindes/kits/fim-de-ano/index.html`)
- Sempre verificar quais refs de imagem existem na página para garantir que estão no servidor
- WhatsApp: `(11) 97107-1213` → `5511971071213`

### Exemplo de referência
- Template: `brindes/kits/fim-de-ano/email-marketing.html`
- Gerador: `brindes/kits/fim-de-ano/gerar-email.php`
