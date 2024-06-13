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
<!-- Start of Take Change Section -->
<section class="container py-12 md:py-24 xl:py-32">
	<div class="flex justify-between space-y-4 max-lg:flex-col">
		<div class="flex flex-row justify-center items-end max-sm:relative max-sm:pt-24 max-sm:pb-20 w-full h-full lg:max-w-[611px] max-lg:mb-5 lg:mr-8 xl:mr-0">
			<div class="flex flex-col h-full justify-between max-sm:pb-14">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/happy-family.png" alt="Happy Family" width="431" height="450" loading="lazy">
				</figure>
				<div class="flex flex-row-reverse justify-end items-center max-sm:absolute bottom-0 left-1/2 max-sm:-translate-x-1/2 pt-[18px] pb-[10px] sm:pr-[14px] [&_p]:text-sm [&_p]:leading-[1.14] [&_p]:mb-0 lg:-mr-12 xl:mr-0">
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
							<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/client-1.png" width="52" height="52" loading="lazy">
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
			<div class="my-10 flex flex-col sm:flex-row max-sm:space-y-3 sm:space-x-6">
				<a href="#" class="btn btn-primary uppercase">Book Now</a>
				<a href="tel:4422292409" class="btn btn-secondary group">
					<i class="icon-call text-primary mr-3 group-hover:text-ss-dark-blue"></i>
					442-229-2409
				</a>
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
<!--End of Take Change Section-->

<!--Start of Find Your Reason Section-->
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
<!--End of Find Your Reason Section-->

<!--Start of Cash Back Option Section-->
<section class="py-8 md:py-12 lg:py-16">
	<div class="container">
		<div class="py-10 z-10 rounded-3xl text-center bg-primary/20 relative before:absolute before:inset-0 before:bg-[url('http://work/silvahakopian.com/www/wp-content/uploads/2024/06/Cash-back-Option.png')] before:rounded-3xl before:mix-blend-color-burn before:opacity-15 before:bg-no-repeat before:bg-cover before:bg-center">
			<div class="[&_h2]:max-w-[955px] [&_h2]:mx-auto [&_h2]:pb-8 relative z-10">
				<p class="section-tag">Cash-back Option</p>
				<h2>100% Return Of Premium Rider On Your Life Insurance Policy</h2>
				<a href="#" class="btn btn-primary">Schedule An Appointment</a>
			</div>
		</div>
	</div>
</section>
<!--End of Cash Back Option Section-->

<!--Start of Why Insurance Section-->
<section class="py-8 md:py-12 lg:py-16">
	<div class="container">
		<div class="text-center lg:text-start">
			<p class="section-tag">Why Insurance</p>
			<div class="flex flex-col lg:flex-row lg:justify-between justify-center items-center pb-9">
				<h2>Why Simple Term With Vitality Program?</h2>
				<a href="tel:4422292409" class="btn btn-secondary group">
					<i class="icon-call text-primary mr-3 group-hover:text-ss-dark-blue"></i>
					442-229-2409
				</a>
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
							<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/Ellipse-Image-1.png" width="52" height="52" loading="lazy">
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

				<div class="[&_p]:opacity-70 flex sm:flex-row flex-col pt-6 [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px] [&_p]:m-0">
					<ul>
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
					<ul>
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
<!--End of Why Insurance Section-->

<!--Start of Benefits Section-->
<section class="bg-primary/10 py-12 md:py-16 lg:py-20">
	<div class="container flex flex-col lg:flex-row gap-12">
		<div class="lg:w-1/2">
			<div class="text-center lg:text-start">
				<p class="section-tag">Benefits</p>
				<h2>Feel Confident With John Hancock Vitality Term</h2>
			</div>
			<div class="accordion">
				<div class="transition rounded-xl">
					<div class="accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
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
					<div class="accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
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
					<div class="accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
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
					<div class="accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
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
					<div class="accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
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
<!--End of Benefits Section-->

<!--Start of Vitality Rewards Section-->
<section class="py-8 md:py-12 lg:py-16">
	<div class="container flex flex-col lg:flex-row gap-12">
		<div class="lg:w-1/2">
			<div class="text-center lg:text-start">
				<p class="section-tag">Vitality Rewards</p>
				<h2>Supporting You & Earning Points</h2>
				<div class="[&_p]:opacity-70">
					<p>Select tiles that match your interests and learn how John Hancock Vitality can support you and help you earn rewards.</p>
				</div>
			</div>
			<div class="flex flex-col gap-4 max-w-[400px] max-lg:w-full max-lg:mx-auto pb-6">
				<div class="rounded-lg bg-ss-pink">
					<div class="cursor-pointer flex gap-5 items-center [&_p]:m-0 [&_p]:font-bold [&_p]:text-white py-3 px-6">
						<i class="icon-support-accordion text-white text-2xl"></i>
						<p>Being active and exercising</p>
					</div>
				</div>
				<div class="rounded-lg bg-ss-light-grey">
					<div class="cursor-pointer flex gap-5 items-center [&_p]:m-0 [&_p]:opacity-70 py-3 px-6">
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>Eat a healthy diet</p>
					</div>
				</div>
				<div class="rounded-lg bg-ss-light-grey">
					<div class="cursor-pointer flex gap-5 items-center [&_p]:m-0 [&_p]:opacity-70 py-3 px-6">
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>Improving your sleep</p>
					</div>
				</div>
				<div class="rounded-lg bg-ss-light-grey">
					<div class="cursor-pointer flex gap-5 items-center [&_p]:m-0 [&_p]:opacity-70 py-3 px-6">
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>Caring for your mental health</p>
					</div>
				</div>
				<div class="rounded-lg bg-ss-light-grey">
					<div class="cursor-pointer flex gap-5 items-center [&_p]:m-0 [&_p]:opacity-70 py-3 px-6">
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>Building on your wellness knowledge</p>
					</div>
				</div>
				<div class="rounded-lg bg-ss-light-grey">
					<div class="cursor-pointer flex gap-5 items-center [&_p]:m-0 [&_p]:opacity-70 py-3 px-6">
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>Prioritizing preventative care</p>
					</div>
				</div>
			</div>
			<div class="text-center lg:text-start">
				<a href="tel:4422292409" class="btn btn-secondary group">
					<i class="icon-call text-primary mr-3 group-hover:text-ss-dark-blue"></i>
					442-229-2409
				</a>
			</div>
		</div>
		<div class="lg:w-1/2 rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)]">
			<div class="py-9 px-8">
				<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
					<i class="icon-supprot text-white text-4xl"></i>
				</div>
				<div class="[&_h3]:py-6">
					<h3>Being active and exercising</h3>
					<h4 class="h5">Earn Vitality Points by:</h4>
				</div>
				<div class="vitality-accordion space-y-6">
					<div class="transition rounded-xl border border-ss-pink/30">
						<div class="relative before:absolute before:content-['\e900'] before:right-6 before:top-5 lg:before:top-4 before:font-icomoon before:size-6 accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h5 py-4 px-6">
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							<h3>Wearing a fitness device</h3>
						</div>
						<div class="relative before:absolute before:left-5 before:right-5 before:h-[1px] before:bg-black/10 accordion-content px-6 pt-0 overflow-hidden max-h-0 rounded-b-xl [&_p]:pl-9 [&_p]:pt-6 [&_p]:opacity-70">
							<p>
								Vitality PLUS members can choose from a list of new free or discounted fitness devices, earn the latest Apple Watch for as little as $25 plus tax5, or use a compatible device they already own. You can earn Vitality Points as your device logs your activity level — in steps, calories burned & heart rate.
							</p>
						</div>
					</div>
					<div class="transition rounded-xl border border-ss-pink/30">
						<div class="relative before:absolute before:content-['\e900'] before:right-6 before:top-5 lg:before:top-4 before:font-icomoon before:size-6 accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h5 py-4 px-6">
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							<h3>Checking in at the gym</h3>
						</div>
						<div class="relative before:absolute before:left-5 before:right-5 before:h-[1px] before:bg-black/10 accordion-content px-6 pt-0 overflow-hidden max-h-0 rounded-b-xl [&_p]:pl-9 [&_p]:pt-6 [&_p]:opacity-70">
							<p>
								<span class="font-semibold pb-3 block">Earn points with the John Hancock Vitality app, each time you check in at the gym and workout.</span>
								5Apple Watch program is not available in New York or Puerto Rico. Apple Watches ordered through John Hancock Vitality may not be shipped to addresses in Guam. Once you become a Vitality PLUS member and complete the Vitality Health Review (VHR), you can order Apple Watch by electronically signing, at checkout, a Retail Installment Agreement with the Vitality Group, for the retail price of the watch. After an initial payment of $25 plus tax, over the next two years, monthly out-of-pocket payments are based on the number of Standard Workouts (10,000 to 14,999 steps) and Advanced Workouts (15,000 steps) or the applicable Active Calorie or heart rate thresholds. The step counts required for Standard and Advanced Workouts are reduced for members beginning at age 71+. One-time upgrade fees plus taxes apply if you choose (GPS + Cellular) versions of Apple Watch, larger watch case sizes, and certain bands and case materials. For more information, please visit JohnHancock.com. Apple is not a participant in or sponsor of this promotion. Apple Watch Series 7 requires iPhone 6s or later with iOS 15 or later. Apple Watch SE requires iPhone 6s or later with iOS 14 or later. Apple Watch is a registered trademark of Apple Inc. All rights reserved.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End of Vitality Rewards Section-->

<!--Start of Get In Touch Section-->
<section class="py-8 md:py-12 lg:py-16">
	<div class="container flex flex-col lg:flex-row gap-12">
		<div class="lg:w-1/2">
			<h2>Get in Touch Form</h2>
		</div>
		<div class="lg:w-1/2">
			<div class="py-9 px-8">
				<div>
					<h2>Have questions Get answers</h2>
				</div>
				<div class="faq-accordion space-y-6">
					<div class="transition border-b border-ss-dark-blue/20">
						<div class="relative before:absolute before:content-['\e900'] before:right-2 before:opacity-20 before:top-3 before:font-icomoon before:size-6 accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h5 py-4">
							<h3>Who is Vitality?</h3>
						</div>
						<div class="accordion-content pt-0 overflow-hidden max-h-0 [&_p]:opacity-70">
							<p>
								We’re collaborating with Vitality because they’re the global leader in integrating wellness benefits with life insurance products. Vitality has an established track-record of creating interactive, personalized programs. Millions of members worldwide use their online tools to identify and track health and lifestyle goals
							</p>
						</div>
					</div>
					<div class="transition border-b border-ss-dark-blue/20">
						<div class="relative before:absolute before:content-['\e900'] before:right-2 before:opacity-20 before:top-3 before:font-icomoon before:size-6 accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h5 py-4">
							<h3>Can a client who is rated still benefit from the program?</h3>
						</div>
						<div class="accordion-content pt-0 overflow-hidden max-h-0 [&_p]:opacity-70">
							<p>
								Yes, even clients with medical impairments can benefit from the program. Remember, they don’t have to be an athlete to participate. Members can earn points by doing simple things like walking, taking online courses, or visiting the dentist. In fact, if your client is living with diabetes, the program offers additional resources and point-earning activities to help them live long, healthy lives. Visit JHSalesHub.com/Aspire for more information.
							</p>
						</div>
					</div>
					<div class="transition border-b border-ss-dark-blue/20">
						<div class="relative before:absolute before:content-['\e900'] before:right-2 before:opacity-20 before:top-3 before:font-icomoon before:size-6 accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h5 py-4">
							<h3>Can my older clients benefit from the program?</h3>
						</div>
						<div class="accordion-content pt-0 overflow-hidden max-h-0 [&_p]:opacity-70">
							<p>
								Yes, the Vitality Program is available for issue ages 71 through 90. This customized program takes into account an older client’s unique health and wellness considerations. That means, they’ll get rewarded for the things they do to stay healthy, but at a pace that makes sense for them.
							</p>
							<p>
								Note: The customized program will automatically apply to in force policy owners who have other John Hancock Vitality policies once they reach age 71 or older.
							</p>
						</div>
					</div>
					<div class="transition border-b border-ss-dark-blue/20">
						<div class="relative before:absolute before:content-['\e900'] before:right-2 before:opacity-20 before:top-3 before:font-icomoon before:size-6 accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h5 py-4">
							<h3>How does the Apple Watch program work?</h3>
						</div>
						<div class="accordion-content pt-0 overflow-hidden max-h-0">
							<div class="marker:text-ss-dark-blue [&_p]:opacity-70 marker:opacity-70">
								<p>
									The program is available to both new and inforce John Hancock Vitality clients. Here is a brief overview of how the program works:
								</p>
								<ul>
									<li>
										<p>Vitality customers who take part in the Apple Watch program make an initial payment of $25 plus tax.</p>
									</li>
									<li>
										<p>The remaining balance of their watch is divided into monthly payments over the course of two years.</p>
									</li>
									<li>
										<p>Monthly payments can be reduced to as little as $0 with regular exercise.</p>
									</li>
								</ul>
								<p>
									<strong>Note:</strong> Upgrade costs may apply based on your client’s choice of case finish or band type. Their monthly payments will depend on the number of Vitality Points they earn through Standard or Advanced Workouts — see the table below for detailed payment information.
								</p>
							</div>
							<div class="flex flex-col gap-3 bg-white p-3">
								<div class="w-1/2">
									<div class="[&_p]:font-semibold">
										<p>Apple Watch 8 and Ultra</p>
									</div>
									<div class="flex flex-row gap-2 [&_p]:text-white [&_p]:text-base [&_p]:font-semibold [&_p]:py-6 [&_p]:px-3 [&_p]:m-0 [&_p]:mx-auto [&_p]:flex [&_p]:justify-center [&_p]:items-center">
										<div class="[&_p]:bg-ss-pink">
											<p>$15.50</p>
											<span class="text-sm font-semibold whitespace-nowrap">0 Points</span>
										</div>
										<div class="[&_p]:bg-primary">
											<p>$12.25</p>
											<span class="text-sm font-semibold whitespace-nowrap">240 Points</span>
										</div>
										<div class="[&_p]:bg-ss-dark-blue">
											<p>$7.00</p>
											<span class="text-sm font-semibold whitespace-nowrap">360 Points</span>
										</div>
										<div class="[&_p]:bg-ss-dark-blue/60">
											<p>$0</p>
											<span class="text-sm font-semibold whitespace-nowrap">500 Points</span>
										</div>
									</div>
									<div class="[&_p]:opacity-70 [&_p]:text-sm">
										<p>
											Example: If your clients earn 360 points one month — they’ll pay $7.00. When they earn 500 points in one month, the cost is $0.
										</p>
									</div>
								</div>
								<div class="w-1/2">
									<div class="[&_p]:font-semibold">
										<p>SE</p>
									</div>
									<div class="flex flex-row gap-2 [&_p]:text-white [&_p]:text-base [&_p]:font-semibold [&_p]:py-6 [&_p]:px-3 [&_p]:m-0 [&_p]:mx-auto [&_p]:flex [&_p]:justify-center [&_p]:items-center">
										<div class="[&_p]:bg-ss-pink">
											<p>$10.50</p>
											<span class="text-sm font-semibold whitespace-nowrap">0 Points</span>
										</div>
										<div class="[&_p]:bg-primary">
											<p>$8.25</p>
											<span class="text-sm font-semibold whitespace-nowrap">240 Points</span>
										</div>
										<div class="[&_p]:bg-ss-dark-blue">
											<p>$4.75</p>
											<span class="text-sm font-semibold whitespace-nowrap">360 Points</span>
										</div>
										<div class="[&_p]:bg-ss-dark-blue/60">
											<p>$0</p>
											<span class="text-sm font-semibold whitespace-nowrap">500 Points</span>
										</div>
									</div>
									<div class="[&_p]:opacity-70 [&_p]:text-sm">
										<p>
											Example: If your clients earn 360 points one month — they’ll pay $4.75. When they earn 500 points in one month, the cost is $0.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="transition border-b border-ss-dark-blue/20">
						<div class="relative before:absolute before:content-['\e900'] before:right-2 before:opacity-20 before:top-3 before:font-icomoon before:size-6 accordion-header cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h5 py-4">
							<h3>What is considered a Standard or Advanced Workout?</h3>
						</div>
						<div class="accordion-content pt-0 overflow-hidden max-h-0 [&_p]:opacity-70">
							<p>
								Your clients’ monthly Apple Watch payments will be based on the number of Standard or Advanced Workouts they complete each month. The chart below details the many ways they can accomplish this:
							</p>
							<table class="table-auto text-left [&_th]:font-semibold my-5 border-ss-dark-blue/20 capitalize">
								<thead>
									<tr>
										<th></th>
										<th>Standard Workout (20 Vitality Points)</th>
										<th>Advanced Workout (30 Vitality Points)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Active calories burned using Apple Watch</th>
										<td>Personalized between 200–1,250</td>
										<td>Personalized between 300–1,875</td>
									</tr>
									<tr>
										<th>Steps using any supported device</th>
										<td>10,000</td>
										<td>15,000</td>
									</tr>
									<tr>
										<th>Minimum calories burned using an approved Vitality device</th>
										<td>200</td>
										<td>300</td>
									</tr>
									<tr>
										<th>Minutes of exercise @ 60% of max heart rate</th>
										<td>30</td>
										<td>45</td>
									</tr>
									<tr>
										<th>Verified gym visit</th>
										<td>30 minutes</td>
										<td>Not Applicable</td>
									</tr>
								</tbody>
							</table>
							<p>
								<strong>Note:</strong> Light Workouts are not applicable towards the payments of Apple Watch. Clients can earn Vitality Points through their Active Calories found in the John Hancock Vitality app: click the More tab, and then select Health app. They can also use the number of steps tracked or calories burned on any other supported device, exercise with a heart rate monitor, or log a verified gym visit to receive credit for a Standard or Advanced workout. For even more ways your clients can earn Vitality Points, please refer to our Earn Vitality Points for Healthy Living flyer. Apple Watch Series 7 and Apple Watch SE are available to John Hancock Vitality members who have not previously ordered an Apple Watch through the program.
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!--End of Get In Touch Section-->

<!-- Image Slider Section  -->
<section class="bg-primary/20 py-16">
	<div class="container text-center pb-10">
		<h4>Our Trusted Partners</h4>
	</div>
	<div class="swiper py-5 lg:py-0 image-slider [&_.swiper-slide_img]:max-h-[80px] sm:[&_.swiper-slide_img]:max-h-[120px] [&_.swiper-slide_img]:max-w-[100%] [&_.swiper-slide_img]:w-auto md:[&_.swiper-slide_img]:w-full xl:[&_.swiper-slide_img]:max-h-none [&_.swiper-slide]:w-auto">
		<div class="swiper-wrapper items-center">
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-6.png" width="145" height="40" loading="lazy" alt="Slider Image 6">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-5.png" width="145" height="40" loading="lazy" alt="Slider Image 5">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-4.png" width="145" height="40" loading="lazy" alt="Slider Image 4">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-3.png" width="145" height="40" loading="lazy" alt="Slider Image 3">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-2.png" width="145" height="40" loading="lazy" alt="Slider Image 2">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-1.png" width="145" height="40" loading="lazy" alt="Slider Image 1">
				</figure>
			</div>

			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-6.png" width="145" height="40" loading="lazy" alt="Slider Image 6">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-5.png" width="145" height="40" loading="lazy" alt="Slider Image 5">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-4.png" width="145" height="40" loading="lazy" alt="Slider Image 4">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-3.png" width="145" height="40" loading="lazy" alt="Slider Image 3">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-2.png" width="145" height="40" loading="lazy" alt="Slider Image 2">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/slider-img-1.png" width="145" height="40" loading="lazy" alt="Slider Image 1">
				</figure>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
