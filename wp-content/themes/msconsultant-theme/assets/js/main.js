$(document).ready(function () {
  $(".work_gellary_slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
    autoplay: true,
    prevArrow: $(".Arrow_img .left_arrow"),
    nextArrow: $(".Arrow_img .right_arrow"),
    responsive: [
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.home_banner_slider').slick({
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots:true,
    autoplay: false,
    autoplaySpeed: 1000,
  });

  $(".image_gellary_slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1000,
    prevArrow: $(".service_Arrow_img .prev_arrow"),
    nextArrow: $(".service_Arrow_img .next_arrow"),
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]

  });

  $(".gallery_slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1000,
    prevArrow: $(".gallery_call_btn .drag_arrow_left"),
    nextArrow: $(".gallery_call_btn .drag_arrow_right"),
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  jQuery(document).on("click", ".sub-menu-open", function () {
    jQuery('.menu-item-has-children').toggleClass('open_sub');
  });

  var post_type = $(".tab .tablinks_All").attr("post_type");
  var term_name = $(".tab .tablinks_All").attr("term_name");
  var taxonomy = $(".tab .tablinks_All").attr("taxonomy");
  var term_id = $(".tab .tablinks_All").attr("term_id");
  let paged = 1;
  let ajax_action = jQuery(`#ajax_action`).val();
  Fetch_Gallery_Data({ action: ajax_action, post_type, taxonomy, term_id, term_name, paged },jQuery('#ajax_url').val());
  jQuery(document).on("click", ".checkterm_ids", async function () {
    if (this.classList.contains("active")) {
        this.classList.remove("active");
      } else {
        jQuery(this).toggleClass("active");
        jQuery(".checkterm_ids").not(this).removeClass("active");
      }
      var url = jQuery('#ajax_url').val();
    let post_type = jQuery(this).attr("post_type");
    let taxonomy = jQuery(this).attr("taxonomy");
    let term_id = jQuery(this).attr("term_id");
    let paged = 1;
    let term_name = jQuery(this).attr("term_name");
    let ajax_action = jQuery(`#ajax_action`).val();
    let ajax= { action: ajax_action, post_type, taxonomy, term_id, term_name, paged };
        Fetch_Gallery_Data(ajax,url);
  });
});
// counter jquery
$(document).ready(function() {
  function startCounter() {
    $('.item').each(function() {
      var target = parseInt($(this).data('number'));
      var countElement = $(this).find('span');
      var count = 0;
      var intervalSpeed = 5; 
      var timer = setInterval(function() {
        count++;
        countElement.text(count);
        if (count === target) {
          clearInterval(timer);
        }
      }, intervalSpeed);
    });
  }
  startCounter();
});

