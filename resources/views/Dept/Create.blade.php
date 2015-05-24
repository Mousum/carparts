@extends('layout.master')
@section('content')
<h2 class="margin-none">Add Department &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

<div class="separator-h"></div>
<div id="msg" style="display: none;"></div>
<div class="row">

    <form method="post" action="{{URL::to('/savedept')}}" enctype="multipart/form-data" >
        <div class="col-md-6">
            <div class="widget widget-heading-simple widget-body-white">
                <div class="widget-head">
                    <h4 class="heading">Department Name</h4>
                </div>
                <div class="widget-body">
                    <input type="text" name="d_name" id="d_name" placeholder="Department Name" class="form-control" style="color:black !important;">
                </div>
                <div class="widget-head">
                    <h4 class="heading">Department Description</h4>
                </div>
                <div class="widget-body">
                    <textarea class="form-control" name="d_des" id="d_des" style="color:black !important;"></textarea>
                </div>

                <div class="widget-head">
                    <h4 class="heading">Department Image</h4>
                </div>
                <div class="widget-body">
                    <input type="file"  id ="logo" name="logo" placeholder="Logo" class="form-control" style="color:black !important;">
                </div>
            </div>
            <button id="save" class="btn btn-success"><i class="icon-add-symbol"></i> Save</button>
            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancel</button>
        </div>
        <!--        <div class="col-md-6">
                    <div class="widget widget-heading-simple widget-body-white">
                        <div class="widget-head">
                            <h4 class="heading">Department For Brand</h4>
                        </div>
                        <div class="widget-body">
                            <select class="form-control" name="b_name" id="brand"style="color:black !important;">
                                <option value="">--Select One--</option>
                                @foreach($brands as $item)
                                <option value="{{$item->brand_id}}">{{$item->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="widget-head">
                            <h4 class="heading">Department For Model</h4>
                        </div>
                        <div class="widget-body">
                            <select class="form-control" name="m_name" id="model" style="color:black !important;">
        
                            </select>
                        </div>
        
                        <div class="widget-head">
                            <h4 class="heading">Department For Engine</h4>
                        </div>
                        <div class="widget-body">
                            <select class="form-control"  name="engine"id="engine"style="color:black !important;">
        
                            </select>
                        </div>
                    </div>
                    <button id="save" class="btn btn-success"><i class="icon-add-symbol"></i> Save</button>
                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancel</button>
                </div>-->

    </form>

</div>
<script>
//    $("#brand").change(function () {
//        var id = $(this).val();
//        var data = {id: id};
//        $.ajax({
//            type: "POST",
//            url: $("#base_url").val() + "/GetModelByBrand",
//            data: data,
//            datatype: "json",
//            success: function (data) {
//                var Str = "<option value=''>--Select One--</option>";
//                var obj = jQuery.parseJSON(data);
//                if (obj.models.length !== 0) {
//                    for (var i = 0; i < obj.models.length; i++) {
//                        Str += "<option value='" + obj.models[i].id + "'>" + obj.models[i].value + "</option>";
//                    }
//
//                }
//                $("#model").html(Str);
//
//
//            }
//        });
//    })
//    $("#model").change(function () {
//        var id = $(this).val();
//        var data = {id: id};
//        $.ajax({
//            type: "POST",
//            url: $("#base_url").val() + "/GetEngineByModel",
//            data: data,
//            datatype: "json",
//            success: function (data) {
//                console.log(data)
//                var Str = "<option value=''>--Select One--</option>";
//                var obj = jQuery.parseJSON(data);
//                if (obj.engines.length !== 0) {
//                    for (var i = 0; i < obj.engines.length; i++) {
//                        Str += "<option value='" + obj.engines[i].id + "'>" + obj.engines[i].value + "</option>";
//                    }
//
//                }
//
//                $("#engine").html(Str);
//
//
//            }
//        });
//    })
    $("#save").click(function () {

        var dept = $("#d_name").val();
        var des = $("#d_des").val();
        var logo = $("#logo").val();
//        var brand = $("#brand").val();
//        var model = $("#model").val();
//        var engine = $("#engine").val();

        if (dept === "") {
            $("#d_name").css("border-color", "#cc3a3a");
            $("#d_name").focus();
            $("#msg").html("<b style='color:#cc3a3a'>Department Name Is required</b>");
            $("#msg").show("slow");
            return false;
        }
        else if (des === "") {

            $("#d_des").css("border-color", "#cc3a3a");
            $("#d_des").focus();
            $("#msg").html("<b style='color:#cc3a3a'>Department Description Is required</b>");
            $("#msg").show("slow");
            return false;
        }
//        else if (brand === "") {
//
//            $("#brand").css("border-color", "#cc3a3a");
//            $("#brand").focus();
//            $("#msg").html("<b style='color:#cc3a3a'>Brand Name Is required</b>");
//            $("#msg").show("slow");
//            return false;
//        }
//        else if (model === "") {
//            $("#model").css("border-color", "#cc3a3a");
//            $("#model").focus();
//            $("#msg").html("<b style='color:#cc3a3a'>Model Name Is required</b>");
//            $("#msg").show("slow");
//            return false;
//        }
//        else if (engine === "") {
//            $("#engine").css("border-color", "#cc3a3a");
//            $("#engine").focus();
//            $("#msg").html("<b style='color:#cc3a3a'>Egine Is Required</b>");
//            $("#msg").show("slow");
//            return false;
//        }
        else if ($('#logo').val().length === 0)
        {
            $("#logo").css("border-color", "#cc3a3a");
            $("#logo").focus();
            $("#msg").html("<b style='color:#cc3a3a'>Logo Is Required</b>");
            $("#msg").show("slow");
            return false;
        }
        else
        {
            var fsize = $('#logo')[0].files[0].size;
            var ftype = $('#logo')[0].files[0].type;

            if (fsize > 1048576)
            {
                $("#logo").css("border-color", "#cc3a3a");
                $("#logo").focus();
                $("#msg").html("<b style='color:#cc3a3a'>Logo Size Is Too Large,Try With Smaller Image</b>");
                $("#msg").show("slow");
                return false;
            }
            else if (ftype !== 'image/png' && ftype !== 'image/gif' && ftype === 'image/jpeg' && ftype === 'image/jpg'
            {
                $("#logo").css("border-color", "#cc3a3a");
                $("#logo").focus();
                $("#msg").html("<b style='color:#cc3a3a'>Logo Must Be png,gif or jpeg type</b>");
                $("#msg").show("slow");
                return false;
            }
        }
        return true;
    })
</script>
@stop
