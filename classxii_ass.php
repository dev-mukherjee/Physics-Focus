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

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/classXI.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lora:wght@700&family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Volkhov:wght@700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- navbar -->

    <nav class=" navbar navbar-expand-lg fixed-top  navbar-light bg-dark">
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
                        <a class="nav-link" href="studymaterials.php">studymaterials</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Assignments
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item bg-dark" href="classxi_ass.php">Class XI</a>
                            <a class="dropdown-item bg-dark" id="current_page" href="#">Class XII</a>
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

    <!-- **************** Header Part start ****************** -->

    <!-- main section    -->
    <section class="container mt-5">
        <div class="container mt-5">

            <div class="container-header">
                <h1 class="card-title text-center pt-5 mt-5" id="headings">ASSIGNMENTS</h1>
                <h3 class="card-subtitle mb-2 text-muted text-center pb-4">Swipe The table in Mobile Devices To Download.</h3>
            </div>

            <div class="container-fluid pb-4 mr-auto">
                <form class="form-inline my-1">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

            <div class="container-body">
                <div class="table-responsive">
                    <table class="table tableable-striped">
                        <thead>

                            <th scope="col">DATE/TIME</th>
                            <th scope="col">ASSIGNMENTS</th>
                            <th scope="col">DOWNLOAD</th>

                        </thead>
                        <tbody class="table-body">

<!-- ************php********************** -->

                        <?php

                        include 'dbconfig.php';

                        $sql = "select * from classxii_ass ";
                        $result = mysqli_query($con, $sql);


                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $date = $row['date'];
                                $material = $row['assignment'];


                                echo '
    
    <tr>
    
<td>' . $date . '</td>
<td>' . $material . '</td>
<td><a class="btn btn-primary" href="admin/' . $material . '" role="button">DOWNLOAD</a></a></td>

    </tr>

    ';
                            }
                        } else {
                            echo "NO DATA .$result";
                        }

                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.cantainer-body -->
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- *************************footer start************************* -->
    <!-- *************************footer start************************* -->
    <footer class="footersection" id="footerdiv">
        <div class="container-fluid">
            <div class="row">
                <div class="footer-div  col-lg-4 col-md-6 col-12">
                    <div>
                        <h3 id="headingsfooter text-white "> About PHYSICS FOCUS </h3>
                        <p>
                            "PHYSICS FOCUS" has achieved numerous success and achievement
                            in different segments in producing best rankers in Board, School Programme
                            & many More.
                        </p>

                    </div>
                </div>
                <div class="footer-div  col-lg-4 col-md-6 col-12 text-center" id="walkin">
                    <div>
                        <h3 id="headingsfooter text-white">WALK IN OR MESSAGE</h3>
                        <P>Chandannagar | Uttarpara | Jadavpur | Salt Lake<br>
                            PHONE- +91-9007-231-231<br>
                            physicsbypriyamdey@gmail.com<br>
                            FOR TECHNICAL HELP- +91-7439-084-226</P>
                    </div>
                    <div class="footer-icons">
                        <h3 id="headingsfooter text-white">CONNECT TO SOCIAL</h3>

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
                        <h3 id="headingsfooter text-white">TIPS</h3>
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
    <!-- **************************** footer ends *********************/ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/212922f1d2.js" crossorigin="anonymous"></script>
</body>

</html>