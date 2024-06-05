<?php
/* Template Name: Contact Template */
get_header();
?>

<!-- Banner_section -->
<section class="about_baner_sec bg_style" style="background-image: url('<?= get_field('banner')['banner_image'];?>')">
	<div class="container">
        <div class="slide-content">
			<div class="main_banner_text">   
				<h5 class="banner_sub_title"><?= get_field('banner')['banner_heading'];?></h5>       
				<h1 class="banner_title"><?= get_field('banner')['banner_sub_heading'];?></h1>
				<div class="banner_btn">
					<a href="">See Projects
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Arrow 1.png">
					</a>
				</div>                     
			</div>
		</div>
	</div>
</section>

<section class="home-contact-form py_6 contact_section">
	<div class="container">
   		<div class="inner_contact_sec">
			<div class="footer_link_list footer120 contact_us_sec">
				<ul>
					<li>
						<a href="tel:096463 15717" class="phone_call">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone1.png">
						096463 15717</a>
					</li>
					<li>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/location1.png">
						<span class="location"> Plot No 154B Sector 82, SAS Nagar,  Punjab  </span>
					</li>
					<li>
						<a href="mailto:contact@msconsultant.com" class="email_mes">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Email.png">
						contact@msconsultant.com</a>
					</li>
				</ul>   
			</div>
			<div class="contact-heading">
				<h5>Contact Us</h5>
				<h2>Get In Touch</h2>
			</div>
			<div class="contact-form">
				<?php echo do_shortcode('[contact-form-7 id="1237a88" title="Contact form 1"]');?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>