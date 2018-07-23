   var map;
   var cirle;
      function initMap() {
		 uluru={lat:  53.90, lng: 27.56};
        map = new google.maps.Map(document.getElementById('map'), {
          center:uluru ,
          zoom: 11.5,
          zoomControl: true,
          scaleControl: true,
          mapTypeControl: true,

          mapTypeControlOptions: {
          style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
          mapTypeIds: ['roadmap', 'terrain']
          }
           });
        
	         
           map.addListener("click", function (e) {
             map:null;
             cirle=new google.maps.Circle({
             map:map,
             radius:1000,
             fillColor:"green",
             center:e.latLng
      
       });
           

          });


  var centerControlDiv = document.createElement('div');
  var centerControl = new Test(centerControlDiv, map);
  centerControlDiv.index = 1;
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);  
	}

function Test(controlDiv, map) {
        // Set CSS for the control border.
        var controlUI = document.createElement('div');
        controlUI.style.backgroundColor = 'aqua';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '50px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';
        controlUI.title = 'Click to recenter the map';
        controlDiv.appendChild(controlUI);
        // Set CSS for the control interior.
        var controlText = document.createElement('div');
        controlText.style.color = 'rgb(25,25,25)';
        controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
        controlText.style.fontSize = '16px';
        controlText.style.lineHeight = '38px';
        controlText.style.paddingLeft = '5px';
        controlText.style.paddingRight = '5px';
        controlText.innerHTML = 'Center Map';
        controlUI.appendChild(controlText);
        // Setup the click event listeners: simply set the map to Chicago.
        controlUI.addEventListener('click', function() {
          map.setCenter(uluru);
        });
      }

  


