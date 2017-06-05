


$(function() {

	// Custom JS

});
//функция разрядности
function number_format( str ){
	return str.replace(/(\s)+/g, '').replace(/(\d{1,3})(?=(?:\d{3})+$)/g, '$1 ');
}

$(document)


	.on('change input cut copy paste','.line_slider',function(){
		if($(this).val()=="")$(this).val('0');
	  /*  var sum = 0;
		$('.line_slider').each(function(){
			sum = sum + parseInt($(this).val());
			sum = number_format(String(sum));
			$(this).closest('.ui-slider').find('.ui-slider-handle span').html(sum + ' руб');
		})
		$('.total span').text(sum);*/


		$('.line_slider').each(function(){
			sum = parseInt($(this).val());
			sum = number_format(String(sum));
			$(this).closest('.ui-slider').find('.ui-slider-handle span').html(sum + ' руб');
		})

	})


	.ready(function() {



		/*var sum = 0;
		$('.line_slider').each(function(){
			sum = sum + parseInt($(this).val());
		})
		$('.total span').text(number_format(String(sum)));*/

		$(window).load(function(){
			$('.ui-slider-handle').each(function(){
				$(this).html('<span class="ui-slider">'+ number_format($(this).attr('aria-valuenow')) + ' руб</span>');
			})
			$('.ui-slider-track').each(function(){
				var min_ = number_format($(this).closest('.ui-slider').find('.line_slider').attr('min'));
				var max_ = number_format($(this).closest('.ui-slider').find('.line_slider').attr('max'));
				var currency_ = number_format($(this).closest('.ui-slider').find('.line_slider').attr('currency'));
				$(this).append('<div class="ui-slider-track_min">'+ min_ + ' ' +currency_ + '</div>');
				$(this).append('<div class="ui-slider-track_max">'+ max_ + ' ' +currency_ + '</div>');
			})
		})




	});
