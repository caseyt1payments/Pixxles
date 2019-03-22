<?php
/**
 * Template Name: Info Page - 2
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
                <div class="large-8 large-centered medium-7 medium-centered small-7 small-centered columns hpg-main-content animated fadeInDown text-center">
                    <a href="<?php echo home_url(); ?>"><?php the_custom_logo();?></a>

                </div>
            </div>
        </div>
        <div class="large-7 columns frm-main-img hpg-service-img" style="background-image: url(<?php echo the_post_thumbnail_url('full');?>);background-size: cover;background-repeat: no-repeat;min-height: 45vh;background-position: right;">
            <img style="float:LEFT;" src="/wp-content/uploads/2019/01/PIXXLES-HOME-HEADER-IMG-OVERLAY.png">
        </div>
    </div>

    <div class="row collapse wwo-info">
        <div class="large-10 large-centered columns">
            <div class="row collapse">
                <?php the_field('info_page_intro');?>
            </div>
        </div>
    </div>


    <div class="row collapse ipg-content-row">

        <div class="large-8 large-centered medium-9 medium-centered small-11 small-centered columns ipg-content">
            <?php the_content();?>
        </div>


        <?php if (is_page('faq')) {?>

            <div class="row collapse">
                <div class="large-8 large-centered columns">
                    <ul class="accordion" data-accordion data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge-delay="500" id="deeplinked-accordion">
                        <?php

                        // check if the repeater field has rows of data
                        if( have_rows('faq_repeater') ):
                            // loop through the rows of data
                            while ( have_rows('faq_repeater') ) : the_row(); ?>

                                <li class="accordion-item" data-accordion-item>
                                    <a href="#deeplink1" class="accordion-title"><?php the_sub_field('question');?></a>
                                    <div class="accordion-content" data-tab-content id="deeplink1">
                                        <?php the_sub_field('answer');?>
                                    </div>
                                </li>

                            <?php endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>

        <?php };?>

    </div>


<?php endwhile;
get_footer();?>