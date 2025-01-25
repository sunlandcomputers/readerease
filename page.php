  <?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package solo
 * @since 1.0
 */

get_header(); ?>

<div class="grid-page">

    <section class="uno grid-item">
       intentionally blank
    </section>

        <section class="inside-bar dos grid-item">
            <div class="horizontal-sidewidget">
                <ul class="sidewidget-tools" role="list">
                  <li><span><a href="#top" title="#top">+</a></span></li>
                    <li><span><a href="#top" title="#top">Aa</a></span></li>
                    <li><span><a href="#top" title="#top">W Cnt</a></span></li>
                    <li><span><a href="#top" title="#top">D/L</a></span></li></ul>
                </div>
        </section>

            <main id="main" class="grid-item tres">
                <?php get_template_part( 'post-content'); ?>
            </main>

                <section class="quatro grid-item">
                  <?php get_sidebar(); ?>
                </section>
                
                    <section class="cinco grid-item">
                      intentionally blank
                    </section>

</div>


<?php get_footer(); ?>
