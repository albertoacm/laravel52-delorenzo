"use strict";

$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
        type:'image',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: 0,
          tCounter: '<span class="mfp-counter" style="padding: 10px;">%curr% / %total%</span>'
        },
        image: {
            verticalFit: true,
            markup: '<div class="mfp-figure">'+
                    '<div class="mfp-close"></div>'+
                    '<div class="mfp-img"></div>'+
                    '<div class="mfp-bottom-bar">'+
                    '<div class="mfp-title"></div>'+
                    '<div class="mfp-counter"></div>'+
                    '</div>'+
                    '</div>',
            titleSrc: function(item) {
                return item.el.attr("title");
            },
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        }
    });
});