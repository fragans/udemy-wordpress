<?php
 // Template Name: Homepage


// END: CUSTOM FIELD

// ADVANCED CUSTOM FIELD



get_header();
?>
<!-- HERO -->
<?php get_template_part( 'template-parts/content', 'hero' );?>

<!-- OPT IN -->
<?php get_template_part( 'template-parts/content', 'optin' );?>

<!-- Boost your income -->
<?php get_template_part( 'template-parts/content', 'boost' );?>

<!-- WHO BENEFIT -->
<?php get_template_part( 'template-parts/content', 'who' );?>

<!-- COURSE FEATURE -->
<?php get_template_part( 'template-parts/content', 'course' );?>

<!-- PROJECT FEATURE -->
<?php get_template_part( 'template-parts/content', 'project' );?>

<!-- FEATURETTE -->
<?php get_template_part( 'template-parts/content', 'featurette' );?>

<!-- INSTRUCTOR -->
<?php get_template_part( 'template-parts/content', 'instructor' );?>

<!-- TESTIMONIALS -->
<?php get_template_part( 'template-parts/content', 'testimonials' );?>

<?php
get_footer();
?> 