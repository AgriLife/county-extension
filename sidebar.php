<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage county_ext
 * @since county_ext 1.0
 */
?>
<aside id="aside">
	<div id="books-bg">
	<h3>AgriLife Reading Materials</h3>		
		<ul class="books">
			<li>
				<a href="">
				<dl>
					<dt class="book-title">Brush &amp; Weeds</dt>	
						<dd class="book-cover"><img class="book" src="<?php bloginfo( 'template_directory' ); ?>/images/brush-weeds-cover.png" /></dd>
					<!-- 	<dd class="price"><em>$</em>19<span>99</span></dd>	-->	
				</dl>
				</a>
				<p class="buy btn"><a href="">Buy</a></p>					
			</li>
			<li>	
				<a href="">
				<dl>
					<dt class="book-title">Rainwater Harvest</dt>	
						<dd class="book-cover"><img class="book" src="<?php bloginfo( 'template_directory' ); ?>/images/rainwater-harvest-cover.png" /></dd>
							<!-- 	<dd class="price"><em>$</em>26<span>99</span></dd>	-->							
				</dl>
				</a>
				<p class="buy btn"><a href="">Buy</a></p>					
			</li>
		</ul>			
	</div>
	<div id="event-bg">
	<h3>Upcoming Events</h3>
    <div class="event vevent">
           <dl class="first">
				<dt class="date dtstart">JAN<strong>13</strong></dt>
				<dd class="title-loc">
				<h4 class="summary">Waco 2011 Master Marketer Program</h4>
                   <p ><a href="">Texas Farm Bureau Conference Center 7410 Fish Pond Rd.</a> - <span class="location">Waco, Texas</span></p>
               </dd>
				<dd class="sign-up btn"><a href="">Sign Up</a></dd>
           </dl>
   </div><!-- // event -->

   <div class="event vevent">
			<dl>
				<dt class="date dtstart">JAN<strong>25</strong></dt>
           		<dd class="title-loc">
				<h4 class="summary">Prospective Wine Grower Workshop</h4>
					<p><a href="">1229 N. U.S. Hwy 281, Stephenville</a> - <span class="location">Stephenville, Texas</span></p>
           		</dd>
				<dd class="sign-up btn"><a href="">Sign Up</a></dd>
			</dl>
	</div><!-- // event -->
	
   <div class="event vevent">
			<dl>
				<dt class="date dtstart">FEB<strong>1</strong></dt>
           		<dd class="title-loc">
				<h4 class="summary">School IPM Coordinator Training</h4>
					<p><a href="">Texas AgriLife Research &amp; Extension Center 6500 Amarillo Blvd. W.</a> - <span class="location">Amarillo, Texas</span></p>
           		</dd>
				<dd class="sign-up btn"><a href="">Sign Up</a></dd>
			</dl>
	</div><!-- // end event -->
	
   <div class="event vevent last">
			<dl>
				<dt class="date dtstart">FEB<strong>1</strong></dt>
           		<dd class="title-loc">
				<h4 class="summary">Structural Pest Control Pest Category Training</h4>
                   <p><a href="">2210 S. FM 973</a> - <span class="location">Austin, Texas</span></p>
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

</aside>