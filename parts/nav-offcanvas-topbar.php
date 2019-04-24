<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left show-for-large">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><img class="hdr-logo" src="/wp-content/uploads/2019/04/PIXXLES-ICON.png"></a></li>
            <?php joints_top_nav(); ?>
        </ul>
	</div>
	<div class="top-bar-right float-right hide-for-large">
		<ul class="menu">
			 <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
		</ul>
	</div>
</div>