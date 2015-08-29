@extends('admin.layout.master')
@section('content')
<link rel="stylesheet" href="{{URL::to('resources/assets/datetime/css/bootstrap-datetimepicker.min.css')}}" />
<script src="{{URL::to('resources/assets/datetime/js/bootstrap-datetimepicker.min.js')}}"></script>
<h2 class="margin-none">Create Event &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

<div class="separator-h"></div>
<div id="msg"  class=" alert alert-danger"style="display: none;"></div>
<div class="row">

    <script type="text/javascript">
$(function () {
    $('#datetimepicker2').datetimepicker({
        language: 'en',
        pick12HourFormat: true
    });
});
    </script>

    <form method="post" action="{{URL::to('admin/events/add')}}" enctype="multipart/form-data" >
        <div class="col-md-6">
            <div class="widget widget-heading-simple widget-body-white">
                <div class="widget-head">
                    <h4 class="heading">Event Name</h4>
                </div>
                <div class="widget-body">
                    <input type="text" name="event_name" id="event_name" placeholder="Event Name" class="form-control" style="color:black !important;">
                </div>
                <div class="widget-head">
                    <h4 class="heading">Event Date</h4>
                </div>
                <div class="widget-body">
                    <div id="datetimepicker2" class="input-append">
                        <input data-format="MM/dd/yyyy HH:mm:ss PP" type="text"name="events_date" id=""  class="form-control" style="color:black !important;"/>
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
                    <input type="text" name="events_locations" id="b_name" placeholder="Location" class="form-control" style="color:black !important;">
                </div>
                <div class="widget-head">
                    <h4 class="heading">Event Description </h4>
                </div>
                <div class="widget-body">
                    <textarea  class="form-control" name="even_description" style="color:black !important;"></textarea>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="widget-head">
                <h4 class="heading">Event Images</h4>
            </div>
            <div class="widget-body" id="imgdiv">
                <input type="file"  class="form-control file" multiple=true name="images[]"/>

            </div>
            <div class="widget-body" >
                <a href="javascript:void(0)" id="addmore" class="btn btn-success" data-role="button">Add More</a>
            </div>
        </div>
        <div class="col-md-8">
            <input type="submit" id="save" class="btn btn-success" value="save"/>
            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancel</button>
        </div>
    </form>

</div>
<script type="text/javascript">

    $("#addmore").click(function () {
        if ($(".file").last().val() !== "") {

            var htmlStr = '<input type="file" class="form-control file" name="images[]"/>'
            $("#imgdiv").append(htmlStr);
        }

    });
    $("#save").click(function () {
        if ($("#event_name").val() === '')
        {
            $("#msg").text("Your Event Atleast Have A Name").show("slow");
            $("#event_name").css('border-color', 'red');
            return false;

        }
    })
</script>
@stop
