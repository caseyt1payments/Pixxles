<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>


    <li class="accordion-item" data-accordion-item>
        <a href="#" class="accordion-title"><h4><?php the_title();?></h4></a>
        <div class="accordion-content" data-tab-content>
            <?php the_content();?>
        </div>
    </li>