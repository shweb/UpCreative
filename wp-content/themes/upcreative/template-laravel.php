<?php /* Template Name: laravel Page Template */ ?>
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
							<img src="<?php echo get_template_directory_uri(); ?>/img/i-laravel.png"/>
							</div>
						</div>
						<div class="col-md-7">
							<h1 class="title-detailservice"><?php the_title(); ?></h1>
							<p class="text-service" style="text-align:justify">Laravel is a very good framework when you need to quickly develop applications. And like many things in our services and tools, the choice of this framework is primarily based on the affinities you may have and for your projects. One of these key benefits is the speed with which you can create and develop a basic application, and this can be more useful than you think. Not to mention The learning curve (Laravel being designed to favor Rapid Application Development); the clarity of the code, the Façade principle is there partly for that; our agency established for your projects, companies the ease of maintenance, following the development principles of Laravel, we build different files with different methods.
In addition, a framework is simply a set of tools to facilitate the work of the developer allowing him to gain productivity. It constitutes a coherent basis and generally gathers the foundations of a computer software or a web application. In the case of PHP, the frameworks include a set of basic functions found on most PHP applications. This is the case, for example, of the authentication system, error management or the management of rights (administrators, editors, visitors, etc.). Upcreatives offers you a very complete and very powerful framework for your projects. He has the distinction of being more permissive and more flexible than his colleague Symfony. The fact that it is very easy to access with its complete documentation and active community makes Laravel very attractive when choosing a Framework. Once taken in hand, it becomes complicated to get rid of it.
</p>
							<a href="<?php bloginfo('url'); ?>/services/"><button class="btn btn-primary btn-service btn-lg pull-right">Previous</button></a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php get_template_part('enquire'); ?>  	
	<?php get_footer(); ?>
