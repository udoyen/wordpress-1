<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$optin_text = get_post_meta( 25, 'optin_text', true );
$optin_button_text = get_post_meta( 25, 'optin_button_text', true );

?>

<!-- OPT IN SECTION ============================== -->
<section id="optin">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<p class="lead"><?php echo $optin_text; ?></p>
			</div>
			<!-- col -->
			<div class="col-sm-4">
				<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>

			</div>
			<!-- col -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</section>
