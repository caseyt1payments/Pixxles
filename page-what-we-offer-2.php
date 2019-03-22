<?php
/**
 * Template Name: What We Offer - 2
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 11/26/18
 * Time: 9:27 AM
 */
get_header();
while ( have_posts() ) : the_post();?>

    <div class="row collapse hpg-row">
        <div class="large-5 columns">
            <div class="row">
                <div class="large-8 large-centered medium-7 medium-centered small-7 small-centered columns hpg-main-content animated fadeInDown text-center">
                    <a href="<?php echo home_url(); ?>"><?php the_custom_logo();?></a>
                    <?php the_field('info_page_intro');?>
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
               <?php the_field('what_we_offer_info');?>
            </div>
        </div>
    </div>

    <div class="row collapse ipg-content-row">
        <div class="large-8 large-centered medium-11 medium-centered small-12 small-centered columns ipg-content">

            <?php
            // check if the repeater field has rows of data
            if( have_rows('what_we_offer') ):

                // loop through the rows of data
                while ( have_rows('what_we_offer') ) : the_row(); ?>

                    <a name="<?php the_sub_field('anchor');?>">
                        <div class="row collapse pg-wwo-item">
                            <div class="large-3 medium-4 columns text-center">
                                <img src="<?php the_sub_field('image');?>">
                            </div>
                            <div class="large-9 medium-8 columns">
                                <h1><?php the_sub_field('title');?></h1>
                                <?php the_sub_field('excerpt');?>
                            </div>
                        </div>
                    </a>

                <?php endwhile;
            endif;
            ?>


        </div>
    </div>



<?php endwhile;
get_footer();?>