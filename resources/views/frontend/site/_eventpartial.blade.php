<!-- Content Row -->
{{--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53ce50fd69757b5d" async="async"></script>--}}
<div class="row clearfix">
    <div class="col-md-12">
        <div class="well clearfix prod-detail-container">
            <div class="col-md-6 product-image-container">
                <div class="row">

                    @if($event->EventImages!=null)


                        <div class="col-xs-12 col-md-12">
                            <a href="#" class="thumbnail">
                                <img class="img-responsive large"
                                     src="{{URL::to('/').'/'.$event->EventImages->first()->img_location}}">
                            </a>
                        </div>
                    @else
                        <div class="col-xs-12 col-md-12">
                            <a href="javascript:void(0);" class="thumbnail">
                                <img class="img-responsive" src="http://placehold.it/500x450" alt="...">
                            </a>
                        </div>
                    @endif
                </div>
                <div class="row">
                    @if($event->EventImages!=null)
                        @foreach($event->EventImages as $image)
                            <div class="col-xs-6 col-md-4">

                                <a href="javascript:void(0);" class="thumbnail small-pic"
                                   data-value="{{URL::to('/').'/'.$image->img_location}}">
                                    <img class="img-responsive"
                                         src="{{URL::to('/').'/'.$image->img_location}}">

                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-xs-6 col-md-4">
                            <a href="javascript:void(0);" class="thumbnail">
                                <img class="img-responsive" src="http://placehold.it/150x150" alt="...">
                            </a>
                        </div>
                    @endif

                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-uppercase">{{$event->event_name}}</h4>
                <h5 class="prod-code"> <small><span><i class=" fa fa-map-marker color-tag"></i> {{$event->event_location}}</span></small><br/>
                    <small><span><i class=" fa  fa-calendar color-tag"></i> {{date('l jS \of F Y h:i:s A',$event->event_time)}}</span></small></h5>

                <p class="desc">
                   {{$event->even_description}}

                </p>

                {{--<p class="price">Price : <span class="color-tag">$ {{$product->product_price}}</span></p>--}}
                {{--<a data-role="button"--}}
                   {{--href="{{URL::to('productdetails/'.$product->product_id.'-'.str_replace(' ','-',strtolower($product->product_name)))}}"--}}
                   {{--class="btn btn-warning">More Details</a>--}}


                {{--<div class="share-div">--}}
                {{--<p>Share on:</p>--}}
                {{--<div class="addthis_sharing_toolbox"></div>--}}
                {{--<ul class="socials">--}}
                {{--<li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>--}}
                {{--<li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>--}}
                {{--<li><a href=""><i class="fa fa-google-plus fa-2x"></i></a></li>--}}
                {{--</ul>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
</div>
<script>
    $(".small-pic").click(function () {
        $(".large").attr('src', $(this).attr("data-value"));
    });
</script>
