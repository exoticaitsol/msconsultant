<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head();?>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>MS Consultant</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="/ms-fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" />
    <!--slick CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick-theme.css" />
    <!-- main.css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" />
</head>

<body>

    <header class="header_wrap">
        <div class="container">
            <div class="header_inner">
                <div class="left_menu">
                    <div class="main_logo">
                        <span class="custom-logo-link">
                            <a href="<?= site_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png"
                                class="custom-logo"></a>
                        </span>
                    </div>
                </div>
                <div class="right_menu">
                    <div class="header_crd">
                        <ul>

                            <li>
                                <div class="contact_form_info_crd">
                                    <a href="tel:096463 15717"> Call Us: 096463 15717</a>
                                </div>
                            </li>
                            <li>
                                <div class="contact_form_info_crd">
                                    <p>Address: Plot No 154B Sector 82, SAS Nagar, Punjab </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="second_header_menu mobile-menu " id="mobile_menu_toggle">
                        <div class="hamburger">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                        <?php  wp_nav_menu(array('theme_location' => 'Header Menu', 
            'menu' => 'Header Menu', 'container' => 'ul', 
              'menu_class' => 'menu_bars',));  ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
        jQuery(".hamburger").click(function() {
            jQuery(this).toggleClass("is-active");
            jQuery("ul#menu-header-menu").toggleClass("is-active");
        });
        var arrow = "<span class='arrow'><i class='fa fa-angle-down'></i></span>";
        var li_list = document.querySelectorAll('li.menu-item-has-children');
        for (var i = 0; i < li_list.length; i++) {
            li_list[i].innerHTML += arrow; // += concatenates to the LI
        }
        jQuery("span.arrow").click(function() {
            jQuery(this).toggleClass("is-active");
            jQuery(this).closest("li").find("ul.sub-menu").toggleClass("is-active");
            jQuery("ul.sub-menu").not(jQuery(this).closest("li").find("ul.sub-menu")).removeClass(
                "is-active");
        });
    });
    </script>