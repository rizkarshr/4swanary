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

  <!-- ======= Top Bar ======= 
  <section id="topbar" class="d-flex align-items-center">
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
          <li><a class="nav-link scrollto active" href="{{ url('/home') }}#services">Category</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/home') }}#about">About</a></li>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <br><br>
    <div class="container">
        <div class="nav-page">
            <li><a class="nav-page scrollto" href="/search/product">Category Product</a></li>
            <li><b>|</b></li> 
            <li><a class="nav-page scrollto active" href="#"><b>Product Catalog</b></a></li>         
        </div>
    </div>   
        
  <main id="main" data-aos="fade-up">
    <!-- ======= Breadcrumbs Section =======
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="{{ url('/search/product') }}">Category Product</a></li>
            <li>Product Catalog</li>
          </ol>
        </div>

      </div>
    </section>-->

      <div class="row" id="product-details">
      {{-- @foreach ($product as $data) --}}
      <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100" align="center">
      <img src="{{ asset('product/'.$product->product_pict) }}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <p class="card-text">{{ $product->name }}</b></p>
        <h3 class="text-justify" id="pdw"><strong>{{$product->name}}</strong></h3>
        <p style="text-align: justify" id="pdw">{{$product->desc}}</p>
        <table>
          <tr>
            <td><u>Categories</u></td>
            <td><u>HSCode</u></td>
            <td><u>Origins</u></td>
            <td><u>Dimension</u></td>
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
    <hr style="width: 800px; margin: 100px 250px 50px; color: #000000; height: 2px;">
    

    <!-- ======= Company Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" style=" padding-left: 20px;">
      {{-- @foreach($product as $product) --}}
        <div class="">
          <div class="portfolio-info">

            <table width="100%" cellpadding="5">
              <tr>
                <th rowspan="4"> <img src="{{ asset('company/'.$product->company->logo) }}" alt="no pict"></th>
              </tr>
              <tr>
                <th colspan="4">
                  <h2><b>{{$product->company->name}}</b></h2>
                </th>
              </tr>
              <tr>
                <td><small><u>Website or Social Media</u></small></td>
                <td><small><u>Email Address</u></small></td>
                <td><small><u>Business Sector</u></small></td>
                <td><small><u>Contact Number</u></small></td>
              </tr>
              <tr>
                <td>{{$product->company->website}}</td>
                <td>{{$product->company->email}}</td>
                <td>{{$product->company->subcategory->name}}</td>
                <td>{{$product->company->contact_number}}</td>
              </tr>
            </table>
          </div>
        </div>

      </div>
      {{-- @endforeach --}}
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Product Similar Section ======= -->
  <section id="similar" style="padding-top: 0px;padding-bottom: 0px;" class="similar section-bg">
    <div class="container" data-aos="fade-up" >

    <hr style="width: 480px; margin: 40px 320px 10px; color: #000000; height: 2px;">
      <div class="section-title">
        <h3 align="center">Similar Product</h3>
      </div>

      <section id="products" style="margin-right: 40px; margin-left: 40px;">
          <div class="row">
            @foreach ($similiar_product as $similiar_product)
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
              <div class="card">
                <img class="card-img-top" src="{{ asset('product/'.$product->product_pict) }}">
                <div class="card-body">
                  <p class="card-text" style="margin-bottom: 4px;"><strong>{{$similiar_product->name}} </strong></p>
                  <p style="margin-bottom: 3px;">{{$similiar_product->subcategory->name}} </p>
                  <P>{{$similiar_product->indonesiaProvince->name}}</P>
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