(function($) {
	
	"use strict";
	
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(500);
		}
	}
	
	
	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var scrollLink = $('.scroll-to-top');
			
			var HeaderHight = $('.main-header').height();
			if (windowpos >= HeaderHight) {
				siteHeader.addClass('fixed-header');
				scrollLink.fadeIn(300);
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.fadeOut(300);
			}
			
		}
	}
	
	headerStyle();
	
	
	//Submenu Dropdown Toggle
	if($('.main-header li.dropdown ul').length){
		$('.main-header li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
		
		//Dropdown Button
		$('.main-header li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});
		
		//Disable dropdown parent link
		$('.navigation li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
		
		//Disable dropdown parent link
		$('.main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});

		$('.xs-sidebar-group .close-button').on('click', function(e) {
			$('.xs-sidebar-group.info-group').removeClass('isActive');
		});

		$('.about-widget').on('click', function(e) {
			$('.about-sidebar').addClass('active');
		});

		$('.about-sidebar .close-button').on('click', function(e) {
			$('.about-sidebar').removeClass('active');
		});
		
		$('.about-sidebar .gradient-layer').on('click', function(e) {
			$('.about-sidebar').removeClass('active');
		});
				
	}
	
	
	// Mobile Nav Hide Show
	if ($('.mobile-menu').length) {

		// Mengambil konten dari menu utama
		if ($('.mobile-menu .menu-box .menu-outer').is(':empty')) {
			var mobileMenuContent = $('.main-header .nav-outer .main-menu').html();
			$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
		}

		if ($('.sticky-header .main-menu').is(':empty')) {
			$('.sticky-header .main-menu').append(mobileMenuContent);
		}

		// Hide / Show Submenu
		$('.mobile-menu .navigation > li.dropdown > .dropdown-btn').on('click', function(e) {
			e.preventDefault();
			var target = $(this).parent('li').children('ul');

			if ($(target).is(':visible')) {
				$(this).parent('li').removeClass('open');
				$(target).slideUp(500);
				$(this).parents('.navigation').children('li.dropdown').removeClass('open');
				$(this).parents('.navigation').children('li.dropdown > ul').slideUp(500);
				return false;
			} else {
				$(this).parents('.navigation').children('li.dropdown').removeClass('open');
				$(this).parents('.navigation').children('li.dropdown').children('ul').slideUp(500);
				$(this).parent('li').toggleClass('open');
				$(this).parent('li').children('ul').slideToggle(500);
			}
		});

		// 3rd Level Nav
		$('.mobile-menu .navigation > li.dropdown > ul  > li.dropdown > .dropdown-btn').on('click', function(e) {
			e.preventDefault();
			var targetInner = $(this).parent('li').children('ul');

			if ($(targetInner).is(':visible')) {
				$(this).parent('li').removeClass('open');
				$(targetInner).slideUp(500);
				$(this).parents('.navigation > ul').find('li.dropdown').removeClass('open');
				$(this).parents('.navigation > ul').find('li.dropdown > ul').slideUp(500);
				return false;
			} else {
				$(this).parents('.navigation > ul').find('li.dropdown').removeClass('open');
				$(this).parents('.navigation > ul').find('li.dropdown > ul').slideUp(500);
				$(this).parent('li').toggleClass('open');
				$(this).parent('li').children('ul').slideToggle(500);
			}
		});

		// Menu Toggle Btn
		$('.mobile-nav-toggler').on('click', function() {
			$('body').addClass('mobile-menu-visible');
		});

		// Menu Toggle Btn untuk menutup
		$('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
			$('body').removeClass('mobile-menu-visible');
			$('.mobile-menu .navigation > li').removeClass('open');
			$('.mobile-menu .navigation li ul').slideUp(0);
		});

		// Menutup menu ketika menekan tombol Escape (ESC)
		$(document).keydown(function(e) {
			if (e.keyCode == 27) {
				$('body').removeClass('mobile-menu-visible');
				$('.mobile-menu .navigation > li').removeClass('open');
				$('.mobile-menu .navigation li ul').slideUp(0);
			}
		});
	}



	// Add Current Class Auto
	function dynamicCurrentMenuClass(selector) {
		let FileName = window.location.href.split("/").reverse()[0];

		selector.find("li").each(function () {
			let anchor = $(this).find("a");
			if ($(anchor).attr("href") == FileName) {
				$(this).addClass("current");
			}
		});
		// if any li has .current elmnt add class
		selector.children("li").each(function () {
			if ($(this).find(".current").length) {
				$(this).addClass("current");
			}
		});
		// if no file name return
		if ("" == FileName) {
			selector.find("li").eq(0).addClass("current");
		}
	}

	if ($('.main-header .main-menu .navigation').length) {
		dynamicCurrentMenuClass($('.main-header .main-menu .navigation'));
	}
	
	
	
	//  Animation Fade Left End
	/////////////////////////////////////////////////////
	// CURSOR
	var cursor = $(".cursor"),
	follower = $(".cursor-follower");

	var posX = 0,
		posY = 0;

	var mouseX = 0,
		mouseY = 0;

	TweenMax.to({}, 0.016, {
	repeat: -1,
	onRepeat: function() {
		posX += (mouseX - posX) / 9;
		posY += (mouseY - posY) / 9;

		TweenMax.set(follower, {
			css: {
			left: posX - 12,
			top: posY - 12
			}
		});

		TweenMax.set(cursor, {
			css: {
			left: mouseX,
			top: mouseY
			}
		});
	}
	});

	$(document).on("mousemove", function(e) {
		mouseX = e.clientX;
		mouseY = e.clientY;
	});
	//circle
	$(".theme-btn, a").on("mouseenter", function() {
		cursor.addClass("active");
		follower.addClass("active");
	});
	$(".theme-btn, a").on("mouseleave", function() {
		cursor.removeClass("active");
		follower.removeClass("active");
	});   
	// CURSOR End


	
	// Main Slider
	var slider = new Swiper('.main-slider', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: false,
		autoplay: {
			enabled: false,
			delay: 6000
		},
		// Navigation arrows
		navigation: {
			nextEl: '.main-slider-next',
			prevEl: '.main-slider-prev',
			clickable: true,
		},
		//Pagination
		pagination: {
			el: ".slider-one_pagination",
			clickable: true,
			//type: "progressbar",
		},
		speed: 500,
		breakpoints: {
			'1600': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	
	
	
	
	// Single Item Slider
	var slider = new Swiper('.single-item_slider', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		//centeredSlides: true,
		autoplay: {
			enabled: true,
			delay: 6000
		},
		// Navigation arrows
		navigation: {
			nextEl: '.single-item_slider-next',
			prevEl: '.single-item_slider-prev',
			clickable: true,
		},
		//Pagination
		pagination: {
			el: ".single-item_slider-pagination",
			clickable: true,
		},
		speed: 500,
		breakpoints: {
			'1600': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'1100': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	
	
	
	//Custom Seclect Box
	if($('.custom-select-box').length){
		$('.custom-select-box').selectmenu().selectmenu('menuWidget').addClass('overflow');
	}
	
	
	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			
			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			
			if($(this).hasClass('active')!==true){
				$(outerBox).find('.accordion .acc-btn').removeClass('active');
			}
			
			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);	
			}
		});	
	}
	
	
	
	const serviceImgItem = document.querySelectorAll(".event-block_two-inner");
	function followImageCursor(event, serviceImgItem) {
		const contentBox = serviceImgItem.getBoundingClientRect();
		const dx = event.clientX - contentBox.x;
		const dy = event.clientY - contentBox.y;
		serviceImgItem.children[1].style.transform = `translate(${dx}px, ${dy}px)`;
	}
	serviceImgItem.forEach((item, i) => {
		item.addEventListener("mousemove", (event) => {
		  setInterval(followImageCursor(event, item), 1000);
		});
	});
	
	
	
	// Three Items Slider
	var slider = new Swiper('.three-items_slider', {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,
		//centeredSlides: true,
		autoplay: {
			enabled: true,
			delay: 6000
		},
		// Navigation arrows
		navigation: {
			nextEl: '.three-items_slider-next',
			prevEl: '.three-items_slider-prev',
			clickable: true,
		},
		//Pagination
		pagination: {
			el: ".three-items_slider-pagination",
			clickable: true,
		},
		speed: 500,
		breakpoints: {
			'1600': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'1100': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	
	
	
	
	// Four Items Slider
	var slider = new Swiper('.four-items_slider', {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		autoHeight: true,
		//centeredSlides: true,
		autoplay: {
			enabled: true,
			delay: 6000
		},
		// Navigation arrows
		navigation: {
			nextEl: '.four-items_slider-next',
			prevEl: '.four-items_slider-prev',
			clickable: true,
		},
		//Pagination
		pagination: {
			el: ".four-items_slider-pagination",
			clickable: true,
		},
		speed: 500,
		breakpoints: {
			'1600': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
			},
			'1100': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	
	
	
	// Instagram Slider
	var slider = new Swiper('.instagram_carousel', {
		slidesPerView: 8,
		spaceBetween: 0,
		loop: true,
		autoplay: {
			enabled: true,
			delay: 6000
		},
		// Navigation arrows
		navigation: {
			nextEl: '.instagram_carousel-next',
			prevEl: '.instagram_carousel-prev',
			clickable: true,
		},
		//Pagination
		pagination: {
			el: ".instagram_carousel-pagination",
			clickable: true,
		},
		speed: 500,
		breakpoints: {
			'1600': {
				slidesPerView: 8,
			},
			'1200': {
				slidesPerView: 8,
			},
			'992': {
				slidesPerView: 7,
			},
			'768': {
				slidesPerView: 5,
			},
			'576': {
				slidesPerView: 3,
			},
			'0': {
				slidesPerView: 2,
			},
		},
	});
	
	
	
	
	
	// Clients Slider
	var slider = new Swiper('.clients_slider', {
		slidesPerView: 6,
		spaceBetween: 30,
		loop: true,
		autoplay: {
			enabled: true,
			delay: 6000
		},
		// Navigation arrows
		navigation: {
			nextEl: '.clients_slider-button-next',
			prevEl: '.clients_slider-button-prev',
			clickable: true,
		},
		//Pagination
		pagination: {
			el: ".clients_slider-pagination",
			clickable: true,
		},
		speed: 500,
		breakpoints: {
			'1600': {
				slidesPerView: 6,
			},
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	
	
	
	
	
	// Two Items Slider
	var slider = new Swiper('.two-items_slider', {
		slidesPerView: 2,
		spaceBetween: 30,
		loop: true,
		autoplay: {
			enabled: true,
			delay: 6000
		},
		// Navigation arrows
		navigation: {
			nextEl: '.two-items_slider-button-next',
			prevEl: '.two-items_slider-button-prev',
			clickable: true,
		},
		//Pagination
		pagination: {
			el: ".two-items_slider-pagination",
			clickable: true,
		},
		speed: 500,
		breakpoints: {
			'1600': {
				slidesPerView: 2,
			},
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	
	
	
	
	if ($(".animation_mode").length) {
		$('.animation_mode').marquee({
			speed: 100,
			gap: 30,
			delayBeforeStart: 0,
			direction: 'left',
			duplicated: true,
			pauseOnHover: true,
			startVisible:true,
		});
	}
	
	
	
	
	// Countdown Timer
	if($('.time-countdown').length){  
		$('.time-countdown').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
			var $this = $(this).html(event.strftime('' + '<div class="counter-column"><span class="count">%D</span>Days</div> ' + '<div class="counter-column"><span class="count">%H</span>Hours</div>  ' + '<div class="counter-column"><span class="count">%M</span>Minute</div>  ' + '<div class="counter-column"><span class="count">%S</span>Second</div>'));
		});
	 });
	}
	
	
	
	// Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}
	
	
	
	// Odometer
	if ($(".odometer").length) {
		$('.odometer').appear();
		$('.odometer').appear(function(){
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
			window.odometerOptions = {
				format: 'd',
			};
		});
	}
	
	

	///////////////////////////////////////////////////// 
    // Title Animation
    let splitTitleLines = gsap.utils.toArray(".title-anim");

    splitTitleLines.forEach(splitTextLine => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: splitTextLine,
          start: 'top 90%',
          end: 'bottom 60%',
          scrub: false,
          markers: false,
          toggleActions: 'play none none none'
        }
      });

      const itemSplitted = new SplitText(splitTextLine, { type: "words, lines" });
      gsap.set(splitTextLine, { perspective: 400 });
      itemSplitted.split({ type: "lines" })
      tl.from(itemSplitted.lines, { duration: 1, delay: 0.3, opacity: 0, rotationX: -80, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
    });
    /////////////////////////////////////////////////////


	// Header Search functionality


	$(document).ready(function() {
		var catalogData = [];
		var eventDetailUrl = '/site/event-detail';
		
		// Ambil data dari elemen tersembunyi
		$('#hidden-catalog-data .catalog-item').each(function() {
			catalogData.push({
				id: $(this).data('id'),
				title: $(this).data('title'),
				desc: $(this).data('desc'),
				url: $(this).data('url')
			});
		});
		
		console.log('Catalog data loaded:', catalogData.length, 'items');
	
		if ($('.search-box-outer').length) {
			$('.search-box-outer').on('click', function () {
				console.log("Search box opened");
				$('body').addClass('search-active');
			});
			
			$('.close-search').on('click', function() {
				console.log("Search box closed");
				$('body').removeClass('search-active');
			});
	
			// Fungsi debounce untuk mengoptimalkan pencarian
			function debounce(func, wait) {
				var timeout;
				return function() {
					var context = this, args = arguments;
					clearTimeout(timeout);
					timeout = setTimeout(function() {
						func.apply(context, args);
					}, wait);
				};
			}
	
			// Fungsi pencarian yang sebenarnya
			function performSearch() {
				var searchQuery = $('#search-input').val().toLowerCase().trim();
				console.log('Searching for:', searchQuery);
	
				if (searchQuery.length === 0) {
					$('#search-suggestions').hide();
					return;
				}
	
				try {
					var suggestions = catalogData.filter(function(item) {
						return item.title.toLowerCase().startsWith(searchQuery);
					});
	
					console.log('Found', suggestions.length, 'suggestions');
	
					if (suggestions.length > 0) {
						var suggestionHtml = '<ul>';
						suggestions.forEach(function(item) {
							suggestionHtml += `
							<li>
								<a href="${eventDetailUrl}?id=${item.id}">
									<div class="event-block_ones">
										<div class="event-block_one-contents">
											<h4 style="margin-left: 20px">${item.title}</h4>
											<p style="margin-left: 20px">${item.desc}</p>
										</div>
									</div>
								</a>
							</li>`;
						});
						suggestionHtml += '</ul>';
						$('#search-suggestions').html(suggestionHtml).show();
					} else {
						$('#search-suggestions').html('<p style="background-color: #000000 ; padding: 20px">Tidak ada hasil yang ditemukan.</p>').show();
					}
				} catch (error) {
					console.error('Error during search:', error);
					$('#search-suggestions').html('<p>Terjadi kesalahan saat mencari.</p>').show();
				}
			}
	
			// Gunakan debounce pada event input
			$('#search-input').on('input', debounce(performSearch, 300));
		}
	});

// 	// Header Search functionality
// 	if ($('.search-box-outer').length) {
// 		$('.search-box-outer').on('click', function () {
// 			openSearch();
// 		});
// 	}

// 	function openSearch() {
// 		if (!$('body').hasClass('search-active')) {
// 			$('body').addClass('search-active');

// 			// Tampilkan input pencarian, tombol close, dan div untuk saran pencarian
// 			$('body').append(`
// 				<div class="search-overlay">
// 					<div class="search-container">
// 						<input type="text" id="search-input" class="form-control" placeholder="Cari...">
// 						<button class="close-search">&times;</button>
// 					</div>
// 					<div id="search-suggestions" class="suggestions-box"></div>
// 				</div>
// 			`);


// 			// Fungsi tombol close
// 			$('.close-search').on('click', function () {
// 				closeSearch();
// 			});

// 			// Menampilkan rekomendasi pencarian saat mengetik
// 			$('#search-input').on('input', function () {
// 				let searchQuery = $(this).val().toLowerCase();

// 				if (searchQuery.length > 0) {
// 					// Contoh rekomendasi dummy, bisa diganti dengan data dari server
// 					let suggestions = ['Popopol', 'Popomaru', 'Popcorn', 'Popaye', 'Popcat'];

// 					// Filter saran berdasarkan input pencarian
// 					let filteredSuggestions = suggestions.filter(function (item) {
// 						return item.toLowerCase().includes(searchQuery);
// 					});

// 					// Membuat elemen HTML untuk saran
// 					let suggestionHtml = '<ul>';
// 					filteredSuggestions.forEach(function (item) {
// 						suggestionHtml += '<li>' + item + '</li>';
// 					});
// 					suggestionHtml += '</ul>';

// 					// Menampilkan hasil saran dalam elemen saran pencarian
// 					$('#search-suggestions').html(suggestionHtml).show();
// 				} else {
// 					$('#search-suggestions').hide();
// 				}
// 			});

// 			// Tutup pencarian saat mengklik di luar area pencarian
// 			$(document).on('click', function (event) {
// 				if (!$(event.target).closest('.search-overlay').length && !$(event.target).closest('.search-box-outer').length) {
// 					closeSearch();
// 				}
// 			});
// 		}
// 	}

// 	// Fungsi untuk menutup pencarian
// 	function closeSearch() {
// 		$('body').removeClass('search-active');
// 		$('.search-overlay').remove();
// 	}


// Header Search functionality
// if ($('.search-box-outer').length) {
//     $('.search-box-outer').on('click', function () {
//         $('body').addClass('search-active');

//         // Tampilkan input pencarian, tombol close, dan div untuk saran pencarian
//         $('body').append(`
//             <div class="search-overlay">
//                 <div class="search-container">
//                     <input type="text" id="search-input" class="form-control" placeholder="Cari...">
                    
//                 </div>
				
//                 <div id="search-suggestions" class="suggestions-box"></div>
//             </div>
//         `);
// 		console.log("Elemen search overlay dan close-search ditambahkan ke DOM");

//         // Fungsi tombol close
//         $(document).on('click', '.close-search', function (event) {
// 			event.preventDefault(); // Ini memastikan tidak ada event lain yang mengganggu
// 			event.stopPropagation(); // Hentikan bubbling jika ada
// 			console.log("Tombol close-search diklik");
// 			closeSearch();
// 		});

//         // Menampilkan rekomendasi pencarian saat mengetik
//         $('#search-input').on('input', function () {
//             let searchQuery = $(this).val().toLowerCase();

//             if (searchQuery.length > 0) {
//                 // Contoh rekomendasi dummy, bisa diganti dengan data dari server
//                 let suggestions = ['Popopol', 'Popomaru', 'Popcorn', 'Popaye', 'Popcat'];

//                 // Filter saran berdasarkan input pencarian
//                 let filteredSuggestions = suggestions.filter(function (item) {
//                     return item.toLowerCase().includes(searchQuery);
//                 });

//                 // Membuat elemen HTML untuk saran
//                 let suggestionHtml = '<ul>';
//                 filteredSuggestions.forEach(function (item) {
//                     suggestionHtml += '<li>' + item + '</li>';
//                 });
//                 suggestionHtml += '</ul>';

//                 // Menampilkan hasil saran dalam elemen saran pencarian
//                 $('#search-suggestions').html(suggestionHtml).show();
//             } else {
//                 $('#search-suggestions').hide();
//             }
//         });

        // Tutup pencarian saat mengklik di luar area pencarian
        // $(document).on('click', function (event) {
        //     if (!$(event.target).closest('.search-overlay').length && !$(event.target).closest('.search-box-outer').length) {
        //         closeSearch();
        //     }
        // });
//     });
// }

// Fungsi untuk menutup pencarian
// function closeSearch() {
// 	console.log("Fungsi closeSearch() dipanggil");
//     $('body').removeClass('search-active');
//     console.log("Class 'search-active' dihapus dari body");
//     $('.search-overlay').remove();
//     console.log("Elemen .search-overlay dihapus");
//     $('.search-box-outer').remove();
//     console.log("Elemen .search-box-outer dihapus");
// } 


	// LightBox Image
	if($('.lightbox-image').length) {
		$('.lightbox-image').magnificPopup({
		  type: 'image',
		  gallery:{
		    enabled:true
		  }
		});
	}
	


	// LightBox Video
	if($('.lightbox-video').length) {
		$('.lightbox-video').magnificPopup({
	      // disableOn: 700,
	      type: 'iframe',
	      mainClass: 'mfp-fade',
	      removalDelay: 160,
	      preloader: false,
	      iframe:{
	        patterns:{
	          youtube:{
	          index: 'youtube.com',
	          id: 'v=',
	          src: 'https://www.youtube.com/embed/%id%'
	        },
	      },
	      srcAction:'iframe_src',
	    },
	      fixedContentPos: false
	    });
	}



	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				message: {
					required: true
				}
			}
		});
	}
	
	
	
	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1500);
	
		});
	}
	
	
	
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       true,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}
	


/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
	});	

})(window.jQuery);