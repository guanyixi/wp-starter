<?php
get_header();
the_post();
?>

    <h1><?php the_title(); ?></h1>

    <div>
        <?php foreach(get_the_category(get_the_ID()) as $cat): ?>
            <a class="label" href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name; ?></a>
        <?php endforeach; ?>
    </div>

    <div><?php the_time('M j, Y'); ?></div>

    <article class="my-6"><?php the_content(); ?></article>


<?php 
get_footer();
?>