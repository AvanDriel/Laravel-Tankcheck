@extends ('layouts.master')


@section ('content')
	
	<div id="map"></div>

	<script>
		
	function initMap() {
      var uluru = {lat: 51.933303, lng: 4.45201};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: uluru
          });

    	@foreach ($gasstations as $gasstation)
            var location{{$gasstation->id}}= {lat: {{$gasstation->latitude}}, lng: {{$gasstation->longitude}}};

            var contentString{{$gasstation->id}} = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">{{$gasstation->name}}</h1>'+
            '<div id="bodyContent">'+
            '<p>{{$gasstation->adress}}</p>'+
            '<p>€{{$gasstation->gasprice}}</p>'+
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
	</script>
		
	<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7jz7tGATiylYJH4Qa--VfUWz0GWfOvNc&callback=initMap">
    </script>

@endsection

