<?php

/**
 * Template Name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Honey_Do_Men
 */

get_header();
?>

<section class="container">
	<div class="[&_p]:mb-0 [&_p]:opacity-70 [&_h2]:mb-5 lg:max-w-[560px]">
		<p><span class="section-tag opacity-100">Take Change</span></p>
		<h2>Making the most of your Vitality PLUS benefits</h2>
		<p>With John Hancock Vitality, you’re in control. You can participate when and how you want</p>
		<div class="my-10 space-x-6">
			<a href="" class="btn btn-primary uppercase">Book Now</a>
			<a href="tel:4422292409" class="btn btn-secondary">442-229-2409</a>
		</div>
		<div class="border-t border-primary pt-6 flex [&_p]:text-base [&_p]:leading-tight">
			<!--<div class="border-t border-primary pt-6 flex [&_p]:text-base [&_p]:leading-tight relative after:absolute after:-left-5 after:border-l after:border-primary after:h-[70px]">-->
			<div class="flex flex-col">
				<i class="icon-hand-shake"></i>
				<p>The more you engage, the more points you earn.</p>
			</div>
			<div class="flex flex-col">
				<i class="icon-document"></i>
				<p>Points determine your Vitality Status: Platinum, Gold, Silver or Bronze</p>
			</div>
			<div class="flex flex-col">
				<i class="icon-trophy"></i>
				<p>The higher your status, the greater the potential rewards!</p>
			</div>
		</div>
	</div>
</section>

<section class="py-8 md:py-12 lg:py-16">
	<div class="container text-center">
		<div class="[&_h2]:max-w-[680px] [&_h2]:mx-auto [&_h2]:pb-8 lg:[&_h2]:pb-10">
			<p class="section-tag">Find Your Reason</p>
			<h2>Top reasons to activate your membership today</h2>
		</div>
		<div class="flex flex-col sm:flex-row gap-8 md:gap-12 lg:gap-16">
			<div>
				<div class="[&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-14 [&_p]:h-14 [&_p]:mx-auto [&_p]:text-xl [&_p]:font-bold [&_p]:leading-normal [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
					<p>01</p>
				</div>
				<div class="[&_p]:opacity-70">
					<p>Rewards for your healthy choices and incentives to keep you motivated</p>
				</div>
			</div>
			<div>
				<div class="[&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-14 [&_p]:h-14 [&_p]:mx-auto [&_p]:text-xl [&_p]:font-bold [&_p]:leading-normal [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center ">
					<p>02</p>
				</div>
				<div class="[&_p]:opacity-70">
					<p>Discounts on popular brands like Starbucks, Amazon, REI & More 2</p>
				</div>
			</div>
			<div>
				<div class="[&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-14 [&_p]:h-14 [&_p]:mx-auto [&_p]:text-xl [&_p]:font-bold [&_p]:leading-normal [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
					<p>03</p>
				</div>
				<div class="[&_p]:opacity-70">
					<p>Confidence that you are taking steps to live a longer, healthier life</p>
				</div>
			</div>
			<div>
				<div class="[&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-14 [&_p]:h-14 [&_p]:mx-auto [&_p]:text-xl [&_p]:font-bold [&_p]:leading-normal [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
					<p>04</p>
				</div>
				<div class="[&_p]:opacity-70">
					<p>Discounts at the grocery store when you buy healthy foods</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-8 md:py-12 lg:py-16">
	<div class="container">
		<div class="py-10 z-10 rounded-3xl text-center bg-primary/20 relative before:absolute before:inset-0 before:bg-[url('http://work/silvahakopian.com/www/wp-content/uploads/2024/06/Cash-back-Option.png')] before:rounded-3xl before:mix-blend-color-burn before:opacity-15 before:bg-no-repeat before:bg-cover before:bg-center">
			<div class="[&_h2]:max-w-[955px] [&_h2]:mx-auto [&_h2]:pb-8">
				<p class="section-tag">Cash-back Option</p>
				<h2>100% Return Of Premium Rider On Your Life Insurance Policy</h2>
				<a href="#" class="btn btn-primary">Schedule An Appointment</a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
