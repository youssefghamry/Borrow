<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "borrow_option";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'borrow_option',
        'use_cdn' => TRUE,
        'display_name'     => $theme->get('Name'),
        'display_version'  => $theme->get('Version'),
        'page_title' => 'Borrow Options',
        'update_notice' => FALSE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Borrow Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => FALSE,
        'dev_mode'   => false,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'admin_bar_priority' => 50,
        'page_priority' => 90,
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );    

    Redux::set_args( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $help_tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Theme Information 1', 'borrow' ),
            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'borrow' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => esc_html__( 'Theme Information 2', 'borrow' ),
            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'borrow' )
        )
    );
    Redux::set_help_tab( $opt_name, $help_tabs );

    // Set the help sidebar
    $content = esc_html__( 'This is the sidebar content, HTML is allowed.', 'borrow' );
    Redux::set_help_sidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    // ACTUAL DECLARATION OF SECTIONS          
      
    Redux::set_section( $opt_name, array(
        'icon' => ' el-icon-stackoverflow',
        'title' => esc_html__('Miscellaneous Settings', 'borrow'),
        'fields' => array(
            array(
                'id'       => 'bread-switch',
                'type'     => 'switch', 
                'title'    => esc_html__('Breadcrumbs Off?', 'borrow'),
                'subtitle' => esc_html__('Look, it\'s on!', 'borrow'),
                'default'  => true,
            ),
            array(
                'id' => 'gmap_api',
                'type' => 'text',
                'title' => esc_html__('Google Map API Key', 'borrow'),
                'subtitle' => esc_html__('Add your Google map api key', 'borrow'),
                'desc' => esc_html__('Create your Gmap API key here: https://developers.google.com/maps/documentation/javascript/', 'borrow'),
                'default' => 'AIzaSyDZJDaC3vVJjxIi2QHgdctp3Acq8UR2Fgk'
            ),                                                        
        )
    ) );

    Redux::set_section( $opt_name, array(
        'icon' => ' el-icon-repeat',
        'title' => esc_html__('Preload Settings', 'borrow'),
        'fields' => array(            
            array(
                'id'       => 'preload-switch',
                'type'     => 'switch', 
                'title'    => esc_html__('Preload Off?', 'borrow'),
                'subtitle' => esc_html__('If you do not want to use preload, you can turn it off.', 'borrow'),
                'default'  => true,
            ),  
            array(
                'id' => 'preloader_mode',
                'type' => 'select',
                'title' => esc_html__('Preloader Style', 'borrow'),
                'subtitle' => esc_html__('Preloader style: preload logo or preload progress', 'borrow'),
                'desc' => esc_html__('You can choose one of two preload style, Default: Progress Style.', 'borrow'),
                'options'  => array(
                    'preloader_progress' => 'Progress Style',                    
                    'preloader_logo' => 'Logo Style',                                                                 
                ),
                'default' => 'preloader_progress',
            ),             
            array(
                'id' => 'preload-text-color',
                'type' => 'color',
                'title' => esc_html__('Preload Text Color', 'borrow'),
                'subtitle' => esc_html__('Pick the preload text color (default: #ffffff).', 'borrow'),
                'default' => '#ffffff',
                'validate' => 'color',
            ), 
            array(
                'id' => 'preload-background-color',
                'type' => 'color',
                'title' => esc_html__('Preload Background Color', 'borrow'),
                'subtitle' => esc_html__('Pick the preload background color (default: #000000).', 'borrow'),
                'default' => '#000000',
                'validate' => 'color',
            ), 
            array(
                'id' => 'preload-typography',
                'type' => 'typography',
                'output' => array('#royal_preloader.royal_preloader_logo .royal_preloader_percentage, #royal_preloader.royal_preloader_progress .royal_preloader_percentage'),
                'title' => esc_html__('Preloader percentage', 'borrow'),
                'subtitle' => esc_html__('Number 100% running', 'borrow'),
                'google' => true,
                'letter-spacing' => true, 
                'word-spacing' => true, 
                'text-transform' => true,            
                'units'       =>'px', 
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ),  
        )
    ) );

    Redux::set_section( $opt_name, array(
        'title'      => esc_html__( 'Logo Style', 'borrow' ),
        'id'         => 'preload-logo-style',        
        'subsection' => true,
        'fields'     => array(
            array(
                'id' => 'logo_preload',
                'type' => 'media',
                'url' => false,
                'title' => __('Logo Preload (Logo Style)', 'borrow'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Upload your logo preload', 'borrow'),
                'subtitle' => __('Recommended size: 158px & 42px', 'borrow'),
                'default' => array('url' => get_template_directory_uri().'/images/logo.png'),
            ),
            array(
                'id' => 'prelogo_width',
                'type' => 'text',
                'title' => __('Logo width (Logo Style)', 'borrow'),
                'subtitle' => __('Input logo width, default: 158', 'borrow'),
                'default' => '158'
            ),  
            array(
                'id' => 'prelogo_height',
                'type' => 'text',
                'title' => __('Logo height (Logo Style)', 'borrow'),
                'subtitle' => __('Input logo height, default: 42', 'borrow'),
                'default' => '42'
            ),          
        )
    ) );

    Redux::set_section( $opt_name, array(
        'icon' => ' el-icon-picture',
        'title' => esc_html__('Logo & Favicon Settings', 'borrow'),
        'fields' => array(
            array(
                'id' => 'favicon',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Favicon', 'borrow'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('Upload your favicon.', 'borrow'),
                'subtitle' => esc_html__('Favicon', 'borrow'),
                'default' => array('url' => get_template_directory_uri().'/images/favicon.jpg'),                     
            ),
            array(
                'id' => 'logo',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Logo', 'borrow'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('Upload your logo.', 'borrow'),
                'subtitle' => esc_html__('Logo', 'borrow'),
                'default' => array('url' => get_template_directory_uri().'/images/logo.png'),                     
            ),                                             
        )
    ) );    
    Redux::set_section( $opt_name, array(
        'icon' => 'el-icon-qrcode',
        'title' => esc_html__('Header Settings', 'borrow'),
        'fields' => array(  
            array(
                'id'       => 'header-sticky-switch',
                'type'     => 'switch', 
                'title'    => esc_html__('Header Sticky Off?', 'borrow'),
                'subtitle' => esc_html__('If you do not want to use Header Sticky, you can turn it off.', 'borrow'),
                'default'  => true,
            ),  
            array(
                'id'       => 'version_type',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Images Option for Header Layout', 'borrow' ),
                'subtitle' => esc_html__( 'Select Header Layout', 'borrow' ),
                'options'  => array(
                    'header1' => array(
                        'alt' => 'Header Layout 1',
                        'img' => get_template_directory_uri().'/images/theme-option/header1.png'
                    ),
                    'header2' => array(
                        'alt' => 'Header Layout 2',
                        'img' => get_template_directory_uri().'/images/theme-option/header2.png'
                    ),
                    'header3' => array(
                        'alt' => 'Header Layout 3',
                        'img' => get_template_directory_uri().'/images/theme-option/header3.png'
                    ),
                    'header_bank' => array(
                        'alt' => 'Header bank',
                        'img' => get_template_directory_uri().'/images/theme-option/header_bank.jpg'
                    ),
                ),
                'default'  => 'header1'
            ),    
            array(
                'id' => 'bg_head_static',
                'type' => 'color_rgba',
                'title' => esc_html__('Background Color Header static', 'borrow'),
                'subtitle' => esc_html__('Pick the background color for header static (default: #fff).', 'borrow'),
                'default'  => array(
                    'color' => '#fff',
                    'alpha' => '1'
                ),
            ),       
            array(
                'id' => 'text_head_static',
                'type' => 'color_rgba',
                'title' => esc_html__('Text Color Header static', 'borrow'),
                'subtitle' => esc_html__('Pick the text color for header static (default: #66707f).', 'borrow'),
                'default'  => array(
                    'color' => '#66707f',
                    'alpha' => '1'
                ),
            ),      
            array(
                'id' => 'bg_head_sticky',
                'type' => 'color_rgba',
                'title' => esc_html__('Background Color Header scroll and sticky header', 'borrow'),
                'subtitle' => esc_html__('Pick the background color for sticky header (default: #fff).', 'borrow'),
                'default'  => array(
                    'color' => '#fff',
                    'alpha' => '1'
                ),
            ),     
            array(
                'id' => 'text_head_sticky',
                'type' => 'color_rgba',
                'title' => esc_html__('Text Color Header scroll and sticky header', 'borrow'),
                'subtitle' => esc_html__('Pick the text color for sticky header (default: #66707f).', 'borrow'),
                'default'  => array(
                    'color' => '#66707f',
                    'alpha' => '1'
                ),
            ),                        
        )
    ) );
    Redux::set_section( $opt_name, array(
            'title'      => esc_html__( 'Top header', 'borrow' ),
            'id'         => 'top-header',
            'subsection' => true,
            'fields'     => array(   
                array(
                    'id' => 'top_head',
                    'type' => 'switch',
                    'title' => esc_html__('Top Header', 'borrow'),
                    'default' => true,
                    'desc' => esc_html__('For all three headers layout, you can enable/disable the topbar on the header if you want.', 'borrow'),
                ),         
                array(
                    'id' => 'header_text',
                    'type' => 'editor',
                    'title' => esc_html__('The text top left header', 'borrow'),
                    'desc' => esc_html__('', 'borrow'),
                    'default' => 'Welcome to our Borrow Loan Website Templates'
                ),           
                array(
                    'id' => 'header_right',
                    'type' => 'editor',
                    'title' => esc_html__('The content top right header', 'borrow'),
                    'desc' => esc_html__('', 'borrow'),
                    'default' => ''
                ),
                array(
                    'id' => 'bg_top_head',
                    'type' => 'color',
                    'title' => esc_html__('Background Color Top Header', 'borrow'),
                    'subtitle' => esc_html__('Pick the color for top header (default: #15549a).', 'borrow'),
                    'default' => '#15549a',
                    'validate' => 'color',
                ), 
                array(
                    'id' => 'color_top_head',
                    'type' => 'color',
                    'title' => esc_html__('Color Top Header', 'borrow'),
                    'subtitle' => esc_html__('Pick the color for top header (default: #83bcfa).', 'borrow'),
                    'default' => '#83bcfa',
                    'validate' => 'color',
                ),  
            ),        
    ) );

    Redux::set_section( $opt_name, array(
            'title'      => esc_html__( 'Header layout 2', 'borrow' ),
            'id'         => 'header2',
            'subsection' => true,
            'fields'     => array(                            
                array(
                    'id' => 'header_layout2',
                    'type' => 'editor',
                    'title' => esc_html__('Top header layout 2', 'borrow'),
                    'desc' => esc_html__('', 'borrow'),
                    'default' => ''
                ),
                array(
                    'id' => 'header_fixed',
                    'type' => 'select',
                    'title' => esc_html__('Header Fixed on Top', 'borrow'),
                    'subtitle' => esc_html__('', 'borrow'),
                    'desc' => esc_html__('If you want fixed on top page and on banner slider.', 'borrow'),
                    'options'  => array(
                        'fixed' => 'Fixed',                    
                        'none' => 'None',                                                                
                    ),
                    'default' => 'none',
                ),                           
                array(
                    'id' => 'phone_layout2',
                    'type' => 'editor',
                    'title' => esc_html__('Number Phone in Header Layout 2', 'borrow'),
                    'desc' => esc_html__('', 'borrow'),
                    'default' => ''
                ), 
            ),        
    ) );

    Redux::set_section( $opt_name, array(
            'title'      => esc_html__( 'Header layout 3', 'borrow' ),
            'id'         => 'header3',
            'subsection' => true,
            'fields'     => array(            
                array(
                    'id' => 'head_bt1',
                    'type' => 'text',
                    'title' => esc_html__('Button Text 1', 'borrow'),
                    'desc' => esc_html__('The text of action link 1 in header layout 3', 'borrow'),
                    'default' => ''
                ),           
                array(
                    'id' => 'head_link1',
                    'type' => 'text',
                    'title' => esc_html__('Button Link 1', 'borrow'),
                    'desc' => esc_html__('Add link of action link 1 in header layout 3', 'borrow'),
                    'default' => ''
                ),        
                array(
                    'id' => 'head_bt2',
                    'type' => 'text',
                    'title' => esc_html__('Button Text 2', 'borrow'),
                    'desc' => esc_html__('The text of action link 2 in header layout 3', 'borrow'),
                    'default' => ''
                ),           
                array(
                    'id' => 'head_link2',
                    'type' => 'text',
                    'title' => esc_html__('Button Link 2', 'borrow'),
                    'desc' => esc_html__('Add link of action link 2 in header layout 3', 'borrow'),
                    'default' => ''
                ),
            ),        
    ) );

    Redux::set_section( $opt_name, array(
            'title'      => esc_html__( 'Header bank layout', 'borrow' ),
            'id'         => 'header_bank',
            'subsection' => true,
            'fields'     => array(                            
                array(
                    'id' => 'header_bank_layout',
                    'type' => 'editor',
                    'title' => esc_html__('header bank layout', 'borrow'),
                    'desc' => esc_html__('', 'borrow'),
                    'default' => ''
                ),        
                array(
                    'id' => 'head_bank_bt',
                    'type' => 'text',
                    'title' => esc_html__('Button Text', 'borrow'),
                    'desc' => esc_html__('The text of action link in header bank layout', 'borrow'),
                    'default' => ''
                ),           
                array(
                    'id' => 'head_bank_bl',
                    'type' => 'text',
                    'title' => esc_html__('Button Link', 'borrow'),
                    'desc' => esc_html__('Add link of action link in header bank layout', 'borrow'),
                    'default' => ''
                ),
                array(
                    'id' => 'searchbtn',
                    'type' => 'switch',
                    'title' => esc_html__('Search Button in Header Bank layout', 'borrow'),
                    'default' => true,
                    'desc' => esc_html__('For headers layout, you can enable/disable the search button on the header layout if you want.', 'borrow'),
                ), 
            ),        
    ) );

    Redux::set_section( $opt_name, array(
            'title'      => esc_html__( 'Header Tabbed Layout', 'borrow' ),
            'id'         => 'header_tabbed',
            'subsection' => true,
            'fields'     => array(                          
                array(
                    'id' => 'phone_header_tabbed',
                    'type' => 'editor',
                    'title' => esc_html__('Number Phone', 'borrow'),
                    'desc' => esc_html__('', 'borrow'),
                    'default' => '1-800-123-4567'
                ), 
            ),        
    ) );

    Redux::set_section( $opt_name, array(
            'title'      => esc_html__( 'Header Landing Page 2', 'borrow' ),
            'id'         => 'header_landing_2',
            'subsection' => true,
            'fields'     => array(             
                array(
                    'id' => 'header_fullwidth',
                    'type' => 'switch',
                    'title' => esc_html__('Full Width', 'borrow'),
                    'default' => true,
                    'desc' => esc_html__('Default: On.', 'borrow'),
                ), 
                array(
                    'id' => 'logo_landing_2',
                    'type' => 'media',
                    'url' => false,
                    'title' => esc_html__('Logo Header Landing Page 2', 'borrow'),
                    'compiler' => 'true',
                    //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                    'desc' => esc_html__('Upload your logo.', 'borrow'),
                    'subtitle' => esc_html__('Logo', 'borrow'),
                    'default' => array('url' => get_template_directory_uri().'/images/logo.png'),                     
                ),  
                array(
                    'id' => 'header_landing',
                    'type' => 'editor',
                    'title' => esc_html__('Header Text For Landing Page 2', 'borrow'),
                    'default' => '1-800-123-4567',
                    'desc' => esc_html__('For heade Landing Page 2.', 'borrow'),
                ), 
            ),        
    ) );

    Redux::set_section( $opt_name, array(
        'icon' => 'el-icon-blogger',
        'title' => esc_html__('Blog Settings', 'borrow'),
        'fields' => array(        
            array(
                'id'       => 'sidebar',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Blog Layout', 'borrow' ),
                'subtitle' => esc_html__( 'Click on image layout to chooise', 'borrow' ),
                'desc'     => esc_html__( 'Select layout you want use for all your blog page.', 'borrow' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    'fullwidth' => array(
                        'alt' => esc_html__( '1 Column', 'borrow' ),
                        'img' => get_template_directory_uri().'/images/theme-option/1c.png'
                    ),                    
                    'left' => array(
                        'alt' => esc_html__( '2 Column Left', 'borrow' ),
                        'img' => get_template_directory_uri().'/images/theme-option/2cl.png'
                    ),    
                    'right' => array(
                        'alt' => esc_html__( '2 Column Right', 'borrow' ),
                        'img' => get_template_directory_uri().'/images/theme-option/2cr.png'
                    ),                                 
                ),
                'default'  => '3'
            ),      
            array(
                'id' => 'bg_blogpage',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Background Subheader Pages', 'borrow'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('Background Subheader Pages', 'borrow'),
                'subtitle' => esc_html__('Background Subheader Pages', 'borrow'),
               'default' => array('url' => get_template_directory_uri().'/images/page-header.jpg'),                     
            ),
            array(
                'id' => 'blog_excerpt',
                'type' => 'text',
                'title' => esc_html__('Blog custom excerpt lenght', 'borrow'),
                'subtitle' => esc_html__('Input Blog custom excerpt lenght', 'borrow'),
                'desc' => esc_html__('Blog custom excerpt lenght', 'borrow'),
                'default' => '30'
            ), 
            array(
                'id' => 'readmore_btn',
                'type' => 'text',
                'title' => esc_html__('Button Text', 'borrow'),
                'subtitle' => esc_html__('Input Read More Button Text', 'borrow'),
                'desc' => esc_html__('Empty to use translate multi-languages', 'borrow'),
                'default' => 'Read More'
            ),    
            array(
                'id' => 'action_text',
                'type' => 'text',
                'title' => esc_html__('Button Text Subheader', 'borrow'),
                'default' => 'How To Apply'
            ),    
            array(
                'id' => 'action_link',
                'type' => 'text',
                'title' => esc_html__('Link Out', 'borrow'),
                'default' => '#'
            ), 
            array(
                'id' => 'sub_nav',
                'type' => 'editor',
                'title' => esc_html__('Sub navigation in subheader', 'borrow'),
                'default' => ''
            ),         
         )
    ) );     
    Redux::set_section( $opt_name, array(
        'icon' => ' el-icon-picture',
        'title' => esc_html__('404 Settings', 'borrow'),
        'fields' => array( 
            array(
                'id' => '404_image',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Background Error Pages', 'borrow'),
                'compiler' => 'true',
                'default' => array('url' => get_template_directory_uri().'/images/error-img.jpg'),                     
            ),                                               
        )
    ) );  
    Redux::set_section( $opt_name, array(
        'icon' => ' el-icon-usd',
        'title' => esc_html__('Loan Settings', 'borrow'),
        'fields' => array(               
            array(
                'id' => 'amount',
                'type' => 'text',
                'title' => esc_html__('Amount', 'borrow'),
                'default' => '3000'
            ),      
            array(
                'id' => 'min_amount',
                'type' => 'text',
                'title' => esc_html__('Min Amount', 'borrow'),
                'default' => '1000'
            ),   
            array(
                'id' => 'max_amount',
                'type' => 'text',
                'title' => esc_html__('Max Amount', 'borrow'),
                'default' => '5000'
            ),     
            array(
                'id' => 'year',
                'type' => 'text',
                'title' => esc_html__('Year', 'borrow'),
                'default' => '2'
            ),      
            array(
                'id' => 'min_year',
                'type' => 'text',
                'title' => esc_html__('Min Year', 'borrow'),
                'default' => '1'
            ),   
            array(
                'id' => 'max_year',
                'type' => 'text',
                'title' => esc_html__('Max Year', 'borrow'),
                'default' => '10'
            ),                                     
        )
    ) );  
    Redux::set_section( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => esc_html__('Footer Settings', 'borrow'),
        'fields' => array( 
            array(
                'id' => 'logo_ft',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Logo Footer', 'borrow'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('logo.', 'borrow'),
                'subtitle' => esc_html__('Logo', 'borrow'),
                'default' => array('url' => get_template_directory_uri().'/images/ft-logo.png'),                     
            ),   
            array(
                'id'       => 'footer-select-pages',
                'type'     => 'select',
                'data'     => 'pages',
                'title'    => esc_html__( 'Pages Select Option', 'borrow' ),
                'subtitle' => esc_html__( 'No validation can be done on this field type', 'borrow' ),
                'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'borrow' ),
            ),           
            array(
                'id' => 'footer_ltext',
                'type' => 'editor',
                'title' => esc_html__('Footer Left Text', 'borrow'),
                'subtitle' => esc_html__('Copyright Text', 'borrow'),
                'default' => 'Copyright 2016 | Borrow Loan Company',
            ),           
            array(
                'id' => 'footer_rtext',
                'type' => 'editor',
                'title' => esc_html__('Footer Right Text', 'borrow'),
                'subtitle' => esc_html__('Text', 'borrow'),
                'default' => 'Terms of use | Privacy Policy',
            ),                      
        )
    ) );

    Redux::set_section( $opt_name, array(
            'title'      => esc_html__( 'Newsletter footer', 'borrow' ),
            'id'         => 'newsletter_footer',
            'subsection' => true,
            'fields'     => array(               
            array(
                'id' => 'newsleter_ft',
                'type' => 'switch',
                'title' => esc_html__('Newsletter Footer', 'borrow'),
                'default' => true,
                'desc' => esc_html__('Default: On.', 'borrow'),
            ),       
            array(
                'id' => 'title_news',
                'type' => 'text',
                'title' => esc_html__('Newsletter Title', 'borrow'),
                'subtitle' => esc_html__('Newsletter Title on footer', 'borrow'),
                'default' => 'Signup Our Newsletter',
            ),     
            array(
                'id' => 'placeholder',
                'type' => 'text',
                'title' => esc_html__('Placeholder newsletter in footer*', 'borrow'),
                'subtitle' => esc_html__('Placeholder newsletter', 'borrow'),
                'default' => 'Write E-Mail Address',
            ),   
            array(
                'id' => 'button_news',
                'type' => 'text',
                'title' => esc_html__('Button Text Newsletter', 'borrow'),
                'subtitle' => esc_html__('Add text for button newsletter', 'borrow'),
                'default' => 'Go!',
            ),       
            ),        
    ) );

    Redux::set_section( $opt_name, array(
            'title'      => esc_html__( 'Footer Landing Page', 'borrow' ),
            'id'         => 'landing_footer',
            'subsection' => true,
            'fields'     => array(   
            array(
                'id' => 'logo_landing',
                'type' => 'media',
                'url' => false,
                'title' => esc_html__('Logo Footer Landing Page', 'borrow'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => esc_html__('logo.', 'borrow'),
                'subtitle' => esc_html__('Logo', 'borrow'),
                'default' => array('url' => get_template_directory_uri().'/images/logo.png'),                     
            ),                               
            array(
                'id' => 'footer_right_landing',
                'type' => 'editor',
                'title' => esc_html__('Section Right Footer', 'borrow'),
                'default' => '',
            ),                                
            array(
                'id' => 'footer_landing_rtext',
                'type' => 'editor',
                'title' => esc_html__('Copy right in footer landing page', 'borrow'),
                'default' => 'Copyright 2018 | Borrow. All rights reserved',
            ),                                 
            array(
                'id' => 'footerld_bottom',
                'type' => 'editor',
                'title' => esc_html__('Section Bottom Footer', 'borrow'),
                'default' => '',
            ),    
            ),        
    ) );
    
    Redux::set_section( $opt_name, array(
        'icon' => 'el-icon-website',
        'title' => esc_html__('Styling Options', 'borrow'),
        'fields' => array(         
            array(
                'id' => 'theme_layout',
                'type' => 'select',
                'title' => esc_html__('Theme Version', 'borrow'),
                'subtitle' => esc_html__('Wide or Boxed', 'borrow'),
                'desc' => esc_html__('Easily choose wide or boxed for your entire website, Default: Wide Version.', 'borrow'),
                'options'  => array(
                    'wide_version' => 'Wide Version',
                    'boxed_version' => 'Boxed Version',                                         
                ),
                'default' => 'wide_version',
            ),                        
            array(
                'id' => 'main-color',
                'type' => 'color',
                'title' => esc_html__('Theme Main Color', 'borrow'),
                'subtitle' => esc_html__('Pick the main color for the theme (default: #f51f8a).', 'borrow'),
                'default' => '#f51f8a',
                'validate' => 'color',
            ),    
            array(
                'id' => 'main-color-hover',
                'type' => 'color',
                'title' => esc_html__('Hover Background Button Default', 'borrow'),
                'subtitle' => esc_html__('Pick the main color for the button default (default: #ff389c).', 'borrow'),
                'default' => '#ff389c',
                'validate' => 'color',
            ), 
            array(
                'id' => 'main-color-2',
                'type' => 'color',
                'title' => esc_html__('Main Color 2', 'borrow'),
                'subtitle' => esc_html__('Pick the  color for the theme (default: #15549a).', 'borrow'),
                'default' => '#15549a',
                'validate' => 'color',
            ), 
            array(
                'id' => 'main-color-hover2',
                'type' => 'color',
                'title' => esc_html__('Hover Background Button Primary', 'borrow'),
                'subtitle' => esc_html__('Pick the main color for the button default (default: #2573cb).', 'borrow'),
                'default' => '#2573cb',
                'validate' => 'color',
            ), 
            array(         
                'id'       => 'boxed-background',
                'type'     => 'background',
                'title'    => __('Body Background', 'borrow'),
                'subtitle' => __('Body background with image, color, etc.', 'borrow'),
                'desc'     => __('Setup Background for Boxed Version.', 'borrow'),
                'default'  => array(
                    'background-color' => '#ffffff',
                ),
                'output'   => array('body.boxed-version')
            ),
            array(
                'id' => 'body-font2',
                'type' => 'typography',
                'output' => array('body'),
                'title' => esc_html__('Body Font', 'borrow'),
                'subtitle' => esc_html__('Specify the body font properties.', 'borrow'),
                'google' => true,
                'default' => array(
                    'color' => '',
                    'font-size' => '',
                    'line-height' => '',
                    'font-family' => '',
                    'font-weight' => ''
                ),
            ),
             array(
                'id' => 'custom-css',
                'type' => 'ace_editor',
                'title' => esc_html__('CSS Code', 'borrow'),
                'subtitle' => esc_html__('Paste your CSS code here.', 'borrow'),
                'mode' => 'css',
                'theme' => 'monokai',
                'desc' => 'Possible modes can be found at http://ace.c9.io/.',
                'default' => ""
            ),
        )
    ) );

    /*
     * <--- END SECTIONS
     */
