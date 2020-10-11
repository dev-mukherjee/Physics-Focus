<!DOCTYPE html>
<html>

<head>
	<title>PHYSICS FOCUS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Physics Focus is one of the best Education Centre for the competitive exams preparation." />
	<meta name="keywords" content="Physics Classes Kolkata,Best Physics Class Chandannagar, Online Classes Kolkata, Top eudcation institute Kolkata." />
	<meta name="author company" content="DEV DEVELOPMENT AGENCY PVT. LTD>">
	<meta name="author" content="DEV MUKHERJEE>">

	<!-- FAVICON ICON -->
	<link rel="shortcut icon" type="image/jpg" href="logo.jpg">

	<!--  Bootstrap css file  -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="css/style_studymaterials.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lora:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lora:wght@700&family=Teko&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Volkhov:wght@700&display=swap" rel="stylesheet">

</head>

<body>
	<!-- **************** Header Part start ****************** -->
	<div class="header" id="topheader">
		<nav class=" navbar navbar-expand-lg fixed-top">
			<div class="container text-uppercase pt-3">
				<a class="navbar-brand" href="#">
					<img src="images/logo.jpg" width="50" height="45" alt="" loading="lazy">
				</a>
				<a class="navbar-brand text-white font-weight-bold" id="logo-heading" href="#">Physics Focus</a>			
				<i class="navbar-toggler fas fa-2x fa-bars" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></i>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-white">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php#servicediv">services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php#leaderboardsdiv">leaderboards</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" id="current_page">studymaterials</a>
						</li>
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Assignments
						</a>
						<div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
							<a class="dropdown-item bg-info" href="classxi_ass.php">Class XI</a>
							<a class="dropdown-item bg-info" href="classxi_ass.php">Class XII</a>
						</div>
					</li>
						<li class="nav-item ">
							<a class="nav-link" href="index.php#newsletterdiv">about </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php#footerdiv">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="news.php">news</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<section class="header-section">
			<div class="center-div">
				<h1><span class="transition">Physics Focus By PriyamDey</span></h1>
				<p>We create the jewels with our fuels.</p>
				<div class="header-buttons">
				<div class="g-ytsubscribe" data-channelid="UCig2LQafW72nVWHRd8bxu8w" data-theme="dark" data-layout="full" data-count="default"></div>
					<a href="#" class="header-second-button" data-toggle="modal" data-target="#exampleModal">Inquery</a>
				</div>
			</div>
		</section>
	</div>

			<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inquery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
	  <form action="inquery.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Parents Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="parents" required>
  </div>

  <div class="row">
    <div class="col">
	<label>Phone</label>
      <input type="text" class="form-control" name="phone" required>
    </div>
    <div class="col">
	<label>Email</label>
      <input type="email" class="form-control" name="email">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Class</label>
    <input type="phone" class="form-control" id="exampleInputPassword1" name="class" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">School</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="school" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Board</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="board" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
  </div>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Submit" name="submit" />

      </div>
		</form>
    </div>
  </div>
</div>

	<!-- ***************** Header part end **************** -->

	<section class="materials pt-5">
		<div class="container headings text centre">
			<h1 class="text-center font-weight-bold" id="headings">STUDY MATERIALS</h1>
			<p class="text-center">Download Your Study Materials From Here.</p>
		</div>

		<div class="container pt-4 ">
			<div class="row text-center">
				<div class=" extradiv col-lg-4  col-md-4 col-12">
					<div class="card-body">
					<a href="#">
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 172 172" style=" fill:#000000;">
							<g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
								<path d="M0,172v-172h172v172z" fill="none"></path>
								<g fill="#3498db">
									<path d="M137.6,30.96h-103.2c-13.30312,0 -24.08,10.77688 -24.08,24.08v61.92c0,13.30313 10.77688,24.08 24.08,24.08h103.2c13.30313,0 24.08,-10.77687 24.08,-24.08v-61.92c0,-13.30312 -10.77687,-24.08 -24.08,-24.08zM76.52656,113.82906h-7.33688v-0.56438h-0.86v-38.04156h-14.14969v-7.00094l0.83313,-0.02687c8.12969,-0.29563 13.4375,-2.00219 14.79469,-9.60781l0.13437,-0.71219h6.58438zM107.48656,113.82906h-7.33688v-0.56438h-0.86v-38.04156h-14.14969v-7.00094l0.83313,-0.02687c8.12969,-0.29563 13.4375,-2.00219 14.79469,-9.60781l0.13437,-0.71219h6.58438z"></path>
								</g>
							</g>
						</svg>
					</a>
					<h2>STUDY MATERIALS FOR CLASS XI</h2>
					<p>Find your required study material and download for free.</p>
					</div>
					<div class="card-footer ">
								<a href="classXI.php">Visit</a>
							</div>
				</div>
				<div class="col-lg-3  col-md-3 col-12"></div>
				<div class=" extradiv col-lg-4  col-md-4 col-12">
				<div class="card-body">
					<a href="#">
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 172 172" style=" fill:#000000;">
							<g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
								<path d="M0,172v-172h172v172z" fill="none"></path>
								<g fill="#3498db">
									<path d="M137.6,30.96h-103.2c-13.30312,0 -24.08,10.77688 -24.08,24.08v61.92c0,13.30313 10.77688,24.08 24.08,24.08h103.2c13.30313,0 24.08,-10.77687 24.08,-24.08v-61.92c0,-13.30312 -10.77687,-24.08 -24.08,-24.08zM73.08656,113.82906h-7.33688v-0.56438h-0.86v-38.04156h-14.14969v-7.00094l0.83313,-0.02687c8.12969,-0.29563 13.4375,-2.00219 14.79469,-9.60781l0.13437,-0.71219h6.58438zM120.96438,106.70719v7.67281h-37.04719v-0.86c0,-13.02094 8.90906,-18.85281 16.77,-23.99937c6.63813,-4.34031 12.37594,-8.08938 12.37594,-15.265c0,-0.09406 -0.26875,-8.96281 -9.74219,-8.96281c-9.62125,0 -9.72875,12.29531 -9.72875,12.83281v0.86h-8.15656l-0.04031,-0.81969c-0.17469,-3.78937 0.215,-10.8575 4.82406,-15.695c3.07719,-3.21156 7.48469,-4.85094 13.10156,-4.85094c17.44188,0 17.93906,14.92906 17.93906,16.63563c0,11.03219 -8.815,16.59531 -16.58187,21.5c-5.32125,3.35937 -10.37375,6.54406 -11.5025,10.95156z"></path>
								</g>
							</g>
						</svg>
					</a>
					<h2>STUDY MATERIALS FOR CLASS XII</h2>
					<p>Find your required study material and download for free.</p>
				</div>
					<div class="card-footer ">
								<a href="classXII.php" id="buttonvisit" >Visit</a>
							</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footersection" id="footerdiv">
		<div class="container">
			<div class="row">
				<div class="footer-div  col-lg-4 col-md-6 col-12">
					<div>
						<h3 id="headings"> About PHYSICS FOCUS </h3>
						<p>
							"PHYSICS FOCUS" has achieved numerous success and achievement
							in different segments in producing best rankers in Board, School Programme
							& many More.
						</p>
					</div>
				</div>
				<div class="footer-div  col-lg-4 col-md-6 col-12 text-center" id="walkin">
					<div>
						<h3 id="headings">WALK IN OR MESSAGE</h3>
						<P>Chandannagar | Uttarpara | Jadavpur | Salt Lake<br>
							PHONE- +91-9007-231-231<br>
							physicsbypriyamdey@gmail.com<br>
							FOR TECHNICAL HELP- +91-7439-084-226</P>
					</div>
					<div class="footer-icons">
						<h3 id="headings">CONNECT TO SOCIAL</h3>

						<a href="https://www.facebook.com/Physics-Focus-1550201838626919/?ti=as" target="_blank">
							<i class="fa fa-2x fa-facebook"></i>
						</a>

						<a href="https://chat.whatsapp.com/JkW5uIP6H3X5uFN5ayPaar" target="_blank">
							<i class="fa fa-2x fa-whatsapp"></i>
						</a>

						<a href="https://www.youtube.com/c/PhysicsFocusByPriyamDey/featured" target="_blank">
							<i class="fab fa-2x fa-youtube"></i>
						</a>

						<a href="https://g.page/priyam-sir-physics-chandannagar?share" target="_blank">
								<i class="fas fa-2x fa-map-marker-alt" id="map"></i>
							</a>

					</div>
				</div>
				<div class="footer-div  col-lg-4 col-md-12 col-12">
					<div>
						<h3 id="headings">TIPS</h3>
						<p> &#186; Brush up your skill with Online Test
							and boost up your confidence.</p>
					</div>
					<hr>
					<div>
						<p> &#186; Brush up your skill with Online Test
							and boost up your confidence.</p>
					</div>

				</div>
			</div>
			<div class="mt-5 text-center">
				<p>Copyright ©2020 All rights reserved | DEV DEVELOPMENT WORKS PVT.LTD</p>
			</div>
			<div class="scrolltop float-right">
				<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
			</div>
		</div>
	</footer>









	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://apis.google.com/js/platform.js"></script>
	<script src="https://kit.fontawesome.com/212922f1d2.js" crossorigin="anonymous"></script>
	<script src="js/study_materials.js"></script>


</body>

</html>