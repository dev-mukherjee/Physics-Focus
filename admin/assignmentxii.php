<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: admin_login.php");
  exit;
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHYSICS FOCUS BY - PRIYAM DEY | ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'header_links.php' ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">

  <?php include 'top_navbar.php'; ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="img/logo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
      <span class="brand-text font-weight-bold">PHYSICS FOCUS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/instructor.jpg" class="img-circle elevation-2" alt="Instructor Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Priyam Dey</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#dmin_home.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="nav-icon fas fa-medal"></i> Best Student
            </a>

            <div class="dropdown-menu bg-dark text-white" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-white bg-dark" href="toppers.php">Topper</a>
              <a class="dropdown-item text-white bg-dark" href="performer.php">Performer</a>
            </div>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="news_editor.php" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                News
              </p>
            </a>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="nav-icon fas fa-book-open"></i> Study Materials
            </a>

            <div class="dropdown-menu bg-dark text-white" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-white bg-dark active" href="#">Class XI</a>
              <a class="dropdown-item text-white bg-dark" href="studymaterialsXII.php">Class XII</a>
            </div>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="nav-icon fas fa-pen"></i>Assignments
            </a>

            <div class="dropdown-menu bg-dark text-white" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-white bg-dark" href="assignmentxi.php">Class XI</a>
              <a class="dropdown-item text-white bg-dark" href="assignmentxii.php">Class XII</a>
            </div>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a href="contacts.php" class="nav-link">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
                Messages
              </p>
            </a>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="inquery.php" class="nav-link">
            <i class="nav-icon fas fa-question-circle"></i>
              <p>
                Inquery
              </p>
            </a>
          </li>
        </ul>


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="youtube_showcase.php" class="nav-link">
              <i class="nav-icon fab fa-youtube"></i>
              <p>
                Youtube Showcase
              </p>
            </a>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="newslettersubscribers.php" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Newsletter Subscribers
              </p>
            </a>
          </li>
        </ul>

        <hr>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar -->
  </aside>


    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Class XII ASSIGNMENTS
                 <br> <small>Upload Files Here</small>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
                <div class="mb-3">

                  <form action="studyassformXII.php" method="POST" enctype="multipart/form-data">

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="InputFile" aria-describedby="inputGroupFileAddon01" name="file">
                      <label class="custom-file-label" id="custom-text">Choose file</label>
                    </div>
                    
                    <div class="buttons text-center pt-3">
                      <h2 class="pb-2">Submit For</h2>

                    <input type="submit" class="btn btn-success" name="submit" value="Class XII"/>
                    
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>


      <section class="container mt-5">
        <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title text-center" id="headings">ASSIGNMENTS</h1>
            </div>
            <div class="card-body">
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
            </div>
        </div>
            <!-- /.cantainer-body -->
        </div>
        <!-- /.container-fluid -->
    </section>

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'footer.php'; ?>

    <!-- Control Sidebar -->
    <?php include 'customizing_sidebar.php' ?>
    <!-- ./wrapper -->

    <?php include 'footer_links.php' ?>

    <script type="text/javascript">
      $(document).ready(function() {
        bsCustomFileInput.init();
      });
    </script>

<script>
    const fileBtn = document.getElementById("InputFile");
    const customTxt = document.getElementById("custom-text");

    fileBtn.addEventListener("change" , function(){
      if(fileBtn.value){
        customTxt.innerHTML = fileBtn.value;
      }else{
        customTxt.innerHTML = "Choose File";
      }
    });

  </script>

</body>

</html>