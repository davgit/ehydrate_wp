<footer class="footer-padded-lg footer-style-gray" role="contentinfo">
	<div class="footer-one container">
		<div class="row">
			<div class="col-md-7">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="footer-list-t1-header">Navigate</h4>
						<ul class="footer-list-t1">
							<?php $homeId = get_option('page_on_front');?>
							<li><a title="<?php echo get_the_title($homeId); ?>" href="<?php echo get_permalink($homeId); ?>"><?php echo get_the_title($homeId); ?></a></li>
							<li><a title="Try For Free" href="http://shop.e-hydrate.com/product/e-hydrate-drink-mix-sample-pack/"><?php _e('Try For Free', 'sage');?></a></li>
							<!-- product-overview: -->
							<li><a title="<?php echo get_the_title(31); ?>" href="<?php echo get_permalink(31); ?>"><?php echo get_the_title(31); ?></a></li>
							<!-- contact-us: -->
							<li><a title="<?php echo get_the_title(56); ?>" href="<?php echo get_permalink(56); ?>"><?php echo get_the_title(56); ?></a></li>
							<!-- faq: -->
							<li><a title="<?php echo get_the_title(16); ?>" href="<?php echo get_permalink(16); ?>"><?php echo get_the_title(16); ?></a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<h4 class="footer-list-t1-header">Store Help</h4>
						<ul class="footer-list-t1">
							<li><a title="My Account" href="http://shop.e-hydrate.com/my-account/"><?php _e('My Account', 'sage');?></a></li>
							<li><a title="Shipping" href="http://shop.e-hydrate.com/shipping-returns/"><?php _e('Shipping', 'sage');?></a></li>
							<li><a title="Returns" href="http://shop.e-hydrate.com/shipping-returns/"><?php _e('Returns', 'sage');?></a></li>
							<!-- privacy-policy: -->
							<li><a title="<?php echo get_the_title(24); ?>" href="<?php echo get_permalink(24); ?>"><?php echo get_the_title(24); ?></a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<h4 class="footer-list-t1-header">Social</h4>
						<ul class="footer-list-t1">
							<li><a href="https://www.facebook.com/ehydrate" target="_blank"><i class="fa fa-facebook-square"></i>&nbsp;&nbsp;&nbsp;Facebook</a></li>
				            <li><a href="https://twitter.com/E_hydrate" target="_blank" class="link"><i class="fa fa-twitter-square"></i>&nbsp;&nbsp;&nbsp;Twitter</a></li>
				            <li><a href="https://instagram.com/ehydratenutrition/" target="_blank" class="link"><i class="fa fa-instagram"></i>&nbsp;&nbsp;&nbsp;Instagram</a></li>
				            <li><a href="https://www.pinterest.com/ehydrate/" target="_blank" class="link"><i class="fa fa-pinterest"></i>&nbsp;&nbsp;&nbsp;Pinterest</a></li>
				            <li><a href="https://www.youtube.com/channel/UCgPWBj7cdjj1v6-5UN0k_gg" target="_blank" class="link"><i class="fa fa-youtube"></i>&nbsp;&nbsp;&nbsp;YouTube</a></li>
						</ul>
					</div>
				</div>
			</div><!-- end col -->
			<div class="col-md-5">
				<div class="row">
					<div class="col-sm-12">
						<?php
						/* hide footer signup form for now.
						<div class="footer-signup">
							<h4 class="footer-signup-header">Sign Up for Special Offers</h4>
							<p class="footer-signup-subcopy">Stay up to date with the latest offers and promotions for E-hydrate products.</p>
							<form class="footer-signup-form form-inline" action="#" method="POST">
								<div class="form-group form-group-email">
									<label class="sr-only" for="footer-signup-form-input-email">Email address</label>
									<input type="email" class="form-control" id="footer-signup-form-input-email" placeholder="Enter Your Email Address">
								</div>
								<button type="submit" class="btn btn-white">Submit</button>
							</form>
						</div>
						*/
						?>
					</div>
				</div>
				<div class="footer-copyright">
					<p>Copyright <?php echo date('Y');?> &copy; E-hydrate</p>
				</div>
				<div class="footer-disclaimer">
					<p>Statements made on this website have not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure, or prevent any disease.</p>
				</div>
			</div>
		</div><!-- end .row -->
	</div><!-- end .footer-one -->
	<div class="footer-two container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="footer-payment-icons">
					<span class="pf pf-visa"></span>
					<span class="pf pf-american-express"></span>
					<span class="pf pf-mastercard"></span>
					<span class="pf pf-discover"></span>
					<span class="pf pf-jcb"></span>
				</div><!-- end .footer-payment-icons -->
			</div><!-- end col -->
		</div><!-- end .row -->
	</div><!-- end .footer-two -->
</footer><!-- end footer -->