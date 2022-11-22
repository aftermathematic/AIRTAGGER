function initMap() {
  var mapOptions = {
    zoom: 11,
    center: new google.maps.LatLng(40.67, -73.94), // New York
    styles:

    [
        {
            "featureType": "administrative",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#a7a7a7"
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#a7a7a7"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#efefef"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#efefef"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#696969"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#b3b3b3"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#d7d7d7"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#d6d6d6"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#ffffff"
                },
                {
                    "weight": 1.8
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#d7d7d7"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#808080"
                },
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#c5d8e7"
                }
            ]
        }
    ]    

    ,
    mapTypeControl: false,
    streetViewControl: false,
  };

  var map = new google.maps.Map(document.getElementById("map"), mapOptions);
  var bounds = new google.maps.LatLngBounds();
  var coords = [];
  var locations = getCoords();

  var pinColor = "0d6efd";
  var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
      new google.maps.Size(21, 34),
      new google.maps.Point(0,0),
      new google.maps.Point(10, 34));
  var pinShadow = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
      new google.maps.Size(40, 37),
      new google.maps.Point(0, 0),
      new google.maps.Point(12, 35));

  var shape = {
    coord: [4, 0, 0, 4, 0, 7, 3, 11, 4, 19, 7, 19, 8, 11, 11, 7, 11, 4, 7, 0],
    type: "poly",
  };

  for (i = 0; i < locations.length; i++) {
    var position = new google.maps.LatLng(locations[i][1], locations[i][2]);
    coords.push(position);
    bounds.extend(position);

    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map,
      animation: google.maps.Animation.DROP,
      title: locations[i][0],
        shadow: pinShadow,
        icon: pinImage,    
    });

    var infoWindow = new google.maps.InfoWindow({
      content: locations[i][0],
    });

    google.maps.event.addListener(
      marker,
      "click",
      (function (mm, tt) {
        return function () {
          infoWindow.setContent(tt);
          infoWindow.open(map, mm);
        };
      })(marker, locations[i][0])
    );

    // google.maps.event.addListener(
    //   marker,
    //   "mouseout",
    //   (function (mm, tt) {
    //     return function () {
    //       infoWindow.setContent(tt);
    //       infoWindow.close(map, mm);
    //     };
    //   })(marker, locations[i][0])
    // );
  }

    // Define a symbol using SVG path notation, with an opacity of 1.
    const lineSymbol = {
        path: "M 0,-1 0,1",
        strokeOpacity: 1,
        scale: 1.3,
      };

  var polyPath = new google.maps.Polyline({
    path: coords,
    geodesic: true,
    strokeColor: "#0d6efd",
    strokeOpacity: 0,
    strokeWeight: 1,
    icons: [
        {
          icon: lineSymbol,
          offset: "0",
          repeat: "8px",
        },
      ],
  });

  map.fitBounds(bounds);
  polyPath.setMap(map);

}

$(document).ready(function () {
    window.addEventListener("load", (event) => {
      initMap();
    });
});
