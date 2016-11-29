(function($) {
	"use strict";
	function beoreo_box_style(){
		var $linkStyle = $( 'link#beoreo_preset-css' );
		$('.panel-primary-color').on('click', 'li', function(){
			$(this).addClass('active').siblings('.active').removeClass('active');
			var link_preset = $( this ).data( 'link' );
			$linkStyle.attr( 'href', link_preset );
			//console.log(link_preset);
		});

		$('.panel-selector-btn').on('click', function(e){
			e.preventDefault();
			$('body').removeClass('wide boxed').addClass( $(this).data('value') );
			$(this).addClass('active').siblings('.active').removeClass('active');
			
			setTimeout( function() {
				$( window ).trigger( 'resize' );
			}, 100 );
		});

		$('.panel-primary-background').on('click','li', function(){
			var link_bg = $( this ).data( 'link' );
			$('body').addClass('bg-pattern-body').css('background-image', 'url('+ link_bg +')' );
			$(this).addClass('active').siblings('.active').removeClass('active');
		});

		$('.panel-selector-open').on('click', function(){
			$(this).parent().toggleClass('in');
		})
		
		$('#panel-style-selector .panel-select-homepage a').each(function(){
			$(this).hover(function(){
				var img_link = $(this).data('img');
				$('#panel-style-selector .demo-popup').fadeOut(0, function(){
					$(this).fadeIn(500);
				});
				$('#panel-style-selector .demo-popup').html('<img src="' + img_link + '" alt="">');
			},function(){
				$('#panel-style-selector .demo-popup').fadeOut(0);
				$('#panel-style-selector .demo-popup').empty();
			})
		})
	}
	$(document).ready( function(){
		beoreo_box_style();
	})
	
})(window.jQuery)