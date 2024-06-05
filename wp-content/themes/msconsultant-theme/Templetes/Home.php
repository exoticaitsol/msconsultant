<?php /* Template Name: Home Template */
get_header();
?>

<!-- Banner_section -->
<section class="home_baner_sec">
	<div class="home_banner_slider">
	<?php
            $args = [
                'post_type' => 'slider',
                'order' => 'ASC',
                'orderby' => 'title',
                'posts_per_page' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'slider_catagories',
                        'field' => 'slug',
                        'terms' => 'home-slider-banner',
                    ]
                ]
            ];
            $faqs_query = new WP_Query($args);
            if ($faqs_query->have_posts()):
                while ($faqs_query->have_posts()) : $faqs_query->the_post();
            ?>
        <div class="slide-content">
	        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive">
			<div class="home_banner_text">   
				<h5 class="banner_sub_title"><?= the_title(); ?></h5>       
				<h1 class="banner_title"><?= get_field('home_banner_slider')['heading']; ?></h1>
				<div class="banner_btn">
					<a href=""><?= get_field('home_banner_slider')['butto_name']; ?>
						<img src="<?= get_field('home_banner_slider')['image_arrow']; ?>">
					</a>
				</div>                     
			</div>
		</div>
		<?php endwhile;
            else : ?>
                <h4 class="text-center">No images Found</h4>
            <?php endif;
            wp_reset_postdata(); ?>
	</div>
</section>

<!-- Second_section -->
<section class="Serving_Our_Clients_sec">
	<div class="container">
		<div class="inner_clients_sec">
			<div class="left_clients_content">
				<div class="img123">
					<img src="<?= get_field('home_page_section1')['image']; ?>">
				</div>
				<div class="clint_tit">
					<h4><?= get_field('home_page_section1')['sub_heading1']; ?><br>
					<br><span><?= get_field('home_page_section1')['sub_heading2']; ?></span></h4>
				</div>
			</div>
			<div class="right_clients_content">
				<div class="heading_para">
				<h2><?= get_field('home_page_section1')['heading']; ?></h2>
				<p><?= get_field('home_page_section1')['paragraph1']; ?></p>
				<p><?= get_field('home_page_section1')['paragraph2']; ?></p>
        	</div>
		</div>
	</div>
</section>
<!-- Third_section -->
<section class="service_section2 py_8">
    <div class="container">
        <div class="heading_para">
            <h2><?= get_field('home_page_section2')['heading']; ?></h2>
            <p><?= get_field('home_page_section2')['sub_heading']; ?></p>
        </div>
        <div class="main_di">
            <div class="main_section_service2">
			<?= get_field('home_page_section2')['containt']; ?>
				<div class="button-btn002">
					<a href="<?= get_field('home_page_section2')['button_url']; ?>"><?= get_field('home_page_section2')['button_name']; ?></a>
				</div>
			</div>
		</div>
    </div>
</section>

<!-- Forth_section -->
<section class="image_gellary py_8">
	<div class="heading_image_slider">
    	<h2><?= get_field('home_page_service_slider')['heading']; ?></h2>
		<p><?= get_field('home_page_service_slider')['sub_heading']; ?></p>
    </div>
	<div class="image_gellary_slider">
    <?php
            $args = [
                'post_type' => 'service',
                'order' => 'ASC',
                'orderby' => 'title',
                'posts_per_page' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'service_catagories',
                        'field' => 'slug',
                        'terms' => 'service-slider',
                    ]
                ]
            ];
            $faqs_query = new WP_Query($args);
            if ($faqs_query->have_posts()):
                while ($faqs_query->have_posts()) : $faqs_query->the_post();
            ?>
		<div class="services_slider">
			<div class="gallery_image">
				<img src="<?= get_the_post_thumbnail_url();?>" alt="Card image">
			</div>
			<div class="slide_btn">
				<a href="<?= site_url('services/') ?>"><?= get_the_title()?></a>
			</div>
		</div>
		<?php endwhile;
            else : ?>
                <h4 class="text-center">No images Found</h4>
            <?php endif;
            wp_reset_postdata(); ?>
	</div>  
	<div class="service_Arrow_img">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Arrow 2.png" class="prev_arrow">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Arrow 3.png" class="next_arrow">
	</div>    
</section>


<!-- Fifth_section -->
<section class="call_us_sec">
	<div class="container">
		<div class="call_title">
			<h3><?= get_field('home_page_contact_number')['heading']; ?></h3>
			<div class="call_click">
				<a href="tel:<?= get_field('home_page_contact_number')['phone_number']; ?>">Call Us: <?= get_field('home_page_contact_number')['phone_number']; ?></a>
			</div>
		</div>
	</div>
</section>

<!-- Sixth_section -->
<section class="about_us_sec py_8">
	<div class="container">
		<div class="about_inner_sec">
			<div class="left_content">
				<div class="heading_image_slider">
					<h2><?= get_field('home_page_about_us_')['heading']; ?></h2>
					<p><?= get_field('home_page_about_us_')['paragraph']; ?></p>
				</div>
			</div>
			<div class="right_founder_details">
				<div class="founder_det">
					<div class="found_img">
						<img src="<?= get_field('home_page_about_us_')['image1']; ?>">
					</div>
					<div class="founder_title">
						<h3><?= get_field('home_page_about_us_')['name1']; ?></h3>
						<h4><?= get_field('home_page_about_us_')['designation1']; ?></h4>
						<div class="social_link">
							<a href="<?= get_field('home_page_about_us_')['fb_url1']; ?>"  target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social1.png"></a>
							<a href="<?= get_field('home_page_about_us_')['youtub_url1']; ?>"  target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social2.png"></a>
						</div>
					</div>
				</div>
				<div class="founder_det">
					<div class="found_img">
					<img src="<?= get_field('home_page_about_us_')['image2']; ?>">
					</div>
					<div class="founder_title">
						<h3><?= get_field('home_page_about_us_')['name2']; ?></h3>
						<h4><?= get_field('home_page_about_us_')['designation2']; ?></h4>
						<div class="social_link">
							<a href="<?= get_field('home_page_about_us_')['fb_url']; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social1.png"></a>
							<a href="<?= get_field('home_page_about_us_')['youtub_url']; ?>"  target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/social2.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Seventh_section -->
<section class="What_Our_Client_sec py_8">
	<div class="container">
		<div class="heading_image_slider">
			<h2>Here’s What Our Client Say  <span> About Us</span></h2>
		</div>
		<div class="our_client_inner">
			<div class="our_client_comman">
				<div class="comma_icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image4.png">
				</div>
				<div class="inner_content">
					<p>Lorem ipsum Penatibus eros congue am aliquet lectus in imperdiet vel mattis sed enim enim pulvinar posuere augue duis lorem lectus at facilisi in nibh at quam in justo, sit auctor morbi eget aliquam site lorem gravida fringilla pret nibh at quam in justo, sit auctor morbi eget aliquamium vestibulum mauris.</p>
				</div>
				<div class="client_inner_sec">  
					<div class="client_img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image 1 (2).png">
					</div>
					<div class="client_des">
						<h4>Rajan Dhiman</h4>
						<p>CEO of Manufacture Company</p>
					</div>
				</div>
			</div>
			<div class="our_client_comman">
				<div class="comma_icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image4.png">
				</div>
				<div class="inner_content">
					<p>Penatibus eros congue am aliquet lectus in imperdiet vel mattis sed enim en im pulvinar posuere augue duis lorem lectus at facilisi in nibh at quam in justo, sit ame auctor morbi eget aliquam site lorem it gravida fringilla pret nibh at quam in sit  justo, sit auctor morbi eget aliquamium vestibulum mauris.</p>
				</div>
				<div class="client_inner_sec">  
					<div class="client_img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image 2.png">
					</div>
					<div class="client_des">
						<h4>Dilpreet Kaur</h4>
						<p>CEO of Manufacture Company</p>
					</div>
				</div>
			</div>
			<div class="our_client_comman">
				<div class="comma_icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image4.png">
				</div>
				<div class="inner_content">
					<p>Lorem ipsum Penatibus eros congue am aliquet lectus in imperdiet vel mattis sed enim enim pulvinar posuere augue duis lorem lectus at facilisi in nibh at quam in justo, sit auctor morbi eget aliquam site lorem gravida fringilla pret nibh at quam in justo, sit auctor morbi eget aliquamium vestibulum mauris.</p>
				</div>
				<div class="client_inner_sec">  
					<div class="client_img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image 3.png">
					</div>
					<div class="client_des">
						<h4>Honey Sharma</h4>
						<p>CEO of Manufacture Company</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Eighth_section -->
<section class="work_gellary_sec py_8">
	<div class="container">
		<div class="heading_image_slider">
			<h2><?= get_field('see_our_work_before_after')['heading']; ?></h2>
		</div>
		<div class="work_gellary_slider">
		<?php
            $args = [
                'post_type' => 'slider',
                'order' => 'ASC',
                'orderby' => 'title',
                'posts_per_page' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'slider_catagories',
                        'field' => 'slug',
                        'terms' => 'see-our-work-before-after',
                    ]
                ]
            ];
            $faqs_query = new WP_Query($args);
            if ($faqs_query->have_posts()):
                while ($faqs_query->have_posts()) : $faqs_query->the_post();
            ?>
			<div class="work_slider">
				<div class="work_image">
					<img src="<?= get_the_post_thumbnail_url();?>" alt="Card image">
				</div>
			</div>
			<?php endwhile;
            else : ?>
                <h4 class="text-center">No images Found</h4>
            <?php endif;
            wp_reset_postdata(); ?>
		</div>
		<div class="Arrow_img">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Arrow 2.png" class="left_arrow">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Arrow 3.png" class="right_arrow">
		</div>  
	</div>  
</section>

<!-- Nineth_section -->
<section class="project_sec">
	<div class="container">
		<div class="inner_project_sec">
			<div class="residential_project">
				<div class="project_img">
				<img src="<?= get_field('home_page_section9')['image']; ?>">
				</div>	
				<div class="project_content">
					<h2><?= get_field('home_page_section9')['heading']; ?></h2>
					<p><?= get_field('home_page_section9')['paragraph']; ?></p>
					<div class="pro_btn">
						<a href="">View More</a>
					</div>
				</div>
			</div>
			<div class="commercial_project residential_project">	
				<div class="project_content">
					<h2><?= get_field('home_page_section9')['heading1']; ?></h2>
					<p><?= get_field('home_page_section9')['paragraph1']; ?></p>
					<div class="pro_btn">
						<a href="">View More</a>
					</div>
				</div>
				<div class="project_img">
				<img src="<?= get_field('home_page_section9')['image1']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Tenth_section -->
<section class="Interior_counter_sec py_6">
	<div class="container">
		<div class="las23_ef">
			<h2><?= get_field('counter_home')['heading']; ?></h2>
		</div>
		<div class="American_National_Renovations_main">  
			<div id="projectFacts" class="sectionClass">
				<div class="fullWidth eight columns">
					<div class="projectFactsWrap ">
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_home')['number']; ?>" style="visibility: visible;">
							<span id="count1">2000</span>
							<p><?= get_field('counter_home')['name']; ?></p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_home')['number1']; ?>" style="visibility: visible;">
							<span id="count2">500</span>
							<p><?= get_field('counter_home')['name1']; ?></p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_home')['number2']; ?>" style="visibility: visible;">
							<span id="count3">1000</span>
							<p><?= get_field('counter_home')['name2']; ?></p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="<?= get_field('counter_home')['number3']; ?>" style="visibility: visible;">
							<span id="count4">100</span>
							<p><?= get_field('counter_home')['name3']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Eleventh_section -->
<section class="faq_section py_8">
	<div class="container">
		<div class="faq_title">
			<h2>frequently asked questions</h2>
		</div>
		<div class="faq_inner_sec">
			<div class="left_faq">
				<div class="accordion accordion-flush" id="accordionFlushExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingOne">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
						How long does it take to build a house?
						</button>
						</h2>
						<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac pharetra purus, at aliquet arcu. Aliquam sodales dui sit amet lectus dictum, in ultricies ante ultrices. Ut sit amet eleifend leo. Nam dui tellus, fringilla ac augue vitae, dignissim cursus lectus.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
						What permits and approvals are required for house construction?
						</button>
						</h2>
						<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac pharetra purus, at aliquet arcu. Aliquam sodales dui sit amet lectus dictum, in ultricies ante ultrices. Ut sit amet eleifend leo. Nam dui tellus, fringilla ac augue vitae, dignissim cursus lectus.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
						Do I need to hire an architect for my house construction?
						</button>
						</h2>
						<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac pharetra purus, at aliquet arcu. Aliquam sodales dui sit amet lectus dictum, in ultricies ante ultrices. Ut sit amet eleifend leo. Nam dui tellus, fringilla ac augue vitae, dignissim cursus lectus.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingFour">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
						How do I choose a reliable contractor for my house construction?
						</button>
						</h2>
						<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac pharetra purus, at aliquet arcu. Aliquam sodales dui sit amet lectus dictum, in ultricies ante ultrices. Ut sit amet eleifend leo. Nam dui tellus, fringilla ac augue vitae, dignissim cursus lectus.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="right_faq">
				<div class="accordion accordion-flush" id="accordionFlushExample2">
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingFive">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
						What is included in the construction contract?
						</button>
						</h2>
						<div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac pharetra purus, at aliquet arcu. Aliquam sodales dui sit amet lectus dictum, in ultricies ante ultrices. Ut sit amet eleifend leo. Nam dui tellus, fringilla ac augue vitae, dignissim cursus lectus.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingSix">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
						Can I make changes to the design during construction?
						</button>
						</h2>
						<div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac pharetra purus, at aliquet arcu. Aliquam sodales dui sit amet lectus dictum, in ultricies ante ultrices. Ut sit amet eleifend leo. Nam dui tellus, fringilla ac augue vitae, dignissim cursus lectus.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingSeven">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
						What warranties or guarantees are provided for the work?
						</button>
						</h2>
						<div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac pharetra purus, at aliquet arcu. Aliquam sodales dui sit amet lectus dictum, in ultricies ante ultrices. Ut sit amet eleifend leo. Nam dui tellus, fringilla ac augue vitae, dignissim cursus lectus.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingEight">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
						How do I ensure quality control during construction?
						</button>
						</h2>
						<div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac pharetra purus, at aliquet arcu. Aliquam sodales dui sit amet lectus dictum, in ultricies ante ultrices. Ut sit amet eleifend leo. Nam dui tellus, fringilla ac augue vitae, dignissim cursus lectus.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Twelth_section -->
<section class="project_gallery_sec">
	<div class="project_gallery_inner">
		<div class="main_gallery_slider">
			<div class="gallery_slider">
			<?php
            $args = [
                'post_type' => 'slider',
                'order' => 'ASC',
                'orderby' => 'title',
                'posts_per_page' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'slider_catagories',
                        'field' => 'slug',
                        'terms' => 'project-gallery',
                    ]
                ]
            ];
            $faqs_query = new WP_Query($args);
            if ($faqs_query->have_posts()):
                while ($faqs_query->have_posts()) : $faqs_query->the_post();
            ?>
				<div class="gl_img">
					<img src="<?= get_the_post_thumbnail_url();?>">
				</div>
				<?php endwhile;
            	else : ?>
            	    <h4 class="text-center">No images Found</h4>
            	<?php endif;
           		wp_reset_postdata(); ?>
			</div>
		<div class="gl_content">
			<div class="heading_image_slider">
				<h2><?= get_field('project_gallery')['heading']; ?></h2>
				<p><?= get_field('project_gallery')['paragraph']; ?></p>
				<div class="pro_btn">
					<a href="">View More</a>
				</div>
			</div>
		</div>
</div>
	</div>
	<div class="button-btn002">
		<a href="tel:<?= get_field('project_gallery')['phone_number']; ?>">GET A FREE ESTIMATE NOW! Call Us: <?= get_field('project_gallery')['phone_number']; ?></a>
	</div>
	<div class="drag_btn">
		<div class="gallery_call_btn">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arow2.png" class="drag_arrow_left">
			<a href="">Drag</a>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arow1.png" class="drag_arrow_right">
		</div>	
	</div>
</section>

<!-- thirteen -->
<section class="home-contact-form py_8">
	<div class="container">
		<div class="contact-heading">
			<h5>Contact Us</h5>
			<h2>Get In Touch</h2>
		</div>
		<div class="contact-form">
			<?php echo do_shortcode('[contact-form-7 id="1237a88" title="Contact form 1"]');?>
		</div>
	</div>
</section>


<?php
get_footer();
?>