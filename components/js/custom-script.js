$(document).ready(function(){

	// Fix the search box toggling
  	// Setup drop down menu
  		$('.dropdown-toggle').dropdown();

  	// Fix input element click problem
  			$('.dropdown input, .dropdown label').click(function(e) {
    			e.stopPropagation();
  			});

	// Add scroll to top button
	$('body').append('<div class="back-to-top hidden-xs"><span class="glyphicon glyphicon-chevron-up"></span></div>');
		var offset = 220;
    	var duration = 500;
	    $(window).scroll(function() {
	        if ($(this).scrollTop() > offset) {
	            $('.back-to-top').fadeIn(duration);
	        } else {
	            $('.back-to-top').fadeOut(duration);
	        }
	    });

	    $('.back-to-top').click(function(event) {
	        event.preventDefault();
	        $('html, body').animate({scrollTop: 0}, duration);
	        return false;
	    })

	// Activates Tooltips for all anchors inside a list item
		$('li').tooltip({
  			selector: "a[data-toggle=tooltip]"
		})

	// Activate tooltip in author bio for all posts
		$('h3').tooltip({
  			selector: "a[data-toggle=tooltip]"
		})

		// Sidebar Tabbed Widget

    // store the currently selected tab in the hash value
    // $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
    //     var id = $(e.target).attr("href").substr(1);
    //     window.location.hash = id;
    // });

    // // on load of the page: switch to the currently selected tab
    // var hash = window.location.hash;
    // $('#sidebar-tabs a[href="' + hash + '"]').tab('show');

    // Responsive videos using FitVids
    $(".post-videos").fitVids();

    // Carousels
    $('#single-carousel').carousel({interval: 5000});
    $('#coupon-carousel').carousel({interval: 5000});
    $('#feature-post-carousel').carousel({interval: 3000});

    function equalHeight(group) {
	    tallest = 0;
	    group.each(function() {
	        thisHeight = $(this).height();
	        if(thisHeight > tallest) {
	            tallest = thisHeight;
	        }
	    });
	    group.each(function() { $(this).height(tallest); });
	}

	    equalHeight($(".coupon-thumbnail"));

		// Run prettify
		$(function(){
	    	window.prettyPrint && prettyPrint()
	  	})

    // Fix the sidebar subscribe widget
    function sticky_relocate() {
      var window_top = $(window).scrollTop();
      var div_top = $('.sidebar').offset().top;
      var s = $("#subscribe, #coupon-subscribe, #review-subscribe");
      if (window_top > div_top) {
        s.addClass('stick');
      } else {
        s.removeClass('stick');
      }
    }

    $(function() {
      $(window).scroll(sticky_relocate);
      sticky_relocate();
    });

}); //jQuery is loaded