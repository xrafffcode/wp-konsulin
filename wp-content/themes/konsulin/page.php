<?php

/**
 *Template Name: page
 */

?>

<?php get_header(); ?>
<div class="container mt-5">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
</div>
<?php get_footer(); ?>