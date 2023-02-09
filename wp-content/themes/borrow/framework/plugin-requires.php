<?php
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'borrow_register_required_plugins' );
function borrow_register_required_plugins() {
    $protocol = is_ssl() ? 'http' : 'http';
	$plugins = array(
		// This is an example of how to include a plugin from the WordPress Plugin Repository.		
		array(
            'name'               => esc_html__( 'Meta Box', 'borrow'),
            'slug'               => 'meta-box',
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
		array(
            'name'      => esc_html__( 'Redux Framework', 'borrow'),
            'slug'      => 'redux-framework',
            'required'           => true,
			'force_activation'   => false,
            'force_deactivation' => false,
        ),	
		array(
            'name'      => esc_html__( 'Contact Form 7', 'borrow'),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
        array(
            'name'      => esc_html__( 'Breadcrumb NavXT', 'borrow'),
            'slug'      => 'breadcrumb-navxt',
            'required'  => true,
        ),
        array(
            'name'               => esc_html__( 'Newsletter', 'borrow'), // The plugin name
            'slug'               => 'newsletter', // The plugin slug (typically the folder name)
            'required'           => false, // If false, the plugin is only 'recommended' instead of required
        ),		
		array(
            'name'               => esc_html__('WPBakery Visual Composer', 'borrow'), // The plugin name.
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/js_composer.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '6.10.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),        
        array(            
            'name'               => esc_html__( 'OT Team', 'borrow'), // The plugin name.
            'slug'               => 'ot_team', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/borrow/ot_team.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ), 
		array(            
			'name'               => esc_html__( 'OT Loan', 'borrow'), // The plugin name.
            'slug'               => 'ot_loan', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/borrow/ot_loan.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => esc_html__( 'OT Gallery', 'borrow'), // The plugin name.
            'slug'               => 'ot_gallery', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/borrow/ot_gallery.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => esc_html__( 'OT Credit Card', 'borrow'), // The plugin name.
            'slug'               => 'ot_creditcard', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/borrow/ot_creditcard.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => esc_html__( 'OT Lender', 'borrow'), // The plugin name.
            'slug'               => 'ot_lender', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/borrow/ot_lender.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => esc_html__( 'OT Bank Account', 'borrow'), // The plugin name.
            'slug'               => 'ot_bank_account', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/borrow/ot_bank_account.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => esc_html__( 'OT Forex', 'borrow'), // The plugin name.
            'slug'               => 'ot_forex', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/borrow/ot_forex.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ), 
        array(            
            'name'               => esc_html__( 'OT Visual Composer', 'borrow'), // The plugin name.
            'slug'               => 'ot_composer', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/borrow/ot_composer.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.3.7', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
		array(            
            'name'               => esc_html__( 'WP Amortization Calculator', 'borrow'), // The plugin name.
            'slug'               => 'shmac', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/shmac.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.5.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        array(            
            'name'               => esc_html__( 'OT One Click Import Demo', 'borrow'), // The plugin name.
            'slug'               => 'ot-themes-one-click-import', // The plugin slug (typically the folder name).
            'source'             => esc_url( $protocol . '://oceanthemes.net/plugins-required/borrow/ot-themes-one-click-import.zip' ), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.4.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ), 
	);
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
