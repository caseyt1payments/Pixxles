<?php
/**
 * Template Name: Home Page
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 10/12/18
 * Time: 1:15 PM
 */
get_header();
while ( have_posts() ) : the_post();?>

    <div class="row collapse hpg-row">
       <div class="large-5 columns">
           <div class="row">
               <div class="large-8 large-centered medium-7 medium-centered small-7 small-centered columns hpg-main-content animated fadeInDown">
                   <?php the_content();?>
               </div>
           </div>
       </div>
        <div class="large-7 columns hpg-main-img" style="background-image: url(<?php echo the_post_thumbnail_url('full');?>);background-size: cover;background-repeat: no-repeat;min-height: 65vh;background-position: right;">
            <img style="float:LEFT;" src="/wp-content/uploads/2019/01/PIXXLES-HOME-HEADER-IMG-OVERLAY.png">
        </div>
    </div>

    <div class="row collapse hpg-stats">
        <div class="large-11 large-centered columns">
            <div class="row collapse">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('stats') ):
                    // loop through the rows of data
                    while ( have_rows('stats') ) : the_row(); ?>

                        <div class="large-3 medium-3 small-6 columns animated fadeIn">
                            <div class="row hpg-stat-item">
                                <div class="large-4 medium-4 small-4 columns text-right">
                                    <h1><?php the_sub_field('number');?></h1>
                                </div>
                                <div class="large-8 medium-8 small-8 columns hpg-stat-content">
                                    <h2><?php the_sub_field('content');?></h2>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;
                endif;
                ?>
            </div>
        </div>

    </div>

    <div class="row collapse hpg-section-2">
        <div class="large-9 large-centered small-11 small-centered columns">

                <div class="row">
                    <div class="large-6 columns">
                        <img src="<?php echo the_field('content_area_1_image');?>">
                    </div>
                    <div class="large-6 columns content">
                        <?php echo the_field('content_area_1');?>
                    </div>
                </div>

        </div>
    </div>

    <div class="row">
        <div class="large-10 large-centered columns">
            <div class="row hpg-service collapse" data-aos="fade-in">
                <div class="large-4 medium-4 columns hpg-service-content ">
                    <?php the_field('services_1_content');?>
                </div>
                <div class="large-1 medium-1 columns">
                    &nbsp;
                </div>
                <div class="large-7 medium-7 columns hpg-service-img" style="background-image: url(<?php echo the_field('services_1_image');?>);background-size: cover;background-repeat: no-repeat;min-height: 45vh;background-position: right;">
                    <img style="float:LEFT;" src="/wp-content/uploads/2019/01/PIXXLES-SERVICES-OVERLAY-RIGHT.png">
                </div>
            </div>
            <div class="row hpg-service collapse" data-aos="fade-in">
                <div class="large-7 medium-7 columns hpg-service-img" style="background-image: url(<?php echo the_field('services_2_image');?>);background-size: cover;background-repeat: no-repeat;min-height: 45vh;background-position: center;">
                    <img style="float:RIGHT;" src="/wp-content/uploads/2019/01/PIXXLES-SERVICES-OVERLAY-LEFT.png">
                </div>
                <div class="large-1 medium-1 columns">
                    &nbsp;
                </div>
                <div class="large-4 medium-4 columns hpg-service-content">
                    <?php the_field('services_2_content');?>
                </div>
            </div>
            <div class="row hpg-service collapse" data-aos="fade-in">
                <div class="large-4 medium-4 columns hpg-service-content">
                    <?php the_field('services_3_content');?>
                </div>
                <div class="large-1 medium-1 columns">
                    &nbsp;
                </div>
                <div class="large-7 medium-7 columns hpg-service-img" style="background-image: url(<?php echo the_field('services_3_image');?>);background-size: cover;background-repeat: no-repeat;min-height: 45vh;background-position: right;">
                    <img style="float:LEFT;" src="/wp-content/uploads/2019/01/PIXXLES-SERVICES-OVERLAY-RIGHT.png">
                </div>
            </div>
        </div>
    </div>


    <div class="row collapse" data-equalizer>
        <div class="large-6 medium-6 columns hpg-service-img" style="background-image: url(<?php the_field('footer_cta_image');?>);background-size: cover;background-repeat: no-repeat;min-height:35vh;" data-equalizer-watch>
            <img style="float:right;" src="/wp-content/uploads/2019/01/PIXXLES-FOOTER-CTA-OVERLAY.png">
        </div>
        <div class="large-6 medium-6 columns ftr-cta" data-equalizer-watch>
            <?php the_field('footer_cta_content');?>
        </div>
    </div>


<?php endwhile;
get_footer();?>