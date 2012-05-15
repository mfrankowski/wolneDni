var mapa;

function mapaStart() {
	var wspolrzedne = new google.maps.LatLng(54.759947,17.554986);
	var opcjeMapy = {
		zoom : 15,
		center : wspolrzedne,
		mapTypeId : google.maps.MapTypeId.ROADMAP,
		disableDefaultUI : true,
		navigationControl: true
	};
	mapa = new google.maps.Map(document.getElementById("mapka"), opcjeMapy);

	google.maps.event.addListener(mapa, 'click', function(zdarzenie) {
		if(zdarzenie.latLng) {
			var pozycjaAkt = zdarzenie.latLng;
			marker.setPosition(zdarzenie.latLng);
			SetCoords(pozycjaAkt.lng(),pozycjaAkt.lat())
		}
	});
	var punkt = new google.maps.LatLng(54.759947,17.554986);
	var opcje = {
		position : punkt,
		map : mapa,
		title : ""
	}

	var marker = new google.maps.Marker(opcje);
}

var SetCoords = function(h,v) {
	document.getElementById("coords_h").value = h;
	document.getElementById("coords_v").value = v;
}