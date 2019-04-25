<?php
/**
 * Template Name: Home Page
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 04/08/2019
 * Time: 11:23 AM
 */
get_header();
while ( have_posts() ) : the_post();?>

        <div class="row collapse">
            <div class="large-4 medium-6 small-8 columns large-offset-1 medium-offset-1 small-offset-1 hpg-hdr-intro hpg-hdr" data-aos="fade-right">
                <?php the_content();?>
                <p style="text-align: left;"><a href="/contact/">Let's Get Started<span class="arrow"><span></span></span></a></p>
            </div>
        </div>

    </header> <!-- end .header -->

    <div class="row collapse hpg-one-intro">
        <div class="large-5 large-centered small-10 small-centered columns hpg-one-hdr">
            <?php the_field('homepage_section_one_header');?>
        </div>
        <div class="large-4 large-centered medium-7 medium-centered small-11 small-centered columns hpg-one-img">
            <img src="<?php the_field('homepage_section_one_image');?>">
            <div class="dot-1"></div>
            <div class="dot-2"></div>
            <div class="dot-3"></div>
        </div>
    </div>

    <div class="row collapse hpg-one-content">
        <div class="large-6 large-centered small-10 small-centered columns text-center hpg-one-content-text">
            <?php the_field('homepage_section_one_content');?>

            <button class="cta"><a target="_blank" href="/contact"><span>Click To Sign Up</span></a></button>
        </div>

        <div class="row collapse hpg-two-row">

            <div class="large-3 medium-3 columns hpg-two-title features-box hide-for-small-only" data-aos="fade-right">

                <?php
                if( have_rows('homepage_section_two_repeater') ): $i = 0;
                    while (have_rows('homepage_section_two_repeater')) : the_row();$i++;?>
                        <a class="question<?php echo $i; ?>" href="#">
                            <h2><?php the_sub_field('title');?></h2>
                        </a>

                    <?php endwhile;
                endif;
                ?>

            </div>

            <div class="small-12 columns hpg-two-title features-box show-for-small-only">
                <h2>Pixxles Offers:</h2>
                <ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true">
                    <?php
                    if( have_rows('homepage_section_two_repeater') ): $i = 0;
                        while (have_rows('homepage_section_two_repeater')) : the_row();$i++;?>

                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title"><h2><?php the_sub_field('title');?></h2></a>
                                <div class="accordion-content" data-tab-content>
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </li>

                        <?php endwhile;
                    endif;
                    ?>
                </ul>
            </div>
            <div class="large-6 medium-5 columns hpg-features-img" style="background-image: url(http://pixxles.flywheelsites.com/wp-content/uploads/2019/04/PIXXLES-HOMEPAGE-GIRL-AT-CASHIER.jpg);background-size: cover;min-height: 35vh;background-position: center">

            </div>
            <div class="large-3 medium-4 columns" data-aos="fade-left">

                <?php
                if( have_rows('homepage_section_two_repeater') ): $i = 0;
                    while (have_rows('homepage_section_two_repeater')) : the_row();$i++;?>
                        <div id="answer<?php echo $i; ?>" class="hide-for-small-only">
                            <h2>Pixxles Offers</h2>
                            <?php the_sub_field('content'); ?>
                            <p style="text-align: left;"><a href="http://pixxles.local/features/">Learn More<span class="arrow"><span></span></span></a></p>
                        </div>
                        <div class="hpg-repeater-content" id="answer" data-link="<?php echo $i; ?>">
                        </div>
                    <?php endwhile;
                endif;
                ?>

            </div>

        </div>
    </div>

    <script>
        jQuery(document).ready(function($){

            $( ".question1" ).addClass( "active" );

            $('[class^="question"]').on('click', function(e){
                e.preventDefault();
                var numb = this.className.replace('question', '');
                $('[id^="answer"]').hide();
                $('#answer' + numb).show();
                $('[class^="question"]').not(this).removeClass('active');
                $(this).toggleClass('active');


            });

        });

    </script>

    <div class="row collapse hpg-three-row">
        <div class="large-9 large-centered small-9 small-centered columns">
            <?php the_field('homepage_section_three_content');?>
        </div>
    </div>

    <div class="row collapse hpg-four-row" style="background-image: url( <?php the_field('homepage_section_four_background_image');?>);background-size: cover;min-height: 40vh;background-position: center" >
        <div class="large-4 large-offset-2 small-8 small-offset-1 columns hpg-four-content">
            <div>
                <?php the_field('homepage_section_four_content');?>
                <div class="hpg-four-sub-content">
                    <?php the_field('homepage_section_four_sub_content');?>
                </div>
                <p style="text-align: left;"><a href="http://pixxles.local/contact/">Let's Get Started<span class="arrow"><span></span></span></a></p>
            </div>
        </div>

    </div>

    <div class="row collapse hpg-five-row">
        <div class="large-11 large-centered medium-11 medium-centered small-10 small-centered columns text-center">
            <h2>Trusted. Verified. Protected.</h2>
            <div class="row icons">

                <?php

                // check if the repeater field has rows of data
                if( have_rows('homepage_footer_logos') ):
                    // loop through the rows of data
                    while ( have_rows('homepage_footer_logos') ) : the_row(); ?>

                        <div class="icon-item text-center grow">
                            <a href="<?php the_sub_field('link');?>">
                                <img src="<?php the_sub_field('logo');?>">
                            </a>
                        </div>

                    <?php endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>





<?php endwhile;
get_footer();?>