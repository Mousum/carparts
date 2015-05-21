@extends('layout.master')
@section('content')
<h2 class="margin-none">Add Sub Department &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

<div class="separator-h"></div>

<div class="row">
    <form method="post" action="{{URL::to('/savesubdepartment')}}" >
        <div class="col-md-6">
            <div class="widget widget-heading-simple widget-body-white">

                <!-- Widget heading -->
                <div class="widget-head">
                    <h4 class="heading">Sub Department Name</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="text" name="name" placeholder="Department Name" class="form-control" style="color:black !important;">
                </div>

                
                <div class="widget-head">
                    <h4 class="heading">Department </h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <select name="department" class="form-control">
                        @foreach($departments as $department)
                        <option value="{{$department['department_id']}}">{{$department['department_name']}}</option>
                        @endforeach

                    </select>
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