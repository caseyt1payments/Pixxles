<?php
/**
 * Template Name: Technology Page
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 04/08/2019
 * Time: 11:23 AM
 */
get_header();
while ( have_posts() ) : the_post();?>


    <div class="row collapse">
        <div class="large-4 medium-5 small-8 columns large-offset-1 medium-offset-1 small-offset-1 hpg-hdr-intro">
            <?php the_content();?>
            <p style="text-align: left;"><a href="/contact/">Let's Get Started<span class="arrow"><span></span></span></a></p>

        </div>
    </div>

    </header> <!-- end .header -->


    <div class="row collapse tech-one-row">
        <div class="large-8 large-centered small-10 small-centered columns text-center tech-one-content">
            <?php the_field('content');?>
        </div>

        <div class="large-4 large-centered medium-7 medium-centered small-11 small-centered columns tech-one-image">
            <img src="<?php the_field('image');?>">
            <div class="dot-1"></div>
            <div class="dot-2"></div>
            <div class="dot-3"></div>
        </div>
    </div>


    <div class="row collapse tech-two-row text-center">
        <div class="large-10 large-centered small-11 small-centered columns text-center tech-two-content">
            <div class="row collapse tech-repeater-hdr">
                <?php the_field('repeater_header');?>
            </div>
            <div class="row tech-repeater">

            <?php

            // check if the repeater field has rows of data
            if( have_rows('repeater') ):
                $i = 0;
                // loop through the rows of data
                while ( have_rows('repeater') ) : the_row();

                 ?>

                <div class="tech-repeater-item">
                    <img src="<?php the_sub_field('icon');?>">
                    <div class="row collapse tech-repeater-content <?php if($i == 3) { echo "end"; } elseif($i == 1) { echo "odd"; };?>">
                        <div class="firstWord"><?php the_sub_field('title');?></div>
                        <p><?php the_sub_field('content');?></p>
                    </div>
                </div>

                <?php
                    $i++;
                endwhile;
            endif;
            ?>

            </div>

        </div>
        <button class="cta"><a target="_blank" href="/contact"><span>Click To Sign Up</span></a></button>
    </div>


    <div class="row collapse">
        <div class="large-8 large-centered small-10 small-centered columns text-center tech-cta">
            <?php the_field('call_to_action','options');?>
            <a href="/contact/">Let's Get Started<span class="arrow"><span></span></span></a>
        </div>
    </div>

<?php endwhile;
get_footer();?>