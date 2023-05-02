<?php
	include __DIR__ . '/php_includes/project_functions.php';	
	get_header();
?> 
		<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
			<?php echo do_breadcrumbs(); ?>
		</nav>
		<main id="main-site-content" class="bc-inner-page">
			<section class="bc-container bc-inner-page__section">
				<article class="bc-content-component bc-inner-page-heading">
					<div class="bc-text-component "> 
						<div class="bc-feature-header__col">
							<?php the_title() ?>
						</div><!-- // .bc-feature-header__col -->
					</div><!-- // .bc-feature-header -->
				</article>
			</section><!-- // . bc-inner-page__main-->
			
		</main><!-- // #main-site-content -->
		<div class="bc-section-hrs--reversed .bc-bg-shade-f0"></div><!-- // .bc-section-hrs -->
		<?php
			get_footer();
		?> 