<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 100%;
        height: 500px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 90%;
        margin: 0 auto;
        padding: 0;
      }
      .marker { width: 250px; padding: 20px;}
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
     
             function initMap() {
      //<img src=https://media.timeout.com/images/103042848/image.jpg width=220px height=100px alt=>


  var staticLocation = [
                      
                       {img:'https://media.timeout.com/images/103042848/image.jpg ',info: '<h2>Broad Peak Boys Hostel</h2>', lat: '31.5204394', lng: '74.3151126'},
                       {img:'https://media.timeout.com/images/103042848/image.jpg',info: '<h2>New Muslim Town</h2>', lat: '31.5114589', lng: '74.3040798'},
                       {img:'https://media.timeout.com/images/103042848/image.jpg ',info: '<h2>Rehman Pura</h2>', lat: '31.5218621', lng: '74.3153668'},
                       {img:'https://media.timeout.com/images/103042848/image.jpg',info: '<h2>Ichrah</h2>', lat: '31.5326814', lng: '74.3062957'},
                       {img:'https://media.timeout.com/images/103042848/image.jpg',info: '<h2>Lahore Zoo</h2>', lat: '31.5495792', lng: '74.3204578'},
             
                       
                      ];

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: new google.maps.LatLng(31.5546, 74.3572),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

   marker = new google.maps.Marker({
            position: new google.maps.LatLng(31.5546, 74.3572),
           
            map: map
          });

  var infowindow = new google.maps.InfoWindow({});

  var marker, endeX;

        for(endeX in staticLocation){

             marker = new google.maps.Marker({
            position: new google.maps.LatLng(staticLocation[endeX].lat, staticLocation[endeX].lng),
            icon:'images/marker.png',
            map: map
          });

          google.maps.event.addListener(marker, 'click', (function (marker, endeX) {
            return function () {
              infowindow.setContent(staticLocation[endeX].info+'<img src=' +staticLocation[endeX].img+' width=220px height=100px alt=>');
              infowindow.open(map, marker);
            }
          })(marker, endeX));
        }


}

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsxJD0tjsf5NUVkcmC-2J_U5oBrhBdnFM&callback=initMap">
    </script>
  </body>
</html>