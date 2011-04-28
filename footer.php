<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage county_ext
 * @since county_ext 1.0
 */
 $options = get_option('AgrilifeCountyOptions');
 GLOBAL $options;
?>
</div><!-- #wrapper -->
	<div id="footer" role="contentinfo">
		<div class="wrap">
		<div id="about">
			<div class="about">			
				<h4>About</h4>
				<a href="http://www.youtube.com/watch?v=q_UsLHl_YDQ"><img src="<?php bloginfo( 'template_directory' ); ?>/images/about_video.jpg" alt="link to Extension about video" /></a>
				<p>A unique education agency, the Texas AgriLife Extension Service teaches Texans wherever they live, extending research-based knowledge to benefit their families and communities.</p>	
			</div><!-- .about -->
		</div><!-- #about -->		
		<div id="popular-links">
			<div class="popular-links">			
				<h4>Popular Links</h4>
				<a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/images/agrilife_ext_logo.png" alt="AgriLife Extension video" /></a>	
				<ul>
					<li><a href="">County Extension Offices</a></li>
					<li><a href="">Research and Extension 
					Centers</a></li>
					<li><a href="">Contact Directory</a></li>
					<li><a href="">Media Contacts</a></li>					
					<li><a href="">Corporate Relations</a></li>
					<li><a href="">Texas 4-H and Youth Dev.</a></li>					
					<li><a href="">Strategic Plans, Impacts and Roadmaps</a></li>
					<li class="last"><a href="">Employment Opportunities</a></li>										
				</ul>		
			</div><!-- .popular-links -->			
		</div><!-- #popular-links -->
		
		<div id="texas-a-m">
			<div class="texas-a-m">			
			<h4>Required Links</h4>
				<a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/images/texas-a-m-system.png" alt="Texas A&amp;M System image" /></a>	
				<ul>
					<li><a href="">Compact with Texans</a></li>
					<li><a href="">Privacy and Security</a></li>
					<li><a href="">Accessibility Policy</a></li>
					<li><a href="">State Link Policy</a></li>					
					<li><a href="">Statewide Search</a></li>
					<li><a href="">Plug-ins</a></li>					
					<li><a href="">Equal Opportunity for Educational Programs Statement</a></li>
					<li><a href="">Veterans Benefits</a></li>		
					<li><a href="">Military Families</a></li>
					<li><a href="">Risk, Fraud &amp; Misconduct Hotline</a></li>					
					<li><a href="">Texas Homeland Security</a></li>
					<li class="last"><a href="">Open Records/Public Information</a></li>																		
				</ul>		
			</div><!-- .texas-a-m -->			
		</div><!-- #texas-a-m -->				
		
		<div id="contact">
			<div class="contact">			
			<h4>Contact</h4>
				<!--<a href="/contact/#map"><img src="<?php bloginfo( 'template_directory' ); ?>/images/map.png" alt="map of AgriLife Offices" /></a>-->
				<?php $mapaddress=$options['address-street1'].' '.$options['address-street2'].' '.$options['address-city'].', TX '.$options['address-zip'];?>
				<a href="/contact/#map"><img src="http://maps.google.com/maps/api/staticmap?size=175x101&markers=size:mid%7Ccolor:blue%7Clabel:Office%7C<?php echo urlencode($mapaddress); ?>&sensor=false" height="101" width="175" alt="" /></a>
				<ul>
					<li><a href="/contact/#map">View Larger Map</a></li>
					<li>Open 8 am - 5 pm; M-F </li>
				<?php
				if (is_array($options)) {
					if(isset($options['address-street1'])) {
						echo '<li>'./*$options['county-name-human'].*/' County Extension Office <br />'.$options['address-street1'];
						if($options['address-street2']<>'')
							echo '<br />'.$options['address-street2'];
						echo '<br .>'.$options['address-city'].', TX '.$options['address-zip'].'</li>';
					}
					if($options['phone']<>'')
						echo '<li>Phone: '.$options['phone'].'</li>';
					if($options['fax']<>'')
						echo '<li>Fax: '.$options['fax'].'</li>';	 						
				}
				?>
				</ul>
				
											
			</div><!-- .contact -->
		</div><!-- #contact -->
		
		<div id="agrilife-bookstore">
			<div class="agrilife-bookstore">			
			<h4>AgriLife Bookstore</h4>
				<a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/images/bookstore-books.png" alt="Image of books for the AgriLife Bookstore" /></a>
				<p>The Texas AgriLife Extension Bookstore offers educational publications, CDs and videos on topics related to agriculture, 4-H and youth development.</p>				
			</div><!-- .agrilife-bookstore -->			
		</div><!-- #agrilife-bookstore -->
						
		</div><!-- .wrap -->		
	</div><!-- #footer -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
