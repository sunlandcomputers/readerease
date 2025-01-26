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


<div class="grid-page">

    <section class="uno grid-item">
       <!--intentionally blank-->
    </section>

        <section class="inside-bar dos grid-item">
            <div class="horizontal-sidewidget">
                <ul class="sidewidget-tools" role="list">
                  <li><span><button id="increase-font-size" title="+/- font">+</button></span></li>
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
                      <!--intentionally blank-->
                    </section>

</div>

<?php get_footer(); ?>
