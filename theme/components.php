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
	<br>
	<p class="section-tag">Section Titles</p>
  <br>
    <p>Clients</p>
    <div class="flex flex-row-reverse justify-end items-center max-sm:absolute bottom-0 left-1/2 max-sm:-translate-x-1/2 pt-[18px] pb-[10px] sm:pr-[14px] [&_p]:text-sm [&_p]:leading-[1.14] [&_p]:mb-0 lg:-mr-12 xl:mr-0">
      <p>
        <span class="font-lead font-semibold leading-[1.1] text-lg">
          2500+
        </span><br>
        Happy Clients
      </p>
      <div class="flex ml-[18px]">
        <figure class="-ml-[18px]">
          <img src="<?php echo site_url()?>/wp-content/uploads/2024/06/client-4.png" alt="Client 4" width="52" height="52" loading="lazy">
        </figure>
        <figure class="-ml-[18px]">
          <img src="<?php echo site_url()?>/wp-content/uploads/2024/06/client-3.png" alt="Client 3" width="52" height="52" loading="lazy">
        </figure>
        <figure class="-ml-[18px]">
          <img src="<?php echo site_url()?>/wp-content/uploads/2024/06/client-2.png" alt="Client 2" width="52" height="52" loading="lazy">
        </figure>
        <figure class="-ml-[18px]">
          <img src="<?php echo site_url()?>/wp-content/uploads/2024/06/client-1.png" alt="Client 1" width="52" height="52" loading="lazy">
        </figure>
      </div>
    </div>
</section>

<?php
get_footer();
