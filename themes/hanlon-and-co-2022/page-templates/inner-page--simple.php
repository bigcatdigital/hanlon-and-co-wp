<?php
	/* Template Name: Simple inner page template */ 
	include __DIR__ . '/../php_includes/project_functions.php';
	get_header();
?> 
		<main id="main-site-content" class="bc-inner-page bc-inner-page--simple" data-page-template="bc-inner-page-simple">
			<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
				<?php echo do_breadcrumbs(); ?>
			</nav>
			<section class="bc-container bc-inner-page__section bc-profiles bc-inner-page__main-section bc-has-border-rad-next ">
				<article class="bc-content-component">
					<div class="bc-text-component "> 
						<div class="bc-feature-header__col">
						<?php while (have_posts()) {
								the_post() ; ?>	
							<h1><?php the_title(); ?></h1>	
							<?php the_content();  
							}//end while have_posts() 
							wp_reset_postdata(); ?>
						</div><!-- // .bc-feature-header__col -->
					</div><!-- // .bc-text-component -->
				</article><!-- // .bc-inner-page-heading -->
				
				
			</section><!-- // .bc-inner-page__section -->
		</main><!-- // #main-site-content -->
		<div class="bc-section-hrs--reversed .bc-bg-shade-f0"></div><!-- // .bc-section-hrs -->
		<?php
			get_footer();
		?> 