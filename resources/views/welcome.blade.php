<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gems - Digital Wallet</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  img{
    width: 100%;
    object-fit :fill;
  }
  .sampul{
    padding-top: 100px;
    padding-bottom: 180px;
    background-image: url('assets/img/head.png');
    background-repeat: no-repeat;
    background-position:center;
    height: 100%;
    background-size: cover;
  }
  .background-image{
    width: 100%;
  }
  .side{
    background: rgb(169, 221, 250);
    height: 30px;
    width: 30px;
    border-radius: 20px;
    text-align: center;
  }
  .nav-menu ul li  a{
    color: white !important;
    text-transform: uppercase;
    font-weight: bold;
  }
  .nav-menu li a:hover{
    color: #b2f0e8 !important;
  }
  button:hover{
    background-color: #39afb5;
    color: white !important;
  }
</style>
<body>

    <!-- ======= Header ======= -->
    @include('header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @include('cover')

    <!-- ======= App Features Section ======= -->
    @include('features')
    <!-- End App Features Section -->

    <!-- ======= About Section ======= -->
    @include('about')
    <!-- End About Section -->

    <!-- ======= Secure Section ======= -->
    @include('secure')
    <!-- End Secure Section -->

    <!-- ======= Merchant Section ======= -->
    @include('merchant')
    <!-- End Merchant Section -->

    <!-- ======= Merchant Section ======= -->
    @include('partner')
    <!-- End Merchant Section -->

    <!-- ======= Footer ======= -->
    @include('footer')
    <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
    @include('vendor')

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>