<?php
/**
 * Header Widget Header Configuration.
 *
<<<<<<< HEAD
 * @author      Astra
 * @package     Astra
 * @copyright   Copyright (c) 2023, Astra
=======
 * @package     Astra
>>>>>>> bb56ea5 (projet final)
 * @link        https://wpastra.com/
 * @since       4.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Header Widget header builder Customizer Configurations.
 *
 * @since 4.5.2
 * @return array Astra Customizer Configurations with updated configurations.
 */
function astra_header_widget_configuration() {
	$_configs = Astra_Builder_Base_Configuration::prepare_widget_options( 'header' );

	if ( Astra_Builder_Customizer::astra_collect_customizer_builder_data() ) {
		array_map( 'astra_save_header_customizer_configs', $_configs );
	}

	return $_configs;
}

if ( Astra_Builder_Customizer::astra_collect_customizer_builder_data() ) {
<<<<<<< HEAD
	astra_header_widget_configuration();
=======
	add_action( 'init', 'astra_header_widget_configuration' );
>>>>>>> bb56ea5 (projet final)
}
