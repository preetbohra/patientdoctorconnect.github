<!DOCTYPE html>
<html lang="en">
<head>
  <title>PaDCo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style >
  .hello
  {
    background-color: blue;
  }
  .heading
  {
    color:white;
    margin-top: 15px;
    margin-bottom: 15px;
  }
  #navbar{
    overflow: hidden;
  }
  .sticky
  {
    position: fixed;
    top:0;
    width: 100%;
  }
  .demo{
    height: 1000px;
  }
  .sticky + .demo
  {
    padding-top: 0px;
  }
  .header1{
    color: grey;
    font-family:Comic Sans MS, Comic Sans, cursive;
    font-weight: 900px;
    font-size: 50px;
  }
  .header3
  {
    padding-top: 30px;
    font-family:Courier, monospace;
    color: grey;
    font-size: 25px;
  }
  .headinghi 
  {
    color:white;
    padding-left: 150px;
     font-family: Brush Script MT, Brush Script Std, cursive;
    font-size: 35px;
    margin-top: 15px;
    margin-bottom: 15px;
  }
  .heading4
  {
    color: white;
    padding-left: 22px;
     font-family: Brush Script MT, Brush Script Std, cursive;
    font-size: 35px;
    margin-top: 15px;
    margin-bottom: 15px;
    padding-left: 35px;
  } 
  .heading5
  {
    color: white;
    font-family: Brush Script MT, Brush Script Std, cursive;
    font-size: 35px;
    margin-top: 15px;
    margin-bottom: 15px;
  }
</style>
  </head>
<body onscroll="myfunction()">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-sm-7">
        <h1 class="header1">PatientDoctorConnect</h1>
      </div>
      <div class="col-sm-5">
        <h3 class="header3">Care today, Just a CLICK AWAY...</h3>
      </div>
    </div>
  </div>
 <div class="container-fluid hello" id="navbar">
<div class="row ">
    <div class="col-sm-6">
      <h3 class="heading">Logo</h3>
    </div>
    <div class="col-sm-3">
      <h3 class="headinghi">You Are : </h3>
    </div>
    <div class="col-sm-1">
      <h3 class="heading5">Patient</h3> 
    </div>
    <div class="col-sm-2">
      <h3 class="heading4">Doctor</h3> 
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row demo">
  </div>
  </div>
  <script>
window.onscroll = function(){
  myFunction()
 };

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>