$(document).ready(function() {
	// Modal
	$('.header__btn, .work__btn').on('focus', function(e){
		$.fancybox.open({
			touch: false,
			src  : '#modal',
			type : 'inline',
		});
	});

	// Images for services.html
	if ($('.services__nav-link')) {
		var servicesLink = $('.services__nav-link');
		var servicesPhotos = $('.services__photos-img');

		servicesLink.each(function(index) {
			$(this).on('mouseover', function(e) {
				servicesLink.removeClass('services__nav-link--active');
				servicesLink[index].classList.add('services__nav-link--active');
				servicesPhotos.removeClass('services__photos-img--active');
				servicesPhotos[index].classList.add('services__photos-img--active');
			})
		});
	}

	// Burger
	if ($('.header__burger')) {
		$('.header__burger').on('click', function() {
			$(this).toggleClass('header__burger--active');
			$('.header__mask').toggleClass('header__mask--active');
			$('.header__inner').toggleClass('header__inner--active');
			$('body').toggleClass('no-scroll');
		});
		$('.header__mask').on('click', function() {
			$(this).removeClass('header__mask--active');
			$('.header__burger').removeClass('header__burger--active');
			$('.header__inner').removeClass('header__inner--active');
			$('body').removeClass('no-scroll');
		});
	}
});