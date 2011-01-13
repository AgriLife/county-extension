<?php
/**
 * The main template file.
 * @package WordPress
 */

get_header(); ?>
		<section id="wrap">
			<section id="content" role="main">

			<?php get_template_part( 'loop', 'index' ); ?>
			
			</section><!-- #content -->
		</section><!-- #wrap -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>