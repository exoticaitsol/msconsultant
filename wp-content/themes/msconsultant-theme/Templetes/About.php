<?php
/* Template Name: About Template */
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


<!-- First -->
<section class="Quality_Materials_sec py_6">
	<div class="container">
		<div class="inner_Materials_sec">
			<div class="Materials_img">
			<img src="<?= get_field('about_page_section_1')['image'];?>">
			</div>
			<div class="materials_content">
				<div class="heading_image_slider">
					<h2><?= get_field('about_page_section_1')['heading'];?></h2>
					<p><?= get_field('about_page_section_1')['paragraph'];?></p>
   			 	</div>
				<div class="materials_list">
					<div class="Buildings_materials">
					<?= get_field('about_page_section_1')['materials_list'];?>
					</div>
					<div class="discount">
						<div class="dis">
						<?= get_field('about_page_section_1')['experience'];?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- second -->
<section class="Design_section py_6 bg_style" style="background-image: url('<?= get_field('about_page_section_2')['image'];?>')">
	<div class="container">
		<div class="design_inner_sec">
			<div class="heading_image_slider">
				<h2><?= get_field('about_page_section_2')['heading'];?></h2>
				<p><?= get_field('about_page_section_2')['paragraph'];?></p>
			</div>
		</div>
	</div>
</section>

<!-- third -->
<section class="third_slide_sec">
	<div class="slid_content">
		<marquee>
			<div class="inner_slid_tit">
				<h2><?= get_field('about_page_slid_content')['heading'];?></h2>
				<h2 class="slid_tit"><?= get_field('about_page_slid_content')['slide_title'];?></h2>
			</div>
		</marquee>
	</div>				
</section>

<!-- forth -->
<section class="Optimize_Building_sec py_6">
	<div class="container">
		<div class="Optimize_Building_inner">
			<div class="heading_para">
				<h2><?= get_field('about_page_section_4')['heading'];?></h2>
				<p><?= get_field('about_page_section_4')['paragraph1'];?></p>
				<p><?= get_field('about_page_section_4')['paragraph2'];?></p>
        	</div>
			<div class="left_optimize_con">
			<img src="<?= get_field('about_page_section_4')['image'];?>">
			</div>
		</div>
	</div>	
</section>

<!-- fifth -->
<section class="our_team_sec">
	<div class="container">
		<div class="our_team_title">
			<!-- <h5>OUR TEAM MEMBERS</h5> -->
			<h2><?= get_field('about_page_teme_menber')['heading'];?></h2>
		</div>
		<div class="our_team_inner">
			<div class="right_founder_details">
				<div class="founder_det">
					<div class="found_img">
						<img src="<?= get_field('about_page_teme_menber')['image1'];?>">
					</div>
					<div class="founder_title">
						<h3><?= get_field('about_page_teme_menber')['name1'];?></h3>
						<h4><?= get_field('about_page_teme_menber')['designation1'];?></h4>
						<div class="social_link">
							<a href="<?= get_field('about_page_teme_menber')['fb_url1'];?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social1.png"></a>
							<a href="<?= get_field('about_page_teme_menber')['youtub_url1'];?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social2.png"></a>
						</div>
					</div>
				</div>
				<div class="founder_det">
					<div class="found_img">
					<img src="<?= get_field('about_page_teme_menber')['image2'];?>">
					</div>
					<div class="founder_title">
						<h3><?= get_field('about_page_teme_menber')['name2'];?></h3>
						<h4><?= get_field('about_page_teme_menber')['designation2'];?></h4>
						<div class="social_link">
							<a href="<?= get_field('about_page_teme_menber')['fb_url'];?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social1.png"></a>
							<a href="<?= get_field('about_page_teme_menber')['youtub_url'];?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social2.png"></a>
						</div>
					</div>
				</div>
				<div class="founder_det">
					<div class="found_img">
						<img src="<?= get_field('about_page_teme_menber')['image3'];?>">
					</div>
					<div class="founder_title">
						<h3><?= get_field('about_page_teme_menber')['name3'];?></h3>
						<h4><?= get_field('about_page_teme_menber')['designation3'];?></h4>
						<div class="social_link">
							<a href="<?= get_field('about_page_teme_menber')['fb_url3'];?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social1.png"></a>
							<a href="<?= get_field('about_page_teme_menber')['youtub_url3'];?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social2.png"></a>
						</div>
					</div>
				</div>
				<div class="founder_det">
					<div class="found_img">
						<img src="<?= get_field('about_page_teme_menber')['image4'];?>">
					</div>
					<div class="founder_title">
						<h3><?= get_field('about_page_teme_menber')['name4'];?></h3>
						<h4><?= get_field('about_page_teme_menber')['designation4'];?></h4>
						<div class="social_link">
							<a href="<?= get_field('about_page_teme_menber')['fb_url4'];?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social1.png"></a>
							<a href="<?= get_field('about_page_teme_menber')['youtub_url4'];?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social2.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- six -->
<section class="Design_section idea_dream py_6 bg_style" style="background-image: url('<?= get_field('about_page_section6')['image'];?>')">
	<div class="container">
		<div class="design_inner_sec idea_dream_inner">
			<div class="heading_image_slider">
				<h2><?= get_field('about_page_section6')['heading'];?></h2>
				<p><?= get_field('about_page_section6')['paragraph'];?></p>
   			</div>
		</div>
	</div>
</section>

<!-- seven -->
<section class="Interior_counter_sec py_6">
	<div class="container">
		<div class="las23_ef">
			<h2><?= get_field('counter_about')['heading']; ?></h2>
		</div>
		<div class="American_National_Renovations_main">  
			<div id="projectFacts" class="sectionClass">
				<div class="fullWidth eight columns">
					<div class="projectFactsWrap ">
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_about')['number']; ?>" style="visibility: visible;">
							<span id="count1">2000</span>
							<p><?= get_field('counter_about')['name']; ?></p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_about')['number1']; ?>" style="visibility: visible;">
							<span id="count2">500</span>
							<p><?= get_field('counter_about')['name1']; ?></p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_about')['number2']; ?>" style="visibility: visible;">
							<span id="count3">1000</span>
							<p><?= get_field('counter_about')['name2']; ?></p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_about')['number3']; ?>" style="visibility: visible;">
							<span id="count4">100</span>
							<p><?= get_field('counter_about')['name3']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>								