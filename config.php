<?php
/**
  * Include Vafpress Framework
*/
require_once (TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR .'/inc/bootstrap.php');
require_once (TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR .'/admin/custom_data.php');

function twi_woo_slider_grid_options( $name ){
    return vp_option( "twi_woo_slider_car_options." . $name );
}

$twi_woo_slider_grid = TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR . '/admin/option/option.php';
	
$twi_grid_slider_options = new VP_Option(array(
		'is_dev_mode'           => false,                                  // dev mode, default to false
		'option_key'            => 'twi_woo_slider_car_options',             // options key in db, required
		'page_slug'             => 'twi_grid_slider_car_options',              // options page slug, required
		'template'              => $twi_woo_slider_grid,                            // template file path or array, required
		'menu_page'             => array(
										//'position' => 26,
									),
		'use_auto_group_naming' => true,                                   // default to true
		'use_util_menu'         => true,                                  // default to true, shows utility menu
		'use_exim_menu'         => false,
		'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
		'layout'                => 'fluid',                                // fluid or fixed, default to fixed
		'page_title'            => __( 'TWI Awesome Woocommerce Grid/Slider/Carousel Options', 'twi_awesome_woo_slider_carousel' ), // page title
		'menu_label'            => __( 'TWI Woo Options', 'twi_awesome_woo_slider_carousel' ), // menu label
));

/* Metabox */
$twi_woo_mb_main  = TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR . '/admin/metabox/twi-woo-mb.php';	
$twi_woo_mb_show = new VP_Metabox($twi_woo_mb_main);

/**
  * Shortcode
*/

function twi_woo_init()
{
       // Built path to shortcode generator template array file
        $shortcode_path = TWI_AWESOME_WOO_SLIDER_CAROUSEL_DIR . '/admin/shortcode/shortcode.php';
        // Initialize the ShortcodeGenerator's object
        $tmpl_shortcode = array(
        'name'           => 'twi_woo_shortcode',
        'template'       => $shortcode_path,
        'modal_title'    => __( 'TWI Advanced Grid/Slider/Carousel', 'twi_awesome_woo_slider_carousel'),
        'button_title'   => __( 'TWI Advanced Grid/Slider/Carousel', 'twi_awesome_woo_slider_carousel'),
        'types'          => array( '*' ),
        'main_image'     => TWI_AWESOME_WOO_SLIDER_CAROUSEL_URL . '/images/shortcode.png',
        'sprite_image'   => TWI_AWESOME_WOO_SLIDER_CAROUSEL_URL . '/images/shortcode.png',
     );
    $twi_woo_shortcode = new VP_ShortcodeGenerator($tmpl_shortcode);
}
// the safest hook to use, since Vafpress Framework may exists in Theme or Plugin
add_action( 'after_setup_theme', 'twi_woo_init' );

?>