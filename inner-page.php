<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Customers | TSF</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/tsp.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Sparks Foundation</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Customers</li>
        </ol>
        <h2>Customers</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
    $i=1;
?>
    <!-- Table -->
  <div class="container">
    <div class="section-title" style="margin-top: 1%;">
      <h2>Customers</h2>
    </div>
    <br>
        <div class="row" style="margin-top: -5%">
            <div class="col">
                <div class="table-responsive-sm">
                <table class="table table-hover table-striped table-borderless">
                    <thead style="color : #37517e;" class="table-light" >
                        <tr>
                        <th scope="col" class="text-center">Id</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">E-Mail</th>
                        <th scope="col" class="text-center">Balance</th>
                        <th scope="col" class="text-center">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php 
                while($rows=mysqli_fetch_assoc($result)){
            ?>
                <tr style="color : black;">
                <th class="text-center" scope="row"><?php echo $i++ ;  ?></th>
                    <td class="text-center"><?php echo $rows['name']?></td>
                    <td class="text-center"><?php echo $rows['email']?></td>
                    <td class="text-center"><?php echo $rows['balance']?></td>
                    <td>
                      <div class="text-center">
                        <a href="userdetails.php?id= <?php echo $rows['id'] ;?>"> <button class="btn btn-outline-dark btn">Transact</button></a> 
                      </div>
                    </td>
                </tr>
            <?php
                }
            ?>
        
                    </tbody>
                </table>
                </div>
            </div>
        </div> 
     </div>
     <!-- End Table -->

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>