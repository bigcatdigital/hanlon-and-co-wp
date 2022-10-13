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
		<footer class="bc-hero__footer bc-content-component--media-padded">
			<div class="bc-hero__footer__scroll">	
				<span class="bc-content-label">Areas of practice</span>
					<span class="bc-hero__footer__scroll__line"></span>
			</div>
		</footer>
		<div class="bc-media-overlay"></div> 
	</section>
	<!-- // Hero -->
	<section id="" class="bc-container bc-areas-of-practice bc-has-footer">
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
				<div class="bc-areas-of-practice__main__area">
					<div class="bc-areas-of-practice__main__media">
						<picture class="bc-areas-of-practice__main__media__media">
							<?php 
								$this_area_of_practice = get_field('featured-area-of-practice#1');
								$this_area_image = $this_area_of_practice['area-image'];
								if (!empty($this_area_image)) {
							?>
							
							<img class="bc-is-filterable" data-filter-at="1" src="<?php echo $this_area_image['url'] ?>" alt="<?php echo $this_area_image['url'] ?>">
							<?php } ?>
						</picture>
					</div><!-- // .bc-two-column-layout__media-column -->
					<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>" class="bc-areas-of-practice__main__text bc-match-height">
						<div class="bc-areas-of-practice__main__text__text">
							<h2 class="bc-areas-of-practice__main__sub-head"><?php echo $this_area_of_practice['area-title']; ?></h2>
							<p class="bc-areas-of-practice__main__description" data-hidden="true"><?php echo $this_area_of_practice['area-leader']; ?></p>
						</div>
						<p class="bc-arrow-link">
							<span>
							<?php echo $this_area_of_practice['area-link']['title']; ?>
							</span>
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
							</svg>
						</p>
						<div class="bc-media-overlay"></div>
					</a><!-- // .bc-two-column-layout__text-column -->
				</div><!-- // .bc-areas-of-practice__main__area -->
				<div class="bc-areas-of-practice__main__area">
					<div class="bc-areas-of-practice__main__media">
						<picture class="bc-areas-of-practice__main__media__media">
							<?php 
								$this_area_of_practice = get_field('featured-area-of-practice#2');
								$this_area_image = $this_area_of_practice['area-image'];
								if (!empty($this_area_image)) {
							?>
							<img class="bc-is-filterable" data-filter-at="1" src="<?php echo $this_area_image['url'] ?>" alt="<?php echo $this_area_image['url'] ?>">
							<?php } ?>
						</picture>
					</div><!-- // .bc-two-column-layout__media-column -->
					<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>" class="bc-areas-of-practice__main__text bc-match-height">
						<div class="bc-areas-of-practice__main__text__text">
							<h2 class="bc-areas-of-practice__main__sub-head"><?php echo $this_area_of_practice['area-title']; ?></h2>
							<p class="bc-areas-of-practice__main__description" data-hidden="true"><?php echo $this_area_of_practice['area-leader']; ?></p>
						</div>
						<p class="bc-arrow-link">
							<span>
								<?php echo $this_area_of_practice['area-link']['title']; ?>
							</span>
							<svg class="svg-icon">
								<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
							</svg>
						</p>
						<div class="bc-media-overlay"></div>
					</a><!-- // .bc-two-column-layout__text-column -->
				</div><!-- // .bc-areas-of-practice__main__area -->
			</div><!-- // .bc-areas-of-practice__main -->	
			<div class="bc-content-component--text bc-feature-sub-header bc-areas-of-practice__other__header bc-bg-shade-f0"> 
				<div class="bc-feature-header__col">
					<h2 class="bc-feature-sub-header__heading"><?php the_field('other-areas-of-practice-title'); ?></h2>
				</div><!-- // .bc-feature-header__col -->
			</div><!-- // .bc-feature-header -->
			<div class="bc-content-component bc-areas-of-practice__other ">
				<?php $this_area_of_practice = get_field('other-areas-of-practice#1'); ?>
				<div class="bc-areas-of-practice__other__area bc-areas-of-practice__litigation bc-match-height">
					<div class="bc-areas-of-practice__other__area__header">
						<svg class="svg-icon bc-areas-of-practice__other__icon">
							<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#litigation"></use>
						</svg>	
						<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
					</div><!-- // .bc-areas-of-practice__other__header -->
					<p><?php echo $this_area_of_practice['area-leader'] ?></p>
					<p class="bc-arrow-link">
						<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title']; ?></a>
						<svg class="svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
						</svg>
					</p>
				</div><!-- // .bc-areas-of-practice__other__area -->
				<?php $this_area_of_practice = get_field('other-areas-of-practice#2'); ?>
				<div class="bc-areas-of-practice__other__area bc-areas-of-practice__litigation bc-match-height">
					<div class="bc-areas-of-practice__other__area__header">
						<svg class="svg-icon bc-areas-of-practice__other__icon">
							<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#litigation"></use>
						</svg>	
						<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
					</div><!-- // .bc-areas-of-practice__other__header -->
					<p><?php echo $this_area_of_practice['area-leader'] ?></p>
					<p class="bc-arrow-link">
						<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title']; ?></a>
						<svg class="svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
						</svg>
					</p>
				</div><!-- // .bc-areas-of-practice__other__area -->
				<?php $this_area_of_practice = get_field('other-areas-of-practice#3'); ?>
				<div class="bc-areas-of-practice__other__area bc-areas-of-practice__litigation bc-match-height">
					<div class="bc-areas-of-practice__other__area__header">
						<svg class="svg-icon bc-areas-of-practice__other__icon">
							<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#litigation"></use>
						</svg>	
						<h3 class="bc-areas-of-practice__other__area__heading"><?php echo $this_area_of_practice['area-title'] ?></h3>
					</div><!-- // .bc-areas-of-practice__other__header -->
					<p><?php echo $this_area_of_practice['area-leader'] ?></p>
					<p class="bc-arrow-link">
						<a href="<?php echo $this_area_of_practice['area-link']['url']; ?>"><?php echo $this_area_of_practice['area-link']['title']; ?></a>
						<svg class="svg-icon">
							<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#arrow"></use>
						</svg>
					</p>
				</div><!-- // .bc-areas-of-practice__other__area -->
			</div><!-- .bc-areas-of-practice__other -->
		</article><!-- // .bc-content-component -->
		<footer class="bc-content-component--media-padded">
			<div class="bc-footer__scroll">	
				<span class="bc-content-label">How we work</span>
					<span class="bc-footer__scroll__line"></span>
			</div>
		</footer>	
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
	<?php } ?>
	
	<?php
		get_footer();
	?> 
	