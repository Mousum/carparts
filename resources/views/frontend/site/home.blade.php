@extends('frontend.layout.master')
@section('content')
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
                        <img class="img-responsive" src="{{URL::to('resources/assets/frontend/images/banner1.png')}}"
                             alt="...">

                        <div class="carousel-caption">
                            <span>This is a caption</span>
                        </div>
                    </div>
                    <div class="item custom-carousel">
                        <img class="img-responsive" src="{{URL::to('resources/assets/frontend/images/banner2.png')}}"
                             alt="...">

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
                            <select class="form-control" id="brand">
                                <option value="">Select Brand</option>
                                @foreach($brands as $item)
                                    <option value="{{$item->brand_id}}">{{$item->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="model">
                                <option value="">Select Model</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="engine">
                                <option value="">Select Engine</option>
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


                <div class="customNavigation" style="visibility: hidden;">
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
            @foreach($featuredproducts as $product)
                <div class="col-md-3 col-sm-6">
                    <div class="panel panel-default text-center">
                        @if($product->is_special)
                            <div class="span-tag">Special</div>
                        @endif
                        <div class="panel-heading">
                            <?php $images = json_decode($product->product_images); ?>
                            @if($images!=null)
                                <?php list($name, $ext) = explode('.', $images[0]);?>
                                <img src="{{URL::to('uploads/product_images/'.$name.'_thumb.'.$ext)}}" width="204px"
                                     height="210px">
                            @else
                                <img src="{{URL::to('uploads/product_images/no_image.jpg')}}" width="204px"
                                     height="210px">
                            @endif
                        </div>
                        <div class="panel-body">
                            <h4>{{$product->product_name}}</h4>

                            <p>{{$product->Departments->department_name}} </p>
                            <h5><i class="fa fa-money"></i> {{$product->product_price}}</h5>

                            <a data-title="{{$product->product_name}}" href="#" data-id="{{$product->product_id}}"
                               data-toggle="modal" data-target="#product-modal" class="btn btn-warning btn-details">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach


            <div class="col-md-10">
                {!! $featuredproducts->render() !!}
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="product-modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Quick View</h4>
                </div>
                <div class="modal-body">

                </div>
                {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            </div>

        </div>
    </div>
@stop