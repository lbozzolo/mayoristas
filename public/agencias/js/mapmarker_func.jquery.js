		//set up markers 
		var myMarkers = {"markers": [
				{"latitude": "-58.4776972", "longitude":"-34.5478386", "icon": "img/map-marker.png"}
			]
		};
		
		//set up map options
		$(".map_contact").mapmarker({
			zoom	: 14,
			center	: 'Covent Garden London',
			markers	: myMarkers
		});

