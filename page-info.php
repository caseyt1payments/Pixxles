<?php
/**
 * Template Name: Info Page
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 10/12/18
 * Time: 1:15 PM
 */
get_header();
while ( have_posts() ) : the_post();?>

    <section class="frm-diagonal">
        <h1><?php the_title();?></h1>
    </section>

    <div class="row collapse" style="background-image: url(<?php the_post_thumbnail_url('full');?>);background-size: cover;background-repeat: no-repeat;min-height:55vh;">
    </div>

    <div class="row collapse ipg-content-row">

        <div class="large-8 large-centered medium-9 medium-centered small-11 small-centered columns ipg-content">
            <?php the_content();?>
        </div>
        
    </div>


<?php endwhile;
get_footer();?>