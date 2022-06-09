<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="images/l.png">
    <link href="{{ asset('assett/img/aswanalogo.png') }}" rel="icon">
    <title>MSME Profile - Aswana.ry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Falenda Flora, Ruben Agung Santoso" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('asset/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{ asset('asset/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{ asset('asset/js/jquery-1.11.1.min.js') }}"></script>
    <!-- //js -->
    <link href='///fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='///fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!--Swiper-->
    <link href="{{ asset('assett/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('asset/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
    <!-- header -->
    <header id="header" class="agileits_header d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <!--<h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->



            <nav id=" navbar" class="navbar">
                <div class="w3l_offers">

                    <a href=""><img src="{{asset('/images/l.png')}}" width="20%"></a>


                    <!--<ul><img src="{{asset('images/l.png') }}" style="width:100px; "></ul>-->
                </div>
                <ul>

                    <!--<a href="index.html" class="logo"><img src="/images/l.png" alt=""></a>-->
                    <li><a class="nav-link scrollto" href="{{ url('/home') }}">Home</a></li>
                    <li><a class="nav-link scrollto active" href="{{ url('/home') }}#services">Category</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/home') }}#about">About Us</a></li>
                </ul>
            </nav><!-- .navbar -->
            <div class="clearfix"> </div>
        </div>
    </header>





    <!--<div class="agileits_header">
        <div class="container">
            <div class="w3l_offers">
                <li><img src="{{asset('images/logo2.png') }}" style="width:100px; "></li>
            </div>
            <div class="agile-login">
                <ul>
                    <?php
                    if (!isset($_SESSION['log'])) {
                        echo '
					<li><a href="registered.php"> Home</a></li>
					<li><a href="login.php">Category</a></li>
                    <li><a href="login.php">About Us</a></li>
					';
                    } else {

                        if ($_SESSION['role'] == 'Member') {
                            echo '
					<li style="color:white">Halo, ' . $_SESSION["name"] . '
					<li><a href="logout.php">Keluar?</a></li>
					';
                        } else {
                            echo '
					<li style="color:white">Halo, ' . $_SESSION["name"] . '
					<li><a href="admin">Admin Panel</a></li>
					<li><a href="logout.php">Keluar?</a></li>
					';
                        };
                    }
                    ?>

                </ul>
            </div>-->
    <!--<div class="product_list_header">
                <a href="cart.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                </a>
            </div>-->
    <!--<div class="clearfix"> </div>
        </div>
    </div>-->

    <!--<div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi Kami : (+62) 8512 3456 789</li>
                </ul>
            </div>
            <div class="w3ls_logo_products_left">
                <h1><a href="index.php">OURSTORE</a></h1>
            </div>
            <div class="w3l_search">
                <form action="search.php" method="post">
                    <input type="search" name="Search" placeholder="Cari produk...">
                    <button type="submit" class="btn btn-default search" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                    <div class="clearfix"></div>
                </form>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>-->
    <!-- //header -->
    <!-- navigation -->
    <!--<div class="navigation-agileits">
        <div class="container">
            <nav class="navbar navbar-dark">-->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!--<div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php" class="act">Home</a></li>-->
    <!-- Mega Menu -->
    <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori Produk<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <h6>Kategori</h6>-->

    <?php
    //$kat = mysqli_query($conn, "SELECT * from kategori order by idkategori ASC");
    //while ($p = mysqli_fetch_array($kat)) {

    ?>
    <!--<li><a href="kategori.php?idkategori=<?php //echo $p['idkategori'] 
                                                ?>"><?php //echo $p['namakategori'] 
                                                    ?></a></li>-->

    <?php
    //}
    ?>
    <!--</ul>
                                    </div>

                                </div>
                            </ul>
                        </li>
                        <li><a href="cart.php">Keranjang Saya</a></li>
                        <li><a href="daftarorder.php">Daftar Order</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>-->

    <!-- //navigation -->


    <!-- main-slider
    <ul id="demo1">
        <li>
            <img src="{{ asset('asset/images/slider1.jpg') }}" alt="" />
        </li>
        <li>
            <img src="{{ asset('asset/images/slider2.jpg') }}" alt="" />
        </li>

        <li>
            <img src="{{ asset('asset/images/slider3.jpg') }}" alt="" />
        </li>
        <li>
            <img src="{{ asset('asset/images/slider4.jpg') }}" alt="" />
        </li>
    </ul>-->
    <!-- //main-slider -->
    <!-- //top-header and slider -->


    <!-- market value area start -->
    <div class="container">
        <div class="nav-page">            
            <!--<li><a href="#">{{$company->subcategory->name}}</a></li>
            <li><</li>-->
            <li><a class="nav-page scrollto" href="/search/msme">Category MSME</a></li>
            <li>|</li> 
            <li><a class="nav-page scrollto active" href="#"><b>MSME Profile</b></a></li>
            <li></li>           
        </div>
        
   <!--=============================== Profile=========================================================-->
        <div class="row mt-6">
            <div class="col-12">
                <div class="card">
                    <div class="card-head">
                        <div class="col-sm-5 col-md-4 profil">
                            <br>
                            <ul><img src="{{ asset('company/'.$company->logo) }}" alt=" " class="img-responsive" style=" width:200px; height:180px ;border-radius:10%;">
                            </ul>
                        </div>
                        <br> <br>
                        <p style="font-size: 30px;"><b>{{$company->name}}</b></p> 
                        <a data-toggle="modal" data-target="#modalAppointment">
                            <button>Schedule on Appoinment</button>
                        </a>
                        <p>____________________________________________________</p>
                        <br>
                        <p><i>Establishes in {{$company->since}}</i></p>
                        <p>{{$company->IndonesiaCity->name}}, {{$company->IndonesiaProvince->name}}</p>
                        

                    
                    <div class="card-body">
                        <table id="table" class="display" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th><u>Website or Social Media</u></th>
                                    <th><u>Email Address</u></th>
                                    <th><u>Business Sector</u></th>
                                    <th><u>Contact Number</u></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$company->website}}</td>
                                    <td>{{$company->email}}</td>
                                    <td>{{$company->subcategory->name}}</td>
                                    <td>{{$company->contact_number}}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- market value area end -->



    <!-- top-brands -->
    <!--<div class="top-brands">-->
        <!--<div class="container">-->
        <br><br><br><br>
        <p align="center">____________________________________________________</p>
            <br><h1 align="center">Our Products</h1>
            <br>

            <!--<div class="grid_3 grid_5">-->
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs" >
                    <!--<div id="myTabContent" class="tab-content">-->
                        <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                            <div class="agile-tp">
                                <!--<h5>Penawaran Terbaik Minggu Ini
                                    <?php
                                    if (!isset($_SESSION['name'])) {
                                    } else {
                                        echo 'Untukmu, ' . $_SESSION['name'] . '!';
                                    }
                                    ?>
                                </h5>-->
                            </div>
                            <!--<div class="agile_top_brands_grids">-->

                                <?php
                                //$brgs = mysqli_query($conn, "SELECT * from produk order by idproduk ASC");
                                //$no = 1;
                                //while ($p = mysqli_fetch_array($brgs)) {

                                ?>
                                <!--<div class="col-md-4 top_brand_left">

                                    //PRODUK DARI COMPANY-->
                                    
                                    @foreach ($product as $product)
                                    <div class="row" style="padding-bottom: 60px;">
                                        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                                             <a div class="card-prod" href="{{ url('/product/{id}/') }}">
                                                <img src="{{ asset('product/'.$product->product_pict) }}" alt=" " class="card-img-top" />
                                                <div class="card-body-product">
                                                <p><b>{{$product->name}}</b></p>
                                                <p>{{$product->subcategory->name}}</p>
                                                <p>{{$product->indonesiaProvince->name}}</p>  
                                                </div>
                                             </a>
                                        </div>

                                        <div class="snipcart-details top_brand_home_details">
                                            <fieldset>
                                               <a href="product.php?idproduk=<?php //echo $p['idproduk'] ?>">                                            
                                            </fieldset>
                                        </div>
                                    @endforeach                            
                                                        
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                //}
                                ?>


                                <div class="clearfix"> </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //top-brands -->

    





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
          <a href="https://wa.me/089682265894" class="twitter"><i class="bx bxl-instagram"></i></a>
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
    <!--<div class="footer-botm">
        <div class="container">
            <div class="w3layouts-foot">
                <ul>
                    <li><a href="#" class="w3_agile_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="payment-w3ls">
                <img src="asset/images/card.png" alt=" " class="img-responsive">
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>-->

    <!-- modal input -->
    <div id="modalAppointment" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Make Appointment to {{$company->name}}</h4>
                </div>
                <div class="modal-body">
                    <form action="{{url('appointment/send/{id}')}}" method="get" enctype="multipart/form-data">
                        <input name="email_company" value="{{$company->email}}" hidden>
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input name="phone_number" type="number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input name="date" type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <input name="time" type="time" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea cols="30" rows="5" name="message" type="text" class="form-control" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <input name="personaldata" type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal input end -->

    <!-- //footer -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->

    <!--<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>-->
    <script type="text/javascript">
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 4000,
                easingType: 'linear'
            };


            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->

    <!-- main slider-banner -->
    <script src="{{ asset('asset/js/skdslider.min.js') }}"></script>
    <link href="{{ asset('asset/css/skdslider.css') }}" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#demo1').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });

            jQuery('#responsive').change(function() {
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
    <!-- //main slider-banner -->
</body>

</html>

<style> 
/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
    background: #fff;
    padding: 0 0 30px 0;
    color: #444444;
    font-size: 14px;
    background: #f1f6fe;
  }
  #footer .footer-newsletter {
    padding: 50px 0;
    background: #f1f6fe;
    text-align: center;
    font-size: 15px;
  }
  #footer .footer-newsletter h4 {
    font-size: 24px;
    margin: 0 0 20px 0;
    padding: 0;
    line-height: 1;
    font-weight: 600;
  }
  #footer .footer-newsletter form {
    margin-top: 30px;
    background: #fff;
    padding: 6px 10px;
    position: relative;
    border-radius: 4px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.06);
    text-align: left;
  }
  #footer .footer-newsletter form input[type=email] {
    border: 0;
    padding: 4px 8px;
    width: calc(100% - 100px);
  }
  #footer .footer-newsletter form input[type=submit] {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    border: 0;
    background: none;
    font-size: 16px;
    padding: 0 20px;
    background: #106eea;
    color: #fff;
    transition: 0.3s;
    border-radius: 0 4px 4px 0;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  }
  #footer .footer-newsletter form input[type=submit]:hover {
    background: #0d58ba;
  }
  #footer .footer-top {
    padding: 60px 0 30px 0;
    background: #25262B;
  }
  #footer .footer-top .footer-contact {
    margin-bottom: 30px;
  }
  #footer .footer-top .footer-contact h3 {
    font-size: 24px;
    margin: 0 0 15px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    font-weight: 700;
  }
  #footer .footer-top .footer-contact h3 span {
    color: #B0998D;
  }
  #footer .footer-top .footer-contact p {
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: "Roboto", sans-serif;
    color: #777777;
  }
  #footer .footer-top h4 {
    font-size: 16px;
    font-weight: bold;
    color: #444444;
    position: relative;
    padding-bottom: 12px;
  }
  #footer .footer-top .footer-links {
    margin-bottom: 30px;
  }
  #footer .footer-top .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  #footer .footer-top .footer-links ul i {
    padding-right: 2px;
    color: #B0998D;
    font-size: 18px;
    line-height: 1;
  }
  #footer .footer-top .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }
  #footer .footer-top .footer-links ul li:first-child {
    padding-top: 0;
  }
  #footer .footer-top .footer-links ul a {
    color: #777777;
    transition: 0.3s;
    display: inline-block;
    line-height: 1;
  }
  #footer .footer-top .footer-links ul a:hover {
    text-decoration: none;
    color: #B0998D;
  }
  #footer .footer-top .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #0b9b2d;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 4px;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
    
  }
  #footer .footer-top .social-links a:hover {
    background: #4A312C;
    color: #fff;
    text-decoration: none;
  }
  #footer .copyright {
    text-align: center;
    float: left;
  }
  
  .copyright {
    text-align: center;
  }
  
  #footer .credits {
    float: right;
    text-align: center;
    font-size: 13px;
    color: #444444;
  }
  @media (max-width: 768px) {
    #footer .copyright, #footer .credits {
      float: none;
      text-align: center;
      padding: 2px 0;
    }
}
</style>