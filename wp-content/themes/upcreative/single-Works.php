<?php  get_header();?>
<?php  while ( have_posts() ) : the_post();

    $args = array('post_type' => 'Works','post_status' => 'publish','order' => 'ASC');
    $works_loop = new WP_Query( $args );
	if ( $works_loop->have_posts() ){
		$works_loop = wp_list_pluck($works_loop->posts, 'ID');
	}
    $linl_work = array_search(get_the_ID(), $works_loop);
	if($linl_work > 0){
		$link_precedent = $works_loop[$linl_work-1];	
	}
    $link_suivant = $works_loop[$linl_work+1];	
    $_loop = get_link_works(array($link_precedent,$link_suivant));
	
	if(get_the_ID()== get_last_postype()){
		 $_loop[1] = $_loop[0] ;
	}

	
	$terms = get_the_terms(get_the_ID(),'project');
	$terms_links = wp_list_pluck($terms, 'name');
	$_yo = implode(',', (array)$terms_links);
	$_yo = isset($_yo)?$_yo:"ALL";
	$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	$work_image2 = MultiPostThumbnails::get_post_thumbnail_url('Works', 'secondary-image', NULL,'secondary-image-thumbnail');
	$work = get_post_custom(the_ID());
	$name = isset($work['name']{0})?$work['name']{0}:"";
	$services = isset($work['services']{0})?$work['services']{0}:"";
	$date = isset($work['date']{0})?$work['date']{0}:"";
	$link = isset($work['link']{0})?$work['link']{0}:"";
	$work_image3 = MultiPostThumbnails::get_post_thumbnail_url('Works', 'tertiary-image', NULL,  'secondary-image-thumbnail');
    $work_image4 = MultiPostThumbnails::get_post_thumbnail_url('Works', 'quaternary-image', NULL,  'secondary-image-thumbnail');
    $work_image5 = MultiPostThumbnails::get_post_thumbnail_url('Works', 'quinternary-image', NULL,  'secondary-image-thumbnail');


 ?>
<!-- banner start -->
    <div class="work-banner">
        <div class="container">
            <div class="row text-center title">
                <h1><?php the_title();?></h1>
            </div>
            <div class="row">
                <div class="Details col-md-12" style="background: url('<?php echo $featured_image[0]; ?>') no-repeat">
                    <div class="col-md-7">
                    </div>
                    <div class="col-md-5  wow animated fadeInRight animated hidden-sm hidden-xs">
                        <span class="screenshots" style="background-image: url('<?php echo $work_image2; ?>')"></span>
                    </div>
                </div>
            </div>
		</div>
    </div>
	<!-- banner end  -->
	
	<!-- next and previous start -->
    <div class="container next-prev">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo $_loop[0];?>" style="<?php echo isset($link_suivant)?'display:block':'display:none';?>" class="next">NEXT <i class="fa fa-angle-right"></i></a>
                <a href="<?php echo $_loop[1];?>" style="<?php echo isset($link_precedent)?'display:block':'display:none';?>" class="prev"><i class="fa fa-angle-left"></i> PREVIOUS</a>

            </div>
        </div>
    </div>
	<!-- next and previous start -->
	
	<!-- details kyligence start -->
    <div class="wrapper project-container">
        <div class="row">
            <div class="col-md-8">
                <img src="<?php echo $work_image3;?>" style="width:100%;" />
            </div>
            <div class="col-md-4">
                <h2><?php echo $name; ?></h2>
                <a href="#">
                    <button class="button-black">
                        <?php echo $_yo; ?>
                    </button>
                </a>
                <p class="description">
                    <?php the_excerpt();?>
				</p>
                <div class="resume">
                    <ul>
                        <li><strong>Services</strong> <?php echo $services ;?></li>
                        <li><strong>Date</strong> <?php echo $date ;?></li>
                        <li><strong>Link</strong> <a href="<?php echo $link ;?>"><?php echo $link ;?></a></li>
                    </ul>
                </div>

                <a href="https://<?php echo $link ;?>">
                    <button class="button ">
                        VISIT WEBSITE 
                    </button>
                </a>
            </div>
        </div>
    </div>
	<!-- details kyligence end -->
<?php endwhile; ?>
<?php get_template_part('enquire'); ?>	
  
<?php get_footer(); ?>
