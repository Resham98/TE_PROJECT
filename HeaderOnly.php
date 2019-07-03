<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The Food Doofs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/icon.png">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .block-17 form .search-submit {
    width: 170px;
    margin-left: 20px;
    background: lightslategrey;
    border: 2px solid #fff;
    color: white;
}
.block-17 form .fields .one-third {
    width: 95%
}
        .p-4 {
    padding: 0.5rem !important;
}
.dish-menu .menus:hover {
    background: lightgray;
}

.block-17 form .fields .form-control {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: transparent;
    background: white !important;
    color: #404044 !important;
    border: 1px solid black;
    font-size: 16px;
    width: 108%;
}
/* .ftco-section {
    padding: 0em 0;
    position: relative;
} */

.ftco-footer {
    font-size: 16px;
    background: #27272b;
    padding: 3em 0;
}

.ftco-section {
    padding: 32px;
    position: relative;
}
        .instagram{
	padding-top: 0em;
	.insta-img{
		display: block;
		height: 280px;
		position: relative;
		.icon{
			position: absolute;
			top: 30px;
			left: 30px;
			right: 30px;
			bottom: 30px;
			background: rgba($black,.7);
			opacity: 0;
			@include transition(.3s);
			span{
				color: $white;
				font-size: 40px;
			}
		}
		&:hover{
			.icon{
				opacity: 1;
			}
		}
	}
    </style>
  </head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand"><img src="images/good.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="headeer.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="aboutus.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="feLoginReg.php" class="nav-link">Register</a></li>
            <li class="nav-item"><a href="feLoginReg.php" class="nav-link">Login</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">
              <h1 class="mb-3">There is no sincere love than the love for food</h1>
              <!-- <p><a href="reservation.html" class="btn btn-primary btn-outline-white px-5 py-3">Book a table</a></p> -->
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">
              <h1 class="mb-3">Tasty &amp; Delicious Food</h1>
              <!-- <p><a href="reservation.html" class="btn btn-primary btn-outline-white px-5 py-3">Book a table</a></p> -->
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">
              <h1 class="mb-3">Select a restaurant for yourself at a time convenient for you</h1>
              <!-- <p><a href="reservation.html" class="btn btn-primary btn-outline-white px-5 py-3">Book a table</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->
       

    <div class="ftco-section-reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 reservation pt-5 px-5">
            <div class="block-17">
              <form action="zom.php" method="post" class="d-block d-lg-flex">
                <div class="fields d-block d-lg-flex">

                  <div class="textfield-name one-third"><input type="text" name="zomquery" class="form-control" placeholder="Search a restaurant by name..."></div>

                  <!-- <div class="textfield-phone one-third"><input type="text" class="form-control" placeholder="Phone"></div>

                  <div class="book-date one-third"><input type="text" id="book_date" class="form-control" placeholder="M/D/YYYY"></div>

                  <div class="book-time one-third">
                    <input type="text" id="book_time" class="form-control" placeholder="Time">
                  </div> -->

                  <!-- <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control">
                      <option value="">Person</option>
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">4+</option>
                    </select>
                  </div> -->
                </div>
                <input type="submit" name="zomsubmit" class="search-submit btn btn-primary" value="Search">  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
    </body>
</html>
