<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="grid-container full" id="footerWrapper">
						<div class="grid-x align-center">
							<div class="large-10 small-11 medium-11 cell">
								<div class="grid-x grid-padding-x">
									<div class="large-4 small-12 medium-4 cell">
										<div class="copyrightWrapper">
											<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved</p>
											<p><a href="#">Disclaimer</a>|<a href="#">Terms of Use</a>|<a href="#">Privacy Policy</a></p>
										</div>
									</div>
									<div class="large-4 small-12 medium-4 cell">
										<div class="subscribeWrapper">
											<h6>KEEP CONNECTED</h6>
											
												<?php echo do_shortcode('[contact-form-7 id="5" title="Subscribe Form"]'); ?>
											
										</div>
									</div>
									<div class="large-4 small-12 medium-4 cell">
										<div class="footerSocial text-center">
											<?php if( get_field('facebook', 'option') ): ?>
												<a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<?php endif; ?>
												<?php if( get_field('twitter', 'option') ): ?>
												<a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
												<?php endif; ?>
												<?php if( get_field('youtube', 'option') ): ?>
												<a href="<?php the_field('youtube', 'option'); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
												<?php endif; ?>
												<?php if( get_field('instagram', 'option') ): ?>
												<a href="<?php the_field('instagram', 'option'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
												<?php endif; ?>
												<?php if( get_field('linkedin', 'option') ): ?>
												<a href="<?php the_field('linkedin', 'option'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
												<?php endif; ?>
												<?php if( get_field('pinterest', 'option') ): ?>
												<a href="<?php the_field('pinterest', 'option'); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>

		<script src="https://kit.fontawesome.com/e177bf7c08.js" crossorigin="anonymous"></script>
		
	</body>
	
</html> <!-- end page -->