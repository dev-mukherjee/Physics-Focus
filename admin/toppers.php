<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: admin_login.php");
  exit;
}
?>

<!-- html -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHYSICS FOCUS BY - PRIYAM DEY | ADMIN</title>
  <?php include 'header_links.php'; ?>
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
            <a href="admin_home.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="nav-icon fas fa-book-open"></i> Study Materials
            </a>

            <div class="dropdown-menu bg-dark text-white" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-white bg-dark" href="studymaterialsXI">Class XI</a>
              <a class="dropdown-item text-white bg-dark" href="studymaterialsXII">Class XII</a>
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
            <i class="fas fa-question-circle"></i>
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-4">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header text-center">
                <h3 class="card-title text-center">Update Toppers Of Leaderboards</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="toppers-handler.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NAME</label>
                    <input type="text" class="form-control" id="exampleInputText1" name="name" placeholder="Enter student's name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                    <input type="text" class="form-control" id="exampleInputText1" name="class" placeholder="Enter student's class" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image of Student</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="InputFile" name="image">
                        <label class="custom-file-label" for="InputFile" id="custom-text">Choose file</label>
                      </div>

                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="submit" value="SUBMIT" />
              </form>
            </div>
          </div>
          <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'; ?>
  <!-- Control Sidebar -->
  <?php include 'customizing_sidebar.php'; ?>
  <!-- /.control-sidebar -->
  </div>
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