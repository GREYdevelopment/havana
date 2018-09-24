<?php
/**
 * Template Name: HAVANA success
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

  </article>
  <article class="content-general-center scene_element scene_element--fadein">
    <div class="main-content-form">
      <form method="post" enctype="multipart/form-data" autocomplete="off" action="/"><input name="action" type="hidden" value="signup">

<input name="subsource" type="hidden" value="participants-database">

<input name="shortcode_page" type="hidden" value="/">

<input name="thanks_page" type="hidden" value="/">

<input name="instance_index" type="hidden" value="2">

<input name="pdb_data_keys" type="hidden" value="21.1.20.9.22">

<input name="session_hash" type="hidden" value="0c9eed5e9b">

    <table class="form-table pdb-signup">


      <tbody class="field-group field-group-main">


        <tr class="text-line">

          <th for="pdb-codigo_botella">codigo botella</th>

          <td>

            <input name="codigo_botella" id="pdb-codigo_botella" type="text" class="required-field regular-text" value="" placeholder="Código de la botella*">


          </td>

        </tr>


        <tr class="text-line">

          <th for="pdb-first_name">Nombre</th>

          <td>

            <input name="first_name" id="pdb-first_name" type="text" class="required-field regular-text" value="" placeholder="Nombre y apellido*">


          </td>

        </tr>


        <tr class="numeric">

          <th for="pdb-edad">edad</th>

          <td>

            <input name="edad" min="18" id="pdb-edad" type="number" class="required-field" value="" placeholder="Edad*">


          </td>

        </tr>


        <tr class="text-line">

          <th for="pdb-email">Mail</th>

          <td>

            <input name="email" id="pdb-email" type="text" class="required-field regular-text" value="" placeholder="Mail*">


          </td>

        </tr>


        <tr class="numeric">

          <th for="pdb-telefono">telefono</th>

          <td>

            <input name="telefono" id="pdb-telefono" type="number" class="required-field" value="" placeholder="Teléfono*">


          </td>

        </tr>


        </tbody>


        <tbody class="field-group field-group-submit">

        <tr>
          <td class="submit-buttons">

           <input name="submit_button" type="submit" class="button-primary pdb-submit" value="ENVIAR">

          </td>
          <td class="submit-buttons">


          </td>
        </tr>

      </tbody>

    </table>

  </form>

      <div class="content-general-success scene_element scene_element--fadein">
        <?php echo do_shortcode("[pdb_signup_thanks]"); ?>
      </div>

    </div>
  </article>
  <article class="content-general-right">

  </article>


</section>


<div style="clear:both"></div>
</body>

<?php get_footer(); ?>
