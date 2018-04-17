<?php /* Template Name: workk Page Template */ get_header(); ?>

<div class="mainbar-spacer white"></div>
<div class="works-bg" >
<div class="wrapper-s ">
        <div class="dividerupc"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="work-border text-center">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>
				
                <div class="col-xs-push-0 col-md-push-1 col-sm-push-0 col-md-6">
                     <div class="intro">
						<p style="visibility: hidden; opacity: 0;text-align:justify"><?php the_content(); ?></p>
					 
					 </div>
                </div>
		
            </div>
        </div>
</div>
	
<div class="wrapper">
    <div class="grid">
		<?php
		$args = array('post_type' => 'Works','post_status' => 'publish','order' => 'ASC');
        $works_loop = new WP_Query( $args );		
		if ( $works_loop->have_posts() ) :
            while ( $works_loop->have_posts() ) : $works_loop->the_post();
			$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$work_image2 = MultiPostThumbnails::get_post_thumbnail_url('Works', 'secondary-image', NULL,'secondary-image-thumbnail');
			?>	
			
            <div class="projects mmb work-banner" style="background-image: url('<?php echo $featured_image[0]; ?>')">
                <div class="col-md-5">
                    <h4 class="name"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                </div>
                <div class="col-md-5 hidden-xs wow animated fadeInRight animated work-banner" style="z-index:3;">
                    <span class="screenshots" style="background-image: url('<?php echo $work_image2; ?>')"></span>
                </div>
            </div>
		<?php
         endwhile;
         wp_reset_postdata();
        endif;?>
    </div>
    </div>
 </div>
</div>
</div>	
<?php get_template_part('enquire'); ?> 
<?php get_footer(); ?>

