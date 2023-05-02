<?php
	/* Template Name: Homepage template */
	get_header();
?> 
	<!-- Hero -->
	<section id="main-site-content" class="bc-hero bc-hero--full-screen" aria-label="Full screen hero">
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
	<div class="bc-section-hrs"></div>
	<section id="" class="bc-container bc-areas-of-practice">
		<article class="bc-content-component">
			<?php if (get_field('areas-of-practice-title-text')) { ?>
			<div class="bc-content-component--text bc-feature-header"> 
				<div class="bc-feature-header__col"> 
					<h1 class="bc-feature-header__heading"><?php the_field('areas-of-practice-title-text') ?></h1>
					<?php the_field('areas-of-practice-leader-text') ?>
				</div><!-- // .bc-feature-header__col -->
			</div><!-- // .bc-feature-header -->
			<?php } ?>
							
			<div class="bc-areas-of-practice__main bc-content-component bc-grid bc-match-height-wrap">
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
			<?php if (get_field('other-areas-of-practice-title') && strcmp(get_field('other-areas-of-practice-title'), '') !== 0) { ?>
			<div class="bc-content-component--text bc-feature-sub-header bc-areas-of-practice__other__header bc-bg-shade-f0"> 
				<div class="bc-feature-header__col">
					<h2 class="bc-feature-sub-header__heading"><?php echo get_field('other-areas-of-practice-title'); ?></h2>
				</div><!-- // .bc-feature-header__col -->
			</div><!-- // .bc-feature-header -->
			<?php } // end if other areas of practice title ?>
			<?php if ( get_field('other-areas-of-practice#1') && strcmp(get_field('other-areas-of-practice#1')['area-title'], '') !== 0) {
				$this_area_of_practice = get_field('other-areas-of-practice#1'); ?>
			<div class="bc-content-component bc-areas-of-practice__other">
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
				</div><!-- // .bc-areas-of-practice__other__area -->
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
				</div><!-- // .bc-areas-of-practice__other__area -->
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
				</div><!-- // .bc-areas-of-practice__other__area -->
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
				</div><!-- // .bc-areas-of-practice__other__area -->
			<?php }// other-areas-of-practice#8 ?>
			</div><!-- .bc-areas-of-practice__other -->
		</article><!-- // .bc-content-component -->
	</section><!-- // .bc-container.bc-areas-of-practice -->
	<?php if (get_field('about-leader-text')) { ?>
	<section class="bc-container bc-about-us">
		<article class="bc-two-column-layout--wide bc-bg-brand-primary"> 
		<?php $about_image = get_field('about-image'); 
					if (!empty($about_image)) {
				?>
			<div class="bc-two-column-layout--wide__media">
				<picture class="bc-two-column-layout--wide__media__media">
					<img class="bc-is-filterable" src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
				</picture>
			</div>
			<?php } ?>
			<div class="bc-two-column-layout--wide__text">
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
	<?php 
	if (get_field('get-testimonials')) {
		$testimonial_type = get_field('testimonial-type');
		$post_type = 'clienttestimonial';
		
		$testimonials_posts = new WP_Query(array(
			'post_type' => $post_type,
			'meta_key' => 'testimonial-category',
			'meta_value' => (in_array('all', $testimonial_type)) ? '' : $testimonial_type
		));	
	?>
	<section class="bc-container bc-testimonials bc-bg-shade-f0" aria-label="Flickity text slider">
			<div class="bc-testimonials__quote-icon bc-content-component--text">
				<svg class="svg-icon">
					<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#quote-left-serif"></use>
				</svg>
			</div>	
			<div class="bc-flickity bc-testimonials__body bc-flickity--text-slider"> 
				<?php if ($testimonials_posts->have_posts()) {
					while ($testimonials_posts->have_posts()) {
					$testimonials_posts->the_post(); ?>
				<article class="bc-flickity__slide" aria-label="Text slide #1"> 
					<p class="bc-testimonials__text"><?php the_field('testimonial-text') ?></p>
					<?php if (get_field('client-description')) { ?>
					<p class="bc-testimonials__attribution">&mdash; <?php the_field('client-description') ?> 
						<?php if (strcmp(get_field('testimonial-category'), 'all') !== 0) { ?>
						<!-- <span class="bc-testimonials__attribution"><?php echo "&mdash; " . ucfirst(get_field('testimonial-category')); ?></span></p> -->
						<?php }// end if client-description !== 'all' ?>
					<?php } ?>
				</article><!-- // .bc-card bc-card--plain-text -->
				<?php }
					}//end if have_posts()
					wp_reset_postdata();  
				?>
			</div><!-- //.bc-flickity -->
		</section><!-- // Flickity text slider -->
	<?php }// end if get-testimonials?> 
	<div class="bc-section-hrs--reversed .bc-bg-shade-f0"></div>
	<?php
		get_footer();
	?> 
	