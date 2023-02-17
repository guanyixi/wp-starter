<?php
get_header();
?>

    <h1>Search Results</h1>
    <?php 
    if(have_posts()):
    ?>
    <div>
        <?php while(have_posts()): the_post();?>
        <article>
            <h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title();?></a></h2>
            <div><?php echo get_post_type(); ?></div>
            <p><?php the_excerpt(); ?></p>
        </article>

        <?php endwhile; ?>

    </div>
    <?php endif; ?>
    
<?php 
get_footer();
?>