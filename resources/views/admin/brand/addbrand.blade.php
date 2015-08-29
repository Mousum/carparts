@extends('admin.layout.master')
@section('content')
<h2 class="margin-none">Add Brand &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

<div class="separator-h"></div>
<div id="msg" style="display: none;"></div>
<div class="row">

    <form method="post" action="{{URL::to('admin/savebrand')}}" enctype="multipart/form-data" >
        <div class="col-md-6">
            <div class="widget widget-heading-simple widget-body-white">
                <div class="widget-head">
                    <h4 class="heading">Brand Name</h4>
                </div>
                <div class="widget-body">
                    <input type="text" name="brand_name" id="b_name" placeholder="Brand Name" class="form-control" style="color:black !important;">
                </div>
                <div class="widget-head">
                    <h4 class="heading">Brand Logo</h4>
                </div>
                <div class="widget-body">
                    <input type="file"  id ="logo" name="logo" placeholder="Logo" class="form-control" style="color:black !important;">
                </div>
            </div>
            <button id="save" class="btn btn-success"><i class="icon-add-symbol"></i> Save</button>
            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancel</button>
        </div>

    </form>

</div>
<script>
    $("#save").click(function () {
        if ($("#b_name").val() == "") {
            $("#b_name").css("border-color", "#cc3a3a");
            $("#b_name").focus();
            $("#msg").html("<b style='color:#cc3a3a'>Brand Name Is Required </b>");
            $("#msg").show("slow");
            return false;
        }
        else {
            $("#b_name").css("border-color", "#e2e1e1");
            if ($('#logo').val().length === 0)
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
                else if (ftype!== 'image/png' && ftype !== 'image/gif' && ftype !== 'image/jpeg' && ftype !== 'image/jpg')
                {
                    $("#logo").css("border-color", "#cc3a3a");
                    $("#logo").focus();
                    $("#msg").html("<b style='color:#cc3a3a'>Logo Must Be png,gif or jpeg type</b>");
                    $("#msg").show("slow");
                    return false;
                }
            }

            return true;
        }

       

    });

</script>
@stop
