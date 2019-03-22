<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>

<?php if (is_page_template('page-home-alt.php') ) { ?>


    </div>
<?php };?>

<?php if(!is_page_template('page-landing-page.php')) { ?>


                <div class="row ftr">

                    <div class="large-9 large-centered columns ftr-logos">
                        <div class="row">
                            <?php

                            // check if the repeater field has rows of data
                            if( have_rows('accredidation', 'options') ):
                                // loop through the rows of data
                                while ( have_rows('accredidation', 'options') ) : the_row(); ?>

                                    <div class="large-3 medium-3 small-6 columns text-center">
                                        <a href="<?php the_sub_field('link','options');?>" target="_blank"><img src="<?php the_sub_field('logo','options');?>" height="100"></a>
                                    </div>

                                <?php endwhile;
                            endif;
                            ?>
                        </div>
                    </div>

                    <div class="large-11 large-centered columns">

                        <div class="row">
                            <div class="large-3 medium-3 columns">
                                <div class="row collapse ftr-logo">
                                    <a href="<?php echo home_url(); ?>"><img class="aligncenter" src="/wp-content/uploads/2018/11/PIXXLES-allWHITE.png"></a>
                                </div>
                                <div class="row ftr-icons text-center">
                                    <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('social_media', 'options') ):
                                    // loop through the rows of data
                                    while ( have_rows('social_media', 'options') ) : the_row(); ?>

                                        <a href="<?php the_sub_field('link','options');?>" target="_blank"><img src="<?php the_sub_field('icon','options');?>"></a>

                                    <?php endwhile;
                                    endif;
                                    ?>
                                </div>

                            </div>

                            <div class="large-3 medium-3 columns ftr-contact">
                                <?php the_field('contact_info','options');?>
                            </div>


                            <div class="large-3 medium-3 columns hide-for-small-only ftr-links">
                                <h3>About</h3>
                                <?php joints_footer_links();?>
                            </div>

                            <div class="large-3 medium-3 columns hide-for-small-only">
                                <h3>Solutions</h3>
                                <?php solutions_footer_links();?>
                            </div>

                        </div>
                    </div>

<?php };?>

				
				</div> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>

<!-- This site is converting visitors into subscribers and customers with OptinMonster - https://optinmonster.com -->
<script type="text/javascript" src="https://a.optmnstr.com/app/js/api.min.js" data-account="58484" data-user="51965" async></script>
<!-- / https://optinmonster.com -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
	</body>
	
</html> <!-- end page -->