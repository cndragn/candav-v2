<?php /**
Template Name: Front Page
**/

 get_header(); ?>
 <div class="container-fluid prelude">
 	<div class="row">
		<div class="col-md-4 col-md-offset-7">		
	 		<h1 class="text-center">Clean & Sleek Responsive Design</h1>
	 			<p>Your web site should be a reflection of you, your product and/or services...that is what I strive to achieve.</p>

				<p>Let me know what you need, then leave it to me to get your website up as smoothly, quickly and painlessly as possible.</p>

				<div class="text-center">
					<a href="<?php echo get_site_url(); ?>/contact" class="btn btn-info btn-lg" role="button">Request an Evaluation</a>
				</div>
	 		<p>
	 	</div>
	 </div>
 </div>
 <div class="container-fluid info">
 	<div class="bg-color">
 		<div class="row container blocks">
 			<div class="col-md-4 info-square-outer">
 				<div class="info-square-inner">
 				<img src="<?php echo get_template_directory_uri(); ?>/images/003-coding.png">
 				<h2>Website Design</h2>
					<p>From a basic website to a flexible CMS platform, there is a solution to fit your needs.</p>
				</div>
 			</div>
 			<div class="col-md-4 info-square-outer">
 				<div class="info-square-inner">
 				<img src="<?php echo get_template_directory_uri(); ?>/images/001-sky.png">
 				<h2>Web Hosting</h2>
					<p>Reliable hosting, email and your very own cPanel are available at an affordable rate.</p>
				</div>
 			</div>
 			<div class="col-md-4 info-square-outer">
 				<div class="info-square-inner">
 				<img src="<?php echo get_template_directory_uri(); ?>/images/002-settings.png">
 				<h2>Support</h2>
					<p>Monthly packages include software upgrades, backups, web hosting and site updates.</p>
				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <div class ="container-fluid action">
	 <div class="container">
	 	<div class="row">
		 	<div class="col-md-9 text-center">
			 	<h3>Ready to get started?</h3>
			 	<p>Get in touch with me today so that I may help find a solution to fit your business needs and budget.</p>
		 	</div>
		 	<div class="col-md-3 text-center">
			 	<a href="<?php echo get_site_url(); ?>/contact" class="btn btn-info btn-lg" role="button">Free Consultation</a>
		 	</div>
	 	</div>
 	</div>
 </div>

<?php get_footer(); ?>