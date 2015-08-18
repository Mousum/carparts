@extends('layout.master')
@section('content')
    <h2 class="margin-none">Add Product&nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

    <div class="separator-h"></div>
    <form method="post" action="{{URL::to('products/save')}}" enctype="multipart/form-data">
        <div class="row">

            <div class="col-md-6">
                <div class="widget-head">
                    <?php if($errors->first() != ""){?>
                    <div class="alert alert-danger ">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>

                        {{$errors->first()}}
                    </div>
                    <?php }?>
                </div>
                <div class="widget widget-heading-simple widget-body-white">

                    <!-- Widget heading -->
                    <div class="widget-head">
                        <h4 class="heading">Product Name</h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <input type="text" name="product_name"  value="{{old('product_name')}}" placeholder="Product name" class="form-control"
                               style="color:black !important;">
                    </div>

                    <!-- Widget heading -->
                    <div class="widget-head">
                        <h4 class="heading">Price</h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <input type="text" name="product_price" value="{{old('product_price')}}"placeholder="Price" class="form-control"
                               style="color:black !important;">
                    </div>
                    <div class="widget-head">
                        <h4 class="heading">Department Name </h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <select name="product_department" class="form-control"
                                style="color:black !important;">
                            <option value="">Select department</option>
                            @foreach($depts as $dept)
                                <option value="{{$dept->department_id}}">{{$dept->department_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="widget-head">
                        <h4 class="heading">For Vehicle </h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <select multiple id="multiselect-custom" name="vehicle[]" class="multiselect form-control" >
                            @foreach($brands as $brand)
                                <option value="{{$brand->vehicle_id}}">{{$brand->vehicle_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="widget-head">
                        <h4 class="heading">Product Images</h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body images">
                        <input type="file" class="form-control files" name="product_images[]">
                    </div>
                    <a class="btn btn-info btn-small add-more-images" href="javascript:void(0)"><i
                                class="icon-add-symbol"></i></a>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="widget-head">
                        <h4 class="heading">Product Descriptions</h4>
                    </div>
                    <!-- // Widget heading END -->
                    <div class="row description">
                        <div class="widget-body ">
                            <div style="width: 40% ;float: left;">
                                <input type="text"  name="product_description_key[]" placeholder="" autocomplete="off"
                                       class="form-control key" onkeyup="getDescriptionMeta(this)"
                                       style="color:black !important;">
                            </div>
                            <div style="width: 55% ;float: right;">
                            <textarea name="product_description_value[]" placeholder=""  class="form-control value"
                                      style="color:black !important;"></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-head">
                        <a class="btn btn-info btn-small add-more-description" href="javascript:void(0)"
                           style="margin-top: 30px;"><i class="icon-add-symbol"></i></a>
                    </div>
                    <div class="widget-head">
                       <input type="checkbox" name="is_frontpage" class="checkbox "> Is it front page product?
                    </div>
                    <div class="widget-head">
                        <input type="checkbox" name="is_special" class="checkbox "> Is it a special product?
                    </div>
                </div>
            </div>
            <button id="save" class="btn btn-success"><i class="icon-add-symbol"></i> Save</button>
            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancel</button>
        </div>
    </form>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="{{URL::to('resources/assets/components/common/forms/elements/multiselect/assets/lib/js/jquery.multi-select.js?v=v1.0.2&sv=v0.0.1')}}"></script>
    <script src="{{URL::to('resources/assets/components/common/forms/elements/multiselect/assets/custom/js/multiselect.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
    <script>
        $(document).ready(function () {
            $(".add-more-images").click(function () {
                if ($(".files").last().val() != '') {
                    $(".images").append(' <input type="file"  class="form-control" name="product_images[]">');
                }

            });
            $(".add-more-description").click(function () {
                if ($(".key").last().val() != '' && $(".value").last().val() != '') {
                    $(".description").append('<div class="widget-body "> <div style="width: 40% ;float: left;"><input type="text"  name="product_description_key[]" placeholder="" onkeyup="getDescriptionMeta(this)" autocomplete="off" class="form-control key"' +
                    'style="color:black !important;"></div> <div style="width: 55% ;float: right;"><textarea name="product_description_value[]" placeholder="" id="value" class="form-control"' +
                    'style="color:black !important;"></textarea> </div></div> <div class="clearfix"></div>');
                }

            });
        });
        function getDescriptionMeta(e){
            $.get( $("#base_url").val() + "/products/getDescriptionMeta?keyword="+e.value,function(data){
                availableTags = $.parseJSON(data);
                $( ".key" ).autocomplete({
                    source: availableTags
                });
            });
        }

    </script>

@stop