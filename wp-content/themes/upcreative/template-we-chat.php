<?php /* Template Name: wechat Page Template */ ?>
<?php get_header(); ?>


    <div class="mainbar-spacer white"></div>
	
	<div class="bg-service">
		<div class="container">
			<div class="row service-content">
				<section>
					<div class="row">
						<div class="col-md-5">
							<div class="image round fit">
							<img src="<?php echo get_template_directory_uri(); ?>/img/i-wechat.png" >
							</div>
						</div>
						<div class="col-md-7">
						<h1 class="title-detailservice"><?php the_title(); ?></h1>
						<p class="text-service">We build custom WeChat accounts that are specific to each project allowing them to reach subscribers with in their mobile phones using Wechat open API. From WeChat plugin services,wechat h5 page to payment modules, we have vertical experience to lessen your implementation curve and challenge.</p>
							<a href="<?php  get_site_url; ?>services"><button class="btn btn-primary btn-service btn-lg pull-right">Previous</button></a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
		
<?php get_template_part('enquire'); ?>  		
	<?php get_footer(); ?>