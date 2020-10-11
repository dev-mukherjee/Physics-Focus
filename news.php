<!DOCTYPE html>
<html>

<head>
	<title>PHYSICS FOCUS|NEWS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Physics Focus is one of the best Education Centre for the competitive exams preparation." />
	<meta name="keywords"
		content="Physics Classes Kolkata,Best Physics Class Chandannagar, Online Classes Kolkata, Top eudcation institute Kolkata." />
	<meta name="author company" content="DEV DEVELOPMENT AGENCY PVT. LTD>">
	<meta name="author" content="DEV MUKHERJEE>">

	<!-- FAVICON ICON -->
	<link rel="shortcut icon" type="image/jpg" href="logo.jpg">

	<!--  Bootstrap css file  -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

	<!-- Custom Css -->
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="css/style_news.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lora:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lora:wght@700&family=Teko&display=swap"
		rel="stylesheet">
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
				<i class=" navbar-toggler fas fa-2x fa-bars" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></i>
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
							<a class="nav-link" href="studymaterials.php">studymaterials</a>
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
							<a class="nav-link" id="current_page" href="#">news<span
									class="sr-only">(current)</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<section class="header-section">
			<div class="center-div">
				<h1><span class="transition">Physics Focus By PriyamDey</span></h1>
				<p>We create the jewels with our fuels.</p>
				<div class="link-buttons">

				<div class="g-ytsubscribe" data-channelid="UCig2LQafW72nVWHRd8bxu8w" data-theme="dark" data-layout="full" data-count="default"></div>

					<a
						href='https://play.google.com/store/apps/details?id=co.thanos.egjgv&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
						<img alt='Get it on Google Play'
							src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'
							height="60px" /></a>
				</div>
			</div>
		</section>
	</div>
	<!-- ***************** Header part end **************** -->
	<section class="latestnews mt-4 mb-4">
		<div class="container-headings text centre">
			<h1 class="text-center font-weight-bold">LATEST NEWS</h1>
		</div>
		<div class="container-fluid text-centre">

		
		<?php

include 'dbconfig.php';

$selectrow = "select * from news";
$resultrow = mysqli_query($con, $selectrow);
$rows = mysqli_fetch_row($resultrow);
$query = "select * from news order by id desc limit 1";
$result = mysqli_query($con, $query);


if($rows == 0){

	echo "NO DATA AVAILABLE";

}
if($result){


	$data = mysqli_fetch_assoc($result);
	$date = $data['date'];
	$news = $data['news'];
}

?>

			<div class="card mb-4 mt-5" style="width: 100%;">
				<div class=" container-headings text centre" id="heading">
					<h2 class="text-centre font-weight-bolder"><?php echo $date; ?>,</h2><br>
				</div>
				<div class="main-container>

					<p class="text-centre"><?php echo $news; ?></p>

				</div>

	</section>

		<!-- *************************footer start************************* -->
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
			</div>
		</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
		integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
		integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://kit.fontawesome.com/212922f1d2.js" crossorigin="anonymous"></script>
	<script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>