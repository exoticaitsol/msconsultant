<?php
/* Template Name: Service Template */
get_header();?>

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

<section class="company_services py_6">
	<div class="container">
		<div class="company_inner_sec">
			<ul>
				<li>
					<div class="service_design_content">
						<div class="service_content">
							<h3><?= get_field('service_page_section1')['heading'];?></h3>
							<p><?= get_field('service_page_section1')['pagragrah'];?></p>
						</div>
						<div class="design_img">
							<img src="<?= get_field('service_page_section1')['image'];?>">
						</div>
					</div>
				</li>
				<li>
					<div class="service_design_content">
						<div class="service_content">
							<h3><?= get_field('service_page_section1')['heading1'];?></h3>
							<p><?= get_field('service_page_section1')['paragraph1'];?></p>
						</div>
						<div class="design_img">
							<img src="<?= get_field('service_page_section1')['image1'];?>">
						</div>
					</div>
				</li>
				<li>
					<div class="service_design_content">
						<div class="service_content">
							<h3><?= get_field('service_page_section1')['heading2'];?></h3>
							<p><?= get_field('service_page_section1')['paragraph2'];?></p>
						</div>
						<div class="design_img">
							<img src="<?= get_field('service_page_section1')['image2'];?>">
						</div>
					</div>
				</li>
				<li>
					<div class="service_design_content">
						<div class="service_content">
							<h3><?= get_field('service_page_section1')['heading3'];?></h3>
							<p><?= get_field('service_page_section1')['paragraph3'];?></p>
						</div>
						<div class="design_img">
							<img src="<?= get_field('service_page_section1')['image3'];?>">
						</div>
					</div>
				</li>
				<li>
					<div class="service_design_content">
						<div class="service_content">
							<h3><?= get_field('service_page_section1')['heading4'];?></h3>
							<p><?= get_field('service_page_section1')['paragraph4'];?></p>
						</div>
						<div class="design_img">
							<img src="<?= get_field('service_page_section1')['image4'];?>">
						</div>
					</div>
				</li>
				<li>
					<div class="service_design_content">
						<div class="service_content">
							<h3><?= get_field('service_page_section1')['heading5'];?></h3>
							<p><?= get_field('service_page_section1')['paragraph5'];?></p>
						</div>
						<div class="design_img">
							<img src="<?= get_field('service_page_section1')['image5'];?>">
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="Interior_counter_sec py_6 about_counter_sec">
    <div class="container">
		<div class="las23_ef">
			<h2><?= get_field('counter_service')['heading']; ?></h2>
		</div>
		<div class="American_National_Renovations_main">  
			<div id="projectFacts" class="sectionClass">
				<div class="fullWidth eight columns">
					<div class="projectFactsWrap ">
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_service')['number']; ?>" style="visibility: visible;">
							<span id="count1">2000</span>
							<p><?= get_field('counter_service')['name']; ?></p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_service')['number1']; ?>" style="visibility: visible;">
							<span id="count2">500</span>
							<p><?= get_field('counter_service')['name1']; ?></p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_service')['number2']; ?>" style="visibility: visible;">
							<span id="count3">1000</span>
							<p><?= get_field('counter_service')['name2']; ?></p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_service')['number3']; ?>" style="visibility: visible;">
							<span id="count4">100</span>
							<p><?= get_field('counter_service')['name3']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();?>