 <!-- Footer -->

 <footer class="footer_wrap" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-banner.png')">
	<div class="container">
	  	<div class="main_footer">
			<div class="row_001 ">
				<div class="footer_link_list footer123">
					<div class="footer_head">
						<h3>Quick Links</h3>
					</div>
					<!-- <ul id="menu-quick-links-menu" class="menu_bars">
						<li><a href="">Home</a></li>
						<li><a href="">About us</a></li>
						<li><a href="">Services</a></li>
						<li><a href="">TESTIMONIALS</a></li>
						<li><a href="">CONTACT</a></li>
					</ul>     -->
					<?php
                      wp_nav_menu( array(
                          'theme_location' => 'footer-menu',
                          'container' => 'ul',
                          'menu_class'=> 'menu_bars'
                      ) );
                    ?> 
				</div>
				<div class="footer_link_list footer1230">
					<div class="footer_head">
						<h3>Our Service</h3>
					</div>
					<ul id="menu-our-service" class="menu_bars">
						<li><a href="">Roofing</a></li>
						<li><a href="">Siding</a></li>
						<li><a href="">Gutters</a></li>
						<li><a href="">Painting</a></li>
					</ul>    
				</div>
				<div class="footer_link_list footer120">
					<div class="footer_head">
						<h3>CONTACT INFO</h3>
					</div>
					<ul>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/location1.png">
							<span class="location"> Plot No 154B Sector 82, SAS Nagar,  Punjab  </span>
						</li>
						<li>
							<a href="mailto:contact@msconsultant.com" class="email_mes">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Email.png">
							contact@msconsultant.com </a>
						</li>
						<li>
							<a href="tel:096463 15717" class="phone_call">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone1.png">
							096463 15717</a>
						</li>
					</ul>
				</div>        					  		
				<div class="footer_link_list footer12301">
					<div class="footer_head">
						<ul>
							<li>
								<a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon1.png"></a>
							</li>
							<li>
								<a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon2.png"></a>
							</li>
							<li>
								<a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon3.png"></a>
							</li>
							<li>
								<a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/you.png"></a>
							</li>
						</ul>				   
					</div>
				</div>
			</div>		
			<div class="footer_110_section"> 
				<div class="news-section">
					<div class="title_0">
						<h2>Subscribe Our Newsletter</h2>
					</div>
					<div class="tnp tnp-subscription ">
						<form method="post" action="">
							<input type="hidden" name="nlang" value="">
							<div class="tnp-field tnp-field-email">
								<input class="tnp-email" type="email" name="ne" id="tnp-1" value="" placeholder="Enter Your Email" required>
								<button class="tnp-submit" type="submit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Arrow 4.png" alt="">
								</button>
							</div>
							<div class="tnp-field tnp-field-button">
							</div>
						</form>
					</div>
				</div> 	
				<div class="copyright_bar">
					<p class="mb-0">Copyright © <?php echo date('Y'); ?> MS Consultant - Architect &Interior All Rights Reserved</p>			  
				</div>				
			</div>
		</div> 
	</div>
</footer>
<?php wp_footer();?>

          <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle (includes Popper) -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <!--slick js -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <!-- main.js -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
    <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script> -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/Custom-function.js"></script>
  </body>
</html> 