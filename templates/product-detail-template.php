<?php

// Template Name: Produktová stránka

get_header();

?>

<div class="wrapper">

  <div class="product-wrapper">

    <div class="product-photo">
	     <img src="<?php the_post_thumbnail_url(); ?>" style="width: 100%;height: auto;" />
       <a href="/kontakt/napiste-nam/"><button id="chci-objednat">Přejít na objednávku</button></a>
     </div>

	    <div class="product-info">
        <h1 class="title"><?php the_title(); ?></h1>

        <div class="content">

          <?php
          if ( have_posts() ) : while ( have_posts() ) : the_post();
           the_content();
          endwhile; endif;
          ?>

        </div>


            </div>

</div>


<?php

get_footer();

?>
