var map;
var markers = [];
var isDraggable = !('ontouchstart' in document.documentElement);
var locations = [ 
		['De Lorenzo S.p.A.<br />Viale Romagna, 20 - 20089 Rozzano (MI)', 45.383658, 9.166106, 1],
		['De Lorenzo of América Corp. S.A. de C.V.<br />Pensylvania 189 P.B. Colonia Napoles - Benito Juarez D.F. - 03810 (México)', 19.390198, -99.178419, 2],
		['De Lorenzo USA, LLC<br />16444 SW 61 WAY – MIAMI - Florida 33193 ( United States)', 25.5761631,-81.1684451, 3],
        /*['De Lorenzo Hispana<br />Calle juan de Herrera, 1 - Local bajo (esq. Constitución) - Sevilla La nueva Madrid - 28609 (España)', 40.347334, -4.027401, 4],*/
        ['De Lorenzo do Brasil, Ltda<br />Rua Belgrado, 330 – Vila Moinho Velho São Paulo-SP - 04285-040 (Brasil)', -23.61214, -46.603795, 5]
	];

function init()
{
	map = new google.maps.Map(document.getElementById('mapWrapper'), {
		zoom: 3,
		scrollwheel: false,
    	draggable: isDraggable,
		center: new google.maps.LatLng(44.494887,11.342616),
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

  	$("#mapWrapper").css("height", "700px");
	
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
}

$(document).ready(function() {
	google.maps.event.addDomListener(window, 'load', init);
});