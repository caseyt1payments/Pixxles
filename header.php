<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<!-- Load off-canvas container. Feel free to remove if not using. -->
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>

                <?php
                if(is_page_template('home.php')) {?>

				    <header class="header" role="banner" style="background-image: url(<?php echo the_post_thumbnail_url('full');?>);min-height:55vh;width:100%;background-repeat: no-repeat;background-size: cover;background-position: top center;">

                <?php } elseif (is_search()) { ?>

                        <header class="header" role="banner" style="background-image: url(<?php echo the_post_thumbnail_url('full');?>);min-height:45vh;width:100%;background-repeat: no-repeat;background-size: cover;background-position:center;">

                <?php } else { ;?>

                        <header class="header" role="banner" style="background-image: url(<?php echo the_post_thumbnail_url('full');?>);min-height:45vh;width:100%;background-repeat: no-repeat;background-size: cover;background-position:center;">

                <?php };?>

					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>






