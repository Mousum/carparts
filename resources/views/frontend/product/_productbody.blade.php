<!-- Content Row -->
<div class="row clearfix">
    <div class="col-md-12">
        <div class="well clearfix prod-detail-container">
            <div class="col-md-6 product-image-container wow slideInLeft">
                <div class="row">
                    <?php $images = json_decode($product->product_images); ?>
                    @if($images!=null)
                        <?php list($name, $ext) = explode('.', $images[0]);?>

                        <div class="col-xs-12 col-md-12">
                            <a href="#" class="thumbnail">
                                <img class="img-responsive large"
                                     src="{{URL::to('uploads/product_images/'. $name.'_500x450.'.$ext)}}">
                            </a>
                        </div>
                    @else
                        <div class="col-xs-12 col-md-12">
                            <a href="#" class="thumbnail">
                                <img class="img-responsive" src="http://placehold.it/500x450" alt="...">
                            </a>
                        </div>
                    @endif
                </div>
                <div class="row">
                    @if($images!=null)
                        @foreach($images as $key=>$value)
                            <div class="col-xs-6 col-md-4">
                                <?php list($name, $ext) = explode('.', $value);?>

                                <a href="#" class="thumbnail small-pic"
                                   data-value="{{URL::to('uploads/product_images/'. $name.'_500x450.'.$ext)}}">
                                    <img class="img-responsive"
                                         src="{{URL::to('uploads/product_images/'.$name.'_150x150.'.$ext)}}">

                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-xs-6 col-md-4">
                            <a href="#" class="thumbnail">
                                <img class="img-responsive" src="http://placehold.it/150x150" alt="...">
                            </a>
                        </div>
                    @endif

                </div>
            </div>
            <div class="col-md-6 wow slideInRight">
                <h4 class="text-uppercase">{{$product->product_name}}</h4>
                <h5 class="prod-code">Product code: <span> {{$product->product_code}} </span></h5>

                <p class="desc">
                    <span>Description:</span>
                    <?php $descritons = json_decode($product->product_meta_descriptions); ?>
                    @if($descritons!=null)
                        @foreach($descritons as $des)
                            {{$des->key}} : {{$des->value}}<br>
                        @endforeach

                    @endif

                </p>

                <p class="price">Price : $ {{$product->product_price}}</p>
                <a data-role="button" href="{{URL::to('productdetails/'.$product->product_id.'-'.str_replace(' ','-',strtolower($product->product_name)))}}" class="btn btn-info">View Full Details</a>


                {{--<div class="share-div">--}}
                {{--<p>Share on:</p>--}}
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
