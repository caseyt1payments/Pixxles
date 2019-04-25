<?php 
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */
 	
get_header(); ?>

<div class="row collapse">
    <div class="large-4 medium-6 small-8 columns large-offset-1 medium-offset-1 small-offset-1 hpg-hdr-intro" data-aos="fade-right">
        <?php $post_id = 13;
            $post_object = get_post( $post_id );
            echo $post_object->post_content;?>
        <p style="text-align: left;"><a href="/contact/">Let's Get Started<span class="arrow"><span></span></span></a></p>

    </div>
</div>

</header> <!-- end .header -->

<div class="row collapse hpg-one-intro">
    <div class="large-10 large-centered columns">
        <div class="row collapse faq-row">
            <div class="large-7 large-centered columns">
                <?php the_field('faq_copy', 13);?>

                <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                    <div>
                        <h2>Search</h2>
                        <input class="searchbox" type="text" style="text-align: center !important;" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                        <input type="hidden" name="post_type" value="faq" />
                        <input type="submit" id="searchsubmit" value="Search" class="btn" />
                    </div>
                </form>
            </div>



            <div class="content">

                    <main class="row collapse" role="main">

                        <div class="large-9 large-centered columns text-center">
                            <header>
                                <h3 class="archive-title"><?php _e( 'Search Results for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h3>
                            </header>

                            <ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true">

                            <?php
                            // store the post type from the URL string
                            $post_type = $_GET['post_type'];
                            // check to see if there was a post type in the
                            // URL string and if a results template for that
                            // post type actually exists
                            if ( isset( $post_type )  &&  $post_type == 'faq'  ) {
                                while (have_posts()) : the_post();

                               // To see additional archive styles, visit the /parts directory
                                get_template_part( 'parts/loop', 'archive' );

                               endwhile;
                             };
                            wp_reset_postdata();?>

                            </ul>

                            <div class="row collapse text-center">
                                <?php joints_page_navi(); ?>
                            </div>

                        </div>

                    </main> <!-- end #main -->


            </div> <!-- end #content -->
        </div>
    </div>
</div>
<?php get_footer(); ?>
