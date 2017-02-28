<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<meta charset="UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Optional theme -->
<title>Kalolsavam 2k17 </title>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('images/kalotsavam-4.jpg');
    min-height: 100%;
     opacity: 0.9;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("images/kalotsvam 2015.jpg");
    min-height: 400px;
    background-color: #000;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("/w3images/parallax3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}

/* slide animation */
.slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 3s;
      -webkit-animation-duration: 3s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }

</style>
<script src="{{ asset('js/app.js') }}"></script>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-opennav w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    @if (Route::has('login'))
        @if (Auth::check())
            <a href="{{ url('/#') }}" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> link</a>
            @else
                <a style="color:#000;" href="{{ url('/') }}" class="w3-bar-item w3-button"><strong>HOME</strong></a>
                <a style="color:#000;" href="{{ url('/login') }}" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i><strong> Login</strong></a>
                <a style="color:#000;" href="{{ url('/register') }}" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i><strong>Register</strong></a>
            @endif
  </div>
  @endif

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      @if (Route::has('login'))
          @if (Auth::check())
          @else
              <a href="{{ url('/#') }}" class="w3-bar-item w3-button" onclick="toggleFunction()">link</a>
              <a href="{{ url('/login') }}" class="w3-bar-item w3-button" onclick="toggleFunction()">Login</a>
              <a href="{{ url('/register') }}" class="w3-bar-item w3-button" onclick="toggleFunction()">Register</a>
        @endif
  </div>
    @endif
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle " style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">Kalolsavam <span class="w3-hide-small glyphicon glyphicon-star-empty" aria-hidden="true">2k17</span></span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center slideanim"> heading 1</h3>
  <p class="w3-center slideanim"><em> sub heading </em></p>
  <p class="slideanim"> text your content here....</p>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container ">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide slideanim">text your heading here....</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" >
  <h3 class="w3-center slideanim">heading 2</h3>
  <p class="w3-center slideanim"><em> sub heading</em></p><br>
<div class="slideanim">
    text content here......
</div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64  w3-hover-opacity-off slideanim">
  <div class="w3-large w3-section ">
  <p> Copyright © 2017 | All rights reserved |Developed by <a href="{{ url('/webteam') }}" title="W3.CSS" target="_blank" class="w3-hover-text-green">Web Team</a></p>
  </div>
</footer>

<!-- Add Google Maps -->
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}


$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;
    var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass("slide");
      }
  });
});
</script>

</body>
</html>
