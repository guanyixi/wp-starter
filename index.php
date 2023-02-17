<?php
get_header();
?>

	<div>
		<h1>Blog</h1>
		<div><?php showIcon('search');?></div>
	<?php
	while( have_posts() ) :
		the_post();
		include get_template_directory() . '/partials/post-feed.php';
	endwhile;
	the_posts_pagination();
	?>

	</div>

<?php 
get_footer();
?>