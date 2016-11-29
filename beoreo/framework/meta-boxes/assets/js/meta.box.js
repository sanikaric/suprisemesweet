jQuery(document).ready(function($) {
	"use strict";
	function BearsthemesDatePicker() {
		if ($('.tb_metabox_field .bt-date-picker').length) {
			$('.tb_metabox_field .bt-date-picker').datepicker();
		}
	}
	BearsthemesDatePicker();
	
	function BearsthemesDatePicker() {
		if ($('.tb_metabox_field .tb-checkbox').length) {
			$('.tb_metabox_field .tb-checkbox').each(function() {
				var input_val = $(this).find('input[type="hidden"]');
				var input_cb = $(this).find('input[type="checkbox"]');
				if(input_val.val() == 'on') {
					input_cb.prop({checked: true});
				} else {
					input_cb.prop({checked: false});
				}
				
				input_cb.click(function(){
					if($(this).prop('checked') == true){
						input_val.val('on');
					} else {
						input_val.val('off');
					}
				});
			});
		}
	}
	BearsthemesDatePicker();
	
	$('#post-formats-select input').change(checkformat);
	$('.wp-post-format-ui .post-format-options > a').click(checkformat);
	videoType();
	audioType();
	checkformat();
	quoteType();

	$("#tb_post_quote_type").change(function() {
		quoteType();
	});

	$("#tb_post_video_source").change(function() {
		videoType();
	});

	$("#tb_audio_type").change(function() {
		audioType();
	});

	function checkformat() {
		"use strict";
		var formats = ["gallery","link","image","quote","video","audio","chat"];
		var format = $('#post-formats-select input:checked').attr('value');
		var i = 0;
		for(i = 0; i < formats.length; i++){
			if(formats[i] == format){
				$("#tb_post_"+format+"").css('display', 'block');
			} else {
				$("#tb_post_"+formats[i]+"").css('display', 'none');
			}
		}
	}

	function quoteType() {
		"use strict";
		
	}

	function audioType() {
		"use strict";
		switch ($("#tb_audio_type").val()) {
		case 'soundcloud':
			$("#post_audio_soundcloud").css('display', 'block');
			$("#post_audio_html5").css('display', 'none');
			break;
		default:
			$("#post_audio_soundcloud").css('display', 'none');
			$("#post_audio_html5").css('display', 'block');
			break;
		}
	}
	function videoType() {
		"use strict";
		switch ($("#tb_post_video_source").val()) {
		case '':
			$("#tb_video_setting").css('display', 'none');
			break;
		case 'post':
			$("#tb_video_setting").css('display', 'none');
			break;
		}
	}
});