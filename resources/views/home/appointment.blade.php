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
    <title>Appointment Form - Aswana.ry</title>
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
            <div class="w3l_offers">
                <ul><img src="{{ asset('images/l.png') }}" style="width:100px; "></ul>

            </div>

            <nav id=" navbar" class="navbar">
                <ul>
                    <!--<a href="index.html" class="logo"><img src="/images/l.png" alt=""></a>-->
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#services">Category</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                </ul>
            </nav><!-- .navbar -->
            <div class="clearfix"> </div>
        </div>
    </header>

    <!-- market value area start -->
    <div class="container">
        <div class="modal-content" style="margin-top: 5%; margin-bottom: 5%; color: #000;">
            <div class="modal-header">
                <h4 class="modal-title" align=center>Personal Data</h4>
            </div>

            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input name="name" type="text" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input name="phone" type="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input name="date" type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <input name="date" type="time" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea cols="30" rows="5" name="message" type="text" class="form-control" required></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <input name="personaldata" type="submit" class="btn btn-primary" value="Submit">
            </div>

        </div>
    </div>
    <!-- market value area end -->

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-sm-3 w3_footer_grid">
                    <h3>Hubungi Kami</h3>

                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Aswana.ry Directory</li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@email">info@email</a></li>
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


            <p>© 2022 Aswana.ry Directory. All rights reserved</p>

        </div>

    </div>
    <!-- //footer -->


    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->
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