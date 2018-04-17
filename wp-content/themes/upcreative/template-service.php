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
															<h4> <?php the_content(); ?></h4>
															<a href="<?php  get_site_url; ?>wechat-development" class="pull-left"> <button type="button" class="btn btn-default" >Learn more</button></a></br>
                                                            <div class="clear"></div>
                                                        </div>

                                                    </div>
<?php } else if(min($array)==get_the_id()){ ?>

                                    <div class="exp-col exp-fixed exp-nc bg-nc  cover-top-right cover-bottom-left exp-col-border-r wow fadeInLeft" rel="exp-nc" style="background: url(&quot;<?php the_field('image-field') ; ?>&quot;) left; width: 33.33%;max-height: 800px ! important;background-attachment:scroll;">
                                        <div class="exp-mask" style="display: none;"></div>
</br>
</br>
</br>
                                        <img class="exp-logo exp-logo-mv wow fadeInLeft" data-wow-delay="0.5s" src="<?php the_field('logo-field'); ?>">
                                        <div class="exp-content" style="visibility: hidden; opacity: 0; margin-top: 80px;">
                                                       
													   <div>
                                                            <a href="#" class="load-show"><img src="<?php the_field('logo-field'); ?>" style="width:275px ! important;"></a>
                                                            <h4> <?php the_content(); ?></h4>
                                                            <div class="">
                                                           <p id="demo" onclick="myFunction()" style="cursor:pointer" >Learn more</p>

                                                            <script>
                                                            function myFunction() {
                                                                document.getElementById("demo").innerHTML = '<p class="load-show">Web programming, also known as web development, is the creation of dynamic web applications. There are many ways to develop it and we offer two of the most common solutions. Wordpress and Laravel.Upcreatives is specialized in the use of these two languages for your projects, and starts with an analysis, then the expression of your needs but more precisely the choice of a solution corresponding to your needs and your budget. To guarantee the quality of its code, our agency follows a methodology of development according to the norms. That is to say that your project will be carried out by rigorous and agile methods.</p>';
                                                            }
                                                            </script>
                                                            </div>
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
                                                <div class="exp-content" style="visibility: hidden; opacity: 0; margin-top: 80px;">
                                                        <div>

                                                            <a href="#" class="load-show"><img src="<?php the_field('logo-field'); ?>" style="width:275px ! important;"></a>
															<h4> <?php the_content(); ?></h4>
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