<?php
	include __DIR__ . '/../php_includes/project_functions.php';
	/* Template Name: Inner page contact */ 
	get_header();
?> 
		<nav class="bc-breadcrumbs-nav bc-container" aria-label="Site breadcrumbs navigation" >
			<?php echo do_breadcrumbs(); ?>
		</nav>
		<main id="main-site-content" class="bc-inner-page">
			<section class="bc-container bc-inner-page__main-section">
				<article class="bc-text-component">
					<?php while (have_posts()) {
						the_post() ; 
						the_content();?>
					<?php } ?>
				</article><!-- // .bc-text-component -->
				<article class="bc-text-component">
				<?php $contact_post = new WP_Query(array(
						'post_type' => 'contactinfo',
						'numberposts' => 1
					));	 
					// /var_dump($contact_post);
					if ($contact_post->have_posts()) {
						while ($contact_post->have_posts()) {
							$contact_post->the_post(); 
							if (get_field('contact-address')) { ?>
							<h2>Address</h2>
							<p><?php the_field('contact-address'); ?></p>
							<? } //end if contact-address ?>
							<?php if (get_field('contact-address')) { ?>
							<p><a href="tel:<?php the_field('contact-phone-number') ?>"><?php the_field('contact-phone-number') ?></a></p>	
							<?php }// end if contact-phone-number ?>
							<div class="bc-object-embed is-16x9">
								<?php if (get_field('contact-map')) { 	
									the_field('contact-map'); 
								}// end if contact-map ?>
							</div>
				<?php	}//end while $contact_post
					}//end if $contact_posts
					wp_reset_postdata(); 	?>
				</article><!-- // .bc-text-component -->
			</section><!-- // . bc-inner-page__main-->
		</main><!-- // #main-site-content -->
		<?php
			get_footer();
		?> 
		