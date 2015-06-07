@extends('layout.master')
@section('content')
<link rel="stylesheet" href="{{URL::to('resources/assets/datetime/css/bootstrap-datetimepicker.min.css')}}" />
<script src="{{URL::to('resources/assets/datetime/js/bootstrap-datetimepicker.min.js')}}"></script>
<h2 class="margin-none">Create Event &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

<div class="separator-h"></div>
<div id="msg" style="display: none;"></div>
<div class="row">

    <script type="text/javascript">
$(function () {
    $('#datetimepicker2').datetimepicker({
        language: 'en',
        pick12HourFormat: true
    });
});
    </script>

    <form method="post" action="{{URL::to('/events/update/')}}" enctype="multipart/form-data" >
        <div class="col-md-6">
            <input type="hidden" value="{{$event[0]['event_id']}}" name="id">
            <div class="widget widget-heading-simple widget-body-white">
                <div class="widget-head">
                    <h4 class="heading">Event Name</h4>
                </div>
                <div class="widget-body">
                    <input type="text" name="event_name" id="" value="{{$event[0]['event_name']}}" class="form-control" style="color:black !important;">
                </div>
                <div class="widget-head">
                    <h4 class="heading">Event Date</h4>
                </div>
                <div class="widget-body">
                    <div id="datetimepicker2" class="input-append">
                        <input data-format="MM/dd/yyyy HH:mm:ss PP" type="text"name="events_date" value="{{date("m/d/Y H:m:s P",$event[0]['event_time'])}}" class="form-control" style="color:black !important;"/>

                        <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar-2">
                            </i>
                        </span>
                    </div>

<!--<input type="text" name="events_date" id="" placeholder="Event date" class="form-control" style="color:black !important;">-->
                </div>
                <div class="widget-head">
                    <h4 class="heading">Event Location </h4>
                </div>
                <div class="widget-body">
                    <input type="text" name="events_locations" id="b_name" value="{{$event[0]['event_location']}}"class="form-control" style="color:black !important;">
                </div>
                <div class="widget-head">
                    <h4 class="heading">Event Description </h4>
                </div>
                <div class="widget-body">
                    <textarea  class="form-control" name = "even_description" style="color:black !important;">{{$event[0]['even_description']}}</textarea>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="widget-head">
                <h4 class="heading">Event Images</h4>
            </div>


            <div class="widget-body">
                @foreach($event as $item)
                @if($item['img_location']!="")
                <div class="col-md-6 img" id="{{$item['img_id']}}">
                    <img class="Image" src = "{{URL::to('/'.$item['img_location'])}}"  width="180" height="150" />

                    <span class="close-btn"><a href="javascript:void(0)" class="cross" data-id="{{$item['img_id']}}">X</a></span>

                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div class="widget-body" id="imgdiv">


            </div>
            <div class="widget-body" >
                <a href="javascript:void(0)" id="addmore" class="btn btn-success" data-role="button">Add More</a>

            </div>

        </div>
        <div class="col-md-8">
            <button id="save" class="btn btn-success"><i class="icon-add-symbol"></i> Save</button>
            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancel</button>
        </div>
</div>


</form>


</div>
<style>
    .close-btn {
        border: 2px solid #c2c2c2;
        position: relative;
        padding: 1px 5px;
        top: -60px;
        background-color: #605F61;
        left: -31px;
        border-radius: 20px;
        display: none;
    }

    .close-btn a {
        font-size: 15px;
        font-weight: bold;
        color: white;
        text-decoration: none;
    }    

</style>
<script type="text/javascript">

    $("#addmore").click(function () {
        if ($(".file").last().val() !== "") {

            var htmlStr = '<input type="file" class="form-control file" name="images[]"/>'
            $("#imgdiv").append(htmlStr);
        }

    });
    $(".cross").click(function () {
        var id = $(this).attr("data-id");
        var data = {id: id};
        $.ajax({
            type: "POST",
            url: $("#base_url").val() + "/events/deleteImage",
            data: data,
            success: function (data) {
                if (data == "Success") {
                    // location.reload();
                    $("#" + id).hide("slow");
                }


            }
        });
    })
    $(".img").hover(function () {

        $(this).children(".close-btn").show();

    }, function () {
        $(this).find(".close-btn").hide();
    })
</script>

@stop


