<?php
/**
 * Template Name: Privacy Policy Page
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
        <div class="large-7 large-centered columns about-copy-header">
            <?php the_field('about_copy_header');?>
        </div>
        <div class="large-4 large-centered medium-7 medium-centered small-11 small-centered columns about-img">
            <img src="<?php the_field('about_image');?>">
            <div class="dot-1"></div>
            <div class="dot-2"></div>
            <div class="dot-3"></div>
        </div>
    </div>


    <div class="row collapse hpg-one-content">
        <div class="large-8 large-centered small-10 small-centered columns text-center hpg-one-content-text privacy-content">
            <?php the_field('about_copy');?>
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