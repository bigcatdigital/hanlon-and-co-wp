<?php
	/* Template Name: Homepage template */
	get_header();
?> 
	<!-- Hero -->
	<section id="main-site-content" class="bc-hero bc-hero--full-screen bc-has-border-rad-next" data-page-template="bc-homepage" aria-label="Full screen hero">
		<?php if (get_field('hero-feature-image')) { 
				$hero_image = get_field('hero-feature-image'); ?>
		<picture class="bc-hero__media">
			<img class="bc-is-filterable--full-screen" data-filter-at="0.5" src="<?php echo $hero_image['url'] ?>" alt="<?php echo $hero_image['alt'] ?>">
		</picture>
		<?php } ?>
		<article class="bc-hero__body bc-content-component--media-padded" aria-label="Main page hero body">
			<div class="bc-hero__body__content ">
				<div class="bc-feature-header--hero">
					<div class="bc-feature-header__col">
						<h1 class="bc-hero__heading bc-site-logo">
							Hanlon<span>&amp;</span><br />
							Company
						</h1>
						<p class="bc-brand-tagline">Solicitors</p>
						<?php if (the_field('hero-feature-tag-line')) { 
							echo the_field('hero-feature-tag-line') ;
						} ?>
						<!-- <p class=""> <strong>Imagine</strong> an <strong>expert legal team</strong> that pulls together for you…</p> -->
						
					</div><!-- // .bc-feature-header__col -->
				</div><!-- // .bc-feature-header -->
			</div><!-- // .bc-hero__body__content -->
		</article>
		<div class="bc-media-overlay"></div> 
	</section>
	<!-- // Hero -->
	<div class="bc-has-border-rad__wrap">
		<section class="bc-container bc-areas-of-practice bc-has-border-rad bc-has-ampersand">
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
			<article class="bc-content-component">
				<?php if (get_field('areas-of-practice-title-text')) { ?>
				<div class="bc-content-component--text bc-feature-header"> 
					<div class="bc-feature-header__col"> 
						<p class="bc-content-label">Areas of Practice</p>
						<h1 class="bc-feature-header__heading"><?php the_field('areas-of-practice-title-text') ?></h1>
						<?php the_field('areas-of-practice-leader-text') ?>
					</div><!-- // .bc-feature-header__col -->
				</div><!-- // .bc-feature-header -->
				<?php }// end if areas-of-practice-title-text ?>
				<div class="bc-areas-of-practice__main bc-content-component bc-grid">
					<?php
						if (get_field('featured-area-of-practice#1')) {
						$this_area_of_practice = get_field('featured-area-of-practice#1'); ?>
					<div class="bc-areas-of-practice__main__area">
						<?php
							$this_area_image = $this_area_of_practice['area-image'];
							if (!empty($this_area_image) && strcmp($this_area_image['url'], '') !== 0) { ?>
						<div class="bc-areas-of-practice__main__media">
							<picture class="bc-areas-of-practice__main__media__media">
								<img class="bc-is-filterable" data-filter-at="1" src="<?php echo $this_area_image['url'] ?>" alt="<?php echo $this_area_image['url'] ?>">
							</picture>
						</div><!-- // .bc-areas-of-practice__main__media -->
						<?php }//end $this_area_image ?>
						<?php 
							if ($this_area_of_practice['area-title'] && strcmp($this_area_of_practice['area-title'], '') !== 0) {
								$this_area_link = $this_area_of_practice['area-link'];
								if (!empty($this_area_link)) { 
									$this_area_link_url = $this_area_link['url'] ;
								} else {
									$this_area_link_url = '';
								} ?>
						<a href="<?php echo $this_area_link_url; ?>" class="bc-areas-of-practice__main__text ">
							<div class="bc-areas-of-practice__main__text__text bc-match-height">
								<h2 class="bc-areas-of-practice__main__sub-head"><?php echo $this_area_of_practice['area-title']; ?></h2>
								<p class="bc-areas-of-practice__main__description" data-hidden="true"><?php echo $this_area_of_practice['area-leader']; ?></p>
							</div>
							<?php if (!empty($this_area_link['title']) && strcmp($this_area_link['title'], '') !== 0) { ?>
							<p class="bc-arrow-link">
								<span>
								<?php echo $this_area_link['title']; ?>
								</span>
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
								</svg>
							</p>
							<?php } //end if this area link title ?>
							<div class="bc-media-overlay"></div>
						</a><!-- // .bc-two-column-layout__text-column -->
						<?php } // end if this area-title ?> 
					</div><!-- // .bc-areas-of-practice__main__area -->
					<?php }//end $this_area_image ?>
					<?php
						if (get_field('featured-area-of-practice#2')) {
							$this_area_of_practice = get_field('featured-area-of-practice#2'); ?>
					<div class="bc-areas-of-practice__main__area">
							<?php	$this_area_image = $this_area_of_practice['area-image'];
								if (!empty($this_area_image) && strcmp($this_area_image['url'], '') !== 0) { ?>
						<div class="bc-areas-of-practice__main__media">
							<picture class="bc-areas-of-practice__main__media__media">
								<img class="bc-is-filterable" data-filter-at="1" src="<?php echo $this_area_image['url'] ?>" alt="<?php echo $this_area_image['url'] ?>">
							</picture>
						</div><!-- // .bc-areas-of-practice__main__media -->
							<?php }//end $this_area_image ?>
							<?php 
							if ($this_area_of_practice['area-title'] && strcmp($this_area_of_practice['area-title'], '') !== 0) {
								$this_area_link = $this_area_of_practice['area-link'];
								if (!empty($this_area_link)) { 
									$this_area_link_url = $this_area_link['url'] ;
								} else {
									$this_area_link_url = '';
								} ?>
						<a href="<?php echo $this_area_link_url; ?>" class="bc-areas-of-practice__main__text ">
							<div class="bc-areas-of-practice__main__text__text bc-match-height">
								<h2 class="bc-areas-of-practice__main__sub-head"><?php echo $this_area_of_practice['area-title']; ?></h2>
								<p class="bc-areas-of-practice__main__description" data-hidden="true"><?php echo $this_area_of_practice['area-leader']; ?></p>
							</div>
							<?php if (!empty($this_area_link['title']) && strcmp($this_area_link['title'], '') !== 0) { ?>
							<p class="bc-arrow-link">
								<span>
								<?php echo $this_area_link['title']; ?>
								</span>
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
								</svg>
							</p>
							<?php } //end if this area link title ?>
							<div class="bc-media-overlay"></div>
						</a><!-- // .bc-two-column-layout__text-column -->
						<?php } // end if this area-title ?> 
					</div><!-- // .bc-areas-of-practice__main__area -->
					<?php } // end if get featured-area-of-practice#2 ?>
				</div><!-- // .bc-areas-of-practice__main -->	
			</article><!-- // .bc-content-component -->
			<article class="bc-content-component">
				<?php if ( get_field('other-areas-of-practice#1') && strcmp(get_field('other-areas-of-practice#1')['area-title'], '') !== 0) {
					$this_area_of_practice = get_field('other-areas-of-practice#1'); ?>
				<div class="bc-content-component">
					<div class="bc-areas-of-practice__other"> 
						<div class="bc-areas-of-practice__other__area">
							<div class="bc-areas-of-practice__other__area__header">
								<?php if ($this_area_of_practice['area-icon'] && strcmp($this_area_of_practice['area-icon'], 'none')) { ?>
								<svg class="svg-icon bc-areas-of-practice__other__icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_area_of_practice['area-icon']?>"></use>
								</svg>	
								<?php }// end if area-icon ?>
								<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
							</div><!-- // .bc-areas-of-practice__other__header --> 
							<?php if ($this_area_of_practice['area-leader']) { ?>
							<p><?php echo $this_area_of_practice['area-leader'] ?></p>
							<?php }// end if area-leader ?>
							<?php if ($this_area_of_practice['area-link'] && strcmp($this_area_of_practice['area-link']['url'], '') !== 0) { ?>
							<p class="bc-arrow-link">
								<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title'] ?></a>
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
								</svg>
							</p>
							<?php }// end if area-link ?>
						</div><!-- // .bc-areas-of-practice__other__area -->
						<?php }// end if other-areas-of-practice#1 ?>
						<?php if ( get_field('other-areas-of-practice#2') && strcmp(get_field('other-areas-of-practice#2')['area-title'], '') !== 0) {
							$this_area_of_practice = get_field('other-areas-of-practice#2'); ?>
						<div class="bc-areas-of-practice__other__area">
							<div class="bc-areas-of-practice__other__area__header">
								<?php if ($this_area_of_practice['area-icon'] && strcmp($this_area_of_practice['area-icon'], 'none')) { ?>
								<svg class="svg-icon bc-areas-of-practice__other__icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_area_of_practice['area-icon']?>"></use>
								</svg>	
								<?php }// end if area-icon ?>
								<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
							</div><!-- // .bc-areas-of-practice__other__header -->
							<?php if ($this_area_of_practice['area-leader']) { ?>
							<p><?php echo $this_area_of_practice['area-leader']; ?></p>
							<?php }// end if area-leader ?>
							<?php if ($this_area_of_practice['area-link'] && strcmp($this_area_of_practice['area-link']['url'], '') !== 0) { ?>
							<p class="bc-arrow-link">
								<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title'] ?></a>
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
								</svg>
							</p>
							<?php }// end if area-link ?>
						</div><!-- // .bc-areas-of-practice__other__area -->
						<?php }// end if other-areas-of-practice#2 ?>
						<?php if ( get_field('other-areas-of-practice#3') && strcmp(get_field('other-areas-of-practice#3')['area-title'], '') !== 0) {
							$this_area_of_practice = get_field('other-areas-of-practice#3'); ?>
						<div class="bc-areas-of-practice__other__area">
							<div class="bc-areas-of-practice__other__area__header">
								<?php if ($this_area_of_practice['area-icon'] && strcmp($this_area_of_practice['area-icon'], 'none')) { ?>
								<svg class="svg-icon bc-areas-of-practice__other__icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_area_of_practice['area-icon']?>"></use>
								</svg>	
								<?php }// end if area-icon ?>
								<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
							</div><!-- // .bc-areas-of-practice__other__header -->
							<?php if ($this_area_of_practice['area-leader']) { ?>
							<p><?php echo $this_area_of_practice['area-leader'] ?></p>
							<?php }// end if area-leader ?>
							<?php if ($this_area_of_practice['area-link'] && strcmp($this_area_of_practice['area-link']['url'], '') !== 0) { ?>
							<p class="bc-arrow-link">
								<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title'] ?></a>
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
								</svg>
							</p>
							<?php }// end if area-link ?>
						</div><!-- // .bc-areas-of-practice__other__area -->
						<?php }// end if other-areas-of-practice#3 ?>
						<?php if ( get_field('other-areas-of-practice#4') && strcmp(get_field('other-areas-of-practice#4')['area-title'], '') !== 0) {
							$this_area_of_practice = get_field('other-areas-of-practice#4'); ?>
						<div class="bc-areas-of-practice__other__area">
							<div class="bc-areas-of-practice__other__area__header">
								<?php if ($this_area_of_practice['area-icon'] && strcmp($this_area_of_practice['area-icon'], 'none')) { ?>
								<svg class="svg-icon bc-areas-of-practice__other__icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_area_of_practice['area-icon']?>"></use>
								</svg>	
								<?php }// end if area-icon ?>
								<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
							</div><!-- // .bc-areas-of-practice__other__header -->
							<?php if ($this_area_of_practice['area-leader']) { ?>
							<p><?php echo $this_area_of_practice['area-leader'] ?></p>
							<?php }// end if area-leader ?>
							<?php if ($this_area_of_practice['area-link'] && strcmp($this_area_of_practice['area-link']['url'], '') !== 0) { ?>
							<p class="bc-arrow-link">
								<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title'] ?></a>
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
								</svg>
							</p>
							<?php }// end if area-link ?>
						</div><!-- // .bc-areas-of-practice__other__area -->
						<?php }// other-areas-of-practice#4 ?>
						<?php if ( get_field('other-areas-of-practice#5') && strcmp(get_field('other-areas-of-practice#5')['area-title'], '') !== 0) {
							$this_area_of_practice = get_field('other-areas-of-practice#5'); ?>
						<div class="bc-areas-of-practice__other__area">
							<div class="bc-areas-of-practice__other__area__header">
								<?php if ($this_area_of_practice['area-icon'] && strcmp($this_area_of_practice['area-icon'], 'none')) { ?>
								<svg class="svg-icon bc-areas-of-practice__other__icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_area_of_practice['area-icon']?>"></use>
								</svg>	
								<?php }// end if area-icon ?>
								<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
							</div><!-- // .bc-areas-of-practice__other__header -->
							<?php if ($this_area_of_practice['area-leader']) { ?>
							<p><?php echo $this_area_of_practice['area-leader'] ?></p>
							<?php }// end if area-leader ?>
							<?php if ($this_area_of_practice['area-link'] && strcmp($this_area_of_practice['area-link']['url'], '') !== 0) { ?>
							<p class="bc-arrow-link">
								<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title'] ?></a>
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
								</svg>
							</p>
							<?php }// end if area-link ?>
						</div><!-- // .bc-areas-of-practice__other__area #5-->
						<?php }// other-areas-of-practice#5 ?>
						<?php if ( get_field('other-areas-of-practice#6') && strcmp(get_field('other-areas-of-practice#6')['area-title'], '') !== 0) {
							$this_area_of_practice = get_field('other-areas-of-practice#6'); ?>
						<div class="bc-areas-of-practice__other__area">
							<div class="bc-areas-of-practice__other__area__header">
								<?php if ($this_area_of_practice['area-icon'] && strcmp($this_area_of_practice['area-icon'], 'none')) { ?>
								<svg class="svg-icon bc-areas-of-practice__other__icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_area_of_practice['area-icon']?>"></use>
								</svg>	
								<?php }// end if area-icon ?>
								<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
							</div><!-- // .bc-areas-of-practice__other__header -->
							<?php if ($this_area_of_practice['area-leader']) { ?>
							<p><?php echo $this_area_of_practice['area-leader'] ?></p>
							<?php }// end if area-leader ?>
							<?php if ($this_area_of_practice['area-link'] && strcmp($this_area_of_practice['area-link']['url'], '') !== 0) { ?>
							<p class="bc-arrow-link">
								<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title'] ?></a>
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
								</svg>
							</p>
							<?php }// end if area-link ?>
						</div><!-- // .bc-areas-of-practice__other__area #6 -->
						<?php }// other-areas-of-practice#6 ?>
						<?php if ( get_field('other-areas-of-practice#7') && strcmp(get_field('other-areas-of-practice#7')['area-title'], '') !== 0) {
							$this_area_of_practice = get_field('other-areas-of-practice#7'); ?>
						<div class="bc-areas-of-practice__other__area">
							<div class="bc-areas-of-practice__other__area__header">
								<?php if ($this_area_of_practice['area-icon'] && strcmp($this_area_of_practice['area-icon'], 'none')) { ?>
								<svg class="svg-icon bc-areas-of-practice__other__icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_area_of_practice['area-icon']?>"></use>
								</svg>	
								<?php }// end if area-icon ?>
								<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
							</div><!-- // .bc-areas-of-practice__other__header -->
							<?php if ($this_area_of_practice['area-leader']) { ?>
							<p><?php echo $this_area_of_practice['area-leader'] ?></p>
							<?php }// end if area-leader ?>
							<?php if ($this_area_of_practice['area-link'] && strcmp($this_area_of_practice['area-link']['url'], '') !== 0) { ?>
							<p class="bc-arrow-link">
								<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title'] ?></a>
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
								</svg>
							</p>
							<?php }// end if area-link ?>
						</div><!-- // .bc-areas-of-practice__other__area #7-->
						<?php }// other-areas-of-practice#7 ?>
						<?php if ( get_field('other-areas-of-practice#8') && strcmp(get_field('other-areas-of-practice#8')['area-title'], '') !== 0) {
							$this_area_of_practice = get_field('other-areas-of-practice#8'); ?>
						<div class="bc-areas-of-practice__other__area">
							<div class="bc-areas-of-practice__other__area__header">
								<?php if ($this_area_of_practice['area-icon'] && strcmp($this_area_of_practice['area-icon'], 'none') !== 0) { ?>
								<svg class="svg-icon bc-areas-of-practice__other__icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#<?php echo $this_area_of_practice['area-icon']?>"></use>
								</svg>	
								<?php }// end if area-icon ?>
								<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
							</div><!-- // .bc-areas-of-practice__other__header -->
							<?php if ($this_area_of_practice['area-leader']) { ?>
							<p><?php echo $this_area_of_practice['area-leader'] ?></p>
							<?php }// end if area-leader ?>
							<?php if ($this_area_of_practice['area-link'] && strcmp($this_area_of_practice['area-link']['url'], '') !== 0) { ?>
							<p class="bc-arrow-link">
								<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title'] ?></a>
								<svg class="svg-icon">
									<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
								</svg>
							</p>
							<?php }// end if area-link ?>
						</div><!-- // .bc-areas-of-practice__other__area #8 -->
						<?php }// other-areas-of-practice#8 ?>
					</div><!-- .bc-areas-of-practice__other -->
				</div><!--- // .bc-content-component -->
			</article><!-- // .bc-content-component -->
		</section><!-- // .bc-container.bc-areas-of-practice -->
	</div><!-- // .bc-has-border-rad__wrap -->
	<?php if (get_field('about-leader-text')) { ?>
	<section class="bc-container bc-about-us bc-has-border-rad-next">
		<article class="bc-two-column-layout--wide"> 
		<?php $about_image = get_field('about-image'); 
					if (!empty($about_image)) {
				?>
			<div class="bc-two-column-layout--wide__media">
				<picture class="bc-two-column-layout--wide__media__media">
					<img class="bc-is-filterable" src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
				</picture>
			</div>
			<?php } ?>
			<div class="bc-two-column-layout--wide__text  bc-bg-brand-primary">
				<p class="bc-content-label"><?php the_field('about-label'); ?></p>
				<h2 class="bc-bg-text bc-two-column-layout--wide__heading"><?php the_field('about-leader-text'); ?></h2>
				<?php $about_link = get_field('about-link'); 
					if (!empty($about_link)) {
				?>
				<p class="bc-arrow-link">
					<a href="<?php echo $about_link['url']; ?>"><?php echo $about_link['title']; ?></a>
					<svg class="svg-icon">
						<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
					</svg>
				</p>
				<?php } ?>
			</div>
		</article>
	</section><!-- // .bc-container.bc-about-us -->
	<?php }//end if get about-leader-text  ?>
	<?php if (get_field('get-testimonials')) {
		$testimonial_types = get_field('testimonial-type');
		$testimonial_language = get_field('testimonial-language');
		$post_type = 'clienttestimonial'; 
		$testimonials_posts = new WP_Query(array(
			'post_type' => $post_type,
			'meta_query' => array(
				array(
					'key' => 'testimonial-category', 
					'value' => $testimonial_types
				), 
				array(
					'key' => 'testimonial-language', 
					'value' => $testimonial_language
				)
			)
		));	
		if ($testimonials_posts->have_posts()) { ?>
	<div class="bc-has-border-rad__wrap bc-testimonials">
		<section class="bc-container bc-testimonials bc-has-border-rad" aria-label="Flickity text slider">
			<svg id="border-radius-top-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
				<defs>
					<style>.cls-1{fill:none;}</style>
				</defs>
				<title>top-right-radius</title>
				<path id="border-radius__curve" class="cls-1" d="M99.85,0c0,.51,0,1,0,1.51A98.49,98.49,0,0,1,1.4,100H100V0ZM0,100H1.4c-.47,0-.93,0-1.4,0Z"/>
			</svg>
			<div class="bc-content-component--text">
				<h1 class="bc-content-label">Testimonials</h1> 
			</div>
			<div class="bc-testimonials__quote-icon bc-content-component--text">
				<svg class="svg-icon">
					<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#quote-left-serif"></use>
				</svg>
			</div>	
			<div class="bc-flickity bc-testimonials__body bc-flickity--text-slider"> 
				<?php
					while ($testimonials_posts->have_posts()) {
					$testimonials_posts->the_post(); ?>
				<article class="bc-flickity__slide" aria-label="Text slide #1"> 
					<p class="bc-testimonials__text"><?php the_field('testimonial-text') ?></p>
					<?php if (get_field('client-description')) { ?>
					<p class="bc-testimonials__attribution">&mdash; <?php the_field('client-description') ?> 
						
						<!-- <span class="bc-testimonials__attribution"><?php echo "&mdash; " . ucfirst(get_field('testimonial-category')); ?></span></p> -->
						
					<?php } ?>
				</article><!-- // .bc-card bc-card--plain-text -->
				<?php } //end while have_posts ?>
			</div><!-- //.bc-flickity -->
		</section><!-- // Flickity text slider -->
	</div><!-- // .bc-has-border-rad__wrap bc-testimonials -->
	<?php }//end if have_posts()
		wp_reset_postdata();  
	}// end if get-testimonials ?> 
	<?php
		get_footer();
	?> 
	