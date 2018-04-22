<?php /* Template Name: Home Page Template */ ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="en-gb">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="expires" content="-1">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)){echo '';} ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/Favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-animat.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/main.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/popup.css">
    <script async="" src="<?php echo get_template_directory_uri(); ?>/js/analytics.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-latest.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    <script>
        new WOW().init();
    </script>

    <body style="width: 100%;height: 100%;">

        <header id="nav">
            <!--header nav start -->
            <div class="hero relative" style="height: 791px;">
                <div class="hero-img cover" style="background-image: url(<?php the_field('background-image');?>); height: 821px; width: 1630px; top: -15px; left: -15px;"></div>

                <div class="container spacer-top" style="z-index:2;">
                    <a href="<?php echo home_url(); ?>" id="logo-home" class="wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInLeft;"></a>

                    <div class="home-buttons wow fadeInRight" data-wow-delay="0s" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0s; animation-name: fadeInRight;">
                        <div id="navicon" class=""><span></span><span></span><span></span><span></span></div>
                        <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                            <a href="<?php echo get_site_url();?>/zh">
                                 <!-- <div class="swith right cover "> 中文 </div> -->
                            </a>
                            <?php else: ?>
                                <a href="<?php echo get_site_url();?>/">
                                    <div class="swith right cover "> English </div>
                                </a>
                                <?php endif; ?>
                                    <div class="top-search-w right cover"></div>
                    </div>

                    <div class="space"></div>
					
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-xs-1"></div>
							<div class="col-md-6 col-xs-10 text-center-md absolute">
								<div class=" upcreative" style="text-align: center;">
									<h1 class="title1" style="color:white;"><?php the_field('title'); ?></h1>
									<h3 class="title2" style="color:white;"><?php the_field('sous-title'); ?></h3>
								</div>
							</div>
							<div class="col-md-3 col-xs-1"></div>
						</div>
                    </div>

                    <div id="menumask" class="noselect" style="display: none;">
                        <div class="container">
                            <div class="relative">
                                <div class="menu-bar-home">
                                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-home.png" class="left"  width="32"></a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-frame">
                            <div class="menu-search tcenter" style="display: none;">
                                <form class="cbform" id="sform" name="sform" method="GET" novalidate="novalidate" action="<?php echo home_url(); ?>">
                                    <input type="text" name="s" class="menu-search-input" placeholder="Search" autocomplete="off" autocapitalize="on" autocorrect="on">
                                    <div class="menu-search-box">
                                        <button type="submit" class="menu-search-button button-default button-w button-xl">Search</button>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-close.png" class="menu-search-close clicker hidden" alt="" width="40">
                                    </div>
                                </form>
                                <div class="search-results container"></div>
                            </div>
                            <?php html5blank_head_nav(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header nav end -->

        <?php get_template_part('enquire'); ?>

            <!-- section move start -->
			<div class="container">
				<section id="movebar">
					<div id="move-top" class="move-bar clicker noselect" style="top: -222px;">
						<div class="container tcenter">
							<div class="move-img"><img src="<?php echo get_template_directory_uri(); ?>/img/flhaut.png"></div>
							<div>
								<div class="move-horizontal move-title">
								<span>
									<a class="slide" href="" data-toggle="modal" data-target="#myModal">
										<?php the_field('haut-title'); ?>
									</a>
								</span>
								</div>
							</div>
						</div>
					</div>

					<div id="move-bottom" class="move-bar clicker noselect" style="bottom: -245px;">
						<div class="container tcenter">
							<div>
								<div class="move-horizontal move-title"><span><a class="slide" href="<?php  get_site_url; ?>about-us"><?php the_field('gauche-title'); ?></a></span></div>
							</div>
							<div class="move-img"><img src="<?php echo get_template_directory_uri(); ?>/img/flbas.png" alt="Down arrow"></div>
						</div>
					</div>
					
					
					

					<div id="move-right" class="move-bar table clicker noselect" style="right: -330px;">
						<div class="table-cell table-cell-m">
							<div class="table-cell table-cell-m tleft move-upright">
								<div class="move-vertical move-title"><span><a class="slide" href="<?php  get_site_url; ?>work"><?php the_field('droite-title'); ?></a></span></div>

							</div>
							<div class="table-cell table-cell-m tright move-img"><img src="<?php echo get_template_directory_uri(); ?>/img/fldroit.png"></div>
						</div>
					</div>
					
					<div id="move-left" class="move-bar table clicker noselect" style="right: -330px;">
						<div class="table-cell table-cell-m">
						<div class="table-cell table-cell-m tright move-img"><img src="<?php echo get_template_directory_uri(); ?>/img/flgauche.png"></div>
							<div class="table-cell table-cell-m tleft move-upleft">
								<div class="move-vertical move-title"><span><a class="slide" href="<?php  get_site_url; ?>services"><?php the_field('bas-title'); ?></a></span></div>
							</div>
							
						</div>
					</div>
					
					
				
					<div id="activate-top" class="activate-bar "></div>
					<div id="activate-bottom" class="activate-bar"></div>
					<div id="activate-left" class="activate-bar"></div>
					<div id="activate-right" class="activate-bar"></div>
								
				</section>
			</div>

    <!--section footer start -->
		<section id="footer">
			<div class="container footer ">
				<div class="row">
					<div class="col-md-6">
						<ul class="hero-list wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s;margin:0px; animation-delay: 0s; animation-name: fadeInLeft;width:200px">
							<li ><a href="<?php  get_site_url; ?>about-us">ABOUT</a></li>
							<li style="margin-left:auto;"><a href="<?php  get_site_url; ?>"  class="sf-box" data-toggle="modal" data-target="#myModal">ENQUIRE</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<p><a href="#" class="pull-right wow fadeInRight"><img class="qrcode" src="<?php echo get_template_directory_uri(); ?>/img/qrcodeupcreative.png" ></a>
						<p>
					</div>
				</div>
			</div>
		</section>
    <!-- section footer end -->
    </body>

    </html>