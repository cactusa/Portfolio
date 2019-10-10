$.fn.preload = function() {
    this.each(function() {
        $('<img/>')[0].src = this;
    });
};

// Usage:

$([ '../img/facebook.png',
	'../img/instagram.png',
	'../img/twitter.png',
	'../img/linkedin.png',
	'img/facebook.png',
	'img/instagram.png',
	'img/twitter.png',
	'img/linkedin.png'
]).preload();

// Accessibility drop-down

$(function() {
	$('dd').prepend('&#9654; ');

	$('button').on('click', function() {
		$('.details').slideToggle(500);
		($('button').text() == 'i') ? $('button').text('x') : $('button').text('i');
	});
});
