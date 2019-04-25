<?php
/**
 * Template Name: Features Page
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 04/08/2019
 * Time: 11:23 AM
 */
get_header();
while ( have_posts() ) : the_post();?>

    <div class="row collapse">
        <div class="large-4 medium-6 small-8 columns large-offset-1 medium-offset-1 small-offset-1 hpg-hdr-intro" data-aos="fade-right">
            <?php the_content();?>
            <p style="text-align: left;"><a href="/contact/">Let's Get Started<span class="arrow"><span></span></span></a></p>

        </div>
    </div>

    </header> <!-- end .header -->

    <div class="row collapse hpg-one-intro">
        <div class="large-5 large-centered small-10 small-centered columns hpg-one-hdr">
            <?php the_field('content');?>
        </div>
        <div class="large-4 large-centered medium-7 medium-centered small-11 small-centered columns feature-img">
            <img src="<?php the_field('image');?>">
            <div class="dot-1"></div>
            <div class="dot-2"></div>
            <div class="dot-3"></div>
        </div>
    </div>

    <div class="row collapse features-repeater-section">
        <div class="large-7 large-centered medium-10 medium-centered small-10 small-centered columns features-repeater-section-content text-center">
            <div class="row collapse">
                <?php the_field('repeater_header');?>
            </div>
            <div class="row collapse">

                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('repeater') ):
                        // loop through the rows of data
                        while ( have_rows('repeater') ) : the_row();

                            ?>

                                <div class="large-6 medium-6 columns text-center features-repeater-item" data-aos="fade-up">
                                    <div class="firstWord"><?php the_sub_field('title');?></div>

                                    <div class="row collapse features-repeater-item-content" style="background-image: url(<?php the_sub_field('repeater_image');?>);background-size: cover;min-height: 35vh;background-position: center">
                                        <div class="large-8 large-centered columns hover">
                                            <p><?php the_sub_field('content');?></p>
                                        </div>

                                    </div>

                                </div>

                        <?php
                        endwhile;
                    endif;
                    ?>

            </div>
        </div>
    </div>



    <div class="row collapse">
        <div class="large-8 large-centered small-10 small-centered columns text-center tech-cta">
            <?php the_field('call_to_action','options');?>
            <a href="/contact/">Let's Get Started<span class="arrow"><span></span></span></a>
        </div>
    </div>


<?php endwhile;
get_footer();?>