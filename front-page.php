
<?php get_header(); ?>


<script>
  var body = document.body;
  function setBodyAnimation() {
    body.setAttribute("id", "background-slideshow");
  };
  body.onload = setBodyAnimation();
  window.onresize = setBodyAnimation();
</script>


    <div class="cell-wrapper">

      <a class="cell" href="/stavebni-prace/">
        <div>
          <img src="/wp-content/themes/bagrujeu/img/zakladove-desky.svg" alt="Základové desky - bagruj.eu">
        </div>
        <p>Stavební práce</p>
      </a>

      <a class="cell" href="/vykopove-prace/">
        <div>
          <img src="/wp-content/themes/bagrujeu/img/vykopove-prace.svg" alt="Výkopové práce - bagruj.eu">
        </div>
        <p>Výkopové práce</p>
      </a>

      <a class="cell" href="/doprava/">
        <div>
          <img src="/wp-content/themes/bagrujeu/img/dodavka.svg" alt="Doprava - bagruj.eu">
        </div>
        <p>Doprava</p>
      </a>

      <a class="cell" href="/stavebni-prace/bazeny">
       <div>
         <img src="/wp-content/themes/bagrujeu/img/bazen.svg" alt="Bazény - bagruj.eu">
        </div>
        <p>Bazény</p>
      </a>

      <!-- Půjčovna jde prozatím pryč

      <div class="cell">
        <div>
          <a href="/pujcovna/"><img src="/wp-content/themes/bagrujeu/img/pujcovna.svg" alt="Půjčovna - bagruj.eu"></a>
          <p>Půjčovna</p>
        </div>
      </div>-->


    </div>


<?php get_footer(); ?>
