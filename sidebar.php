<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage county_ext
 * @since county_ext 1.0
 */
?>
<div id="aside">
	<div id="books-bg">
	<div id="tabs">	
	<ul>
		<li><a href="#tabs-1">Watch</a></li>
		<li><a href="#tabs-2">Read</a></li>
		<li><a href="#tabs-3">Listen</a></li>
	</ul>
		<div id="tabs-1">
<object width="348" height="221"><param name="movie" value="http://www.youtube.com/v/Ly_yfmeR8s8?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/Ly_yfmeR8s8?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="348" height="221"></embed></object>			
		</div>
		<div id="tabs-2">		
			<ul class="books">
				<li>
					<a href="">
					<dl>
						<dt class="book-title">Brush &amp; Weeds</dt>	
							<dd class="book-cover"><img class="book" src="<?php bloginfo( 'template_directory' ); ?>/images/brush-weeds-cover.png" /></dd>
						<dd class="price"><em>$</em>19<span>99</span></dd>	
					</dl>
					</a>
					<p class="buy btn"><a href="">Buy</a></p>					
				</li>
				<li>	
					<a href="">
					<dl>
						<dt class="book-title">Rainwater Harvest</dt>	
							<dd class="book-cover"><img class="book" src="<?php bloginfo( 'template_directory' ); ?>/images/rainwater-harvest-cover.png" /></dd>
								<dd class="price"><em>$</em>26<span>99</span></dd>						
					</dl>
					</a>
					<p class="buy btn"><a href="">Buy</a></p>					
				</li>
			</ul>
			</div>		
		<div id="tabs-3">
			<h4><a href="">Texas Master Naturalist Podcast</a></h4>
		<audio src="http://hw.libsyn.com/p/d/3/c/d3ce792a8682a0b9/FEB_2011_PODCAST.mp3?sid=fe2de88d5e99d4285b8223e516208945&l_sid=27156&l_eid=&l_mid=2424851" controls preload="none">
			Your browser does not support the audio element.
		</audio>
		</div>
	</div>							
	</div>
	<div id="event-bg">
	<h3 class="widget-title">Attend &amp; Engage</h3>
    <div class="event vevent">
           <dl class="first">
				<dt class="date dtstart">APR<strong>21</strong></dt>
				<dd class="title-loc">
				<h4 class="summary">Maintaining Quality of Life Conference</h4>
                   <p ><a href="">Briarcrest Country Club - Old San Antonio Road (OSR)</a> <span class="location">Bryan,TX</span></p>
               </dd>
				<dd class="sign-up btn"><a href="">Sign Up</a></dd>
           </dl>
   </div><!-- // event -->

   <div class="event vevent">
			<dl>
				<dt class="date dtstart">APR<strong>28</strong></dt>
           		<dd class="title-loc">
				<h4 class="summary">Private Applicator Training and Testing</h4>
					<p><a href="">Producers Cooperative Association - 1800 North Texas Avenue </a> - <span class="location">Bryan, Texas</span></p>
           		</dd>
				<dd class="sign-up btn"><a href="">Sign Up</a></dd>
			</dl>
	</div><!-- // event -->
	
   <div class="event vevent last">
			<dl>
				<dt class="date dtstart">MAY<strong>20</strong></dt>
           		<dd class="title-loc">
				<h4 class="summary">Dr. O. D. Butler Forage Field Day</h4>
					<p><a href="">Circle X Land and Cattle - Old San Antonio Road (OSR)
</a> - <span class="location">Bryan,TX</span></p>
           		</dd>
				<dd class="sign-up btn"><a href="">Sign Up</a></dd>
			</dl>
	</div><!-- // end event -->

	</div><!-- // end event-bg -->	

	<div id="aside-widget-area-1">
		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'county_ext' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->
	</div><!-- #aside-widget-area-1 -->		

<?php get_sidebar( 'widgets' ); ?>		

</div><!-- #aside -->	