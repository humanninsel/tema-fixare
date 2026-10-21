document.addEventListener('DOMContentLoaded', () => {
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const trigger = item.querySelector('.faq-trigger');

    trigger.addEventListener('click', () => {
      const isOpen = item.classList.contains('active');

      // (Opcional) Fecha os outros itens abertos ao clicar em um novo
      faqItems.forEach(i => {
        i.classList.remove('active');
        i.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
      });

      // Se o item clicado não estava aberto, abre ele
      if (!isOpen) {
        item.classList.add('active');
        trigger.setAttribute('aria-expanded', 'true');
      }
    });
  });
});

$(document).ready(function () {





  var sliderGaleria = tns({

    container: ".carrossell-banner",

    items: 1,

    loop: true,

    slideBy: "page",

    autoplayButtonOutput: false,

    autoplay: true,

    controls: false,

    controlsPosition: 'bottom',

    nav: true,




  });



});



