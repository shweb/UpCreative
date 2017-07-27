<?php /* Template Name: Home Page Template */ ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="en-gb">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta http-equiv="expires" content="-1">
<title><?php wp_title(''); ?><?php if (wp_title('', false)){echo ' :';} ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/LOGO.png">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/font-animat.css" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/loading.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.scrollbar.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mediaqueries.css">
		<script async="" src="<?php echo get_template_directory_uri(); ?>/js/analytics.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-latest.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.placeholder.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollbar.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script>
    new WOW().init();
</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/popup.css">

<header>

	<div class="backg-upcreative cover" style="background-image: url(<?php the_field('background-image'); ?>)">&nbsp;</div>
		<!--background-upcreative-end-->
		
		<!--Move-upcreative-start-->
			<div id="move-top" class="move-bar clicker noselect">
				<div class="wrapper tcenter">
					<div class="move-img"><img src="<?php echo get_template_directory_uri(); ?>/img/flhaut.png" alt="Up arrow"></div>
					<div>
						<div class="move-horizontal move-title"><span><?php the_field('haut-title'); ?></span></div>
						<div class="move-horizontal move-copy"><span><?php the_field('haut-sous-title'); ?></span></div>
					</div>
				</div>
			</div>
			
		<div id="move-right" class="move-bar table clicker noselect">
				<div class="table-cell table-cell-m">
					<div>
						<div class="table-cell table-cell-m tleft move-upright">
							<div class="move-vertical move-title"><span><?php the_field('droite-title'); ?></span></div>
							<div class="move-horizontal move-copy"><span><?php the_field('droite-sous-title'); ?></span></div>
						</div>
						<div class="table-cell table-cell-m tright move-img"><img src="<?php echo get_template_directory_uri(); ?>/img/fldroit.png" alt="Right arrow"></div>
					</div>
				</div>
		</div>
			
		<div id="move-bottom" class="move-bar clicker noselect">
			<div class="wrapper tcenter">
				<div>
					<div class="move-horizontal move-title"><span><?php the_field('bas-title'); ?></span></div>
					<div class="move-horizontal move-copy"><span><?php the_field('bas-sous-title'); ?></span></div>
				</div>
				<div class="move-img"><img src="<?php echo get_template_directory_uri(); ?>/img/flbas.png" alt="Down arrow"></div>
			</div>
		</div>
			
		<div id="move-left" class="move-bar table clicker noselect">
			<div class="table-cell table-cell-m">
				<div>
					<div class="table-cell table-cell-m tleft move-img"><img src="<?php echo get_template_directory_uri(); ?>/img/flgauche.png" alt="Left arrow"></div>
					<div class="table-cell table-cell-m tright move-upright">
						<div class="move-vertical move-title"><span><?php the_field('gauche-title'); ?></span></div>
						<div class="move-horizontal move-copy"><span><?php the_field('gauche-sous-title'); ?></span></div>
					</div>
				</div>
			</div>
		</div>
        <?php get_template_part('enquire'); ?>
		<!--Move-upcreative-end-->
			
		<!--active-bar-start-->
				<div id="activate-top" class="activate-bar" ></div>
				<div id="activate-bottom" class="activate-bar" ></div>
				<div id="activate-left" class="activate-bar" ></div>
				<div id="activate-right" class="activate-bar" ></div>
				<div class="hero relative" >
		<!--active-bar-end-->
			
		<!--t-we are creative-start-->			
			<div class="navupcreat wrapper">
				<div class="relative">
					<a href="index.html" id="logo-home" class="wow fadeInLeft"></a>
						<div class="home-buttons wow fadeInRight">
							<div id="navicon"><span></span><span></span><span></span><span></span></div>
							<div class="top-search-w right cover" style="margin-right: 20px"></div>
							<?php if(ICL_LANGUAGE_CODE == 'en'): ?>
							<div class="swith right cover "> 中文</div>
							<?php else: ?>
							<div class="swith right cover "> English</div>
							<?php endif; ?>
						</div>
						
							<div class="upcreative">
								<h2 class="weUP wow fadeInLeft"><?php the_field('title'); ?></h2>
									<div class="wecraft">
										<h5 class="wecraft wow fadeInRight" ><?php the_field('sous-title'); ?></h5>
									</div>
							</div>
						</div>
		<!--we are creative-end-->	
			
		<!--home-bar-start-->	
					<div id="menumask" class="noselect">
						<div class="wrapper">
							<div class="ico-home">
								<div class="menu-bar-home">
									<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-home.png" class="left"></a>
								</div>
							</div>
						</div>
						
						<div class="menu-frame">
							<div class="menu-search tcenter">
								<form class="cbform" id="sform" name="sform" method="POST" novalidate="novalidate">
									<input type="text" name="explore" class="menu-search-input" placeholder="Search" autocomplete="off" autocapitalize="on" autocorrect="on">
										<div class="search">
											<button type="submit" class="search-button button-default button-w button-xl">Search</button>
											<img src="<?php echo get_template_directory_uri(); ?>/img/icon-close.png" class="menu-search-close clicker hidden">
										</div>
								</form>
							</div>
							
							 <?php html5blank_head_nav(); ?>	
						</div>
						
					</div>
				</div>
			</div>
			</header>
				<!--about-enquiere-start-->
			<div class="hero-bottom wrapper">
				<ul class="hero-list wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1.5s">
					<li><a href="<?php  get_site_url; ?>">ABOUT</a></li>
					<li><a href="<?php  get_site_url; ?>" class="sf-box" data-toggle="modal" data-target="#myModal">ENQUIRE</a></li>
				</ul>
			</div>
		</div>
		<!--about-enquiered-end-->
		
	</body>
</html>