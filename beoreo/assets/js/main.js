!(function($){
	"use strict";
	jQuery(document).ready(function($) {
		//Page loading
		
			if ($('#bt_page_loading').length) {
				$('#bt_page_loading').hide('slow');
			}

		//Back top
		function BearsthemesBackTop() {
			$('#bt-backtop').on('click', function() {
				$('html,body').animate({
					scrollTop: 0
				}, 400);
				return false;
			});

			if ($(window).scrollTop() > 300) {
				$('#bt-backtop').addClass('bt-show');
			} else {
				$('#bt-backtop').removeClass('bt-show');
			}

			$(window).on('scroll', function() {

				if ($(window).scrollTop() > 300) {
					$('#bt-backtop').addClass('bt-show');
				} else {
					$('#bt-backtop').removeClass('bt-show');
				}
			});
		}
		BearsthemesBackTop();
		//Date picker
		function BearsthemesDatePicker() {
			if ($('.bt-date-picker').length) {
				$('.bt-date-picker').datepicker();
			}
		}
		BearsthemesDatePicker();
		//useful var
		var $window = $(window);
		var mainMenuHeight = $('#bt-main-menu').height();
		/* Make easing scroll when click a link in page */
		function BearsthemesEasingMoving() {
			var $root = $('html, body');
			$('.bt-header-onepage .bt-menu-list ul > li > a').on('click', function() {
				var href = $.attr(this, 'href');
				$root.animate({
					scrollTop: ($(href).offset().top - mainMenuHeight)
				}, 700, function() {
					window.location.hash = href;
				});
				return false;
			});
		}
		BearsthemesEasingMoving();
		
		/* Dynamic animation */
		var btAnimation = {};
		btAnimation.slideUp = function( elem, timer ) {
				
				dynamics.css(
					elem,
					{ translateX: 20, opacity: 0, scale: .3 }
				)
				
				dynamics.animate( 
					elem, 
					{ translateX: 0, opacity: 1, scale: 1 }, 
					{ 
						type: dynamics.spring, 
						duration: 656, 
						frequency: 166, 
						friction: 155, 
						delay: timer,
						complete: function() {
							$( elem ).css( 'transform', 'none' )
						} 
					} 
				);
			}
		
		btAnimation.slideDown = function( elem, timer ) {
				dynamics.css(
					elem,
					{ translateX: 0, opacity: 1 } 
				)
				
				dynamics.animate( 
					elem, 
					{ translateX: 20, opacity: 0 }, 
					{ 
						type: dynamics.spring, 
						duration: 656, 
						frequency: 166, 
						friction: 155, 
						delay: timer,
						complete: function() {
							$( elem ).css( 'transform', 'none' )
						} 
					} 
				);
			}
		
		/* Open the hide menu */
		function BearsthemesOpenTheHideMenu() {
			if ($('.bt-header-v3 .bt-toggle-menu').length) {
				$('.bt-header-v3 .bt-toggle-menu').on('click', function() {
					var $menu = $('#bt_header .bt-menu-list');
					
					$(this).toggleClass('active');
					$menu.toggleClass('active');
					
					$menu.on( {
						'menu.open': function( e ) {
							var $li_items = $( this ).find( '> ul > li' );
							$li_items.each( function() {
								var index = $( this ).index();
								btAnimation.slideUp( this, index * 80 );
							} )
						},
						'menu.hidden': function( e ) {
							var $li_items = $( this ).find( '> ul > li' );
							$li_items.each( function() {
								var index = $( this ).index();
								btAnimation.slideDown( this, index * 80 );
							} )
						}
					} )
					
					if( $menu.hasClass('active') )
						$menu.trigger( 'menu.open' )
					else 
						$menu.trigger( 'menu.hidden' )
				});
			}
		}
		BearsthemesOpenTheHideMenu();
		/* Open the hide newsletter */
		function BearsthemesOpenNewsletterSidebar() {
			$('.bt-newsletter-popup').on('click', function(event) {
				event.preventDefault();
				$('#bt_newsletter_global').addClass('active');
			});
			$('#bt_newsletter_global .bt-close').on('click', function(event) {
				event.preventDefault();
				$('#bt_newsletter_global').removeClass('active');
			});
			
		}
		BearsthemesOpenNewsletterSidebar();
		/* Open the hide mini search */
		function BearsthemesOpenMiniSearchSidebar() {
			$('.bt-search-sidebar > a').on('click', function() {
				$(this).toggleClass('active');
				$('.bt_widget_mini_cart .bt-cart-header > a.bt-icon').removeClass('active');
				$('#bt_header .widget_search').toggle();
				$('.bt_widget_mini_cart .bt-cart-content').hide();
			});
		}
		BearsthemesOpenMiniSearchSidebar();
		/* Open the hide mini cart */
		function BearsthemesOpenMiniCartSidebar() {
			$('.bt_widget_mini_cart .bt-cart-header > a.bt-icon').on('click', function() {
				$(this).toggleClass('active');
				$('.bt-search-sidebar > a').removeClass('active');
				$('.bt_widget_mini_cart .bt-cart-content').toggle();
				$('#bt_header .widget_search').hide();
			});
		}
		BearsthemesOpenMiniCartSidebar();
		/* Open the hide menu canvas */
		function BearsthemesOpenMenuSidebar() {
			$('.bt-menu-sidebar > a').on('click', function() {
				$('body').toggleClass('bt-menu-canvas-open');
			});
			$('.bt-menu-canvas-overlay').on('click', function() {
				$('body').toggleClass('bt-menu-canvas-open');
			});
		}
		BearsthemesOpenMenuSidebar();
		/* Open the hide menu */
		function BearsthemesOpenMenu() {
			$('#bt-hamburger').on('click', function() {
				$(this).toggleClass('active');
				$('.bt-menu-list').toggleClass('hidden-xs');
				$('.bt-menu-list').toggleClass('hidden-sm'); 
			});
		}
		BearsthemesOpenMenu();
		/* Mobile Menu Dropdown Icon Header V1, V2, V3 */
		function BearsthemesMobileMenuDropdown() {
			var hasChildren = $('.bt-header-v1 .bt-menu-list ul li.menu-item-has-children, .bt-header-v2 .bt-menu-list ul li.menu-item-has-children, .bt-header-v3 .bt-menu-list ul li.menu-item-has-children, .bt-header-v4 .bt-menu-list ul li.menu-item-has-children, .bt-header-v5 .bt-menu-list ul li.menu-item-has-children, .bt-header-v6 .bt-menu-list ul li.menu-item-has-children');
			
			hasChildren.each( function() {
				var $btnToggle = $('<a class="mb-dropdown-icon hidden-lg hidden-md" href="#"></a>');
				$( this ).append($btnToggle);
				$btnToggle.on( 'click', function(e) {
					e.preventDefault();
					$( this ).toggleClass('open');
					$( this ).parent().children('ul').toggle('slow'); 
				} );
			} );
		}
		BearsthemesMobileMenuDropdown();
		/* Menu Dropdown Icon Header Canvas, Header Canvas Border */
		function BearsthemesMenuCanvasDropdown() {
			var hasChildren = $('.bt-header-canvas .bt-menu-list ul li.menu-item-has-children, .bt-header-canvas-border .bt-menu-list ul li.menu-item-has-children');
			
			hasChildren.each( function() {
				var $btnToggle = $('<a class="mb-dropdown-icon" href="#"></a>');
				$( this ).append($btnToggle);
				$btnToggle.on( 'click', function(e) {
					e.preventDefault();
					$( this ).toggleClass('open');
					$( this ).parent().children('ul').toggle('slow'); 
				} );
			} );
		}
		BearsthemesMenuCanvasDropdown();
		/* Header Stick */
		function BearsthemesHeaderStick() {
			if($( '.bt-header-v1, .bt-header-v2, .bt-header-v3, .bt-header-v4, .bt-header-v5, .bt-header-v6' ).hasClass( 'bt-header-stick' )) {
				var header_offset = $('#bt_header .bt-header-menu').offset();
			
				if ($(window).scrollTop() > header_offset.top) {
					$('body').addClass('bt-stick-active');
				} else {
					$('body').removeClass('bt-stick-active');
				}

				$(window).on('scroll', function() {
					if ($(window).scrollTop() > header_offset.top) {
						$('body').addClass('bt-stick-active');
					} else {
						$('body').removeClass('bt-stick-active');
					}
				});
				
				$(window).on('load', function() {
					if ($(window).scrollTop() > header_offset.top) {
						$('body').addClass('bt-stick-active');
					} else {
						$('body').removeClass('bt-stick-active');
					}
				});
				$(window).on('resize', function() {
					if ($(window).scrollTop() > header_offset.top) {
						$('body').addClass('bt-stick-active');
					} else {
						$('body').removeClass('bt-stick-active');
					}
				});
			}
		}
		BearsthemesHeaderStick();
		
		/*OWL Carousel*/
		function BearsthemesOwlCaousel($elem) {
			$elem.owlCarousel({
				items:$elem.data( "col_lg" ),
				margin:$elem.data( "item_space" ),
				loop:$elem.data( "loop" ),
				autoplay: $elem.data( "autoplay" ),
				smartSpeed: $elem.data( "smartspeed" ),
				nav:$elem.data( "nav" ),
				navText:['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
				dots:$elem.data( "dots" ),
				responsive:{
					0:{
						items:$elem.data( "col_xs" ),
						nav:false,
						dots:false,
					},
					768:{
						items:$elem.data( "col_sm" ),
						nav:false,
						dots:false,
					},
					992:{
						items:$elem.data( "col_md" ),
					},
					1200:{
						items:$elem.data( "col_lg" ),
					}
				}
			});
		}
		
		/* Active portfolio carousel */
		if ($('.bt-portfolio-carousel .owl-carousel').length) {
			$('.bt-portfolio-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active portfolio related carousel */
		if ($('.bt-portfolio-related-carousel .owl-carousel').length) {
			$('.bt-portfolio-related-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active team related carousel */
		if ($('.bt-team-related-carousel .owl-carousel').length) {
			$('.bt-team-related-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active team carousel */
		if ($('.bt-team-carousel .owl-carousel').length) {
			$('.bt-team-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active testimonial carousel */
		if ($('.bt-testimonial-carousel .owl-carousel').length) {
			$('.bt-testimonial-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active product carousel */
		if ($('.bt-product-carousel .owl-carousel').length) {
			$('.bt-product-carousel .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active images carousel */
		if ($('.bt-image-carousel-wrap .owl-carousel').length) {
			$('.bt-image-carousel-wrap .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active recent work */
		if ($('.bt-recent-work .owl-carousel').length) {
			$('.bt-recent-work .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active news slider */
		if ($('.bt-news-slider .owl-carousel').length) {
			$('.bt-news-slider .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		/* Active demo item carousel */
		if ($('.bt-demo-item .owl-carousel').length) {
			$('.bt-demo-item .owl-carousel').each(function() {
				new BearsthemesOwlCaousel($( this ));
			});
		}
		
		function BearsthemesCountDownClock() {
			$('.bt-countdown-clock').each(function() {
				var countdownTime = $(this).attr('data-countdown');
				var countdownFormat = $(this).attr('data-format');
				$(this).countdown({
					until: countdownTime,
					format: countdownFormat,
					padZeroes: true
				});
			});
		}
		BearsthemesCountDownClock();
		
		/*Count up*/
		function BearsthemesCountUp() {
			if($( ".bt-number" ).length > 0) {
				$('.bt-number').counterUp({
					delay: 10,
					time: 1000
				});
			}
		}
		BearsthemesCountUp();
		
		/*Masonry*/
		if($('.grid-masonry').length > 0) {
			$('.grid-masonry').isotope({
				// options
			});
			$(window).on('load', function() {
				$('.grid-masonry').isotope({
					// options
				});
			});
			$(window).on('resize', function() {
				$('.grid-masonry').isotope({
					// options
				});
			});
		}
		/* Disable scrolling zoom on maps */
		$('#map').addClass('scrolloff');
		$('.overlay_map').on("mouseup",function(){
			$('#map').addClass('scrolloff'); 
		});
		$('.overlay_map').on("mousedown",function(){
			$('#map').removeClass('scrolloff');
		});
		$("#map").mouseleave(function () { 
			$('#map').addClass('scrolloff');
		});
		/* Shop */
		$('.woocommerce-info .ro-checkout-title > a').on('click', function(event) {
			$( event.target ).closest('.woocommerce-info').toggleClass('ro-active');
		});
		/* Single image gallery */
		if($('.bt-slick-slider').length > 0) {
			$('.bt-slick-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
				nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
				fade: true,
				asNavFor: '.bt-slick-slider-nav'
			});
		}
		if($('.bt-slick-slider-nav').length > 0) {
			$('.bt-slick-slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
				asNavFor: '.bt-slick-slider',
				centerMode: true,
				focusOnSelect: true
			});
		}
		/* Add Product Quantity Up Down icon */
        $('form.cart .quantity, .product-quantity .quantity').each(function() {
            $(this).prepend('<span class="qty-minus"><i class="fa fa-minus"></i></span>');
            $(this).append('<span class="qty-plus"><i class="fa fa-plus"></i></span>');
        });
        /* Plus Qty */
        $(document).on('click', '.qty-plus', function() {
            var parent = $(this).parent();
            $('input.qty', parent).val( parseInt($('input.qty', parent).val()) + 1);
        })
        /* Minus Qty */
        $(document).on('click', '.qty-minus', function() {
            var parent = $(this).parent();
            if( parseInt($('input.qty', parent).val()) > 1) {
                $('input.qty', parent).val( parseInt($('input.qty', parent).val()) - 1);
            }
        })
	});
})(jQuery);