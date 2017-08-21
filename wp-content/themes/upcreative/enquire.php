	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<?php if(ICL_LANGUAGE_CODE == 'en'): ?>
					<h1 class="modal-title">Contact us</h1>
					<?php else: ?>
					<h1 class="modal-title">联系我们</h1>
					<?php endif; ?>
					<h1 class="modal-title2">0086 15821835428</h1>
				</div>
				<div class="modal-body">
					<?php if(ICL_LANGUAGE_CODE == 'en'): ?>
					<?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]'); ?>	
					<?php else: ?>
					<?php echo do_shortcode('[contact-form-7 id="89" title="Contact form chinese"]'); ?>
					<?php endif; ?>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-md-12 ">
							<div class="col-md-3 col-lg-3 col-xs-6 col-sm-3">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="facebook"></a>
							</div>
							<div class="col-md-3  col-lg-3 col-xs-6 col-sm-3">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/goo.png" alt="google"></a>
							</div>
							<div class="col-md-3  col-lg-3 col-xs-6 col-sm-3">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/in.png" alt="inquare"></a>
							</div>
							<div class="col-md-3  col-lg-3 col-xs-6 col-sm-3">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.png" alt="tweeter"></a>
							</div>
						</div>
					</div>
				 </div>
			</div>
		</div>
	</div>
