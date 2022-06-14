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
    <link href="{{ asset('assett/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assett/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assett/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
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
            <li><a class="nav-page scrollto" href="/search/msme">Category MSME</a></li>
            <li><b>|</b></li> 
            <li><a class="nav-page scrollto active" href="#"><b>MSME Profile</b></a></li>         
        </div>
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
                        <p style="font-size: 28px;"><b>{{$company->name}}</b></p> 
                        <a data-toggle="modal" data-target="#modalAppointment">
                            <button>Schedule on Appoinment</button>
                        </a>
                        <p>__________________________________________</p>
                        <br>
                        <p><i>Establishes in {{$company->since}}</i></p>
                        <p>{{$company->IndonesiaCity->name}}, {{$company->IndonesiaProvince->name}}</p>
                        

                    
                    <div class="card-body">
                        <table id="table" class="display" style="width:100%;">
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
            <br><h2 align="center" style="color: #25262B ;">Our Products</h2> <br>
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
                                    
                                    <section id="ourprods" style="margin-right: 4px; margin-left: 1px;">
                                    <div class="row" style="padding-bottom: 60px;">
                                    @foreach ($product as $product)
                                        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                                             <a div class="card-prod" style="margin-right: 0px; margin-left: 0px;" href="{{ url('/product/'.$product->id)}}">
                                                <img src="{{ asset('product/'.$product->product_pict) }}" alt=" " class="card-img-top" />
                                                <div class="card-body-product">
                                                <p><b>{{$product->name}}</b></p>
                                                <p>{{$product->subcategory->name}}</p>
                                                <p>{{$product->indonesiaProvince->name}}</p>  
                                                </div>
                                             </a>
                                        </div>
                                        @endforeach
                                    </div>
                                    </section>
                                        <div class="snipcart-details top_brand_home_details">
                                            <fieldset>
                                               <a href="product.php?idproduk=<?php //echo $p['idproduk'] ?>">                                            
                                            </fieldset>
                                        </div>
                                                                
                                                        
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

