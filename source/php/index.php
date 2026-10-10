<?php the_post();

get_header(); ?>



<div class="banner-home">

  <?php if (have_rows('banners')): ?>


    <div class="d-block w-100">

      <div class="carrossell-banner">

        <?php while (have_rows('banners')):
          the_row();

          $image = get_sub_field('imagem_desktop');
          $imagemMobile = get_sub_field('imagem_mobile');
          $link = get_sub_field('link');

          ?>

          <div class="item">

            <a href="<?= $link ?>"><img src="<?= $image ?>" alt="" class="img-fluid d-none d-lg-block"></a>
            <a href="<?= $link ?>"><img src="<?= $imagemMobile ?>" alt="" class="img-fluid d-lg-none"></a>

          </div>

        <?php endwhile; ?>

      </div>

    </div>

  <?php endif; ?>

</div>

<section class="familiaHirudoid" id="familia">
  <div class="container">
    <div class="tag">Família HIRUDOID<sup>®</sup></div>
    <h2 class="titulo">Cuidado que acompanha gerações.</h2>
    <p class="subtitulo">Hirudoid® faz parte da rotina de cuidado de milhões de pessoas, com uma linha desenvolvida para
      diferentes necessidades e momentos.</p>
    <div class="produtos d-lg-none">
      <div class="carrosel-produtos">
        <div class="item">
          <div class="produto-card hematomas">
            <div class="cabecalho-produto">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/5mg_POMADA_40g.png" alt="" class="img-fluid">
            </div>
            <div class="tag-produto">Pós-trauma / Hematomas</div>
            <h2 class="titulo-produto">Hirudoid®</h2>
            <p class="mensagem-produto">Reduz o inchaço <br>e a vermelhidão.</p>
            <div class="botoes">
              <a href="https://hirudoid.com.br/linha-hirudoid-pomada-e-gel/" class="btn-cta saiba-mais">Saiba mais</a>
              <a href="https://hirudoid.com.br/onde-comprar/" class="btn-cta">Onde comprar</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="produto-card infantil">
            <div class="cabecalho-produto">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/DSB684b_Embalagem 3D_Hirudoid Infantil_sembisnaga_angulado.png" alt="" class="img-fluid">
            </div>
            <div class="tag-produto">Machucados</div>
            <h2 class="titulo-produto">Hirudoid® Infantil</h2>
            <p class="mensagem-produto">Apresentação destinada para crianças.</p>
            <div class="botoes">
              <a href="https://hirudoid.com.br/linha-hirudoid-infantil/" class="btn-cta saiba-mais">Saiba mais</a>
              <a href="https://hirudoid.com.br/onde-comprar/" class="btn-cta">Onde comprar</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="produto-card varizes">
            <div class="cabecalho-produto">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/VARIZES_5MG_90G.png" alt="" class="img-fluid">
            </div>
            <div class="tag-produto">Pernas cansadas</div>
            <h2 class="titulo-produto">Hirudoid®</h2>
            <p class="mensagem-produto">Melhora a circulação local e alivia a dor, inflamação e hematoma após contusão; ou varizes.</p>
            <div class="botoes">
              <a href="https://hirudoid.com.br/linha-hirudoid-varizes/" class="btn-cta saiba-mais">Saiba mais</a>
              <a href="https://hirudoid.com.br/onde-comprar/" class="btn-cta">Onde comprar</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="produto-card revitaliza">
            <div class="cabecalho-produto">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/Hirudoid_Revitaliza.png" alt="" class="img-fluid">
            </div>
            <div class="tag-produto">Dia a dia</div>
            <h2 class="titulo-produto">Hirudoid® Revitaliza</h2>
            <p class="mensagem-produto">Hidratação intensa, refrescância e prevenção do desconforto.</p>
            <div class="botoes">
              <a href="https://hirudoid.com.br/hirudoid-revitaliza/?utm_source=site-hirudoid-familia&utm_medium=home%20&utm_campaign=x&utm_adset=organico&utm_content=revitaliza&gad_source=banner-home-revitaliza" class="btn-cta saiba-mais">Saiba mais</a>
              <a href="https://hirudoid.com.br/onde-comprar/" class="btn-cta">Onde comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="produtos d-none d-lg-block">
      <div class="row">
        <div class="col-lg-3">
          <div class="produto-card hematomas">
            <div class="cabecalho-produto">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/5mg_POMADA_40g.png" alt="" class="img-fluid">
            </div>
            <div class="tag-produto">Pós-trauma / Hematomas</div>
            <h2 class="titulo-produto">Hirudoid®</h2>
            <p class="mensagem-produto">Reduz o inchaço <br>e a vermelhidão.</p>
            <div class="botoes">
              <a href="https://hirudoid.com.br/linha-hirudoid-pomada-e-gel/" class="btn-cta saiba-mais">Saiba mais</a>
              <a href="https://hirudoid.com.br/onde-comprar/" class="btn-cta">Onde comprar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="produto-card infantil">
            <div class="cabecalho-produto">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/DSB684b_Embalagem 3D_Hirudoid Infantil_sembisnaga_angulado.png" alt="" class="img-fluid">
            </div>
            <div class="tag-produto">Machucados</div>
            <h2 class="titulo-produto">Hirudoid® Infantil</h2>
            <p class="mensagem-produto">Apresentação destinada para crianças.</p>
            <div class="botoes">
              <a href="https://hirudoid.com.br/linha-hirudoid-infantil/" class="btn-cta saiba-mais">Saiba mais</a>
              <a href="https://hirudoid.com.br/onde-comprar/" class="btn-cta">Onde comprar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="produto-card varizes">
            <div class="cabecalho-produto">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/VARIZES_5MG_90G.png" alt="" class="img-fluid">
            </div>
            <div class="tag-produto">Pernas cansadas</div>
            <h2 class="titulo-produto">Hirudoid®</h2>
            <p class="mensagem-produto">Melhora a circulação local e alivia a dor, inflamação e hematoma após contusão; ou varizes.</p>
            <div class="botoes">
              <a href="https://hirudoid.com.br/linha-hirudoid-varizes/" class="btn-cta saiba-mais">Saiba mais</a>
              <a href="https://hirudoid.com.br/onde-comprar/" class="btn-cta">Onde comprar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="produto-card revitaliza">
            <div class="cabecalho-produto">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/Hirudoid_Revitaliza.png" alt="" class="img-fluid">
            </div>
            <div class="tag-produto">Dia a dia</div>
            <h2 class="titulo-produto">Hirudoid® Revitaliza</h2>
            <p class="mensagem-produto">Hidratação intensa, refrescância e prevenção do desconforto.</p>
            <div class="botoes">
              <a href="https://hirudoid.com.br/hirudoid-revitaliza/?utm_source=site-hirudoid-familia&utm_medium=home%20&utm_campaign=x&utm_adset=organico&utm_content=revitaliza&gad_source=banner-home-revitaliza" class="btn-cta saiba-mais">Saiba mais</a>
              <a href="https://hirudoid.com.br/onde-comprar/" class="btn-cta">Onde comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blog blog-home">
  <div class="container">
    <div class="tag">Conteúdo e Saúde</div>
    <h2 class="titulo">Blog</h2>
    <p class="subtitulo">Informativos e dicas de especialistas para o seu bem-estar.</p>
    <div class="lista-artigos">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="artigo categoria1">
            <div class="cabecalho">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/blog-1.png" alt="">
            </div>
            <div class="corpo">
              <div class="tag" style="background-color: #753687;">Hematomas</div>
              <h3 class="titulo-artigo">
                Como tratar hematomas de forma segura e rápida
              </h3>
              <p class="resumo">Descubra as principais causas e as melhores práticas de tratamento para sua recuperação.</p>
              <a href="" class="link-artigo">Leia mais <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="artigo categoria2">
            <div class="cabecalho">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/blog-2.png" alt="">
            </div>
            <div class="corpo">
              <div class="tag" style="background-color: #EF7029;">Varizes</div>
              <h3 class="titulo-artigo">
                Prevenção de varizes: dicas simples para o dia a dia
              </h3>
              <p class="resumo">Pequenas mudanças de hábito podem aliviar sintomas e dores nas pernas.</p>
              <a href="" class="link-artigo">Leia mais <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="artigo categoria3">
            <div class="cabecalho">
              <img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/blog-3.png" alt="">
            </div>
            <div class="corpo">
              <div class="tag" style="background-color: #88A369;">Revitaliza</div>
              <h3 class="titulo-artigo">
                Cuidado com a pele sensível no inverno
              </h3>
              <p class="resumo">Descubra as principais causas e as melhores práticas de tratamento para sua recuperação.</p>
              <a href="" class="link-artigo">Leia mais <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="https://hirudoid.com.br/hirublog/" class="btn-cta-blog">Ver todos os artigos</a>
  </div>
</section>
<section class="insta">
  <div class="container">
    <div class="tag">@hirudoidbrasil</div>
    <h2 class="titulo">Redes Sociais</h2>
    <p class="subtitulo">Atualizações, dicas e novidades.</p>
    <div class="wrapper-plugin">
      <?php echo do_shortcode( '[instagram-feed feed=1]' ) ?>
    </div>
    <div class="redes-sociais">
      <h3 class="cta-redes">Siga Hirudoid®</h3>
      <div class="icones-redes">
        <div class="icone-rede"><a href="https://www.instagram.com/hirudoidbrasil/" target="_blank"><img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/instagram.png" alt=""></a></div>
        <div class="icone-rede"><a href="https://www.youtube.com/hirudoidbrasil" target="_blank"><img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/youtube.png" alt=""></a></div>
        <div class="icone-rede"><a href="https://www.facebook.com/HirudoidBrasil/" target="_blank"><img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/facebook.png" alt=""></a></div>
        <div class="icone-rede"><a href="https://x.com/hirudoidbrasil" target="_blank"><img src="<?= get_stylesheet_directory_uri(  ) ?>/dist/img/twitter.png" alt=""></a></div>
      </div>
    </div>
  </div>
</section>




<?php get_footer() ?>