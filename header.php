<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Optional Performance Improvement: Preload the fonts that appear at the top of the page to avoid Large Layout Shifts -->
    <link rel="preload" href=<?php echo get_template_directory_uri() . "/assets/fonts/open-sans-v34-latin-regular.woff2"; ?> as="font" type="font/woff2" crossorigin>
    <link rel="preload" href=<?php echo get_template_directory_uri() . "/assets/fonts/open-sans-v34-latin-700.woff2"; ?> as="font" type="font/woff2" crossorigin>
    <title>Site Title</title>
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
    <div id="app" class="container">
        <header>
            <a href="/" class="site-title">Company Name</a>
            <?php wp_nav_menu(array(
                'theme_location'=>'primary_menu'
            )); ?>
        </header>
        <main>
    
