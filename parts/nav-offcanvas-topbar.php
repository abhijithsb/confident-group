<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="grid-container full show-for-large" id="topBar">
	<div class="grid-x align-center">
		<div class="large-10 small-11 medium-11 cell">
			<div class="addressHeader grid-x">
				<div class="large-6 small-12 medium-12 cell">
					<div class="headerAddress">
						<div class="mailId">
							<a href="mailto:<?php the_field('official_email_address', 'option'); ?>"><i class="fas fa-envelope"></i><?php the_field('official_email_address', 'option'); ?></a>
						</div>
						<div class="offclPhone">
							<a href="tel:<?php the_field('official_phone', 'option'); ?>"><i class="fas fa-phone-alt"></i><?php the_field('official_phone', 'option'); ?></a>
						</div>
					</div>
				</div>
				<div class="large-6 small-12 medium-12 cell">
					<div class="headerSocial">
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
<div class="grid-container full" id="headerRow">
	<div class="grid-x align-center">
		<div class="large-10 small-11 medium-11 cell">
			<div class="grid-x">
				<div class="large-2 small-6 medium-6 cell">
					<div class="logoDiv">
						<?php $themeLogo = get_field('theme_logo', 'option');  ?>
						<a href="<?php echo home_url(); ?>"><img src="<?php echo $themeLogo['url']; ?>" alt="<?php echo $themeLogo['alt'] ?>" /></a>
					</div>
				</div>
				<div class="large-10 small-6 medium-6 cell show-for-large">
					<div class="webmenuWrapper">
						<?php joints_top_nav(); ?>	
					</div>
					<!-- <div class="wishListCounter">
						<a href=""><i class="far fa-heart heartblank"></i><i class="fas fa-heart heartfill"></i></a>
					</div> -->
				</div>
				<div class="small-6 medium-6 cell text-right hide-for-large">
					<a data-toggle="off-canvas"><img src="/wp-content/uploads/2020/07/icons8-menu-64.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</div>