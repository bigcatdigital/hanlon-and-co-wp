<?php $contact_post = new WP_Query(array(
		'post_type' => 'contactinfo',
		'numberposts' => 1
	));	 
	if ($contact_post->have_posts()) {
		while ($contact_post->have_posts()) {
			$contact_post->the_post();  
			?>
	<div class="bc-has-border-rad__wrap bc-has-border-rad__wrap--footer">
		<footer id="contact-us" class="bc-container">
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