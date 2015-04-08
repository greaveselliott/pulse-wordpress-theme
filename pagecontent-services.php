<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php if ( defined( 'HOME_SLIDER') ) echo '<div class="slider-cover">'; ?>
<!-- Begin Services -->
<section class="parallax colored clearfix background-magenta" id="<?php $content->slug(); ?>" style="background-image: url(' <?php echo $meta->services->background; ?>');">
	<div class="content dark padded container">

		<div class="title grid-full">
			<h2><?php $content->title(); ?></h2>
			<span class="border"></span>

			<div class="sub-heading">
				<p></p>
			</div>
		</div>
		<div class="clearfix"></div>
        <div class="icons clearfix">
            <div class="services-carousel">
            <?php
                $services_query = new Eemjii_WP_Query(array(
                    '_post_type'             => 'eemjii_services',
                    '_post_template_prefix'  => 'template',
                    '_post_template_part'    => 'service',
                    '_posts_per_page'        => 0,
                    '_loop_wrapper'          => false,
                    '_row_wrapper'           => false
                ));
            ?>
            </div>
        </div>
	</div>
</section>
<?php if ( defined( 'HOME_SLIDER') ) echo '</div>'; ?>