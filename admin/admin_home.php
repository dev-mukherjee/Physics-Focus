<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: admin_login.php");
  exit;
}
// fetching visitors
include 'dbconfig.php';
$fetcharray = "select * from visitor_counter";
$result = mysqli_query($con, $fetcharray);
$visitors = mysqli_num_rows($result);

// fetching newsletter subs
$fetcharrayb = "select * from newsletter_subs";
$resultb = mysqli_query($con, $fetcharrayb);
$newsletter_subs = mysqli_num_rows($resultb);

// fetching xi assignment
$fetcharraycxi = "select * from classxi_ass";
$resultcxi = mysqli_query($con, $fetcharraycxi);
$uploadsxi = mysqli_num_rows($resultcxi);

// fetching xii assignment
$fetcharraycxii = "select * from classxii_ass";
$resultcxii = mysqli_query($con, $fetcharraycxii);
$uploadsxii = mysqli_num_rows($resultcxii);

// fetching xi mat
$fetcharraydxi = "select * from study_classxi";
$resultdxi = mysqli_query($con, $fetcharraydxi);
$matsxi = mysqli_num_rows($resultdxi);

// fetching xii mat
$fetcharraydxii = "select * from study_classxii";
$resultdxii = mysqli_query($con, $fetcharraydxii);
$matsxii = mysqli_num_rows($resultdxii);

// fetching messages
$fetcharraye = "select * from contact";
$resulte = mysqli_query($con, $fetcharraye);
$messages = mysqli_num_rows($resulte);

?>

<!-- ***************html************** -->
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
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

  <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- widget1 -->
          <div class="col-lg-3 col-6 pt-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo "$visitors" ?></h3>

                <p>UNIQUE VISITORS</p>
              </div>
              <div class="icon">
                <i class="fas fa-eye"></i>
              </div>
            </div>
          </div>
          <!-- widget2 -->
          <div class="col-lg-3 col-6 pt-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo "$uploadsxi"
                    ?></h3>

                <p>MATERIALS UPLOADED XI</p>
              </div>
              <div class="icon">
                <i class="fas fa-arrow-up"></i>
              </div>
            </div>
          </div>
          <!-- widget3 -->
          <div class="col-lg-3 col-6 pt-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo "$uploadsxii" ?></h3>

                <p>MATERIALS UPLOADED XII</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
            </div>
          </div>
          <!-- widget4 -->
          <div class="col-lg-3 col-6 pt-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo "$newsletter_subs" ?></h3>

                <p>NEWSLETTER SUBS</p>
              </div>
              <div class="icon">
                <i class="fas fa-newspaper"></i>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <!-- widget5 -->
          <div class="col-lg-3 col-6 pt-3">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo "$matsxi" ?></h3>

                <p>STUDY MAT XI</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
            </div>
          </div>

                    <!-- widget6 -->
                    <div class="col-lg-3 col-6 pt-3">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo "$matsxii" ?></h3>

                <p>STUDY MAT XII</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
            </div>
          </div>

                              <!-- widget7 -->
                              <div class="col-lg-3 col-6 pt-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo "$messages" ?></h3>

                <p>Messages</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
            </div>
          </div>





        </div>
      </div>
    </section>

      </div>
      <!-- /.content-wrapper -->
      <!-- footer -->

      <?php include 'footer.php'; ?>

      <?php include 'customizing_sidebar.php'; ?>
      <!-- /.control-sidebar -->
      <!-- ./wrapper -->
      <?php include 'footer_links.php'; ?>

      <!-- graph  -->
</body>


</html>