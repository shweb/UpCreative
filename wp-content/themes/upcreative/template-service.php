<?php /* Template Name: Service Page Template */ ?>
    <?php get_header(); ?>

        <?php
$loop = new WP_Query( array( 'post_type' => 'service', 'posts_per_page' => 3,'order' => 'ASC' ) );

$tmps = $loop->posts;
$i=0;
$array[]=0;

?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php 
			$id = get_the_id();
			$array[$i]=$id;
			$i=$i+1;
			//var_dump($id);
endwhile;  			
		?>
                    <div class="exp-section noselect">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
		if(max($array)==get_the_id()){
	?>
                            <div class="exp-col exp-fixed exp-mv bg-mv cover cover-bottom-right wow fadeInRight" rel="exp-mv" style="background-image: url(&quot;<?php the_field('image-field') ; ?>&quot;); width: 33.33%;max-height: 800px ! important;background-attachment:scroll;">
                             </br>
</br>
</br>    
                            <div class="exp-mask" style="display: none;"></div>
                               
                                <img class="exp-logo exp-logo-mv wow fadeInLeft" data-wow-delay="0.5s" src="<?php the_field('logo-field'); ?>">
                                <div class="exp-content" style="visibility: hidden; opacity: 0; margin-top: 80px;">
                                                        <div>
                                                            <a href="#" class="load-show"><img src="<?php the_field('logo-field'); ?>" style="width:275px ! important;"></a>
															<p style="text-align:justify"> <?php the_content(); ?></p>
															<a href="<?php  get_site_url; ?>wechat-development" class="pull-left"> <button type="button" class="btn btn-default" >Learn more</button></a></br>
                                                            <div class="clear"></div>
                                                        </div>

                                                    </div>
<?php } else if(min($array)==get_the_id()){ ?>

                                    <div class="exp-col exp-fixed exp-nc bg-nc  cover-top-right cover-bottom-left exp-col-border-r wow fadeInLeft" rel="exp-nc" style="background: url(&quot;<?php the_field('image-field') ; ?>&quot;) left; width: 33.33%;max-height: 800px ! important;background-attachment:scroll;">
                                       
</br>
</br>
</br>
                                        <div class="exp-mask" style="display: none;"></div>
                                        <img class="exp-logo exp-logo-mv wow fadeInLeft" data-wow-delay="0.5s" src="<?php the_field('logo-field'); ?>">
                                        <div class="exp-content" style="visibility: hidden; opacity: 0; margin-top: 80px;z-index:1">
                                                       
													   <div>
                                                            <a href="#" class="load-show"><img src="<?php the_field('logo-field'); ?>" style="width:275px ! important;"></a>
                                                            <p  style="text-align:justify"> <?php the_content(); ?>
                                                            <p  style="text-align:justify" id="text_details"></p>
                                                            <p id="learn_more1"  style="cursor:pointer; text-align:justify">
                                                                Learn more                                                                
                                                            </p></p>
															<a href="<?php  get_site_url; ?>wordpress-development" class="pull-left"> <button type="button" class="btn btn-default" >Wordpress</button></a></br>
                                                            <div class="clear"></div>
                                                            </br>
                                                            <a href="<?php  get_site_url; ?>laravel-development" class="pull-left" style="top:5px;"> <button type="button" class="btn btn-default" >Laravel</button></a></br>
                                                            
                                                        </div>

                                        </div>
<?php } else { ?>
                                            <div class="exp-col exp-fixed exp-cs bg-cs cover exp-col-border-r wow fadeInUp" rel="exp-cs" style="background: url(&quot;<?php the_field('image-field'); ?>&quot;) center no-repeat; background-size:cover;width: 33.33%;max-height: 800px ! important;background-attachment:scroll;">
                                                <div class="exp-mask" style="display: block;"></div>
                                                </br>
</br>
</br>
                                                <img class="exp-logo exp-logo-cs wow fadeInDown" data-wow-delay="0.5s" src="<?php the_field('logo-field'); ?>">
                                      
                                                <div class="exp-content" style=" opacity:; margin-top: 80px;">
                                                        <div>

                                                            <a href="#" class="load-show"><img src="<?php the_field('logo-field'); ?>" style="width:275px ! important;"></a>
															<p style="text-align:justify"> <?php the_content(); ?>
                                                                <p  style="text-align:justify" id="text_details2"></p>
                                                            <p id="learn_more2"  style="cursor:pointer; text-align:justify">
                                                                Learn more                                                                
                                                            </p></p>
                                                            </p>
                                                                 
                                                            
															<a href="<?php  get_site_url; ?>ios-development" class="pull-left"> <button type="button" class="btn btn-default" >IOs</button></a></br>
                                                            <div class="clear"></div>
                                                            </br>
                                                            <a href="<?php  get_site_url; ?>android-development" class="pull-left" style="top:5px;"> <button type="button" class="btn btn-default" >Android</button></a></br>
                                                            <div class="clear"></div>
                                                            </br>
                                                            <a href="<?php  get_site_url; ?>hybrid-development" class="pull-left" style="top:5px;"> <button type="button" class="btn btn-default" >Hybrid</button></a></br>

                                                            
                                                        </div>
                                                    </div>
                                                    <?php } ?>

                                            </div>

                                            <?php

endwhile;   
?>
                                    </div>
                                    <?php get_template_part('enquire'); ?>
                                        <?php get_footer(); ?>

                                        <script type="text/javascript">
                                           $('#learn_more1').click(function () {
                                               console.log($('#learn_more1').html().trim());
                                               if($('#learn_more1').html().trim() == 'Learn more'){
                                                    document.getElementById("text_details").innerHTML = '<div class="load-show style="color:white;textdecoration:none"><p id="para">Our team testing several CMS and WordPress appeared to us as the most complete and offers an ease of use to create a website for an SME and this, on the point of view of business owners as designers, designers and programmers. One of the major and major advantages for a corporate website made with WordPress is that it can perform extremely well in search engines, provided it is done right. WordPress will offer you more than you need.</p></p><p style="margin-left:3%">• Optimized platform for web referencing</br>• Simple integration of a responsive design</br>• A free, open source and evolving CMS = saving $$$</br>• A large community always ready to create new extensions</br>• Ease of use for a company and its flexibility</br>• All designs are possible, as are the features!</br></p><p style="margin-left:0px;">And the use of Laravel makes sure that the application built for your projects will be better structured and secure, thanks to components tested, approved and used by our team. These components form software bricks that allow the developer not to reinvent the wheel. One of the big advantages of using this framework is that it can serve for many projects for you, businesses. In addition, it contains components ready to use, which avoids making a website from scratch. Our team can therefore focus solely on the specific needs of the client. It no longer has to worry about the features present in almost all projects, such as securing forms, processing images, etc. Laravel offers the opportunity to work on several on the same project. This facilitates the collaboration and the realization of a project in group.The implementation of the latter is based on actions of a few days, the steps of which are as follows: An exploration phase determining the detailed descriptions and the customer analysis diagrams that will be provided during this action. Then we transform these descriptions into tasks to perform and functional test. This makes it possible to quickly deliver the first development versions so that the result corresponds to your expectations and that you are satisfied and allows you to appreciate the progress of the project from day to day. The overall quality of the development will be much better since the bases are solid and the successive developments. We make it available to you free of charge via an online application (Skype or other) to achieve the objectives of your descriptions and to take stock of the progress of your project.</br></p></div>';
                                                    $('#text_details').show();
                                                    $('#learn_more1').text('Hide').html();
                                                    return false;
                                               }else if($('#learn_more1').html().trim() == 'Hide'){
                                                    $('#text_details').hide() ;
                                                    $('#learn_more1').html('Learn more');
                                                    return false;
                                               }
                                           });

                                           $('#learn_more2').click(function () {
                                               console.log($('#learn_more2').html().trim());
                                               if($('#learn_more2').html().trim() == 'Learn more'){
                                                    document.getElementById("text_details2").innerHTML = '<p>Today, there is no longer any doubt about the importance of having a site accessible by mobile that is responsive or dedicated. The benefit of having a mobile app for a business is multiple, a mobile app can increase brand awareness or business, build customer loyalty, improve accessibility, send push notifications, build bridges between the digital and the physical. It also integrates phone features, relaxes consumers, allows easy opening and earns money. Having an app, although it is becoming more and more common, makes your company or brand a modern player and close to your consumer. Launching a mobile app is more about your brand than launching a new site. This is all the more true if the latter is innovative and uses connected objects for example. In addition it allows consumers to see your brand every day on the desk of his phone ... Because of this proximity, it makes it a very good tool for relationship marketing.</p><p>An iOS, Android or Hybrid application is therefore an important project in your digital communication strategy. And Upcreative will accompany you in the realization, the creation of this mobile application but also improvement services because it is a complementary tool to your site or your projects that allow you to establish direct relationships with users and your customers. In addition today the majority of smartphone users spend their time using mobile applications, why not create your own?</p>';
                                                    $('#text_details2').show();
                                                    $('#learn_more2').text('Hide').html();
                                                    return false;
                                               }else if($('#learn_more2').html().trim() == 'Hide'){
                                                    $('#text_details2').hide() ;
                                                    $('#learn_more2').html('Learn more');
                                                    return false;
                                               }
                                           });
                                           
                                                           
                                           
                                        </script>