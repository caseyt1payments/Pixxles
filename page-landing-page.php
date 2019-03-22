<?php
/**
 * Template Name: Landing Page - EN
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 3/21/19
 * Time: 4:19 PM
 */
get_header();
while ( have_posts() ) : the_post();?>




    <div class="row lp-hdr">
        <div class="large-2 columns lp-hdr-logo">
            <img src="/wp-content/uploads/2018/09/PIXXLES-LOGO-FINAL.png">
        </div>
        <div class="large-6 large-offset-4 columns lp-hdr-cta">
            <?php the_field('header_cta', 'options');?>
        </div>
    </div>

    <div class="row collapse lp-img" style="background-image:linear-gradient(180deg, rgba(212, 212, 212, 0.5), rgba(212, 212, 212, 0.75)),  url(<?php echo the_post_thumbnail_url('full');?>);background-size: cover;width: 100%;height: 45vh;background-position: center;">
        <div class="large-5 columns lp-content"  data-aos="fade-in">
            <?php the_content();?>
        </div>

        <div class="large-3 large-offset-3 columns lp-content-2"  data-aos="fade-in">
            <?php the_field('header_info_2', 'options');?>
        </div>
        <div class="large-1 columns">
            &nbsp;
        </div>
    </div>

    <div class="row frm-row">
        <div class="large-5 columns">
            <div class="row collapse">
                <div class="large-10 large-offset-2 columns lp-frm">
                    <?php the_field('form', 'options');?>
                </div>
            </div>
        </div>
        <div class="large-7 columns">
            <div class="row">
                <div class="large-9 large-centered small-11 small-centered columns frm-content" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <?php the_field('form_content', 'options');?>
                </div>
            </div>
        </div>
    </div>

    <div class="row collapse icon-row">
        <div class="large-11 large-centered columns">
            <h1 style="text-align: center;margin-top: 1em;">Advanced Fraud Detection</h1>
            <div class="row collapse icons">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('icons', 'options') ):
                    // loop through the rows of data
                    while ( have_rows('icons', 'options') ) : the_row(); ?>

                        <div class="icon-item text-center" data-aos="flip-left">
                            <a href="<?php the_sub_field('website', 'options');?>" target="_blank">
                                <img src="<?php the_sub_field('icon' , 'options');?>">
                            </a>
                        </div>

                    <?php endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>

    <div class="row swe-margin-5" data-aos="fade-in">
        <div class="large-9 large-centered columns">
            <div class="row collapse feature-1-row">
                <div class="large-6 columns feature-1">
                    <div class="row">
                        <div class="large-9 large-centered columns">
                            <?php

                            // check if the repeater field has rows of data
                            if( have_rows('feature_one', 'options') ):
                                // loop through the rows of data
                                while ( have_rows('feature_one', 'options') ) : the_row(); ?>
                                    <div class="row feature-item">
                                        <div class="large-3 columns icon">
                                            <img src="<?php the_sub_field('icon', 'options');?>">
                                        </div>
                                        <div class="large-9 columns">
                                            <?php the_sub_field('icon_feature_content', 'options');?>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="large-6 columns text-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="row">
                        <div class="large-2 columns">
                            &nbsp;
                        </div>
                        <div class="large-10 columns swe-margin-2">
                            <h1>Process in 169 Currencies</h1>
                            <div class="row">
                                <?php

                                // check if the repeater field has rows of data
                                if( have_rows('feature_one_repeater', 'options') ):
                                    // loop through the rows of data
                                    while ( have_rows('feature_one_repeater', 'options') ) : the_row(); ?>
                                        <div class="large-8 large-centered small-8 small-centered columns feature-1-icon">
                                            <img src="<?php the_sub_field('icon', 'options');?>">
                                        </div>
                                    <?php endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row swe-margin-5" data-aos="fade-in">
        <div class="large-9 large-centered columns">
            <div class="row collapse feature-2-row">
                <div class="large-6 columns text-center" data-aos="fade-right"  data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="row">
                        <div class="large-10 columns swe-margin-2">
                            <h1>175+ Platform Integrations</h1>
                            <div class="row">
                                <?php

                                // check if the repeater field has rows of data
                                if( have_rows('feature_two_repeater', 'options') ):
                                    // loop through the rows of data
                                    while ( have_rows('feature_two_repeater', 'options') ) : the_row(); ?>
                                        <div class="large-6 medium-6 small-6 columns feature-2-icon">
                                            <img src="<?php the_sub_field('icon', 'options');?>">
                                        </div>
                                    <?php endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="large-2 columns">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="large-6 columns feature-2">
                    <div class="row">
                        <div class="large-9 large-centered columns">
                            <?php

                            // check if the repeater field has rows of data
                            if( have_rows('feature_two', 'options') ):
                                // loop through the rows of data
                                while ( have_rows('feature_two', 'options') ) : the_row(); ?>
                                    <div class="row feature-item">
                                        <div class="large-3 columns icon">
                                            <img src="<?php the_sub_field('icon', 'options');?>">
                                        </div>
                                        <div class="large-9 columns">
                                            <?php the_sub_field('icon_feature_content', 'options');?>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row collapse icon-row swe-margin-5 testimonial">
        <div class="large-9 large-centered columns">
            <div class="row">
                <div class="large-4 columns testimonial-item">
                    <div class="row collapse">
                        <img src="<?php the_field('testimonial_image', 'options');?>">
                    </div>
                    <div class="row collapse testimonial-title">
                        <?php the_field('testimonial_title', 'options');?>
                    </div>
                </div>
                <div class="large-8 columns">
                    <div class="row">
                        <div class="large-9 large-centered columns">
                            <?php the_field('testimonial_content', 'options');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row collapse text-center swe-margin-5 industry-row">
        <h1><?php the_field('industries_header', 'options');?></h1>
        <div class="row">
            <div class="large-11 large-centered small-11 small-centered columns">
                <div class="row">
                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('industries', 'options') ):
                        // loop through the rows of data
                        while ( have_rows('industries', 'options') ) : the_row(); ?>
                            <div class="large-2 small-6 columns swe-margin-2 industry-item" data-aos="flip-left" data-aos-delay="50" data-aos-easing="ease-in-out" data-aos-duration="1000">
                                <div class="row collapse industry-img">
                                    <img src="<?php the_sub_field('image', 'options');?>" style="border-radius: 12px 12px 0px 0px !important;">
                                </div>
                                <div class="row collapse text-center industry-title">
                                    <h3><?php the_sub_field('title', 'options');?></h3>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <h1><?php the_field('industries_footer', 'options');?></h1>
    </div>


    <div class="row collapse icon-row">
        <div class="large-11 large-centered columns">
            <div class="row lp-ftr">
                <div class="large-2 columns lp-ftr-logo">
                    <img src="/wp-content/uploads/2018/12/PIXXLES-icon-e1545847717202.png">
                </div>

                <div class="large-4 large-offset-6 columns lp-ftr-cta">
                    <?php the_field('header_cta', 'options');?>
                </div>
            </div>
        </div>
    </div>

<?php endwhile;
get_footer();?>