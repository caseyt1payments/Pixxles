<?php
/**
 * Template Name: What We Offer
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 11/26/18
 * Time: 9:27 AM
 */
get_header();
while ( have_posts() ) : the_post();?>

    <section class="frm-diagonal">
        <h1><?php the_title();?></h1>
    </section>

    <div class="row collapse" style="background-image: url(<?php the_post_thumbnail_url('full');?>);background-size: cover;background-repeat: no-repeat;min-height:55vh;">
    </div>

    <div class="row collapse ipg-content-row">
        <div class="large-8 large-centered medium-11 medium-centered small-12 small-centered columns ipg-content">

            <?php the_content();?>

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