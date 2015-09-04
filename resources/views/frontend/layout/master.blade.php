<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @if(isset($siteTitle)&& $siteTitle!='')
            {{$siteTitle}}
        @else
            {{Lang::get("site.company_name")}}
        @endif

    </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::to('resources/assets/frontend/css/owl.carousel.css')}}">
    <link href="{{URL::to('resources/assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::to('resources/assets/frontend/css/style.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::to('resources/assets/frontend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">

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
                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>{{Lang::get('site.create_account')}}</a></li>
                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>{{Lang::get('site.login')}}</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="baseurl" data-content="{{URL::to('/')}}"></div>
<div class="container">
    @include('frontend.layout.header')
</div>

<!-- Header Carousel -->

@yield('content')


<!-- Footer -->
<footer class="row">
    <div class="col-md-12 footer-container">
        <div class="col-md-3">
            <h4 class="all-head footer-head">Information</h4>
            <ul class="footer-links">
                <li><a href=""><i class="fa fa-arrow-right"></i>About us</a></li>
                <li><a href=""><i class="fa fa-arrow-right"></i>Terms and Conditions</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4 class="all-head footer-head">Customer service</h4>
            <ul class="footer-links">
                <li><a href=""><i class="fa fa-arrow-right"></i>Contact us</a></li>
                <li><a href=""><i class="fa fa-arrow-right"></i>Feedback</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4 class="all-head footer-head">Account</h4>
            <ul class="footer-links">
                <li><a href=""><i class="fa fa-arrow-right"></i>My account</a></li>
                <li><a href=""><i class="fa fa-arrow-right"></i>Wishlist</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4 class="all-head footer-head">Follow us</h4>
            <ul class="socials">
                <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
                <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus fa-2x"></i></a></li>
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
<script src="{{URL::to('resources/assets/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::to('resources/assets/frontend/js/frontend.custom.js')}}"></script>
<script>

    $(document).ready(function () {

        var owl =  $("#owl-demo");
        owl.owlCarousel({
            items:5,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            transitionStyle : "fade"
        });


       //  Custom Navigation Events
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
