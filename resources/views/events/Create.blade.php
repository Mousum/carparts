@extends('layout.master')
@section('content')
<h2 class="margin-none">Create Event &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

<div class="separator-h"></div>
<div id="msg" style="display: none;"></div>
<div class="row">

    <form method="post" action="{{URL::to('/events/add')}}" enctype="multipart/form-data" >
        <div class="col-md-6">
            <div class="widget widget-heading-simple widget-body-white">
                <div class="widget-head">
                    <h4 class="heading">Event Name</h4>
                </div>
                <div class="widget-body">
                    <input type="text" name="events_name" id="" placeholder="Event Name" class="form-control" style="color:black !important;">
                </div>
                <div class="widget-head">
                    <h4 class="heading">Event Date</h4>
                </div>
                <div class="widget-body">
                 <input type="text" name="events_date" id="" placeholder="Event date" class="form-control" style="color:black !important;">
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
                    <textarea  class="form-control" style="color:black !important;margin: 0px -0.5px 0px 0px; width: 491px; height: 236px;"></textarea>
                </div>
            </div>
            <button id="save" class="btn btn-success"><i class="icon-add-symbol"></i> Save</button>
            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancel</button>
        </div>
        <div class="col-md-6">
            <div class="widget-head">
                <h4 class="heading">Event Images</h4>
            </div>
            <div class="widget-body">
                <input class="form-control" name="images[]"/>
            </div>

        </div>

    </form>

</div>
<script>
   
</script>
@stop
