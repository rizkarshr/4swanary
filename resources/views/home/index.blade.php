<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aswana.ry</title>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assett/css/style.css') }}" rel="stylesheet">


</head>

<body>


  <!-- ======= Header Navbar ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{ url('/home') }}" class="logo"><img src="{{ asset('assett/img/aswanalogo.png') }}" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/home') }}#services">Category</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/home') }}#about">About Us</a></li>

      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>Aswana.ry</span></h1>
      <h2>Directory of Export Product from Indonesia</h2>
      <div class="d-flex">
       <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://youtu.be/KwGnUtK2Kf0" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>-->
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Article Section ======= -->
  <br><br>
  <section id="article" class="about section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <!--<h2>Article</h2>-->
        <hr style="width: 200px; margin: 40px 455px 10px; color: #000000; height: 2px;">
        <h3>Article</h3>
        <p>read this section if you want to know something about indonesian exports!</p>
      </div><br>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <img src="{{ asset('article/'.$article->image) }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <h3 class="text-justify">{{$article->title}}</h3>
          <p class="text-justify">
            {{$article->summary}}
            <a href="{{ url('/articles') }}" class="fst-italic"><b>Readmore...</b></a>
          </p>
          <!--<a href="link" target="_blank" class="fst-italic">Readmore..</a>-->
          
        </div>
      </div>

    </div>
  </section><br><!-- End About Section -->


  <main id="main">
    <br>
    <div class="section-title">
      <!--<h2>Product</h2>-->
      <hr style="width: 480px; margin: 40px 400px 10px; color: #000000; height: 2px;">
      <h3>Indonesian MSMEs Product</h3>
      <p>see the visual of Indonesian MSMEs products right here!</p>
    </div>

    <div class="row">
      <div class="col-lg-12" data-aos="fade-right" data-aos-delay="100">

        <!--Caraousel-->
        <div id="carouselExampleIndicators" class="slideshow-container" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('assett/img/img1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('assett/img/img2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('assett/img/img3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>-->
        </div>

        <!--Left Right Control-->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>




    <!-- ======= Category Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!--<h2>Category</h2>-->
          <br>
          <hr style="width: 280px; margin: 40px 420px 10px; color: #000000; height: 2px;">
          <h3>Category</h3>
          <p>want to see more about Indonesian MSMEs & their products?
            choose one of these two to see by categories!</p>
        </div>

        <div class="row" id="kotak">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box-m">
              <div class="icon"><i class="bx bx-store"></i></div>
               <h4><a div href="{{ url('/search/msme') }}">MSME</a></h4>
              <!--<h4><a href="{{ url('/company/{id}') }}">MSME</a></h4>-->
              <p>see the categories by MSME</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box-p">
              <div class="icon"><i class="bx bx-archive"></i></div>
              <h4><a div href="{{ url('/search/product') }}">PRODUCT</a></h4>
              <!--<h4><a href="">Product</a></h4>-->
              <p>see the categories by product</p>
            </div>
          </div>


    </section><!-- End Services Section -->


    <!-- ======= About Section ======= -->
    <br>
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!--<h2>About Us</h2>-->
          <hr style="width: 280px; margin: 40px 420px 10px; color: #000000; height: 2px;">
          <h3>Find Out More <span>About Us!</span></h3><br>
          <p><b>What is Aswana.ry?</b></p><br><br>
          <img src="{{asset('/images/l.png')}}" alt="" style="width: 35%;">
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">

          </div>
          <div>
            <p class="text-center">
            Aswana is a web directory that provides information about products from Indonesian MSMEs (Micro, Small and Medium Enterprises) that have the potential for export. On this website there are two categories, namely product categories and MSMEs in which there are various subcategories to classify these types of products or MSMEs. The choice of the name Aswana.ry comes from the combination of the words Aswana and Directory, the word Aswana is taken from the Sanskrit language which means a place or location where the place/location functions as a container to accommodate or present something. Meanwhile, Directory comes from English which means directory which has the function of storing and providing information based on categories or groups. So, Aswana.ry means a place or location to store and provide information about Indonesian products or MSMEs based on their category.</div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!--<h2>Team</h2>-->
          <hr style="width: 280px; margin: 40px 420px 10px; color: #000000; height: 2px;">
          <h3>Meet Our Hardworking <span>Team</span></h3>
          <p>this team based on 4 beautiful member from different city</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assett/img/team/f1.png') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/rizkarshr/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rizka Rihul Sahara</h4>
                <span>Product Owner</span>
                <span>Front-End Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assett/img/team/f2.png') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/upinipinofficial/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mirza Aulia Firdaus</h4>
                <span>Front-End Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assett/img/team/f3.png') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/dhynadina1/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ummi Pratidina</h4>
                <span>Back-End Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assett/img/team/f4.png') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/rretnoangr/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Retno Anggraini</h4>
                <span>UI/UX Designer</span>
                <span>Front-End Developer</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><br><br><!-- End Team Section -->


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
<script src="public/js/fontawesome.js" type="text/javascript" charset="utf8"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>