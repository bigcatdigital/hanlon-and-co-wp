<?php
	get_header();
?> 
		
		<main id="main-site-content" class="bc-inner-page">
			<section class="bc-container bc-inner-page__main-section">
				
				<article class="bc-content-component bc-inner-page-heading">
					<div class="bc-text-component "> 
						<div class="bc-feature-header__col">
							<h1>Looks like you&apos;re lost</h1>
							<p class="">That&apos;s ok, you can use the links below find what you're looking for</p>
							<?php 
							wp_nav_menu(array(
								'theme_location' => 'main-navigation'
							)); ?>
						</div><!-- // .bc-feature-header__col -->
					</div><!-- // .bc-feature-header -->
				</article>
				
			</section><!-- // . bc-inner-page__main-->
		</main><!-- // #main-site-content -->
		<?php
			get_footer();
		?> 