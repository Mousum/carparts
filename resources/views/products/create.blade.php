@extends('layout.master')
@section('content')
    <h2 class="margin-none">Add Product&nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

    <div class="separator-h"></div>

    <div class="row">
        <form method="post" action="{{URL::to('/saveproducts')}}">
            <div class="col-md-10">
                <div class="widget widget-heading-simple widget-body-white">

                    <!-- Widget heading -->
                    <div class="widget-head">
                        <h4 class="heading">Product Name</h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <input type="text" name="product_name" placeholder="Product name" class="form-control"
                               style="color:black !important;">
                    </div>

                    <!-- Widget heading -->
                    <div class="widget-head">
                        <h4 class="heading">Price</h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <input type="text" name="product_price" placeholder="Price" class="form-control"
                               style="color:black !important;">
                    </div>
                    <div class="widget-head">
                        <h4 class="heading">Department Name </h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <select name="deptment"  class="form-control"
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
                        <select multiple id="multiselect-custom" class="multiselect form-control" name="roomfeatures[]">
                            @foreach($brands as $brand)
                            <option value="{{$brand->vehicle_id}}">{{$brand->vehicle_name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <button id="save" class="btn btn-success"><i class="icon-add-symbol"></i> Save</button>
                <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancel</button>
            </div>
        </form>

    </div>
    <script src="{{URL::to('resources/assets/components/common/forms/elements/multiselect/assets/lib/js/jquery.multi-select.js?v=v1.0.2&sv=v0.0.1')}}"></script>
    <script src="{{URL::to('resources/assets/components/common/forms/elements/multiselect/assets/custom/js/multiselect.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
@stop