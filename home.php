<?php get_header(); ?>
<div id="home-top">
	<?php $my_query = new WP_Query('meta_key=featured-homepage&meta_value=checkbox_on&showposts=1');
	echo '<div id="big-feature">';
	while ($my_query->have_posts()) : $my_query->the_post();
	$do_not_duplicate[] = $post->ID;
	global $post;
	$feature_title = get_post_meta($post->ID,'feature-title',true); ?>
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail('featured');?></a>
		<div class="feature-detail">
			<h2><a href="<?php the_permalink();?>"><?php if($feature_title !== '') { echo $feature_title; }else{ echo get_the_title(); } ?></a></h2>
			<p id="feature-meta">
				<span class="feature-comments"><a href="<?php the_permalink();?>#reply-title"><?php comments_number('Be the first to Comment','One Comment','% Comments'); ?></a></span>
				<span class="feature-more"><a href="<?php the_permalink();?>">Read Post</a></span>
			</p>
		</div>
		</div>					
	<?php endwhile;  wp_reset_query; ?>
	</div><!-- end #home-top -->

<div id="home-middle-bg">
	<div id="home-middle">
		
		<div class="home-middle-1">
			<?php if (!dynamic_sidebar('Home Middle #1')) : ?>
			<div class="widget">
				<h2><?php _e("Home Middle #1 Widget", 'genesis'); ?></h2>
				<p><?php _e("This is a widgeted area which is called Home Middle #1. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the widget into the Home Middle #1 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-1 -->
		
		<div class="home-middle-2">
			<?php if (!dynamic_sidebar('Home Middle #2')) : ?>
			<div class="widget">
				<h2><?php _e("Home Middle #2 Widget", 'genesis'); ?></h2>
				<p><?php _e("This is a widgeted area which is called Home Middle #2. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the widget into the Home Middle #2 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>
			<?php endif; ?>
		</div><!-- end .home-middle-2 -->
		
		<div class="home-middle-3">
			<?php if (!dynamic_sidebar('Home Middle #3')) : ?>
			<div class="widget">
				<h2><?php _e("Home Middle #3 Widget", 'genesis'); ?></h2>
				<p><?php _e("This is a widgeted area which is called Home Middle #3. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the widget into the Home Middle #3 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-3 -->

    </div><!-- end #home-middle -->
</div><!-- end #home-middle-bg -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>