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
							<p class="text-service">We are constantly studing new technologies and recommend them when they make sense as the use of wordpress a powerful CMS used by 29% of the web sites in the word in 2017</p>
							<a href="<?php  get_site_url; ?>services"><button class="btn btn-primary btn-service btn-lg pull-right">Previouss</button></a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php get_template_part('enquire'); ?>  	
	<?php get_footer(); ?>
