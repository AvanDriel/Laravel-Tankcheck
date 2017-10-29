function initMap() {
            var uluru = {lat: 51.933303, lng: 4.45201};
            
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: uluru,
                mapTypeId: 'roadmap'
            });

            var defaultBounds = new google.maps.LatLngBounds(
              new google.maps.LatLng(-33.8902, 151.1759),
              new google.maps.LatLng(-33.8474, 151.2631));

            var input = document.getElementById('searchfield');

            var searchBox = new google.maps.places.SearchBox(input, {
              bounds: defaultBounds
            });


            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
              var places = searchBox.getPlaces();

              if (places.length == 0) {
                return;
              }

            // For each place, get the icon, name and location.
              var bounds = new google.maps.LatLngBounds();
              places.forEach(function(place) {
                if (!place.geometry) {
                  console.log("Returned place contains no geometry");
                  return;
                }

                if (place.geometry.viewport) {
                  // Only geocodes have viewport.
                  bounds.union(place.geometry.viewport);
                } else {
                  bounds.extend(place.geometry.location);
                }
              });
              map.fitBounds(bounds);
            });

             // Create the DIV to hold the control and call the constructor passing in this DIV
              var geolocationDiv = document.createElement('div');
              var geolocationControl = new GeolocationControl(geolocationDiv, map);

              map.controls[google.maps.ControlPosition.TOP_CENTER].push(geolocationDiv);
     

        @foreach ($gasstations as $gasstation)
            var location{{$gasstation->id}}= {lat: {{$gasstation->latitude}}, lng: {{$gasstation->longitude}}};


            var contentString{{$gasstation->id}} = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">{{$gasstation->name}}</h1>'+
            '<div id="bodyContent">'+
            '<p>{{$gasstation->adress}}</p>'+
            '<p>€{{$gasstation->gasprice}}</p>'+
            '<p>Price by: {{$gasstation->user->name}}</p>'+
            '<a href="/price/approve/{{$gasstation->user->id}}"><img src="images/checkmark.png"></a>'+
            '<a href="/price/correct/{{$gasstation->id}}"><img src="images/exit.png"></a>'+
            '</div>'+
            '</div>';

            var infowindow{{$gasstation->id}} = new google.maps.InfoWindow({
                content: contentString{{$gasstation->id}}
            });

            var marker{{$gasstation->id}} = new google.maps.Marker({
                position: location{{$gasstation->id}},
                map: map
            });

            marker{{$gasstation->id}}.addListener('click', function() {
                infowindow{{$gasstation->id}}.open(map, marker{{$gasstation->id}});
              });
        @endforeach
    }