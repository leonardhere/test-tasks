

function myMap() {
  var lsaran_lat = 55.9835868;
  var lsaran_lng = 37.5949114;
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(lsaran_lat, lsaran_lng);
  var mapOptions = {center: myCenter, zoom: 16};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var icon = {
      url: '/image/logo.ico', // url
      scaledSize: new google.maps.Size(25, 25), // scaled size
      origin: new google.maps.Point(0,0), // origin
      anchor: new google.maps.Point(0,0) // anchor
  };


  var marker = new google.maps.Marker({
    position:myCenter,
    icon: icon
  });
  marker.setMap(map);
  var map_container = document.getElementById('map_container');

  function close_route_(){
    map_container.style.display = 'none';    
  }

  function create_route_(){
    map_container.style.display = 'block';

    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
     
        var directionsService = new google.maps.DirectionsService();
        var directionsDisplay = new google.maps.DirectionsRenderer();

        var start = new google.maps.LatLng(pos['lat'], pos['lng']);
        var end = new google.maps.LatLng(lsaran_lat, lsaran_lng);
        var request = {
          origin:start, 
          destination:end,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
        };

        directionsService.route(request, function(response, status) {
          if (status == 'OK') {
            directionsDisplay.setDirections(response);
          }
        });
        directionsDisplay.setMap(map);

      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    }

  }
  create_btn.addEventListener('click', create_route_);
  close_btn.addEventListener('click', close_route_);

}


var create_btn =  document.getElementById('create_route');
var close_btn =  document.getElementsByClassName('close')[0];


