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
<section class="container py-8 md:py-12 lg:py-16">
	<div class="flex justify-between space-y-4 max-lg:flex-col">
		<div class="flex flex-row justify-center items-end max-sm:relative max-sm:pt-24 max-sm:pb-20 w-full h-full lg:max-w-[611px] max-lg:mb-5 lg:mr-8 xl:mr-0">
			<div class="flex flex-col h-full justify-between max-sm:pb-14">
				<figure class="[&_img]:rounded-2xl">
					<img src="<?php echo site_url() ?>/wp-content/uploads/happy-family.jpg" alt="Happy Family" width="431" height="450" loading="lazy">
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
							<img src="<?php echo site_url() ?>/wp-content/uploads/Ellipse-Image-4.png" alt="Client 4" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/Ellipse-Image-3.png" alt="Client 3" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/Ellipse-Image-2.png" alt="Client 2" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/Ellipse-Image-1.png" alt="Client 1" width="52" height="52" loading="lazy">
						</figure>
					</div>
				</div>
			</div>
			<div class="flex flex-col items-end h-full -ml-[145px]">
				<div class="flex items-center max-w-[218px] mb-4 sm:mb-8 max-sm:absolute -top-3 left-1/2 max-sm:-translate-x-1/2 bg-white px-5 py-4 rounded-xl shadow-[0_4px_24px_0] shadow-[#1c3a4f1a]">
					<span class="font-bold text-[54px] text-primary mr-4 leading-[1.11]">160</span>
					<span class="font-medium text-xl leading-[1.1]">Years of Service</span>
				</div>
				<figure class="[&_img]:rounded-2xl">
					<img src="<?php echo site_url() ?>/wp-content/uploads/take-change-1.jpg" alt="Take Change" width="325" height="372" loading="lazy">
				</figure>
			</div>
		</div>
		<div class="[&_h2]:mb-5 lg:max-w-[560px]">
			<p><span class="section-tag opacity-100">Take Change</span></p>
			<h2>Making the most of your Vitality PLUS benefits</h2>
			<p><span class="opacity-70">With John Hancock Vitality, you’re in control. You can participate when and how you want</span></p>
			<div class="my-10 flex flex-col sm:flex-row max-sm:space-y-3 sm:space-x-6">
				<!-- <a href="https://calendly.com/silvah-ffl/free-consultation">Book Now</a> -->
				<a href="" class="btn btn-primary uppercase" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/silvah-ffl/free-consultation'});return false;">Book Now</a>
				<a href="tel:4422292409" class="btn btn-secondary group">
					<i class="icon-call text-primary mr-3 group-hover:text-ss-dark-blue"></i>
					442-229-2409
				</a>
			</div>
			<div class="[&_ul]:border-t [&_ul]:border-ss-dark-blue/10 [&_ul]:pt-6 [&_ul]:pl-0 [&_ul]:list-none [&_ul]:flex [&_p]:text-base [&_p]:leading-tight [&_i]:text-4xl [&_i]:text-ss-pale max-sm:[&_ul]:flex-col sm:[&_ul]:space-x-10 lg:[&_ul]:space-y-0 *:[&_ul]:mt-0 *:[&_ul]:relative *:[&_ul]:after:absolute *:[&_ul]:after:-left-5 *:[&_ul]:after:top-1/2 *:[&_ul]:after:-translate-y-1/2 *:[&_ul]:after:border-l *:[&_ul]:after:border-ss-dark-blue/10 *:[&_ul]:after:h-[70px] first:[&_li]:after:hidden max-sm:*:after:hidden  [&_li]:flex sm:[&_li]:flex-col [&_li]:gap-[10px] max-sm:[&_li]:items-center [&_p]:opacity-70">
				<ul>
					<li>
						<i class="icon-connect"></i>
						<p>The more you engage, the more points you earn.</p>
					</li>
					<li>
						<i class="icon-documents"></i>
						<p>Points determine your Vitality Status: Platinum, Gold, Silver or Bronze</p>
					</li>
					<li>
						<i class="icon-trophy"></i>
						<p>The higher your status, the greater the potential rewards!</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--End of Take Change Section-->

<!--Start of Find Your Reason Section-->
<section class="py-8 md:py-12 lg:py-16">
	<div class="container text-center">
		<div class="[&_h2]:max-w-[680px] [&_h2]:mx-auto [&_h2]:pb-8 lg:[&_h2]:pb-10">
			<p><span class="section-tag">Find Your Reason</span></p>
			<h2>Top reasons to activate your membership today</h2>
		</div>
		<div class="flex flex-col md:flex-row gap-4 counter-increment">
			<div>
				<div class="[&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-14 [&_p]:h-14 [&_p]:mx-auto [&_p]:text-xl [&_p]:font-bold [&_p]:leading-normal [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
					<p><span class="list-number"></span></p>
				</div>
				<div class="[&_p]:opacity-70">
					<p>Rewards for your healthy choices and incentives to keep you motivated</p>
				</div>
			</div>
			<div>
				<div class="[&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-14 [&_p]:h-14 [&_p]:mx-auto [&_p]:text-xl [&_p]:font-bold [&_p]:leading-normal [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center ">
					<p><span class="list-number"></span></p>
				</div>
				<div class="[&_p]:opacity-70">
					<p>Discounts on popular brands like Starbucks, Amazon, REI & More 2</p>
				</div>
			</div>
			<div>
				<div class="[&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-14 [&_p]:h-14 [&_p]:mx-auto [&_p]:text-xl [&_p]:font-bold [&_p]:leading-normal [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
					<p><span class="list-number"></span></p>
				</div>
				<div class="[&_p]:opacity-70">
					<p>Confidence that you are taking steps to live a longer, healthier life</p>
				</div>
			</div>
			<div>
				<div class="[&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-14 [&_p]:h-14 [&_p]:mx-auto [&_p]:text-xl [&_p]:font-bold [&_p]:leading-normal [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center">
					<p><span class="list-number"></span></p>
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
		<div class="py-10 z-10 rounded-3xl text-center bg-primary/20 relative before:absolute before:inset-0 before:bg-[url('http://work/silvahakopian.com/www/wp-content/uploads/Cash-back-Option.png')] before:rounded-3xl before:mix-blend-color-burn before:opacity-15 before:bg-no-repeat before:bg-cover before:bg-center">
			<div class="[&_h2]:max-w-[955px] [&_h2]:mx-auto [&_h2]:pb-8 relative z-10">
				<p><span class="section-tag">Cash-back Option</span></p>
				<h2>100% Return Of Premium Rider On Your Life Insurance Policy</h2>
				<a href="" class="btn btn-primary" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/silvah-ffl/free-consultation'});return false;">Schedule an Appointment </a>
				<!-- Calendly link widget end -->
			</div>
		</div>
	</div>
</section>
<!--End of Cash Back Option Section-->

<!--Start of Vitality Rewards Section-->
<section class="pt-8 md:pt-12 lg:pt-16 pb-16 md:pb-24 lg:pb-32">
	<div class="container">
		<div class="ss-custom-tab space-y-4 flex flex-col justify-between lg:flex-row">
			<div class="mobile-dropdown mb-8 xl:mb-10 lg:w-1/2 flex flex-col">
				<div class="lg:max-w-[570px]">
					<p><span class="section-tag">Vitality Rewards</span></p>
					<h2>Supporting You & Earning Points</h2>
					<div class="[&_p]:opacity-70 [&_p]:pb-5">
						<p>Select tiles that match your interests and learn how John Hancock Vitality can support you and help you earn rewards.</p>
					</div>
				</div>
				<button class="dropBtn order-2 lg:order-none relative inline-block text-left w-full py-3 px-4 pr-12 leading-normal border border-gray-300 text-[15px] lg:text-[16px] capitalize after:content-['\e900'] after:font-icomoon after:text-[14px] after:absolute after:right-4 after:top-3.5 lg:hidden">Select Option</button>
				<ul class="tabNav order-2 lg:order-none list-none space-y-0 pl-0 lg:flex flex-col gap-5 max-lg:border max-lg:border-ss-gray-350 hidden [&_a]:text-ss-dark-blue [&_a]:text-left lg:max-w-[450px]">
					<li class="max-lg:border-t bg-ss-light-grey max-lg:border-t-gray-300 max-lg:first:border-t-0 max-lg:p-2"><a href="#tab-being-active" class="nav-item relative border w-full text-center rounded-lg transition-all duration-300 lg:hover:border-ss-pink active flex gap-5 items-center py-3 px-6 [&_p]:mb-0">
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							Being active and exercising
						</a></li>
					<li class="max-lg:border-t bg-ss-light-grey max-lg:border-t-gray-300 max-lg:first:border-t-0 max-lg:p-2"><a href="#tab-eat-healthy" class="nav-item relative border w-full text-center rounded-lg transition-all duration-300 lg:hover:border-ss-pink flex gap-5 items-center py-3 px-6">
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							Eat a healthy diet
						</a></li>
					<li class="max-lg:border-t bg-ss-light-grey max-lg:border-t-gray-300 max-lg:first:border-t-0 max-lg:p-2"><a href="#tab-improve-sleep" class="nav-item relative border w-full text-center rounded-lg transition-all duration-300 lg:hover:border-ss-pink flex gap-5 items-center py-3 px-6">
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							Improving your sleep
						</a></li>
					<li class="max-lg:border-t bg-ss-light-grey max-lg:border-t-gray-300 max-lg:first:border-t-0 max-lg:p-2"><a href="#tab-mental-health" class="nav-item relative border w-full text-center rounded-lg transition-all duration-300 lg:hover:border-ss-pink flex gap-5 items-center py-3 px-6">
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							Caring for your mental health
						</a></li>
					<li class="max-lg:border-t bg-ss-light-grey max-lg:border-t-gray-300 max-lg:first:border-t-0 max-lg:p-2"><a href="#tab-building-wellness" class="nav-item relative border w-full text-center rounded-lg transition-all duration-300 lg:hover:border-ss-pink flex gap-5 items-center py-3 px-6">
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							Building on your wellness knowledge
						</a></li>
					<li class="max-lg:border-t bg-ss-light-grey max-lg:border-t-gray-300 max-lg:first:border-t-0 max-lg:p-2"><a href="#tab-preventive-care" class="nav-item relative border w-full text-center rounded-lg transition-all duration-300 lg:hover:border-ss-pink flex gap-5 items-center py-3 px-6">
							<i class="icon-support-accordion text-ss-pink text-2xl"></i>
							Prioritizing preventative care
						</a></li>
				</ul>
				<div class="text-center lg:text-start order-1 lg:order-none mb-8 lg:mb-0">
					<a href="tel:4422292409" class="btn btn-secondary group">
						<i class="icon-call text-primary mr-3 group-hover:text-ss-dark-blue"></i>
						442-229-2409
					</a>
				</div>
			</div>
			<div class="lg:w-1/2 tabContent">
				<div class="tabPane" id="tab-being-active">
					<div class="w-full rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] [&_h4]:h5 py-5 md:py-9 px-4 md:px-8">
						<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
							<i class="icon-supprot text-white text-4xl"></i>
						</div>
						<div class="[&_h3]:py-6 [&_h4]:h5">
							<h3>Being active and exercising</h3>
							<h4>Earn Vitality Points by:</h4>
						</div>
						<div class="vitality-accordion space-y-6">
							<div class="item rounded-xl border border-ss-pink/30 overflow-hidden [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h5">
								<button type="button" class="toggleFaqBtn flex items-center text-left gap-5 w-full transition-all py-4 px-6 relative before:absolute before:content-['\e900'] before:right-6 before:top-5 lg:before:top-4 before:font-icomoon"> <i class="icon-support-accordion text-ss-pink text-2xl"></i>
									<h3>Wearing a fitness device</h3>
								</button>
								<div class="toggleBlock hidden relative before:absolute before:left-5 before:right-5 before:h-[1px] before:bg-black/10 px-6 pt-0 rounded-b-xl [&_p]:pt-6 [&_p]:opacity-70">
									<p>
										Vitality PLUS members can choose from a list of new free or discounted fitness devices, earn the latest Apple Watch for as little as $25 plus tax5, or use a compatible device they already own. You can earn Vitality Points as your device logs your activity level — in steps, calories burned & heart rate.
									</p>
								</div>
							</div><!-- /.item -->
							<div class="item rounded-xl border border-ss-pink/30 overflow-hidden [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h5">
								<button type="button" class="toggleFaqBtn flex items-center text-left gap-5 w-full transition-all py-4 px-6 relative before:absolute before:content-['\e900'] before:right-6 before:top-5 lg:before:top-4 before:font-icomoon"> <i class="icon-support-accordion text-ss-pink text-2xl"></i>
									<h3>Checking in at the gym</h3>
								</button>
								<div class="toggleBlock hidden relative before:absolute before:left-5 before:right-5 before:h-[1px] before:bg-black/10 px-6 pt-0 rounded-b-xl [&_p]:pt-6 [&_p]:opacity-70">
									<p>
										<span class="font-semibold pb-3 block">Earn points with the John Hancock Vitality app, each time you check in at the gym and workout.</span>
										5Apple Watch program is not available in New York or Puerto Rico. Apple Watches ordered through John Hancock Vitality may not be shipped to addresses in Guam. Once you become a Vitality PLUS member and complete the Vitality Health Review (VHR), you can order Apple Watch by electronically signing, at checkout, a Retail Installment Agreement with the Vitality Group, for the retail price of the watch. After an initial payment of $25 plus tax, over the next two years, monthly out-of-pocket payments are based on the number of Standard Workouts (10,000 to 14,999 steps) and Advanced Workouts (15,000 steps) or the applicable Active Calorie or heart rate thresholds. The step counts required for Standard and Advanced Workouts are reduced for members beginning at age 71+. One-time upgrade fees plus taxes apply if you choose (GPS + Cellular) versions of Apple Watch, larger watch case sizes, and certain bands and case materials. For more information, please visit JohnHancock.com. Apple is not a participant in or sponsor of this promotion. Apple Watch Series 7 requires iPhone 6s or later with iOS 15 or later. Apple Watch SE requires iPhone 6s or later with iOS 14 or later. Apple Watch is a registered trademark of Apple Inc. All rights reserved.
									</p>
								</div>
							</div><!-- /.item -->
						</div>
					</div>
				</div>
				<div class="tabPane hidden" id="tab-eat-healthy">
					<div class="w-full rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] [&_h4]:h5 py-5 md:py-9 px-4 md:px-8 ">
						<div>
							<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
								<i class="icon-supprot text-white text-4xl"></i>
							</div>
							<div class="[&_h3]:py-6">
								<h3>Save money when you buy healthy food</h3>
								<h4><span class="block font-normal pb-3">John Hancock Vitality makes it easier to buy healthy food3 at participating grocery stores.</span>Each month, Vitality PLUS members can:</h4>
							</div>
						</div>
						<div class="[&_p]:capitalize [&_p]:m-0 lg:[&_p]:text-xl [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px] [&_ul]:pl-0">
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
							<h4><span class="block font-normal pb-3">*Remember to check which grocery stores participate before you shop.</span>3 HealthyFood savings are based on qualifying purchases and may vary based on the terms of the John Hancock Vitality Program. The HealthyFood program is currently not available in Guam.</h4>
						</div>
					</div>

				</div>
				<div class="tabPane hidden" id="tab-improve-sleep">
					<div class="w-full rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] [&_h4]:h5 py-5 md:py-9 px-4 md:px-8">
						<div>
							<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
								<i class="icon-supprot text-white text-4xl"></i>
							</div>
							<div class="[&_h3]:py-6">
								<h3>Sleep better Get rewarded</h3>
								<h4><span class="font-normal pb-3">John Hancock Vitality rewards you for a good night’s sleep</span> — a key to overall wellness.</h4>
							</div>
						</div>
						<h4><span class="block font-normal pb-3">There are two ways you can earn points:"</span></h4>
						<div class="[&_p]:capitalize [&_p]:m-0 lg:[&_p]:text-xl [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px] [&_ul]:pl-0">
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
				</div>
				<div class="tabPane hidden" id="tab-mental-health">
					<div class="w-full rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] [&_h4]:h5 py-5 md:py-9 px-4 md:px-8">
						<div>
							<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
								<i class="icon-supprot text-white text-4xl"></i>
							</div>
							<div class="[&_h3]:py-6">
								<h3>Support your mental health</h3>
								<h4><span class="block font-normal pb-3">Mental health is an essential part of your overall wellness. To support members’ well-being, Vitality PLUS offers a free, one-year subscription to Headspace®7 — a leading meditation app.</span> You can also earn Vitality Points using:</h4>
							</div>
						</div>
						<div class="[&_p]:capitalize [&_p]:m-0 lg:[&_p]:text-xl [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px] [&_ul]:pl-0">
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
							<h4><span class="block font-normal pb-3">7 The meditation portion of the program is compatible with apps such as Breathe, Buddhify, Calm and Headspace.</span></h4>
						</div>
					</div>
				</div>
				<div class="tabPane hidden" id="tab-building-wellness">
					<div class="w-full rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] [&_h4]:h5 py-5 md:py-9 px-4 md:px-8">
						<div>
							<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
								<i class="icon-supprot text-white text-4xl"></i>
							</div>
							<div class="[&_h3]:py-6 [&_h4]:h5">
								<h3>Find new ways to live a longer, healthier life</h3>
								<h4><span class="block font-normal pb-3">John Hancock Vitality makes it easy to explore new ways to prioritize your health and well-being. </span>Earn Vitality Points when you:</h4>
							</div>
						</div>
						<div class="[&_p]:capitalize [&_p]:m-0 lg:[&_p]:text-xl [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px] [&>ol_>li]:marker:text-ss-dark-blue [&>ol_>li]:marker:text-xl [&_ul]:pl-0">
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
				</div>
				<div class="tabPane hidden" id="tab-preventive-care">
					<div class="w-full rounded-xl border-t-8 border-ss-pink shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] [&_h4]:h5 py-5 md:py-9 px-4 md:px-8">
						<div>
							<div class="h-20 w-20 bg-ss-dark-blue rounded-full flex justify-center items-center">
								<i class="icon-supprot text-white text-4xl"></i>
							</div>
							<div class="[&_h3]:py-6 [&_h4]:h5">
								<h3>Get credit for your annual checkups and visits</h3>
								<h4><span class="block font-normal pb-3">John Hancock Vitality PLUS members can earn thousands of Vitality Points every year for attending preventative care appointments including:</span></h4>
							</div>
						</div>
						<div class="[&_p]:capitalize [&_p]:m-0 lg:[&_p]:text-xl [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px] [&>ol_>li]:marker:text-ss-dark-blue [&>ol_>li]:marker:text-xl [&_ul]:pl-0">
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
			</div>
		</div>
	</div>
</section>
<!--End of Vitality Rewards Section-->

<!--Start of Working Steps Section-->
<section class="py-8 md:py-12 lg:pt-16 lg:pb-24 bg-ss-dark-blue">
	<div class="container">
		<div class="text-center [&_h2]:text-white pb-10">
			<p><span class="section-tag">Working Steps</span></p>
			<h2>Easy Working Process</h2>
		</div>
		<div class="relative flex flex-col lg:flex-row items-center gap-8 justify-between before:absolute lg:before:bg-[url('./images/dotted-line.png')] before:bg-no-repeat before:bg-right-top before:bg-contain before:inset-0 before:w-[80%] before:mx-auto counter-increment">
			<div class="max-w-[320px] text-center">
				<div class="flex justify-center pb-6">
					<div class="relative h-40 w-40 bg-ss-cta-aqua rounded-full flex justify-center items-center">
						<i class="icon-health text-white text-7xl"></i>
						<div class="absolute top-0 left-0 [&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center [&_p]:border-4 [&_p]:border-ss-dark-blue">
							<p><span class="list-number"></span></p>
						</div>
					</div>
				</div>
				<div class="text-white [&_p]:opacity-70">
					<h4>Set up your John Hancock Vitality account</h4>
					<p>Activate your member account using your name, email address, date of birth and the last six digits of your SSN.</p>
				</div>
			</div>
			<div class="max-w-[385px] text-center lg:translate-y-12">
				<div class="flex justify-center pb-6">
					<div class="relative h-40 w-40 bg-ss-cta-aqua rounded-full flex justify-center items-center">
						<i class="icon-checkup text-white text-7xl"></i>
						<div class="absolute top-0 left-0 [&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center [&_p]:border-4 [&_p]:border-ss-dark-blue">
							<p><span class="list-number"></span></p>
						</div>
					</div>
				</div>
				<div class="text-white [&_p]:opacity-70">
					<h4>Complete your Vitality Health Review (VHR)</h4>
					<p>A brief, private health survey that starts your Vitality experience, tailors personalized goals and gives you Vitality Points towards rewards.</p>
				</div>
			</div>
			<div class="max-w-[325px] text-center">
				<div class="flex justify-center pb-6">
					<div class="relative h-40 w-40 bg-ss-cta-aqua rounded-full flex justify-center items-center">
						<i class="icon-supprot text-white text-7xl"></i>
						<div class="absolute top-0 left-0 [&_p]:bg-ss-pink [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:justify-center [&_p]:items-center [&_p]:border-4 [&_p]:border-ss-dark-blue">
							<p><span class="list-number"></span></p>
						</div>
					</div>
				</div>
				<div class="text-white [&_p]:opacity-70">
					<h4>Enjoy the benefits</h4>
					<p>Once you complete your VHR, you can explore all the John Hancock Vitality benefits, order a free or discounted fitness device, earn the latest Apple Watch for as little as $25 plus tax5, or link a compatible device you already own.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End of Working Steps Section-->

<!--Start of Why Insurance Section-->
<section class="py-16 md:py-24 lg:py-32">
	<div class="container">
		<div class="text-center lg:text-start">
			<p><span class="section-tag">Why Insurance</span></p>
			<div class="flex flex-col lg:flex-row lg:justify-between justify-center items-center pb-9 lg:[&_h2]:mb-0">
				<h2>Why Simple Term With Vitality Program?</h2>
				<a href="tel:4422292409" class="btn btn-secondary group">
					<i class="icon-call text-primary mr-3 group-hover:text-ss-dark-blue"></i>
					442-229-2409
				</a>
			</div>
		</div>
		<div class="flex flex-col lg:flex-row gap-8 lg:gap-11 items-center">
			<figure class="[&_img]:rounded-3xl [&_img]:w-full [&_img]:h-full lg:w-1/2">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/close-up-young-colleagues-having-meeting.jpg" alt="close-up-young-colleagues-having-meeting" width="570" height="420" loading="lazy">
			</figure>
			<div class="lg:w-1/2">
				<div class="flex flex-row gap-3 items-center justify-center lg:justify-start bottom-0 left-1/2 pb-5 sm:pr-[14px] lg:-mr-12 xl:mr-0">
					<div class="flex ml-[18px]">
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/Ellipse-Image-4.png" alt="Client 4" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/Ellipse-Image-3.png" alt="Client 3" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/Ellipse-Image-2.png" alt="Client 2" width="52" height="52" loading="lazy">
						</figure>
						<figure class="-ml-[18px]">
							<img src="<?php echo site_url() ?>/wp-content/uploads/Ellipse-Image-1.png" width="52" height="52" loading="lazy" alt="Client 1">
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

				<div class="[&_p]:opacity-70 flex sm:flex-row flex-col justify-between sm:gap-5 pt-6 [&>ul_>li]:flex [&>ul_>li]:flex-row [&>ul_>li]:items-start [&>ul_>li]:gap-[18px] [&_ul]:pl-0 [&_p]:m-0">
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
	<div class="container flex flex-col xl:items-start lg:flex-row gap-12">
		<div class="lg:w-3/5">
			<div class="text-center lg:text-start">
				<p class="section-tag">Benefits</p>
				<h2>Feel Confident With John Hancock Vitality Term</h2>
			</div>
			<div class="benefit-accordion counter-increment">
				<div class="item rounded-xl overflow-hidden">
					<button type="button" class="toggleFaqBtn text-left cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:m-0 [&_p]:justify-center [&_p]:items-center">
							<p><span class="list-number"></span></p>
						</div>
						<h3>Savings and rewards for healthy living</h3>
					</button>
					<div class="toggleBlock px-6 pt-0 hidden rounded-b-xl [&_p]:pl-16 [&_p]:opacity-70">
						<p>
							Your clients’ policy wil l automatical ly include the John Hancock Vitality PLUS program, which means they can earn premium savings and rewards for the everyday steps they take to live healthy.
						</p>
					</div>
				</div>
				<div class="item rounded-xl overflow-hidden">
					<button type="button" class="toggleFaqBtn text-left cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:m-0 [&_p]:justify-center [&_p]:items-center">
							<p><span class="list-number"></span></p>
						</div>
						<h3>Guaranteed conversion feature</h3>
					</button>
					<div class="toggleBlock px-6 pt-0 hidden rounded-b-xl [&_p]:pl-16 [&_p]:opacity-70">
						<p>
							Your clients’ policy wil l automatical ly include the John Hancock Vitality PLUS program, which means they can earn premium savings and rewards for the everyday steps they take to live healthy.
						</p>
					</div>
				</div>
				<div class="item rounded-xl overflow-hidden">
					<button type="button" class="toggleFaqBtn text-left cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:m-0 [&_p]:justify-center [&_p]:items-center">
							<p><span class="list-number"></span></p>
						</div>
						<h3>Extra financial protection to meet the unexpected</h3>
					</button>
					<div class="toggleBlock px-6 pt-0 hidden rounded-b-xl [&_p]:pl-16 [&_p]:opacity-70">
						<p>
							Your clients’ policy wil l automatical ly include the John Hancock Vitality PLUS program, which means they can earn premium savings and rewards for the everyday steps they take to live healthy.
						</p>
					</div>
				</div>
				<div class="item rounded-xl overflow-hidden">
					<button type="button" class="toggleFaqBtn text-left cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:m-0 [&_p]:justify-center [&_p]:items-center">
							<p><span class="list-number"></span></p>
						</div>
						<h3>Cost-effective coverage for fixed period of time</h3>
					</button>
					<div class="toggleBlock px-6 pt-0 hidden rounded-b-xl [&_p]:pl-16 [&_p]:opacity-70">
						<p>
							Your clients’ policy wil l automatical ly include the John Hancock Vitality PLUS program, which means they can earn premium savings and rewards for the everyday steps they take to live healthy.
						</p>
					</div>
				</div>
				<div class="item rounded-xl overflow-hidden">
					<button type="button" class="toggleFaqBtn text-left cursor-pointer transition flex gap-5 items-center [&_h3]:m-0 [&_h3]:font-normal [&_h3]:h4 py-4 px-6">
						<div class="[&_p]:bg-primary [&_p]:rounded-full [&_p]:w-10 [&_p]:h-10 [&_p]:mx-auto [&_p]:font-medium [&_p]:leading-[1.77] [&_p]:text-white [&_p]:flex [&_p]:m-0 [&_p]:justify-center [&_p]:items-center">
							<p><span class="list-number"></span></p>
						</div>
						<h3>Simplified Vitality experience</h3>
					</button>
					<div class="toggleBlock px-6 pt-0 hidden rounded-b-xl [&_p]:pl-16 [&_p]:opacity-70">
						<p>
							Your clients’ policy wil l automatical ly include the John Hancock Vitality PLUS program, which means they can earn premium savings and rewards for the everyday steps they take to live healthy.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="flex flex-row-reverse justify-center items-center gap-5 lg:gap-10 lg:w-2/5">
			<figure class="[&_img]:rounded-2xl">
				<img src="<?php echo site_url() ?>/wp-content/uploads/Benefits-3.jpg" alt="Benefits-3" width="280" height="465" loading="lazy">
			</figure>
			<div class="flex flex-col max-lg:items-center gap-5 sm:translate-x-5">
				<figure class="[&_img]:rounded-2xl [&_img]:w-full [&_img]:h-full">
					<img src="<?php echo site_url() ?>/wp-content/uploads/Benefits-1.jpg" alt="Benefits-1" width="242" height="277" loading="lazy">
				</figure>
				<figure class="[&_img]:rounded-2xl sm:translate-x-10 [&_img]:w-full [&_img]:h-full">
					<img src="<?php echo site_url() ?>/wp-content/uploads/authentic-small-youthful-marketing-agency.jpg" alt="authentic-small-youthful-marketing-agency" width="346" height="225" loading="lazy">
				</figure>
			</div>
		</div>
	</div>
</section>
<!--End of Benefits Section-->

<!--Start of Video Section  -->
<section class="pb-8 md:pb-12 lg:pb-16 pt-16 md:pt-24 lg:pt-32">
	<div class="container">
		<div class="relative text-white [&_video]:rounded-2xl [&_video]:w-full max-sm:[&_video]:h-80 [&_video]:object-cover [&_video]:object-center before:rounded-2xl before:absolute before:inset-0 before:bg-gradient-to-t before:to-[#fe7b7c66] before:from-[#1c3a4f29]">
			<div class="absolute inset-0 top-4 sm:top-16 text-center" id="video-overlay">
				<div class="bg-[url('http://work/silvahakopian.com/www/wp-content/uploads/watch-video-badge.png')] bg-cover bg-center bg-no-repeat max-w-[155px] mx-auto">
					<p>Watch Video</p>
				</div>
				<h2>What is John Hancock Vitality?</h2>
				<figure class="flex justify-center" id="play-video">
					<img src="http://work/silvahakopian.com/www/wp-content/uploads/Video-Icon.png" alt="">
				</figure>
			</div>
			<video width="1280" height="720" id="video">
				<source src="https://s3-figma-videos-production-sig.figma.com/video/1309113881691748219/TEAM/b1f7/cf81/-88c2-4da2-ba8b-fc97f00806fa?Expires=1719187200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=g3Iz9dACH-mLTddBx5~Whrkp6oOT74k70~gk1eUoSQ36nyRRmunnHSt37cGjvzq2s1xNMKUECElS0qB3XaCgCPF9nOLx0J2XHj2qpNwSXfzceQmvlzxHY3YpItT~J-a0e27QYriLiq0V1cWePhkJhr5tuFu8mHlwncEF88dznrjkdvo91NHb1jmCBDCqnsfM6kdqDkIBz~8ZWYLEuXnQu78daFNiRM9ty2CVtSCf5KOR4dBPSlgw5Rzem8USRQyvFyNd3bCBGWZO4G3IMkiJqxKl7cRe7fNu0344DzNJbeVHmUpfPXnXjppYJqY5XgQOhzvSuQVZsYcSgUK6qgoPRw__" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>
	</div>
</section>
<!--End of Videos Section  -->

<!--Start of Get In Touch Section-->
<section class="py-8 md:py-12 lg:py-16">
	<div class="container flex flex-col lg:flex-row items-start gap-12">
		<div class="w-full lg:w-2/5 get-in-touch-form shadow-[0_4px_74px_0px_rgba(28,58,79,0.07)] p-4 md:p-8 [&_h2]:pb-4 md:[&_h2]:pb-8" id="get-in-touch-form">
			<h2>Get in Touch</h2>
			<?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax=true]'); ?>
		</div>
		<div class="w-full lg:w-3/5 p-4 md:p-8">
			<div class="[&_h2]:pb-4 md:[&_h2]:pb-8">
				<h2>Have questions Get answers</h2>
			</div>
			<div class="faq-accordion">
				<div class="item border-b border-ss-dark-blue/20 overflow-hidden">
					<button type="button" class="toggleFaqBtn w-full transition-all relative before:absolute before:content-['\e900'] before:right-1 before:opacity-20 before:top-3 before:font-icomoon [&_h3]:m-0 [&_h3]:font-medium [&_h3]:h5 py-4 [&_h3]:pr-5 text-left">
						<h3>Who is Vitality?</h3>
					</button>
					<div class="toggleBlock hidden pt-0 [&_p]:opacity-70">
						<p>
							We’re collaborating with Vitality because they’re the global leader in integrating wellness benefits with life insurance products. Vitality has an established track-record of creating interactive, personalized programs. Millions of members worldwide use their online tools to identify and track health and lifestyle goals
						</p>
					</div>
				</div>
				<div class="item border-b border-ss-dark-blue/20 overflow-hidden">
					<button type="button" class="toggleFaqBtn w-full transition-all relative before:absolute before:content-['\e900'] before:right-1 before:opacity-20 before:top-3 before:font-icomoon [&_h3]:m-0 [&_h3]:font-medium [&_h3]:h5 py-4 [&_h3]:pr-5 text-left">
						<h3>Can a client who is rated still benefit from the program?</h3>
					</button>
					<div class="toggleBlock hidden pt-0 [&_p]:opacity-70">
						<p>
							Yes, even clients with medical impairments can benefit from the program. Remember, they don’t have to be an athlete to participate. Members can earn points by doing simple things like walking, taking online courses, or visiting the dentist. In fact, if your client is living with diabetes, the program offers additional resources and point-earning activities to help them live long, healthy lives. Visit JHSalesHub.com/Aspire for more information.
						</p>
					</div>
				</div>

				<div class="item border-b border-ss-dark-blue/20 overflow-hidden">
					<button type="button" class="toggleFaqBtn w-full transition-all relative before:absolute before:content-['\e900'] before:right-1 before:opacity-20 before:top-3 before:font-icomoon [&_h3]:m-0 [&_h3]:font-medium [&_h3]:h5 py-4 [&_h3]:pr-5 text-left">
						<h3>Can my older clients benefit from the program?</h3>
					</button>
					<div class="toggleBlock hidden pt-0 [&_p]:opacity-70">
						<p>
							Yes, the Vitality Program is available for issue ages 71 through 90. This customized program takes into account an older client’s unique health and wellness considerations. That means, they’ll get rewarded for the things they do to stay healthy, but at a pace that makes sense for them.
						</p>
						<p>
							Note: The customized program will automatically apply to in force policy owners who have other John Hancock Vitality policies once they reach age 71 or older.
						</p>
					</div>
				</div>


				<div class="item border-b border-ss-dark-blue/20 overflow-hidden">
					<button type="button" class="toggleFaqBtn w-full transition-all relative before:absolute before:content-['\e900'] before:right-1 before:opacity-20 before:top-3 before:font-icomoon [&_h3]:m-0 [&_h3]:font-medium [&_h3]:h5 py-4 [&_h3]:pr-5 text-left">
						<h3>How does the Apple Watch program work?</h3>
					</button>
					<div class="toggleBlock hidden pt-0">
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
						<div class="flex flex-col lg:flex-row gap-3 bg-white p-3">
							<div class="lg:w-1/2">
								<div class="[&_p]:font-semibold">
									<p>Apple Watch 8 and Ultra</p>
								</div>
								<div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-2 xl:grid-cols-4 gap-2 [&_p]:text-white [&_p]:text-base [&_p]:font-semibold [&_p]:py-4 [&_p]:px-1 lg:[&_p]:py-6 lg:[&_p]:px-3 [&_p]:m-0 [&_p]:mx-auto [&_p]:flex [&_p]:justify-center [&_p]:items-center">
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
							<div class="lg:w-1/2">
								<div class="[&_p]:font-semibold">
									<p>SE</p>
								</div>
								<div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-2 xl:grid-cols-4 gap-2 [&_p]:text-white [&_p]:text-base [&_p]:font-semibold [&_p]:py-4 [&_p]:px-1 lg:[&_p]:py-6 lg:[&_p]:px-3 [&_p]:m-0 [&_p]:mx-auto [&_p]:flex [&_p]:justify-center [&_p]:items-center">
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
				<div class="item overflow-hidden">
					<button type="button" class="toggleFaqBtn w-full transition-all relative before:absolute before:content-['\e900'] before:right-1 before:opacity-20 before:top-3 before:font-icomoon [&_h3]:m-0 [&_h3]:font-medium [&_h3]:h5 py-4 [&_h3]:pr-5 text-left">
						<h3>What is considered a Standard or Advanced Workout?</h3>
					</button>
					<div class="toggleBlock hidden pt-0 [&_p]:opacity-70">
						<p>
							Your clients’ monthly Apple Watch payments will be based on the number of Standard or Advanced Workouts they complete each month. The chart below details the many ways they can accomplish this:
						</p>
						<table class="table-auto text-left [&_th]:font-semibold my-5 border-ss-dark-blue/10 capitalize bg-gray-100">
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
</section>
<!--End of Get In Touch Section-->

<!--Start of Image Slider Section  -->
<section class="bg-primary/20 py-16">
	<div class="container text-center pb-10 [&_h4]:uppercase">
		<h4>Our Trusted Partners</h4>
	</div>
	<div class="swiper py-5 lg:py-0 image-slider [&_.swiper-slide_img]:max-h-[80px] sm:[&_.swiper-slide_img]:max-h-[120px] [&_.swiper-slide_img]:max-w-[100%] [&_.swiper-slide_img]:w-auto md:[&_.swiper-slide_img]:w-full xl:[&_.swiper-slide_img]:max-h-none [&_.swiper-slide]:w-auto">
		<div class="swiper-wrapper items-center">
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-6.png" width="145" height="40" loading="lazy" alt="Slider Image 6">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-5.png" width="145" height="40" loading="lazy" alt="Slider Image 5">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-4.png" width="145" height="40" loading="lazy" alt="Slider Image 4">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-3.png" width="145" height="40" loading="lazy" alt="Slider Image 3">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-2.png" width="145" height="40" loading="lazy" alt="Slider Image 2">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-1.png" width="145" height="40" loading="lazy" alt="Slider Image 1">
				</figure>
			</div>

			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-6.png" width="145" height="40" loading="lazy" alt="Slider Image 6">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-5.png" width="145" height="40" loading="lazy" alt="Slider Image 5">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-4.png" width="145" height="40" loading="lazy" alt="Slider Image 4">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-3.png" width="145" height="40" loading="lazy" alt="Slider Image 3">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-2.png" width="145" height="40" loading="lazy" alt="Slider Image 2">
				</figure>
			</div>
			<div class="swiper-slide">
				<figure>
					<img src="<?php echo site_url() ?>/wp-content/uploads/slider-img-1.png" width="145" height="40" loading="lazy" alt="Slider Image 1">
				</figure>
			</div>
		</div>
	</div>
</section>
<!--End of Image Slider Section  -->

<?php
get_footer();
