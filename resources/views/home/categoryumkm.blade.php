<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<link rel="icon" type="image/x-icon" href="{{asset('/images/l.png')}}">
<title>Aswana.ry | Category MSME</title>
<link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="{{asset('/assetz/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/assetz/css/bootstrap.min.css')}}">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-left">
    <div class="container d-flex align-items-left justify-content-between" style="margin-left: 20px;padding-top: 5px;">

      <nav id="navbar" class="navbar">
      <img src="{{asset('/images/l.png')}}" width="10%">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto active" href="#services">Category</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
      </nav>
      <!--END NAVBAR -->
    </div>
  </header>
  <!-- END HEADER -->


<!--===================================F I L T E R=======================================-->

<form action="{{ url()->current() }}" method="get">
<section id="sidebar">
<div class="container">
  <div class="border-bottom pb-2 ml-2">
    <h5 id="burgundy">Filters</h5>
  </div>
  <div class="py-2 border-bottom ml-3">
    <h6 class="font-weight-bold">Categories</h6>
        @foreach ($subcategory as $item)
        <div class="form-group">
            <input type="checkbox" id="id_subcategory" name="id_subcategory" value="{{ $item->id}}" {{ request()->filled('id') ? 'checked' :''}}>
            <label for="id_subcategory">{{$item->name}}</label>
        </div> 
        @endforeach                          
 
<!--===================================region filter=======================================-->
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Regions</h6>
          @foreach ($province as $item)
          <div class="form-group">
            <input type="checkbox" id="id_indonesia_province" name="id_indonesia_province" value="{{ $item->id}}" {{ request()->filled('id') ? 'checked' :''}}>
            <label for="id_indonesia_province">{{$item->name}}</label>
          </div> 
        @endforeach                                
    </div>
  </div>
</div>
</section>

<!--===================================U M K M=======================================-->
<section id="umkm">
    <!--<div class="border-bottom pb-2 ml-2">-->
        <br><h4 id="burgundy" align="center"><b>MSME LIST</b></h4><br>
    {{-- </div>  --}}

<!--===================================Search=======================================-->
  <div class="search">
    <input type="search" name="search"  value="{{ request('search') }}" autocomplete="off" placeholder="Search Product.." style="width: 90%;" method="post" >
    <button type="submit" style="width: 8%; background-color: #562016; color:#EEE8E1">Search</button>
  </div>
</form>
<!--===================================UMKM LIST=======================================-->
    <div class="container" style="padding-left: 3px; padding-right: 3px;">
      @foreach ($search as $search)
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
                <a div class="card" href="/company/{id}/">
                  <img src="{{ asset('company/'.$search->logo) }}" alt="no pict" class="card-img-top" />
                  <div class="card-body">
                    <p class="card-text"><b>{{$search->name}}</b></p>
                    <p class="categoryprod">{{$search->subcategory->name}}</p>
                    <p class="originprod">{{$search->IndonesiaProvince->name}}</p>
                  </div>
                </a>
            </div>

        <!-- <div class="col-lg-3 offset-lg-0 col-sm-4 offset-sm-2 col-11 offset-1">
                <div class="card">
                    <img class="card-img-top" src="{{$search->logo}}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text"><b>{{$search->name}}</b></p>
                    <p class="categoryprod">{{$search->id_subcategory}}</p>
                    <p class="originprod">hai</p>      
                    </div>
                </div>
            </div>-->
            @endforeach
        </div>  
    </div>
    
    <br><br>
<!--===================================END OF LIST=======================================-->

<!--===================================PAGINATION=======================================     
    <div class="pagination" style="margin: 2%; padding-left: 30%">
                <a href="#"><b>&laquo;</b></a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#"><b>&raquo;</b></a>
        </div>-->  
</section>  
</body>


<script src="{{asset('/assetz/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assetz/js/jquery.min.js')}}"></script>

</html>

<style>
  *{
  box-sizing: fit-content;
}
body{
  color: #25262B;
  margin:0;
}

/*Header Start*/
#header {
background: #fff;
transition: all 0.5s;
z-index: 997;
height: 86px;
box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}
#header.fixed-top {
height: 70px;
}
#header .logo {
font-size: 30px;
margin: 0;
padding: 0;
line-height: 1;
font-weight: 600;
letter-spacing: 0.8px;
font-family: "Poppins", sans-serif;
}
#header .logo a {
color: #222222;
}
#header .logo a span {
color: #106eea;
}
#header .logo img {
max-height: 40px;
}

.scrolled-offset {
margin-top: 70px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
padding: 0;
}
.navbar ul {
margin: 0;
padding: 0;
display: flex;
list-style: none;
align-items: center;
}
.navbar li {
position: relative;
}
.navbar > ul > li {
white-space: nowrap;
padding: 10px 0 10px 28px;
}
.navbar a, .navbar a:focus{

justify-content: space-between;
padding: 0 3px;
font-size: 15px;
font-weight: 600;
color: #222222;
white-space: nowrap;
transition: 0.3s;
position: relative;
}
.navbar a i, .navbar a:focus i {
font-size: 12px;
line-height: 0;
margin-left: 5px;
}
.navbar > ul > li > a:before {
content: "";
position: absolute;
width: 100%;
height: 2px;
bottom: -6px;
left: 0;
background-color: #4A312C;
visibility: hidden;
width: 0px;
transition: all 0.3s ease-in-out 0s;
}
.navbar a:hover:before, .navbar li:hover > a:before, .navbar .active:before {
visibility: visible;
width: 100%;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
color: #4A312C;
}
.navbar .dropdown ul {
display: block;
position: absolute;
left: 28px;
top: calc(100% + 30px);
margin: 0;
padding: 10px 0;
z-index: 99;
opacity: 0;
visibility: hidden;
background: #fff;
box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
transition: 0.3s;
}
.navbar .dropdown ul li {
min-width: 200px;
}
.navbar .dropdown ul a {
padding: 10px 20px;
font-weight: 400;
}
.navbar .dropdown ul a i {
font-size: 12px;
}
.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
color: #106eea;
}
.navbar .dropdown:hover > ul {
opacity: 1;
top: 100%;
visibility: visible;
}
.navbar .dropdown .dropdown ul {
top: 0;
left: calc(100% - 30px);
visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
opacity: 1;
top: 0;
left: 100%;
visibility: visible;
}
@media (max-width: 1366px) {
.navbar .dropdown .dropdown ul {
  left: -90%;
}
.navbar .dropdown .dropdown:hover > ul {
  left: -100%;
}
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
color: #222222;
font-size: 28px;
cursor: pointer;
display: none;
line-height: 0;
transition: 0.5s;
}
.mobile-nav-toggle.bi-x {
color: #fff;
}

@media (max-width: 991px) {
.mobile-nav-toggle {
  display: block;
}

.navbar ul {
  display: none;
}
}
.navbar-mobile {
position: fixed;
overflow: hidden;
top: 0;
right: 0;
left: 0;
bottom: 0;
background: rgba(9, 9, 9, 0.9);
transition: 0.3s;
z-index: 999;
}
.navbar-mobile .mobile-nav-toggle {
position: absolute;
top: 15px;
right: 15px;
}
.navbar-mobile ul {
display: block;
position: absolute;
top: 55px;
right: 15px;
bottom: 15px;
left: 15px;
padding: 10px 0;
background-color: #fff;
overflow-y: auto;
transition: 0.3s;
}
.navbar-mobile a, .navbar-mobile a:focus {
padding: 10px 20px;
font-size: 15px;
color: #222222;
}
.navbar-mobile > ul > li {
padding: 0;
}
.navbar-mobile a:hover:before, .navbar-mobile li:hover > a:before, .navbar-mobile .active:before {
visibility: hidden;
}
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
color: #4A312C;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
margin: 15px;
}
.navbar-mobile .dropdown ul {
position: static;
display: none;
margin: 10px 20px;
padding: 10px 0;
z-index: 99;
opacity: 1;
visibility: visible;
background: #fff;
box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
min-width: 200px;
}
.navbar-mobile .dropdown ul a {
padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
color: #4A312C;
}
.navbar-mobile .dropdown > .dropdown-active {
display: block;
}

/*Header End*/
#sidebar{
  width: 20%;
  padding: 10px;
  margin: 0;
  float: left;
}
#umkm{
  width: 80%;
  padding: 10px;
  margin: 0;
  float: right;
}
ul{
  list-style: none;
  padding: 5px;
}
li a{
  color: #25262B;
  text-decoration: none;
}
li a:hover{
  text-decoration: none;
  color: #25262B;
}
.fa-circle{
  font-size: 20px;
}

.search{
  padding-bottom: 10px;
}

/*Card start*/
.card{
  width: 100%;
  display: inline-block;
  height: 300px;
  background-color:  #EEE8E1;
  color: #562016;
  border-radius: 15px;
  margin: 0.5rem auto 0.5rem auto;
  box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
}
.card-img-top{
  width: 250px;
  height: 180px;
  border-radius: 15px;
}
.card-body p{
  margin: 2px;
  width: 500px;    
}
.card-body{
  padding: 7px 7px ;
  
}
.filter{
  display: none;
  padding: 0;
  margin: 0;
}
.container{
  padding-top: 12px;
}
.categoryprod{
  font-size: 14px;
  color: #562016;
}
.originprod{
  font-size: 14px;
  color: #562016;
}
/*Card end*/

/* navigation page */
.pagination a {
color: #25262B;
float: center;
padding: 8px 16px;
text-decoration: none;
transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
background-color: #25262B;
color: #EEE8E1;
border-radius: 5px;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {background-color: #ddd;}

/*responsive navbar start*/
@media(min-width:991px){
  .navbar-nav{
      margin-left: 35%;
      color: #25262B;
  }
  .nav-item{
      padding-left: 20px;
  }
  .card{
      width: 190px;
      display: inline-block;
      height: 300px;
  }
  .card-img-top{
      width: 188px;
      height: 210px;
  }
  #mobile-filter{
      display: none;
  }
}
/*responsive navbar end*/
@media(min-width:768px) and (max-width:991px){
  .navbar-nav{
      margin-left: 20%;
  }
  .nav-item{
      padding-left: 10px;
  }
  .card{
      width: 230px;
      display: inline-block;
      height: 300px;
      margin-bottom: 10px;
  }
  .card-img-top{
      width: 230px;
      height: 210px;
  }
  #mobile-filter{
      display: none;
  }
}
@media(min-width:568px) and (max-width:767px){
  .navbar-nav{
      margin-left: 20%;
  }
  .nav-item{
      padding-left: 10px;
  }
  .card{
      width: 205px;
      display: inline-block;
      height: 300px;
      margin-bottom: 10px;
  }
  .card-img-top{
      width: 203px;
      height: 210px;
  }
  .fa-circle{
      font-size: 15px;
  }
  #mobile-filter{
      display: none;
  }
}
@media(max-width:567px){
  .navbar-nav{
      margin-left: 0%;
  }
  .nav-item{
      padding-left: 10px;
  }
  #sidebar{
      width: 100%;
      padding: 10px;
      margin: 0;
      float: left;
  }
  #umkm{
      width: 90%;
      padding: 5px;
      margin: 0;
      float: right;
  }
  .card{
      width: 230px;
      display: inline-block;
      height: 300px;
      margin-bottom: 10px;
      margin-top: 10px;
      border-width: 2px;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
  }
  .card-img-top{
      width: 230px;
      height: 210px;
  }
  .list-group-item{
      padding: 3px;
  }
  .offset-1{
      margin-left: 0%;
  }
  .filter{
      display: block;
      margin-left: 70%;
      margin-top: 2%;
  }
  #sidebar{
      display: none;
  }
  #mobile-filter{
      padding: 10px;
  }
}
</style>