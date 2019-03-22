<?php
/**
 * Template Name: Homepage - Alt
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 11/26/18
 * Time: 9:27 AM
 */
get_header();
while ( have_posts() ) : the_post();?>

    <div class="row collapse hpg-row-content">
        <div class="large-8 large-centered small-10 small-centered columns animated fadeInDown">
            <?php the_content();?>
            <a href="#homejump"><img class="aligncenter" src="/wp-content/uploads/2018/10/arrow-down.png" alt="" width="75" height="44" /></a>
        </div>
    </div>
    </div>


    <div class="row collapse hpg-repeater">
        <div class="large-11 large-centered medium-11 medium-centered small-10 small-centered columns">
            <h2>MANAGE YOUR PROCESSING EFFICIENTLY BY PARTNERING WITH PIXXLES
                <br>FOR AN ALL-IN-ONE SOLUTION CUSTOMIZED FOR YOUR NEEDS</h2>

            <div class="row">
                <?php
                // check if the repeater field has rows of data
                if( have_rows('repeater') ):

                    // loop through the rows of data
                    while ( have_rows('repeater') ) : the_row(); ?>

                        <div class="large-3 medium-6 small-12 columns hpg-repeater-item grow">
                            <img src="<?php the_sub_field('icon');?>">
                            <h3><?php the_sub_field('title');?></h3>
                            <p><?php the_sub_field('content');?></p>
                            <div class="hpg-repeater-item-hover">
                                <img src="<?php the_sub_field('icon');?>">
                                <h3><?php the_sub_field('title');?></h3>
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
            <a name="homejump">
                <div class="row">
                    <div class="large-5 columns">
                        <img src="<?php echo the_field('image_1');?>">
                    </div>
                    <div class="large-7 columns content">
                        <?php echo the_field('content_1');?>
                    </div>
                </div>
            </a>
        </div>
    </div>


    <div class="row collapse hpg-form">
        <div class="large-8 large-centered medium-11 medium-centered columns">
            <div class="row hpg-form-row">
                <div class="large-4 medium-4 columns text-center">
                    <h1>Get In Touch Today</h1>
                </div>
                <div class="large-8 medium-8 columns">
                    <?php echo do_shortcode('[gravityform id="2" title="false" description="false"]');?>
                </div>
            </div>
        </div>
    </div>

    <div class="row collapse hpg-bottom-img" style="background-image: url(<?php echo get_field('image_2');?>);background-size: cover;background-repeat: no-repeat;min-height:60vh;">
    </div>

    <section class="diagonal">
        <div class="row collapse">
            <div class="large-10 large-centered medium-12 columns hpg-section-3">
                <div class="row">
                    <div class="large-6 medium-5 columns hpg-links animated fadeInLeft">
                        <?php the_field('links');?>
                    </div>
                    <div class="large-6 medium-7 columns">
                        <div class="row">
                            <div class="large-10 large-offset-1 columns content">
                                <?php the_field('content_2');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php endwhile;
get_footer();?>