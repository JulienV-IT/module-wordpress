<?php
/*
Plugin Name: ChangeColor
Plugin URI: http://DTC.org/plugins/changecolor/
Description: Let your users change funny color on your website!
Version: 1.0.1
Author: Camil Staps
Author URI: http://camilstaps.nl
License: GPL2
*/





register_activation_hook(__FILE__,'changecolor_install');
function changecolor_install() {
	add_option('changecolor_rounded_borders',false,'','yes');
}

register_deactivation_hook(__FILE__, 'changecolor_remove' );
function changecolor_remove() {
	delete_option('changecolor_rounded_borders');
}

/* ADMIN MENU */
add_action('admin_menu', 'changecolor_admin_menu');
function changecolor_admin_menu() {
	add_options_page('Color', 'Color', 'administrator','changecolor', 'changecolor_option_page');
}
function changecolor_option_page() {
	?>
	<h1>ChangeColor</h1>
	<h2>How can I insert changecolor?</h2>
	<p>It's really easy. The only thing you have to do is adding the <code>[changecolor]</code> shortcode to your post. Give it a try!</p>
	<h3>Shortcode variables</h3>
	<p>This shortcode accepts variables, like this: <code>[changecolor color=blue]</code>. This would make the color of the changecolor blue. Here's an overview of the variables you can use:</p>
	<ul>
		<li><code>color</code>: set the color of the changecolor. Accepted values are <code>red</code>, <code>green</code> and <code>blue</code>. Default: <code>red</code>.</li>
		<li><code>foodcolor</code>: set the color of the food. Accepted values are any color definitions (<code>#ff0000</code> for red, e.g.). Default: <code>orange</code>.</li>
		<li><code>timeout</code>: set the timeout for the changecolor to walk. You need to enter an integer, this will be the timeout in milliseconds. Default: <code>200</code>. It is highly recommended to keep this value above 100, since slower computers might not be able to handle the game with a low timeout.</li>
	</ul>
	<h3>Example</h3>
	<p><code>[changecolor color=green foodcolor=red timeout=100]</code></p>
	<p>This would give you a green changecolor, red food and a timeout of 100 milliseconds.</p>
	<?php
}
function changeColor($atts) {

	wp_enqueue_style('changecolor',plugins_url().'/changecolor/color.css');
	wp_enqueue_script('changecolor',plugins_url().'/changecolor/color.js', array('jquery'));

	if (is_array($atts))
	wp_localize_script( 'changecolor', 'changecolorSettings', $atts );
	else
	wp_localize_script( 'changecolor', 'changecolorSettings', array() );
  $return = '<div id="colorContainer">';
  $return .= '<button id="colorButton" onclick="countClick();" class="colorLabel"><span class="colorText" >Press the start button to begin.</span></button>';
	$return .= '<button id="colorButton" onclick="countClickNeg();" class="colorLabel"><span class="colorText" >Press the start button to begin.</span></button>';
  $return .= '<div id="color"></div>';
  $return .= '</div><br style="clear:both;"/>';
  return $return;
}
add_shortcode('changecolor','changeColor');
?>
