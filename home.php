<?php
/**
 * The home or blog page template file
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package readerease
 * @since 1.0
 */

get_header(); ?>

<div class="page mrg-btsm">

    <section class="reib"><!-- intentionally blank -->
    </section>  

    <section class="inside-bar">
    
        <?php get_template_part( 'sidetools' ); ?>
    
    </section>
    
        <main id="main">

            <?php get_template_part( 'post', 'content' ); ?>
        
        </main>
    
        <section class="reib"><!-- intentionally blank -->
        </section>    

</div>

<?php get_footer(); ?>
