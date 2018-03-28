<?php /* Template Name: wordpress Page Template */ ?>
<?php get_header(); ?>
	
    <!-- section about upcreative start -->
    <div class="mainbar-spacer white"></div>
	
	<div class="bg-service">
		<div class="container">
			<div class="row service-content">
				<section>
					<div class="row">
						<div class="col-md-5">
							<div class="image round fit">
							<img src="<?php echo get_template_directory_uri(); ?>/img/i-wordpress.png"/>
							</div>
						</div>
						<div class="col-md-7">
							<h1 class="title-detailservice"><?php the_title(); ?></h1>
							<p class="text-service">WordPress is a powerful semantic publishing platform, and comes with a great set of features designed for all types of websites. We are proud to offer you this CMS to share your experience and your knowledge with thousands of Internet users.</p>
							<a href="<?php bloginfo('url'); ?>/services/"><button class="btn btn-primary btn-service btn-lg pull-right">Previous</button></a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php get_template_part('enquire'); ?>  	
	<?php get_footer(); ?>
