<?php

get_header(); 

 /*
 
 Template Name: Template One

 */

 ?>

 <?php if(have_posts() ):

 while( have_posts() ): the_post(); ?>
 <h1>This is using tempalte one with no category</h1>
 <h2><?php the_title(); ?></h2>
 <h4>Posted on: <?php the_time('F j y'); ?> at <?php the_time('g:i a') ?> </h4>
 <p><?php the_content(); ?></p>

 <?php 

 endwhile; 
 endif; 
 ?>

 <?php get_footer(); ?>