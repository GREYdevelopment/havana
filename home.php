<?php
/**
 * Template Name: HAVANA landing
 *
 */

get_header();
?>

<script type="text/javascript">
  var xSeconds = 2000; // 4 second

setTimeout(function() {
  window.sr = ScrollReveal();

  sr.reveal('.foo', { duration: 1000,  distance: '80%', easing: 'ease-out', origin: 'left', scale: 1, opacity:0});
  sr.reveal('.fooRight', { duration: 1000,  distance: '80%', easing: 'ease-out', origin: 'right', scale: 1, opacity:0});
  sr.reveal('.title-animate-down', { duration: 1000,  distance: '80%', easing: 'ease-out', origin: 'top', scale: 1, opacity:0});
  sr.reveal('.fadeInSlow', { duration: 700,  distance: '4%', easing: 'ease-in-out', origin: 'bottom', scale: 0.89, opacity:0, delay:1000});
}, xSeconds);

$(document).ready(function(){

document.getElementById("pdb-codigo_botella").placeholder = "Código de la botella*";
document.getElementById("pdb-first_name").placeholder = "Nombre y apellido*";
document.getElementById("pdb-edad").placeholder = "Edad*";
document.getElementById("pdb-email").placeholder = "Mail*";
document.getElementById("pdb-telefono").placeholder = "Teléfono*";

});

;(function ($) {
  'use strict';
  var $body    = $('html, body'), // Define jQuery collection
      content  = $('#main').smoothState({
        onStart : {
          duration: 250,
          render: function () {
            content.toggleAnimationClass('is-exiting');

            // Scroll user to the top
            $body.animate({ 'scrollTop': 0 });

          }
        }
      }).data('smoothState');
})(jQuery);

</script>

<section class="main-content-home m-scene" id="main">
  <article class="content-general-left">
    <div class="logo-general">
      <a href="/home"> <img src="<?php echo get_template_directory_uri(); ?>/img/logo-havana.svg" alt="HAVANA - home"> </a>
    </div>
    <div class="content-general-bottles">
      <img class="content-signle-bottles" src="<?php echo get_template_directory_uri(); ?>/img/botellas.png" alt="Botellas HAVANA">
      <img class="content-codigo" src="<?php echo get_template_directory_uri(); ?>/img/Etiqueta-botella.png" alt="Código botella HAVANA">
    </div>
  </article>
  <article class="content-general-center scene_element scene_element--fadein">
    <div class="content-preform">
      <p>* Ingresá el código de tu botella y dejanos tus datos para comunicarnos contigo en caso de que seas uno de los ganadores.</p>
    </div>
    <div class="main-content-form">
      <?php echo do_shortcode("[pdb_signup]"); ?>
    </div>
  </article>
  <article class="content-general-right">

  </article>


</section>


<div style="clear:both"></div>
</body>

<?php get_footer(); ?>
