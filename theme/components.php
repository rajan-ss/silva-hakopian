<?php

/**
 * Template Name: Components
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Silva_Hakopian
 */

get_header();
?>

<section class="container">
	<h1>This is Heading One.</h1>
	<h2>This is Heading Two.</h2>
	<h3>This is Heading Three.</h3>
	<h4>This is Heading Four.</h4>
	<h5>This is Heading Five.</h5>
	<h6>This is Heading Six.</h6>

	<br>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia vitae, nam repudiandae nihil odio cum aut ipsam doloremque tenetur corporis culpa. Delectus numquam itaque sint perspiciatis! Saepe, iste facere.</p>
	<br>
	<br>
	<a href="#" class="btn btn-primary">Primary</a>
	<br>
	<br>
	<a href="#" class="btn btn-secondary">Secondary</a>
	<br>
	<h3>Button with icon</h3>
	<a href="tel:4422292409" class="btn btn-secondary group">
		<i class="icon-call text-primary mr-3 group-hover:text-ss-dark-blue"></i>
		442-229-2409
	</a>
	<br>
	<p class="section-tag">Section Titles</p>
	<br>
	<h2>Clients</h2>
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
				<img src="<?php echo site_url() ?>/wp-content/uploads/2024/06/client-1.png" alt="Client 1" width="52" height="52" loading="lazy">
			</figure>
		</div>
	</div>

	<h2>List</h2>
	<div class="[&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px] [&_p]:m-0">
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
	</div>

	<h2>Accordion</h2>
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
	<br>
	<h2>Vitality Accordion</h2>
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
	<br>
	<br>
	<h2>Tab Content</h2>
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
</section>

<section>
	<div class="container">
		<h2>Supporting You & Earning Points Tab</h2>
		<div class="lg:w-1/2 rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] py-9 px-8">
			<div>
				<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
					<i class="icon-supprot text-white text-4xl"></i>
				</div>
				<div class="[&_h3]:py-6">
					<h3>Save money when you buy healthy food</h3>
					<h4 class="h5"><span class="block font-normal pb-3">John Hancock Vitality makes it easier to buy healthy food3 at participating grocery stores.</span>Each month, Vitality PLUS members can:</h4>
				</div>
			</div>
			<div class="[&_p]:capitalize [&_p]:m-0 lg:[&_p]:text-xl [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px]">
				<ul>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Save up to $50 on fresh produce
						</p>
					</li>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Earn up to 50 Vitality Points for fresh produce purchases
						</p>
					</li>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Save up to $120 on special, promoted healthy items
						</p>
					</li>
				</ul>
				<h4 class="h5"><span class="block font-normal pb-3">*Remember to check which grocery stores participate before you shop.</span>3 HealthyFood savings are based on qualifying purchases and may vary based on the terms of the John Hancock Vitality Program. The HealthyFood program is currently not available in Guam.</h4>
			</div>
		</div>

		<h2>Sleep better Get rewarded Tab</h2>
		<div class="lg:w-1/2 rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] py-9 px-8">
			<div>
				<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
					<i class="icon-supprot text-white text-4xl"></i>
				</div>
				<div class="[&_h3]:py-6 [&_h4]:h5">
					<h3>Sleep better Get rewarded</h3>
					<h4><span class="font-normal pb-3">John Hancock Vitality rewards you for a good night’s sleep</span> — a key to overall wellness.</h4>
				</div>
			</div>
			<h4 class="h5"><span class="block font-normal pb-3">There are two ways you can earn points:"</span></h4>
			<div class="[&_p]:capitalize [&_p]:m-0 lg:[&_p]:text-xl [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px]">
				<ul>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Use the Vitality mobile app timer to document your sleep.
						</p>
					</li>
				</ul>
			</div>
		</div>

		<h2>Support your mental health Tab</h2>
		<div class="lg:w-1/2 rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] py-9 px-8">
			<div>
				<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
					<i class="icon-supprot text-white text-4xl"></i>
				</div>
				<div class="[&_h3]:py-6 [&_h4]:h5">
					<h3>Support your mental health</h3>
					<h4><span class="block font-normal pb-3">Mental health is an essential part of your overall wellness. To support members’ well-being, Vitality PLUS offers a free, one-year subscription to Headspace®7 — a leading meditation app.</span> You can also earn Vitality Points using:</h4>
				</div>
			</div>
			<div class="[&_p]:capitalize [&_p]:m-0 lg:[&_p]:text-xl [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px]">
				<ul>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Compatible meditation apps.
						</p>
					</li>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Calm
						</p>
					</li>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Buddhify
						</p>
					</li>
				</ul>
				<h4 class="h5"><span class="block font-normal pb-3">7 The meditation portion of the program is compatible with apps such as Breathe, Buddhify, Calm and Headspace.</span></h4>
			</div>
		</div>

		<h2>Find new ways to live a longer, healthier life Tab</h2>
		<div class="lg:w-1/2 rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] py-9 px-8">
			<div>
				<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
					<i class="icon-supprot text-white text-4xl"></i>
				</div>
				<div class="[&_h3]:py-6 [&_h4]:h5">
					<h3>Find new ways to live a longer, healthier life</h3>
					<h4><span class="block font-normal pb-3">John Hancock Vitality makes it easy to explore new ways to prioritize your health and well-being. </span>Earn Vitality Points when you:</h4>
				</div>
			</div>
			<div class="[&_p]:capitalize [&_p]:m-0 lg:[&_p]:text-xl [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px] [&>ol_>li]:marker:text-ss-dark-blue [&>ol_>li]:marker:text-xl">
				<ul>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Complete online courses and reviews
						</p>
					</li>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<div>
							<p>
								Watch Tufts Friedman School of Nutrition webinars
							</p>
							<ol>
								<li>
									<p>Find a topic</p>
								</li>
								<li>
									<p>Take a short quiz</p>
								</li>
								<li>
									<p>Receive Vitality Points</p>
								</li>
							</ol>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<h2>Get credit for your annual checkups and visits Tab</h2>
		<div class="lg:w-1/2 rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] py-9 px-8">
			<div>
				<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
					<i class="icon-supprot text-white text-4xl"></i>
				</div>
				<div class="[&_h3]:py-6 [&_h4]:h5">
					<h3>Get credit for your annual checkups and visits</h3>
					<h4><span class="block font-normal pb-3">John Hancock Vitality PLUS members can earn thousands of Vitality Points every year for attending preventative care appointments including:</h4>
				</div>
			</div>
			<div class="[&_p]:capitalize [&_p]:m-0 lg:[&_p]:text-xl [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px] [&>ol_>li]:marker:text-ss-dark-blue [&>ol_>li]:marker:text-xl">
				<ul>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Dental checkups
						</p>
					</li>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Vaccinations (flu, COVID-19)
						</p>
					</li>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Mammograms and pap smears
						</p>
					</li>
					<li>
						<i class="icon-support-accordion text-ss-pink text-2xl"></i>
						<p>
							Vitality Health Check – check of your blood pressure,
							glucose/HbA1c levels, cholesterol and BMI
						</p>
					</li>
				</ul>
			</div>
		</div>

	</div>
</section>
<?php
get_footer();
