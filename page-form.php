<?php
/**
 * Template Name: Form Page
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

        <?php if (is_page('contact-pixxles')) { ?>

            <div class="large-8 large-centered columns">
                <div class="row">
                    <div class="large-4 medium-4 columns frm-content">
                        <div class="row collapse">
                            <div class="large-9 large-centered columns">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                    <div class="large-8 medium-8 columns">
                        <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]');?>
                    </div>

                </div>
            </div>

        <?php } else {?>

        <div class="large-8 large-centered medium-9 medium-centered small-10 small-centered columns ipg-content">
            <?php the_content();?>
        </div>

        <?php };?>

    </div>


<?php endwhile;
get_footer();?>