@extends('frontend.layout.master')
@section('content')
    <div class="container about-container">
        <div class="row clearfix">
            <div class="container">

                <!-- Page Heading/Breadcrumbs -->
                <div class="row wow slideInLeft">
                    <div class="col-lg-12">
                        <div class="breadcrumb">
                            <a href="#" class="active">About</a>
                            <a href="{{URL::to('/about')}}">{{Lang::get('site.why_us')}}</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Content Row -->
                <div class="row">
                    <!-- Sidebar Column -->
                    <div class="col-md-3 wow slideInLeft">
                        <div class="list-group custom-list">
                            <a href="{{URL::to('/about')}}" class="list-group-item">About company</a>
                            <a href="{{URL::to('/team')}}" class="list-group-item">D-Gap team</a>
                            <a h href="{{URL::to('/why-us')}}" class="list-group-item active">Why Chose us</a>
                            <a  href="{{URL::to('/events')}}"class="list-group-item">Events</a>
                        </div>
                    </div>
                    <!-- Content Column -->
                    <div class="col-md-9  wow slideInRight">
                        <div class="row right-container clearfix nomargin">
                            <div class="col-md-12" >
                                <h2>{{Lang::get('site.why_us')}}</h2>
                            </div>

                            <div class="col-md-12 text-center">
                                {!!$content->content!!}
                            </div>
                            {{--<div class="col-md-4 text-center">--}}
                            {{--<div class="thumbnail">--}}
                            {{--<img class="img-responsive" src="http://placehold.it/750x450" alt="">--}}

                            {{--<div class="caption">--}}
                            {{--<h3>John Smith<br>--}}
                            {{--<small>Job Title</small>--}}
                            {{--</h3>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam--}}
                            {{--nesciunt maxime.</p>--}}
                            {{--<ul class="socials">--}}
                            {{--<li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>--}}
                            {{--<li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>--}}
                            {{--<li><a href=""><i class="fa fa-google-plus fa-2x"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4 text-center">--}}
                            {{--<div class="thumbnail">--}}
                            {{--<img class="img-responsive" src="http://placehold.it/750x450" alt="">--}}

                            {{--<div class="caption">--}}
                            {{--<h3>John Smith<br>--}}
                            {{--<small>Job Title</small>--}}
                            {{--</h3>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam--}}
                            {{--nesciunt maxime.</p>--}}
                            {{--<ul class="socials">--}}
                            {{--<li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>--}}
                            {{--<li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>--}}
                            {{--<li><a href=""><i class="fa fa-google-plus fa-2x"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop