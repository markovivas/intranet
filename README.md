# Intranet Corporativa Moderna

Tema WordPress moderno para intranet corporativa, focado em usabilidade, integração de notícias, atalhos rápidos, estatísticas, eventos e recursos internos para equipes municipais.

## Recursos Principais

- Layout responsivo e moderno
- Menu lateral personalizável
- Seção de destaques com integração ao WhatsApp
- Atalhos rápidos para Helpdesk, Artes, Diretório, Notícias, Folha de Pagamento, Eventos e Relatórios
- Listagem de notícias e eventos com paginação
- Estatísticas e métricas importantes
- Integração com calendário e eventos via shortcode
- Feed de redes sociais (Instagram)
- Suporte a widgets na barra lateral e rodapé
- Suporte a imagens destacadas e thumbnails customizadas
- Tradução pronta para pt_BR
- Suporte a WebP
- SEO básico (title-tag)
- Lazy loading para imagens

## Estrutura de Pastas

```
wp-content/themes/intranet/
├── assets/
│   └── images/
├── languages/
│   ├── pt_BR.po
│   └── pt_BR.mo
├── template-parts/
│   └── content.php
├── 404.php
├── all-news.php
├── archive.php
├── content-noticia.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── search.php
├── sidebar.php
├── single.php
├── style.css
├── README.md
└── screenshot.png
```

## Instalação

1. Faça upload da pasta do tema para `wp-content/themes/intranet`.
2. Ative o tema pelo painel do WordPress.
3. Certifique-se de que as dependências externas (Font Awesome) estão carregando corretamente.
4. Configure os menus e widgets pelo painel.
5. Para atalhos e eventos, utilize os shortcodes sugeridos ou plugins compatíveis.

## Personalização

- Edite o arquivo `front-page.php` para alterar textos, atalhos e integrações.
- As cores principais podem ser ajustadas no CSS, especialmente para adaptar ao branding da organização.
- Para alterar ícones, utilize as classes do Font Awesome.
- Traduções podem ser ajustadas nos arquivos `.po` e `.mo` em `languages/`.

## Suporte a Plugins

- Compatível com plugins de calendário e eventos via shortcode.
- Suporte a widgets padrão do WordPress.

## Plugins de terceiros

- Login Designer (https://br.wordpress.org/plugins/login-designer/)


## Créditos

Desenvolvido por Marco Antonio Vivas
https://marcovivas.com/

---

## CODIGO PARA O Login
```json
{"login_designer":{"template":"01","bg_image":"https://intranet.local/wp-content/uploads/2025/09/maria-fumaca.jpg","bg_image_gallery":"bg_09","bg_color":"#ffffff","form_shadow":0,"form_shadow_opacity":0,"form_side_padding":40,"form_width":0,"field_bg":"#ffffff","field_border":2,"field_padding_top":6,"field_padding_bottom":6,"field_radius":3,"field_shadow":0,"field_shadow_opacity":0,"logo":"https://intranet.local/wp-content/uploads/2025/09/logo_tc.png","logo_width":160,"logo_height":160},"settings":{"login_designer_page":7,"branding_color":"#000000","branding_icon_color":"#000000"},"language_translator":{"translation":false}}
```

Para dúvidas ou sugestões, utilize o painel de administração do WordPress ou entre em contato com o desenvolvedor.