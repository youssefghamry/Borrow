<?php
/*
Plugin Name: OT One Click Import Demo (New)
Plugin URI: http://oceanthemes.net/
Description: OT One Click Import Demo plugin for Reduxframework extensions loading - Borrow
Version: 1.4.2
Author: OceanThemes
Author URI: http://oceanthemes.net/
*/

// Set your ReduxFrameWork Option name below //
$redux_opt_name = "borrow_option";

if ( !function_exists( 'borrow_one_click_import_demo_extension_loader' ) ) {
	function borrow_one_click_import_demo_extension_loader( $ReduxFramework ) {
		$path    = dirname( __FILE__ ) . '/extensions/';
		$folders = scandir( $path, 1 );
		foreach ( $folders as $folder ) {
			if ( $folder === '.' or $folder === '..' or ! is_dir( $path . $folder ) ) {
				continue;
			}
			$extension_class = 'ReduxFramework_Extension_' . $folder;
			if ( ! class_exists( $extension_class ) ) {
				// In case you wanted override your override, hah.
				$class_file = $path . $folder . '/extension_' . $folder . '.php';
				$class_file = apply_filters( 'redux/extension/' . $ReduxFramework->args['opt_name'] . '/' . $folder, $class_file );
				if ( $class_file ) {
					require_once $class_file;
				}
			}
			if ( ! isset( $ReduxFramework->extensions[ $folder ] ) ) {
				$ReduxFramework->extensions[ $folder ] = new $extension_class( $ReduxFramework );
			}
		}
	}
	// Modify {$redux_opt_name} to match your opt_name
	add_action( "redux/extensions/{$redux_opt_name}/before", 'borrow_one_click_import_demo_extension_loader', 0 );
}

if ( !function_exists( 'wbc_filter_title' ) ) {

	/**
	 * Filter for changing demo title in options panel so it's not folder name.
	 *
	 * @param [string] $title name of demo data folder
	 *
	 * @return [string] return title for demo name.
	 */

	function wbc_filter_title( $title ) {
		return trim( ucfirst( str_replace( "-", " ", $title ) ) );
	}

	// Uncomment the below
	add_filter( 'wbc_importer_directory_title', 'wbc_filter_title', 10 );
}

if ( !function_exists( 'wbc_importer_description_text' ) ) {

	/**
	 * Filter for changing importer description info in options panel
	 * when not setting in Redux config file.
	 *
	 * @param [string] $title description above demos
	 *
	 * @return [string] return.
	 */

	function wbc_importer_description_text( $description ) {

		$message = '<p>'. esc_html__( 'Best if used on new WordPress install.', 'framework' ) .'</p>';
		$message .= '<p>'. esc_html__( 'Images are for demo purpose only.', 'framework' ) .'</p>';

		return $message;
	}

	// Uncomment the below
	add_filter( 'wbc_importer_description', 'wbc_importer_description_text', 10 );
}

if ( !function_exists( 'wbc_importer_label_text' ) ) {

	/**
	 * Filter for changing importer label/tab for redux section in options panel
	 * when not setting in Redux config file.
	 *
	 * @param [string] $title label above demos
	 *
	 * @return [string] return no html
	 */

	function wbc_importer_label_text( $label_text ) {

		$label_text = 'Demo Importer';

		return $label_text;
	}

	// Uncomment the below
	add_filter( 'wbc_importer_label', 'wbc_importer_label_text', 10 );
}

/************************************************************************
* Extended Import Demo:
* Way to set menu, import revolution slider, and set home page.
*************************************************************************/

if ( !function_exists( 'ot_extended_import_demo' ) ) {
	function ot_extended_import_demo( $demo_active_import , $demo_directory_path ) {

		reset( $demo_active_import );
		$current_key = key( $demo_active_import );

		/************************************************************************
		* Import slider(s) for the current demo being imported
		*************************************************************************/

		if ( class_exists( 'RevSlider' ) ) {

			//If it's demo3 or demo5
			$wbc_sliders_array = array(
				'borrow' => 'home-slider.zip', //Set slider zip name				
			);

			if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_sliders_array ) ) {
				$wbc_slider_import = $wbc_sliders_array[$demo_active_import[$current_key]['directory']];

				if ( file_exists( $demo_directory_path.$wbc_slider_import ) ) {
					$slider = new RevSlider();
					$slider->importSliderFromPost( true, true, $demo_directory_path.$wbc_slider_import );
				}
			}
		}

		/************************************************************************
		* Setting Menus
		*************************************************************************/

		// If it's archi-dark and archi-light
		$wbc_menu_array = array( 
			'home-page-1',
			'home-page-2',
			'home-page-3',
			'home-page-4',
			'business-loan-page',
			'students-loan-page',
			'home-bank',
			'home-tabbed',
		);

		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && in_array( $demo_active_import[$current_key]['directory'], $wbc_menu_array ) ) {
			$main_menu = get_term_by( 'name', 'Primary', 'nav_menu' );
			set_theme_mod( 'nav_menu_locations', array(
					'primary' => $main_menu->term_id,
				)
			);
		}

		/************************************************************************
		* Set HomePage
		*************************************************************************/

		// array of demos/homepages to check/select from
		$wbc_home_pages = array(
			'home-page-1' => 'Home',
			'home-page-2' => 'Home 2',
			'home-page-3' => 'Home 3',
			'home-page-4' => 'Home 4',
			'business-loan-page' => 'Business Loan',
			'students-loan-page' => 'Students Loan',
			'home-bank' => 'Home Bank',
			'home-tabbed' => 'Home Tabbed',
		);

		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_home_pages ) ) {
			$page = get_page_by_title( $wbc_home_pages[$demo_active_import[$current_key]['directory']] );
			if ( isset( $page->ID ) ) {
				update_option( 'page_on_front', $page->ID );
				update_option( 'show_on_front', 'page' );
			}
		}
	}

	// Uncomment the below
	add_action( 'wbc_importer_after_content_import', 'ot_extended_import_demo', 10, 2 );
}

?>
