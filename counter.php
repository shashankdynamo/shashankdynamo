
<!DOCTYPE html>
<html>
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>

  <a href="admin.php"<span class="w3-bar-item w3-right"><i class="fa fa-sign-out fa-fw"></i>Logout</span></a>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="admin.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-comment"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
      <div class="container">
  <div class="row">
  <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong><i class="fa fa-warning"></i>Welcome Back Admin!!!!!</strong> <marquee><p style="font-family: Impact; font-size: 18pt">Admin Login</p></marquee>
</div>
  </div>
</div>
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class=" fa-fw"></i>  </a>
    <a href="umap.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  User</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-ambulance fa-fw"></i>  Add Ambulance</a>
    <a href="#s1" class="w3-bar-item w3-button w3-padding" onclick="show_hide()"><i class="fa fa-newspaper-o fa-fw" ></i> Latest Medical News</a>

    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-ambulance"></i> Accident Overview</b></h5>
  </header>

 <!-- <div class="w3-row-padding w3-margin-bottom">
    <div class=""class="w3-col" style="width:20%">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-hospital-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>0</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total Accident </h4>
      </div>
    </div>
    <div class="" class="w3-col" style="width:20%">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-road w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>0</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Road Acccident</h4>
      </div>
    </div>
    <div class=""class="w3-col" style="width:20%">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-fire w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>0</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Fire Accident</h4>
      </div>
    </div>
    <div class=""class="w3-col" style="width:20%">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-train w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>0</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Railway Accident</h4>
      </div>
    </div>
  
  <div class="" class="w3-col" style="width:20%">
      <div class="w3-container w3-green w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-globe w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>0</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Work Accident</h4>
      </div>
    </div>
  </div>
  </div>
-->
    <iframe src="https://www.medicalnewstoday.com/"width="80%" height="600px"frameborder="0" id="s1"></iframe>

  
  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4></h4>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>
<script>
  var a;
  function show_hide()
   {
      if(a==1)
      {

        document.getElementById("s1").style.display="inline";
        return a=0;

      }
      else
      {
        document.getElementById("s1").style.display="none";
        return a=1;
      }
  }

</script>

</body>
</html>
