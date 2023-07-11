<?php $contact_post = new WP_Query(array(
		'post_type' => 'contactinfo',
		'numberposts' => 1
	));	 
	if ($contact_post->have_posts()) {
		while ($contact_post->have_posts()) {
			$contact_post->the_post();  
			?>
	<div class="bc-has-border-rad__wrap bc-has-border-rad__wrap--footer">
		<footer id="contact-us" class="bc-container bc-has-ampersand bc-site-footer">
			<script>
				const $footerEl = document.querySelector('.bc-site-footer');
				const $mainContentEl = document.querySelector('#main-site-content');
				if (typeof $mainContentEl.dataset.pageTemplate !== undefined) {
					$footerEl.classList.add($mainContentEl.dataset.pageTemplate);
				}
			</script>
			<svg id="ampersand-disc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
				<title>Hanlon and Co logo mark</title>
				<circle id="disk" class="cls-1" cx="50" cy="50" r="50"/>
				<path id="ampersand" class="cls-2" d="M79,35.52a8.58,8.58,0,0,0-3-6.92,11.89,11.89,0,0,0-8-2.5c-3,0-5.14.55-6.59,1.65a5.3,5.3,0,0,0-2.18,4.45A4.46,4.46,0,0,0,61,35.84a6.86,6.86,0,0,0,4.51,1.36A7.43,7.43,0,0,0,70,36a4.13,4.13,0,0,0,1.69-3.57,4.54,4.54,0,0,0-1-2.83,6.51,6.51,0,0,0-3-2,14,14,0,0,1,1.76-.13,8.63,8.63,0,0,1,5,1.52,4.62,4.62,0,0,1,2.21,3.93q0,2.73-3.09,4.13a40.07,40.07,0,0,1-9.45,2.43l-3,.46c-.56.13-1.45.28-2.66.45q-8.83,1.3-13.51,4.48a10.35,10.35,0,0,0-4.67,9.1,7.78,7.78,0,0,0,3,6.52,12.25,12.25,0,0,0,7.76,2.31,15.64,15.64,0,0,0,7.5-1.49,4.94,4.94,0,0,0,2.7-4.62A4.51,4.51,0,0,0,59.55,53a6.74,6.74,0,0,0-4.45-1.34,7.63,7.63,0,0,0-4.55,1.27,4.17,4.17,0,0,0-1.75,3.6,4.77,4.77,0,0,0,3.44,4.88,16,16,0,0,1-1.75.13A9.73,9.73,0,0,1,45.1,60a4.38,4.38,0,0,1-2.34-3.77q0-2.52,3.18-4a48.88,48.88,0,0,1,10.52-2.72l4.68-.78L65.49,48a6,6,0,0,1,2.4,3.15,13.37,13.37,0,0,1,.52,3.8,7.72,7.72,0,0,1-2.76,6,17.7,17.7,0,0,1-7,3.7A30.75,30.75,0,0,1,50,65.85q-9.87,0-14.91-2.8a9.43,9.43,0,0,1-5-8.89,11.25,11.25,0,0,1,1.49-5.95,15.62,15.62,0,0,1,4.35-4.45,6.22,6.22,0,0,0,3.77,1.82,2.11,2.11,0,0,0,1.3-.39,1.22,1.22,0,0,0,.52-1,1.74,1.74,0,0,0-.59-1.36,2.43,2.43,0,0,0-1.68-.52,13.73,13.73,0,0,0-3.38.59,10.06,10.06,0,0,1-2-6.11q0-4.41,2.4-6.72a8.45,8.45,0,0,1,6.1-2.31,11.77,11.77,0,0,1,3.84.52,6.15,6.15,0,0,0-3.35,2.05,5.15,5.15,0,0,0-1.27,3.34A4,4,0,0,0,43.08,37a6.53,6.53,0,0,0,4,1.17,6.6,6.6,0,0,0,4.19-1.36A4.34,4.34,0,0,0,53,33.24a5,5,0,0,0-1.46-3.7,8.85,8.85,0,0,0-3.48-2.08,17.43,17.43,0,0,0-2.85-.68,27.17,27.17,0,0,0-3.9-.23,25.58,25.58,0,0,0-6.63.88,13.36,13.36,0,0,0-5.42,2.79,6.32,6.32,0,0,0-2.17,5,6.17,6.17,0,0,0,2.14,4.91A18.35,18.35,0,0,0,35,43.25a27.12,27.12,0,0,0-5.87,2.24,17,17,0,0,0-5.62,4.67A11.72,11.72,0,0,0,21,57.73a13.13,13.13,0,0,0,3,8.64A19,19,0,0,0,32.85,72a44,44,0,0,0,13.93,2,36.74,36.74,0,0,0,12.51-2,19.55,19.55,0,0,0,8.57-5.65A12.86,12.86,0,0,0,71,57.73a14.63,14.63,0,0,0-1.21-6,8.82,8.82,0,0,0-3.21-4q6.16-1.5,9.32-4.42A10.13,10.13,0,0,0,79,35.52Z"/>
			</svg>
			<svg id="border-radius-top-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
				<defs>
					<style>.cls-1{fill:none;}</style>
				</defs>
				<title>top-right-radius</title>
				<path id="border-radius__curve" class="cls-1" d="M99.85,0c0,.51,0,1,0,1.51A98.49,98.49,0,0,1,1.4,100H100V0ZM0,100H1.4c-.47,0-.93,0-1.4,0Z"/>
			</svg>
			<div class="bc-grid">
				<div>
					<h2>Contact</h2>
					<p>
						<?php the_field('contact-address') ?>
					</p>
					<p><a href="tel:<?php the_field('contact-phone-number') ?>"><?php the_field('contact-phone-number'); ?></a><br />
					<a href="mailto:<?php the_field('contact-email') ?>"><?php the_field('contact-email'); ?></a></p>
					<?php if (get_field('privacy-policy-link')) { 
							$privacy_policy = get_field('privacy-policy-link');
						?>
					<p class="bc-privacy-policy-link"><a href="<?php echo $privacy_policy['url'] ?>"><?php echo $privacy_policy['title'] ?></a></p>
					<?php }// end if privacy-policy-link ?>
				</div><!-- // grid column -->

				<?php if (get_field('contact-social-media')) { ?>
					<?php $social_media_links = get_field('contact-social-media');
						$this_link_URL 	= $social_media_links['social-media-link#1'];
						$this_link_icon = $social_media_links['social-media-icon#1'];
						if (($this_link_URL && strcmp($this_link_URL, '') !== 0) && $this_link_icon) { 
							$icon_class = (strcmp($this_link_icon, 'linkedin-plain') == 0) ? 'bc-icon-links__linkedin' : "";
						?>
					<div>
						<h2>Follow us</h2>
						<ul class="bc-icon-links">
							<li target="_blank" class="<?php  echo $icon_class ;?>">
								<a target="_blank" href="<?php echo $this_link_URL ?>">
									<svg class="svg-icon">
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_link_icon ?>"></use>
									</svg>	
								</a>
							</li>		
							<?php }//end if link#1 ?>
							<?php 
								$this_link_URL 	= $social_media_links['social-media-link#2'];
								$this_link_icon = $social_media_links['social-media-icon#2'];
								if (($this_link_URL && strcmp($this_link_URL, '') !== 0) && $this_link_icon) { 
									$icon_class = (strcmp($this_link_icon, 'linkedin-plain') == 0) ? 'bc-icon-links__linkedin' : "";
									?>
							<li target="_blank" class="<?php  echo $icon_class ;?>">
								<a target="_blank" href="<?php echo $this_link_URL ?>">
									<svg class="svg-icon">
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_link_icon ?>"></use>
									</svg>	
								</a>
							</li>		
							<?php }//end if link#1 ?>
							<?php 
								$this_link_URL 	= $social_media_links['social-media-link#3'];
								$this_link_icon = $social_media_links['social-media-icon#3'];
								if (($this_link_URL && strcmp($this_link_URL, '') !== 0) && $this_link_icon) { 
									$icon_class = (strcmp($this_link_icon, 'linkedin-plain') == 0) ? 'bc-icon-links__linkedin' : "";
									?>
							<li target="_blank" class="<?php  echo $icon_class ;?>">
								<a target="_blank" href="<?php echo $this_link_URL ?>">
									<svg class="svg-icon">
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_link_icon ?>"></use>
									</svg>	
								</a>
							</li>		
							<?php }//end if link#1 ?>
							<?php 
								$this_link_URL 	= $social_media_links['social-media-link#4'];
								$this_link_icon = $social_media_links['social-media-icon#4'];
								if (($this_link_URL && strcmp($this_link_URL, '') !== 0) && $this_link_icon) { 
									$icon_class = (strcmp($this_link_icon, 'linkedin-plain') == 0) ? 'bc-icon-links__linkedin' : "";
									?>
							<li target="_blank" class="<?php  echo $icon_class ;?>">
								<a target="_blank" href="<?php echo $this_link_URL ?>">
									<svg class="svg-icon">
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_link_icon ?>"></use>
									</svg>	
								</a>
							</li>		
							<?php }//end if link#1 ?>
						<?php $this_link_URL 	= $social_media_links['social-media-link#1'];
							$this_link_icon = $social_media_links['social-media-icon#1'];
						if (($this_link_URL && strcmp($this_link_URL, '') !== 0) && $this_link_icon) { 
							$icon_class = (strcmp($this_link_icon, 'linkedin-plain') == 0) ? 'bc-icon-links__linkedin' : "";
						?>
						</ul><!-- .bc-icon-links -->
				</div><!-- // grid column // social media -->
						<?php }  ?>
				<?php }// endif get contact-social-media ?>
				<?php if (get_field('contact-map')) { ?>
				<div class="bc-grid-span-2cols">
					<h2>Find us</h2>
					<div class="bc-object-embed is-16x9">
						<?php the_field('contact-map'); ?>
					</div>
				</div><!-- // .bc-grid-span-2cols -->
				<?php }//end if get contact-map ?>
			</div><!-- // .bc-grid -->
		</footer>
		<div class="bc-footer-footer bc-container">
			&#169; <?php the_field('contact-copyright'); ?>
		</div><!-- // .bc-footer-footer-->
	</div><!-- // .bc-has-border-rad__wrap--footer -->
	<?php	}//end while $contact_post
			}//end if $contact_posts
			wp_reset_postdata(); 	?>
	<!-- Cookies consent -->
	<section id="bc-cookies-consent-block" class="bc-cookies-consent bc-modal">
		<article class="bc-cookies-consent__block bc-modal__block ">
			<div class="bc-cookies-consent__content bc-text-component">
				<h2 class="bc-cookies-consent__heading bc-modal__heading">About your data</h2>
				<p>We use cookies to improve your experience and to learn more about what you like.</p>
				<p>You can manage your prefrences here.</p>
				<div class="bc-cookies-consent__btns bc-modal__btns">
					<div class="bc-cookies-consent__btns-wrap">
						<a href="privacy-page.html">Find out more</a>
						<button class="bc-button" id="bc-cookies-consent">
							I'm happy with that
						</button>
					</div>
				</div>
			</div><!-- // .bc-cookies-consent__content -->	
		</article><!-- // .bc-cookies-consent__block -->
	</section><!-- // .bc-cookies-consent -->
	
	
	</div><!-- //. bc-body-wrap --> 
	<div class="bc-snack-bar__wrap">
			<div class="bc-snack-bar">
				<a href="javascript:void(0)" class="bc-snack-bar__close">
					<svg class="svg-icon">
						<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
					</svg>	
				</a><!-- // .bc-snack-bar__close -->
				<svg class="svg-icon check">
					<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#check"></use>
				</svg>	
				<p class="bc-snack-bar__text">We have saved your preferences, thank you!</p>
			</div><!-- // .bc-snack-bar -->
	</div><!-- // .bc-snack-bar__wrap -->
	<?php
		wp_footer()					
	?>
	<!-- <script src="assets/scripts/app-concat.js"></script>   -->
</body>
</html> 