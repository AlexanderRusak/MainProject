   var map;
      function initMap() {
		 uluru={lat: -10.043333, lng: -77.028333};
        map = new google.maps.Map(document.getElementById('map'), {
          center:uluru ,
          zoom: 8
        });
		
	var marker=new google.maps.Marker({position:uluru, map:map});
	}