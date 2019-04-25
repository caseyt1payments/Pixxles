<?php
/**
 * Template Name: Contact Page
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 04/08/2019
 * Time: 11:23 AM
 */
get_header();
while ( have_posts() ) : the_post();?>


    <div class="row collapse">
        <div class="large-4 medium-5 small-8 columns large-offset-1 medium-offset-1 small-offset-1 hpg-hdr-intro" data-aos="fade-right">
            <?php the_content();?>
            <p style="text-align: left;"><a href="#form">Let's Get Started<span class="arrow"><span></span></span></a></p>

        </div>
    </div>

    </header> <!-- end .header -->


    <div class="row collapse tech-one-row"><a name="form"></a>
        <div class="large-6 large-centered medium-9 medium-centered small-11 small-centered columns contact-copy">
            <?php the_field('contact_copy');?>

            <div class="contact-repeater">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('contact_info_repeater') ):
                    // loop through the rows of data
                    while ( have_rows('contact_info_repeater') ) : the_row();

                        ?>

                        <div class="contact-repeater-item">
                            <?php the_sub_field('contact_info');?>
                        </div>


                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>


    <div class="row collapse contact-form" >
        <div class="large-6 large-centered medium-9 medium-centered small-10 small-centered columns text-center contact-form-content text-center">
            <div data-aos="fade-up">
                <?php the_field('form_section');?>
            </div>
        </div>
    </div>


<?php endwhile;
get_footer();?>