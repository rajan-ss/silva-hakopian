<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Silva_Hakopian
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div id="page" class="site-wrapper">
		<a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'silva-hakopian'); ?></a>

		<header class="site-header bg-ss-dark-blue">
			<div class="container flex justify-between py-12">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/header-logo.png" alt="Silva logo" width="198" height="67" loading="lazy">
				</figure>
				<div class="flex flex-wrap justify-end items-center gap-2 sm:space-x-4 lg::space-x-8 text-lg font-semibold leading-[1.11]">
					<a href="mailto:insurance@healthyhabit4life.com" class="flex items-center group">
						<span class="border rounded-full border-ss-pink p-1 lg:mr-[14px] group-hover:border-white transition ease-in-out duration-300">
							<span class="bg-ss-pink size-8 p-2 rounded-full flex items-center group-hover:bg-white transition ease-in-out duration-300">
								<i class="icon-mail text-white text-base group-hover:text-ss-pink transition ease-in-out duration-300"></i>
							</span>
						</span>
						<span class="text-white group-hover:text-ss-pink max-lg:hidden transition ease-in-out duration-300">insurance@healthyhabit4life.com</span>
					</a>
					<a href="tel:4422292409" class="flex items-center group">
						<span class="border rounded-full border-ss-pink p-1 lg:mr-[14px] group-hover:border-white transition ease-in-out duration-300">
							<span class="bg-ss-pink size-8 p-2 rounded-full flex items-center group-hover:bg-white transition ease-in-out duration-300">
								<i class="icon-call text-white text-base group-hover:text-ss-pink transition ease-in-out duration-300"></i>
							</span>
						</span>
						<span class="text-white group-hover:text-ss-pink max-lg:hidden transition ease-in-out duration-300">442-229-2409</span>
					</a>
					<a href="#" class="btn btn-secondary uppercase bg-white/10 text-white">
						Get a quote
					</a>
				</div>
			</div>
		</header>

		<div id="content" class="site-content">
			<section class="bg-ss-dark-blue relative">
				<div class="container py-8 sm:py-12 lg:py-16 lg:min-h-[600px]">
					<div class="text-white lg:[&_p]:mb-10 [&_p]:w-4/5 [&_h1]:mb-4 lg:w-3/5 relative lg:z-10">
						<h1>Secure The Future Of Your Family & Improve Your Health With Simple Term Vitality</h1>
						<p>Book a <a href="#" class="text-ss-pink hover:text-white">FREE 15 minute</a> consultation call with Independent Life Agent Silva Hakopian CSL # 4318303</p>
						<a href="#" class="btn btn-primary mb-4">schedule an appointment</a>
					</div>
					<figure class="lg:absolute right-0 bottom-12">
						<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/header-banner.png" alt="Hero Banner" width="778" height="500" loading="lazy">
					</figure>
				</div>
			</section>
			<div class="container py-8 sm:py-12 lg:py-16">
				<div class="inline-form rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] py-11 px-10 [&_h2]:pb-6">
					<h2>Get An Insurance Quote To Get Started!</h2>
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax=true]'); ?>
				</div>
			</div>
