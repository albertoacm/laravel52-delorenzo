"use strict";

var map;
var markers = [];
var isDraggable = !('ontouchstart' in document.documentElement);

function init()
{
    map = new google.maps.Map(document.getElementById('mapProjectsWrapper'), {
        zoom: 3,
        scrollwheel: false,
        draggable: isDraggable,
        center: new google.maps.LatLng(-3.780006, 23.538219),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoomControl: true,
        zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_TOP
        },
        scaleControl: true,
        streetViewControl: true,
        streetViewControlOptions: {
            position: google.maps.ControlPosition.LEFT_TOP
        }
    });

    $("#mapProjectsWrapper").css("height", "700px");
    
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    // Loop through our array of markers & place each one on the map
    for( i = 0; i < locations.length; i++ )
    {
        var markerid = locations[i][3];    
        var position = new google.maps.LatLng(locations[i][1], locations[i][2]);

        var marker_image = {
            url: 'http://www.delorenzoglobal.com/image/dlmarker.png',
            size: new google.maps.Size(35, 50),     
        };

        var marker = new google.maps.Marker({
            position: position,
            map: map,
            icon: marker_image,
            title: locations[i][0],
            id: locations[i][3]
        });

        // Allow each marker to have an info window
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(locations[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));
        
        // Add marker to markers array
        markers[markerid] = marker;
    }

    $('.marker-link').on('click', function (e) {
        e.preventDefault();
        google.maps.event.trigger(markers[$(this).data('markerid')], 'click');
        map.setZoom(10);
        map.setCenter(markers[$(this).data('markerid')].getPosition());
    });
}

$(document).ready(function() {
    google.maps.event.addDomListener(window, 'load', init);

    // Per pagina project.php
    if ($('.popup-gallery').length) {
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
    }
});