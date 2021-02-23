<?php
function Madeini_theme_customize_register($wp_customize) {
	//Navigation_Color
	$wp_customize->add_setting('madeini_option[color][navigation]', array(
		'default'			=> '#b07b8b',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][navigation]', array(
		'label'				=> 'Navigation Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][navigation]',
		'priority'			=> 100,
	)));
	
	//Navigation Text Color
	$wp_customize->add_setting('madeini_option[color][navigation_text]', array(
		'default'			=> '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][navigation_text]', array(
		'label'				=> 'Navigation Text Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][navigation_text]',
		'priority'			=> 101,
	)));
	
	//Navigation Link Hover Color
	$wp_customize->add_setting('madeini_option[color][navigation_link_hover]', array(
		'default'			=> '#24890D',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][navigation_link_hover]', array(
		'label'				=> 'Navigation Link Hover Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][navigation_link_hover]',
		'priority'			=> 102,
	)));
	
	//Sidebar Color
	$wp_customize->add_setting('madeini_option[color][sidebar]', array(
		'default'			=> '#b07b8b',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][sidebar]', array(
		'label'				=> 'Sidebar Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][sidebar]',
		'priority'			=> 103,
	)));
	
	//Sidebar Text Color
	$wp_customize->add_setting('madeini_option[color][sidebar_text]', array(
		'default'			=> '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][sidebar_text]', array(
		'label'				=> 'Sidebar Text Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][sidebar_text]',
		'priority'			=> 104,
	)));
	
	//Sidebar Link Hover Color
	$wp_customize->add_setting('madeini_option[color][sidebar_link_hover]', array(
		'default'			=> '#24890D',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][sidebar_link_hover]', array(
		'label'				=> 'Sidebar Link Hover Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][sidebar_link_hover]',
		'priority'			=> 105,
	)));
	
	//Main Background Color
	$wp_customize->add_setting('madeini_option[color][main_background]', array(
		'default'			=> '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][main_background]', array(
		'label'				=> 'Main Background Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][main_background]',
		'priority'			=> 106,
	)));
	
	//Main Text Color
	$wp_customize->add_setting('madeini_option[color][main_text]', array(
		'default'			=> '#6f170d',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][main_text]', array(
		'label'				=> 'Main Text Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][main_text]',
		'priority'			=> 107,
	)));
	//Main Link Hover Color
	$wp_customize->add_setting('madeini_option[color][main_link_hover]', array(
		'default'			=> '#24890D',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][main_link_hover]', array(
		'label'				=> 'Main Link Hover Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][main_link_hover]',
		'priority'			=> 108,
	)));
	
	//Accent Color
	$wp_customize->add_setting('madeini_option[color][accent]', array(
		'default'			=> '#767676',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][accent]', array(
		'label'				=> 'Accent Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][accent]',
		'priority'			=> 109,
	)));
	
	//Footer Color
	$wp_customize->add_setting('madeini_option[color][footer]', array(
		'default'			=> '#c4b3bd',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][footer]', array(
		'label'				=> 'Footer Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][footer]',
		'priority'			=> 110,
	)));
	
	//Footer Text Color
	$wp_customize->add_setting('madeini_option[color][footer_text]', array(
		'default'			=> '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][footer_text]', array(
		'label'				=> 'Footer Text Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][footer_text]',
		'priority'			=> 111,
	)));
	
	//Footer Link Hover Color
	$wp_customize->add_setting('madeini_option[color][footer_link_hover]', array(
		'default'			=> '#24890D',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][footer_link_hover]', array(
		'label'				=> 'Footer Link Hover Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][footer_link_hover]',
		'priority'			=> 112,
	)));
	
	//Featured Content Color
	$wp_customize->add_setting('madeini_option[color][slider_navi]', array(
		'default'			=> '#000000',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][slider_navi]', array(
		'label'				=> 'Featured Content Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][slider_navi]',
		'priority'			=> 113,
	)));
	
	//Featured Content Text Color
	$wp_customize->add_setting('madeini_option[color][slider_navi_text]', array(
		'default'			=> '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][slider_navi_text]', array(
		'label'				=> 'Featured Content Text Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][slider_navi_text]',
		'priority'			=> 114,
	)));
	
	//Featured Content Link Hover Color
	$wp_customize->add_setting('madeini_option[color][slider_navi_link_hover]', array(
		'default'			=> '#24890D',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'capability'		=> 'edit_theme_options',
		'type'				=> 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'madeini_option[color][slider_navi_link_hover]', array(
		'label'				=> 'Featured Content Link Hover Color',
		'section'			=> 'colors',
		'settings'			=> 'madeini_option[color][slider_navi_link_hover]',
		'priority'			=> 115,
	)));
	
	// Sidebar Background Image
    $wp_customize->add_setting('madeini_option[image][sidebar_background]', array(
		'default'			=> '',
		'sanitize_callback'	=> 'none',
		'type'				=> 'option',
		'capability'		=> 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'madeini_option[image][sidebar_background]', array(
		'label'				=> 'Sidebar Background Image',
		'section'			=> 'background_image',
		'settings'			=> 'madeini_option[image][sidebar_background]',
		'priority'			=> 100,
	)));
	
	// Main Background Image
    $wp_customize->add_setting('madeini_option[image][main_background]', array(
		'default'			=> '',
		'sanitize_callback'	=> 'none',
		'type'				=> 'option',
		'capability'		=> 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'madeini_option[image][main_background]', array(
		'label'				=> 'Main Background Image',
		'section'			=> 'background_image',
		'settings'			=> 'madeini_option[image][main_background]',
		'priority'			=> 101,
	)));
}

add_action( 'customize_register', 'Madeini_theme_customize_register' );


function Madeini_customize_css(){
	$options = get_option('madeini_option');
	
	echo "<style type=\"text/css\">\n<!--\n";
	
	if( empty( $options['color']['navigation'] ) ){
		echo ".header-main,.primary-navigation li,.site-header,#site-header { background-color:#b07b8b !important;  }";
	}else{
		echo ".header-main,.primary-navigation li,.site-header,#site-header { background-color:".$options['color']['navigation']." !important;  }";
	}
	
	if( empty( $options['color']['sidebar'] ) ){
		echo ".site:before,.secondary-navigation li, #secondary { background-color:#b07b8b; }";
	}else{
		echo ".site:before,.secondary-navigation li, #secondary { background-color:".$options['color']['sidebar']."; }";
	}
	
	if( empty( $options['color']['main_text'] ) ){
		echo "#primary,#primary a,.site-content .entry-header,.site-content .entry-content, .site-content .entry-summary, .page-content,#content-sidebar .widget-title,#content-sidebar a,blockquote,.comment-notes, .comment-awaiting-moderation, .logged-in-as, .no-comments, .form-allowed-tags, .form-allowed-tags code,.content-sidebar { color:#6f170d; }";
		echo ".content-sidebar .widget .widget-title { border-color:#6f170d; }";
	}else{
		echo "#primary,#primary a,.site-content .entry-header,.site-content .entry-content, .site-content .entry-summary, .page-content,#content-sidebar .widget-title,#content-sidebar a,blockquote,.comment-notes, .comment-awaiting-moderation, .logged-in-as, .no-comments, .form-allowed-tags, .form-allowed-tags code,.content-sidebar { color:".$options['color']['main_text']."; }";
		echo ".content-sidebar .widget .widget-title { border-color:".$options['color']['main_text']."; }";
	}
	
	if( empty( $options['color']['footer'] ) ){
		echo "#colophon { background-color:#c4b3bd !important;  }";
	}else{
		echo "#colophon { background-color:".$options['color']['footer']." !important;  }";
	}

	if( !empty( $options['color']['navigation_text'] ) ){
		echo ".site-navigation .current_page_item > a, .site-navigation .current_page_ancestor > a, .site-navigation .current-menu-item > a, .site-navigation .current-menu-ancestor > a,.site-navigation a:hover,.primary-navigation li:hover > a, .primary-navigation li.focus > a,.primary-navigation a { color:".$options['color']['navigation_text']." !important;  }";
	}
	
	if( !empty( $options['color']['navigation_link_hover'] ) ){
		echo ".primary-navigation li:hover > a, .primary-navigation li.focus > a { background-color:".$options['color']['navigation_link_hover']." !important;  }";
	}
	
	if( !empty( $options['color']['sidebar_background'] ) ){
		echo ".site:before { background-image:url(".$options['image']['sidebar_background']."); }";
	}
	
	if( !empty( $options['color']['sidebar_text'] ) ){
		echo "#secondary ,#secondary a,#secondary .widget-title,#secondary .widget-title a { color:".$options['color']['sidebar_text']." !important;  }";
	}
	
	if( !empty( $options['color']['sidebar_link_hover'] ) ){
		echo "#secondary a:hover, #secondary a:focus, .widget-title a:hover, .widget-title a:focus { background-color:".$options['color']['sidebar_link_hover']." !important;  }";
	}
	
	if( !empty( $options['color']['main_background'] ) ){
		echo "#main,#primary,.site-content .entry-header,.site-content .entry-content, .site-content .entry-summary, .page-content { background-color:".$options['color']['main_background']."; }";
	}
	
	if( !empty( $options['color']['main_link_hover'] ) ){
		echo "#primary a:hover,#content-sidebar a:hover { color:".$options['color']['main_link_hover']."; }";
	}
	
	if( !empty( $options['color']['footer'] ) ){
		echo "#colophon { background-color:".$options['color']['footer']." !important;  }";
	}
	
	if( !empty( $options['color']['footer_text'] ) ){
		echo "#colophon,#colophon a { color:".$options['color']['footer_text']." !important;  }";
	}
	
	if( !empty( $options['color']['footer_link_hover'] ) ){
		echo "#colophon,#colophon a:hover { color:".$options['color']['footer_link_hover']." !important;  }";
	}
	
	if( !empty( $options['color']['slider_navi'] ) ){
		echo ".featured-content .entry-header,.slider-direction-nav a { background-color:".$options['color']['slider_navi']." !important;  }";
	}

	
	if( !empty( $options['color']['slider_navi_link_hover'] ) ){
		echo ".featured-content a:hover { color:".$options['color']['slider_navi_link_hover']." !important;  }";
		echo ".slider-direction-nav a:hover,.slider-control-paging .slider-active:before, .slider-control-paging .slider-active:hover:before,.slider-control-paging a:hover:before { background-color:".$options['color']['slider_navi_link_hover']." !important;  }";
	}
	
	if( !empty( $options['color']['slider_navi_text'] ) ){
		echo ".featured-content a,.featured-content a,.slider-direction-nav a:before { color:".$options['color']['slider_navi_text']." !important;  }";
		echo ".slider-control-paging a:before { background-color:".$options['color']['slider_navi_text']." !important;  }";
	}
	
	if( !empty( $options['color']['accent'] ) ){
		echo ".entry-content .edit-link a:before, .entry-meta .edit-link a:before,.site-content .entry-date a:before, .attachment .site-content span.entry-date:before,.site-content .byline a:before,.site-content .comments-link a:before { color:".$options['color']['accent']." !important;  }";
		echo ".widget_calendar tbody a, .search-toggle, .search-toggle:hover, .search-toggle.active, .search-box { background-color:".$options['color']['accent']." !important; }";
		echo "button, .button, input[type='button'], input[type='reset'], input[type='submit'] { background-color:".$options['color']['accent']." !important; }";
		echo ".paging-navigation .page-numbers.current, .paging-navigation a:hover { color:".$options['color']['accent']." !important; border-color:".$options['color']['accent']." !important; }";
	}

	echo "-->\n</style>\n";
}
add_action('wp_head', 'Madeini_customize_css');


require_once(dirname(__FILE__).'/include/class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'madeini_register_required_plugins' );
function madeini_register_required_plugins() {
 
    $plugins = array(
 
		array(
		    'name'                  => 'GMO Font Agent', // The plugin name
		    'slug'                  => 'gmo-font-agent', // The plugin slug (typically the folder name)
		    'required'              => false, // If false, the plugin is only 'recommended' instead of required
		),
    );
  
    $config = array(
		'domain'            => madeini,           // Text domain - likely want to be the same as your theme.
		'default_path'      => '',                           // Default absolute path to pre-packaged plugins
		'parent_menu_slug'  => 'themes.php',         // Default parent menu slug
		'parent_url_slug'   => 'themes.php',         // Default parent URL slug
		'menu'              => 'install-required-plugins',   // Menu slug
		'has_notices'       => true,                         // Show admin notices or not
		'is_automatic'      => false,            // Automatically activate plugins after installation or not
		'message'           => '',               // Message to output right before the plugins table
		'strings'           => array(
		    'page_title'                                => __( 'Install Required Plugins', madeini ),
		    'menu_title'                                => __( 'Install Plugins', madeini ),
		    'installing'                                => __( 'Installing Plugin: %s', madeini ), // %1$s = plugin name
		    'oops'                                      => __( 'Something went wrong with the plugin API.', madeini ),
		    'notice_can_install_required'               => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
		    'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
		    'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
		    'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
		    'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
		    'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
		    'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
		    'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
		    'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
		    'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
		    'return'                                    => __( 'Return to Required Plugins Installer', madeini ),
		    'plugin_activated'                          => __( 'Plugin activated successfully.', madeini ),
		    'complete'                                  => __( 'All plugins installed and activated successfully. %s', madeini ) // %1$s = dashboard link
		)
    );
 
    tgmpa( $plugins, $config );
 
}

function madeini_scriptsMore(){
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/more.js' );
}
add_action( 'admin_enqueue_scripts', 'madeini_scriptsMore' );

add_action('appearance_page_more', 'regist_more_css');
function regist_more_css() { ?>
<link rel='stylesheet' id='madeini_style-css'  href='<?php echo get_stylesheet_directory_uri() .'/css/more.css' ?>' type='text/css' media='all' /><?php }

//More
function madeini_menu_more() {
    $siteurl = get_option( 'siteurl' );
?>
<div class="moreWrap">
    <h2><img src="<?php echo get_stylesheet_directory_uri() .'/images/more/head_title.png' ?>" alt="WordPress Dedicated Ultraspeed Server GMO WP Clowd" ></h2>
    
    <div class="more_navigation">
    <ul>
    <li><a href="#hosting">WordPress Hosting</a></li>
    <li><a href="#themes">Themes</a></li>
    <li><a href="#plugins">Plugins</a></li>
    </ul>
    </div>
    
    
    <a id="hosting" name="hosting"></a>
    <div class="more_contents">
    
    <h3>GMO WP Cloud</h3>
    <div class="hosting">
    <a href="https://www.wpcloud.jp/en/?banner_id=themes" target="_blank"><p class="title">GMO WP Cloud</p>
    <p>GMO WP Cloud - The optimized WordPress cloud hosting service. <br>
    WordPress made it possible for you to build powerful websites without requiring coding skills. <br>  
    GMO WP Cloud features safe yet seamless WordPress site building experience to let you focus on site your content creation process.</p>
    <p class="more">View More</p></a>
    </div>
    
    
    <a id="themes" name="themes"></a>
    <h3>WordPress Themes</h3>
    
    <div class="themes">
    
    <div class="lead">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/themes_tidy.jpg' ?>" alt="tidy">
    <ul>
    <li><a href="https://wordpress.org/themes/tidy " class="download" target="_blank">Free Download</a></li>
    <li><a href="http://tidy.wpcloud.net/" class="demo" target="_blank">View Demo</a></li>
    </ul>
    <h4>Tidy</h4>
    <p>Tidy is a multi-purpose WordPress theme with ultimate simplicity. It is fully customizable, responsive and flexible.  Contents can be turned on and off as desired, and a wide variety of layout options to help you build a satisfactory website. The theme supports original slider, social media integration, Google advertisement & stats plugins along with the web font support with full color customization for enhanced flexibility.</p>
    </div>
    
	<div class="lead">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/themes_madeini.jpg' ?>" alt="Madeini">
    <ul>
    <li><a href="http://wordpress.org/themes/madeini" class="download" target="_blank">Free Download</a></li>
    <li><a href="http://madeini.wpcloud.net/" class="demo" target="_blank">View Demo</a></li>
    </ul>
    <h4>Madeini</h4>
    <p>Madeini is an upgraded version of Twenty Fourteen WordPress default theme with enhanced custom color and custom background image feature.  Enlarged homepage image makes it suitable for photography websites.</p>
    </div>

    <div>
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/themes_kimono.jpg' ?>" alt="Kimono">
    <ul>
    <li><a href="http://wordpress.org/themes/kimono" class="download" target="_blank">Free Download</a></li>
    <li><a href="http://kimono.wpcloud.net/" class="demo" target="_blank">View Demo</a></li>
    </ul>
    <h4>Kimono</h4>
    <p>Kimono is a simple, and user friendly WordPress theme that is focused on design. Its beautiful design inspiration comes from Japanese traditional garment called Kimono.  Slider is standard in this theme therefore no plugin or complicated setup is required.</p>
    </div>

    <div>
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/themes_kotenhanagara.jpg' ?>" alt="Kotenhanagara">
    <ul>
    <li><a href="http://wordpress.org/themes/kotenhanagara" class="download" target="_blank">Free Download</a></li>
    <li><a href="http://kotenhanagara.wpcloud.net/" class="demo" target="_blank">View Demo</a></li>
    </ul>
    <h4>Kotenhanagara</h4>
    <p>Kotenhanagara is a simple, easy-to-use and highly customizable WordPress theme. Beautiful design inspiration came from Japanese Urushi lacqerware, varnished with the traditional manners.  Background color can be customized as well as swappable flower patterned default background.</p>
    </div>

    <div>
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/themes_de_naani.jpg' ?>" alt="de naani.">
    <ul>
    <li><a href="https://wordpress.org/themes/de-naani" class="download" target="_blank">Free Download</a></li>
    <li><a href="http://denaani.wpcloud.net/" class="demo" target="_blank">View Demo</a></li>
    </ul>
    <h4>de naani.</h4>
    <p>'de naani.' is an upgraded version of Twenty-Twelve default theme which is designed to work perfectly with 'GMO Show Time' slider plugin and 'GMO Font agent'web font plugin. This theme also allow you to insert logo, and change site title/tagline positions.</p>
    </div>

    <div>
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/themes_azabu_juban.jpg' ?>" alt="Azabu Juban">
    <ul>
    <li><a href="http://wordpress.org/themes/azabu-juban" class="download" target="_blank">Free Download</a></li>
    <li><a href="http://azabujuban.wpcloud.net/" class="demo" target="_blank">View Demo</a></li>
    </ul>
    <h4>Azabu Juban</h4>
    <p>Azabu Juban is an upgraded version of Twenty Fourteen WordPress default theme, which is simple, easy-to-use and highly customizable. This theme features numbers of beautiful design templates with traditional Japanese taste which gives your website a unique look.</p>
    </div>

    
    </div>
    
    
    <a id="plugins" name="plugins"></a>
    <h3>Plugins</h3>
    
    <div class="plugins">
    
    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_showtime.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-showtime/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO Showtime</h4>
    <p>GMO Showtime slider plugin gives cool effects to the slider in a snap. The control screen is simple, for anyone to easily use. Express user's originality with fully customizable link and color as well as 16 slider effects in 6 different layouts.</p>
    </div>
    </div>
    
    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_font_agent.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-font-agent/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO Font Agent</h4>
    <p>GMO Font Agent plugin works with Google fonts, gives you a choice to use variety of stylish web fonts. The plugin is genericon and IcoMoon compatible, to enhance its usability. Icons can be inserted from the post editor.</p>
    </div>
    </div>

    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_sahre_connection.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-share-connection/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO Share Connection</h4>
    <p>GMO Share Connection plugin is designed for easy social sharing by letting user choose place/pages to use icons. 9 social network services are supported in this plugin including Facebook and Twitter.</p>
    </div>
    </div>

    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_ads_master.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-ads-master/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO Ads Master</h4>
    <p>GMO Ads Master is the ad banner plugin which enables you to place ad contents to the desired locations such as inside article, sidebar and footer. In addition to that, using this plugin let you setup Google Analytics tracking code and sitemap tool settings, and sitemap can be easily generated without playing with PHP files.</p>
    </div>
    </div>

    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_go_to_top.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-go-to-top/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO Go to Top</h4>
    <p>GMO Go to Top is a simple plugin adds a simple button which allows users to scroll all the way up to the top by 1-click.  Button color, style, position can be modified or you can also upload your own button image.</p>
    </div>
    </div>

    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_page_trasitions.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-page-transitions/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO Page Transitions</h4>
    <p>GMO Page Transitions adds Page Transitions actions to your site. Click on the link, and page will slide over to left or right. This effect will not apply when "target=_brank" is used.</p>
    </div>
    </div>

    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_tinymce_smiley.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-tinymce-smiley/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO TinyMCE Smiley</h4>
    <p>GMO TinyMCE Smiley is a plugin to let you instantly add smilies into your site from the toolbar..</p>
    </div>
    </div>

    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_google_map.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-google-map/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO Google Map</h4>
    <p>With "GMO Google Map" plugin, you can use Google Maps on your website by simply embedding a shortcode in anywhere you desire. No special coding skill is required. Simply enter information (eg. address) to create a shortcode and paste it to complete.</p>
    </div>
    </div>
    
    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_showtime.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-widget-custom/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO Widget Custom</h4>
    <p>This is a useful widget customizer plugin which enables you to insert images, ad and recommendation banners.</p>
    </div>
    </div>

    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_slider.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-slider/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO Slider</h4>
    <p>GMO Slider plugin let you insert sliders in posts and pages. The control screen is simple, for anyone to easily use. GMO Slider supports images as well as text and video.  </p>
    </div>
    </div>

    <div class="plugins_detail">
    <div class="plugins_detail_l">
    <img src="<?php echo get_stylesheet_directory_uri() .'/images/more/ico_plugin_social_connection.gif' ?>">
    <p class="link"><a href="https://wordpress.org/plugins/gmo-social-connection/" target="_blank">Free Download</a></p>
    </div>
    <div class="plugins_detail_r">
    <h4>GMO Social Connection</h4>
    <p>GMO Social Connection let you easily place SNS share buttons on the articles. It also allows you to choose button position from top or bottom. Supported SNS are Facebook, Twitter and Google+.</p>
    </div>
    </div>
    
    
    </div>
    
    </div>
    
    
    <div class="quality">
    <h3>Quality Service</h3>
    <p class="lead">“Brought to you by Japan's leading one-stop provider of Internet services”</p>
    <p><img src="<?php echo get_stylesheet_directory_uri() .'/images/more/footer_logo_gmo.png' ?>" alt="GMO INTERNET GROUP" ></p>
    <p>GMO WP Cloud is operated by GMO Internet group, the number one provider of domain registration, web hosting, security, ecommerce and payment processing solutions in Japan.Under the corporate slogan "Internet for Everyone", GMO Internet Group's trusted service brand represents industry expertise, a proven track record and quality service.</p>
    <p><a href="http://www.gmo.jp/en/" target="_blank">> Visit GMO Internet Group</a></p>
    </div>
    
</div>
<?php
}
function madeini_admin_menu() {
    add_theme_page( 'GMO WP Clowd', 'More', 'read','more', 'madeini_menu_more' );
}

add_action( 'admin_menu', 'madeini_admin_menu' );

//Dashboard
function madeini_dashboard_widget_function() {
?>
<a href="https://www.wpcloud.jp/en/?banner_id=themes" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() .'/images/300250_wpcloud_0001.gif' ?>" style="width:100%"></a>
<?php
}
function madeini_add_dashboard_widgets() {
wp_add_dashboard_widget('madeini_dashboard_widget', 'GMO WP Cloud', 'madeini_dashboard_widget_function');
global $wp_meta_boxes;
$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
$example_widget_backup = array('madeini_dashboard_widget' => $normal_dashboard['madeini_dashboard_widget']);
unset($normal_dashboard['madeini_dashboard_widget']);
$sorted_dashboard = array_merge($example_widget_backup, $normal_dashboard);
$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}
add_action('wp_dashboard_setup', 'madeini_add_dashboard_widgets' );

