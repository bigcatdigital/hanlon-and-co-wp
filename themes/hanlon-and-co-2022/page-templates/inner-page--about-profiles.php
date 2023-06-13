<?php
	/* Template Name: Profiles inner page template */ 
	include __DIR__ . '/../php_includes/project_functions.php';
	get_header();
?> 
		<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
			<?php echo do_breadcrumbs(); ?>
		</nav>
		<main id="main-site-content" class="bc-inner-page">
			<section class="bc-container bc-inner-page__section bc-profiles ">
				
				<article class="bc-content-component">
					<div class="bc-text-component">
					<?php while (have_posts()) {
						the_post() ; ?>	
					<h1><?php the_title(); ?></h1>	
					<?php the_content();  
					}//end while have_posts() 
					wp_reset_postdata(); ?>
					</div><!-- // .bc-text-component -->
				</article><!-- // .bc-content-component -->
				<div class="bc-content-component bc-profiles">
					<div class="bc-grid bc-match-height-wrap">
						<?php 
							$profile_posts = new WP_Query(array(
								'post_type' => 'staffprofile',
								'meta_key' => 'profile-sort-order',
								'orderby' => 'meta_value',
								'order' => 'ASC'
							));	
							if ($profile_posts->have_posts()) {
								while ($profile_posts->have_posts()) {
									$profile_posts->the_post(); 
									$profile_image = get_field('profile-photo'); ?>
						<article class="bc-card bc-profile-card bc-match-height">
							<div class="bc-card__body">
								<?php if ($profile_image['url'] && strcmp($profile_image['url'], '') !== 0) { ?>
								<img class="bc-card__media" src="<?php echo $profile_image['url'] ?>" alt="<?php echo $profile_image['alt'] ?>">
								<?php } //end if profile_image[url] ?>
								<h2 class="bc-card__heading"><?php the_title() ?></h2>
								<?php if (get_field('profile-title') && strcmp(get_field('profile-title'), '') !== 0) { ?>
								<p class="bc-profile__title"><?php the_field('profile-title') ?></p>
								<?php } // end if profile-title ?>
							</div>
							<div class="bc-card__link">
								<p><a href="<?php echo get_permalink(); ?>">Read more here</a></p>
							</div>
						</article><!-- // .bc-profile-card -->
						<?php }//end while profile_posts 
							}//end if profile_posts
							wp_reset_postdata(); ?>
					</div><!-- / .bc-grid -->	
				</div><!-- // .bc-profiles -->
			</section><!-- // .bc-inner-page__section -->
		</main><!-- // #main-site-content -->
		<div class="bc-section-hrs--reversed .bc-bg-shade-f0"></div><!-- // .bc-section-hrs -->
		<?php
			get_footer();
		?> 