<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::to('resources/assets/frontend/css/owl.carousel.css')}}">
    <link href="{{URL::to('resources/assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::to('resources/assets/frontend/css/style.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::to('resources/assets/frontend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<div class="container">
    <div class="row head-block clearfix">
        <div class="col-md-3">
            <div class="logo-div">
                <img src="{{URL::to('resources/assets/frontend/images/logo.png')}}">
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 pull-right">
            <ul class="top-logon">
                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>Create an account</a></li>
                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>Login</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row clearfix">
        <nav class="navbar navbar-inverse nav-new">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Products</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>

<!-- Header Carousel -->
<div class="container">
    <div class="row clearfix">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators indicate-margin">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active custom-carousel">
                    <img class="img-responsive" src="{{URL::to('resources/assets/frontend/images/banner1.png')}}" alt="...">

                    <div class="carousel-caption">
                        <span>This is a caption</span>
                    </div>
                </div>
                <div class="item custom-carousel">
                    <img class="img-responsive" src="{{URL::to('resources/assets/frontend/images/banner2.png')}}" alt="...">

                    <div class="carousel-caption">
                        <span> This is another caption</span>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>

<!-- Page Content -->
<div class="container ">
    <!-- Marketing Icons Section -->
    <div class="row search-container">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-pied-piper-alt"></i> Select by vehicle</h4>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <select class="form-control">
                            <option>Select 1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option>Select 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option>Select 3</option>
                        </select>
                    </div>
                    <a href="#" class="btn btn-warning">Search</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                        aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                        eveniet incidunt dicta nostrum quod?</p>
                    <a href="#" class="btn btn-warning">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-compass"></i> Services</h4>
                </div>
                <div class="panel-body">
                    <ul class="notify-ul">
                        <li>
                            <a href="">
                                <p>

                                <div class="small"><i class="fa fa-thumbs-up fa-2x"></i></div>
                                100% satisfaction guaranteed</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>

                                <div class="small"><i class="fa fa-cab fa-2x"></i></div>
                                Free shipping on orders over 99$</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>

                                <div class="small"><i class="fa fa-reply fa-2x"></i></div>
                                7 day easy return</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix nomargin">


            <div class="customNavigation">
                <a class="btn prev"><i class="fa fa-chevron-left"></i></a>
                <a class="btn next"><i class="fa fa-chevron-right"></i></a>
            </div>

            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="{{URL::to('resources/assets/frontend/images/bmw.png')}}"></div>
                <div class="item"><img src="{{URL::to('resources/assets/frontend/images/marc.png')}}"></div>
                <div class="item"><img src="{{URL::to('resources/assets/frontend/images/audi.png')}}"></div>
                <div class="item"><img src="{{URL::to('resources/assets/frontend/images/porche.png')}}"></div>
                <div class="item"><img src="{{URL::to('resources/assets/frontend/images/opel.png')}}"></div>
                <div class="item"><img src="{{URL::to('resources/assets/frontend/images/voxs.png')}}"></div>
            </div>


        </div>
    </div>
    <!-- /.row -->


    <div class="row clearfix product-container">
        <div class="col-lg-12">
            <h4 class="page-header text-uppercase all-head">Featured Products</h4>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="span-tag">Featured</div>
                <div class="panel-heading">
                    <img src="{{URL::to('resources/assets/frontend/images/h1.jpg')}}">
                </div>
                <div class="panel-body">
                    <h4>Product 1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="#" class="btn btn-warning">Buy now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <img src="{{URL::to('resources/assets/frontend/images/h2.jpg')}}">
                </div>
                <div class="panel-body">
                    <h4>Product 2</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="#" class="btn btn-warning">Buy now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <img src="{{URL::to('resources/assets/frontend/images/h4.jpg')}}">
                </div>
                <div class="panel-body">
                    <h4>Product 3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="#" class="btn btn-warning">Buy now</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <img src="{{URL::to('resources/assets/frontend/images/h3.jpg')}}">
                </div>
                <div class="panel-body">
                    <h4>Product 4</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="#" class="btn btn-warning">Buy now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="row">
        <div class="col-md-12 footer-container">
            <div class="col-md-3">
                <h4 class="all-head footer-head">Information</h4>
                <ul class="footer-links">
                    <li><a href=""><i class="fa fa-arrow-right"></i>About us</a> </li>
                    <li><a href=""><i class="fa fa-arrow-right"></i>Terms and Conditions</a> </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="all-head footer-head">Customer service</h4>
                <ul class="footer-links">
                    <li><a href=""><i class="fa fa-arrow-right"></i>Contact us</a> </li>
                    <li><a href=""><i class="fa fa-arrow-right"></i>Feedback</a> </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="all-head footer-head">Account</h4>
                <ul class="footer-links">
                    <li><a href=""><i class="fa fa-arrow-right"></i>My account</a> </li>
                    <li><a href=""><i class="fa fa-arrow-right"></i>Wishlist</a> </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="all-head footer-head">Follow us</h4>
                <ul class="socials">
                    <li><a href=""><i class="fa fa-facebook fa-2x"></i></a> </li>
                    <li><a href=""><i class="fa fa-twitter fa-2x"></i></a> </li>
                    <li><a href=""><i class="fa fa-google-plus fa-2x"></i></a> </li>
                </ul>
            </div>
        </div>
        <div class="col-md-12 copyright-block">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{URL::to('resources/assets/frontend/js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::to('resources/assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('resources/assets/frontend/js/owl.carousel.js')}}"></script>
<script>

    $(document).ready(function () {

        var owl = $("#owl-demo");

        owl.owlCarousel({
            autoPlay: 3000,
            stopOnHover: true,
            transitionStyle: "fade"
        });


        // Custom Navigation Events
        $(".next").click(function () {
            owl.trigger('owl.next');
        })
        $(".prev").click(function () {
            owl.trigger('owl.prev');
        })

    });


</script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
