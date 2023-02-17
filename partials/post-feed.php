<?php 
$cats = get_the_category(get_the_ID());
?>
<article class="post-feed">
    <h4><a class="post-title" href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h4>
    <?php foreach($cats as $cat): ?>
        <a class="label" href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name; ?></a>
    <?php endforeach; ?>
    <p><?php the_excerpt(); ?></p>
</article>