<?php

/**
 *Template Name: article
 */

?>

<?php get_header(); ?>
<div class="page-header d-flex justify-content-center align-items-center">
    <div class="page-content text-center">
        <h1 class="page-header-title" data-aos="fade-up" data-aos-delay="100">
            Artikel Kesehatan Mental
        </h1>
        <p class="page-header-description" data-aos="fade-up" data-aos-delay="200">
            Berbagai artikel kesehatan mental yang dapat membantu anda
        </p>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
        );

        $posts = get_posts($args);

        $delay_increment = 400;
        foreach ($posts as $post) {
            setup_postdata($post);

            $post_title = get_the_title();
            $post_content = get_the_content();
            $post_permalink = get_permalink();
            $post_excerpt = get_the_excerpt();
        ?>
            <div class="col-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($delay_increment); ?>">
                <div class="card-posts card border-0 shadow-sm">
                    <?php
                    if (has_post_thumbnail()) {
                        $post_thumbnail_id = get_post_thumbnail_id();
                        $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                    ?>
                        <a href="<?php echo esc_url($post_permalink); ?>" class="thumbnail-link">
                            <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
                        </a>
                    <?php
                    } else {
                    ?>
                        <a href="<?php echo esc_url($post_permalink); ?>" class="thumbnail-link">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/placeholder.png')); ?>" alt="<?php echo esc_attr($post_title); ?>" class="card-img-top">
                        </a>
                    <?php
                    }
                    ?>
                    <div class="card-body">
                        <?php
                        $post_tags = get_the_tags();
                        if ($post_tags) {
                        ?>
                            <div class="card-tags">
                                <?php
                                foreach ($post_tags as $post_tag) {
                                ?>
                                    <span class="badge-tag me-3">
                                        <a href="<?php echo esc_url(get_tag_link($post_tag->term_id)); ?>" class="card-tag"><?php echo esc_html($post_tag->name); ?></a>
                                    </span>
                                <?php
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                        <h2 class="card-title mt-2">
                            <a href="<?php echo esc_url($post_permalink); ?>"><?php echo esc_html($post_title); ?></a>
                        </h2>
                        <p class="card-text">
                            <?php
                                if (strlen($post_excerpt) > 100) {
                                    $trimmed_excerpt = substr($post_excerpt, 0, 100) . '...';
                                    echo $trimmed_excerpt;
                                } else {
                                    echo $post_excerpt;
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php

            $delay_increment += 100; // Tambah delay untuk elemen berikutnya
        }

        wp_reset_postdata();
        ?>

    </div>

</div>

<?php get_footer(); ?>