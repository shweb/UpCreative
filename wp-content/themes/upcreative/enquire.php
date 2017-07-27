<div class="container" >
                <div class="modal fade hidden-xs" id="myModal" role="dialog" >
                    <div class="modal-dialog">
                        <div class="popup">
                            <div class="centerpopup">
                                <h1 style="margin-top: 0 ! important;color: white ! important;font-family: Sakkal Majalla ! important;padding-bottom: 5px ! important;font-size: 53px ! important;"
									>CONTACT US</h1>
							  <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
                                <h1>CONTACT US</h1>
							 <?php else: ?>
								 <h1>联系我们</h1>
							 <?php endif; ?>
                                <p class="num">0086 15821835428</p>
							 <?php if(ICL_LANGUAGE_CODE == 'en'): ?>
								<?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]'); ?>	
							 <?php else: ?>
								<?php echo do_shortcode('[contact-form-7 id="89" title="Contact form chinese"]'); ?>
							 <?php endif; ?>
							 
							<div class="social">
									<ul>
										 <a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="facebook"></li></a>
										 <a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/img/goo.png" alt="google"></li></a>
										 <a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/img/in.png" alt="inquare"></li></a>
										 <a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/img/tw.png" alt="tweeter"></li></a>
										
									</ul>
							</div>		
								<a class="close wow fadeInDown hidden-xs" data-dismiss="modal">&nbsp;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
