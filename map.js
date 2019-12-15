//set map options
var myLatLng = {lat: 19.1383, lng: 77.3210};
var mapOptions = {
    center: myLatLng,
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};

//create autocomplete objects
var input1 = document.getElementById("search");
// var input2 = document.getElementById("destination");
//var input3 = document.getElementById("departure2");
//var input4 = document.getElementById("destination2");
var options = {
    types: ['(cities)']  
}
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);
// var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
//var autocomplete3 = new google.maps.places.Autocomplete(input3, options);
//var autocomplete4 = new google.maps.places.Autocomplete(input4, options);

//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

//onload:
google.maps.event.addDomListener(window, 'load', initialize);

//initialize: draw map in the #googleMap div
function initialize() {
    //create a DirectionsRenderer object which we will use to display the route
    directionsDisplay = new google.maps.DirectionsRenderer();
    //create map
    map=new google.maps.Map(document.getElementById("map"),mapOptions);
    //bind the DirectionsRenderer to the map
    directionsDisplay.setMap(map);
}//end of initialize

//Calculate route when selecting autocomplete:
//google.maps.event.addListener(autocomplete1, 'place_changed', calcRoute);
//google.maps.event.addListener(autocomplete2, 'place_changed', calcRoute);





function codeLatLng(lat, lng) {

  var latlng = new google.maps.LatLng(lat, lng);
  geocoder.geocode({'latLng': latlng}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    console.log(results)
      if (results[1]) {
       //formatted address
       alert(results[0].formatted_address)
      //find country name
           for (var i=0; i<results[0].address_components.length; i++) {
          for (var b=0;b<results[0].address_components[i].types.length;b++) {

          //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
              if (results[0].address_components[i].types[b] == "cities") {
                  //this is the object you are looking for
                  city= results[0].address_components[i];
                  break;
              }
          }
      }
      //city data
      alert(city.short_name + " " + city.long_name)


      } else {
        alert("No results found");
      }
    } else {
      alert("Geocoder failed due to: " + status);
    }
  });
}

// Calculate Route:  
// function calcRoute() {
//     var start = $('#search').val();
//     //var end = $('#destination').val();
//     var request = {
//         origin:start,
//         destination:end,
//         travelMode: google.maps.DirectionsTravelMode.DRIVING,
//         unitSystem: google.maps.UnitSystem.IMPERIAL,
//         durationInTraffic: false,  
//         avoidHighways: false,  
//         avoidTolls: false,
//     };
//     if(start && end){
//         directionsService.route(request, function(response, status) {
//             if (status == google.maps.DirectionsStatus.OK) {
//                 directionsDisplay.setDirections(response);
//             }else{
//                 initialize();
//             }
//         });
//     }
// }