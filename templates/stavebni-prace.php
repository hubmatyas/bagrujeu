<?php

// Template Name: Stavební práce

get_header();

?>

<script>
  var body = document.body;
  function setBodyAnimation() {
    body.setAttribute("id", "background-slideshow");
  };
  body.onload = setBodyAnimation();
  window.onresize = setBodyAnimation();
</script>


<div class="cell-wrapper">



  <a class="cell" href="/stavebni-prace/zakladove-desky/">
    <div>
      <img src="/wp-content/themes/bagrujeu/img/zakladova-deska.svg" alt="Základové desky - bagruj.eu">
</div>
<p>Základové desky<br>na klíč</p>
</a>

<a class="cell" href="/stavebni-prace/zdeni/">
  <div>
    <img src="/wp-content/themes/bagrujeu/img/obvodova-zed.svg" alt="Zdění - bagruj.eu">
  </div>
  <p>Zdění</p>
</a>

<a class="cell" href="/stavebni-prace/dlazba-na-klic/">
  <div>
    <img src="/wp-content/themes/bagrujeu/img/dlazba.svg" alt="Dlažba na klíč - bagruj.eu">
  </div>
  <p>Pochozí a&nbsp;pojezdové<br>plochy na klíč</p>
</a>



</div>

<?php

get_footer();

?>