<?php
	include __DIR__ . '/../php_includes/project_functions.php';
	/* Template Name: Areas of practice template */ 
	get_header();
?> 
		<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
			<?php echo do_breadcrumbs(); ?>
		</nav>
		<main id="main-site-content" class="bc-inner-page">
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
			<div class="bc-content-component bc-areas-of-practice__other bc-match-height-wrap">
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
		</main><!-- // #main-site-content -->
		<?php
			get_footer();
		?> 