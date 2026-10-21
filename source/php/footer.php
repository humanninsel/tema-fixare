<footer class="main-footer">
  <div class="footer-container">
    
    <!-- Linha Principal de Conteúdo -->
    <div class="footer-content">
      
      <!-- Coluna 1: Logo e Instagram -->
      <div class="footer-col footer-brand">
        <a href="#" class="footer-logo">
          <img src="<?= get_stylesheet_directory_uri() ?>/dist/img/logo.png" alt="Fixare">
        </a>
        <a href="#" class="social-link-inline">
          <svg class="social-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
          </svg>
          <span>Instagram</span>
        </a>
      </div>

      <!-- Coluna 2: Links Principais -->
      <div class="footer-col">
        <h3 class="footer-col-title">Links Principais</h3>
        <ul class="footer-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Linha Fixare</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Onde Comprar</a></li>
          <li><a href="#">Fale Conosco</a></li>
        </ul>
      </div>

      <!-- Coluna 3: Legal -->
      <div class="footer-col">
        <h3 class="footer-col-title">Legal</h3>
        <ul class="footer-nav">
          <li><a href="#">Disclaimer regulatório</a></li>
          <li><a href="#">Política de privacidade</a></li>
          <li><a href="#">Logo EMS</a></li>
          <li><a href="#">Redes sociais</a></li>
        </ul>
      </div>

      <!-- Coluna 4: Redes Sociais -->
      <div class="footer-col">
        <h3 class="footer-col-title">Redes Sociais</h3>
        <ul class="footer-social-list">
          <li>
            <a href="#" class="social-link">
              <svg class="social-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
              </svg>
              <span>YouTube</span>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <svg class="social-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
              </svg>
              <span>Facebook</span>
            </a>
          </li>
        </ul>
      </div>

    </div>

    <!-- Linha Divisória Inferior -->
    <div class="footer-divider"></div>

    <!-- Direitos Autorais / Copyright -->
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> EMS Saúde - Todos os direitos reservados</p>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>

<script src="https://kit.fontawesome.com/58275e0b3b.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script src="<?= get_stylesheet_directory_uri(); ?>/dist/js/lightbox.js"></script>

<script src="<?= get_stylesheet_directory_uri(); ?>/dist/js/app.js"></script>
</body>
</html>