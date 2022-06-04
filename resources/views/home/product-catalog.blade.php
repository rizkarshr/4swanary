<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Catalog</title>
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
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:4swanary@gmail.com">4swanary@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 896-8226-5894</span></i>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ url('/home') }}"><img src="{{ asset('assett/img/aswanalogo.png') }}" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assett/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Category</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="{{ url('/home') }}">Product</a></li>
            <li><a href="portfolio.html">Food</a></li>
            <li>Product Catalog</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Product Details Section ======= -->
    <!--<div class="row" id="product-details">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <img src="{{ asset('assett/img/product1.JPG') }}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-justify" id="pdw">Keripik Tempe</h3>
        <p style="text-align: justify" id="pdw">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Info lebih lanjut hubungi nomor dibawah.
        </p>-->
        
      <div class="row" id="product-details">
      {{-- @foreach ($product as $data) --}}
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
      <img src="{{ asset('product/'.$product->product_pict) }}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <p class="card-text"><b>{{ $product->name }}</b></p>
        <h3 class="text-justify" id="pdw">{{$product->name}}</h3>
        <p style="text-align: justify" id="pdw">{{$product->desc}}</p>
        <table>
          <tr>
            <td>Categories</td>
            <td>HSCode</td>
            <td>Origins</td>
            <td>Dimension</td>
          </tr>
          <td> {{ $product->subcategory->name }} </td>
          <td> {{ $product->hs_code }} </td>
          <td> {{ $product->indonesiaprovince->name }} </td>
          <td> {{ $product->dimension }} </td>
          <!--<tr>
            <td>Food</td>
            <td>00000</td>
            <td>East Java, Malang</td>
            <td>30x30cm</td>
          </tr>-->
        </table>
      </div>
    </div>
    {{-- @endforeach --}}
    <hr>


    <!-- ======= Company Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
      {{-- @foreach($product as $product) --}}
        <div class="col-lg-4">
          <div class="portfolio-info">

            <table width="100%" cellpadding="5">
              <tr>
                <th rowspan="4"> <img src="{{ asset('company-logo/'.$product->company->logo) }}" alt=""></th>
              </tr>
              <tr>
                <th colspan="4">
                  <h2>{{$product->company->name}}</h2>
                </th>
              </tr>
              <tr>
                <td><small>Website or Social Media</small></td>
                <td><small>Email Address</small></td>
                <td><small>Business Sector</small></td>
                <td><small>Contact Number</small></td>
              </tr>
              <tr>
                <td><strong>{{$product->company->website}}</strong></td>
                <td><strong>{{$product->company->email}}</strong></td>
                <td><strong>{{$product->company->subcategory->name}}</strong></td>
                <td><strong>{{$product->company->contact_number}}</strong></td>
              </tr>
            </table>
          </div>
        </div>

      </div>
      {{-- @endforeach --}}
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  <hr>

  <!-- ======= Product Similar Section ======= -->
  <section id="similar" style="padding-top: 0px;padding-bottom: 0px;" class="similar section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3>Similar Product</h3>
      </div>

      <section id="products" style="padding-top: 0px;padding-bottom: 40px;">
        <div class="container">
          <div class="row">
            @foreach ($similiar_product as $similiar_product)
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
              <div class="card">
                <img class="card-img-top" src="{{ asset('product/'.$product->product_pict) }}">
                <div class="card-body">
                  <p class="card-text" style="margin-bottom: 4px;"><strong>{{$similiar_product->name}} </strong></p>
                  <p style="margin-bottom: 3px;">{{$similiar_product->subcategory->name}} </p>
                  <P>{{$similiar_product->indonesiaCity->name}}, {{$similiar_product->indonesiaProvince->name}}</P>
                </div>
              </div>
            </div>     
            @endforeach      
          </div>
      </section>



  </section><!-- End About Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Aswana<span>.ry</span></h3>
            <p>
              All around the World <br>
              Every Universe<br>
              In your Heart too. <br><br>
              <strong>Phone:</strong> +62 896-8226-5894<br>
              <strong>Email:</strong> 4swanary@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Category</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Contact Us</h4>
            <p>To make it easier, click the button below to contact us</p>
            <div class="social-links mt-3">
              <a href="https://wa.me/089682265894" class="twitter"><i class="bx bxl-whatsapp"></i></a>
              <!--<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Support by:</h4>
            <img src="{{ asset('assett/img/support.png') }}" alt="">
            <!--<ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
              </ul>-->
          </div>
        </div>

      </div>
    </div>
    </div>

    <div class="container py-4">
      <div class="copyright"> &copy; Copyright <strong><span>Aswana.ry</span></strong>. All Rights Reserved
      </div>
      <!--<div class="credits"> -->
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
      <!--  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
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