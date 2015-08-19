<?php
/*
    Plugin Name: TWI Woocommerce Grid/Slider/Carousel Lite
	Plugin URI: http://codecanyon.net/item/woocommerce-product-slidercarouselgrid/7928428?ref=twibd
	Description: Simple, easy and super flexible Awesome Woocommerce Grid/Slider/Carousel plugin for wordpress by TWI.
	Version: 1.0.1
	Author: Khairul Alam
	Author URI: http://codecanyon.net/user/twibd
*/
include_once(ABSPATH . 'wp-admin/includes/plugin.php');
if (is_plugin_active('woocommerce/woocommerce.php')) {
	define('TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR', plugin_dir_path(__FILE__));
	define('TWI_AWESOME_WOO_SLIDER_CAROUSEL_URL', plugin_dir_url(__FILE__));
	
	require (TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR .'/config.php');
	
	require_once (TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR .'/lang.php');
	require_once (TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR .'/cp/cp.php');
	require_once (TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR .'/scripts_load.php');
	
	require_once (TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR .'/shortcode.php');
}
if (is_plugin_inactive('woocommerce/woocommerce.php')) {
	function twi_woo_admin_notice() {
	    ?>
	    <div class="error">
	        <p><?php _e( '<i><b><span style="color:#9C5D90">You must need to install "Woocommerce" plugin first to show the options of "TWI Awesome Woocommerce Grid/Slider/Carousel" plugin.</span></b></i>','twi_awesome_woo_slider_carousel'); ?></p>
	    </div>
	    <?php
	}
	add_action( 'all_admin_notices', 'twi_woo_admin_notice' );
}
function twi_woo_removeWhitespace($buffer){
    return preg_replace('/\s+/', ' ', $buffer);
}
?>