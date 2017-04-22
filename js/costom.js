
/*smoth scoll js part*/
    	$(document).ready(function() {
    // bind click event to all internal page anchors
    $("a[href*=#]").bind("click", function(e) {
        // prevent default action and bubbling
        e.preventDefault();
        e.stopPropagation();
        // set target to anchor's "href" attribute
        var target = $(this).attr("href");
        // scroll to each target
        $(target).velocity("scroll", {
            duration: 500,
            offset: -40,
            easing: "ease-in-out"
        });
    });
});
			
		/*fillter js part*/
$( document ).ready(function() {
  /* activate jquery isotope */
  var $container = $('#posts').isotope({
    itemSelector : '.item',
    isFitWidth: true
  });

  $(window).smartresize(function(){
    $container.isotope({
      columnWidth: '.col-sm-3'
    });
  });
  
  $container.isotope({ filter: '*' });

    // filter items on button click
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });
});

/*porgers bar js part */

$(function () { 
		  $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
		});  
		
		// $( window ).scroll(function() {   
		 // if($( window ).scrollTop() > 10){  // scroll down abit and get the action   
		  $(".progress-bar").each(function(){
			each_bar_width = $(this).attr('aria-valuenow');
			$(this).width(each_bar_width + '%');
		  });
			   
		 //  }  
		// });
		
		
		
/* work part js */

$(function(){
  var front = $('.Front'),
      others = ['Left1', 'Left', 'Right', 'Right1'];
  
  $('.Carousel').on('click', '.Items', function() {
    var $this = $(this);
    
    $.each(others, function(i, cl) {
      if ($this.hasClass(cl)) {
        front.removeClass('Front').addClass(cl);
        front = $this;
        front.addClass('Front').removeClass(cl);
      }
    });
  });
});
			


