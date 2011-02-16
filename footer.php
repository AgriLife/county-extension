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
?>
</div><!-- #wrapper -->
	<div id="footer" role="contentinfo">
		<div class="wrap">
		<div id="about">
			<div class="about">			
				<h4>About</h4>
				<a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/images/about_video.png" alt="liinke to Extension about video" /></a>
				<p>With teaching, research, extension and laboratory facilities throughout Texas, Texas A&amp;M AgriLife serves people of all ages and backgrounds and is a cornerstone of one of the state's premier institutions of higher education.</p>	
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
			<h4>Texas A&amp;M</h4>
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
				<a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/images/map.png" alt="map of AgriLife Offices" /></a>
				<ul>
					<li><a href="">View Larger Map</a></li>
					<li>Texas A&amp;M AgriLife</li>
					<li>Jack K. Williams</br> Administration Building</br> 2142 TAMU</br> College Station, TX 77843</li>
					<li>Phone: (979) 845-4747</li>					
					<li>Fax: (979) 845-4242</li>
					<li><a href="">Email Our Team</a></li>					
					<li>Web Site Contact: <a href="">AgriLife Communications</a></li>
					<li class="last">&copy; 2010 All rights reserved</li>										
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
