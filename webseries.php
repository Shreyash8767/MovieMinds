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
			<li><a href="https://www.instagram.com/swastik.kashyap23/" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
		</a></li>
			<li><a href="https://www.linkedin.com/in/swastik-kashyap-92a77b284?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"></i></a></li>
		</ul>
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
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Latest <span class="col_red">Web Series</span></h4>
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
			<a href="#"><img src="images/img61.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/b2o955izUl0"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Gyaarah Gyaarah</a></h5>
			<p class="mb-2">Investigative drama following events in 1990, 2001, 2016. Intertwining storylines blending mysticism, science and mystery across the decades. </p>
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
			<a href="#"><img src="images/img62.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/dtC6rC0zE3o"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">House of the Dragon</a></h5>
			<p class="mb-2">The Targaryen dynasty is at the absolute apex of its power, with more than 10 dragons under their yoke. Most empires crumble from such heights.</p>
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
			<a href="#"><img src="images/img63.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/9N3cFoLFjvw"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Panchayat S3</a></h5>
			<p class="mb-2">A comedy-drama, which captures the journey of an engineering graduate Abhishek, who for lack of a better job option joins as secretary of a Panchayat office... </p>
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
			<a href="#"><img src="images/img64.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/8pC4oj1qduk"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">The Boys</a></h5>
			<p class="mb-2">The world's most powerful superheroes ('Supes') are secretly bending society to its whims, until the underdog team 'The Boys', victims of...</p>
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
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Upcoming <span class="col_red">Web Series</span></h4>
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
			<a href="#"><img src="images/img65.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		  		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Taaza Khabar S2</a></h5>
			<p class="mb-2">With ”Season 2” on the horizon, anticipation has reached new heights, promising a delightful blend of humor and drama.</p>
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
			<a href="#"><img src="images/img66.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		  
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Daredevil: Born Again</a></h5>
			<p class="mb-2">Daredevil: Born Again is an upcoming American television series created for the streaming service Disney+, based on the Marvel Comics character Daredevil.</p>
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
			<a href="#"><img src="images/img67.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
				  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">What If...?</a></h5>
			<p class="mb-2">The series starring Jeffrey Wright Terri Douglas Matthew Wood Exploring pivotal moments from the Marvel Cinematic Universe and turning them on their head, leading...</p>
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
			<a href="#"><img src="images/img68.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		  		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Pill</a></h5>
			<p class="mb-2">Whistle blowers expose a corrupt nexus of pharma giants, middlemen, and doctors responsible for unethical drug proliferation in India. Can they overcome the powerful opposition?</p>
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
    <h4 class="mb-0"><i class="fa fa-youtube-play align-middle col_red me-1"></i> Evergreen <span class="col_red">Web Series</span></h4>
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
			<a href="#"><img src="images/img69.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/XatRGut65VI"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">The Family Man</a></h5>
			<p class="mb-2">A working man from the National Investigation Agency tries to protect the nation from terrorism, but he also needs to keep his family safe from his secret job.</p>
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
			<a href="#"><img src="images/img70.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/oveko3h4pxk"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Asur</a></h5>
			<p class="mb-2">Shubh returns for revenge and this season he takes the challenge to a whole new level. With the heroes fallen apart, will a desolate Dhananjay Rajpoot...</p>
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
			<a href="#"><img src="images/img71.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/ZNeGF-PvRHY"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Mirzapur</a></h5>
			<p class="mb-2">An incident at a wedding procession forces him to cross paths with Ramakant Pandit, an upstanding lawyer, and his sons, Guddu and Bablu. It snowballs into a game of...
</p>
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
			<a href="#"><img src="images/img72.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/AkUgf2jIPyI"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Sacred Games</a></h5>
			<p class="mb-2">A link in their pasts leads an honest cop to a fugitive gang boss, whose cryptic warning spurs the officer on a quest to save Mumbai from cataclysm.</p>
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
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
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
			<a href="#"><img src="images/img73.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/HhesaQXLuRY"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Breaking Bad</a></h5>
			<p class="mb-2">A chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine with a former student to secure his family's future.</p>
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
			<a href="#"><img src="images/img74.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/KPLWWIOCOOQ"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Game of Thrones</a></h5>
			<p class="mb-2">Starring Emilia Clarke, Peter Dinklage, Kit Harington explores Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being...</p>
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
			<a href="#"><img src="images/img75.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/oVzVdvGIC7U"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Peaky Blinders</a></h5>
			<p class="mb-2">A gangster family epic set in 1900s England, centering on a gang who sew razor blades in the peaks of their caps, and their fierce boss Tommy Shelby.</p>
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
			<a href="#"><img src="images/img76.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/nW948Va-l10"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Loki</a></h5>
			<p class="mb-2">Starring Tom Hiddleston explores The mercurial villain Loki resumes his role as the God of Mischief in a new series that takes place after the events of “Avengers: Endgame.”</p>
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
  <section id="trend" class="pt-4 pb-5">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
      </div>
  </div>
   </div>
</section>
  <div class="col-md-3 col-6">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="images/img64.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="https://youtu.be/8pC4oj1qduk"><i class="fa fa-youtube-play"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">The Boys</a></h5>
			<p class="mb-2">The world's most powerful superheroes ('Supes') are secretly bending society to its whims, until the underdog team 'The Boys', victims of...</p>
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
	   <h3><a class="text-white" href="index.php"><i class="fa fa-video-camera col_red me-1"></i> MovieHub</a></h3>
	   <p class="mt-3">An Entertainment Website Project by Swastik and Viraj to show the rating and reviews of various movies and series.  </p>
	   <h6 class="fw-normal"><i class="fa fa-map-marker fs-5 align-middle col_red me-1"></i> Godavari Bunglow, Wakad, Pune</h6>
        <h6 class="fw-normal mt-3"><i class="fa fa-envelope fs-5 align-middle col_red me-1"></i> swastikkashyap25@gmail.com </h6>
	<h7 class="fw-normal mt-3"><i class="fa fa-envelope fs-5 align-middle col_red me-1"></i> viruupatil81@gmail.com </h7>
		<h6 class="fw-normal mt-3 mb-0"><i class="fa fa-phone fs-5 align-middle col_red me-1"></i> 9798045853, 9665151793</h6>
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
			</li>
			
			
			<li><a href="https://www.linkedin.com/in/swastik-kashyap-92a77b284?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"></i></a></li>
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