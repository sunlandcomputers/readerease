<?php
/**
 * The single post page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package readerease
 * @since 1.0
 */

get_header(); ?>

<div class="container readerease-width-control">
    <main id="sitecontent" class="content">

        <?php get_template_part( 'post', 'content' ); ?>

    </main>
     
        <section class="sidebar">

            <?php get_sidebar(); ?>
                    	
        </section>

</div>

<?php get_footer(); ?>
