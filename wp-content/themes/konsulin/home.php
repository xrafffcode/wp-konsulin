<?php

/**
 *Template Name: Home 
 */

?>


<?php get_header(); ?>

<div class="hero d-flex justify-content-center align-items-center" >
    <div class="hero-content text-center">
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
            Kami membantu anda untuk sembuh dari penyakit mental
        </h1>
        <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
            Konsultasi dengan psikolog terpercaya dan berpengalaman
        </p>
        <a href="#" class="btn btn-primary" data-aos="fade-up" data-aos-delay="300">Konsultasi Sekarang</a>
    </div>
</div>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>


<?php get_footer(); ?>