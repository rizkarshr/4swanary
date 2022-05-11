<?php
session_start();


if (isset($_POST["addproduct"])) {
    $namaproduk = $_POST['namaproduk'];
    $idkategori = $_POST['idkategori'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stockawal'];
    $rate = $_POST['rate'];
    $hargabefore = $_POST['hargabefore'];
    $hargaafter = $_POST['hargaafter'];

    $nama_file = $_FILES['uploadgambar']['name'];
    $ext = pathinfo($nama_file, PATHINFO_EXTENSION);
    $random = crypt($nama_file, time());
    $ukuran_file = $_FILES['uploadgambar']['size'];
    $tipe_file = $_FILES['uploadgambar']['type'];
    $tmp_file = $_FILES['uploadgambar']['tmp_name'];
    $path = "../produk/" . $random . '.' . $ext;
    $pathdb = "produk/" . $random . '.' . $ext;


    if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
        if ($ukuran_file <= 5000000) {
            if (move_uploaded_file($tmp_file, $path)) {

                $query = "insert into produk (idkategori, namaproduk, gambar, deskripsi, stockawal, rate, hargabefore, hargaafter)
			  values('$idkategori','$namaproduk','$pathdb','$deskripsi','$stock','$rate','$hargabefore','$hargaafter')";
                $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query

                if ($sql) {

                    echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
                } else {
                    // Jika Gagal, Lakukan :
                    echo "Sorry, there's a problem while submitting.";
                    echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
                }
            } else {
                // Jika gambar gagal diupload, Lakukan :
                echo "Sorry, there's a problem while uploading the file.";
                echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
            }
        } else {
            // Jika ukuran file lebih dari 1MB, lakukan :
            echo "Sorry, the file size is not allowed to more than 1mb";
            echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
        }
    } else {
        // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
        echo "Sorry, the image format should be JPG/PNG.";
        echo "<br><meta http-equiv='refresh' content='5; URL=produk.php'> You will be redirected to the form in 5 seconds";
    }
};
?>










<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="upin1.jpg">
    <title>Aswana.ry Directory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/metisMenu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/bootstrap-icons/bootstrap-icons.css">


    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" type="text/css" href="assets/css/typography.css">
    <link rel="stylesheet" type="text/css" href="assets/css/default-css.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li align="center"><img src="{{asset('images/logo2.png') }}" style="width:150px; "></li>

                            <li><a href="#"><i class="ti-user"></i><span>Admin</span></a></li>
                            <li class="{{set_active('dashboard')}}"><a href="{{route('dashboard')}}"><span>Home</span></a></li>
                            <li><a href="#"><span>Kembali Ke Toko</span></a></li>
                            <li>
                                <a href="#"><i class="ti-dashboard"></i><span>Manage Admin</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Manage Store
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="#">Article</a></li>
                                    <li class="{{set_active('produk')}}"><a href="{{route('produk')}}">Product</a></li>
                                    <li><a href="#">Category</a></li>
                                    <li><a href="#">Subcategory</a></li>
                                    <li><a href="#">Origins</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><span>Logout</span></a>

                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->

        @yield('content')

        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>by Aswana.ry Directory 2022</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>