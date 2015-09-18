@extends('frontend.layout.master')
@section('content')
    <div class="container about-container">
        <div class="row clearfix">
            <div class="container">

                <!-- Page Heading/Breadcrumbs -->
                <div class="row wow slideInLeft">
                    <div class="col-lg-12">
                        <div class="breadcrumb">
                            <a href="{{URL::to('/about')}}">About</a>
                            <a href="#" class="active">{{Lang::get('site.events')}}</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Content Row -->
                <div class="row">
                    <!-- Sidebar Column -->
                    <div class="col-md-3 wow slideInLeft">
                        <div class="list-group custom-list">
                            <a href="{{URL::to('/about')}}" class="list-group-item ">About company</a>
                            <a href="{{URL::to('/team')}}" class="list-group-item">D-Gap team</a>
                            <a h href="{{URL::to('/why-us')}}" class="list-group-item ">Why Chose us</a>
                            <a href="{{URL::to('/events')}}" class="list-group-item active">Events</a>
                        </div>
                    </div>
                    <!-- Content Column -->
                    <div class="col-md-9  wow slideInRight">
                        <div class="row right-container clearfix nomargin">
                            <div class="col-md-12">
                                <h2>{{Lang::get('site.events')}}</h2>
                            </div>

                            @foreach($events as $event)
                                <div class="col-md-4 text-center">
                                    <div class="thumbnail">
                                        @if($event->EventImages==null)
                                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                                        @else
                                            <img class="img-responsive" src="{{URL::to('/').'/'.$event->EventImages->first()->img_location}}" alt="">
                                        @endif
                                        <div class="caption">
                                            <h3>{{$event->event_name}}<br>
                                                <small><span><i class=" fa fa-map-marker color-tag"></i> {{$event->event_location}}</span></small><br/>
                                                <small><span><i class=" fa  fa-calendar color-tag"></i> {{date('l jS \of F Y h:i:s A',$event->event_time)}}</span></small>

                                            </h3>
                                            @if(strlen ($event->even_description)>50)
                                                <?php $str = substr($event->even_description, 0, strpos($event->even_description, ' ', 50)) . "..."; ?>
                                                <p>
                                                    {!!html_entity_decode($str)!!}
                                                </p>
                                            @else
                                                <p>
                                                    {!!$event->even_description!!}
                                                </p>
                                            @endif
                                            <a data-title="{{$event->event_name}}" href="#" data-id="{{$event->event_id}}"
                                               data-toggle="modal" data-target="#event-modal" class="btn btn-warning btn-event">Read
                                                More</a>
                                            {{--<ul class="socials">--}}
                                                {{--<li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>--}}
                                                {{--<li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>--}}
                                                {{--<li><a href=""><i class="fa fa-google-plus fa-2x"></i></a></li>--}}
                                            {{--</ul>--}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
        <!-- Modal -->
        <div id="event-modal" class="modal fade" role="dialog">
            <div class="modal-dialog custom-modal-prod modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Event Details</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                    {{--</div>--}}
                </div>

            </div>
        </div>
    </div>
@stop