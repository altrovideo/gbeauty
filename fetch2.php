<?php 
//database settings
include('../../../wp-load.php');

// Get the last 10 posts
// Returns posts as arrays instead of get_posts' objects
$recent_posts = wp_get_recent_posts(array(
	'numberposts' => 10
));



$data = array();

foreach($recent_posts as $post) {
  $data[] = $post;
}
    print json_encode($data);


 ?>