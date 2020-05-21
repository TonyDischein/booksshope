/*Cart*/
$('body').on('click', '.add-to-cart-link', function(e) {
	e.preventDefault();
	var id = $(this).data('id'),
		quentity = $('.block-buy__cart input').val() ? $('.block-buy__cart input').val() : 1,
		mod = $('.available select').val();
	$.ajax({
		url: '/cart/add',
		data: {id: id, quentity: quentity, mod: mod},
		type: 'GET',
		success: function (res) {
			showCart(res);
		},
		error: function () {
			alert('Ошибка! Попробуйте позже!');
		}
	});
});

function showCart(cart) {
	if ($.trim(cart) === '<h3>Корзина пуста</h3>') {
		$('#modal__checkout, #modal__clear-cart').css('display', 'none');
	} else {
		$('#modal__checkout, #modal__clear-cart').css('display', 'inline-block');
	}

	$('#cart .modal__body').html(cart);
	$('#cart').css('display', 'block');

	if ($('.cart-qty').text() && $('.cart-summ').text()) {
		$('.cart__count-items').html('(' + $('#cart .cart-qty').text() + ')' );
		$('.cart__price').html($('#cart .cart-summ').text() + 'р');
	} else {
		$('.cart__count-items').text('(0)');
		$('.cart__price').text('0 Р');
	}
}

function getCart() {
	$.ajax({
		url: '/cart/show',
		type: 'GET',
		success: function (res) {
			showCart(res);
		},
		error: function () {
			alert('Ошибка! Попробуйте позже!');
		}
	});
}

$('#cart .modal__body').on('click', '.del-item', function () {
	var id = $(this).data('id');
	$.ajax({
		url: '/cart/delete',
		data: {id: id},
		type: 'GET',
		success: function (res) {
			showCart(res);
		},
		error: function () {
			alert('Error!');
		}
	});
});

function clearCart() {
	$.ajax({
		url: '/cart/clear',
		type: 'GET',
		success: function (res) {
			showCart(res);
		},
		error: function () {
			alert('Error!');
		}
	});
}
/*Cart*/

$(document).ready(function() {
	$('.header__burger').click(function(event) {
		$('.header__burger, .horizontal-menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
	$('.footer__title').click(function(event) {
		if($(window).width() <= 768){
			if ($('.footer__category-row').hasClass('one')) {
			$('.footer__title').not($(this)).removeClass('active');
			$('.footer__categories').not($(this).next()).slideUp(300);
		}
		$(this).toggleClass('active').next().slideToggle(300);
		}
	});
});


$(window).resize(function () {
    if($(window).width() >= 770){
        $('.header__burger, .horizontal-menu').removeClass('active');
        $('.footer__categories').css("display", 'block');
    } else {
    	 $('.footer__categories').css("display", 'none');
    	 $('.footer__title').removeClass('active');
    };
});


$('.modal__close').click(function(){
	$('.modal').slideToggle(300);
	return false;
});
$('.container-message__close').click(function(){
	$('.container-message').slideToggle(300);
	return false;
});

$('.main-content-wrapper').on('click', '.special-tab__link', function(event) {
	event.preventDefault();
	var title = $(this).data('title');

	$.ajax({
		url: '/main/special',
		data: {title: title},
		type: 'GET',
		success: function (res) {
			updateTabs(res);
		},
		error: function () {
			alert('Ошибка! Попробуйте позже!');
		}
	});
});

function updateTabs(tab) {
	$('.main-content-wrapper').html(tab);

}