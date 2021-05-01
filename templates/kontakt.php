<?php

// Template Name: Kontakt

get_header();


?>


<div class="wrapper kontakt">
  <h1 class="title"><?php the_title(); ?></h1>

<div class="list-authors">

<?php
  $args = [
    'blog_id' => 1,
    'orderby' => 'nicename',
    'order' => 'DESC',
    'fields' => 'all',
];

  $users = get_users($args);
  foreach ($users as $user) { ?>

<div class="author">



<?php echo get_avatar($user->ID);?>
<div>
    <p><?php echo get_the_author_meta('first_name', $user->ID); echo '&nbsp;'; echo get_the_author_meta('last_name', $user->ID) ?></p>
    <a id="phone" href="tel:<?php echo $user->description;?>"><?php echo $user->description; ?></a>
</div>

</div>
<?php } // end foreach?>



</div>


<?php get_footer(); ?>
