<?php
/**
 * Template Name: Splash Page
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 9/24/18
 * Time: 3:41 PM
 */;?>

<?php get_header();
while ( have_posts() ) : the_post();?>


    <div class="row collapse" style="background-image: url(<?php echo the_post_thumbnail_url('full');?>);background-size: cover;background-repeat: no-repeat;min-height: 100vh;">
        <div class="large-3 large-offset-7 columns spl-logo text-center">
            <img src="/wp-content/uploads/2018/09/PIXXLES-LOGO-FINAL.png">
            <h2><?php the_content();?></h2>
        </div>
    </div>


<?php endwhile;
get_footer();?>