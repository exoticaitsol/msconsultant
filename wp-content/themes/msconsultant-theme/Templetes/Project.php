<?php
/* Template Name: Project Template */
get_header();?>

<!-- Banner_section -->
<section class="about_baner_sec bg_style" style="background-image: url('https://msconsultant.exoticaitsolutions.com/wp-content/uploads/2024/04/gallery_banner.jpg')">
	<div class="container">
        <div class="slide-content">
			<div class="main_banner_text">   
				<h5 class="banner_sub_title">Architect  & Interior</h5>       
				<h1 class="banner_title">Company Projects</h1>
				<div class="banner_btn">
					<a href="">See Projects
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Arrow 1.png">
					</a>
				</div>                     
			</div>
		</div>
	</div>
</section>

<section class="gallery_tabs py_8">
    <div class="container">
        <div class="main_gellary_sec">
            <div class="tab">
            <input type="hidden" id="ajax_url" name="ajax_url" value="<?php echo admin_url('admin-ajax.php'); ?>">
            <input type="hidden" id="ajax_action" name="ajax_action" value="get_term_posts_callback">
                <button class="tablinks_All checkterm_ids active" post_type="gallery"
                        term_id='<?php echo fetch_all_term_id_Catagories('gallery', 'gallery_catagories', 'all'); ?>'
                        taxonomy='gallery_catagories' term_name='all'>All</button>
                        <?php foreach (fetch_all_term_id_Catagories('gallery', 'gallery_catagories', '') as $value): ?>
                <button class="tablinks_<?= $value->name ?> checkterm_ids" taxonomy="gallery_catagories" post_type="gallery"
                        term_id="<?= $value->term_id ?>" term_name=" <?= $value->name ?>"><?= $value->name ?></button>
                <?php endforeach; ?>
            </div>
            <div class="panels" id="append_list_data">
            </div>
        </div>
    </div>
</section>
<section class="Interior_counter_sec py_6 about_counter_sec">
	<div class="container">
		<div class="las23_ef">
			<h2>MS Consultant - Architect & Interior</h2>
		</div>
		<div class="American_National_Renovations_main">  
			<div id="projectFacts" class="sectionClass">
				<div class="fullWidth eight columns">
					<div class="projectFactsWrap ">
						<div class="item wow fadeInUpBig animated animated" data-number="2000" style="visibility: visible;">
							<span id="count1">2000</span>
							<p>Commercial Projects</p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="500" style="visibility: visible;">
							<span id="count2">500</span>
							<p>Residential Projects</p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="1000" style="visibility: visible;">
							<span id="count3">1000</span>
							<p>Happy Customers</p>
						</div>
						<div class="item wow fadeInUpBig animated animated" data-number="100" style="visibility: visible;">
							<span id="count4">100</span>
							<p>Hard Working Employees</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();?>