"use strict";

$(document).ready(function() {
	//VIDEO
	if($(".video-iframe").length) {
	    $('.video-iframe').magnificPopup({
	    	type:'iframe', 
	    	mainClass:'mfp-fade'
	    });
	}

	// GALLERY
	if($("a.image-link").length) {
	    $("a.image-link").click(function(e) {
	        var prod_code = $(this).attr("data-product-code");
	        var prod_title = $(this).attr("data-product-title");

	        var items = [];
	        items.push( { src: $(this).attr('href')  } );
	        
	        if($(this).data('gallery')){
	            var $arraySrc = $(this).data('gallery').split(',');
	            $.each( $arraySrc, function( i, v ){
	                items.push( {
	                    src: v 
	                });
	            });     
	        }

	        $.magnificPopup.open({
	            type:'image',
	            mainClass: 'mfp-fade',
	            items:items,
	            image: {
	                markup: '<div class="mfp-figure">'+
	                        	'<div class="mfp-close"></div>'+
	                        	'<div class="mfp-img"></div>'+
	                        	'<div class="mfp-bottom-bar" style="background-color:#f6be57; margin-top: -40px; color: #000;">'+
	                        		'<div class="mfp-title" style="padding: 10px; font-size: 14px; color: #000;"></div>'+
	                        		'<div class="mfp-counter" style="padding: 10px;"></div>'+
	                        	'</div>'+
	                        '</div>',
	                verticalFit: true,
	                titleSrc: function(item) {
	                	return "<strong>" + prod_code + "</strong> " + prod_title;
	                }
	            },
	            gallery: {
	              enabled: true,
	              tCounter: '<span class="mfp-counter" style="padding: 10px; color: #000;">%curr% / %total%</span>'
	            }
	        });

	        e.preventDefault();
	    });
	}
});