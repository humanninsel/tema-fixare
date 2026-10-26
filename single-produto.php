<?php the_post();

get_header(); 

?> <section class="single-produto"><div class="container"><div class="row"><div class="col-lg-5 mb-4"><img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="img-fluid mb-4"> <img src="<?= get_field('composicao') ?>" alt="" class="img-fluid composicao"></div><div class="col-lg-5 mb-4"><h1 class="titulo-produto"><?= the_title() ?></h1><p class="resumo-interno"><?= get_field('resumo_interno') ?></p><a href="<?= get_site_url() ?>/onde-comprar" class="btn-primary"><div class="icon-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></div><span>Onde comprar</span></a></div></div> <?php echo the_content() ?> </div><hr class="separador"><section class="products-section"><div class="container"><div class="row"> <?php
              $args = array(
                  'post_type' => 'produto', // Slug do seu Custom Post Type
                  'posts_per_page' => -1,
                  'orderby' => 'menu_order',
                  'order' => 'ASC',
                  'post__not_in' => array(get_the_ID())
              );
  
              $faq_query = new WP_Query($args);
              $index = 0;
  
              if ($faq_query->have_posts()):
                  while ($faq_query->have_posts()):
                      $faq_query->the_post();
                      $index++;
  
                      ?> <!-- Card 1 --><div class="col-lg-4"><article class="product-card"><div class="card-image"><img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title(); ?>"></div><div class="card-content"><div class="card-cabecalho"><h3 class="product-name"><?php the_title(); ?></h3><p class="product-description"> <?= get_field('detalhes_thumb') ?> </p></div><img src="<?= get_field('composicao') ?>" alt="" class="img-fluid composicao"> <a href="<?= the_permalink() ?>" class="btn-primary"><div class="icon-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></div><span>CONHEÇA O PRODUTO</span></a><p class="resumo-interno"><?= get_field('resumo_thumb') ?></p><p class="rodape-produto">*Revestimento desenvolvido para facilitar a deglutição do comprimido, tornando seu uso mais confortável.</p></div></article></div> <?php endwhile; endif; ?> </div></div></section></section><section class="newsletter-section"><div class="newsletter-container"><h2 class="newsletter-title">Inscreva-se</h2><p class="newsletter-subtitle">Inscreva-se e fique por dentro de<br>como cuidar da sua saúde óssea.</p><form class="newsletter-form" action="#" method="POST"><div class="input-wrapper"><input type="email" name="email" class="newsletter-input" placeholder="Seu e-mail aqui..." required> <button type="submit" class="newsletter-submit" aria-label="Enviar inscrição"><svg class="mail-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></button></div></form></div></section> <?php get_footer() ?>