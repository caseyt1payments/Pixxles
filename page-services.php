<?php
/**
 * Template Name: Services
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
        <div class="large-9 large-centered medium-11 medium-centered small-12 small-centered columns ipg-content">
            <div class="row">

            <?php the_content();?>

            <?php
            // check if the repeater field has rows of data
            if( have_rows('repeater') ):

                // loop through the rows of data
                while ( have_rows('repeater') ) : the_row(); ?>

                  <div class="large-4 columns spg-srv-item">
                      <img src="<?php the_sub_field('icon');?>" style="max-height: 85px;">
                      <h4><?php the_sub_field('title');?></h4>
                      <p><?php the_sub_field('copy');?></p>
                  </div>

                <?php endwhile;
            endif;
            ?>

            </div>
        </div>
    </div>

<?php endwhile;
get_footer();?>