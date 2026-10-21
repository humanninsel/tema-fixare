<?php the_post();

get_header(); ?>

<section class="page-contato">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-8">
        <h1 class="titulo-pagina">Fale com a EMS</h1>
        <p class="texto-pagina">
          Estamos à disposição para ouvir você e esclarecer suas dúvidas. Entre em contato com a nossa equipe por e-mail ou telefone e encontre o suporte que precisa.
        </p>
      </div>
      <div class="col-12 col-lg-4">

      </div>
      <div class="col-lg-5">
        <img src="<?= get_stylesheet_directory_uri() ?>/dist/img/fale-conosco.png" alt="" class="img-fluid">
      </div>
      <div class="col-lg-7">
        <a href="mailto:sac-Operacional@ems.com.br" class="btn-cta mb-4">sac-Operacional@ems.com.br</a>
        <a href="tel:08000191914" class="btn-cta">Telefone: 0800 019 1914</a>
      </div>
    </div>
    
  </div>

</section>
<section class="faq-simple-section">
  <div class="container">

    <!-- Tag/Badge Superior -->
    <div class="faq-badge">
      PERGUNTAS FREQUENTES
    </div>

    <!-- Accordion do Bootstrap -->
    <div class="accordion accordion-flush" id="faqAccordion">
      <?php
      $args = array(
          'post_type'      => 'pergunta', // Slug do seu Custom Post Type
          'posts_per_page' => -1,
          'orderby'        => 'menu_order',
          'order'          => 'ASC'
      );

      $faq_query = new WP_Query($args);
      $index = 0;

      if ($faq_query->have_posts()) :
          while ($faq_query->have_posts()) : $faq_query->the_post(); 
              $index++;
              $collapse_id = "faq-collapse-" . get_the_ID();
              $heading_id  = "faq-heading-" . get_the_ID();
          ?>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header" id="<?php echo $heading_id; ?>">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapse_id; ?>" aria-expanded="false" aria-controls="<?php echo $collapse_id; ?>">
                    <span class="question-text"><?php the_title(); ?></span>
                  </button>
                </h2>
                
                <div id="<?php echo $collapse_id; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $heading_id; ?>" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>

          <?php endwhile;
          wp_reset_postdata();
      else : ?>
          <p>Nenhuma pergunta encontrada.</p>
      <?php endif; ?>
    </div>

  </div>
</section>

<?php get_footer() ?>