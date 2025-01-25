<?php
/**
 * The template part for displaying content
 *
 * @package readerease
 * @since readerease 1.0
 */
?>
<section class="entry-content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		

        	<header>
        	    <?php the_title( sprintf( '<h2 class="entry-title-article"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
       	    </header>
	
                <figure class="featured-img-container">
        
                    <?php if (has_post_thumbnail()) { the_post_thumbnail(); }  ?>
    
                </figure>

                <div class="excerpt-content">

                    <?php do_action( 'lunar_excerpt_inloop' ); ?>
                    
                </div>

                    <div class="meta-foot">
                            
                            <?php do_action( 'lunar_metafooter_short' ); ?>
    
                    </div>
	
		</article>

        <?php 
        endwhile; 
        
		else : ?>

			<div class="post-content">
		        
                <?php echo esc_url( home_url('/') ); ?>
            
            </div>

        <?php
		endif; ?>
        <nav>
        <?php 
			// Previous/next page navigation.
			the_posts_pagination(
				array(
					'prev_text'          => esc_html__( 'Previous page', 'readerease' ),
					'next_text'          => esc_html__( 'Next page', 'readerease' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'readerease' ) . ' </span>',
				)
			);
?>
        </nav>
</section>
		
