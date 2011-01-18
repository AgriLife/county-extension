<?php get_header(); ?>


<div id="home-bg">
		
	<div class="search">
	<?php get_search_form(); ?>
	</div><!-- end .search -->
	
	<div id="home-top">
		<div id="tabs">

			<div id="tabs-1">
				<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris.</p>
			</div>
			<div id="tabs-2">
				<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis.</p>
			</div>
			<div id="tabs-3">
				<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti.</p>
			</div>
			<ul class="tabs">
				<li><a href="#tabs-1">Headline 1</a></li>
				<li><a href="#tabs-2">Headline 2</a></li>
				<li><a href="#tabs-3">Headline 3</a></li>
			</ul>			
		</div>
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
</div><!-- end #home-bg -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>