<?php
include("header.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>about</title>
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="style.css" rel="stylesheet" type="text/css"> -->
<style>
		body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  margin: 10px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.pic1:hover{
		color:yellowgreen;
		webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 1s ease;

}
pic2:hover{
		color:yellowgreen;
		webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 1s ease;

}
.pic3:hover{
		color:yellowgreen;
		webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 1s ease;

}
.pic2{
transition: 1s ease;
}
.pic2:hover{
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
transition: 1s ease;
}
</style>
</head>
<body class="container-fluid">
	<form action="contact us.php">
<div class="about-section">
  <h1>About Us </h1>
  <p>Name-: Susheel Gupta</p>
  <p>Address-: Ashok Nagar Marol Pipe Line Bhagwandas Chawl Andheri(E) M-400059</p>
  <p>Mobile No.-: 8108699385</p>
  <p>E-mail-: susheelgupta81086@gmail.com</p>   
</div>

<h2 style="text-align:center"><b><u>Our Details</u></b></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/pic1.jpg" alt="sush1" style="width:100%" class="pic1">
      <div class="container">
        <h2>Susheel Gupta</h2>
        <p class="title">CEO & Founder</p>
        <p>The main purpose of this page design. I can share the my all experience in this page.. </p>
        <p>7777gupta@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/pic2.jpg" alt="sush2" style="width:100%" class="pic2">
      <div class="container">
        <h2>Susheel Gupta</h2>
        <p class="title">Art Director</p>
        <p>The main purpose of this page design. I can share the my all experience in this page..</p>
        <p>7777gupta@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/pic3.jpg" alt="Sush3" style="width:100%" class="pic3">
      <div class="container">
        <h2>Susheel Gupta</h2>
        <p class="title">Designer</p>
        <p>The main purpose of this page design. I can share the my all experience in this page..</p>
        <p>7777gupta@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>

    </div>
  </div>
</div>
</form>
<div style=" background-color: black; color: white; width: 100%; margin-top: 2cm; ">
  <div class="row" style="margin-left: 1cm; ">
    <div class="col-md"><br><br>
      <h3>About Us<br></h3>
      <div class="row">
        <div class=".col-4"> About Us</div>
        <div class=".col-sm-4">FAQ'S</div>
        <div class=".col-md-4">Term & Condition</div>
        <div class=".col-lg-4"> Return Policy & Procedures</div>
        <div class=".col-xl-4"> Privacy Policy</div>
      </div>
    </div>
    <div class="col-md"><br><br>
      <h3>Contact Us</h3>
      <div class="row">
        <div class=".col-4">
          <!-- <mat-icon> call</mat-icon> -->
        <img src="img/call2.png" alt="whatsapp" style="height: 30px;" width="25px">
          +918108699385
        </div><br>
        <div class=".col-sm-4">
          <!-- <mat-icon>email</mat-icon> -->
          <img src="img/gmail.png" alt="whatsapp" style="height: 30px;" width="25px">
          7777gupta@gmai.com
        </div>
        <div class=".col-md-4">
          <img src="img/whats.png" alt="whatsapp" style="height: 30px;" width="25px"> WhatsApp Us
        </div>
      </div>
    </div>
    <div class="col-md"><br><br>
      <h3>Newsletter</h3>
      <div class="row">
        <div class=".col-4"> <button mat-stroked-button>Sign Up Now</button></div>

        <div class=".col-sm-4"><input type="text" placeholder="Your Email" required></div>
      </div>
    </div>

    <div class="col-md"><br><br>
      <h3>Follow Us</h3>
      <!-- <mat-icon>facebook</mat-icon> -->
      <img src="img/whats.png" alt="instagram" style="height: 30px;" width="30px">&NonBreakingSpace;
      <img src="img/tr.png" alt="instagram" style="height: 30px;" width="30px">
      <img src="img/insta.png" alt="instagram" style="height: 30px;" width="30px">
      <img src="img/fb.webp" alt="instagram" style="height: 30px;" width="30px">



    </div>
    
  </div><br>
<p align="center Copyright &copy; 2022 OSH Moments All Right Reserved
 <div s &nbsp &nbsp<p align="centertyle="text-align:right;" class="pic">&NonBreakingSpace;
   
</div>

</body>
</html>