
<?php

// Template Name: Textová stránka

get_header(); ?>

<div class="wrapper content-wrapper">

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
