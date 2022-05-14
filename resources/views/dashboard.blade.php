@extends('template')
@section('content')

<!-- main content area start -->
<div class="main-content">
    <!-- header area start -->
    <div class="header-area">
        <div class="row align-items-center">
            <!-- nav and search button -->
            <div class="col-md-6 col-sm-8 clearfix">
                <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- profile info & task notification -->
            <div class="col-md-6 col-sm-4 clearfix">
                <ul class="notification-area pull-right">
                    <li>
                        <h3>
                            <div class="date">
                                <script type='text/javascript'>
                                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                    var date = new Date();
                                    var day = date.getDate();
                                    var month = date.getMonth();
                                    var thisDay = date.getDay(),
                                        thisDay = myDays[thisDay];
                                    var yy = date.getYear();
                                    var year = (yy < 1000) ? yy + 1900 : yy;
                                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                </script></b>
                                <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                            </div>
                        </h3>

                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- header area end -->


    <!-- page title area end -->
    <div class="main-content-inner">

        <!-- market value area start -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Welcome to Aswana.ry Directory</h2>
                        </div>
                        <div class="market-status-table mt-4">
                            You are login as <strong>Admin</strong>
                            <br>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- market value area end -->

        <div class="sales-report-area mt-5 mb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-report mb-xs-30">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                            <div class="icon"><i class="fa fa-user"></i></div>
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Product</h4>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <h1>220</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-report">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                            <div class="icon"><i class="fa fa-book"></i></div>
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Company</h4>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <h1>321</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-report mb-xs-30">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                            <div class="icon"><i class="fa fa-link"></i></div>
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Category</h4>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <h1>123</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- overview area end -->



        <!-- row area start-->
    </div>
</div>
<!-- main content area end -->
@endsection