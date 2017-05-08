@extends('layouts.teamee')

@section('title')
    Locations
@endsection
@section('styles')
<style>
  /* Always set the map height explicitly to define the size of the div
   * element that contains the map. */
  #map {
    height: 100%;
  }
  /* Optional: Makes the sample page fill the window. */
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

</style>
@endsection
@section('content')
<input id="pac-input" class="controls" placeholder="Enter a location">
<span><input type="button" id="mapButton" value="  GO  " onclick="nearest()"></span>
<div id="map"></div>
@endsection
@section('scripts')
<script>

  // Locations of each centers with their coordinates
  var loc= [
    {"name":"Irvine, CA","lat":33.6404952,"lang":-117.843253},
    {"name":"Fullerton, CA","lat":33.875251,"lang":-117.9197658},
  ];

  var Currentlat,CurrentLoc;
  var Outtermap,sautocomplete;
  var prevmarker;
function initAutocomplete() {

  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 33.809102, lng: -117.908012}, //Set map to center on the United States
    zoom: 11, //zoom size just to show the United States
       scrollwheel: true,
      /* Placed Map Type Control in the botom left of the map */
       mapTypeControl: true,
       mapTypeControlOptions: {
       style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
       position: google.maps.ControlPosition.BOTTOM_LEFT
       },
       styles: [
         {
           "featureType": "administrative.neighborhood",
           "stylers": [
             {
               "visibility": "off"
             }
           ]
         },
         {
           "featureType": "poi",
           "elementType": "labels.text",
           "stylers": [
             {
               "visibility": "off"
             }
           ]
         },
         {
           "featureType": "poi.business",
           "stylers": [
             {
               "visibility": "off"
             }
           ]
         },
         {
           "featureType": "road",
           "elementType": "labels",
           "stylers": [
             {
               "visibility": "off"
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
           "featureType": "road.arterial",
           "elementType": "labels",
           "stylers": [
             {
               "visibility": "off"
             }
           ]
         },
         {
           "featureType": "road.highway",
           "elementType": "labels",
           "stylers": [
             {
               "visibility": "off"
             }
           ]
         },
         {
           "featureType": "road.local",
           "stylers": [
             {
               "visibility": "off"
             }
           ]
         },
         {
           "featureType": "transit",
           "stylers": [
             {
               "visibility": "off"
             }
           ]
         },
         {
           "featureType": "water",
           "elementType": "labels.text",
           "stylers": [
             {
               "visibility": "off"
             }
           ]
         }
       ]
         });
    Outtermap=map;
    // Placed markers on each center location
    for(var i=0;i<loc.length;i++){
        var marker= new google.maps.Marker({
            position: {lat:loc[i].lat, lng:loc[i].lang},
            map: map
        });
        marker.addListener('click',function(){
    getMarkerPosition(this.position);
        });

    }
  //When user clicks on a marker, it shows that center's infowindow with each center's unique contents
    function getMarkerPosition(s){

        var pos = {
              lat: s.lat(),
              lng: s.lng()
              };
        var storeAddress;
        var storeImg;
        var storePhone;
        for(var i=0;i<loc.length;i++){
            if((s.lat() == loc[i].lat) && (s.lng() == loc[i].lang)){
                if(loc[i].name == "Irvine, CA" ){
                 storeImg="<br><img src='image/xochi-romero-111556.jpg' style='width:200px'><br>";
                 storeAddress="<br>1234 Main St <br> Irvine, CA 99999";
                 storePhone="<br>(123) 456-7890";
                }
                else if(loc[i].name == "Fullerton, CA"){
                    storeImg="<br><img src='image/patrick-tomasso-42345.jpg' style='width:200px;'><br>";
                    storeAddress="<br>4321 Main Blvd <br> Fullerton, CA 99999";
                    storePhone="<br>(123) 444-4444";
                }

              var infoWindow = new google.maps.InfoWindow({map: map});
    infoWindow.setPosition(pos);
              infoWindow.setContent(loc[i].name+ storeImg + storeAddress + storePhone);
    infoWindows.push(infoWindow);
            }
        }
    }
    var input = /** @type {!HTMLInputElement} */(
      document.getElementById('pac-input'));

     autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
      {types: ['geocode']});

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
 var searchBox = new google.maps.places.SearchBox(input);
    searchBox.addListener('places_changed',function(){
        var geocoder = new google.maps.Geocoder();
      geocodeAddress(geocoder,map);
    });

    function geocodeAddress(geocoder, resultsMap) {
  var address = document.getElementById('pac-input').value;
  geocoder.geocode({'address': address}, function(results, status) {
    if (status === 'OK') {
      resultsMap.setCenter(results[0].geometry.location);
      console.log(results[0].geometry.location.lat());
      console.log(results[0].geometry.location.lng());
      Currentlat=results[0].geometry.location.lat();
        CurrentLoc=results[0].geometry.location.lng();
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}
}
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}
  //below code from by galen(http://stackoverflow.com/questions/4057665/google-maps-api-v3-find-nearest-markers)
  //Find the closest center when user input their location and an infowindow popups open with that center's information
  function nearest(){
      var link;
       var q = new Array(loc.length);
       for(var i=0;i<loc.length;i++){
      var closest=getDistanceFromLatLonInKm(loc[i].lat,loc[i].lang,Currentlat,CurrentLoc);
           q[i]=closest;
       }
     console.log(q);

      var min=Math.min.apply(null,q);
      for(var i=0;i<q.length;i++){
          if(q[i]==min){
              var pos = {
              lat: loc[i].lat,
              lng: loc[i].lang
              };
              if(loc[i].name == "Irvine, CA" ){
                storeImg="<br><img src='image/xochi-romero-111556.jpg' style='width:200px'><br>";
                storeAddress="<br>1234 Main St <br> Irvine, CA 99999";
                storePhone="<br>(123) 456-7890";
               }
               else if(loc[i].name == "Fullerton, CA"){
                   storeImg="<br><img src='image/patrick-tomasso-42345.jpg' style='width:200px;'><br>";
                   storeAddress="<br>4321 Main Blvd <br> Fullerton, CA 99999";
                   storePhone="<br>(123) 444-4444";
               }

              var infoWindow = new google.maps.InfoWindow({map: Outtermap});
              infoWindow.setPosition(pos);
              infoWindow.setContent(loc[i].name+"\n:"+"This is your nearest store"+ storeImg + storeAddress + storePhone);

          }
      }
   }
  function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
      var R = 6371; // km
      //has a problem with the .toRad() method below.
      var x1 = lat2-lat1;
      var dLat = x1.toRad();
      var x2 = lon2-lon1;
      var dLon = x2.toRad();
      var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
          Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) *
          Math.sin(dLon/2) * Math.sin(dLon/2);
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
      var d = R * c;
      return d;

  }
  Number.prototype.toRad = function() {
      return this * Math.PI / 180;
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9T5mDnnWXmHM6mhRc44AgCrhxGtzhXAI&callback=initAutocomplete&libraries=places">
</script>
@endsection
