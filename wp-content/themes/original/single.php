<?php get_header(); ?>
 
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
 
	<div id="content">
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php comments_template(); ?>
	</div>
 
<?php
endwhile;
endif;
?>
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>