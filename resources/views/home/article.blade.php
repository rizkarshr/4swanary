<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Article Page - Aswana.ry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assett/img/aswanalogo.png') }}" rel="icon">
  <link href="{{ asset('assett/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assett/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assett/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assett/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assett/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assett/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assett/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assett/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!--<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:4swanary@gmail.com">4swanary@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 896-8226-5894</span></i>
      </div>
    </div>
  </section>-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ url('/home') }}"><img src="{{ asset('assett/img/aswanalogo.png') }}" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assett/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{ url('/home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Category</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><h5>Article Page</h5> </li>
          </ol>
          
          <h6>created at [ {{$article->created_at}} ]</h6>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Isi Artikel Section ======= -->
    <section id="isiartikel" class="about section-bg">
    
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3> {{ $article->title }}</h3><br>
          <figure>
            <img src="{{ asset('article/'.$article->image) }}" alt="no pict" width="600" height="300">
            <figcaption class="fst-italic">Inauguration of Digital Export Showcase.</figcaption>
          </figure>
        </div>
     

        <div class="row">
           
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">

          </div>
          <div>
            <p style="text-align: justify">
            {{ $article->content }}</p>
            <!--<p style="text-align: justify">
              The inauguration of the Digital Export Showcase of student products was carried out with the release of the first export products of Certified Independent Study (SIB) students at Merdeka Campus Export School to Taiwan, Pakistan, and Japan which were symbolically sent through PT Pos Indonesia by Plt. Director General of Diktiristek and Handito Joewono, Thursday (13/1). Nizam conveyed his pride in the innovations that were successfully carried out by students in the Sekolah Ekspor activities that were carried out in the past one semester. He believes this activity is their first step to face challenges and opportunities as a provision for their future.</p>
            <p style="text-align: justify">“Sekolah Ekspor program can be the first step for you to start. Here, you have mentors and networks from other participants as well as from the campus which can be an important capital to start a long journey,” he said.</p>-->
          </div>
        </div>
       
      </div>
    </section><!-- End Isi Artikel Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row" align="center">

          <div class="footer-contact" align="center">
            <h3>Aswana.ry</h3>            
            <p>Aswana Directory</p>
            <p><i>All around the World Every Universe In your Heart too.</i><br><br></p>
          </div><div></div>

          <div class="col-lg-3 col-md-3 footer-links">
            <h4><u>Our Social Media</u></h4>
            <ul>
              <a href="https://wa.me/089682265894" class="whatsapp"><i class="bx bxl-whatsapp" style="width: 5%; margin: 0px 20px;"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram" style="margin: 0px 50px;"></i></a>
            </ul>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4 align="center"><u>Contact Us</u></h4>
            <p>need more information you can contact us on down below</p>
            <div class="social-links mt-3">      
              <p><strong>Phone : </strong> +62 896-8226-5894 <span> | </span><span><strong> Email : </strong> 4swanary@gmail.com</span></p>
              
              <!--<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4><u>Support By</u></h4>
            <img src="{{ asset('assett/img/support.png') }}" alt="">        
          </div>
        </div>

      </div>
    </div>
    </div>

    <div class="container py-4" align="center">
      <div class="copyright">Copyright &copy; 2022 <strong><span>Aswana.ry</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assett/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assett/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assett/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assett/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assett/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assett/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assett/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assett/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assett/js/main.js') }}"></script>

</body>

</html>