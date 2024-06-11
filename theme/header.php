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

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site-wrapper">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'silva-hakopian' ); ?></a>

	<header class="site-header">
		<div class="container">
			<h1>This is header.</h1>
		</div>
	</header>

	<div id="content">
