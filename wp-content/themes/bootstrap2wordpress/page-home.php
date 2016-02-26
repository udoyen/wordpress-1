<?php

/*
  Template Name: Home Page
 */


// Advanced Custom Fields

get_header();
?>


<?php get_template_part( 'content', 'hero' ); ?>

<?php get_template_part( 'content', 'optin' ); ?>

<?php get_template_part( 'content', 'boost' ); ?>

<?php get_template_part( 'content', 'benefits' ); ?>

<?php get_template_part( 'content', 'coursefeatures' ); ?>

<?php get_template_part( 'content', 'projectfeatures' ); ?>

<?php get_template_part( 'content', 'videofeaturette' ); ?>

<?php get_template_part( 'content', 'instructor' ); ?>

<?php get_template_part( 'content', 'testimonial' ); ?>


<?php

get_footer();
