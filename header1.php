<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>header1</title>
	<style>
		
header {
  margin-top: 80px;
  padding-top: 56px;
  padding-bottom: 38px;
  transition: 0.5s;
}
header nav {
  font-family: Roboto;
  font-size: 24px;
}
header nav .navbar-nav {
  width: 98%;
}
.menuContainer {
  margin-top: -114px;
}
header nav .navbar-nav li > .nav-link {
  padding: 32px 19px !important;
}
header .navbar-light .navbar-nav .active > .nav-link {
  color: #fff;
}
header .navbar-light .navbar-nav .nav-link {
  color: #313131;
  position: relative;
  z-index: 4;
}
header .navbar-light .navbar-nav .nav-link::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 11px;
  z-index: -1;
  transition: 0.2s linear;
}
header {
  --firstNavColor: #07458d;
  --secNavColor: #ed3541;
  --thirdNavColor: #435599;
  --fourthNavColor: #b9c9d9;
  --fiveNavColor: #f1b949;
  --sixNavColor: #07458d;
  --sevenNavColor: #b1dff5;
}
header .navbar-light .navbar-nav .nav-item {
  z-index: 4;
  position: relative;
}
header .navbar-light .navbar-nav .nav-item.active:nth-child(1) > .nav-link,
header .navbar-light .navbar-nav .nav-item:nth-child(1) > .nav-link::before {
  background-color: var(--firstNavColor);
}
header .navbar-light .navbar-nav .nav-item:nth-child(1):hover .nav-link::before,
header .navbar-light .navbar-nav .nav-item:nth-child(1):hover .nav-link {
  color: #fff;
  height: 100%;
}
header .navbar-light .navbar-nav .nav-item.active:nth-child(2) > .nav-link,
header .navbar-light .navbar-nav .nav-item:nth-child(2) > .nav-link::before {
  background-color: var(--secNavColor);
}
header .navbar-light .navbar-nav .nav-item:nth-child(2):hover .nav-link::before,
header .navbar-light .navbar-nav .nav-item:nth-child(2):hover .nav-link {
  color: #fff;
  height: 100%;
}
header .navbar-light .navbar-nav .nav-item.active:nth-child(3) > .nav-link,
header .navbar-light .navbar-nav .nav-item:nth-child(3) > .nav-link::before {
  background-color: var(--thirdNavColor);
}
header .navbar-light .navbar-nav .nav-item:nth-child(3):hover .nav-link::before,
header .navbar-light .navbar-nav .nav-item:nth-child(3):hover .nav-link {
  color: #fff;
  height: 100%;
}
header .navbar-light .navbar-nav .nav-item.active:nth-child(4) > .nav-link,
header .navbar-light .navbar-nav .nav-item:nth-child(4) > .nav-link::before {
  background-color: var(--fourthNavColor);
}
header .navbar-light .navbar-nav .nav-item:nth-child(4):hover .nav-link::before,
header .navbar-light .navbar-nav .nav-item:nth-child(4):hover .nav-link {
  color: #fff;
  height: 100%;
}
header .navbar-light .navbar-nav .nav-item.active:nth-child(5) > .nav-link,
header .navbar-light .navbar-nav .nav-item:nth-child(5) > .nav-link::before {
  background-color: var(--fiveNavColor);
}
header .navbar-light .navbar-nav .nav-item:nth-child(5):hover .nav-link::before,
header .navbar-light .navbar-nav .nav-item:nth-child(5):hover .nav-link {
  color: #fff;
  height: 100%;
}
header .navbar-light .navbar-nav .nav-item.active:nth-child(6) > .nav-link,
header .navbar-light .navbar-nav .nav-item:nth-child(6) > .nav-link::before {
  background-color: var(--sixNavColor);
}
header .navbar-light .navbar-nav .nav-item:nth-child(6):hover .nav-link::before,
header .navbar-light .navbar-nav .nav-item:nth-child(6):hover .nav-link {
  color: #fff;
  height: 100%;
}
header .navbar-light .navbar-nav .nav-item.active:nth-child(7) > .nav-link,
header .navbar-light .navbar-nav .nav-item:nth-child(7) > .nav-link::before {
  background-color: var(--sevenNavColor);
}
header .navbar-light .navbar-nav .nav-item:nth-child(7):hover .nav-link::before,
header .navbar-light .navbar-nav .nav-item:nth-child(7):hover .nav-link {
  color: #fff;
  height: 100%;
}
header.fixed-top {
  padding-bottom: 0;
}
header.fixed-top .navbar-brand > img {
  width: 104px;
}
header.fixed-top .menuContainer {
  margin-top: -58px;
}
/* dropdown design */

header .navbar-light .navbar-nav .nav-item.dd:hover .nav-link::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  bottom: -38px;
  background-color: var(--thirdNavColor);
}

.dropdownMenu {
  display: none;
  position: absolute;
  left: 0;
  top: auto;
  font-family: ApercuPro-Regular;
  color: #004f6d;
  background-color: #fff;
  border-radius: 0 0 10px 10px;
  width: 162%;
  font-size: 23px;
  margin-top: 38px;
}
.dropdownMenu a {
  padding-left: 25px;
}
.dropdownMenu::before {
  content: "";
  position: absolute;
  top: -8%;
  left: 50%;
  width: 29px;
  height: 29px;
  background-color: #fff;
  border-radius: 5px;
  z-index: 4;
  transform: rotate(45deg) translate(-50%, 50%);
}
.dropdownMenu > li {
  padding: 10px 0;
  border-radius: 0 0 10px 10px;
  background-color: #fff;
  position: relative;
  z-index: 4;
}

.dropdownMenu > li:hover {
  background-color: #f7f7f9;
}
header .navbar-light .navbar-nav .nav-item.dd:hover .dropdownMenu {
  display: block;
}
/* ending dropdown */

/*popup setting*/

.popWrpr {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: none;
  z-index: 100;
  transition: 300ms;
}
.popWrpr.active {
  display: block;
}
.popWrpr .popBg {
  background-color: rgba(0, 0, 0, 0.45);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: 250ms;
}
.popWrpr.active .popBg {
  opacity: 1;
}
.popContent {
  width: 100%;
  max-width: 380px;
  margin: 10px;
  padding: 25px;
  background-color: #fff;
  border-radius: 5px;
  border: 1px solid #ddd;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.18);
  position: relative;
  transition: all 300ms;
  transform: translateY(50px);
  opacity: 0;
}
.popWrpr.active .popContent {
  transform: translateY(0);
  opacity: 1;
  transition: all 300ms;
}
.popWrpr .profileBtn {
  display: inline-block;
  text-decoration: none;
  padding: 10px 25px;
  border-radius: 5px;
  background-color: #00098a;
  color: #fff;
  margin-top: 15px;
  transition: 250ms;
}
.popWrpr .profileBtn:hover {
  background-color: #fff;
  color: #00098a;
}
.popWrpr .closePop {
  position: absolute;
  top: 5px;
  right: 5px;
  border: 0;
  width: 25px;
  height: 25px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background-color: #00098a;
  color: #fff;
  cursor: pointer;
}

		
	</style>
</head>
<body>
<header class="container-fluid bg-white">

  <div class="container px-0 menuContainer">
    <nav class="navbar navbar-expand-xl navbar-light align-items-end p-xl-0">
      <a class="navbar-brand d-none" href="index.html">
        <img src="https://runyoursite.in/wp-content/uploads/2020/02/runyoursite-logo.png" width="180px" class="img-fluid">
      </a>

      <a href="#mobileMenu" id="mobileBar" class="d-none ml-auto"> <i class="fa fa-bars"></i></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-md-auto justify-content-end" id="nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About <span class="sr-only">(About Us)</span></a>
          </li>
          <li class="nav-item dd">
            <a class="nav-link" href="#">Programs <span class="sr-only">(Programs)</span></a>
            <ul class="list-unstyled dropdownMenu">
              <li>
                <a href="toddlers.html">Toddlers</a>
              </li>
              <li>
                <a href="preschool.html">Preschool</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dd">
            <a class="nav-link" href="#">Curriculum <span class="sr-only">(Curriculum)</span></a>
            <ul class="list-unstyled dropdownMenu">
              <li>
                <a href="play-based-learning.html">Play-Based Learning</a>
              </li>
              <li>
                <a href="physical-literacy.html">Physical Literacy</a>
              </li>
              <li>
                <a href="steam-curriculum.html">Steam Curriculum</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dd">
            <a class="nav-link" href="#">Parent Corner <span class="sr-only">(Parent Corner)</span></a>
            <ul class="list-unstyled dropdownMenu">
              <li>
                <a href="nutrition.html">Nutrition</a>
              </li>
              <li>
                <a href="parent-reviews.html">Parent Reviews</a>
              </li>
              <li>
                <a href="enrolment.html">Enrolment</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dd">
            <a class="nav-link" href="#">Photo Gallery <span class="sr-only">(Photo Gallery)</span></a>
            <ul class="list-unstyled dropdownMenu">
              <li>
                <a href="bhnM-mississauga.html">BH‘n’M - Mississauga</a>
              </li>
              <li>
                <a href="bhnm-brampton.html">BH‘n’M - Brampton</a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="contact-us.html">Contact Us <span class="sr-only">(Contact Us)</span></a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

</header>

<!-- popup setting-->

<div class="popWrpr" id="pop">
  <div class="popBg">
    <div class="popContent">
      <button aria-hidden="true" class="closePop" id="closePop">x</button>
      <h2>Explore My Profile</h2>
      <p>I am a man of my word (not many, though). My work is my passion. </p>
      <a class="profileBtn" target="_blank" href="https://runyoursite.in/" title="Know more about me">Check Now</a>
    </div>
  </div>
</div>
</body>
</html>