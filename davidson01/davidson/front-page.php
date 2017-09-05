<?php /**
Template Name: Front Page
* @package davidson
*/

get_header();

?>
<div class="prelude">
	<div class="row justify-content-end">
		<div class="col-md-4">
			<div class="intro">
				<h1 class="text-center">Clean & Sleek Responsive Design</h1>
				<p>Your web site should be a reflection of you, your product and/or services...that is what I strive to achieve.</p>

				<p>Let me know what you need, then leave it to me to get your website up as smoothly, quickly and painlessly as possible.</p>

				<div class="text-center">
					<a class="btn btn-primary btn-lg" href="<?php echo get_site_url(); ?>/contact">Request an Evaluation</a>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

<div class="info">
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="square-outer">
						<div class="square-inner text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/003-coding.png">
							<h2>Web Design</h2>
							<p>From a basic website to a flexible CMS platform, there is a solution to fit your needs.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="square-outer">
						<div class="square-inner text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/001-sky.png">
							<h2>Web Hosting</h2>
							<p>Reliable hosting, email and your very own cPanel are available at an affordable rate.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="square-outer">
						<div class="square-inner text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/002-settings.png">
							<h2>Support</h2>
							<p>Monthly packages include software upgrades, backups, web hosting and site updates.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--end info-->

<!--end info-->
<div class="action">
	<div class="wrapper">
	<div class="container">
		<div class="row text-center align-items-center">
			<div class="col-md-9">
			<h2>Ready to get started?</h2>
			<p>Get in touch with me today so that I may help find a solution to fit your business needs and budget.</p>
			</div>
			<div class="col-md-3 ">
			<a class="btn btn-primary" href="<?php echo get_site_url(); ?>/contact">Free Consultation</a>
			</div>
		</div>
	</div>
</div><!--end action-->
</div>
<?php get_footer(); ?>
