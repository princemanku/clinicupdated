(function($){
	$(document).ready(function(){

		// Google Maps
		//-----------------------------------------------
		if ($("#map-canvas").length>0) {
			var map, myLatlng, myZoom, marker;
			// Set the coordinates of your location
			myLatlng = new google.maps.LatLng(28.643757, 77.118797);
			myZoom = 12;
			function initialize() {
				var mapOptions = {
					zoom: myZoom,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					center: myLatlng,
					scrollwheel: false
				};
				
				var infowindow = new google.maps.InfoWindow({
    content: "<h5>Dr. Nivedita Dadu's Dermatology Clinic</h5><span>J-12/25, 1st Floor,Rajouri Garden, New Delhi, Delhi 110027</span>"
});
				
				map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
				marker = new google.maps.Marker({
					map:map,
					draggable:true,
					animation: google.maps.Animation.DROP,
					position: myLatlng,
					title: 'Dr. Nivedita Dadu&acute;s Dermatology Clinic'
				});
				google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
				});
			}
			google.maps.event.addDomListener(window, "load", initialize);
		}
	}); // End document ready

})(this.jQuery);	



