<?php
/* enqueue script for parent theme stylesheeet */
function childtheme_parent_styles() {

 // enqueue style
 wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );

}
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');



/* code complet pour afficher une adresse IP */
function ip_visiteur() {
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	elseif(isset($_SERVER['HTTP_CLIENT_IP']))
	{
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	else
	{
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}
add_shortcode( 'affiche_ip', 'ip_visiteur' );


// function redirect(){
//   header("Location: https://shambhalafm.net/");
// }
//
// add_shortcode('redirect', 'redirect');
