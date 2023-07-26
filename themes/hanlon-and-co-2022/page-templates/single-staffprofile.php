<?php
	include __DIR__ . '/php_includes/project_functions.php';	
	get_header();
?> 
		<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
			<?php echo do_breadcrumbs(); ?>
		</nav>
		<main id="main-site-content" class="bc-inner-page">
			<section class="bc-container bc-inner-page__section">
				<article class="bc-text-component">
					<h1>	<?php the_title() ;?></h1>
					<?php if (get_field('profile-photo')) { 
						$profile_photo = get_field('profile-photo') ?>
					<div class="bc-profile-detail__intro">
						<img class="bc-profile-detail__intro__image" src="<?php echo $profile_photo['url'] ?>" alt="<?php echo $profile_photo['alt'] ?>">
						<div class="bc-profile-detail__intro__text">
							<?php if (get_field('profile-short-about')) { ?>
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#quote-left-serif"></use>
							</svg>
							<p class="">"<?php the_field('profile-short-about') ?>"</p>
							<?php } ?>
						</div>
					</div>	
					<?php } // end if profile-photo ?>
					<?php the_field('profile-about'); ?>
					<?php if (get_field('profile-video')) { ?>
					<div class="bc-object-embed bc-media-embed--placeholder">
						<?php the_field('profile-video') ; ?>
					</div>
					<?php } //end if profile-video ?>
				</article><!-- // .bc-text-component -->
			</section><!-- // . bc-inner-page__main-->
			
		</main><!-- // #main-site-content -->
		<div class="bc-section-hrs--reversed .bc-bg-shade-f0"></div><!-- // .bc-section-hrs -->
		<?php
			get_footer();
		?> 