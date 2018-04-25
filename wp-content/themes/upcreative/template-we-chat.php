<?php /* Template Name: wechat Page Template */ ?>
<?php get_header(); ?>


    <div class="mainbar-spacer white"></div>
	
	<div class="bg-service">
		<div class="container">
			<div class="row service-content">
				<section>
					<div class="row">
						<div class="col-md-5">
							<div class="image round fit" id="imagepage">
							<img src="<?php echo get_template_directory_uri(); ?>/img/i-wechat.png" >
							</div>
						</div>
						<div class="col-md-7 paragraphe">
						<h1 class="title-detailservice"><?php the_title(); ?></h1>
						<p class="text-service">First of all, WeChat is a free social media application developed by the Chinese company Tencent. It is a mobile instant messenger with multiple features and remains an essential social network for visibility on the Chinese web. Companies based in the United States, South Africa, Hong Kong, India, Indonesia, Macao, Malaysia, Taiwan and Thailand can use a WeChat account for business. Nowadays there are about 100 million international users.
WeChat offers you three types of business accounts: subscription accounts, service accounts and corporate accounts. These accounts all fall under the category of official accounts, which are available to celebrities, the media, government agencies and businesses. And corporate accounts are primarily intended for the management of the organization and are not of primary interest to marketers. They offer courier and business services, but are only available in mainland China. Once your account is approved, you get access to the official account administration platform, the console from which you can interact with WeChat users, WeChat marketing campaigns, tracking results. Companies can create an official account WeChat more or less extensive ("service" or "subscription") allowing them to communicate directly with their followers and share promotional content associated with their brands. WeChat also provides companies with a platform for grafting their own applications to WeChat. This model of "applications in the application" is much less expensive and complex than the development of native applications. Most importantly, it allows businesses to access and interact with the huge community of WeChat users. All this to say that WeChat is a new way to access the Chinese market, to set up shop selling its products and develop its own business.
Upcreatives offers you these services for the development and integration of this application for your business. And helps you reach a good audience, win new leads and target customers.

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