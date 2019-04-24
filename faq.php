<?php
/**
 * Template Name: FAQs Page
 * Created by PhpStorm.
 * User: caseyadcock
 * Date: 04/08/2019
 * Time: 11:23 AM
 */
get_header();
while ( have_posts() ) : the_post();?>

    <div class="row collapse">
        <div class="large-4 medium-6 small-8 columns large-offset-1 medium-offset-1 small-offset-1 hpg-hdr-intro">
            <?php the_content();?>
            <p style="text-align: left;"><a href="/contact/">Let's Get Started<span class="arrow"><span></span></span></a></p>

        </div>
    </div>

    </header> <!-- end .header -->

    <div class="row collapse hpg-one-intro">
       <div class="large-10 large-centered columns">
           <div class="row collapse faq-row">
               <div class="large-8 large-centered small-10 small-centered columns text-center">
                   <?php the_field('faq_copy');?>


                   <div class="cat-buttons">
                       <h4 class="cat-hdr">Categories:</h4>
                       <?php
                       $cats = get_terms( 'faq_category' );
                       if ( ! empty( $cats ) && ! is_wp_error( $cats ) ){
                           $i = 0;

                           foreach ( $cats as $cat ) {
                               echo '<a class="question' .$i. '"><button class="faq-cat">' . $cat->name . '</button></a>';
                               $i++;
                           }

                       }?>

                   </div>

                   <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                       <div>
                           <h2>Search</h2>
                           <input class="searchbox" type="text" style="text-align: center !important;" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s"/>
                           <input type="submit" id="searchsubmit" value="Search" class="btn" />
                       </div>
                   </form>


                   <div class="faq-content">
                       <?php the_field('faq_search_content');?>
                   </div>
               </div>
           </div>
           <div class="row faq-row text-center">
               <div class="large-9 large-centered small-10 small-centered columns">


                       <?php
                       $post_type = 'faq';
                       $taxonomies = get_object_taxonomies( $post_type );
                       $i = 0;

                       foreach ($taxonomies as $taxonomy){
                           $terms = get_terms($taxonomy, array('orderby' => 'name', 'order' => 'ASC', 'exclude' => '1'));

                       echo "<h3>".$terms->name."</h3>";


                           if ( !empty( $terms ) && !is_wp_error( $terms ) ){

                               foreach ( $terms as $term ) {
                                   $args = array(
                                       'post_type'           => $post_type,
                                       'orderby'             => 'title',
                                       'order'               => 'ASC',
                                       'ignore_sticky_posts' => 1,
                                       'post_status'         => 'publish',
                                       'posts_per_page'      => - 1,
                                       'tax_query'           => array(
                                           array(
                                               'taxonomy'    => $taxonomy,
                                               'field'       => 'slug',
                                               'terms'       => $term->slug
                                           )
                                       )
                                   );


                                   $my_query = null;
                                   $my_query = new WP_Query($args);
                                   if ($my_query->have_posts()) {
                                       echo "<div class='answer$i'>";
                                       $i++;?>

                                    <ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true">
                                       <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                           <li class="accordion-item" data-accordion-item>
                                               <a href="#" class="accordion-title"><h4><?php the_title();?></h4></a>
                                               <div class="accordion-content" data-tab-content>
                                                  <?php the_content();?>
                                               </div>
                                           </li>

                                       <?php
                                       endwhile;?>
                                   </ul>

                                   <?php
                                        echo "</div>  <div id=\"answer\" data-link=\"<?php echo $i; ?>\"></div>";
                                   }; // END if have_posts loop
                                   wp_reset_query();
                               } // END foreach $terms
                           }
                       }
                       ?>

                   <script>
                       jQuery(document).ready(function($){

                           $( ".question0" ).addClass( "active" );

                           $('[class^="question"]').on('click', function(e){
                               e.preventDefault();
                               var numb = this.className.replace('question', '');
                               $('[class^="answer"]').hide();
                               $('.answer' + numb).show();
                               $('[class^="question"]').not(this).removeClass('active');
                               $(this).toggleClass('active');


                           });

                       });

                   </script>

               </div>
               <button class="cta"><a target="_blank" href="/contact"><span>Click To Sign Up</span></a></button>
           </div>
       </div>
    </div>


<?php endwhile;
get_footer();?>