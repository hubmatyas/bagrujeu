
<?php

// Template Name: Textová stránka

get_header(); ?>

<div class="wrapper">

  <div class="top-nav-icons">
    <a><img src="/wp-content/themes/bagrujeu/img/zakladove-desky.svg" alt="icon"></a>
    <a><img src="/wp-content/themes/bagrujeu/img/vykopove-prace.svg" alt="icon"></a>
    <a><img src="/wp-content/themes/bagrujeu/img/dodavka.svg" alt="icon"></a>
    <a><img src="/wp-content/themes/bagrujeu/img/pujcovna.svg" alt="icon"></a>
  </div>



  <h1 class="title"><?php the_title(); ?></h1>

<div class="content">

  <?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
   the_content();
  endwhile; endif;
  ?>

</div>


</div>

<?php get_footer(); ?>
