<!DOCTYPE html>
<html>
<head>
 <title>Cards</title>
</head>

<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 10px 20px 20px;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 80px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

</style>
<body>
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
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </nav>
    <section></section>

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="fire.png">
</div>
<div class="title">
 <h1>
Write title Here</h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
<button>Read More...</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="train.png">
</div>
<div class="title">
 <h1>
Write title Here</h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
<button>Read More...</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="road.png">
</div>
<div class="title">
 <h1>
Write title Here</h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
<button>Read More...</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="road.png">
</div>
<div class="title">
 <h1>
Write title Here</h1>
</div>
<div class="des">
 <p>You can Add Desccription Here...</p>
<button>Read More...</button>
</div>
</div>
<!--cards -->


</div>
</body>
</html>
