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
	
	<div id="event-bg">
	<h3>Events this Month</h3>
    <div class="event">
           <dl class="first">
				<dt class="date">JAN<strong>13</strong></dt>
				<dd class="title-loc">
				<h4>Waco 2011 Master Marketer Program</h4>
                   <p><a href="">Texas Farm Bureau Conference Center 7410 Fish Pond Rd.</a> - <span>Waco, Texas</span></p>
               </dd>
				<dd class="sign-up btn"><a href="">Sign Up</a></dd>
           </dl>
   </div><!-- // event -->

   <div class="event">
			<dl>
				<dt class="date">JAN<strong>25</strong></dt>
           		<dd class="title-loc">
				<h4>Prospective Wine Grower Workshop</h4>
					<p><a href="">1229 N. U.S. Hwy 281, Stephenville</a> - <span>Stephenville, Texas</span></p>
           		</dd>
				<dd class="sign-up btn"><a href="">Sign Up</a></dd>
			</dl>
	</div><!-- // event -->
	
   <div class="event">
			<dl>
				<dt class="date">FEB<strong>1</strong></dt>
           		<dd class="title-loc">
				<h4>School IPM Coordinator Training</h4>
					<p><a href="">Texas AgriLife Research &amp; Extension Center 6500 Amarillo Blvd. W.</a> - <span>Amarillo, Texas</span></p>
           		</dd>
				<dd class="sign-up btn"><a href="">Sign Up</a></dd>
			</dl>
	</div><!-- // end event -->
	
   <div class="event last">
			<dl>
				<dt class="date">FEB<strong>1</strong></dt>
           		<dd class="title-loc">
				<h4>Structural Pest Control Pest Category Training</h4>
                   <p><a href="">2210 S. FM 973</a> - <span>Austin, Texas</span></p>
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