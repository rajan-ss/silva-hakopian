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

<section class="container xl:py-32">
	<div class="flex justify-between space-y-4 max-lg:flex-col">
		<div class="flex flex-row justify-center items-end max-sm:relative max-sm:pt-24 max-sm:pb-20 w-full h-full lg:max-w-[611px] max-lg:mb-5 lg:mr-8 xl:mr-0">
			<div class="flex flex-col h-full justify-between max-sm:pb-14">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/happy-family.png" alt="Happy Family" width="431" height="450" loading="lazy">
				</figure>
				<div class="flex flex-row-reverse justify-end items-center max-sm:absolute bottom-0 left-1/2 max-sm:-translate-x-1/2 pt-[18px] pb-[10px] sm:pr-[14px] [&amp;_p]:text-sm [&amp;_p]:leading-[1.14] [&amp;_p]:mb-0 lg:-mr-12 xl:mr-0">
					<p>
						<span class="font-lead font-semibold leading-[1.1] text-lg">
							2500+
						</span><br>
						Happy Clients
					</p>
					<div class="flex ml-[18px]">
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/client-4.png" alt="Client 4" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/client-3.png" alt="Client 3" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/client-2.png" alt="Client 2" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/client-1.png" alt="Client 1" width="52" height="52" loading="lazy">
						</figure>
					</div>
				</div>
			</div>
			<div class="flex flex-col items-end h-full -ml-[145px]">
				<div class="flex items-center max-w-[218px] mb-4 sm:mb-8 max-sm:absolute -top-3 left-1/2 max-sm:-translate-x-1/2 bg-white px-5 py-4 rounded-xl shadow-[0_4px_24px_0] shadow-[#1c3a4f1a]">
					<span class="font-bold text-[54px] text-primary mr-4 leading-[1.11]">160</span>
					<span class="font-medium text-xl leading-[1.1]">Years of Service</span>
				</div>
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/take-change-1.png" alt="Take Change" width="325" height="372" loading="lazy">
				</figure>
			</div>
		</div>
		<div class="[&_p]:mb-0 [&_p]:opacity-70 [&_h2]:mb-5 lg:max-w-[560px]">
			<p><span class="section-tag opacity-100">Take Change</span></p>
			<h2>Making the most of your Vitality PLUS benefits</h2>
			<p>With John Hancock Vitality, you’re in control. You can participate when and how you want</p>
			<div class="my-10 space-x-3 lg:space-x-6">
				<a href="#" class="btn btn-primary uppercase">Book Now</a>
				<a href="tel:4422292409" class="btn btn-secondary">442-229-2409</a>
			</div>
			<ul class="border-t border-primary pt-6 pl-0 list-none flex [&_p]:text-base [&_p]:leading-tight [&_i]:text-4xl [&_i]:text-ss-pale max-sm:flex-col sm:space-x-10 lg:space-y-0 *:mt-0 *:relative *:after:absolute *:after:-left-5 *:after:top-1/2 *:after:-translate-y-1/2 *:after:border-l *:after:border-primary *:after:h-[70px] first:[&_li]:after:hidden max-sm:*:after:hidden">
				<!--<div class="border-t border-primary pt-6 flex [&_p]:text-base [&_p]:leading-tight relative after:absolute after:-left-5 after:border-l after:border-primary after:h-[70px]">-->
				<li class="flex sm:flex-col gap-[10px] max-sm:items-center">
					<i class="icon-connect"></i>
					<p>The more you engage, the more points you earn.</p>
				</li>
				<li class="flex sm:flex-col gap-[10px] max-sm:items-center">
					<i class="icon-documents"></i>
					<p>Points determine your Vitality Status: Platinum, Gold, Silver or Bronze</p>
				</li>
				<li class="flex sm:flex-col gap-[10px] max-sm:items-center">
					<i class="icon-trophy"></i>
					<p>The higher your status, the greater the potential rewards!</p>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--Take change section-->

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

<section class="py-8 md:py-12 lg:py-16">
	<div class="container">
		<div class="text-center lg:text-start">
			<p class="section-tag">Why Insurance</p>
			<div class="flex flex-col lg:flex-row lg:justify-between justify-center items-center pb-9">
				<h2>Why Simple Term With Vitality Program?</h2>
				<a href="tel:1-800-678-8078" class="btn btn-secondary flex items-center gap-3"><i class="icon-call text-primary text-xl"></i>1-800-678-8078</a>
			</div>
		</div>
		<div class="flex flex-col lg:flex-row gap-8 lg:gap-11 items-center">
			<figure class="[&_img]:rounded-3xl [&_img]:w-full [&_img]:h-full lg:w-1/2">
				<img src="http://work/silvahakopian.com/www/wp-content/uploads/2024/06/close-up-young-colleagues-having-meeting.jpg" alt="close-up-young-colleagues-having-meeting" width="570" height="420" loading="lazy">
			</figure>
			<div class="lg:w-1/2">
				<div class="flex flex-row gap-3 items-center justify-center lg:justify-start bottom-0 left-1/2 pb-5 sm:pr-[14px] lg:-mr-12 xl:mr-0">
					<div class="flex ml-[18px]">
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/Ellipse-Image-4.png" alt="Client 4" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/Ellipse-Image-3.png" alt="Client 3" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/Ellipse-Image-2.png" alt="Client 2" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/Ellipse-Image-1.png" alt="Client 1" width="52" height="52" loading="lazy">
						</figure>
					</div>
					<div class="[&_p]:leading-[0.88] [&_p]:mb-0">
						<p>
							<span class="font-bold leading-[0.83] text-2xl opacity-100">
								40K+
							</span>Insured people
						</p>
					</div>
				</div>
				<div class="[&_p]:opacity-70 border-b border-ss-dark-blue/10 pb-6">
					<p>
						We are delivering on our promise to help our members live longer and healthier lives with John Hancock Vitality – a life insurance solution that offers financial protection, savings off the cost of coverage, and rewards for making healthy choices
					</p>
				</div>

				<div class="[&_p]:opacity-70 flex sm:flex-row flex-col pt-6">
					<ul class="[&_li]:flex [&_li]:flex-row [&_li]:items-start [&_li]:gap-[18px] [&_p]:m-0">
						<li>
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							<p>
								90% of members are realizing financial benefits
							</p>
						</li>
						<li>
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							<p>
								81% say Vitality has positively impacted their life.
							</p>
						</li>
					</ul>
					<ul class="[&_li]:flex [&_li]:flex-row [&_li]:items-start [&_li]:gap-[18px] [&_p]:m-0">
						<li>
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							<p>
								30% are reaching Platinum (the highest reward status)1
							</p>
						</li>
						<li>
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							<p>
								$8.4M in rewards earned
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-primary/10 py-12 md:py-16 lg:py-20">
	<div class="container flex flex-col lg:flex-row gap-12">
		<div class="lg:w-1/2">
			<div class="text-center lg:text-start">
				<p class="section-tag">Benefits</p>
				<h2>Feel Confident With John Hancock Vitality Term</h2>
			</div>
			<div class="accordion">
				<div class="transition rounded-xl">
					<!-- header -->
					<div class="accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full h-10 w-10 [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
							<p>01</p>
						</div>
						<h3>Savings and rewards for healthy living</h3>
					</div>
					<div class="accordion-content px-6 pt-0 overflow-hidden max-h-0 rounded-b-xl [&_p]:pl-9 [&_p]:opacity-70">
						<p>
							Your clients’ policy wil l automatical ly include the John Hancock Vitality PLUS program, which means they can earn premium savings and rewards for the everyday steps they take to live healthy.
						</p>
					</div>
				</div>
				<div class="transition rounded-xl">
					<!-- header -->
					<div class="accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full h-10 w-10 [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
							<p>02</p>
						</div>
						<h3>Guaranteed conversion feature</h3>
					</div>
					<div class="accordion-content px-6 pt-0 overflow-hidden max-h-0 rounded-b-xl [&_p]:pl-9 [&_p]:opacity-70">
						<p>
							Your clients’ policy wil l automatical ly include the John Hancock Vitality PLUS program, which means they can earn premium savings and rewards for the everyday steps they take to live healthy.
						</p>
					</div>
				</div>
				<div class="transition rounded-xl">
					<!-- header -->
					<div class="accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full h-10 w-10 [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
							<p>03</p>
						</div>
						<h3>Extra financial protection to meet the unexpected</h3>
					</div>
					<div class="accordion-content px-6 pt-0 overflow-hidden max-h-0 rounded-b-xl [&_p]:pl-9 [&_p]:opacity-70">
						<p>
							Your clients’ policy wil l automatical ly include the John Hancock Vitality PLUS program, which means they can earn premium savings and rewards for the everyday steps they take to live healthy.
						</p>
					</div>
				</div>
				<div class="transition rounded-xl">
					<!-- header -->
					<div class="accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full h-10 w-10 [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
							<p>04</p>
						</div>
						<h3>Cost-effective coverage for fixed period of time</h3>
					</div>
					<div class="accordion-content px-6 pt-0 overflow-hidden max-h-0 rounded-b-xl [&_p]:pl-9 [&_p]:opacity-70">
						<p>
							Your clients’ policy wil l automatical ly include the John Hancock Vitality PLUS program, which means they can earn premium savings and rewards for the everyday steps they take to live healthy.
						</p>
					</div>
				</div>
				<div class="transition rounded-xl">
					<!-- header -->
					<div class="accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full h-10 w-10 [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
							<p>05</p>
						</div>
						<h3>Simplified Vitality experience</h3>
					</div>
					<div class="accordion-content px-6 pt-0 overflow-hidden max-h-0 rounded-b-xl [&_p]:pl-9 [&_p]:opacity-70">
						<p>
							Your clients’ policy wil l automatical ly include the John Hancock Vitality PLUS program, which means they can earn premium savings and rewards for the everyday steps they take to live healthy.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="flex flex-row-reverse justify-center gap-5 lg:w-1/2">
			<figure class="[&_img]:rounded-2xl">
			<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/Benefits-3.jpg" alt="Benefits-3" width="280" height="465" loading="lazy">
			</figure>
			<div class="flex flex-col items-center gap-5 sm:-mr-12">
				<figure class="[&_img]:rounded-2xl">
				<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/Benefits-1.jpg" alt="Benefits-1" width="242" height="277" loading="lazy">
				</figure>
				<figure class="[&_img]:rounded-2xl">
				<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/authentic-small-youthful-marketing-agency.jpg" alt="authentic-small-youthful-marketing-agency" width="346" height="225" loading="lazy">
				</figure>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
