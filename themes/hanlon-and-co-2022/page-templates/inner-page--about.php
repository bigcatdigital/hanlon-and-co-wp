<?php
	/* Template Name: Profiles inner page template */ 
	get_header();
?> 
		<main id="main-site-content" class="bc-inner-page">
			<section class="bc-container bc-inner-page__main-section">
				<?php if (get_field('page-leader')) { 
						$page_leader = get_field('page-leader'); ?>
					<article class="bc-content-component bc-inner-page-heading">
						<div class="bc-text-component "> 
							<div class="bc-feature-header__col">
								<p class="bc-content-label"><?php echo get_the_title(); ?></p>
								<h1 class="bc-inner-page-heading__heading">
									<?php echo $page_leader['leader-title'] ?>
								</h1>
								<?php if ($page_leader['leader-text']) { ?>
								<p class="bc-intro-paragraph"><?php echo $page_leader['leader-text'] ?></p>
								<?php } //get leader-text ?>
							</div><!-- // .bc-feature-header__col -->
						</div><!-- // .bc-feature-header -->
					</article>
					<?php if ($page_leader['leader-image']) {
						$leader_image = $page_leader['leader-image']; ?>
					<div class="bc-content-component--media-padded bc-inner-page__feature-image">
						<div class="bc-object-embed bc-media-embed--placeholder">
							<img src="<?php echo $leader_image['url'] ?>" alt="<?php echo $leader_image['alt'] ?>">
						</div>
					</div>
					<?php } //end if $page_leader['leader_image'] ?>
					<?php } // end if get page-leader ?>
					<?php if (get_field('page-content#1')) { ?>
					<div class="bc-content-component">
						<article class="bc-text-component">
							<?php echo get_field('page-content#1'); ?>
						</article><!-- // .bc-text-component -->
					</div><!-- // .bc-content-component -->
					<?php } ?> 
					<?php if (get_field('feature-video-embed')) { ?>
					<div class="bc-content-component--media-padded bc-inner-page__feature-image">
						<div class="bc-object-embed bc-media-embed--placeholder">
						<?php the_field('feature-video-embed'); ?>
						</div>
					</div>
					<?php } ?>
					<?php if (get_field('lawyer-photo')) { 
						$lawyer_photo = get_field('lawyer-photo');
						?>
					<div class="bc-content-component--text bc-inner-page__feature-image">
						<div class="bc-text-component">
							<div class="bc-object-embed bc-media-embed--placeholder">
									<img src="<?php echo $lawyer_photo['url'] ?>" alt="<?php echo $lawyer_photo['alt'] ?>" />
							</div>
							<?php if (get_field('lawyer-link')) {  
								$lawyer_link = get_field('lawyer-link');
								?>
							<div class="bc-inner-page__feature-image__caption">
								<a href="<?php echo $lawyer_link['url'] ?>"><?php echo $lawyer_link['title'] ?></a>
							</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</section><!-- // . bc-inner-page__main-->

			<section class="bc-container bc-inner-page__section bc-profiles">
				<?php if (get_field('staff-profiles-leader')) { ?>
					<div class="bc-content-component">
						<article class="bc-text-component">
							<?php echo get_field('staff-profiles-leader'); ?>
						</article><!-- // .bc-text-component -->
					</div><!-- // .bc-content-component -->
				<?php } ?> 
				<div class="bc-content-component ">
					<div class="bc-grid">
						<?php 
							$profile_posts = new WP_Query(array(
								'post_type' => 'staffprofile'
							));	
							if ($profile_posts->have_posts()) {
								while ($profile_posts->have_posts()) {
									$profile_posts->the_post(); 
									$profile_image = get_field('profile-photo');
									?>
						<article class="bc-card bc-profile-card">
							<div class="bc-card__body">
								<img class="bc-card__media" src="<?php echo $profile_image['url'] ?>" alt="<?php echo $profile_image['alt'] ?>">
							<h2 class="bc-card__heading"><?php the_title() ?></h2>
							<p class="bc-profile__title"><?php the_field('profile-title') ?></p>
							</div>
							<div class="bc-card__link">
								<p><a href="<?php the_permalink(); ?>">Read more about Graham</a></p>
							</div>
						</article><!-- // .bc-profile-card -->
						<?php }//end while profile_posts 
							}//end if profile_posts
							wp_reset_postdata(); ?>
					</div><!-- / .bc-grid -->	
				</div><!-- // .bc-profiles -->
			</section><!-- // .bc-inner-page__section -->
		</main><!-- // #main-site-content -->
		<?php
			get_footer();
		?> 