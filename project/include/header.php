<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CAR DEAlERSHIP</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="public\css\style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<script>
		let navBar=document.querySelectorAll(".top-menu-link");
        let navCollapse=document.querySelector(".navbar-collapse.collapse");
        navBar.forEach(function(a){
        a.addEventListener("click",function(){
         navCollapse.classList.remove("show");
        })
     })</script>
</head>
<body>
	<div class="top-name  " style="background-color:black;">
		<pre style="text-align: right; color: white; margin-right: 40px; padding-top: 20px;"><i class="fas fa-clock" style="color: #f7f7f7;"></i> Open Time:7:00am to 10:00pm          THIS IS FOR ALL DAY DREAMER          <i class="fas fa-phone" style="color: #f0f2f4;"></i>  CONTACT:7374951161</pre>
		<nav class="navbar navbar-expand-md " style="background-color:#040545;" >

			<img src="public\image\logo10.png" class="logo" width="170px" style="height:100px">
			<div class="container">
				<a href="#" class="navbar-brand">	
				</a>
				<button title="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
					<!-- <span class="navbar-toggler-icon"></span> -->
					 <i class="fas fa-stream " style="color:white;"></i>
				</button>
		
					 <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="navbar-item 	">
							<a href="#" class="nav-link  top-menu-link" id="home" >Home</a>
						</li>
						<li class="navbar-item">
							<a href="#showrooms" class="nav-link top-menu-link" id="services">Showrooms</a>
						</li>
						<li class="navbar-item">
							<a href="#otherservices" class="nav-link top-menu-link" id="services">Other services</a>
						</li>
						<li class="navbar-item">
							<a href="#customerreview" class="nav-link top-menu-link" id="services">Review</a>
						</li>
						<li class="navbar-item">
							<a href="#cars" class="nav-link top-menu-link" id="services">Cars</a>
						</li>

					</ul>
					<div class="d-flex">
						<button type="button" class="join-us" style="color: #9e7f21;text-align: center; transform: uppercase ;  font-size:25px; border-radius:20px;  background: linear-gradient(45deg,white,#040545);
						border-color:#9e7f21; ; margin-left: 10px; margin-top: 10px; margin-left: 30px;"  contact="button"><i class="fas fa-hands-helping" style="color: #9e7f21 ; font-size: 20px; :hover(background:linear-gradient(45deg,white,#040545); "></i><a href="form.php" style="color:#9e7f21;text-decoration: none;">JOIN US</a></button>

					</div>
				</div>
			</div>
		</nav>
	</div>





	<div  style="background-image :url('public/image/yaytch lambo.jpeg');height:750px; width: auto; background-position: center; color:white;"><p style="padding-top:450px; font-size:50px; padding-left: 130px;">Avengers & Autos</p><p style="padding-left: 30px; padding-top: -30px; font-size:40px;">Providing Services In Rajasthan And Nearby States. </p>
		<div class="container mt-3">
			<!-- <h2>Button Styles</h2> -->
			<button type="button" class="btn" style="background-color:black; color: #9e7f21;
			padding-left: 10px; margin-left: 120px; padding-right: 20px; text-align: center; border-radius: 20px; border-color:#9e7f21 ; "><i class="fal fa-calendar-alt" style="color: #9f9fb2; padding-right: 10px"></i> <a href="book.php" style="color: #9e7f21; text-decoration: none;"> Book Your Car </a> </button>
			<button type="button" class="btn " style="background-color:black; color:#9e7f21; padding-left:20px;  margin-left: 100px; padding-right: 20px; text-align:center; border-color:#9e7f21;  border-radius: 20px;">  <i class="fas fa-phone" style="color: #f0f2f4;  padding-right: 10px;"></i> Call Now</button>
		</div>
	</div>






	