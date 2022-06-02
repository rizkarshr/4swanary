<?php
session_start();



?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{asset('../favicon.png')}}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('images/l.png')}}">
    <title>Manage Store - Aswana.ry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">

    <!-- amchart css -->
    <link rel="stylesheet" type="text/css" media="all" href="{{url('https://www.amcharts.com/lib/3/plugins/export/export.css')}}">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="{{url('https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css')}}">

    <!-- others css -->
    <link rel="stylesheet" href="{{asset('assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
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

                            <li><a href="#"><i class="ti-user"></i><span>Nama Admin</span></a></li>

                            {{-- <li class="link {{ Request::is('dashboard') ? ' active' : '' }}"><a href="{{ route('dashboard') }}"><span>Home</span></a></li>
                            <li class="link {{ Request::is('user') ? ' active' : '' }}"><a href="{{ route('user') }}"></i><span>Manage Admin</span></a></li>

                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Manage Store
                                    </span></a>
                                <ul class="collapse">
                                    <li class="link {{ Request::is('article') ? ' active' : '' }}"><a href="{{ route('article') }}">Article</a></li>
                                    <li class="link {{ Request::is('company') ? ' active' : '' }}"><a href="{{ route('company') }}">Company</a></li>
                                    <li class="link {{ Request::is('product') ? ' active' : '' }}"><a href="{{ route('product') }}">Product</a></li>
                                    <li class="link {{ Request::is('category') ? ' active' : '' }}"><a href="{{ route('category') }}">Category</a></li>
                                    <li class="link {{ Request::is('subcategory') ? ' active' : '' }}"><a href="{{ route('subcategory') }}">Subcategory</a></li>
                                    <li class="link {{ Request::is('origins') ? ' active' : '' }}"><a href="{{ route('origins') }}">Origins</a></li>
                                </ul>
                            </li> --}}
                            <li>
                                <a href="#"><span>Logout</span></a>

                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
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
                                            //<!--
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
                                            //-->
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
                                    <h2>List Category</h2>
                                    <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Category</button>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="display" style="width:100%">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No.</th>
                                                <th>ID</th>
                                                <th>Category Name</th>
                                                <th>Description</th>
                                                <th>Created at</th>
                                                <th>Updated at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($category as $category)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td> {{ $category->id }} </td>
                                                <td> {{ $category->name }} </td>
                                                <td> {{ $category->desc }} </td>
                                                <td align="center">
                                                    <button style="padding:5px" type="button" class="btn btn-primary align:center" data-toggle="modal" data-target="#ModalEdit"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i> </button>
                                                    <button style="padding:5px" type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalDelete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></i> </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- row area start-->
        </div>
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>@2022 Aswana.ry Directory</p>
        </div>
    </footer>
    <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- modal input -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                </div>

                <div class="modal-body">
                    {{-- <form action="{{ route('category') }}" method="post" enctype="multipart/form-data"> --}}

                        <div class="form-group">
                            <label>Category Name</label>
                            <input name="name" type="text" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="desc" type="text" class="form-control" required>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <input name="addcategory" type="submit" class="btn btn-primary" value="Add">
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal edit -->
    <div id="ModalEdit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                </div>

                <div class="modal-body">
                    {{-- <form action="{{ route('category') }}" method="post" enctype="multipart/form-data"> --}}

                        <div class="form-group">
                            <label>Category Name</label>
                            <input name="name" type="text" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="desc" type="text" class="form-control" required>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <input name="editcategory" type="submit" class="btn btn-primary" value="Save">
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal delete -->
    <div id="ModalDelete" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Category</h4>
                </div>

                <div class="modal-body">
                    {{-- <form action="{{ route('category') }}" method="post" enctype="multipart/form-data"> --}}
                        <div class="form-group">
                            Are You Sure You Want To Delete This Data?
                            <input name="name" type="hidden" class="form-control" required autofocus>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <input name="deletecategory" type="submit" class="btn btn-primary" value="Delete">
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dataTable3').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>

    <!-- jquery latest version -->
    <script src="{{url('https://code.jquery.com/jquery-3.3.1.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
    <!-- Start datatable js -->
    <script src="{{url('https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js')}}"></script>
    <script src="{{url('https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js')}}"></script>
    <script src="{{url('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js')}}"></script>
    <script src="{{url('https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js')}}"></script>
    <!-- start chart js -->
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js')}}"></script>
    <!-- start highcharts js -->
    <script src="{{url('https://code.highcharts.com/highcharts.js')}}"></script>
    <!-- start zingchart js -->
    <script src="{{url('https://cdn.zingchart.com/zingchart.min.js')}}"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{asset('assets/js/line-chart.js')}}"></script>
    <!-- all pie chart -->
    <script src="{{asset('assets/js/pie-chart.js')}}"></script>
    <!-- others plugins -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>

</body>

</html>