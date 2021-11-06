<!DOCTYPE html>
<html>
 <meta charset="UTF-8">
 <head>
     <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-analytics.js"></script>

    <script src="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.css" />
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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Font-->
  <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
  <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
  <!-- Jquery -->
  <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
  <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
#pos{
  position:;
  left: 10px;
  top: 250px;
}
#pos1{
  position:;
  left: 100px;
  top: 250px;
}
#pos2{
  position: ;
  left: 180px;
  top: 0px;
}
#pos3{
  position: ;
  left: 180px;
  top: 0px;
}
#pos5{
  position: auto;
  left: 10px;
  top: 0px;
}
/* for colour changing */
.button1{
height: 40px;
width: 190px;
font-size: 16px;
border-radius:10px;


}
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

.btn {background-color: #f44336;} /* Red */ 
.btn:hover {background: #da190b;}


/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text] {
  width: 600px;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 600px;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container #button2 {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>




<head>
   <link rel="stylesheet" href="a_nav.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">ACCIDENT AVOIDANCE</label>
      <ul>
        <li><a class="active" href="#"></a></li>
       <!-- <li><button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" onclick="openForm()">
    
  </button></li>-->

        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </nav>
    <section>
      <div class="container">


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="">
      <div class="">
      
       
        
        <!-- Modal body -->
        <div class="modal-body">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="witness.css">
<script src="witness.js" defer></script>
<body>

<!--<form id="regForm" action="/action_page.php">
  <h1>Witness Data:</h1>
  <!-- One "tab" for each step in the form: 
  <div class="tab">Name:
    <p>First Name<input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
    <p>Last Name<input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab">Contact Info:
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">Accident Information:

      <h2>Accident Type</h2>

<!--surround the select box with a "custom-select" DIV element. Remember to set the width:
<div class="custom-select" style="width:200px;">
  <select>
    <option value="0">Select Accident:</option>
    <option value="1">Fire</option>
    <option value="2">Railway</option>
    <option value="3">Work</option>
    <option value="4">Road</option>
   
  </select>
</div>
    <h2>Accident Location</h2>
     <label for="number"><b>Live Location</b></label>
     <button type="button" class="button1" id="button1" >Allow</button>
   
  </div>
  <div class="tab">
    <div class="row">
      <div class="col-25">
        <label for="subject"><b>Accident Description</b></label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Explanation.." style="height:200px"></textarea>
      </div>
    </div>
    
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      <button type="button" class="bt cancel" onclick="closeForm();">Close</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: 
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
-->
    </section>
<title>HOME</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
  <div class="row">
  <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong><i class="fa fa-warning"></i> Danger!</strong> <marquee><p style="font-family: Impact; font-size: 18pt">Dont Panic Stay Calm and do the first aid things</p></marquee>
</div>
  </div>
</div>

<style>
.mySlides {display:none;}
</style>
</head>

<body>
<div class="w3-content w3-section w3-display-middle " style="max-width:600px" >
  <img class="mySlides" src="" style="width:600px">
  <img class="mySlides" src="a2.png" style="width:500px">
  <img class="mySlides" src="a3.png" style="width:600px">
  <img class="mySlides" src="a4.png" style="width:600px">
  <img class="mySlides" src="a5.png" style="width:600px">
  <img class="mySlides" src="a6.png" style="width:600px">
  <img class="mySlides" src="a7.png" style="width:600px">
</div>


<!--<div class="w3-container">

  <div class="w3-dropdown-hover w3-position-right"id="pos"id="fire"><i class="fa fa-fire w3-large">FIRE ACCIDENT</i>
    <div class="w3-dropdown-content w3-card-4" style="width:250">
      <img src="fire.png" alt="London" style="width:80%">
      <div class="w3-container">
         <form  class="form-container">
    <h1 position="center"></h1>

    <label for="number"><b>Allow Current Location</b></label>
    <button type="button" class="button1" id="button1" onclick="myFunction()">ALLOW</button>
    <label for="number"><b>CALL AMBULANCE</b></label>
    <button type="button"  class="button1" id="button2" onclick="myFunction1()">CALL</button>
  </form>
       
      </div>
    </div>
  </div>

  <div class="w3-dropdown-hover w3-position-right" id="pos1" id="railway"><i class="fa fa-train w3-large">RAILWAY ACCIDENT</i>
    <div class="w3-dropdown-content w3-card-4" style="width:250px">
      <img src="train.png" alt="London" style="width:80%">
      <div class="w3-container">
         <form  class="form-container">
    <h1 position="center"></h1>

    <label for="number"><b>Allow Current Location</b></label>
    <button type="button" class="button1" id="button1"onclick="myFunction()" >ALLOW</button>
    <label for="number"><b>CALL AMBULANCE</b></label>
    <button type="button"  class="button1" id="button2"onclick="myFunction1()">CALL</button>
    
  </form>
       
      </div>
    </div>
  

  <div class="w3-dropdown-hover w3-position-right" id="pos2" id="work"><i class="fa fa-globe w3-large">WORK ACCIDENT</i>
    <div class="w3-dropdown-content w3-card-4" style="width:250px">
      <img src="work.png" alt="London" style="width:80%">
      <div class="w3-container">
         <form  class="form-container">
    <h1 position="center"></h1>

    <label for="number"><b>Allow Current Location</b></label>
    <button type="button" class="button1" id="button1" onclick="myFunction()" >ALLOW</button>
    <label for="number"><b>CALL AMBULANCE</b></label>
    <button type="button"  class="button1" id="button2" onclick="myFunction1()">CALL</button>
    <label for="number"><b>Visit Nearest Hospital</b></label>
    <a href="map.php"><button type="button" class="button1" id="button1" " >Direction</button></a>
   
  </form>
       
      </div>
    </div>
  

  <div class="w3-dropdown-hover"id="pos3" id="road"><i class="fa fa-road w3-large">ROAD ACCIDENT</i>
    <div class="w3-dropdown-content w3-card-4" style="width:250px">
      <img src="road.png" alt="Tokyo" style="width:80%">
      <div class="w3-container">
        <form  class="form-container">
    <h1 position="center"></h1>

    <label for="number"><b>Allow Current Location</b></label>
    <button type="button" class="button1" id="button1" onclick="myFunction()" >ALLOW</button>
    <label for="number"><b>CALL AMBULANCE</b></label>
    <button type="button"  class="button1" id="button2" onclick="myFunction1()">CALL</button>
    <label for="number"><b>Visit Nearest Hospital</b></label>
    <a href="map.php"><button type="button" class="button1" id="button1" " >Direction</button></a>

  </form>
      </div>
    </div>
  </div>-->
  <div class="row">
  <div class="column">
    <div class="card">
      <i class="fa fa-fire w3-large">FIRE ACCIDENT</i>
      <img src="fire.png" alt="London" style="width:80%">
      <form  class="form-container">
    <h1 position="center"></h1>

    <label for="number"><b>Report The Incident</b></label>
   <a href="report.php"> <button type="button" class="button1" id="button1" ">REPORT</button></a>
    <label for="number"><b>CALL AMBULANCE</b></label>
    <button type="button"  class="button1" id="button2" onclick="myFunction1()">CALL</button>
  </form>
     
    </div>
  </div>

  <div class="column">
    <div class="card">
     <i class="fa fa-train w3-large"></i>
      <img src="train.png" alt="London" style="width:80%">
       <form  class="form-container">
    <h1 position="center"></h1>

    <label for="number"><b>Report The Incident </b></label>
    <a href="report.php"><button type="button" class="button1" id="button1"onclick="" >REPORT</button></a>
    <label for="number"><b>CALL AMBULANCE</b></label>
    <button type="button"  class="button1" id="button2"onclick="myFunction1()">CALL</button>
    
  </form>
     
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <i class="fa fa-globe w3-large">WORK ACCIDENT</i>
      <img src="work.png" alt="London" style="width:80%">
      <form  class="form-container">
    <h1 position="center"></h1>

    <label for="number"><b>Report The Incident</b></label>
     <a href="report.php"><button type="button" class="button1" id="button1" onclick="" >Report</button></a>
    <label for="number"><b>CALL AMBULANCE</b></label>
    <button type="button"  class="button1" id="button2" onclick="myFunction1()">CALL</button>
    <label for="number"><b>Visit Nearest Hospital</b></label>
    <a href="map.php"><button type="button" class="button1" id="button1" " >Direction</button></a>
   
  </form>
     
    </div>
  </div>
  
  <div class="column">
    <div class="card">
     <i class="fa fa-road w3-large">ROAD ACCIDENT</i>
     <img src="road.png" alt="Tokyo" style="width:80%">
      <form  class="form-container">
    <h1 position="center"></h1>

    <label for="number"><b>Report The Incident</b></label>
    <a href="report.php"><button type="button" class="button1" id="button1" onclick="" >Report</button></a>
    <label for="number"><b>CALL AMBULANCE</b></label>
    <button type="button"  class="button1" id="button2" onclick="myFunction1()">CALL</button>
    <label for="number"><b>Visit Nearest Hospital</b></label>
    <a href="map.php"><button type="button" class="button1" id="button1" " >Direction</button></a>

  </form>
     
    </div>
  </div>
</div>


</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<script>
  mapboxgl.accessToken =
  "pk.eyJ1Ijoic2hhc2hhbmtkeW5hbW8iLCJhIjoiY2trbWhzZng0MGpkeTJvbnNic3U1cXo0MiJ9.jHDzDgQCXJnFwADIPNF9tA"

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
  enableHighAccuracy: true
})

function successLocation(position) {
  setupMap([position.coords.longitude, position.coords.latitude])
}
function errorLocation() {
  setupMap([-2.24, 53.48])
}

function setupMap(center) {
  const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: center,
    zoom: 15
  })

  const nav = new mapboxgl.NavigationControl()
  map.addControl(nav)

  var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
  })

  map.addControl(directions, "top-left")
}
</script>
<script>
function myFunction() {
  alert("Your Current location is Accessed Successfully!!!");
}
function myFunction1() {
  alert("The Ambulance is On the way !!!");
}
</script>


</body>
</html>
