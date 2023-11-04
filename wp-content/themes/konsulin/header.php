<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.png')); ?>" type="image/x-icon" width="80" height="80">

    <?php wp_head(); ?>

    <!-- seo -->
    <meta name="description" content="Konsultasi dengan psikolog terpercaya dan berpengalaman">
    <meta name="keywords" content="konsultasi, psikolog, terpercaya, berpengalaman">
    <meta name="author" content="Konsulin">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesia">
    <meta name="revisit-after" content="7 days">
    <meta name="webcrawlers" content="all">
    <meta name="rating" content="general">
    <meta name="spiders" content="all">
    <meta name="sitemap" content="https://konsulin.com/sitemap.xml">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Konsultasi dengan psikolog terpercaya dan berpengalaman">
    <meta property="og:description" content="Konsultasi dengan psikolog terpercaya dan berpengalaman">
    <meta property="og:url" content="https://konsulin.com/">
    <meta property="og:site_name" content="Konsulin">
    <meta property="og:image" content="https://konsulin.com/wp-content/uploads/2021/09/hero-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Konsultasi dengan psikolog terpercaya dan berpengalaman">
    <meta name="twitter:title" content="Konsultasi dengan psikolog terpercaya dan berpengalaman">
    <meta name="twitter:image" content="https://konsulin.com/wp-content/uploads/2021/09/hero-image.png">
    <link rel="canonical" href="https://konsulin.com/">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//s.w.org">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container py-2">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php
                wp_nav_menu([
                    'menu'            => 'primary',
                    'theme_location'  => 'primary',
                    'container'       => 'ul', // Mengubah container menjadi 'ul'
                    'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
                ]);
                ?>

            </div>
        </div>
    </nav>