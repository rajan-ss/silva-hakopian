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

<?php
get_footer();
