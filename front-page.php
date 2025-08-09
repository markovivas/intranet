<?php get_header(); ?>

<main class="grid-layout">
  <!-- Sidebar -->
  <aside class="sidebar-moderno">
    <nav>
      <ul class="menu-vertical">
        <li class="current-menu-item"><a href="#"><i class="fas fa-home"></i> <?php _e('Início', 'intranet'); ?></a></li>
        <li><a href="<?php echo site_url('/wp-login.php'); ?>"><i class="fas fa-user"></i> <?php _e('Meu Perfil', 'intranet'); ?></a></li>
        <li><a href="#"><i class="fas fa-calendar-alt"></i> <?php _e('Calendário', 'intranet'); ?></a></li>
        <li><a href="#"><i class="fas fa-file-alt"></i> <?php _e('Documentos', 'intranet'); ?></a></li>
        <li><a href="#"><i class="fas fa-chart-line"></i> <?php _e('Relatórios', 'intranet'); ?></a></li>
        <li><a href="#"><i class="fas fa-users"></i> <?php _e('Equipe', 'intranet'); ?></a></li>
        <li><a href="#"><i class="fas fa-cog"></i> <?php _e('Configurações', 'intranet'); ?></a></li>
      </ul>
    </nav>
  </aside>

  <!-- Conteúdo Principal -->
  <div class="main-content">
    <section class="hero-moderno">
      <div class="container">
        <div class="hero-content">
          <h2><?php _e('Participe do nosso WhatsApp!', 'intranet'); ?></h2>
          <p><?php _e('Fique por dentro de documentos, notícias e serviços internos da Prefeitura de Três Corações - MG.', 'intranet'); ?></p>
          <a href="#" class="btn-primario">
            <i class="fab fa-whatsapp"></i> <?php _e('Entre agora', 'intranet'); ?>
          </a>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imagem-lateral.png" alt="" class="hero-pattern">
      </div>
    </section>

    <div class="container">
      <!-- Atalhos Rápidos -->
      <section class="atalhos-modernos">
        <div class="atalhos-grid">
          <div class="atalho-card">
            <i class="fas fa-headset"></i>
            <span><?php _e('Helpdesk', 'intranet'); ?></span>
          </div>
          <div class="atalho-card">
            <i class="fa-solid fa-palette"></i>
            <span><?php _e('Artes', 'intranet'); ?></span>
          </div>
          <div class="atalho-card">
            <i class="fas fa-users"></i>
            <span><?php _e('Diretório', 'intranet'); ?></span>
          </div>
          <div class="atalho-card">
            <i class="fas fa-newspaper"></i>
            <span><?php _e('Notícias', 'intranet'); ?></span>
          </div>
          <div class="atalho-card">
            <i class="fas fa-money-check-dollar"></i>
            <span><?php _e('Folha de Pagamento', 'intranet'); ?></span>
          </div>
          <div class="atalho-card">
            <i class="fas fa-calendar-alt"></i>
            <span><?php _e('Eventos', 'intranet'); ?></span>
          </div>
		  <div class="atalho-card">
		    <i class="fas fa-file-alt"></i>
            <span><?php _e('Relatórios', 'intranet'); ?></span>
          </div>
        </div>
      </section>

      <!-- Notícias -->
      <section class="noticias-modernas">
        <div class="section-header">
          <h3><?php _e('Últimas Notícias', 'intranet'); ?></h3>
          <a href="<?php echo get_permalink(get_page_by_path('todas-as-noticias')); ?>" class="ver-tudo">
  <?php _e('Ver tudo', 'intranet'); ?> <i class="fas fa-arrow-right"></i>
</a>
        </div>
        <div class="noticias-eventos-wrapper">
          <div class="noticias-col">
            <div class="noticias-grid">
              <?php
                $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 4,
                  'post_status' => 'publish'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                  while ($query->have_posts()) : $query->the_post(); ?>
                    <article class="noticia-card">
                      <?php if (has_post_thumbnail()) : ?>
                        <div class="noticia-imagem">
                          <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('noticia-thumb'); ?>
                          </a>
                        </div>
                      <?php endif; ?>
                      <div class="noticia-conteudo">
                        <div class="noticia-meta">
                          <span><?php echo get_the_date(); ?></span>
                          <span><?php the_author(); ?></span>
                        </div>
                        <h3 class="noticia-titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="noticia-resumo"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></div>
                        <a href="<?php the_permalink(); ?>" class="leia-mais">
                          <?php _e('Leia mais', 'intranet'); ?> <i class="fas fa-arrow-right"></i>
                        </a>
                      </div>
                    </article>
                  <?php endwhile;
                  wp_reset_postdata();
                else :
                  echo '<p>' . __('Nenhuma notícia encontrada.', 'intranet') . '</p>';
                endif;
              ?>
            </div>
          </div>
          <div class="eventos-col">
            <div class="calendario-box">
              <?php echo do_shortcode('[mostra-calendario-widget]'); // Use um plugin ou shortcode de calendário ?>
            </div>
            <div class="proximos-eventos-box">
              
             <?php echo do_shortcode('[mostra-prox-eventos]'); // Use um plugin ou shortcode de calendário ?>
            </div>
          </div>
        </div>
      </section>

      <!-- Estatísticas -->
      <section class="estatisticas-modernas">
        <div class="section-header">
          <h3><?php _e('Métricas Importantes', 'intranet'); ?></h3>
        </div>

        <div class="stats-grid">
          <div class="stats-card">
            <i class="fas fa-users"></i>
            <h4><?php _e('Colaboradores Ativos', 'intranet'); ?></h4>
            <div class="stats-value">1.245</div>
            <div class="stats-period"><?php _e('Atualizado hoje', 'intranet'); ?></div>
          </div>
          <div class="stats-card">
            <i class="fas fa-briefcase"></i>
            <h4><?php _e('Projetos em Andamento', 'intranet'); ?></h4>
            <div class="stats-value">38</div>
            <div class="stats-period"><?php _e('Este mês', 'intranet'); ?></div>
          </div>
          <div class="stats-card">
            <i class="fas fa-envelope-open-text"></i>
            <h4><?php _e('Chamados Abertos', 'intranet'); ?></h4>
            <div class="stats-value">12</div>
            <div class="stats-period"><?php _e('Últimas 24h', 'intranet'); ?></div>
          </div>
          <div class="stats-card">
            <i class="fas fa-calendar-check"></i>
            <h4><?php _e('Eventos Realizados', 'intranet'); ?></h4>
            <div class="stats-value">5</div>
            <div class="stats-period"><?php _e('Este mês', 'intranet'); ?></div>
          </div>
          <div class="stats-card">
            <i class="fas fa-file-alt"></i>
            <h4><?php _e('Documentos Publicados', 'intranet'); ?></h4>
            <div class="stats-value">127</div>
            <div class="stats-period"><?php _e('Ano de 2025', 'intranet'); ?></div>
          </div>
        </div>
      </section>
    
      <!-- Redes Sociais -->
      <section class="redes-sociais">
        <div class="section-header">
          <h3><?php _e('Redes Sociais', 'intranet'); ?></h3>
        </div>
        <div class="instagram-feed">
          <!-- Substitua o src abaixo pelo seu widget do Instagram ou plugin de sua preferência -->
          <iframe src="https://495d585d8718431585cad1ab322b97ef.elf.site" 
                  class="snapwidget-widget" 
                  allowtransparency="true" 
                  frameborder="0" 
                  scrolling="no" 
                  style="border:none; overflow:hidden; width:100%; height:900px"></iframe>
        </div>
        <style>
          .instagram-feed {
            max-width: 100%;
            margin: 0 auto;
          }
          .instagram-feed iframe {
            width: 100%;
            border-radius: 12px;
          }
        </style>
      </section>
    </div>
  </div>
</main>
<?php get_footer(); ?>

<style>
.hero-moderno {
  background: linear-gradient(90deg, #128c7e 0%, #25d366 100%);
  color: #fff;
  border-radius: 24px;
}
.hero-moderno .hero-content h2,
.hero-moderno .hero-content p {
  color: #fff;
}
.hero-moderno .btn-primario {
  background: #fff;
  color: #128c7e;
  border: none;
  font-weight: 600;
}
.hero-moderno .btn-primario:hover {
  background: #25d366;
  color: #fff;
}

.noticias-eventos-wrapper {
  display: flex;
  gap: 40px;
}
.noticias-col {
  flex: 2;
}
.eventos-col {
  flex: 1;
  min-width: 280px;
  display: flex;
  flex-direction: column;
  gap: 30px;
}
.calendario-box {
  background: var(--branco);
  border-radius: var(--borda-radius);
  box-shadow: var(--sombra);
  padding: 20px;
  margin-bottom: 20px;
}
.proximos-eventos-box {
  background: var(--branco);
  border-radius: var(--borda-radius);
  box-shadow: var(--sombra);
  padding: 20px;
}
.proximos-eventos-box h4 {
  margin-top: 0;
  color: var(--azul-principal);
  font-size: 1.1rem;
  margin-bottom: 15px;
}
.proximos-eventos-lista {
  list-style: none;
  padding: 0;
  margin: 0;
}
.proximos-eventos-lista li {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 12px;
  font-size: 0.98rem;
}
.evento-data {
  background: var(--azul-brilhante);
  color: #fff;
  border-radius: 6px;
  padding: 4px 10px;
  font-weight: 600;
  min-width: 48px;
  text-align: center;
}
.evento-titulo {
  font-weight: 500;
  color: var(--azul-escuro);
}
.evento-hora {
  color: var(--azul-claro);
  font-size: 0.95em;
}
.evento-tipo {
  background: var(--cinza);
  color: var(--azul-escuro);
  border-radius: 4px;
  padding: 2px 8px;
  font-size: 0.85em;
  margin-left: auto;
}
@media (max-width: 900px) {
  .noticias-eventos-wrapper {
    flex-direction: column;
  }
  .eventos-col {
    min-width: 0;
  }
}
</style>