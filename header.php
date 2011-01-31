<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage county_ext
 * @since county_ext 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;">	
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * county_ext_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="extension-section-nav">
	<div id="drop-nav">
		<ul>
			<li><a class="ext-link" href="/ask/">Ask a Question</a></li>
			<li><a class="ext-link" href="#extension-section">Texas AgriLife Extension Service</a></li>					
	</div><!-- #drop-nav -->	
</div><!-- #extension-section-nav -->
	
<div id="extension-section">
	<div class="flow">
		<div class="contents">
			<div class="wrap">

	            <form action="" method="" accept-charset="utf-8">
	                <fieldset class="first">
	                    <div class="container">
	                        <label for="name">
	                            Your name
	                        </label>
	                        <input type="text" name="name" id="name" value="">
	                    </div>
	                    <div class="container">
	                        <label for="email">
	                            Your email address
	                        </label>
	                        <input type="text" name="email" id="email" value="">
	                    </div>
	                    <div class="container">

	                    </div>
	                </fieldset><!-- /.first -->
	                <fieldset class="second">
	                    <div class="container">
	                        <label for="message">
	                            Your Question
	                        </label>
	                        <textarea name="message" id="message" rows="7" cols="35"></textarea>
	                    </div>

	                </fieldset><!-- /.second -->
	                <div class="button-container">
	                    <button class="btn" type="reset">Cancel</button>
	                    <button class="btn" type="submit" name="submit">Send</button>
	                    <input type="hidden" name="sent" value="true">
	                </div><!-- /.button-container -->
	            </form>
				
			<ul id="quick-links">	
				 <li><a class="sub" href="http://agrilifeextension.tamu.edu/programs/index.php" title=""><span>Programs</span></a>
				    <div class="sub">
				      <ul>
				        <li><a href="http://agrilifeextension.tamu.edu/programs/index.php" title="">Programs Overview</a></li>
				        <li><a href="http://agrilifeextension.tamu.edu/programs/index/index.php" title="">Program Index</a></li>
				      </ul>
				    </div>
				  </li>
				  <li><a class="sub" href="http://agrilifeextension.tamu.edu/events/index.php" title=""><span>Resources</span></a>
				    <div class="sub">
				      <ul>
				        <li><a href="http://agrilifeextension.tamu.edu/extresources/index.php" title="">Resources Overview</a></li>
				        <li><a href="http://extension.org/ask">Ask an Expert</a></li>
				        <li><a href="http://agrilifebookstore.org">AgriLife Bookstore</a></li>
				        <li><a href="http://youtube.com/agrilifevideo">AgriLife YouTube Videos</a></li>
				        <li><a href="http://flickr.com/photos/agrilife">AgriLife Flickr Photos</a></li>
				      </ul>
				    </div>
				  </li>
				  <li><a class="sub" href="http://agrilifeextension.tamu.edu/programs/index.php" title=""><span>Services</span></a>
				    <div class="sub">
				      <ul>
				        <li><a href="http://agrilifeextension.tamu.edu/programs/continuinged/index.php" title="">Certification and Continuing Education</a></li>
				        <li><a href="http://cnrit.tamu.edu/ganlab/GANlab_webpage.htm">Grazingland Animal Nutrition Laboratory</a></li>
				        <li><a href="http://soiltesting.tamu.edu">Soil, Water, and Forage Testing Laboratory</a></li>
				        <li><a href="http://plantclinic.tamu.edu">Texas Plant Disease Diagnostic Laboratory</a></li>
				        <li><a href="http://ws.tamu.edu">Wildlife Services</a></li>
				      </ul>
				    </div>
				  </li>
				  <li><a class="sub" href="http://agrilifeextension.tamu.edu/events/index.php" title=""><span>Events</span></a>
				    <div class="sub">
				      <ul>
				        <li><a href="http://agrilifeextension.tamu.edu/events/index.php" title="">Events Overview</a></li>
				      </ul>
				    </div>
				  </li>
				  <li><a class="sub" href="http://agrilifeextension.tamu.edu/contact/index.php" title=""><span>Contacts</span></a>
				    <div class="sub">
				      <ul>
				        <li><a href="http://county-tx.tamu.edu/">County Offices</a></li>
				        <li><a href="http://agdirectory.tamu.edu/">Employee Directory</a></li>
				        <li><a href="http://agrilifeextension.tamu.edu/contact/index.php" title="">FAQs</a></li>
				        <li><a href="http://agnews.tamu.edu/contact/">Media Relations</a></li>
				      </ul>
				    </div>
				  </li>
				  <li><a class="sub" href="http://agrilifeextension.tamu.edu/about/index.php" title=""><span>About</span></a>
				    <div class="sub">
				      <ul>
				        <li><a href="http://agrilifeextension.tamu.edu/about/index.php" title="">Mission/Overview</a></li>
				        <li><a href="http://agrilifeextension.tamu.edu/about/leadership/index.php" title="">Administrative Leadership</a></li>
				        <li><a href="http://agrilifeextension.tamu.edu/about/strategyimpact/index.php" title="">Strategic Plan &amp; Impacts</a></li>
				        <li><a class="sub" href="http://agrilifeextension.tamu.edu/careers/index.php" title="">Careers</a></li>
				        <li><a href="http://tamus.edu">Texas A&amp;M System</a></li>
				      </ul>
				    </div>
				  </li>
				  <li><a class="sub" href="http://agrilifeextension.tamu.edu/volunteer/index.php" title=""><span>Volunteer</span></a>
				    <div class="sub">
				      <ul>
				        <li><a href="http://agrilifeextension.tamu.edu/volunteer/index.php" title="">Be an Extension Volunteer</a></li>
				        <li><a href="http://agrilifeextension.tamu.edu/volunteer/community/index.php" title="">Community Involvement</a></li>
				        <li><a href="http://agrilifeextension.tamu.edu/volunteer/programs/index.php" title="">Volunteer Programs</a></li>
				        <li><a href="http://agrilifeextension.tamu.edu/volunteer/partner/index.php" title="">Partner with Extension</a></li>
				      </ul>
				    </div>
				  </li>
				</ul>				

			</div><!-- .wrap -->
		</div><!-- .contents -->	
	</div><!-- .flow -->		
</div><!-- #extension-section -->
	
<div id="wrapper" class="hfeed">
	<div id="header">
			<div id="branding" role="banner">
				<h1 id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				</h1>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>
				<div id="state-regions"><a href="">Event Map</a></div>				

			</div><!-- #branding -->
	</div><!-- #header -->		
			<nav id="access" role="navigation">	
				<div class="search">
				<?php get_search_form(); ?>
				</div><!-- end .search -->		
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'county_ext' ); ?>"><?php _e( 'Skip to content', 'county_ext' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>			
			</nav><!-- #access -->
		