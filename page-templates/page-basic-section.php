<?php 
/*
 * Template Name: Basic Section Template
 * description: >-
  Page template for sectional pages
 */

  get_header(); 
?>

<!-- page-templates/basic-section-page.php -->

<article class="article">
  <?php get_template_part( 'partials/section-picker' ); ?>
</article>


<?php get_footer(); ?>