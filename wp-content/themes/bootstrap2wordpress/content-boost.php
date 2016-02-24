<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$income_feature_image = get_field( 'income_feature_image' );
$income_section_title = get_field( 'income_section_title' );
$income_section_desc = get_field( 'income_section_description' );
$reason_1_title = get_field( 'reason_1_title' );
$reason_1_desc = get_field( 'reason_1_description' );
$reason_2_title = get_field( 'reason_2_title' );
$reason_2_desc = get_field( 'reason_2_description' );

?>

<!-- BOOST YOUR INCOME ============================= -->
<section id="boost-income">
	<div class="container">
		<div class="section-header">
			<!-- If user uploaded an image -->
			<?Php if ( !empty( $income_feature_image ) ) : ?>
				<img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>" />
			<?php endif; ?>

			<h2>How You Can Boost Your Income</h2>
		</div>
		<!-- section-header -->
		<p>
			Whether you&rsquo;re a freelance designer, entrepreneur, employee for a company, code hobbyist, or looking for a new career &mdash; this course gives you an immensely valuable skill that will enable you to either:
		</p>
		<div class="row">
			<div class="col-sm-6">
				<h3>Make money on the side</h3>
				<p>
					So you can save up for that Hawaiian vacation you&rsquo;ve been wanting, help pay off your debt, your car, your mortgage, or simply just to have bonus cash laying around.
				</p>

			</div>
			<!-- col -->
			<div class="col-sm-6">
				<h3>Create a full time income</h3>
				<p>
					WordPress developers have options. Many developers make a generous living off of creating custom WordPress themes and selling them on websites like ThemeForest. Freelance designers and developers can also take on WordPress projects and make an extra $1,000
					- $5,000+ per month.
				</p>

			</div>
			<!-- col -->
		</div>
		<!-- row -->

	</div>
	<!-- container -->

</section>
