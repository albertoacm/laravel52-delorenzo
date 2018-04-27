$(document).ready(function() {
	// Tooltips
	$('.tips').tooltip({
		selector: "[data-toggle=tooltip]",
		container: "body"
	});

	// // Menu
	// $('li.dropdown').on("mouseenter", function() {
	// 	$(this).addClass("open");
	// });
	// // Menu
	// $('.dropdown-menu').on("mouseleave", function() {
	// 	$("li.dropdown").removeClass("open");
	// });

    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
	
	// altezza header on page load
	setMarginTopCarousel($("#navigation").outerHeight());
});

// altezza header on page resize
$(window).resize(function() {
	setMarginTopCarousel($("#navigation").outerHeight());
});
	
function setMarginTopCarousel(height) {
	$("#carousel-example-generic").css("margin-top",height+"px");
}

// Focus Ricerca
$('#myModal').on('shown.bs.modal', function () {
	$('#searched').focus()
});

//Function to animate slider captions
function doAnimations( elems ) {
    //Cache the animationend event in a variable
    var animEndEv = 'webkitAnimationEnd animationend';

    elems.each(function () {
        var $this = $(this),
            $animationType = $this.data('animation');
        $this.addClass($animationType).one(animEndEv, function () {
            $this.removeClass($animationType);
        });
    });
}

//Variables on page load
var $myCarousel = $('#carousel-example-generic'),
    $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

//Initialize carousel
$myCarousel.carousel();

//Animate captions in first slide on page load
doAnimations($firstAnimatingElems);

//Pause carousel
$myCarousel.carousel('pause');
$('.carousel').carousel({interval: 5000});

//Other slides to be animated on carousel slide event
$myCarousel.on('slide.bs.carousel', function (e) {
    var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
    doAnimations($animatingElems);
});