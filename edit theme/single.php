<?php get_header(); ?>
<section id="main" style="margin-top: 100px;">
 
    <!--  -->

    <div class="container">
        <div class="row">
            <div id="content" class="site-content col-sm-offset-2 col-sm-8 blog-content-wrapper" role="main">
                <?php if ( have_posts() ) :  ?> 

                    <?php while ( have_posts() ) : the_post(); ?>
                
                        <?php get_template_part( 'post-format/content', get_post_format() ); ?>

                            <!--  -->

                <?php endwhile; ?>    
                <?php else: ?>
                <?php get_template_part( 'post-format/content', 'none' ); ?>
                <?php endif; ?>

                <div class="clearfix"></div>
            </div> <!-- #content -->
        
        <!--  -->

        </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- #main -->

<?php get_footer();