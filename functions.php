<?php

/* Show default content when it doesn't exist */

add_action('the_content', 'defaultcontent');

function defaultcontent() {
global $post;
	if ( empty($post->post_content) ) {
    	// If this post does not have any content
	 		include( STYLESHEETPATH . '/default_content.php'); 
	}
}

?>