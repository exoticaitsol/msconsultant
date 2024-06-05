
const Fetch_Gallery_Data = async (ajax_Datam,ajaxURL) => {
  let response = await fetchData(ajaxURL, "POST", ajax_Datam);
  if (response.status === 'true') {
      jQuery("#append_list_data").html(response.content);
  }else{
    jQuery("#append_list_data").html('SomeThing-Wrong');
  }

}

const initializeSliders = (sliderConfigs) => {
  sliderConfigs.forEach(function (sliderConfig) {
      jQuery(sliderConfig.selector).slick({
      autoplaySpeed: sliderConfig.autoplaySpeed,
      autoplay: sliderConfig.autoplay,
      arrows: sliderConfig.arrows,
      infinite: sliderConfig.infinite,
      speed: sliderConfig.speed,
      slidesToShow: sliderConfig.slidesToShow,
      slidesToScroll: sliderConfig.slidesToScroll,
      prevArrow:jQuery(sliderConfig.prevArrow),
      nextArrow: jQuery(sliderConfig.nextArrow),
      responsive: sliderConfig.responsive,
    });
  });
};


  
    const fetchData = async  (url, method, data) => {
    try {
      const response = await jQuery.ajax({
        url: url,
        method: method,
        data: data
      });
      return response; // Return the response
    } catch (error) {
      throw new Error(error); // Throw an error if AJAX request fails
    }
  }
