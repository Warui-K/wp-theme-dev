<?php 
/**
 * Template Name: Experimental
 */
    get_header();

    while(have_posts()){
        the_post();
        ?>
                        <!-- Page Title
            ============================================= -->
            <section id="page-title">
                <div class="container clearfix">
                    <h1>Experimental Code</h1>
                   
                </div>
            </section>
            <!-- #page-title end-->
        <?php

    } 
    rewind_posts();
?>
   <!-- Page Title
        Alternative Option
             ============================================= -->
           <!--  <section id="page-title">
                <div class="container clearfix">
                    <h1><?php single_post_title();?></h1>
                    <span><?php 
                    if(function_exists('the_subtitle'))
                    {
                    the_subtitle();
                    
                    }?></span>
                </div>
            </section> -->
            <!-- #page-title end-->
<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">

                <?php 
                /**
                 * Login Tag Example
                 */
                //wp_loginout();  
                

                /**
                 * Archive Tag Example
                 */
                 single_post_title();
              ?>
                <div class="single-post nobottommargin">

                    <!-- Single Post
          ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Image
              ============================================= -->
                        <?php 
                            if(has_post_thumbnail()){
                                ?>
                                <div class="entry-image">
                                                <a href="<?php the_permalink();?>">
                                                <?php the_post_thumbnail('full');?>
                                                </a>
                                            </div>
                                <?php
                            }
                            ?>
                       <!-- .entry-image end -->

                        <!-- Entry Content
              ============================================= -->
                        <div class="entry-content notopmargin">

                            <?php 
                            
                            the_content();
                            $defaults = array(
                                'before'           => '<p class="text-center">' . __( 'Pages:', 'wp-theme-dev' ),
                                'after'            => '</p>',
                               
                            );
                            wp_link_pages($defaults);?>
                            <!-- Post Single - Content End -->

                

                            <div class="clear"></div>

                        </div>
                    </div><!-- .entry end -->

                  
                    <div class="line"></div>

                    <?php
                    if(comments_open() || get_comments_number()){
                             comments_template();
                    }
                    ?>

                </div>
        
        </div>

    </div>

</section><!-- #content end -->

<?php get_footer();?>