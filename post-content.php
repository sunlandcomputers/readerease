<?php // Content section template
?>
<section class="entry-content">

    <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <article aria-labelledby="posts" id="post-<?php the_ID(); ?>" <?php post_class(); ?> 
                itemscope itemtype="https://schema.org/Article">
         
           
                <div class="inner-article-content">

                    <?php the_content( ); ?>
                         <p><?php 
                         wp_link_pages(	array(
            				'before' => '<div class="page-link"><span>' . __( 'Pages:', 'readerease' ) . '</span>',
			            	'after'  => '</div>', 
                        ) ); ?></p>
                </div>
                
               
        </article>                 


    <?php endwhile; ?>
        <?php else : ?>
            
            <div class="post-content">
		        
                <?php echo esc_url( home_url('/') ); ?>
            
            </div>

    <?php endif; ?>  
</section> 
