<!DOCTYPE html>
<html>
<head>

	<title>Where to Go Scouting - Tech Demo 2021</title>
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

  <!-- Setup leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

  <!-- @todo: add clustering -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" crossorigin=""/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" crossorigin=""/>
  <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js" crossorigin=""/></script>

  <!-- Load jQuery and PapaParse to read data from a CSV file -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/papaparse@5.3.0/papaparse.min.js"></script>

  <link rel="stylesheet" href="simple-grid.css">
  <link rel="stylesheet" href="custom.css">
</head>
<body>

<div class="container">
  <div class="row" id="header">
    <div class="col-12">
      <h1 style="margin-block-start: 0px; margin-block-end: 0px;">WhereToGoScouting.org</h1>
			<h3 style="margin-block-start: 0px; margin-block-end: 0px;">A Scouting Resource for the 21st Century</h2>
    </div>
  </div>

  <div class="row" id="content">
    <div class="col-12" id="mapid" style="height: 600px;">
      <!--<script src="map-setup.js"></script>-->
      <script src="map2.js"></script>
    </div>
  </div>

  <div class="row" id="header">
    <div class="col-12">
			<p>There may be some bugs right now in Safari. Try Chrome or Firefox for best results.
      <p>Questions? <a href="mailto:chris@dimwell.net">chris@dimwell.net</a>
    </div>
  </div>

</div>

</body>
</html>
