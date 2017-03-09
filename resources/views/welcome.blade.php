<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<meta charset="UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Optional theme -->
<title>Kalotsavam 2k17 </title>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: 'Raleway', sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}
.main-heading {
    font-family: 'Dosis', sans-serif;

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
            <a style="color:#000;" href="{{ url('/home') }}" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-h-square"></i> Home</a>
            @else
                <a style="color:#000;" href="{{ url('/login') }}" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i><strong> Login</strong></a>
            @endif
  </div>
  @endif

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      @if (Route::has('login'))
          @if (Auth::check())
          @else
              <a style="color:#000;" href="{{ url('/login') }}" class="w3-bar-item w3-button" onclick="toggleFunction()">Login</a>
        @endif
  </div>
    @endif
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle w3-black " style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge  w3-xlarge w3-wide w3-animate-opacity main-heading" style="font-size:51px; ">Amrita Kalotsavam <span class="w3-hide-small glyphicon glyphicon-star-empty" aria-hidden="true">2k17</span></span>
    <br>
    <p class="w3-center" style="font-family: 'Righteous', cursive; color:#fff; font-size:20px" id="demo"></p>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h2 class="w3-center slideanim" style="font-family: 'Righteous', cursive; color:#990000;"> EVENTS </h2>
  <p class="w3-center slideanim"><em>  </em></p>
 <div class="slideanim">
     <div class="container">
<ul class="nav nav-tabs" style="font-size:18px;">
<li class="active"><a data-toggle="tab" style="color:#990000;" href="#f1"><b>ON STAGE</b></a></li>
<li><a data-toggle="tab" style="color:#990000;" href="#f2"><b>OFF STAGE</b></a></li>
<!--<li><a data-toggle="tab" style="color:#990000;" href="#f3"><b>GROUPS</b></a></li>-->
</ul>
</div>


<div class="tab-content text-left container-fluid">
    <div id="f1" class="tab-pane active">
        <div class="panel panel-default">
            <div class="panel-body slideanim" style="background-color:#000;">
                    <div style=" color: #fff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                        <table class="table table-striped table-hover table-bordered " id="event_table" style="background-color: #000;">
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Classical Dance Boys</td>
                            <td style="color:#fff;background-color: #000;" >Classical Dance Girls</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Semi-Classical Dance Boys</td>
                            <td style="color:#fff;background-color: #000;" >Semi-Classical Dance Girls</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Fancy Dress Boys</td>
                            <td style="color:#fff;background-color: #000;" >Fancy Dress Girls</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Monoact Boys</td>
                            <td style="color:#fff;background-color: #000;" >Monoact Girls</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Mimicry Boys</td>
                            <td style="color:#fff;background-color: #000;" >Mimicry Girls</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Kadhaprasangam</td>
                            <td style="color:#fff;background-color: #000;" >Shakespearean Monologues</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Elocution Malayalam</td>
                            <td style="color:#fff;background-color: #000;" >Elocution English</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Elocution Telugu</td>
                            <td style="color:#fff;background-color: #000;" >Elocution Sanskrit</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Recitation English</td>
                            <td style="color:#fff;background-color: #000;" >Recitation Malayalam</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Recitation Hindi</td>
                            <td style="color:#fff;background-color: #000;" >Recitation Telugu</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Recitation Sanskrit</td>
                            <td style="color:#fff;background-color: #000;" >Classical Music Boys</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Classical Music Girls</td>
                            <td style="color:#fff;background-color: #000;" >Light Music Boys</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Light Music Girls</td>
                            <td style="color:#fff;background-color: #000;" >Western Solo Boys</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Western Solo girls</td>
                            <td style="color:#fff;background-color: #000;" >Instrument Percussion</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Instrument Wind</td>
                            <td style="color:#fff;background-color: #000;" >Instrument String</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Instrument Piano</td>
                            <td style="color:#fff;background-color: #000;" >Karokae Boys</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Karokae Girls</td>
                            <td style="color:#fff;background-color: #000;" >Ashtapadi Boys</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Ashtapadi Girls</td>
                            <td style="color:#fff;background-color: #000;" >Mappilapattu Boys</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Mappilapattu Girls</td>
                            <td style="color:#fff;background-color: #000;" >Kadhakali Sangeetham Boys</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Kadhakali Sangeetham Girls</td>
                            <td style="color:#fff;background-color: #000;" ></td>
                        </tr>
                    </table>
                    </div>
            </div>
        </div>
    </div>
    <div id="f2" class="tab-pane fade">
        <div class="panel panel-default">
            <div class="panel-body slideanim" style="background-color:#000;">
                    <div style=" color: #fff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                        <table class="table table-striped table-hover table-bordered " id="event_table" style="background-color: #000;">
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Story Writing English</td>
                            <td style="color:#fff;background-color: #000;" >Story Writing Malayalam</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Essay Writing English</td>
                            <td style="color:#fff;background-color: #000;" >Essay Writing Malayalam</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Essay Writing Tamil</td>
                            <td style="color:#fff;background-color: #000;" >Poetry Writing English</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Poetry Writing Malayalam</td>
                            <td style="color:#fff;background-color: #000;" >Poetry Writing Telugu</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Hindi Essay</td>
                            <td style="color:#fff;background-color: #000;" >Water Coloring</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Cartooning</td>
                            <td style="color:#fff;background-color: #000;" >Pencil Drawing</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Paper collage</td>
                            <td style="color:#fff;background-color: #000;" >Face Painting</td>
                        </tr>
                        <tr>
                            <td style="color:#fff;background-color: #000;" >Rangoli</td>
                            <td style="color:#fff;background-color: #000;" >Clay Modeling</td>
                        </tr>
                    </table>
                    </div>
            </div>
        </div>
    </div>
    <div id="f3" class="tab-pane fade">
        <div class="panel panel-default">
            <div class="panel-body" style="background-color:#804C0B;">
                    <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                    </div>
            </div>
        </div>
    </div>
</div>


 </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container ">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide slideanim">Gallery</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" >
  <h3 class="w3-center slideanim" style="font-family: 'Righteous', cursive; color:#990000; font-size:28px">Memorable Moments</h3>
<div>
    <div role="tabpanel" class="tab-pane">
            <h1 class="text-center">
                <span style="color:#a5011f">

                </span>
            </h1>
            <br><br>
            <div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="{{ asset('images/galary1.jpg') }}" alt="..." height="100%" width="100%">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">
                      <img src="{{ asset('images/galary2.jpg') }}" alt="..." height="100%" width="100%">
                      <div class="carousel-caption">
                      </div>
                    </div>
                   <div class="item">
                      <img src="{{ asset('images/galary4.jpg') }}" alt="..." height="100%" width="100%">
                      <div class="carousel-caption">
                      </div>
                  </div>
                    <!--<div class="item">
                      <img src="{{ asset('images/galary5.jpg') }}" alt="..." height="100%" width="100%">
                      <div class="carousel-caption">
                      </div>
                  </div>-->
                    <div class="item">
                      <img src="{{ asset('images/galary8.jpg') }}" alt="..." height="100%" width="100%">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">
                      <img src="{{ asset('images/galary10.jpg') }}" alt="..." height="100%" width="100%">
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">
                      <img src="{{ asset('images/galary11.jpg') }}" alt="..." height="100%" width="100%">
                      <div class="carousel-caption">
                      </div>
                    </div>
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
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

<script>
// Set the date we're counting down to
var countDownDate = new Date("March 9, 2017 16:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML ="Launches in : "+ hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "It's time to explore your talents";
    }
}, 1000);
</script>
</body>
</html>
