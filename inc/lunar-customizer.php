<?php
/**
 * readerease Customizer functionality
 *
 * @package readerease
 * @subpackage inc/readerease
 * @since 1.0
 *
 * @see https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
 */
add_action( 'customize_register', 'lunar_register_theme_customizer_setup' );

/**
 * Validation: image
 * Control: text, WP_Customize_Image_Control
 *
 * @uses    wp_check_filetype()        https://developer.wordpress.org/reference/functions/wp_check_filetype/
 * @uses    in_array()                http://php.net/manual/en/function.in-array.php
 */
function lunar_sanitize_image( $file, $setting ) {

	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'             => 'image/gif',
		'png'          => 'image/png',
		'bmp'        => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'        => 'image/x-icon'
	);

	//check file type from file name
	$file_ext = wp_check_filetype( $file, $mimes );

	//if file has a valid mime type return it, otherwise return default
	return ( $file_ext['ext'] ? $file : $setting->default );
}
/**
 * Remove parts of the Options menu we don't use.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 * @since 1.0.2
*/

function lunar_register_theme_customizer_setup($wp_customize)
{
    $transport = 'refresh'; //'postMessage';
    $wp_customize->add_section( 'lunar_page_layout', array(
		'title' => 'Blog and Page Settings',
        'capability'  => 'edit_theme_options',
		'priority' => 25
	  ));
      /*
	 * ********** Add setting & control for declaration section **********
	*/
	// Content width
    $wp_customize->add_setting(
		'lunar_page_width', array(
		'default'     => '1440',
		'capability' => 'edit_theme_options',
		'transport'  => $transport
	));
	$wp_customize->add_control(
		'lunar_page_width', array(
		'label'         => 'Maximum Content Width',
		'section'      => 'lunar_page_layout',
		'settings'     => 'lunar_page_width',
		'type'          => 'number',
	    'input_attrs' => array( 'min' => 280,  'max' => 9999 ),
		'description' => __( 'Width min is 280px and max is 9999px.', 'readerease')
	));
	// Heading background
	$wp_customize->add_setting( 'lunar_heading_background', array(
    	'capability'        => 'edit_theme_options',
    	'default'           => '',
    	'sanitize_callback' => 'lunar_sanitize_image'
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 
        'lunar_heading_background',
    	array(
    		'label'    => __( 'Heading Background Image', 'readerease' ),
    		'section'  => 'lunar_page_layout',
    		'settings' => 'lunar_heading_background',
    		'description' => __( 'To style background size use "site-heading" class name. (Try background-size: cover)', 'readerease')
    	)
    ) );
    // Heading height
      $wp_customize->add_setting(
		'lunar_heading_height', array(
		'default'     => '70',
		'capability' => 'edit_theme_options',
		'transport'  => $transport
	));
	$wp_customize->add_control(
		'lunar_heading_height', array(
		'label'         => 'Heading Height',
		'section'      => 'lunar_page_layout',
		'settings'     => 'lunar_heading_height',
		'type'          => 'number',
	    'input_attrs' => array( 'min' => 0, 'max' => 9999 ),
		'description' => __( 'Height min is 0px and max is 9999px.', 'readerease')
	));
	// lunar_number_charas
	 $wp_customize->add_setting(
		'lunar_number_charas', array(
		'default'     => '150',
		'capability' => 'edit_theme_options',
		'transport'  => $transport
	));
	$wp_customize->add_control(
		'lunar_number_charas', array(
		'label'         => __( 'Number of Characters in Blog Aricles', 'readerease' ),
		'section'      => 'lunar_page_layout',
		'settings'     => 'lunar_number_charas',
		'type'          => 'number',
	    'input_attrs' => array( 'min' => 1, 'max' => 9999 ),
		'description' => __( 'Width min is 1 and max is 9999px.', 'readerease')
	));
    /*
	 * ********************** Colors **********************
	 */
	// Font color
	$wp_customize->add_setting(
		'readerease-font-color',
		array(
			'default'         => '#444444',
			'capability'       => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'readerease-font-color',
			array(
				'label'  => 'Font Color',
				'section' => 'colors',
				'settings' => 'readerease-font-color'
			)
		)
	);
}
