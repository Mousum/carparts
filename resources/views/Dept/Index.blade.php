

@extends('layout.master')
@section('content')
<h2 class="margin-none">All Departments &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i><a href="{{URL::to('dept/create')}}" style="float:right; margin-bottom: 20px;" class="btn btn-inverse">Add Department</a></h2>

<div class="separator-h"></div>
@if(Session::has('success'))
<div class="alert alert-success">
    <h2>{!! Session::get('success') !!}</h2>
</div>
@endif
<div id="del-msg" class="alert alert-success" style="display: none;"></div>
<div class="row">
    <div class="widget widget-body-white widget-heading-simple">
        <div class="widget-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <table class="display" cellspacing="0" width="100%" id="myTable">
                    <thead class="bg-gray">
                    <th>#</th>
                    <th>Logo</th>
                    <th>Department Name</th>
                    <th>Department Descriptions</th>
<!--                    <th>Brand Name</th>
                    <th>Model Name</th>
                    <th>Engine Name</th>-->
                    <th>Action</th>
                    </thead>
                    <tbody>
                       <?php $i=0;?>
                        @foreach($depts as $item)
                        <tr>
                            <td><?php echo ++$i;?> </td>
                            <td><img src="{{$item['department_image']}}" alt="{{$item['department_name']}}" height="42" width="42"></td>
                            <td>{{$item['department_name']}} </td>
                            <td>{{substr($item['department_description'], 0, 50)}}   <a href="javascript:void(0);"  data-toggle="modal" data-target="#detModal{{$item['department_id']}}">read more.. </a></td>
                            
<!--                            <td>{{$item['brand_name']}} </td>
                            <td>{{$item['model_name']}} </td>
                            <td>{{$item['engine_name']}} </td>-->

                            <td>
                                <a href="{{URL::to('dept/edit/').'/'.$item['department_id']}}" title="Edit" class="btn btn-circle btn-success"><i class="icon-compose"></i></a>

                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-circle btn-danger" data-toggle="modal" data-target="#delModal{{$item['department_id']}}"><i class="fa fa-trash-o"></i></button>
                               



                                <!-- Modal -->
                                <div id="detModal{{$item['department_id']}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">{{$item['department_name']}} Description</h4>
                                            </div>
                                            <div class="modal-body">
                                              {{$item['department_description']}}
                                            </div>
                                            <div class="modal-footer">
                                               
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Modal -->
                                <div id="delModal{{$item['department_id']}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"></h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are You Sure Want To Delete {{$item['department_name']}} Department?<br/>Click "Delete" To Continue. </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info delete" data-id="{{$item['department_id']}}" >Delete</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script src="{{URL::to('resources/assets/components/common/tables/datatables/assets/lib/js/jquery.dataTables.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
<script src="{{URL::to('resources/assets/components/common/tables/datatables/assets/lib/extras/TableTools/media/js/TableTools.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
<script src="{{URL::to('resources/assets/components/common/tables/datatables/assets/lib/extras/ColVis/media/js/ColVis.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
<script src="{{URL::to('resources/assets/components/common/tables/datatables/assets/custom/js/DT_bootstrap.js?v=v1.0.2&sv=v0.0.1')}}"></script>
<script src="{{URL::to('resources/assets/components/common/tables/datatables/assets/custom/js/datatables.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
<script src="{{URL::to('resources/assets/components/common/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.0.2&sv=v0.0.1')}}"></script>
<script src="{{URL::to('resources/assets/components/common/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.0.2&sv=v0.0.1')}}"></script>
<script src="{{URL::to('resources/assets/components/common/tables/datatables/assets/lib/extras/FixedHeader/FixedHeader.js?v=v1.0.2&sv=v0.0.1')}}"></script>
<script src="{{URL::to('resources/assets/components/common/tables/datatables/assets/lib/extras/ColReorder/media/js/ColReorder.min.js?v=v1.0.2&sv=v0.0.1')}}"></script>
<script>

$(document).ready(function () {
    $('#myTable').DataTable();
});</script>
<script>
$(".delete").click(function(){
    var id =$(this).attr('data-id');
     $.ajax({
            url: $("#base_url").val() + "/DeleteDepartment",
            type: 'POST',
            data: {id: id},
            dataType:'html',
            success: function(result) {
                if (result=="Success")
                {
                     $('.close').trigger('click');
                        $("#del-msg").html(" <b class='alert-success'>Successfully Deleted!Loading New Data...</b>");
                        $("#del-msg").show("slow");
                        setTimeout(function () {
                            location.reload();//will redirect to your blog page (an ex: blog.html)
                        }, 2000);
                  
                   
                }
            }
        });
})
</script>




@stop
