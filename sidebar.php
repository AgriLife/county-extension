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

<?php get_sidebar( 'widgets' ); ?>		
</div><!-- #aside -->	