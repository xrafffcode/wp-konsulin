<?php
get_header();
?>

<main class="container d-flex gap-5 justfiy-space-beetwen container-single-post mt-5">
    <section class="single-main-content">
        <header class="single-post-header">
            <!-- post image -->
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('post-thumbnail', ['class' => 'single-post-image']);
            }
            ?>

            <h2 class="mt-3">
                <?php
                the_title();
                ?>
            </h2>
        </header>

        <article class="single-post-content">
            <?php
            the_content();
            ?>
        </article>
    </section>

    <aside class="single-post-aside">
        <h3>Postingan Sebelumnya</h3>
        <ul>
            <?php
            $recent_posts = new WP_Query(['post_type' => 'post', 'posts_per_page' => 5, 'post_status' => 'publish']);
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
                <li class="mt-4">
                    <div class="recent-post-thumbnail">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail');
                        } else {
                            // Display a default image or a placeholder if no thumbnail is available
                            echo '<img src="placeholder-image.jpg" alt="Placeholder Image">';
                        }
                        ?>
                    </div>
                    <div class="recent-post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </aside>
    
</main>


<?php
get_footer();
?>