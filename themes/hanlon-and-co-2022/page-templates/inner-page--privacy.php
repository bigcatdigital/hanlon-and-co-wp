<?php
	/* Template Name: Privacy inner page template */ 
	get_header();
?> 
		<main id="main-site-content" class="bc-inner-page">
			<section class="bc-container bc-inner-page__main-section">
				
				<div class="bc-content-component">
					<article class="bc-text-component">
					<h1>Your data on our website</h1>
						<p>Our site uses third-party cookies to store data about your visit, each of these is set by our use of Google Analytics (GA4) scripts. We use the information they create to find ways to better serve you each time you visit the site.</p>
						<p>These cookies will store information to:</p>
						<ul>
							<li>Distinguish you from other users</li>
							<li>Distinguish each visit to the site you and other users make to the site.</li>
						</ul>
						<p>We also use our own functional cookies so that the site works to your satisfaction. They help us remember some of your preferences when visiting, they are required so we don't allow visitors to disable them.</p>	
						<p>No personally identifiable data is stored about you.</p>	
						<div>
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
									expiryDate = new Date(Date.now() + (7 * 24 * 60 * 60 * 1000)).toUTCString();
									/* Show confirmation */
									let $docBody = document.querySelector('body');
									$docBody.classList.add('bc-snack-bar-visible');
									// if (privacyForm['google-ad-storage'].checked) {
										
									// 	bcFunctions.setCookie('bc-google-ad-storage', 'denied', {
									// 		expires: expiryDate
									// 	});
									// 	bcFunctions.setCookie('bc-cookies-preferences', 'submitted', {
									// 		expires: expiryDate
									// 	});
									// } else {
									// 	bcFunctions.setCookie('bc-google-ad-storage', 'granted', {
									// 		expires: expiryDate
									// 	});
									// 	bcFunctions.setCookie('bc-cookies-preferences', 'submitted', {
									// 		expires: expiryDate
									// 	});
									// }
								});
							</script>
						</div>
					</article><!-- // .bc-text-component -->
				</div><!-- // .bc-content-component -->
			</section><!-- // . bc-inner-page__main-->

		</main><!-- // #main-site-content -->
		<?php
			get_footer();
		?> 