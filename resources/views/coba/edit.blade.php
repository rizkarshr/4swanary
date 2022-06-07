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
    <div class="page-container">
        <div class="main-content">
            <form class="form-sample" action="/admin/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
                <?php date_default_timezone_set('Asia/Makassar'); ?>
                @csrf
                <input type="hidden" name="updated_at" value="<?php echo date("Y-m-d H:i:s")?>">
                <div class="form-group">
                    <label>Product Name</label>
                    <input name="name" type="text" class="form-control" value="{{$product->name}}" required autofocus>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input name="desc" type="text" class="form-control" value="{{$product->desc}}" required>
                </div>
                <div class="form-group">
                    <label>HS Code</label>
                    <input name="hs_code" type="text" class="form-control" value="{{$product->hs_code}}" required>
                </div>
                <div class="form-group">
                    <label>Dimension</label>
                    <input name="dimension" type="text" class="form-control" value="{{$product->dimension}}" required>
                </div>
                <div class="form-group">
                    <label>Subcategory</label>
                    <select id="id_subcategory" name="id_subcategory" class="form-control">
                        <option value="{{$product->id_subcategory}}" disabled>{{$product->subcategory->name}}</option>
                        @foreach ($subcategory as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Province</label>
                    <select name="id_indonesia_province" class="form-control">
                        <option value="{{$product->id_indonesia_province}}" disabled>{{$product->IndonesiaProvince->name}}</option>
                        @foreach ($province as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <select name="id_indonesia_city" class="form-control">
                        <option value="{{$product->id_indonesia_city}}" disabled>{{$product->IndonesiaCity->name}}</option>
                        @foreach ($city as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>ID Company</label>
                    <select name="id_company" class="form-control">
                        <option value="{{$product->id_company}}" disabled>{{$product->company->name}}</option>
                        @foreach ($company as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Product Picture</label>
                    <input name="product_pict" type="file" class="form-control" value="{{$product->product_pict}}">
                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
                <a href="" type="button"  class="btn btn-light">Batal</a>
            </form>


                {{-- <div class="modal-body">
                    <form action="/admin/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
                        <?php date_default_timezone_set('Asia/Makassar'); ?>
                        @csrf
                        <input type="hidden" name="updated_at" value="<?php echo date("Y-m-d H:i:s")?>">
                        
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <input name="editproduct" type="submit" class="btn btn-primary" value="Save">
                </div>
                </form> --}}
    </div>
    <!-- modal edit end -->
</body>

</html>