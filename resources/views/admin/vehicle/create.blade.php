@extends('admin.layout.master')
@section('content')
    <h2 class="margin-none">Add Vehicle &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

    <div class="separator-h"></div>


    <div class="row">
        <form method="post" action="{{URL::to('admin/vehicle/save')}}">

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
                        <h4 class="heading"> Vehicle Name </h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <input type="text" name="vehicle_name" placeholder="Vehicle Name" class="form-control"
                               value="{{old('vehicle_name')}}" style="color:black !important;">
                    </div>

                    <div class="widget-head">
                        <h4 class="heading"> Vehicle Brand</h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <select name="vehicle_brand" id="brand" class="form-control" value="">
                            <option value="">Select Brand</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand['brand_id']}}">{{$brand['brand_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="widget-head">
                        <h4 class="heading"> Vehicle Model</h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <select name="model" id="model" class="form-control">

                        </select>
                    </div>
                    <div class="widget-head">
                        <h4 class="heading"> Vehicle Engine</h4>
                    </div>
                    <!-- // Widget heading END -->

                    <div class="widget-body">
                        <select name="engine" id="engine" class="form-control">

                        </select>
                    </div>
                    <button id="save" class="btn btn-success"><i class="icon-add-symbol"></i> Save</button>
                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancel</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $("#brand").change(function () {
            $.get($("#base_url").val() + "/admin/getmodels?brand=" + $(this).val(), function (data) {
                var result = $.parseJSON(data);
                console.log(result);
                var str = '<option value="">Select Model</option>';
                $.each(result, function (key, value) {
                    str += '<option value="' + value.id + '">' + value.name + '</option>'
                });
                $("#model").html(str);
            })
        })
        $("#model").change(function () {
            $.get($("#base_url").val() + "/admin/getengine?model=" + $(this).val(), function (data) {
                var result = $.parseJSON(data);
                console.log(result);
                var str = '<option value="">Select Engine</option>';
                $.each(result, function (key, value) {
                    str += '<option value="' + value.id + '">' + value.name + '</option>'
                });
                $("#engine").html(str);
            })
        })
    </script>
@stop