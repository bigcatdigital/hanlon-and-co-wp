<?php
	include __DIR__ . '/../php_includes/project_functions.php';
	/* Template Name: Inner feature page template */ 
	get_header();
?> 
		<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
			<?php echo do_breadcrumbs(); ?>
		</nav>
		<main id="main-site-content" class="bc-inner-page">
			<section class="bc-container bc-inner-page__main-section">
				<?php if (get_field('page-leader')) { 
					$page_leader = get_field('page-leader'); ?>
				<article class="bc-content-component bc-inner-page-heading">
					<div class="bc-text-component "> 
						<div class="bc-feature-header__col">
							<p class="bc-content-label"><?php echo get_the_title(); ?></p>
							<h1 class="bc-inner-page-heading__heading">
								<?php echo $page_leader['leader-title'] ?>
							</h1>
							<?php if ($page_leader['leader-text']) { ?>
							<p class="bc-intro-paragraph"><?php echo $page_leader['leader-text'] ?></p>
							<?php } //get leader-text ?>
						</div><!-- // .bc-feature-header__col -->
					</div><!-- // .bc-feature-header -->
				</article>
				<?php if ($page_leader['leader-image']) {
					$leader_image = $page_leader['leader-image']; ?>
				<div class="bc-content-component--media-padded bc-inner-page__feature-image">
					<div class="bc-object-embed bc-media-embed--placeholder">
						
						<img src="<?php echo $leader_image['url'] ?>" alt="<?php echo $leader_image['alt'] ?>">
					</div>
				</div>
				<?php } //end if $page_leader['leader_image'] ?>
				<?php } // end if get page-leader ?>
				<?php if (get_field('page-content#1')) { ?>
				<div class="bc-content-component">
					<article class="bc-text-component">
						<?php echo get_field('page-content#1'); ?>
					</article><!-- // .bc-text-component -->
				</div><!-- // .bc-content-component -->
				<?php } ?> 
				<?php if (get_field('feature-video-embed')) { ?>
				<div class="bc-content-component--media-padded bc-inner-page__feature-image">
					<div class="bc-object-embed bc-media-embed--placeholder">
					<?php the_field('feature-video-embed'); ?>
					</div>
				</div>
				<?php } ?>
				<?php if (get_field('lawyer-photo')) { 
					$lawyer_photo = get_field('lawyer-photo');
					?>
				<div class="bc-content-component--text bc-inner-page__feature-image">
					<div class="bc-text-component">
						<div class="bc-object-embed bc-media-embed--placeholder">
								<img src="<?php echo $lawyer_photo['url'] ?>" alt="<?php echo $lawyer_photo['alt'] ?>" />
						</div>
						<?php if (get_field('lawyer-link')) {  
							$lawyer_link = get_field('lawyer-link');
							?>
						<div class="bc-inner-page__feature-image__caption">
							<a href="<?php echo $lawyer_link['url'] ?>"><?php echo $lawyer_link['title'] ?></a>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
			</section><!-- // . bc-inner-page__main-->
			<?php if (get_field('page-content#2') || (get_field('faqs') && !empty(get_field('faqs')))) { ?>
			<section class="bc-container bc-inner-page__section">
				<div class="bc-content-component">
					<?php if (get_field('page-content#2')) { ?>
					<article class="bc-text-component">
						<?php the_field('page-content#2') ?>
					</article><!-- // .bc-text-component-->
					<?php } //end if page-content#2 ?>
					<?php if (get_field('faqs') && !empty(get_field('faqs'))) { 
						$faqs = get_field('faqs'); ?>
					<article class="bc-text-component bc-faqs">
						<div class="bc-show-hide"> 
							<?php if (strcmp($faqs['question#1'], '') !== 0 && strcmp($faqs['answer#1'], '') !== 0 ) { 
								$this_question = $faqs['question#1']; 
								$this_answer = $faqs['answer#1']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg')#close-x"></use>
									</svg>	
								</span>
							</div><!-- // .bc-show-hide__header -->
							<article class="bc-show-hide__body">
								<?php echo $this_answer; ?>
								<a href="javascript:void" class="bc-show-hide__hide" title="Close transcript">Close</a>
							</article><!-- // .bc-show-hide__body -->
							<hr />
							<?php } //question and answer#1 ?> 
							<?php if (strcmp($faqs['question#2'], '') !== 0 && strcmp($faqs['answer#2'], '') !== 0 ) { 
								$this_question = $faqs['question#2']; 
								$this_answer = $faqs['answer#2']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg')#close-x"></use>
									</svg>	
								</span>
							</div><!-- // .bc-show-hide__header -->
							<article class="bc-show-hide__body">
								<?php echo $this_answer; ?>
								<a href="javascript:void" class="bc-show-hide__hide" title="Close transcript">Close</a>
							</article><!-- // .bc-show-hide__body -->
							<hr />
							<?php } //question and answer#2 ?> 
							<?php if (strcmp($faqs['question#3'], '') !== 0 && strcmp($faqs['answer#3'], '') !== 0 ) { 
								$this_question = $faqs['question#3']; 
								$this_answer = $faqs['answer#3']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg')#close-x"></use>
									</svg>	
								</span>
							</div><!-- // .bc-show-hide__header -->
							<article class="bc-show-hide__body">
								<?php echo $this_answer; ?>
								<a href="javascript:void" class="bc-show-hide__hide" title="Close transcript">Close</a>
							</article><!-- // .bc-show-hide__body -->
							<hr />
							<?php } //question and answer#3 ?> 
							<?php if (strcmp($faqs['question#4'], '') !== 0 && strcmp($faqs['answer#4'], '') !== 0 ) { 
								$this_question = $faqs['question#4']; 
								$this_answer = $faqs['answer#4']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg')#close-x"></use>
									</svg>	
								</span>
							</div><!-- // .bc-show-hide__header -->
							<article class="bc-show-hide__body">
								<?php echo $this_answer; ?>
								<a href="javascript:void" class="bc-show-hide__hide" title="Close transcript">Close</a>
							</article><!-- // .bc-show-hide__body -->
							<hr />
							<?php } //question and answer#4 ?> 
							<?php if (strcmp($faqs['question#5'], '') !== 0 && strcmp($faqs['answer#5'], '') !== 0 ) { 
								$this_question = $faqs['question#5']; 
								$this_answer = $faqs['answer#5']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg')#close-x"></use>
									</svg>	
								</span>
							</div><!-- // .bc-show-hide__header -->
							<article class="bc-show-hide__body">
								<?php echo $this_answer; ?>
								<a href="javascript:void" class="bc-show-hide__hide" title="Close transcript">Close</a>
							</article><!-- // .bc-show-hide__body -->
							<hr />
							<?php } //question and answer#5 ?> 
							<?php if (strcmp($faqs['question#6'], '') !== 0 && strcmp($faqs['answer#6'], '') !== 0 ) { 
								$this_question = $faqs['question#6']; 
								$this_answer = $faqs['answer#6']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg')#close-x"></use>
									</svg>	
								</span>
							</div><!-- // .bc-show-hide__header -->
							<article class="bc-show-hide__body">
								<?php echo $this_answer; ?>
								<a href="javascript:void" class="bc-show-hide__hide" title="Close transcript">Close</a>
							</article><!-- // .bc-show-hide__body -->
							<hr />
							<?php } //question and answer#6 ?> 
							<?php if (strcmp($faqs['question#7'], '') !== 0 && strcmp($faqs['answer#7'], '') !== 0 ) { 
								$this_question = $faqs['question#7']; 
								$this_answer = $faqs['answer#7']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg')#close-x"></use>
									</svg>	
								</span>
							</div><!-- // .bc-show-hide__header -->
							<article class="bc-show-hide__body">
								<?php echo $this_answer; ?>
								<a href="javascript:void" class="bc-show-hide__hide" title="Close transcript">Close</a>
							</article><!-- // .bc-show-hide__body -->
							<hr />
							<?php } //question and answer#7 ?> 
							<?php if (strcmp($faqs['question#8'], '') !== 0 && strcmp($faqs['answer#8'], '') !== 0 ) { 
								$this_question = $faqs['question#8']; 
								$this_answer = $faqs['answer#8']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg')#close-x"></use>
									</svg>	
								</span>
							</div><!-- // .bc-show-hide__header -->
							<article class="bc-show-hide__body">
								<?php echo $this_answer; ?>
								<a href="javascript:void" class="bc-show-hide__hide" title="Close transcript">Close</a>
							</article><!-- // .bc-show-hide__body -->
							<hr />
							<?php } //question and answer#8 ?> 
							<?php if (strcmp($faqs['question#9'], '') !== 0 && strcmp($faqs['answer#9'], '') !== 0 ) { 
								$this_question = $faqs['question#9']; 
								$this_answer = $faqs['answer#9']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg')#close-x"></use>
									</svg>	
								</span>
							</div><!-- // .bc-show-hide__header -->
							<article class="bc-show-hide__body">
								<?php echo $this_answer; ?>
								<a href="javascript:void" class="bc-show-hide__hide" title="Close transcript">Close</a>
							</article><!-- // .bc-show-hide__body -->
							<hr />
							<?php } //question and answer#9 ?> 
							<?php if (strcmp($faqs['question#10'], '') !== 0 && strcmp($faqs['answer#10'], '') !== 0 ) { 
								$this_question = $faqs['question#10']; 
								$this_answer = $faqs['answer#10']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg')#close-x"></use>
									</svg>	
								</span>
							</div><!-- // .bc-show-hide__header -->
							<article class="bc-show-hide__body">
								<?php echo $this_answer; ?>
								<a href="javascript:void" class="bc-show-hide__hide" title="Close transcript">Close</a>
							</article><!-- // .bc-show-hide__body -->
							<hr />
							<?php } //question and answer#10 ?> 
							
						</div><!-- // .bc-show-hide -->
					</article><!-- // .bc-text-component .bc-faqs-->
					<?php }//if FAQs ?>
				</div><!-- // .bc-content-component -->
			</section><!-- // .bc-inner-page__section -->
			<?php } //if page content #2 || FAQs ?>
		</main><!-- // #main-site-content -->
		<?php
			get_footer();
		?> 