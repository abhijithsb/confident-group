<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<div class="grid-container full" id="projectBannerRow">
		<div class="grid-x">
			<div class="large-12 small-12 medium-12 cell">
				<div class="bannerWrapper">
					<?php $banner =  get_field('banner');?>
					<img src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt'] ?>" />
					<div class="bannerText">
						<h3><?php the_field('banner_text'); ?> </h3>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="grid-container full show-for-large" id="projectNavigations" data-sticky-container>
		<div class="grid-x align-center sticky projectNavWrapper" data-sticky data-top-anchor="projectNavigations:top" >
			<div class="large-10 small-11 medium-11 cell">
				<div class="grid-x">
					<div class="large-10 small-12 medium-12 cell">
						<div class="projectNavButtons">
							<ul>
								<li>
									<a href="#projectOverview">Overview</a>
								</li>
								<li>
									<a href="#gallery">Gallery</a>
								</li>
								<li>
									<a href="#locality">Locality</a>
								</li>
								<li>
									<a href="#amenities">Amenities</a>
								</li>
								<li>
									<a href="#amenities">Floor Plan</a>
								</li>
								
								<li>
									<a href="#approvals">Project Approvals</a>
								</li>
								<li>
									<a href="#projectStatus">Project Updates</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="large-2 small-12 medium-12 cell">
						<div class="addToWishlist">
							<span><i class="far fa-heart wishIcon"></i></span>
								<span>Add to Wishlist</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="grid-container full" id="projectDetailsRow">
		<div class="grid-x align-center">
			<div class="large-10 small-11 medium-11 cell">
				<div class="grid-x grid-padding-x">
					<div class="large-8 small-12 medium-12 cell">
						<div class="grid-x" id="projectOverview">
							<div class="large-6 small-12 medium-12 cell projectTitleWrapper">
								<h3><?php the_title(); ?></h3>
								<p><i class="fas fa-map-marker-alt"></i>&nbsp;<?php the_field('project_location'); ?></p>
							</div>
							<div class="large-6 small-12 medium-12 cell priceWrapper">
								<h4><i class="fas fa-tag"></i>&nbsp;<?php the_field('project_price'); ?></h4>
							</div>
							<div class="large-12 small-12 medium-12 cell">
								<div class="projectStatus">
									<?php $projectstatus = get_the_terms( $post->ID , 'projects-category' );
										 if ( $projectstatus != null ){
										 foreach( $projectstatus as $status ) {?>
									<span><?php  print $status->name ; ?></span>
									<?php unset($status);
									} } ?>
								</div>
							</div>
							<div class="large-4 small-12 medium-12 cell quickDetailsWrapper">
								<div class="quickIcon">
									<img src="/wp-content/uploads/2020/07/super-area-icon.png" alt="">
								</div>
								<div class="quickDetails">
									<p>Super Area</p>
									<h5><?php the_field('project_area'); ?></h5>
								</div>
							</div>
							<div class="large-4 small-12 medium-12 cell quickDetailsWrapper">
								<div class="quickIcon">
									<img src="/wp-content/uploads/2020/07/configurations-icon.jpg" alt="">
								</div>
								<div class="quickDetails">
									<p>Configurations</p>
									<h5><?php the_field('project_apartment_type'); ?></h5>
								</div>
							</div>
							<div class="large-4 small-12 medium-12 cell quickDetailsWrapper">
								<div class="quickIcon">
									<img src="/wp-content/uploads/2020/07/car-parking-icon.jpg" alt="">
								</div>
								<div class="quickDetails">
									<p>Car Parking</p>
									<h5><?php the_field('project_car_parking_slot'); ?></h5>
								</div>
							</div>
						</div>
						<?php if( have_rows('locality_list') ): ?>
						<div class="grid-x" id="locality">
							<div class="localityWrapper large-12 small-12 medium-12 cell">
								<h5>LOCALITY</h5>
								<ul>
									<?php while( have_rows('locality_list') ): the_row(); 
									    $locality_single_list = get_sub_field('locality_single_list');
									?>
									<li><span></span><?php echo $locality_single_list; ?></li>
								<?php endwhile; ?>
								</ul>
							</div>
						</div>
						<?php endif; ?>
						<div class="grid-x" id="gallery">
							<div class="large-12 small-12 medium-12 cell galleryWrapper">
								<h5>Gallery</h5>
								<?php the_field('gallery_box'); ?>
							</div>
						</div>
						<?php if( get_field('brochure_link') ): ?>
						<div class="grid-x" id="brochure">
							<div class="large-7 small-12 medium-12 cell brochuireContentWrapper">
								<p>All Project Informations in just on click<br>Refer the Brochure</p>
							</div>
							<div class="large-5 small-12 medium-12 cell brcohireBtnWrapper">
								<a href="<?php the_field('brochure_link'); ?>" class="brochuredwnldbtn">Download Brochure <i class="fas fa-arrow-circle-down"></i></a>
							</div>
						</div>
						<?php endif; ?>
						<?php if( have_rows('amenity_list') ): ?>
						<div class="grid-x" id="amenities">
							<div class="large-12 small-12 medium-12 cell">
								<h5>Amenities</h5>
								<div class="grid-x grid-padding-x large-up-5 small-up-2 medium-up-3 amenityWrapper">
									<?php while( have_rows('amenity_list') ): the_row(); 
									    $amenity_icon = get_sub_field('amenity_icon');
									    $amenity_title = get_sub_field('amenity_title');
									?>
									<div class="cell singleAmenity">
										<img src="<?php echo $amenity_icon['url']; ?>" alt="<?php echo $amenity_icon['alt'] ?>" />
										<p><?php echo $amenity_title; ?></p>
									</div>
									<?php endwhile; ?>

								</div>
							</div>
						</div>
						<?php endif; ?>
						<?php if( get_field('floor_plan_') ): ?>
						<div class="grid-x" id="floorplan">
							<div class="large-12 small-12 medium-12 cell floorplanWrapper">
								<h5>Floor Plan</h5>
								<?php the_field('floor_plan_'); ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if( have_rows('approval_lists') ): ?>
						<div class="grid-x" id="approvals">
							<div class="large-12 small-12 medium-12 cell approvalsWrapper">
								<h5>Statutory Approvals</h5>
								<ul>
									<?php while( have_rows('approval_lists') ): the_row(); 
									    $approvals_title = get_sub_field('approvals_title');
									    $approval_content = get_sub_field('approval_content');
									?>
									<li>
										<h6><?php echo $approvals_title; ?></h6>
										<p><?php echo $approval_content; ?></p>
									</li>
									<?php endwhile; ?>
								</ul>
								<div class="readoretag">
									<a href="#" class="viewAllbtn">View All</a>
								</div>
							</div>
						</div>
						<?php endif; ?>
						<div class="grid-x" id="projectStatus">
							<div class="large-12 small-12 medium-12 cell projectStatusWrapper">
								<h5>
									PROJECT STATUS
								</h5>
								<p>Updated 15 Days ago</p>
								<div class="statusBox">
									<p><?php the_field('construction_status_content'); ?></p>
									<?php the_field('construct_status_block'); ?>
								</div>
								<div class="readoretag">
									<a href="#" class="viewAllbtn">View All</a>
								</div>
							</div>
						</div>
					</div>
					<!-- project details div ends -->
					<div class="large-4 small-12 medium-12 cell">
						<div class="projectEnquireFormWrapper">
							<div class="formTitle">
								<h4>ENQUIRE NOW</h4>
								<p>Realize Your Dream Home With Confident Group</p>
							</div>
							<div class="formBox">
								<?php echo do_shortcode('[contact-form-7 id="57" title="Project Enquire Form"]'); ?>
							</div>
						</div>
					</div>
					<!-- contact form div -->
				</div>
			</div>
		</div>
	</div>
													
</article> <!-- end article -->