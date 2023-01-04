<?php
include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ssa</title>
  <style>
    .card-img-top{
      width: 50%;
      height: 50%;
      
       display: block;
      margin-left: auto;
      margin-right: auto;
 
    }

    .card-deck{
      text-align: center;
    }
    .card-img-top img {
transition: .5s ease;
}

.card-img-top:hover{
box-shadow: 0 0 0 10px #000000;
transition: .5s ease;
}
.card-title {
  animation: color-animation 3s linear infinite;
}

.card-title {
  --color-1: #DF8453;
  --color-2: #3D8DAE;
  --color-3: #E4A9A8;
}

.card-title {
  --color-1: #DBAD4A;
  --color-2: #ACCFCB;
  --color-3: #17494D;
}

.card-title {
  --color-1: #ACCFCB;
  --color-2: #E4A9A8;
  --color-3: #ACCFCB;
  
}

.card-title {
  --color-1: #3D8DAE;
  --color-2: #DF8453;
  --color-3: #E4A9A8;
  
}

@keyframes color-animation {
  0%    {color: var(--color-1)}
  32%   {color: var(--color-1)}
  33%   {color: var(--color-2)}
  65%   {color: var(--color-2)}
  66%   {color: var(--color-3)}
  99%   {color: var(--color-3)}
  100%  {color: var(--color-1)}
}
  </style>
</head>
<body><br>

<div class="card-deck">
  
  <div class="card">
    <img src="img/amazon.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h2 class="card-title"><u><b>Expercience Details</b></u></h2>
      <p class="card-text">In this profile I have 6 month expercience <br>and In this profile my work description is we have scanning the product those are customer order <br>the online from amazon and we also shorting the product as a area wise.<br>This is the Inbond process this profile is contract base. my contract expire in 6 month so thats<br> why i left the job</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  
</div>
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