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

  <?php include 'header_links.php'; ?>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include 'top_navbar.php'; ?>
    <!-- /.navbar -->
    <!-- Sidebar Menu -->
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
          <a href="news_editor.php" class="nav-link active">
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
            <a class="dropdown-item text-white bg-dark" href="studymaterialsXI.php">Class XI</a>
            <a class="dropdown-item text-white bg-dark" href="studymaterials.XII">Class XII</a>
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


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  NEWS
                  <small>Post News Here</small>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
                <div class="mb-3">
                  <form action="newssubmit.php" method="POST">
                    <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="news"></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-success" value="Announce" />
                </form>
              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php include 'footer_links.php' ?>
  <script>
    $(function() {
      // Summernote
      $('.textarea').summernote()
    })
  </script>
</body>

</html>