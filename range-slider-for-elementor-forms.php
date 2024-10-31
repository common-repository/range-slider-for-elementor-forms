<?php
/**
 * Plugin Name: Range Slider for Elementor Forms 
 * Description: Elementor International Telephone Input easy phone number input
 * Plugin URI: https://add-ons.org/plugin/elementor-forms-range-slider-fields/
 * Requires Plugins: elementor
 * Version: 1.0.0
 * Author: add-ons.org
 * Author URI: https://add-ons.org/
 * Elementor tested up to: 3.24
 * Elementor Pro tested up to: 3.24
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if (!defined('YEEADDONS_ELEMENTOR_RANGE_SLIDER_PLUGIN_PATH')) {
    define( 'YEEADDONS_ELEMENTOR_RANGE_SLIDER_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
    define( 'YEEADDONS_ELEMENTOR_RANGE_SLIDER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
    add_action( 'elementor_pro/forms/fields/register', 'yeeaddons_add_new_range_slider_field' );
    function yeeaddons_add_new_range_slider_field($form_fields_registrar){
        require_once( YEEADDONS_ELEMENTOR_RANGE_SLIDER_PLUGIN_PATH."fields/range_slider.php" );
        $form_fields_registrar->register( new \Yeeaddons_Elementor_Range_Field() );
    }
}