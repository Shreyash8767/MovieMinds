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
	<title>MovieHub</title>
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
    <h3 class="mb-0"><a class="text-white" href="index.php"><i class="fa fa-video-camera col_red me-1"></i> MovieHub</a></h3>
   </div>
  </div>
  <div class="col-md-5">
   <div class="top_1m">
      </div>
  </div>
  <div class="col-md-4">
   <div class="top_1r text-end">
     <ul class="social-network social-circle mb-0">
	   </div>
  </div>
 </div>
</div>
</section>

<section id="header">
<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="index.php"><i class="fa fa-video-camera col_red me-1"></i> MovieHub</a>
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
					<li >
         				 <a class="nav-link" href="login.php">Login</a>
        			</li>	
					<br>
					<li >
         				 <a class="nav-link" href="logout.php">Log Out</a>
        			</li>
</ul>
<ul class = "nav navbar-nav navbar-right">
					<li class="nav-item">
         				 <a class="nav-link" href="./admin_login/admin_login.php">Admin</a>
        			</li>	
</ul>




					
				

  </div>
</nav>
</section>

<section id="trend" class="center_home">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
       <h1 class="font_60"> Chhaava</h1>
	   <h6 class="mt-3">
	    <span class="col_red me-3">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
		 7.9 (Imdb)      Year : 2025
		 <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="deadpool.php">Action</a>
	   </h6>
	   <p class="mt-3">Chhaava is a 2025 Indian Hindi-language historical action film based on the life of Sambhaji Maharaj, the second ruler of the Maratha Empire, who is played by Vicky Kaushal. An adaptation of the Marathi novel Chhava by Shivaji Sawant, it is directed by Laxman Utekar and produced by Dinesh Vijan under Maddock Films. The cast also includes Rashmika Mandanna and Akshaye Khanna.</p>

	   <p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span> 
Vicky Kaushal · Rashmika Mandanna </p>


	   <p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span> Historical drama</p>
	   <p><span class="col_red me-1 fw-bold">Runtime:</span> 2h 35m</p>	
	   <h6 class="mt-4"><a class="button" href="https://youtu.be/77vRyWNqZjM?si=pVGHqeFbj-Zpx2Uc"><i class="fa fa-play-circle align-middle me-1"></i> Watch Trailer</a></h6>
      </div>
    </div>






    <div class="carousel-item">
      <img src="images/img2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
       <h1 class="font_60">The Diplomat</h1>
	   <h6 class="mt-3">
	    <span class="col_red me-3">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		 4.0 (Imdb)      Year : 2025
		 <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="stree.php">Action Drama</a>
	   </h6>
	   <p class="mt-3">The Diplomat is an upcoming Indian Hindi-language action drama film directed by Shivam Nair and written by Ritesh Shah. The film stars John Abraham as J.P Singh in Islamabad. Set against a backdrop of real-life political events, the film explores themes of diplomacy, international relations, and the personal conflicts faced by diplomats.It is scheduled for theatrical release in India during the Holi festival, on 14 March 2025.</p>


	   <p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span>
							John Abraham </p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span>Action Drama</p>
	   <p><span class="col_red me-1 fw-bold">Runtime:</span> 2h 27m</p>	
	   <h6 class="mt-4"><a class="button" href="https://youtu.be/CnEOLuCojY0?si=ojY-Jd630siwX6wk"><i class="fa fa-play-circle align-middle me-1"></i> Watch Trailer</a></h6>
      </div>
    </div>





    <div class="carousel-item">
      <img src="images/img3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
       <h1 class="font_60">Jolly LLB 3</h1>
	   <h6 class="mt-3">
	    <span class="col_red me-3">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		 4.0 (Imdb)      Year : 2025
		 <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="panchayat.php">Drama</a>
	   </h6>
	   <p class="mt-3">Jolly LLB 3 is an upcoming Indian Hindi-language black comedy legal drama film written and directed by Subhash Kapoor. It is the third installment in the Jolly LLB series starring Akshay Kumar, Arshad Warsi, Amrita Rao, Huma Qureshi, Saurabh Shukla and Annu Kapoor.The film is scheduled to release in India in August 2025 by Star Studios with the United States, Canada and Worldwide distribution held by Walt Disney Studios Motion Pictures.</p>
	  
 <p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span> 
Akshay Kumar,Arshad Warsi</p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span> Comedy,Leagal Drama</p>
	   <p><span class="col_red me-1 fw-bold">Runtime:</span>2h 27m</p>	
	   <h6 class="mt-4 mb-0"><a class="button" href="https://youtu.be/buL8H-udimM?si=87F9R_HFnZFA1rGb"></i> Watch Trailer</a></h6>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>



<section id="trend" class="pt-4 pb-5">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i>  <span class="col_red">Movies</span></h4>
   </div>
  </div>
   </div>
 <div class="row trend_2 mt-4">
   <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="trend_2i row">
	    <div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img4.webp" class="w-100" alt="img25"></a>
		  </figure>
	  </div>



		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/FSDhaUlKEcE?si=-Xg6EzgEE8wVnuhX"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="kill.php">Kill</a></h5>
			<p class="mb-2">When army commando Amrit finds out his true love, Tulika, is engaged against her will...</p>


			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img5.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://www.youtube.com/watch?v=Otcr-vRuaQs"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Maharaja</a></h5>
			<p class="mb-2">A barber seeks vengeance after his home is burglarized, cryptically telling police his "lakshmi"...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img6.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://www.youtube.com/watch?v=XJMuhwVlca4"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Furiosa: A Mad Max Saga</a></h5>
			<p class="mb-2">The origin story of renegade warrior Furiosa before her encounter and teamup with Mad Max.</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		
		  </div>  
		</div>
		<div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img7.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Kalki</a></h5>
			<p class="mb-2">The future of those in the dystopian city of Kasi is altered when the destined arrival of Lord...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		
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
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
      </div>
  </div>
   </div>
</section>

<section id="upcome" class="pt-4 pb-5">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i>  <span class="col_red">Movies</span></h4>
   </div>
  </div>
  </div>
 <div class="row trend_2 mt-4">
   <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="trend_2i row">
	    <div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img8.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://www.youtube.com/watch?v=3n5u-zWC4mY"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Avengers Secret Wars</a></h5>
			<p class="mb-2">Marvel Studios' Avengers: Secret Wars will arrive in theaters on May 7, 2027.Before Robert Downey Jr. returns to...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		
		  </div>  
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img9.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://www.youtube.com/watch?v=wboGYls1Bns"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Pushpa 2</a></h5>
			<p class="mb-2">The clash is on as Pushpa and Bhanwar Singh continue their rivalry in this epic conclusion to the two-parted action drama.</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		
		  </div>  
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img10.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Rolex</a></h5>
			<p class="mb-2">Rolex is an upcoming Tamil film. It acts as a spin-off to Vikram and possible penultimate installment of Lokesh Cinematic Universe.</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		
		  </div>  
		</div>
		
	  </div>
    </div>
   
    
  </div>

</div>
 </div>
</div>
</section>



<section id="trend" class="pt-4 pb-5 bg_grey">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Trending <span class="col_red">Movies </span></h4>
   </div>
  </div>
 </div>
 <div class="row popular_1 mt-4">
   <ul class="nav nav-tabs  border-0 mb-0">
    <li class="nav-item">
        <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <span class="d-md-block">JUST ARRIVED</span>
        </a>
    </li>
       		
</ul>
 </div>
 <div class="popular_2 row mt-4">
   <div class="tab-content">
    <div class="tab-pane active" id="home">
	  <div class="popular_2i row">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="deadpool.php"><img src="images/img12.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="deadpool.php">Deadpool And Wolverine</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.0  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2024 <span class="ms-2">Runtime: 2h 08m</span></h6>
		   <p>Deadpool is offered a place in the Marvel Cinematic Universe by the Time Variance Authority, but instead recruits a variant of Wolverine to save his universe from extinction.</p>
		   <h6 class="mb-0"><a class="button" href="https://www.youtube.com/watch?v=73_1biulkYk">Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img11.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Double Ismart</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 4.3  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2024 <span class="ms-2">Runtime: 2h 36m</span></h6>
		   <p>When a dead police officer's memories are transplanted to his brain, an assassin assists the authorities.</p>
		   <h6 class="mb-0"><a class="button" href="https://www.youtube.com/watch?v=7nXBy1AElY0">Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	  <div class="popular_2i row mt-4">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img13.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Laila Majnu</a></h5>
		   <h6>Drama, Romance</h6>
		   <h6> Imdb 7.0  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2018 Re-Reliased <span class="ms-2">Runtime: 2h 20m</span></h6>
		   <p>Taking the leap out of the classic folklore, the story is set in today's time in Kashmir where Laila Majnu have problems relevant to the youth of today. While dealing with their feuding families a passionate love story unravels.</p>
		   <h6 class="mb-0"><a class="button" href="https://www.youtube.com/watch?v=Cv-6cAHanZ8">Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img14.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Raayan</a></h5>
		   <h6>Action, Drama</h6>
		   <h6> Imdb 7.6  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2024 <span class="ms-2">Runtime: 2h 25m</span></h6>
		   <p>A series of unfortunate events lead Raayan, a simpleton to be dragged into the dreaded world of crime and manipulation.</p>
		   <h6 class="mb-0"><a class="button" href="https://www.youtube.com/watch?v=qQJJWhh-XRo"> Trailer</a></h6>
		  </div>
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
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
      </div>
  </div>
   </div>
</section>

<section id="play">
<div class="play_m clearfix">
 <div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i>   HIT<span class="col_red">MOVIE</span></h4>
   </div>
  </div>
 </div>

 <div class="play2 row mt-4">
  <div class="col-md-4 p-0">
   <div class="play2l">
     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="images/img15.jpg" height="515" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
   </div>
  </div>
  <div class="col-md-8 p-0">
   <div class="play2r  bg_grey p-4">
	   <h5><span class="col_red">BEST MOVIE
 :</span> STREE 2 <span class="col_red"</span><br></h5>
      <h5 class="mt-3">Drama, Horror</h5>
	  <hr class="line">
	  <p class="mt-3">After the events of Stree, the town of Chanderi is being haunted again. This time, women are mysteriously abducted by a terrifying headless entity. Once again, it's up to Vicky and his friends to save their town and loved ones.</p>
	  <div class="play2ri row mt-4">
	   <div class="col-md-6">
	    <div class="play2ril">
		 <h6 class="fw-normal">
Running Time: <span class="pull-right">2 hr 27 min</span></h6>
         <hr class="hr_1">
		  <h6 class="fw-normal">
Genre: <span class="pull-right">Drama, Horror</span></h6>
         <hr class="hr_1">
		 <h6 class="fw-normal">
Director: <span class="pull-right">Amar Kaushik</span></h6>
         <hr class="hr_1">
		  <h6 class="fw-normal">
Stars: <span class="pull-right">
Rajkummar Rao Shraddha Kapoor Pankaj Tripathi</span></h6>
         <hr class="hr_1">
		 <h6 class="fw-normal">
Release Date: <span class="pull-right">15 Aug 2024</span></h6>
         <hr class="hr_1 mb-0">
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
	   <h3><a class="text-white" href="index.php"><i class="fa fa-video-camera col_red me-1"></i>MovieHub</a></h3>

	   <p class="mt-3">An Entertainment Website Project by Swastik and Viraj to show the rating and reviews of various movies and series.  </p>

	   <h6 class="fw-normal"><i class="fa fa-map-marker fs-5 align-middle col_red me-1"></i> Godavari Bunglow, Wakad, Pune</h6>
       

	 <h6 class="fw-normal mt-3"><i class="fa fa-envelope fs-5 align-middle col_red me-1"></i> swastikkashyap25@gmail.com </h6>
	<h7 class="fw-normal mt-3"><i class="fa fa-envelope fs-5 align-middle col_red me-1"></i> viruupatil81@gmail.com </h7>
		<h6 class="fw-normal mt-3 mb-0"><i class="fa fa-phone fs-5 align-middle col_red me-1"></i> 9798045853,9665159617</h6>
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
					<a href="#"><img src="images/img16.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="images/img17.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="images/img18.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="images/img19.jpg" height="70" class="w-100" alt="abc"></a>
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
					<a href="#"><img src="images/img20.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="images/img21.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="images/img22.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="images/img23.jpg" height="70" class="w-100" alt="abc"></a>
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
			<li><a href="https://www.instagram.com/swastik.kashyap23/" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
						
			
			<li><a href="https://www.linkedin.com/in/viraj812005?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
		</ul>
	 </div><br>
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