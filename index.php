<?php get_header(); ?>

<?php if(have_posts() ):

	while( have_posts() ): the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<h4>Posted on: <?php the_time('F j y'); ?> at <?php the_time('g:i a') ?> in <?php the_category(); ?></h4>
	<p><?php the_content(); ?></p>

	<?php 

	endwhile; 
	endif; 
	?>

	<?php get_footer(); ?>