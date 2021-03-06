<?php
/**
 * Plugin Name: Editors - READ the userlist
 * Plugin URI: http://multimusen.dk
 * Description: How to get data from the WP database
 * Version: 1.0
 * Author: Per Thykjaer Jensen
 * Author URI: http://www.multimusen.dk
 * License: GPLv3
**/

 // register the shortcode in WP. The shortcode is [editors]
add_shortcode( 'editors', 'showEditors' );

// method
function showEditors(){

	global $wpdb; // you have to globalize wpdb before use

	$sql = "SELECT `display_name` FROM `wp_users` ORDER BY `display_name`";
	$editors = $wpdb->get_results($sql);

	echo "<aside><ul>";

    foreach($editors as $row){
    		
        echo "<li>" . $row->display_name . "</li>";	
    }

	echo "</ul></aside>";
}


?>