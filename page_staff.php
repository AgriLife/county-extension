<?php
/**
 * Template Name: Contact
 * @package WordPress
 */
$googlemap = '<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript"> 
  var geocoder;
  var map;
  var query = "Toledo";
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var myOptions = {
      zoom: 8,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    codeAddress();
  }
 
  function codeAddress() {
    var address = query;
    geocoder.geocode( { \'address\': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map, 
            position: results[0].geometry.location
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
</script> ';

get_header(); ?>
		<div id="container">
			<div id="content" role="main">

<?php  if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>				
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					<hr />
					<h2>Google Map</h2>
 

<div id="map_canvas"></div> 
					
					<?php
					if (is_array($options)) {
   						echo "<h3>variables to use</h3>";
   						echo "<h4>Address</h4>";
   						echo 'address-street1: '.$options['address-street1'];
   						echo '<br/>address-street2: '.$options['address-street2'];
   						echo '<br/>address-city: '.$options['address-city'];
   						echo '<br/>address-zip: '.$options['address-zip'];
   						echo "<h4>Mailing Address</h4>";
   						echo '<br/>address-mail-street1: '.$options['address-mail-street1'];
   						echo '<br/>address-mail-street2: '.$options['address-mail-street2'];
   						echo '<br/>address-mail-city: '.$options['address-mail-city'];
   						echo '<br/>address-mail-zip: '.$options['address-mail-zip'];
   						echo "<h4>Other info</h4>";
   						echo 'phone: '.$options['phone'];
   						echo '<br />fax: '.$options['fax'];
   						
   					}
					
					?>
				</div><!-- #post-## -->

<?php endwhile; ?>
				
				<h3>Staff List</h3>
				
				<?php 
	// Get The County's Code to pass to web service
	// As configured on the county's setting page
   	if (is_array($options)) 
   		$countycode = (int) $options['county-name'];
				
	//echo "county: ".$countycode;			
	require_once("includes/nusoap/nusoap.php"); 
				

	
	//Get a handle to the webservice 
	$wsdl = new nusoap_client('https://agrilifepeople.tamu.edu/applicationAPI/organizationalModule.cfc?wsdl',true); 
	$proxy = $wsdl->getProxy();
	
	
	/* 
	 * This API will not be open to the public so we will be requiring all
	 * applications to authenticate themselves with a validation key that is a
	 * Base64 MD5 hash comprised of three data points:
	 *		1. Site ID: a numeric value assigned by SDG Team for your application
	 *		2. Access Key: a secure "password" usually created by the developer 
	 *		3. The method name being called (all lower case)
	 * The hash we use is raw binary format with a length of 16 before we encode it to base64
	 * Functions below are explained on PHP Manual http://php.net/manual/en/
	 */ 
	$hash = md5('3rVj\hK{s%gB$8*pgetpersonnel',true);
	$base64 = base64_encode($hash);
	
	/*
	 * Call the webservice getPersonnel method and pass in the parameters
	 * All parameters are required to be passed in
	 * 		3 = The TECO site ID
	 * 		$base64 = The Hash we just created
	 * 		999 = AgriLife IT Unit number
	 */
	$result = $proxy->getPersonnel(3,$base64,$countycode);
	
	// Checking for a faults
	if ($proxy->fault) {
		echo '<h2>Fault</h2><pre>';
		print_r($result);
		echo '</pre>';
	} else {
		// Check for errors
		$err = $proxy->getError();
		if ($err) {
			// Display the error
			echo '<h2>Error</h2><pre>' . $err . '</pre>';
		} else {
			// Display the result
			echo "<table>"; 
			echo "<tr>";
			echo "<th scope=\"col\">Name</th>";
			echo "<th scope=\"col\">Title</th>";
			echo "<th scope=\"col\">Email</th>";
			echo "</tr>";
			foreach ( $result['ResultQuery']['data'] as $item ) {
				echo "<tr>";
				echo "<td>".$item[2]." ".$item[3]." ".$item[4]."</td>";
				echo "<td>".$item[9]."</td>";
				echo "<td><a href=\"mailto:".$item[7]."\">".$item[7]."</a></td>";
				echo "</tr>";
			}
			echo "</table>";
			//echo '<h2>Result</h2><pre>';
			//print_r($result);
			//echo '</pre>';
		}
	}
?>

				
				
	
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
