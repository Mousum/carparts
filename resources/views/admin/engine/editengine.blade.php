@extends('admin.layout.master')
@section('content')
<h2 class="margin-none">Edit Engine &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i></h2>

<div class="separator-h"></div>

<div class="row">
    <form method="post" action="{{URL::to('admin/updateengine').'/'.$engine['engine_id']}}" >
        <div class="col-md-6">
            <div class="widget widget-heading-simple widget-body-white">

                <!-- Widget heading -->
                <div class="widget-head">
                    <h4 class="heading">Engine Name</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="text" name="name" placeholder="Model name" value="{{$engine['engine_name']}}" class="form-control">
                </div>

                <div class="widget-head">
                    <h4 class="heading">Engine Description</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="text" name="description" placeholder="Engine description" value="{{$engine['engine_description']}}" class="form-control" style="color:black !important;">
                </div>

                <!-- Widget heading -->
                <div class="widget-head">
                    <h4 class="heading">Engine Power</h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <input type="text" name="power" placeholder="Engine Power" class="form-control" value="{{$engine['engine_power']}}" style="color:black !important;">
                </div>


                <div class="widget-head">
                    <h4 class="heading">Model </h4>
                </div>
                <!-- // Widget heading END -->

                <div class="widget-body">
                    <select name="model" class="form-control">
                        @foreach($models as $model)
                            @if($model['model_id']==$engine['model_id'])
                            <option value="{{$model['model_id']}}" selected="selected">{{$model['model_name']}}</option>
                            @else
                            <option value="{{$model['model_id']}}">{{$model['model_name']}}</option>
                            @endif
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