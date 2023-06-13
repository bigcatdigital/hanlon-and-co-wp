<?php
	/* Template Name: About page template */ 
	include __DIR__ . '/../php_includes/project_functions.php';
	get_header();
?> 
		<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
			<?php echo do_breadcrumbs(); ?>
		</nav>
		<main id="main-site-content" class="bc-inner-page bc-about-us">
			<section class="bc-container bc-inner-page__section">
			<?php if (get_field('page-leader')) { 
					$page_leader = get_field('page-leader'); ?>
				<!-- Page leader -->
				<article class="bc-content-component bc-inner-page-heading">
					<div class="bc-text-component "> 
						<div class="bc-feature-header__col">
							<h1 class="bc-inner-page-heading__heading">
								<?php the_title(); ?>
							</h1>
						<?php if ($page_leader['leader-text']) { ?>
							<p class="bc-intro-paragraph"><?php echo $page_leader['leader-text'] ?></p>
						<?php } //get leader-text ?>
						<?php if ($page_leader['in-page-links'] && strcmp($page_leader['in-page-links'], '') !== 0) {
							echo $page_leader['in-page-links'] ; 
						} // end if in-page-links ?>
						</div><!-- // .bc-feature-header__col -->
					</div><!-- // .bc-text-component -->
				</article><!-- // .bc-inner-page-heading -->
					<?php if ($page_leader['leader-image']) {
					$leader_image = $page_leader['leader-image']; ?>
				<div class="bc-content-component--media-padded bc-inner-page__feature-image">
					<div class="bc-object-embed bc-media-embed--placeholder">
						<img src="<?php echo $leader_image['url'] ?>" alt="<?php echo $leader_image['alt'] ?>">
					</div>
				</div><!-- // .bc-inner-page__feature-image -->
					<?php } else { ?>
					<div class="bc-text-component bc-inner-page-hr">
						<hr>
					</div>
					<?php } // end if else get page-leader ?>
				<!-- // Page leader -->
				<?php } // end if get page-leader ?>

				<?php if (get_field('page-content#1')) { ?>
					<article class="bc-content-component">
						<div class="bc-text-component">
							<?php echo get_field('page-content#1'); ?>
						</div><!-- // .bc-text-component -->
					</article><!-- // .bc-content-component -->
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
			<?php if ((get_field('faqs') && !empty(get_field('faqs')))) {
				$faqs = get_field('faqs'); 
				if ($faqs['question#1'] && strcmp($faqs['question#1'], '') !== 0) { ?>
				<!-- FAQs -->
			<section class="bc-container bc-inner-page__section bc-faqs">
					<article class="bc-text-component ">
						<?php if ($faqs['header']) { ?>
							<h1><?php echo $faqs['header']; ?> </h1>
						<?php }//end faqs header ?>
						<?php if ($faqs['intro-text']) { 
							echo $faqs['intro-text'];
						}// end if faqs intro  ?>
						<div class="bc-show-hide"> 
							<?php if (strcmp($faqs['question#1'], '') !== 0 && strcmp($faqs['answer#1'], '') !== 0 ) { 
								$this_question = $faqs['question#1']; 
								$this_answer = $faqs['answer#1']; 
							?>
							<div class="bc-show-hide__header bc-show-hide__toggle" title="Click to show the block body">
								<h3><a href="javascript:void(0)" class="" ><?php echo $this_question; ?></a></h3>
								<span class="bc-show-hide-icon__wrap">
									<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
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
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
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
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
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
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
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
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
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
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
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
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
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
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
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
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
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
										<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
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
				</div><!-- // .bc-content-component -->
			</section>
			<!-- // FAQs -->
			<?php } //end if FAQs question#1 
				}//if FAQs ?>
		</main><!-- // #main-site-content -->
		<div class="bc-section-hrs--reversed .bc-bg-shade-f0"></div><!-- // .bc-section-hrs -->
		<?php
			get_footer();
		?> 