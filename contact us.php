<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact us</title>
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="style.css" rel="stylesheet" type="text/css"> -->
<style>
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
<body class="form-control">
<h1 align="center" class="card-title"><u>Contact Form</u></h1><br>
<form id="contact_form" name="contact_form" method="post">
    <div class="mb-5 row">
        <div class="col">
            <label>First Name</label>
            <input type="text" required maxlength="50" class="form-control" id="first_name" name="first_name">
        </div>
        <div class="col">
            <label>Last Name</label>
            <input type="text" required maxlength="50" class="form-control" id="last_name" name="last_name">
        </div>
    </div>
    <div class="mb-5 row">
        <div class="col">
            <label for="email_addr">Email address</label>
            <input type="email" required maxlength="50" class="form-control" id="email_addr" name="email"
                placeholder="name@example.com">
        </div>
        <div class="col">
            <label for="phone_input">Phone</label>
            <input type="tel" required maxlength="50" class="form-control" id="phone_input" name="Phone"
                placeholder="Phone">
        </div>
    </div>
    <div class="mb-5">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary px-4 btn-lg">Post</button>


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
</form>
</body>
</html>