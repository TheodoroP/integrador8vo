function initMap() {
	var uluru = {lat: 27.968528, lng: -110.9217554};
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 14,
	  center: uluru
	});
	var marker = new google.maps.Marker({
	  position: uluru,
	  map: map
	});
}