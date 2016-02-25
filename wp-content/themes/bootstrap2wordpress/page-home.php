<?php
/*
  Template Name: Home Page
 */


// Advanced Custom Fields

get_header();
?>

<!-- HEADER ===================================== -->
<header class="site-header" role="banner">
	<!-- NAVBAR -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="/" class="navbar-brand">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress" /></a>

				</div>
				<!-- navbar-header -->
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="/" class="active">home</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="resources">Resources</a></li>
						<li><a href="contact.html">Contact</a></li>

					</ul>
					<!-- nav -->

				</div>
				<!-- navbar-collapse -->
			</div>
			<!-- navbar container -->

		</div>
		<!-- navbar -->
	</div>
	<!-- navbar-wrapper -->

</header><!-- header -->

<?php get_template_part('content', 'hero'); ?>

<?php get_template_part('content', 'optin'); ?>

<?php get_template_part('content', 'boost'); ?>

<?php get_template_part('content', 'benefits'); ?>

<?php get_template_part('content', 'coursefeatures'); ?>

<?php get_template_part('content', 'projectfeatures'); ?>

<?php get_template_part('content', 'videofeaturette'); ?>

<?php get_template_part('content', 'instructor'); ?>

<?php get_template_part('content', 'testimonial'); ?>


<?php
get_footer();
