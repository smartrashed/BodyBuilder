(function($) {

 "use strict";
  $(document).on('ready', function() {



var fixed_top = $(".main-menu");

$(window).on('scroll', function() {
	
	if( $(this).scrollTop() > 100 ){	
		fixed_top.addClass("menu-fixed animated fadeInDown");
	}
	else{
		fixed_top.removeClass("menu-fixed animated fadeInDown");
	}
	
});


$('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });


//Counter up
$('.counter').counterUp();


//lightcase
jQuery('a[data-rel^=lightcase]').lightcase();


//trainer slider
var swiper = new Swiper('.trainer-slider', {
    slidesPerView: 5,
    nextButton: '.trainer-button-next',
    prevButton: '.trainer-button-prev',
    spaceBetween: 0,
    autoplay: 2000,
    breakpoints: {
	    // when window width is <= 320px
	    320: {
	      slidesPerView: 1
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2
	    },
	    // when window width is <= 767px
	    767: {
	      slidesPerView: 3
	    },
	    // when window width is <= 991px
	    991: {
	      slidesPerView: 4
	    }
	  }
    });


//Classes slider
var swiper = new Swiper('.classes-slider', {
    slidesPerView: 4,
    nextButton: '.classes-button-next',
    prevButton: '.classes-button-prev',
    spaceBetween: 30,
    breakpoints: {
	    // when window width is <= 320px
	    320: {
	      slidesPerView: 1
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2
	    },
	    // when window width is <= 767px
	    767: {
	      slidesPerView: 3
	    }
	  }
    });


//Testimonial Slider
var swiper = new Swiper('.testimonial-slider', {
    pagination: '.testimonial-pagination',
    slidesPerView: 2,
    paginationClickable: true,
    spaceBetween: 30,
    breakpoints: {
	    // when window width is <= 767px
	    767: {
	      slidesPerView: 1
	    }
	  }
    });

//Product Slider
var swiper = new Swiper('.product-slider', {
    slidesPerView: 4,
    nextButton: '.product-button-next',
    prevButton: '.product-button-prev',
    spaceBetween: 30,
    breakpoints: {
	    // when window width is <= 320px
	    320: {
	      slidesPerView: 1
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2
	    },
	    // when window width is <= 767px
	    767: {
	      slidesPerView: 3
	    }
	  }
    });


//Client Slider
var swiper = new Swiper('.client-slider', {
    slidesPerView: 4,
    spaceBetween: 10,
    autoplay: 2000,
    loop: true,
    breakpoints: {
	    // when window width is <= 320px
	    320: {
	      slidesPerView: 1
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2
	    },
	    // when window width is <= 767px
	    767: {
	      slidesPerView: 3
	    }
	  }
    });


//product Slider
$(window).on('load', function() {
	// The slider being synced must be initialized first
	$('#carousel').flexslider({
		animation: "slide",
		direction: 'vertical',
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 103,
		itemMargin: 5,
		asNavFor: '#slider'
	});

	$('#slider').flexslider({
		animation: "fade",
		direction: 'vertical',
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#carousel"
	});
});




    //Google map
	var styleArray = [
	  {
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#f5f5f5"
	      }
	    ]
	  },
	  {
	    "elementType": "labels.icon",
	    "stylers": [
	      {
	        "visibility": "off"
	      }
	    ]
	  },
	  {
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#171717"
	      }
	    ]
	  },
	  {
	    "elementType": "labels.text.stroke",
	    "stylers": [
	      {
	        "color": "#f5f5f5"
	      }
	    ]
	  },
	  {
	    "featureType": "administrative.land_parcel",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#bdbdbd"
	      }
	    ]
	  },
	  {
	    "featureType": "poi",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#eeeeee"
	      }
	    ]
	  },
	  {
	    "featureType": "poi",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#757575"
	      }
	    ]
	  },
	  {
	    "featureType": "poi.park",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#e5e5e5"
	      }
	    ]
	  },
	  {
	    "featureType": "poi.park",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#9e9e9e"
	      }
	    ]
	  },
	  {
	    "featureType": "road",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#ffffff"
	      }
	    ]
	  },
	  {
	    "featureType": "road.arterial",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#757575"
	      }
	    ]
	  },
	  {
	    "featureType": "road.highway",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#dadada"
	      }
	    ]
	  },
	  {
	    "featureType": "road.highway",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#616161"
	      }
	    ]
	  },
	  {
	    "featureType": "road.local",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#9e9e9e"
	      }
	    ]
	  },
	  {
	    "featureType": "transit.line",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#e5e5e5"
	      }
	    ]
	  },
	  {
	    "featureType": "transit.station",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#eeeeee"
	      }
	    ]
	  },
	  {
	    "featureType": "water",
	    "elementType": "geometry",
	    "stylers": [
	      {
	        "color": "#c9c9c9"
	      }
	    ]
	  },
	  {
	    "featureType": "water",
	    "elementType": "labels.text.fill",
	    "stylers": [
	      {
	        "color": "#9e9e9e"
	      }
	    ]
	  }
	];

	var mapOptions = {
	  center: new google.maps.LatLng(23.739296,90.3870653),
	  zoom: 12,
	  styles: styleArray,
	  scrollwheel: false,
	  backgroundColor: 'transparent',
      mapTypeControl: false,				  
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map_canvas"),
		mapOptions);				
	var myLatlng = new google.maps.LatLng(23.739296,90.3870653);			
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		icon: 'assets/images/map-icon.png'
	});



});


    
    
	jQuery('.price_ex_class:first-child').addClass('col-md-offset-4');


})(jQuery);