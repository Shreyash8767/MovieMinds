<?php
	session_start();
	if (!isset($_SESSION["user"])) {
	   header("Location: login.php");
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MovieMinds</title>

	<style>
        .image-row {
            display: flex;
            justify-content: space-between; /* Adds space between images */
        }

        .image-row img {
            width: 30%; /* Adjust width as needed (30% gives 3 images side-by-side) */
            margin: 5px;
        }
    </style>


<style>
        .cast-container {
            display: flex;
            flex-wrap: wrap; /* Allows wrapping to next line if necessary */
            gap: 50px; /* Adds space between cast members */
            justify-content: center;
        }

        .cast-member {
            text-align: center;
            width: 150px;
        }

        .cast-member img {
            width: 100%;
            border-radius: 50%; /* Makes the image round */
        }

        .cast-member h3 {
            margin-top: 10px;
            font-size: 16px;
        }
    </style>

<style>
        /* Star Rating Style */
        .rating {
            display: flex;
            direction: row-reverse;
            justify-content: center;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 30px;
            color: lightgray;
            cursor: pointer;
        }

        .rating input:checked ~ label {
            color: gold;
        }

        .rating label:hover,
        .rating label:hover ~ label {
            color: gold;
        }

        /* Reviews Style */
        .reviews {
            margin-top: 20px;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        .review-item {
            border-bottom: 1px solid #ccc;
            padding: 10px;
        }

        .review-item h4 {
            margin: 0;
        }

        .review-item p {
            margin: 5px 0;
        }

    </style>


	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>

<section id="top">
<div class="container">
 <div class="row top_1">
  <div class="col-md-3">
   <div class="top_1l pt-1">
    <h3 class="mb-0"><a class="text-white" href="index.php"><i class="fa fa-video-camera col_red me-1"></i> MovieMinds</a></h3>
   </div>
  </div>
  <div class="col-md-5">
   <div class="top_1m">
       </div>
  </div>
  <div class="col-md-4">
   <div class="top_1r text-end">
     <ul class="social-network social-circle mb-0">
			<li><a href="https://www.instagram.com/_pratik_s24/" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://www.facebook.com/pratik.suryawanshi.79677471" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://www.linkedin.com/in/pratik-suryawanshi-76b70625b/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
		</ul>
   </div>
  </div>
 </div>
</div>
</section>

<section id="header">
<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="index.php"><i class="fa fa-video-camera col_red me-1"></i> MovieMinds</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
		
        <li class="nav-item dropdown">
          <a class="nav-link " href="bollywood.php"  aria-expanded="false">
            Bollywood
          </a>
         </li>
		<li class="nav-item">
          <a class="nav-link" href="marathi.php">Marathi</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="hollywood.php">Hollywood</a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link" href="webseries.php" aria-expanded="false">
            Web Series
          </a>
                  </li>
		
		<li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
      </ul>
    </div>
    <ul class = "nav navbar-nav navbar-right">
					<li class="nav-item">
         				 <a class="nav-link" href="registration.php">Sign Up</a>
        			</li>	
</ul>
<ul class = "nav navbar-nav navbar-right">
					<li class="nav-item">
         				 <a class="nav-link" href="login.php">Login</a>
        			</li>	
</ul>
<ul class = "nav navbar-nav navbar-right">
					<li class="nav-item">
         				 <a class="nav-link" href="logout.php">Log Out</a>
        			</li>	
</ul>

  </div>
</nav>
</section>

<section id="trend" class="pt-4 pb-5">
<div class="play_m clearfix">
 <div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h2 class="mb-0">  <span class="col_red">Kill</span></h2>
   </div>
  </div>
 </div>

 <div class="play2 row mt-4">
  <div class="col-md-4 p-0">
   <div class="play2l">
     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img116.jpg" height="515" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
   </div>
  </div>
  <div class="col-md-8 p-0">
   <div class="play2r  bg_black p-4">
	  
      <h5 class="mt-3">Action, Thriller</h5>
	  <hr class="line">
	  <p class="mt-3">When army commando Amrit finds out his true love, Tulika, is engaged against her will, he boards a New Delhi-bound train in a daring quest to derail the arranged marriage. But when a gang of knife-wielding thieves led by the ruthless Fani begin to terrorize innocent passengers on his train, Amrit takes them on himself in a death-defying kill-spree to save those around him--turning what should have been a typical commute into an adrenaline-fueled thrill ride.
    </p>
	  <div class="play2ri row mt-4">
	   <div class="col-md-6">
	    <div class="play2ril">
		 <h6 class="fw-normal">
Runtime: <span class="pull-right">1 hr 45 min  </span></h6>
         <hr class="hr_1">
		  <h6 class="fw-normal">
Genre: <span class="pull-right">Action, Thriller</span></h6>
         <hr class="hr_1">
		 <h6 class="fw-normal">
Director: <span class="pull-right">Nikhil Bhatt</span></h6>
         <hr class="hr_1">
		  <h6 class="fw-normal">
Stars: <span class="pull-right">
Lakshya Raghav Juyal Tanya Maniktala</span></h6>
         <hr class="hr_1">
		 <h6 class="fw-normal">
Release Date: <span class="pull-right">05 July 2024</span></h6>
         <hr class="hr_1 mb-0">
		</div>
	   </div>
	  
	   <div class="col-md-6">
	    <div class="play2rir">
		<h6 class="fw-normal">
IMDB Rating: <span class="pull-right">7.6/10</span></h6>
         <hr class="hr_1">
		  <h6 class="fw-normal">
Writers: <span class="pull-right">
Nikhil Nagesh Bhat Ayesha Syed</span></h6>
         <hr class="hr_1">
		 
		</div>
	   </div>

	  </div>
   </div>
   
  </div>
 </div>
</div>
</div>
</section>

<section id="trend" class="pt-4 pb-5">
<div class="play_m clearfix">
 <div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"> Top  <span class="col_red">Cast</span></h4>
   </div>
  </div>
 </div>
	<div class="play2ri row mt-4">
	<div class="cast-container">
    <div class="cast-member">
        <a href="#"><img src="img118.jpg" alt="Cast 1"></a>
        <h5 class="mt-3"><span class="col_red">Lakshya</span></h5>
		<h6>Amrit Rathod</h6>
    </div>
    <div class="cast-member">
       <a href="#"> <img src="img119.jpg" alt="Cast 2"></a>
        <h5 class="mt-3"><span class="col_red">Raghav Juyal</span></h5>
		<h6>Fani</h6>
    </div>
    <div class="cast-member">
       <a href="#"> <img src="img120.jpg" alt="Cast 3"></a>
        <h5 class="mt-3"><span class="col_red">Tanya Maniktala</span></h5>
		<h6>Tulika Singh</h6>
    </div>

	<div class="cast-member">
        <a href="#"><img src="img121.jpg" alt="Cast 1"></a>
        <h5 class="mt-3"><span class="col_red">Ashish Vidyarthi</span></h5>
		<h6>Beni</h6>
    </div>
    <div class="cast-member">
       <a href="#"> <img src="img122.jpg" alt="Cast 2"></a>
        <h5 class="mt-3"><span class="col_red">Meenal Kapoor</span></h5>
		<h6>Tulika's Mother</h6>
    </div>
    <div class="cast-member">
      <a href="#">  <img src="img123.jpg" alt="Cast 3"></a>
        <h5 class="mt-3"><span class="col_red">Adrija Sinha</span></h5>
		<h6>Aahana</h6>
    </div>
    <!-- Add more cast members as needed -->
</div>
	 </div>
 
   
  
</div>
</div>
</section>

<section id="trend" class="pt-4 pb-5">
<div class="play_m clearfix">
 <div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"> Movie  <span class="col_red">Trailer</span></h4>
   </div>
  </div>
 </div>
	<div class="play2ri row mt-4">
  <iframe width="1177" height="662" src="https://www.youtube.com/embed/da7lKeeS67c" title="Kill (2024) Official Trailer - Lakshya, Raghav Juyal, Tanya Maniktala" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	 </div>
 
   
  
</div>
</div>
</section>

<section id="trend" class="pt-4 pb-5">
<div class="play_m clearfix">
 <div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"> Movie  <span class="col_red">Images</span></h4>
   </div>
  </div>
 </div>

 <div class="play2ri row mt-4">		
	<div class="image-row">
	<img src="img124.jpg" alt="Image 1">
    <img src="img125.jpg" alt="Image 2">
    <img src="img126.jpg" alt="Image 3">
	 </div>
 </div>
 <div class="play2ri row mt-4">		
	<div class="image-row">
	<img src="img127.jpg" alt="Image 1">
    <img src="img128.jpg" alt="Image 2">
    <img src="img129.jpg" alt="Image 3">
	 </div>
 </div>
   
  
</div>
</div>
</section>

<section id="trend" class="pt-4 pb-5">
<div class="play_m clearfix">
 <div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"> Movie  <span class="col_red">Reviews</span></h4>
   </div>
  </div>
 </div>

 <div class="play2ri row mt-4">		
 

<!-- Reviews Section -->
<div class="reviews">
    <div class="review-item">
        <h4>Dani_p12</h4>
        <p>⭐⭐⭐⭐☆</p>
        <p>This is one such series which keeps you engaging throughout with its fun, humour, emotional scenes and lastly village politics with fights.</p>
    </div>

    <div class="review-item">
        <h4>Akshay_lallu235</h4>
        <p>⭐⭐⭐⭐⭐</p>
        <p>This series was much awaited considering it's TVF series with Jeetu in lead. The story background is interesting but is slow paced and lacks good screenplay. </p>
    </div>
	<div class="review-item">
        <h4>Elvish_54</h4>
        <p>⭐⭐⭐☆☆</p>
        <p>In this series, the villages are really the villages of India and in this the real issues of the villages have been raised This series is also a slap on the face of some people like those who like to call themselves Walk This is a slap on Communist This is a slap on Netflix. </p>
    </div>
	<div class="review-item">
        <h4>thara_bhai69</h4>
        <p>⭐☆☆☆☆</p>
        <p>The story line, the simplicity of characters, the visualization of everything is just pure gold. Loved every character's..After kota factory, this won't disappoint you..Go for it! </p>
    </div>
	<div class="review-item">
        <h4>Danish_BHAI</h4>
        <p>⭐⭐⭐⭐⭐</p>
        <p>Bidu Yeh series full on for family drama comedy sab kuch bhar bhar ke hai isme... #Wassup FamBro</p>
    </div>

    <!-- Add more reviews as needed -->
</div>
 </div>
   
  
</div>
</div>
</section>



<section id="trend" class="pt-4 pb-5">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
      </div>
  </div>
   </div>
</section>

<section id="footer">
<div class="footer_m clearfix">
 <div class="container">
   <div class="row footer_1">
    <div class="col-md-4">
	 <div class="footer_1i">
	   <h3><a class="text-white" href="index.php"><i class="fa fa-video-camera col_red me-1"></i> MovieMinds</a></h3>
	   <p class="mt-3">An Entertainment Website Project by Pratik and Shreyash to show the rating and reviews of various movies and series.  </p>
	   <h6 class="fw-normal"><i class="fa fa-map-marker fs-5 align-middle col_red me-1"></i> Godavari Bunglow, Wakad, Pune</h6>
        <h6 class="fw-normal mt-3"><i class="fa fa-envelope fs-5 align-middle col_red me-1"></i> pratiksuryawanshi730@gmail.com </h6>
	<h7 class="fw-normal mt-3"><i class="fa fa-envelope fs-5 align-middle col_red me-1"></i> shreyashthorawade@gmail.com </h7>
		<h6 class="fw-normal mt-3 mb-0"><i class="fa fa-phone fs-5 align-middle col_red me-1"></i> 87675 71615, 87670 45694</h6>
	 </div>
	</div>
	<div class="col-md-4">
	 <div class="footer_1i">
	  <h4>Free <span class="col_red">Movies</span></h4>
      <div class="footer_1i1 row mt-4">
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img16.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img17.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img18.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img19.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	  </div>
	  <div class="footer_1i1 row mt-3">
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img20.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img21.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img22.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="img23.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-md-4">
	 <div class="footer_1i">
	 <h4>Follow   <span class="col_red"> Us</span></h4>
      
		<ul class="social-network social-circle mb-0 mt-4">
			<li><a href="https://www.instagram.com/_pratik_s24/" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://www.facebook.com/pratik.suryawanshi.79677471" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			
			
			<li><a href="https://www.linkedin.com/in/pratik-suryawanshi-76b70625b/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
		</ul>
	 </div>
	 <br>
	 <a href="contact.php"><h4>Contact Us</h4></a>
	</div>
   </div>
</div>
</div>
</section>


<script>
window.onscroll = function() {myFunction()};

var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;

function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>

</body>

</html>

