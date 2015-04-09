<div class="services-carousel_slide">
    <div class="slideContent">
        <div class="info-box">
            <p class="text-magenta"><?php the_field('info_box');?></p>
            <span class="border background-grey"></span>
        </div>

        <div class="services-inner-carousel">
           <?php
           if( have_rows('sectioned_content') ):
                // loop through the rows of data
                while ( have_rows('sectioned_content') ) : the_row();
                ?>
                    <div class="services-inner-carousel_slide">
                        <div class="customSlickButton2 display-none"><?php the_sub_field('sub-section_title'); ?></div>
                        <div><?php the_sub_field('sub-section_text'); ?></div>
                    </div>
                <?php
                endwhile;
           endif;
           ?>
        </div>
    </div>
    <!-- Slide Dot -->
    <div class="animated entrance customSlickButton1 display-none" data-appear-bottom-offset="100">
        <span class="feature-icon feature">
            <i class="icon-<?php the_field('icon');?>"></i>
        </span>
        <!-- Title -->
        <h4><?php the_title(); ?></h4>
    </div>
</div>