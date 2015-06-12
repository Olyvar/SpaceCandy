$( document ).ready(function() {


    // Simple function that toggles the class 'hide-me' on the figcaption, when you hover over its parent div with the class '.asset-block'
	$('.asset-block').hover(function(){
		$(this).find('figcaption').toggleClass('hide-me');
	});

	// Lightweight jquery to give functionality to the filter bar. Adapted code from http://codepen.io/terf/blog/jquery-filter-divs 
	// to avoid having to use a more heavyweight alternative like Isotope (http://isotope.metafizzy.co/)
	var $btns = $('.filter-btn').click(function() {
	  if (this.id == 'all') {
	    $('#filter > div').fadeIn(450);
	  } else {
	    var $el = $('.' + this.id).fadeIn(450);
	    $('#filter > div').not($el).hide();
	  }
	  $btns.removeClass('active');
	  $(this).addClass('active');
	})

});
