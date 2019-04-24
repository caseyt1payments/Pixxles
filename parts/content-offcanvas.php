<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right text-center" id="off-canvas" data-off-canvas>
    <a href="<?php echo home_url(); ?>"><img class="hdr-logo" src="/wp-content/uploads/2019/04/PIXXLES-ICON.png"></a>
	<?php joints_off_canvas_nav(); ?>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

    <div class="row collapse off-canvas-socialmedia">
        <div class="small-8 small-centered column">
            <?php the_field('social_media', 'options');?>
        </div>
    </div>

</div>
