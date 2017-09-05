<?php /**
Template Name: Front Page
**/

 get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container is-fluid prelude">
			<div class="columns">
				<div class="column is-4 is-offset-7">
					<h1 class="has-text-centered">Clean & Sleek Responsive Design</h1>
					<p>Your web site should be a reflection of you, your product and/or services...that is what I strive to achieve.</p>

					<p>Let me know what you need, then leave it to me to get your website up as smoothly, quickly and painlessly as possible.</p>

					<div class="has-text-centered">
						<a class="button is-primary is-medium" href="<?php echo get_site_url(); ?>/contact" class="btn btn-info btn-lg">Request an Evaluation</a>
					</div>
				</div>
			</div>
		</div>
		<!--end prelude-->
		<div class="info">
			<div class="container">
				<div class="columns">
					<div class="column one-third square-outer">
						<div class="square-inner has-text-centered">
							<img src="<?php echo get_template_directory_uri(); ?>/images/003-coding.png">
							<h2>Web Design</h2>
							<p>From a basic website to a flexible CMS platform, there is a solution to fit your needs.</p>
						</div>
					</div>
					<div class="column one-third square-outer">
						<div class="square-inner has-text-centered">
							<img src="<?php echo get_template_directory_uri(); ?>/images/001-sky.png">
							<h2>Web Hosting</h2>
							<p>Reliable hosting, email and your very own cPanel are available at an affordable rate.</p>
						</div>
					</div>
					<div class="column one-third square-outer">
						<div class="square-inner has-text-centered">
							<img src="<?php echo get_template_directory_uri(); ?>/images/002-settings.png">
							<h2>Support</h2>
							<p>Monthly packages include software upgrades, backups, web hosting and site updates.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end info-->
		<div class="action">
			<div class="container">
			<div class="columns has-text-centered">
				<div class="column is-three-quarters">
				<h2>Ready to get started?</h2>
			 	<p>Get in touch with me today so that I may help find a solution to fit your business needs and budget.</p>
				</div>
				<div class="column is-vcentered">
				<a class="button is-primary is-medium" href="<?php echo get_site_url(); ?>/contact">Free Consultation</a>
				</div>
			</div>
</div>
		</div>
		<!--end action-->

	</main>
</div>

<?php get_footer(); ?>