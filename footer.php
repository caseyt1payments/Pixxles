<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>

				<footer class="footer" role="contentinfo">
                    <div class="row">
                        <div class="large-9 large-centered medium-10 medium-centered columns">
                            <div class="row ftr">
                                <div class="ftr-item">
                                    <a href="<?php echo home_url(); ?>"><img class="ftr-logo" src="/wp-content/uploads/2019/04/PIXXLES-LOGO-FINAL-WHITE-WORDING.png"></a>
                                </div>
                                <div class="ftr-item ftr-contact">
                                    <?php the_field('contact_info', 'options');?>
                                </div>
                                <div class="ftr-item">
                                    <?php joints_footer_links(); ?>
                                </div>
                                <div class="ftr-item social-media">
                                    <?php the_field('social_media', 'options');?>
                                </div>
                            </div>
                        </div>
                    </div>

				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->

		
		<?php wp_footer(); ?>

    <script>
        jQuery(document).ready(function($) {
            $(document).foundation();

            $(".firstWord").html(function(){
                var text= $(this).text().trim().split(" ");
                var first = text.shift();
                return (text.length >= 0 ? "<h2>"+ first + "</h2> " : first) + "<h3>" + text.join(" ") + "</h3>";
            });
        });

    </script>
		
	</body>
	
</html> <!-- end page -->