<?php
/*
  Template Name: Home Page
 */


// Advanced Custom Fields









$instructor_section_title = get_field( 'instructor_section_title' );
$instructor_name = get_field( 'instructor_name' );
$bio_except = get_field( 'bio_except' );
$full_bio = get_field( 'full_bio' );
$twitter_username = get_field( 'twitter_username' );
$facebook_username = get_field( 'facebook_username' );
$google_plus_username = get_field( 'google_plus_username' );
$num_students = get_field( 'num_students' );
$num_reviews = get_field( 'num_reviews' );
$num_courses = get_field( 'num_courses' );

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
						<li><a href="resources.html">Resources</a></li>
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

<?phpget_template_part('content', 'coursefeatures'); ?>

<?phpget_template_part('content', 'projectfeatures'); ?>

<?phpget_template_part('content', 'videofeaturette'); ?>

<!-- INSTRUCTOR ==================================== -->
<section id="instructor">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-6">
				<div class="row">
					<div class="col-lg-8">
						<h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
					</div>
					<!-- end col -->
					<div class="col-lg-4">

						<?php if ( !empty( $twitter_username ) ): ?>
							<a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
						<?php endif; ?>

						<?php if ( !empty( $facebook_username ) ): ?>
							<a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
						<?php endif; ?>

						<?php if ( !empty( $google_plus_username ) ): ?>
							<a href="https://plus.google.com/<?php echo $google_plus_username; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
						<?php endif; ?>

					</div>
					<!-- end col -->
				</div>
				<!-- row -->
				<p class="lead">
					<?php echo $bio_except; ?>
				</p>
				<?php echo $full_bio; ?>
				<hr>
				<h3>The Numbers <small>They Don&rsquo;t Lie</small></h3>
				<div class="row">
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo $num_students; ?> <span>students</span>
							</div>
							<!-- num-content -->
						</div>
						<!-- num -->
					</div>
					<!-- end col -->

					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo $num_reviews; ?>+<span>reviews</span>
							</div>
							<!-- num-content -->
						</div>
						<!-- num -->
					</div>
					<!-- end col -->

					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo $num_courses; ?> <span>courses</span>
							</div>
							<!-- num-content -->
						</div>
						<!-- num -->
					</div>
					<!-- end col -->
				</div>
				<!-- row -->
			</div>
			<!-- end col -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->

</section>
<!-- instructor -->

<!-- TESTIMONIALS ==================================== -->
<section id="kudos">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>What People Are Saying About Brad</h2>

				<?php
				$loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id',
					'order' => 'ASC' ) );
				?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<!-- Testimonial -->
					<div class="row testimonial">
						<div class="col-sm-4">

							<?php
							if ( has_post_thumbnail() ) { // check for feature image
								the_post_thumbnail( array( 200, 200 ) );
							}
							?>						
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								<?php the_content(); ?>
								<cite>&mdash; <?php the_title(); ?></cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
				<?php endwhile; ?>

			</div><!-- end col -->
		</div><!-- row -->
	</div><!-- container -->

</section><!-- kudos -->

<?php
get_footer();
