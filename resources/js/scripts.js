$(function() {

	// Проверка поддержки Webp
	function hasWebP() {
		var rv = $.Deferred(), img = new Image()
		img.onload = function() { rv.resolve() }
		img.onerror = function() { rv.reject() }
		img.src = "http://www.gstatic.com/webp/gallery/1.webp"
		return rv.promise()
	}
	hasWebP().then(function() {
	}, function() {
		$('body').addClass('no-webp')
	})

	// Меню при скроле
	$(window).scroll(function(){
		var topline = $(window).scrollTop();
		if ( topline > 100 ) {
			$(".nav").addClass('bg-white');
		} else {
			$(".nav").removeClass('bg-white');
		};
	});

	// Клик по гамбургеру на моб версии
	$('.nav-mob__btn').click(function() {
		$('.nav-mob').toggleClass('active')
	})
	$('.nav-list__item').click(function() {
		$('.nav-mob').removeClass('active')
	})

	const navHeight = $('.nav').innerHeight()
	$('.head').css('padding-top', navHeight+'px')

	// Скролинг по якорям
	$('.anchor').bind("click", function(e){
		const anchor = $(this)
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top-navHeight // отступ от меню
		}, 500)
	e.preventDefault()
	})

	// Инит фансибокса
	$('.fancybox').fancybox({
		margin: 0,
		padding: 0,
		touch: false
	})

	$('.cart__btn').click(function() {
		const name = $(this).parent().find('.cart__ttl').text()
		$('[name=product]').val(name)

		const link = $(this).data('link')
		$('.catalogItem').val(link)
	})

	// Отправка формы
	$('form').submit(function() {
		let data = $(this).serialize()
		data += '&ajax-request=true'
		const catalog = $(this).find('input[name=catalog]').val()
		$.ajax({
			type: 'POST',
			url: '/mail.php',
			dataType: 'json',
			data: data,
			success: (function() {
				$.fancybox.close()
				$.fancybox.open({src:'#thn'})
				if (catalog !== '') {
					window.open(catalog,'_blank')
				}
			})()
		})
		return false
	})

	$('.head-slider').slick({
		dots: false,
		arrows: false,
		slidesToShow: 1,
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 7000,
		fade: true,
		asNavFor: '.head-img'
	})

	$('.head-img').slick({
		dots: true,
		arrows: false,
		slidesToShow: 1,
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 7000,
		fade: true,
		asNavFor: '.head-slider'
	})

	$('.gallery-slider').slick({
		dots: false,
		arrows: true,
		rows: 2,
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 7000,
		fade: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesPerRow: 2,
				}
			},
			{
				breakpoint: 576,
				settings: {
					rows: 1,
					slidesPerRow: 1,
				}
			}
		]
	})

	$('.video').fancybox({
		idleTime: false,
		afterLoad : function( instance, current ) {
			current.$content.css({
				overflow   : 'visible',
				background : '#000'
			})
		},
		onUpdate : function( instance, current ) {
			var width,
				height,
				ratio = 4 / 3,
				video = current.$content
			if ( video ) {
				video.hide()
				width  = current.$slide.width()
				height = current.$slide.height() - 100
				if ( height * ratio > width ) {
					height = width / ratio
				} else {
					width = height * ratio
				}
				video.css({
					width  : width,
					height : height
				}).show()
			}
		}
	})

	$('.for-item').matchHeight({byRow: true})
	$('.cart__ttl').matchHeight({byRow: true})

	if ($(window).width() > 767) {
		$('.autoHeight').matchHeight({byRow: false})
	}

	window.addEventListener("load", function(event) {
		$('.head').addClass('animated')
	})

})
