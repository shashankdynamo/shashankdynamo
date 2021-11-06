<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
  <link
    rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
    type="text/css"
  />
   <link rel="stylesheet" href="nav.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>ACCIDENT LOCATION</title>
  <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">ACCIDENT AVAOIDANCE</label>
      <ul>
        <li><a class="active" href="#"></a></li>
        <li><a href="accident_type.php"></a>Previous</li>
        <li><a href="startup1.php"></a>Logout</li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </nav>
    <section></section>
  <style>
    body {
      margin: 10px;
    }

    #map {
      height: 90vh;
      width: 90vw;
	  margin-left: 60px;
	  margin-top:0px;
    }
  </style>
  <style>
	.card {
			box-shadow: 0 50px 60px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
			width: 40%;
			border-radius: 5px;
	}

	.card:hover {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	img {
			border-radius: 5px 5px 0 0;
	}

	.container {
			padding: 2px 16px;
	}
</style>
  <script src="script.js" defer></script>
</head>
<body>
	<div class="card">
	<div  class="w3-content w3-section w3-display-middle " style="max-width:600 px"id='map'></div>
	<div class="container">
	 <h4><b>CURRENT LOCATION</b></h4> 
    <p>HOSPITALS</p> 
  </div>
</div>
	
</body>
</html>