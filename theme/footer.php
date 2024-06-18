<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Silva_Hakopian
 */

?>

</div><!-- #content -->

<footer class="bg-ss-dark-blue site-footer">
	<div class="container pt-12 pb-10 flex max-lg:flex-col max-lg:items-center justify-between gap-4">
		<div>
			<figure class="pb-10">
				<img src="<?php echo site_url() ?>/wp-content/uploads/header-logo.png" alt="Silva logo" width="198" height="67" loading="lazy">
			</figure>
			<div class="flex flex-row gap-2">
				<a href="#">
					<figure>
						<img src="<?php echo site_url() ?>/wp-content/uploads/Insta.png" alt="Insta" width="34" height="35" loading="lazy">
					</figure>
				</a>
				<a href="#">
					<figure>
						<img src="<?php echo site_url() ?>/wp-content/uploads/Linkedin.png" alt="Linkedin" width="34" height="35" loading="lazy">
					</figure>
				</a>
				<a href="#">
					<figure>
						<img src="<?php echo site_url() ?>/wp-content/uploads/Twitter.png" alt="Twitter" width="34" height="35" loading="lazy">
					</figure>
				</a>
				<a href="#">
					<figure>
						<img src="<?php echo site_url() ?>/wp-content/uploads/Facebook.png" alt="Facebook" width="34" height="35" loading="lazy">
					</figure>
				</a>

			</div>
		</div>
		<div class="[&_p]:mb-[10px] lg:w-4/5 leading-loose text-sm text-white [&_p]:text-[13px]">
			<p><span class="font-bold text-sm">Insurance policies and/or associated riders and features may not be available in all states.</span>
			</p>
			<p>Please consult your financial representative as to how premium savings may affect the policy you purchase. Premium savings are in comparison to the same John Hancock life insurance policy without Vitality PLUS. The level of premium savings are cumulative over the life of the policy & will vary based upon underwriting status, issue age, policy type, the terms of the policy & the Vitality Status achieved. Premium savings are only available with Vitality PLUS. In New York, entertainment, shopping, & travel rewards are not available & are replaced by healthy living & active lifestyle rewards.If you have a Term policy with Vitality PLUS with a face amount less than $2,000,000: you are only eligible to earn the latest Apple Watch or get a complimentary device, discounts on wearable devices, up to $50 in instant savings per month on fresh produce purchases, a free premium subscription to Headspace, a 15% healthy gear discount, shopping & entertainment discounts, & a free health check in the first Program Year only. Term policies with face amounts of $2,000,000 & above are eligible for the full suite of rewards & discounts. The life insurance policy describes coverage under the policy, exclusions & limitations, what you must do to keep your policy inforce, & what would cause your policy to be discontinued. Please contact your licensed agent or John Hancock for more information, costs, & complete details on coverage. Vitality Rewards may vary based on the type of insurance policy purchased for the insured.
			</p>
			<p>In New York, entertainment, shopping, & travel rewards are not available & are replaced by healthy living & active lifestyle rewards. Rewards & discounts are subject to change & are not guaranteed to remain the same for the life of the policy. Products or services offered under the Vitality Program are not insurance & are subject to change. There may be additional costs associated with these products or services & there are additional requirements associated with participation in the program. For more information, please contact the company at JohnHancock.com or via telephone at 888-333-2659.
			</p>
			<p>Insurance products are issued by: <br>
				John Hancock Life Insurance Company (U.S.A.), <br>
				Boston, MA 02116 (not licensed in New York) and <br>
				John Hancock Life Insurance Company of New York, Valhalla, NY 10595. <br>
				MLINY060623424-1
			</p>
		</div>
	</div>
	<div class="bg-white/10 py-4">
		<div class="container flex max-md:flex-col items-center justify-between [&_p]:mb-0 text-white/70 text-base text-center leading-[1.87]">
			<p>Healthy for life Copyright &copy; <?php echo date('Y') ?>, All rights reserved.</p>
			<div class="flex space-x-4 sm:space-x-12">
				<p>Privacy Policy</p>
				<p>Terms & Conditions</p>
			</div>
		</div>
	</div>
</footer>
<div class="sticky-footer">
	<a href="tel:4422292409" class="btn btn-primary btn-block">442-229-2409</a>
</div>

</div><!-- #page/.site-wrapper -->



<!-- Calendly link widget begin -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

<!-- Calendly link widget end -->



<?php wp_footer(); ?>

</body>

</html>
