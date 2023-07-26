<?php
	include __DIR__ . '/../php_includes/project_functions.php';
	/* Template Name: Privacy template */ 
	get_header();
?> 
		
		<main id="main-site-content" class="bc-inner-page bc-inner-page--simple" data-page-template="bc-inner-page-simple">
			<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
				<?php echo do_breadcrumbs(); ?>
			</nav>
			<section class="bc-container bc-inner-page__section bc-inner-page__main-section bc-has-border-rad-next">		
				<div class="bc-content-component">
					<article class="bc-text-component">
						<div class="bc-feature-header__col">
							<?php while (have_posts()) {
								the_post() ; ?>	
							<h1><?php the_title(); ?></h1>	
							<?php the_content();  
							}//end while have_posts() ?>
						<div><!-- // .bc-feature-header__col -->
							<form class="bc-privacy-form" name="bc-privacy-form" id="bc-privacy-form" action="" method="post">
								<script>
									let cookiesPreferences = document.cookie.split('; ').find((row) => {
										return row.startsWith('bc-cookies-preferences');
									});
									cookiesPreferences = (cookiesPreferences) ? cookiesPreferences.split('=')[1] : undefined ;
									let analyticsPrefs = document.cookie.split('; ').find((row) => {
										return row.startsWith('bc-ga-analytics');
									});
									analyticsPrefs = (analyticsPrefs) ? analyticsPrefs.split('=')[1] : undefined ;
									// let adsPrefs = document.cookie.split('; ').find((row) => {
									//  	return row.startsWith('bc-google-ad-storage');
									//  });
									// adsPrefs = (adsPrefs) ? adsPrefs.split('=')[1] : undefined ;
								</script>
								<div class="bc-privacy-form__section">
									<input disabled type="checkbox" checked name="functional-cookies"   />
									<label for="functional-cookies">Functional cookies</label>
								</div>
								<div class="bc-privacy-form__section">
									<input type="checkbox" name="google-analytics" id="google-analytics"  />
									<script>
										let gaCheckbox = document.querySelector('#google-analytics');
										if (analyticsPrefs === 'granted') {
											gaCheckbox.setAttribute('checked', 'true');
										}
									</script>
									<label for="google-analytics">Allow Google analytics</label>
								</div>
								<!-- <div class="bc-privacy-form__section">
									<input type="checkbox" name="google-ad-storage" id="google-ad-storage" />
									<script>
										console.log(adsPrefs);
										let gaAdsCheckbox = document.querySelector('#google-ad-storage');
										if (adsPrefs === 'denied') {
											gaAdsCheckbox.setAttribute('checked', 'true');
										}
									</script>
									<label for="google-analytics">Allow Google ad storage</label>
								</div> -->
								<input class="bc-button" type="submit" value="Submit preferences">
							</form>		
							<script>
								const privacyForm = document.querySelector('#bc-privacy-form');
								privacyForm.addEventListener('submit', (evt) => {
									evt.preventDefault();
									
									let expiryDate = new Date(Date.now() + (7 * 24 * 60 * 60 * 1000)).toUTCString();
									if (privacyForm['google-analytics'].checked) {
										
										bcFunctions.setCookie('bc-ga-analytics', 'granted', {
											expires: expiryDate
										});
										bcFunctions.setCookie('bc-cookies-preferences', 'submitted', {
											expires: expiryDate
										});
									} else {
										bcFunctions.setCookie('bc-ga-analytics', 'default', {
											expires: expiryDate
										});
										bcFunctions.setCookie('bc-cookies-preferences', 'submitted', {
											expires: expiryDate
										});
									}
									expiryDate = new Date(Date.now() + (28 * 24 * 60 * 60 * 1000)).toUTCString();
									/* Show confirmation */
									let $docBody = document.querySelector('body');
									$docBody.classList.add('bc-snack-bar-visible');
								});
							</script>
					</article><!-- // .bc-text-component -->
				</div><!-- // .bc-content-component -->
			</section><!-- // . bc-inner-page__main-->
		</main><!-- // #main-site-content -->
		<?php
			get_footer();
		?> 