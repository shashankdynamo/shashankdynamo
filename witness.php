<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="witness.css">
<script src="witness.js" defer></script>
<body>

<form id="regForm" action="/action_page.php">
  <h1>Witness Data:</h1>
  <!-- One "tab" for each step in the form: -->
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

<!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
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
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</body>
</html>
