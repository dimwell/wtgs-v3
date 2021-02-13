//var mymap = L.map('mapid').setView([34.1748, -86.8436], 8);
	var mymap = L.map('mapid').setView([40, -95], 4);

	var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	});

	mymap.addLayer(tiles);

	var markers = L.markerClusterGroup();
	// Read markers data from data.csv
	$.get('./data-rand.csv', function(csvString) {
		// Use PapaParse to convert string to array of objects
		var data = Papa.parse(csvString, {header: true, dynamicTyping: true}).data;

		// For each row in data, create a marker and add it to the map
		// For each row, columns `Latitude`, `Longitude`, and `Title` are required
		for (var i in data) {
			var row = data[i];
			var marker = L.marker([row.lat, row.lon], {
				opacity: 1
			}).bindPopup(row.name);

			//marker.addTo(mymap);
			markers.addLayer(marker);
		}

		var str="<b>Camp Westmoreland</b>"
						 + "<br/>596 Westmoreland Rd."
						 + "<br/>Florence, AL 35634"
						 + "<br/>"
						 + "<br/>Greater Alabama Council, BSA"
						 + "<br/><a href=\"https://1bsa.org/camp-westmorland/\">https://1bsa.org/camp-westmorland/</a>";

		var marker=L.marker([34.8825, -87.5677], {
			opacity: 1
		}).bindPopup(str);

		markers.addLayer(marker);

	});

	mymap.addLayer(markers);
