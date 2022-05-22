<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<link rel="icon" type="image/x-icon" href="/images/l.png">
<title>Aswana.ry | Category Product</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="assetz/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assetz/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom">
    <image src="/images/l.png" width="10%"></image>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a> </li>
            <li class="nav-item"><a class="nav-link" href="#"><b>Category</b></a> </li>                
            <li class="nav-item "><a class="nav-link" href="#">About Us</a> </li>
        </ul>        
    </div>
    </div>    
</nav>
<div class="filter">
    <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div>
<div id="mobile-filter">
    <div>
        <h6 class="p-1 border-bottom">Category</h6>
        <ul>
            <li><a href="#">Living</a></li>
            <li><a href="#">Dining</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Bedroom</a></li>
            <li><a href="#">Kitchen</a></li>
        </ul>
    </div>
    <div>
        <h6 class="p-1 border-bottom">Filter By</h6>
        <p class="mb-2">Color</p>
        <ul class="list-group">
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                <span class="fa fa-circle pr-1" id="red"></span>Red
            </a></li>
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                <span class="fa fa-circle pr-1" id="teal"></span>Teal
            </a></li>
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                <span class="fa fa-circle pr-1" id="blue"></span>Blue
            </a></li>
        </ul>
    </div>
    <div>
        <h6>Type</h6>
        <form class="ml-md-2">
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="radio" name="type" id="boring">
                <label for="boring" class="pl-1 pt-sm-0 pt-1">Boring</label>
            </div>
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="radio" name="type" id="ugly">
                <label for="ugly" class="pl-1 pt-sm-0 pt-1">Ugly</label>
            </div>
            <div class="form-inline border rounded p-md-2 p-sm-1">
                <input type="radio" name="type" id="notugly">
                <label for="notugly" class="pl-1 pt-sm-0 pt-1">Not Ugly</label>
            </div>
        </form>
    </div>
</div>

<!--Sidebar-->
<section id="sidebar">
    <div class="border-bottom pb-2 ml-2">
        <h5 id="burgundy">Filters</h5>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group">
                <input type="checkbox" id="artisan">
                <label for="artisan">Beauty</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="breakfast">
                <label for="breakfast">Culture & Creative</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="healthy">
                <label for="healthy">Halal</label>
            </div>        
            <div class="form-group">
                <input type="checkbox" id="breakfast">
                <label for="breakfast">Herbs & Spices</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="healthy">
                <label for="healthy">Fishery</label>
            </div>    
            <div class="form-group">
                <input type="checkbox" id="breakfast">
                <label for="breakfast">Agriculture</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="healthy">
                <label for="healthy">Food</label>
            </div>    
            <div class="form-group">
                <input type="checkbox" id="breakfast">
                <label for="breakfast">Automotive</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="healthy">
                <label for="healthy">Electronic</label>
            </div>    
            <div class="form-group">
                <input type="checkbox" id="breakfast">
                <label for="breakfast">Food & Drinks</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="healthy">
                <label for="healthy">Household Needs</label>
            </div>                            
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Regions</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group">
                <input type="checkbox" id="tea">
                <label for="tea">Sumatera</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="cookies">
                <label for="cookies">Java</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="pastries">
                <label for="pastries">Kalimantan</label>
            </div>                                
            <div class="form-group">
                <input type="checkbox" id="dough">
                <label for="dough">Papua</label>
            </div>                                
            <div class="form-group">
                <input type="checkbox" id="choco">
                <label for="choco">Sulawesi</label>
            </div>                                
        </form>
    </div>
</section>

<!--Product-->
<section id="products">
<div class="border-bottom pb-2 ml-2">
<h4 id="burgundy">Products</h4>
</div> 
<div class="search pb-2 ml-2">
<input type="text" placeholder="Search Product..">
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/963486/pexels-photo-963486.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>Slim Wooden Chair</b></p>
                  <p class="categoryprod">Household Needs</p>
                  <p class="originprod">East Java, Surabaya</p>
   
                </div>
              </div>
        </div>
        <div class="col-lg-3 offset-lg-0 col-sm-4 offset-sm-2 col-11 offset-1">
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/1125137/pexels-photo-1125137.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>Chair and Table Set </b></p>
                  <p class="categoryprod">Household Needs</p>
                  <p class="originprod">East Java, Surabaya</p>    
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/3757055/pexels-photo-3757055.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>Leather Lounger</b></p>
                  <p class="categoryprod">Household Needs</p>
                  <p class="originprod">East Java, Surabaya</p>      
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
            <div class="card">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1537182534312-f945134cce34?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>Tree Trunk Table Set</b></p>
                  <p class="categoryprod">Household Needs</p>
                  <p class="originprod">East Java, Surabaya</p>     
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/3230274/pexels-photo-3230274.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>Red Leather Bar Stool</b></p>
                  <p class="categoryprod">Household Needs</p>
                  <p class="originprod">East Java, Surabaya</p>      
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/3773571/pexels-photo-3773571.png?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>Modern Dining Table</b></p>
                  <p class="categoryprod">Household Needs</p>
                  <p class="originprod">East Java, Surabaya</p>       
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-11 offset-sm-0 offset-1">
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/534172/pexels-photo-534172.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>Boring Dining Table</b></p>
                  <p class="categoryprod">Household Needs</p>
                  <p class="originprod">East Java, Surabaya</p>        
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-sm-4 offset-lg-0 offset-sm-2 col-11 offset-1">
            <div class="card">
                <img class="card-img-top" src="https://images.pexels.com/photos/37347/office-sitting-room-executive-sitting.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>An Ugly Office</b></p>
                  <p class="categoryprod">Household Needs</p>
                  <p class="originprod">East Java, Surabaya</p>      
                </div>
            </div>
        </div>
    </div>
</div>
</section>  
</body>

<script src="assetz/js/bootstrap.bundle.min.js"></script>
<script src="assetz/js/jquery.min.js"></script>

</html>

<style>
    *{
    box-sizing: border-box;
}
body{
    color: #25262B;
}
#sidebar{
    width: 20%;
    padding: 10px;
    margin: 0;
    float: left;
}
#products{
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

.card{
    width: 600px;
    display: inline-block;
    height: 300px;
    background-color: #25262B;
    color: #DACBBC;
    border-radius: 10px;
    border-width: 0;
}
.card-img-top{
    width: 250px;
    height: 210px;
    border-radius: 10px;
}
.card-body p{
    margin: 2px;
    width: 500px;    
}
.card-body{
    padding: 7px 7px;
    
}
.filter{
    display: none;
    padding: 0;
    margin: 0;
}
.container{
    padding-top: 15px;
}
.categoryprod{
    font-size: 14px;
    color:  #DACBBC;
}
.originprod{
    font-size: 14px;
    color: #DACBBC;
}

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
    #products{
        width: 100%;
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
    }
    .card-img-top{
        width: 230px;
        height: 210px;
    }
    .list-group-item{
        padding: 3px;
    }
    .offset-1{
        margin-left: 8%;
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

