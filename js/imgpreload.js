$.fn.preload = function() {
    this.each(function(){
        $('<img/>')[0].src = this;
    });
}

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