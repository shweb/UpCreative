<?php /* Template Name: About Page Template */ get_header(); ?>

    <!-- section about upcreative start -->

<div class="mainbar-spacer white">
</div>
<div class="col-md-12">
    <div class="cover aboutusupcreative" style="background: url('<?php the_field('image_background'); ?>') no-repeat top; background-size:cover !important">
        <div class="wrapper-s ">
            <div class="dividerupc"></div>
            <div class="container">
                <div class="col-md-4   about-history-block wow fadeInLeft">
                    <h1><?php the_title(); ?></h1></div>
                <div class="col-md-8 header-e wow fadeInUp">
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                        <div class="table-cell table-cell-t about-history-cell header-e wow fadeInUp">
                            <?php the_content(); ?>
                                <br>
                                <br>
                                <br>
                                <br>
                        </div>
                        <?php endwhile; ?>

                            <?php else: ?>
                                <div class="col-xs-push-0 col-md-push-1 col-sm-push-0 col-md-6">
                                    <p class="intro">
                                        <?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
                                    </p>
                                </div>
                                <?php endif; ?>
                </div>
            </div>

            <!-- section about upcreative start -->

            <!-- How we work start -->

            <?php
				$args = array('post_type' => 'About','post_status' => 'publish','order' => 'ASC');
				$About_loop = new WP_Query( $args );		
				if ( $About_loop->have_posts() ) :
					while ( $About_loop->have_posts() ) : $About_loop->the_post();
					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );

			?>
                <div class="container">
					<div class="row bg-custom">	
						<div class="col-md-4 col-xs-12 text-center about-copy-cell about-history-copy-block wow fadeInLeft">
							<?php the_title();?>
							 <div href="#" class="about-history-logo  bg-nc wow fadeInUp" style="background-image: url('<?php echo $featured_image[0]; ?>')"></div>
						</div>
						<div class="col-md-8 col-xs-12 desk wow fadeInLeft"><?php the_content();?></div>
						<div class="clear"></div>
					</div>
                </div>
                <div class="divider-s"></div>
                <?php
				 endwhile;
				 wp_reset_postdata();
				endif;?>

        </div>
    </div>
	</div>

    <!-- How we work end -->
  <?php get_template_part('enquire'); ?>
<?php get_footer(); ?>