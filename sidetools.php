<?php
/**
 * The template-part for displaying the title and description
 *
 * Displays all of the elements above the nav tag.
 *
 * @package readerease
 * @since   1.0
 */
?>
<section class="site-heading readerease-row">
    <div class="site-title-heading">
    
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                    rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    
    </div>
    <div class="site-title-heading tagline-top">
        
        <span class="site-description">
            <?php echo esc_html( get_bloginfo( 'description', 'display' ) ); ?>
        </span>
        <span class="site-search">
            <?php get_search_form(); ?>
        </span>
        
        
        
    </div>
</section>

