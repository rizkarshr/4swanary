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

                    <a href=""><img src="{{ asset('assett/img/aswanalogo.png') }}" alt="" width="100px;"></a>


                    <!--<ul><img src="{{asset('images/l.png') }}" style="width:100px; "></ul>-->
                </div>
                <ul>

                    <!--<a href="index.html" class="logo"><img src="/images/l.png" alt=""></a>-->
                    <li><a class="nav-link scrollto" href="">Home</a></li>
                    <li><a class="nav-link scrollto active" href="#services">Category</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
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


    <!-- main-slider -->
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
    </ul>
    <!-- //main-slider -->
    <!-- //top-header and slider -->


    <!-- market value area start -->
    <div class="container">
        <div class="nav-page">
            <li><a class="nav-page scrollto active" href="#">Company Profile</a></li>
            <li><</li>
            <li><a href="/search/msme">{{$company->subcategory->name}}</a></li>
            <li><</li>
            <li><a href="/home">Home</a></li>
        </div>
        <div class="row mt-6">
            <div class="col-12">
                <div class="card">
                    <div class="card-head">
                        <div class="col-sm-5 col-md-4 profil">
                            <ul><img src="{{ asset('company-logo/'.$company->logo) }}" alt=" " class="img-responsive">
                                <h2>{{$company->name}}</h2>
                            </ul>

                        </div>
                        <h5>Establishes in {{$company->since}}
                            <br><br>
                            {{$company->IndonesiaCity->name}}, {{$company->IndonesiaProvince->name}}
                        </h5>
                        <a data-toggle="modal" data-target="#modalAppointment">
                            <button>Schedule on Appoinment</button>
                        </a>
                        <!--<div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Welcome to Aswana.ry Directory</h2>
                        </div>
                        <div class="market-status-table mt-4">
                            You are login as <strong>Admin</strong>
                            <br>
                            <p>On the admin page, you can manage users and admins, manage articles, manage companies, manage products, add product categories and subcategories, and view origins lists.</p>
                        </div>-->
                    </div>
                    <div class="card-body">
                        <table id="table" class="display" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Website or Social Media</th>
                                    <th>Email Address</th>
                                    <th>Business Sector</th>
                                    <th>Contact Number</th>
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
    <div class="top-brands">
        <div class="container">
            <h2>Our Products</h2>
            <div class="grid_3 grid_5">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <div id="myTabContent" class="tab-content">
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
                            <div class="agile_top_brands_grids">

                                <?php
                                //$brgs = mysqli_query($conn, "SELECT * from produk order by idproduk ASC");
                                //$no = 1;
                                //while ($p = mysqli_fetch_array($brgs)) {

                                ?>
                                <div class="col-md-4 top_brand_left">

                                    <!-- PRODUK DARI COMPANY-->
                                    @foreach ($product as $product)
                                    <img src="{{ asset('product/'.$product->product_pict) }}" alt=" " class="img-responsive" />
                                    <p>{{$product->name}}</p>
                                    <p>{{$product->subcategory->name}}</p>
                                    <p>{{$product->indonesiaCity->name}}, {{$product->indonesiaProvince->name}}</p>  
                                    @endforeach

                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                {{-- <img src="{{asset('product/').$product->product_pict}}" alt=" " class="img-responsive" /> --}}
                                            </div>
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <a href="product.php?idproduk=<?php //echo $p['idproduk'] 
                                                                                            ?>"><img title=" " alt=" " src="<?php //echo $p['gambar'] 
                                                                                                                            ?>" width="200px" height="200px" /></a>
                                                            <p><?php //echo $p['namaproduk'] 
                                                                ?></p>
                                                            <h4>Rp<?php //echo number_format($p['hargaafter']) 
                                                                    ?> <span>Rp<?php //echo number_format($p['hargabefore']) 
                                                                                ?></span></h4>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                            <fieldset>
                                                                <a href="product.php?idproduk=<?php //echo $p['idproduk'] 
                                                                                                ?>"><input type="submit" class="button" value="Lihat Produk" /></a>
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

    





    <!-- //footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-sm-3 w3_footer_grid">
                    <h3>Hubungi Kami</h3>

                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Aswana.ry Directory</li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:4swanary@gmail.com">4swanary@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+62 8512 3456 789</li>
                    </ul>
                </div>
                <div class="col-sm-5 w3_footer_grid">

                    <ul class="info">
                        <h3>Support By</h3>
                        <li>
                            <img src="{{ asset('asset/images/merdeka.png') }}" alt=" " class="img-responsive">
                            <img src="{{ asset('asset/images/sekolahekspor.png') }}" alt=" " class="img-responsive">
                        </li>
                        <!--<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>-->
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="footer-copy">
            <div class="w3layouts-foot">
                <ul>
                    <li><a href="#" class="w3_agile_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                </ul>
            </div>


            <p>© 2022 Aswana.ry Directory. All rights reserved</p>

        </div>

    </div>
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