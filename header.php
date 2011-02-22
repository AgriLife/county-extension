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
<!--[if IE8 ]> <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie.css" /> <![endif]-->
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
			<li class='ask'><a class="ext-link" href="/ask/">Ask</a></li>
			<li><a class="ext-link" href="#extension-section">Texas AgriLife Extension Service</a></li>	
			<li class="right-align"><strong>Growing Smarter Solutions</strong> Through Lifelong Education</li>		
		</ul>				
	</div><!-- #drop-nav -->	
</div><!-- #extension-section-nav -->
	
<div id="extension-section">
	<div class="flow">
		<div class="contents">
			<div class="wrap gform_wrapper">

	            <form id='gform_1' action="/" method="post" enctype='multipart/form-data' accept-charset="utf-8">
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
				 <li><a href="" title=""></a></li>
				  <li><a href="" title="">4h and youth</a>
				  </li>
				  <li><a href="" title="">Lawn and Gardening</a>
				  </li>
				  <li><a href="" title="">Livestock</a>
				  </li>
				  <li><a href="" title="">Health and saftey</a>
				  </li>
				  <li><a href="" title=""><span>Crops</span></a>
				  </li>
				  <li><a href="" title="">Insects and pest management</a></li>
				  <li><a href="" title="">Finance</a>
				  </li>
				  <li><a href="" title="">Family and home</a></li>		
				  <li><a href="" title="">Educational programs</a></li>							
				</ul>				

			</div><!-- .wrap -->
		</div><!-- .contents -->	
	</div><!-- .flow -->		
</div><!-- #extension-section -->
	
<div id="wrapper" class="hfeed">
	<div id="header">
			<div id="branding" role="banner">
				<h1 id="site-title">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?><em>Brazos County</em></a>
				</h1>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>
			<!--	<div id="state-regions"><a href="">Find Local Events, Educators,<br> and More...</a></div>	 -->			

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
		