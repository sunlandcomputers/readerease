<?php
/**
 * Page options settings and helpers
 * @since 1.0
 * @package readerease
 */
add_action( 'readerease_theme_customizer', 'readerease_theme_customizer_css');
add_action( 'wp_ajax_change_font_size', 'change_font_size_callback' );
add_action( 'wp_ajax_nopriv_change_font_size', 'change_font_size_callback' ); 

function change_font_size_callback() {
    
    wp_die(); // Important: Always call wp_die() in AJAX callbacks
}
/**
 * Text sanitizer for numeric values
 * @since 1.0
 * @see https://themefoundation.com/wordpress-theme-customizer/
 * @return string $input
 */
function readerease_sanitize_integer( $input )
{
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

/**
 * Text sanitizer for outputs
 * @since 1.0
 *
 * @return string $input
 */
function readerease_sanitize_text( $input )
{
    return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Send custum CSS to wp_head
 * @since 1.0
 *
 */
function readerease_theme_customizer_css()
{
    echo '<style id="readerease-theme-mods">';
    if ( get_theme_mods() ) :
         $pgwidth  = get_theme_mod( 'readerease_page_width', '1440' );
         $hdheight = get_theme_mod( 'readerease_heading_height', '70' );
         $hdbackgrnd = get_theme_mod( 'readerease_heading_background', '' );
          echo '@media screen and ( min-width: 980px ){
          .readerease-width-control{width: ' . esc_attr( $pgwidth ) . 'px;margin: 0 auto; }
          .site-heading{height: ' . esc_attr( $hdheight ) . 'px;}
          }
          .site-heading{ background: url( ' . esc_attr( $hdbackgrnd ) . ' );background-repeat:no-repeat;}';

    endif;
    echo '</style>';
}
