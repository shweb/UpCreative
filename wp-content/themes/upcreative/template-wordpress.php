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
							<div class="image round fit" id="imagepage">
							<img src="<?php echo get_template_directory_uri(); ?>/img/i-wordpress.png"/>
							</div>
						</div>
						<div class="col-md-7 paragraphe">
							<h1 class="title-detailservice"><?php the_title(); ?></h1>
							<p class="text-service">WordPress is a powerful semantic publishing platform, and comes with a great set of features designed for all types of websites. Upcreatives gives you several advantages to create your corporate website via WordPress, as an optimized platform for SEO, simplicity of integration of a responsive design, a free CMS, open source and ever changing = Economy $$$ to share your experience and knowledge, a large community always ready to create new extensions, ease of use for a company and its flexibility, designs are possible, as the features are too.
								Our agency offers a multitude of possibilities to customize as you wish your website via Wordpress. Indeed, more than 29,000 plug-ins and 2,200 themes have already been created by the WordPress community. Thus we offer specialized themes in a specific sector of activity (for example: specific themes for catering already incorporating spaces for the menu or the menu of the day, schedules or requests for reservations ...). But it is also possible to integrate other features to each theme to push your personalization. This is why Upcreatives and many web professionals have adopted WordPress because it is based on PHP and they can create complex websites for your projects and businesses. It can be used for different types of sites, be it shop windows, e-commerce sites, forums, magazines, online directories, etc.
								WordPress sites are reputed to be the best referenced in search engines. While you will need to perform SEO actions to optimize the visibility of your website, but our team makes it easy for you by providing hundreds of extensions allowing you to do the right thing to rank well in Google. These tools are simple, no need for programming knowledge or HTML.
								One of the main criteria for the good SEO of your site is that it is "responsive". In other words, your site must be displayed correctly on all types of receivers (computer, mobile, tablet ...). The majority of topics proposed by Upcreatives, meets this criterion and incorporates the essential technologies. Your site is then favored by Google and your visibility increases.
								In short, the performance, free and accessible WordPress make it essential for the development of businesses and especially SMEs. This CMS will allow you to create but also to administer, modify, enrich your website and boost your visibility with your customers and prospects via the Web.
</p>
							<a href="<?php bloginfo('url'); ?>/services/"><button class="btn btn-primary btn-service btn-lg pull-left" id="buttonmargin" >Previous</button></a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php get_template_part('enquire'); ?>  	
	<?php get_footer(); ?>
