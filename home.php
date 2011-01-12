<?php get_header(); ?>


<div id="home-bg">
	
	<div class="search">
	<?php get_search_form(); ?>
	</div><!-- end .search -->
	
	<div id="home-top">
		<div id="tabbed-rotator">

		</div><!-- end #tabbed-rotator -->
		<div id="tabs">
			<ul>
				<li>Headline 1</li>			
				<li>Headline 2</li>
				<li>Headline 3</li>											
			</ul>	
		</div><!-- end #tabs -->		
	</div><!-- end #home-top -->

<div id="home-middle-bg">
	<div id="home-middle">
		
		<div class="home-middle-1">
			<?php if (!dynamic_sidebar('Home Middle #1')) : ?>
			<div class="widget">
				<h2><?php _e("Home Middle #1 Widget", 'genesis'); ?></h2>
				<p><?php _e("This is a widgeted area which is called Home Middle #1. It is using Genesis. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #1 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-1 -->
		
		<div class="home-middle-2">
			<?php if (!dynamic_sidebar('Home Middle #2')) : ?>
			<div class="widget">
				<h2><?php _e("Home Middle #2 Widget", 'genesis'); ?></h2>
				<p><?php _e("This is a widgeted area which is called Home Middle #2. It is using the Genesis. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #2 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>
			<?php endif; ?>
		</div><!-- end .home-middle-2 -->
		
		<div class="home-middle-3">
			<?php if (!dynamic_sidebar('Home Middle #3')) : ?>
			<div class="widget">
				<h2><?php _e("Home Middle #3 Widget", 'genesis'); ?></h2>
				<p><?php _e("This is a widgeted area which is called Home Middle #3. It is using Genesis. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #3 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-3 -->

    </div><!-- end #home-middle -->
</div><!-- end #home-middle-bg -->
</div><!-- end #home-bg -->

<div id="extension-section">
	<div id="drop-nav">
		<ul>
			<li><a href="/ask/">Ask</a></li>
			<li><a href="/extension/">Texas A&amp;M Extension Service</a></li>			
	</div>	
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>