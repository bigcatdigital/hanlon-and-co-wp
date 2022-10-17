<?php include __DIR__ . '/php_includes/project_functions.php';
	get_header();
?> 
		<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
			<?php echo do_breadcrumbs(); ?>
		</nav>
		<main id="main-site-content" class="bc-inner-page">
			<section class="bc-container bc-inner-page__main-section">
				<div class="bc-content-component">
					<article class="bc-text-component">
						<?php while (have_posts()) {
							the_post() ; 
							the_content();?>
						<?php } ?>
					</article><!-- // .bc-text-component -->
				</div><!-- // .bc-content-component -->
			</section><!-- // . bc-inner-page__main-->			
		</main><!-- // #main-site-content -->

		<?php
			get_footer();
		?> 