<?php the_post();

get_header(); ?> <section class="page-contato"><div class="container"><div class="row align-items-center"><div class="col-12 col-lg-8"><h1 class="titulo-pagina">Onde Comprar</h1><p class="texto-pagina">Compre nos principais parceiros</p></div></div></div></section><section class="faq-simple-section"><div class="container"><!-- Accordion do Bootstrap --><div class="row"> <?php
      $args = array(
          'post_type'      => 'farmacia', 
          'posts_per_page' => -1,
          'orderby'        => 'menu_order',
          'order'          => 'ASC'
      );

      $faq_query = new WP_Query($args);
      $index = 0;

      if ($faq_query->have_posts()) :
          while ($faq_query->have_posts()) : $faq_query->the_post(); 
              $index++;
              
          ?> <div class="col-6 col-lg-3 mb-4"><a href="<?= get_field('link') ?>"><img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="img-fluid"></a></div> <?php endwhile;
          wp_reset_postdata();
      else : ?> <p>Nenhuma farmacia parceira encontrada.</p> <?php endif; ?> </div></div></section> <?php get_footer() ?>