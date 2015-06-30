@extends('layout.master')
@section('content')
<h2 class="margin-none">Add Team Member &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

<div class="separator-h"></div>

<div class="row">
    <form method="post" action="{{URL::to('/saveMember')}}" >
        <div class="col-md-6">
            <div class="widget widget-heading-simple widget-body-white">

                <!-- Widget heading -->
                <div class="widget-head">
                    <h4 class="heading">Member Name</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="text" name="name" placeholder="name" class="form-control" style="color:black !important;"/>
                </div>

                <!-- Widget heading -->
                <div class="widget-head">
                    <h4 class="heading">Member Email</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="text" name="email" placeholder="email" class="form-control" style="color:black !important;"/>
                </div>

                <!-- Widget heading -->
                <div class="widget-head">
                    <h4 class="heading">Member Facebook Link</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="text" name="fb_link" placeholder="facebook Link" class="form-control" style="color:black !important;"/>
                </div>

                <div class="widget-head">
                    <h4 class="heading">Member Twitter Link</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="text" name="twitter_link" placeholder="twitter Link" class="form-control" style="color:black !important;">
                </div>


                <div class="widget-head">
                    <h4 class="heading">Member Linkdin Link</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="text" name="linkdin_link" placeholder="linkdin Link" class="form-control" style="color:black !important;"/>
                </div>

                <div class="widget-head">
                    <h4 class="heading">Member Contact Number</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="text" name="contact" placeholder="Contact number" class="form-control" style="color:black !important;"/>
                </div>

                <div class="widget-head">
                    <h4 class="heading">Member Description</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <textarea name="description" cols="60" rows="20" ></textarea>
                </div>

                <div class="widget-head">
                    <h4 class="heading">Member Photo</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="file" value="browse" name="image" />
                </div>





            </div>
            <button id="save" class="btn btn-success"><i class="icon-add-symbol"></i> Save</button>
            <button class="btn btn-danger"><i class="fa fa-trash-o"></i> Cancel</button>
        </div>
    </form>

</div>
<script>
    $(document).ready(
            function()
            {
                $('#save').click(
                        function() {

//                            var password = $('#password').val();
//                            var retype = $('#retype_password').val();
//                            if (password != retype)
//                            {
//                                alert('Password doesnt match');
//                                return false;
//                            }
//

                        }
                );
            }
    );
    function ValidateEmail(mail)
    {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
        {
            return (true);
        } else {
            alert("You have entered an invalid email address!")
            return (false);
        }
    }
</script>
@stop