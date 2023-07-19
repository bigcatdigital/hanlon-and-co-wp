<!DOCTYPE html>
<html class="bc-page-loading " lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="Family Law is difficult. We work with through your diorce and separation to get the best, secure outcome for your family including and helping you with financial and legal challenges which may come up." />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head() ?>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
	<!-- <noscript><link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet"></noscript> -->
	<!-- <link rel="preload" href="./assets/css/vendor/flickity.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
	<!-- <noscript><link rel="stylesheet" href="./assets/css/vendor/flickity.min.css"></noscript> -->
	<!-- <link rel="preload" href="./assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'"> -->
	<!-- <noscript><link rel="stylesheet" href="./assets/css/style.css"></noscript> -->
	<script>!function(n){"use strict";n.loadCSS||(n.loadCSS=function(){});var o=loadCSS.relpreload={};if(o.support=function(){var e;try{e=n.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),o.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.addEventListener?t.removeEventListener("load",a):t.attachEvent&&t.detachEvent("onload",a),t.setAttribute("onload",null),t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},o.poly=function(){if(!o.support())for(var t=n.document.getElementsByTagName("link"),e=0;e<t.length;e++){var a=t[e];"preload"!==a.rel||"style"!==a.getAttribute("as")||a.getAttribute("data-loadcss")||(a.setAttribute("data-loadcss",!0),o.bindMediaToggle(a))}},!o.support()){o.poly();var t=n.setInterval(o.poly,500);n.addEventListener?n.addEventListener("load",function(){o.poly(),n.clearInterval(t)}):n.attachEvent&&n.attachEvent("onload",function(){o.poly(),n.clearInterval(t)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:n.loadCSS=loadCSS}("undefined"!=typeof global?global:this);</script>
</head>  

<body>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E0X22Q6CJ7"></script>
	<script>
		console.log('Header cookies consent check');
		//window['ga-disable-G-E0X22Q6CJ7'] = true;
		/* Analytics gtag object */
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-E0X22Q6CJ7'); 
		let cookiesPreferences = document.cookie.split('; ').find((row) => {
			return row.startsWith('bc-cookies-preferences');
		}); 
		console.log(`Cookeis preferences: ${cookiesPreferences}`);
		cookiesPreferences = (cookiesPreferences) ? cookiesPreferences.split('=')[1] : undefined ;
		console.log(`Cookeis preferences:  ${cookiesPreferences}`);
		if (cookiesPreferences === 'submitted') {
			const gaAnalytics = document.cookie.split('; ').find((row) => {
				return row.startsWith('bc-ga-analytics');
			}).split('=')[1]; 
			
			if (gaAnalytics === 'denied') {
				console.log(`Do consent not granted`);
				gtag('consent', 'update', {
					'analytics_storage': 'denied'
				});

			} else {
				console.log(`Do consent granted`);
				gtag('consent', 'update', {
					'analytics_storage': 'default'
				});
			}
			const gaAdStorage = document.cookie.split('; ').find((row) => {
				return row.startsWith('bc-google-ad-storage');
			}).split('=')[1]; 
			if (gaAdStorage === 'denied') {
				gtag('consent', 'update', {
					'ad_storage': 'denied'
				});
			} else {
				gtag('consent', 'update', {
					'ad_storage': 'granted'
				});
			}
			let theBody = document.querySelector('html');
			theBody.classList.remove('bc-cookies-not-set');	
			theBody.classList.remove('bc-modal-visible');	
		} else {
			gtag('consent', 'default', {
				'ad_storage': 'denied',
				'analytics_storage': 'denied'
			});
			let theBody = document.querySelector('html');
			window.setTimeout(() => {
				theBody.classList.add('bc-cookies-not-set');	
				theBody.classList.add('bc-modal-visible');	
			}, 0);
		}
	</script>
<div class="bc-body-wrap">
	<nav class="bc-is-hidden" aria-label="Skip to main content link">
		<a href="#main-site-content" title="Skip site menu, go to to main site content"></a>	
	</nav>
	<header class="bc-site-header bc-container">
		<a title="Site hompepage " class="bc-site-header__home-link bc-site-logo" href="<?php echo site_url(); ?>">
			Hanlon <span>&amp;</span> Co. 
		</a>
		<a href="#main-site-content" class="bc-site-header__menu-skip bc-is-hidden" title="Skip site menu, to main site content"></a>
		<div class="bc-site-header__nav-icons">
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'cn-en-navigation'
				));
			?>
			<a href="javascript:void(0)" aria-hidden="true" class="bc-site-header__menu-link" title="Site Menu">
				<svg class="svg-icon bc-site-header__menu-link__menu ">
					<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#menu-thin"></use>
				</svg>
				<svg class="svg-icon bc-site-header__menu-link__close ">
					<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
				</svg>
			</a>
		</div><!-- // .bc-site-header__nav-icons -->
		
		<div aria-label="Main site navigation" class="bc-site-header__main-navigation ">
			<hr />
			<div class="bc-site-header__main-navigation-wrap bc-content-component--text">
				<?php 
					wp_nav_menu(array(
						'theme_location' => 'main-navigation'
					));
				?>
				<div id="show-hide-wrap" class="bc-show-hide-icon__wrap" style="display: none;">
					<svg class="svg-icon bc-show-hide-icon bc-show-hide-icon__show">
						<use xlink:href="<?php echo get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') ?>#close-x"></use>
					</svg>	
				</div>
				<script>
					const mainNav = document.querySelector('#menu-main-site-navigation');
					const navLis = mainNav.querySelectorAll('li');
					navLis.forEach((navLi) =>  {
						if (navLi.querySelector('ul')) {
							const subMenu = navLi.querySelector('ul');
							const showHideWrap = document.querySelector('#show-hide-wrap');
							const newShowHideWrap = showHideWrap.cloneNode('deep');
							newShowHideWrap.removeAttribute('id');
							newShowHideWrap.setAttribute('style', '');
							const navLiLink = navLi.querySelector('a');
							navLiLink.appendChild(newShowHideWrap);
							navLiLink.classList.add('bc-show-hide__header', 'bc-show-hide__toggle');

							subMenu.style.maxHeight = 0;
							subMenu.classList.add('bc-show-hide__body');
							navLi.classList.add('bc-show-hide');
						}
					});
				</script>
			</div><!-- // .bc-site-header__main-navigation-wrap -->
		</div><!-- // .bc-site-header__main-navigation  -->
	</header><!-- // .bc-site-header -->