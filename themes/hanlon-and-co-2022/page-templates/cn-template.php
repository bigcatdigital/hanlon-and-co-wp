<?php
	include __DIR__ . '/../php_includes/project_functions.php';
	/* Template Name: Chinese page template */ 
	get_header('cn-header');
	/* Check if FAQs are used */
	if ((get_field('faqs') && !empty(get_field('faqs')))) {
		$faqs = get_field('faqs'); 
		if ($faqs['question#1'] && strcmp($faqs['question#1'], '') !== 0) {
			$faqs_present = true;
		}
	}
?> 
		<main id="main-site-content" class="bc-inner-page" data-page-template="bc-inner-page">
			<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
				<?php echo do_breadcrumbs(); ?>
			</nav>
			<section class="bc-container bc-inner-page__section bc-inner-page__main-section <?php echo  (!$faqs_present) ? 'bc-has-border-rad-next' : '' ; ?> ">
				<?php if (get_field('page-leader')) { 
					$page_leader = get_field('page-leader'); ?>
				<!-- Page leader -->
				<article class="bc-content-component bc-inner-page-heading bc-has-border-rad-next">
					<div class="bc-text-component "> 
						<div class="bc-feature-header__col">
							<h1 class="bc-inner-page-heading__heading">
								<?php the_title(); ?>
							</h1>
						<?php if ($page_leader['leader-text']) { ?>
							<p class="bc-intro-paragraph"><?php echo $page_leader['leader-text'] ?></p>
						<?php } //get leader-text ?>
						</div><!-- // .bc-feature-header__col -->
					</div><!-- // .bc-text-component -->
				</article><!-- // .bc-inner-page-heading -->
			
				<?php if ($page_leader['leader-image']) {
					$page_leader_img_present = true;
					$leader_image = $page_leader['leader-image']; ?>
				<div class="bc-has-border-rad__wrap"> 
					<div class="bc-content-component--media-padded bc-inner-page__feature-image bc-has-border-rad bc-has-ampersand--minor">
						<svg id="ampersand-disc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
							<title>Hanlon and Co logo mark</title>
							<circle id="disk" class="cls-1" cx="50" cy="50" r="50"></circle>
							<path id="ampersand" class="cls-2" d="M79,35.52a8.58,8.58,0,0,0-3-6.92,11.89,11.89,0,0,0-8-2.5c-3,0-5.14.55-6.59,1.65a5.3,5.3,0,0,0-2.18,4.45A4.46,4.46,0,0,0,61,35.84a6.86,6.86,0,0,0,4.51,1.36A7.43,7.43,0,0,0,70,36a4.13,4.13,0,0,0,1.69-3.57,4.54,4.54,0,0,0-1-2.83,6.51,6.51,0,0,0-3-2,14,14,0,0,1,1.76-.13,8.63,8.63,0,0,1,5,1.52,4.62,4.62,0,0,1,2.21,3.93q0,2.73-3.09,4.13a40.07,40.07,0,0,1-9.45,2.43l-3,.46c-.56.13-1.45.28-2.66.45q-8.83,1.3-13.51,4.48a10.35,10.35,0,0,0-4.67,9.1,7.78,7.78,0,0,0,3,6.52,12.25,12.25,0,0,0,7.76,2.31,15.64,15.64,0,0,0,7.5-1.49,4.94,4.94,0,0,0,2.7-4.62A4.51,4.51,0,0,0,59.55,53a6.74,6.74,0,0,0-4.45-1.34,7.63,7.63,0,0,0-4.55,1.27,4.17,4.17,0,0,0-1.75,3.6,4.77,4.77,0,0,0,3.44,4.88,16,16,0,0,1-1.75.13A9.73,9.73,0,0,1,45.1,60a4.38,4.38,0,0,1-2.34-3.77q0-2.52,3.18-4a48.88,48.88,0,0,1,10.52-2.72l4.68-.78L65.49,48a6,6,0,0,1,2.4,3.15,13.37,13.37,0,0,1,.52,3.8,7.72,7.72,0,0,1-2.76,6,17.7,17.7,0,0,1-7,3.7A30.75,30.75,0,0,1,50,65.85q-9.87,0-14.91-2.8a9.43,9.43,0,0,1-5-8.89,11.25,11.25,0,0,1,1.49-5.95,15.62,15.62,0,0,1,4.35-4.45,6.22,6.22,0,0,0,3.77,1.82,2.11,2.11,0,0,0,1.3-.39,1.22,1.22,0,0,0,.52-1,1.74,1.74,0,0,0-.59-1.36,2.43,2.43,0,0,0-1.68-.52,13.73,13.73,0,0,0-3.38.59,10.06,10.06,0,0,1-2-6.11q0-4.41,2.4-6.72a8.45,8.45,0,0,1,6.1-2.31,11.77,11.77,0,0,1,3.84.52,6.15,6.15,0,0,0-3.35,2.05,5.15,5.15,0,0,0-1.27,3.34A4,4,0,0,0,43.08,37a6.53,6.53,0,0,0,4,1.17,6.6,6.6,0,0,0,4.19-1.36A4.34,4.34,0,0,0,53,33.24a5,5,0,0,0-1.46-3.7,8.85,8.85,0,0,0-3.48-2.08,17.43,17.43,0,0,0-2.85-.68,27.17,27.17,0,0,0-3.9-.23,25.58,25.58,0,0,0-6.63.88,13.36,13.36,0,0,0-5.42,2.79,6.32,6.32,0,0,0-2.17,5,6.17,6.17,0,0,0,2.14,4.91A18.35,18.35,0,0,0,35,43.25a27.12,27.12,0,0,0-5.87,2.24,17,17,0,0,0-5.62,4.67A11.72,11.72,0,0,0,21,57.73a13.13,13.13,0,0,0,3,8.64A19,19,0,0,0,32.85,72a44,44,0,0,0,13.93,2,36.74,36.74,0,0,0,12.51-2,19.55,19.55,0,0,0,8.57-5.65A12.86,12.86,0,0,0,71,57.73a14.63,14.63,0,0,0-1.21-6,8.82,8.82,0,0,0-3.21-4q6.16-1.5,9.32-4.42A10.13,10.13,0,0,0,79,35.52Z"></path>
						</svg>
						<svg id="border-radius-top-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
							<defs>
								<style>.cls-1{fill:none;}</style>
							</defs>
							<title>top-right-radius</title>
							<path id="border-radius__curve" class="cls-1" d="M99.85,0c0,.51,0,1,0,1.51A98.49,98.49,0,0,1,1.4,100H100V0ZM0,100H1.4c-.47,0-.93,0-1.4,0Z"/>
						</svg>
						<div class="bc-object-embed bc-media-embed--placeholder">
							<img src="<?php echo $leader_image['url'] ?>" alt="<?php echo $leader_image['alt'] ?>">
						</div>
					</div><!-- // .bc-inner-page__feature-image -->
				<?php } // end if else get page-leader-image ?>
				<!-- // Page leader -->
				<?php } // end if get page-leader ?>
				<?php if (get_field('page-content#1')) { ?>
					<?php if (!$page_leader_img_present) { ?>
				<div class="bc-has-border-rad__wrap">	
					<div class="bc-content-component bc-has-border-rad bc-has-ampersand">
						<svg id="ampersand-disc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
							<title>Hanlon and Co logo mark</title>
							<circle id="disk" class="cls-1" cx="50" cy="50" r="50"></circle>
							<path id="ampersand" class="cls-2" d="M79,35.52a8.58,8.58,0,0,0-3-6.92,11.89,11.89,0,0,0-8-2.5c-3,0-5.14.55-6.59,1.65a5.3,5.3,0,0,0-2.18,4.45A4.46,4.46,0,0,0,61,35.84a6.86,6.86,0,0,0,4.51,1.36A7.43,7.43,0,0,0,70,36a4.13,4.13,0,0,0,1.69-3.57,4.54,4.54,0,0,0-1-2.83,6.51,6.51,0,0,0-3-2,14,14,0,0,1,1.76-.13,8.63,8.63,0,0,1,5,1.52,4.62,4.62,0,0,1,2.21,3.93q0,2.73-3.09,4.13a40.07,40.07,0,0,1-9.45,2.43l-3,.46c-.56.13-1.45.28-2.66.45q-8.83,1.3-13.51,4.48a10.35,10.35,0,0,0-4.67,9.1,7.78,7.78,0,0,0,3,6.52,12.25,12.25,0,0,0,7.76,2.31,15.64,15.64,0,0,0,7.5-1.49,4.94,4.94,0,0,0,2.7-4.62A4.51,4.51,0,0,0,59.55,53a6.74,6.74,0,0,0-4.45-1.34,7.63,7.63,0,0,0-4.55,1.27,4.17,4.17,0,0,0-1.75,3.6,4.77,4.77,0,0,0,3.44,4.88,16,16,0,0,1-1.75.13A9.73,9.73,0,0,1,45.1,60a4.38,4.38,0,0,1-2.34-3.77q0-2.52,3.18-4a48.88,48.88,0,0,1,10.52-2.72l4.68-.78L65.49,48a6,6,0,0,1,2.4,3.15,13.37,13.37,0,0,1,.52,3.8,7.72,7.72,0,0,1-2.76,6,17.7,17.7,0,0,1-7,3.7A30.75,30.75,0,0,1,50,65.85q-9.87,0-14.91-2.8a9.43,9.43,0,0,1-5-8.89,11.25,11.25,0,0,1,1.49-5.95,15.62,15.62,0,0,1,4.35-4.45,6.22,6.22,0,0,0,3.77,1.82,2.11,2.11,0,0,0,1.3-.39,1.22,1.22,0,0,0,.52-1,1.74,1.74,0,0,0-.59-1.36,2.43,2.43,0,0,0-1.68-.52,13.73,13.73,0,0,0-3.38.59,10.06,10.06,0,0,1-2-6.11q0-4.41,2.4-6.72a8.45,8.45,0,0,1,6.1-2.31,11.77,11.77,0,0,1,3.84.52,6.15,6.15,0,0,0-3.35,2.05,5.15,5.15,0,0,0-1.27,3.34A4,4,0,0,0,43.08,37a6.53,6.53,0,0,0,4,1.17,6.6,6.6,0,0,0,4.19-1.36A4.34,4.34,0,0,0,53,33.24a5,5,0,0,0-1.46-3.7,8.85,8.85,0,0,0-3.48-2.08,17.43,17.43,0,0,0-2.85-.68,27.17,27.17,0,0,0-3.9-.23,25.58,25.58,0,0,0-6.63.88,13.36,13.36,0,0,0-5.42,2.79,6.32,6.32,0,0,0-2.17,5,6.17,6.17,0,0,0,2.14,4.91A18.35,18.35,0,0,0,35,43.25a27.12,27.12,0,0,0-5.87,2.24,17,17,0,0,0-5.62,4.67A11.72,11.72,0,0,0,21,57.73a13.13,13.13,0,0,0,3,8.64A19,19,0,0,0,32.85,72a44,44,0,0,0,13.93,2,36.74,36.74,0,0,0,12.51-2,19.55,19.55,0,0,0,8.57-5.65A12.86,12.86,0,0,0,71,57.73a14.63,14.63,0,0,0-1.21-6,8.82,8.82,0,0,0-3.21-4q6.16-1.5,9.32-4.42A10.13,10.13,0,0,0,79,35.52Z"></path>
						</svg>
						<svg id="border-radius-top-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
							<defs>
								<style>.cls-1{fill:none;}</style>
							</defs>
							<title>top-right-radius</title>
							<path id="border-radius__curve" class="cls-1" d="M99.85,0c0,.51,0,1,0,1.51A98.49,98.49,0,0,1,1.4,100H100V0ZM0,100H1.4c-.47,0-.93,0-1.4,0Z"/>
						</svg>
					<?php } else { ?>
						<div class="bc-content-component">
					<?php }// if else not page leader image present ?>
					<article class="bc-text-component">
						<?php echo get_field('page-content#1'); ?>
					</article><!-- // .bc-text-component -->
				</div><!-- // .bc-content-component -->
				<?php }// end if get page-content#1 ?> 
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
				<div class="bc-content-component--text">
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
				<?php if (get_field('page-content#2')) { ?>
				<!-- Page content #2 -->
				<div class="bc-content-component">
					<article class="bc-text-component">
						<?php the_field('page-content#2') ?>
					</article><!-- // .bc-text-component-->	
				</div><!-- // .bc-content-component -->
				<!-- // Page content #2 -->
				<?php }//end if page-content#2 ?>
			</div> <!-- // .bc-has-border-rad__wrap -->
			</section><!-- // . bc-inner-page__section-->
			<?php if ((get_field('faqs') && !empty(get_field('faqs')))) {
				$faqs = get_field('faqs'); 
				if ($faqs['question#1'] && strcmp($faqs['question#1'], '') !== 0) { ?>
				<!-- FAQs -->
			<div class="bc-text-component bc-inner-page-hr">
				<hr>
			</div>
			<section class="bc-container bc-inner-page__section bc-faqs ">
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
			<?php if (get_field('get-testimonials')) {
				$testimonial_types = get_field('testimonial-type');
				$testimonial_language = get_field('testimonial-language');
				$post_type = 'clienttestimonial'; 
				$testimonials_posts = new WP_Query(array(
					'post_type' => $post_type,
					'posts_per_page' => -1,
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
			<div class="bc-has-border-rad__wrap bc-testimonials bc-aop-tesitimonials">
				<section class="bc-container bc-testimonials" aria-label="Flickity text slider">
					<svg id="border-radius-top-right" class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
						<defs>
							<style>.cls-1{fill:none;}</style>
						</defs>
						<title>top-right-radius</title>
						<path id="border-radius__curve" class="cls-1" d="M99.85,0c0,.51,0,1,0,1.51A98.49,98.49,0,0,1,1.4,100H100V0ZM0,100H1.4c-.47,0-.93,0-1.4,0Z"/>
					</svg>
					<div class="bc-content-component--text">
						<h1 class="bc-content-label"><?php echo (count($testimonial_types) === 1) ? '<strong>' . ucfirst(the_field('testimonial-type')) . '</strong> / testimonials' : 'Testimonials'  ?></h1> 
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
								
								<!-- <span class="bc-testimonials__attribution"><?php echo "&mdash; " . ucfirst(the_field('testimonial-category')); ?></span></p> -->
							<?php } ?>
						</article><!-- // .bc-card bc-card--plain-text -->
						<?php } //end while have_posts ?>
					</div><!-- //.bc-flickity -->
				</section><!-- // Flickity text slider -->
			</div><!-- //	.bc-has-border-rad__wrap -->
				<?php }//end if have_posts()
							wp_reset_postdata();  
						}// end if get-testimonials?> 
		</main><!-- // #main-site-content -->
		<?php
			get_footer('cn-footer');
		?> 