<?php
	include __DIR__ . '/../php_includes/project_functions.php';
	/* Template Name: Inner page contact */ 
	get_header();
?> 
		<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
			<?php echo do_breadcrumbs(); ?>
		</nav>
		<main id="main-site-content" class="bc-inner-page bc-inner-page--simple" data-page-template="bc-inner-page-simple">
		<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
				<?php echo do_breadcrumbs(); ?>
			</nav>
			<section class="bc-container bc-inner-page__section bc-inner-page__main-section bc-has-border-rad-next">
				<article class="bc-content-component">
					<div class="bc-text-component "> 
						<div class="bc-feature-header__col">
						<?php while (have_posts()) {
								the_post() ; ?>	
							<h1><?php the_title(); ?></h1>	
							<?php the_content();  
							}//end while have_posts() 
							wp_reset_postdata(); ?>
						</div><!-- // .bc-feature-header__col -->
					</div><!-- // .bc-text-component -->
				</article><!-- // .bc-inner-page-heading -->
				<article class="bc-text-component">
				<?php $contact_post = new WP_Query(array(
						'post_type' => 'contactinfo',
						'numberposts' => 1 ));	 
						if ($contact_post->have_posts()) {
							while ($contact_post->have_posts()) {
								$contact_post->the_post(); 
								if (get_field('contact-address')) { ?>
							<h2>Address</h2>
							<p><?php echo get_field('contact-address'); ?></p>
							<? } //end if contact-address ?>
							<?php if (get_field('contact-phone-number')) { ?>
							<p><a href="tel:<?php the_field('contact-phone-number'); ?>"><?php the_field('contact-phone-number'); ?></a></p>	
							<?php }// end if contact-phone-number ?>
							<?php if (get_field('contact-map')) { ?>
							<h2>Get directions</h2>
							<br />
							<div class="bc-object-embed is-16x9">	
								<?php the_field('contact-map'); ?>
							</div>
							<?php }// end if contact-map ?>
				<?php }//end while $contact_post
					}//end if $contact_posts 
					wp_reset_postdata() ;?>
				</article><!-- // .bc-text-component -->
			</section><!-- // .bc-inner-page__section -->
		</main><!-- // #main-site-content -->
<?php get_footer(); ?> 