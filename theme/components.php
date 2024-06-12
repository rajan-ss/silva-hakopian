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
</section>

<?php
get_footer();
