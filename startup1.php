<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
   <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

    <script src="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.js"></script>
<link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.css" />
    
</head>
<body>
    <!-- The surrounding HTML is left untouched by FirebaseUI.
         Your app may use that space for branding, controls and other customizations.-->
         <h1 style="text-align: center;">Login</h1>
         <div id="firebaseui-auth-container"></div>

<script src="fireBase.js"></script>
<script src="login.js"></script>
  <body>
   <!-- <div class="wrapper">
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form action="accident_type.php" class="login">
            <div class="field">
              <input type="text" placeholder="Email Address" required>
            </div>
<div class="field">
              <input type="password" placeholder="Password" required>
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Login">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>
<form action="#" class="signup">
            <div class="field">
              <input type="text" placeholder="Email Address" required>
            </div>
<div class="field">
              <input type="password" placeholder="Password" required>
            </div>
<div class="field">
              <input type="password" placeholder="Confirm password" required>
            </div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Signup">
            </div>
</form>
</div>
</div>
</div>
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script> -->
	
<button class="open-button bt" onclick="openForm()">Emergency</button>

<div class="form-popup" id="myForm">
  <form  class="form-container" action="accident_type.php" method="post">
    <h1 position="center">Emergency Login</h1>

    <label for="number"><b>Mobile Number</b></label>
	<input type="text" id="number" placeholder="+91*********">
    <div id="recaptcha-container"></div>
    <button type="button" class="bt" onclick="phoneAuth();" >Authenticate</button>
	<input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button"  class="bt" onclick="codeverify()">Verify code</button>
    <button type="button" class="bt cancel" onclick="closeForm();">Close</button>
     <a href="accident_type.php"<button type="button" class="bt " ">Login</button></a>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCvNiyXxXqiXp7njj3oW4bfKqlWF3RnADg",
    authDomain: "accident-management-926d3.firebaseapp.com",
    projectId: "accident-management-926d3",
    storageBucket: "accident-management-926d3.appspot.com",
    messagingSenderId: "411206249622",
    appId: "1:411206249622:web:38bdb9b0b07c1bb38ba6b7",
    measurementId: "G-H27S41JW47"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
<script src="authentication.js" type="text/javascript"></script>

 </body>
 </html>
