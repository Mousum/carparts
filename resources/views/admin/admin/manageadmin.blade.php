
@extends('admin.layout.master')
@section('content')
<h2 class="margin-none">Manage Admin &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i><a href="{{URL::to('admin/createadmin/')}}" style="float:right; margin-bottom: 20px;" class="btn btn-inverse">Add Admin</a></h2>

<div class="separator-h"></div>

<div class="row">
    <div class="widget widget-body-white widget-heading-simple">
        <div class="widget-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <table class="display" cellspacing="0" width="100%" id="myTable">
                    <thead class="bg-gray">
                    <th>Id</th>
                    <th>Username</th>
                    <th>Create Date</th>
                    <th>Status</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($admins as $cat)
                        <tr>
                            <td>{{$ct= $cat['user_id']}} </td>
                            <td>{{$cat['user_name']}} </td>
                          
                            <td>{{date("Y-m-d H:i:s",$cat['createDate'])}} </td>
                            <td> 
                                @if($cat['is_block']==0)
                                <span id='status_{{$ct}}'>Active </span>
                                @endif
                                @if($cat['is_block']==1)
                                <span id='status_{{$ct}}'>Block </span>
                                @endif
                            </td>
                            <td>
                                <a href="{{URL::to('admin/editadmin/').'/'.$ct}}" title="Edit" class="btn btn-circle btn-success"><i class="icon-compose"></i></a>


                                @if($cat['is_block']==0)

                                <a id="block_admin_{{$ct}}" href="javascript:void(0)" onclick="block_admin('{{$ct}}')" title="Block" class="btn btn-circle btn-success"><i class="icon-lock-fill"></i></a>
                                <a id="unblock_admin_{{$ct}}"  onclick="unblock_admin('{{$ct}}')" style="display:none;" title="Unblock" class="btn btn-circle btn-success"><i class="icon-unlock-fill"></i></a>
                                @endif 
                                @if($cat['is_block']==1)

                                <a id="unblock_admin_{{$ct}}" onclick="unblock_admin('{{$ct}}')"  title="Unblock" class="btn btn-circle btn-success"><i class="icon-unlock-fill"></i></a>
                                <a id="block_admin_{{$ct}}" onclick="block_admin('{{$ct}}')" style="display:none;" title="Block" class="btn btn-circle btn-success"><i class="icon-lock-fill"></i></a>
                                @endif
                                <a onclick="myfunction('{{$ct}}');" title="Delete" class="btn btn-circle btn-danger"><i class="fa fa-trash-o"></i></a>

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

                                    $(document).ready(function() {
                                        $('#myTable').DataTable();
                                    });
</script>
<script>
    function block_admin(id)
    {
        $.ajax({
            url: $("#base_url").val() + "/admin/blockadmin",
            type: 'POST',
            data: {id: id},
            dataType:'json',
            success: function(result) {
                if (result.status)
                {
                    $('#status_'+id).html('Block');
                    $('#block_admin_' + id).hide();
                    $('#unblock_admin_' + id).show();
                }
            }
        });
    }
    function unblock_admin(id)
    {
        $.ajax({
            url: $("#base_url").val() + "/admin/unblockadmin",
            type: 'POST',
            data: {id: id},
            dataType:'json',
            success: function(result) {
                if (result.status)
                {
                   $('#status_'+id).html('Active');
                    $('#unblock_admin_' + id).hide();
                    $('#block_admin_' + id).show();
                }


            }
        });
    }
    function myfunction(id) {

        if (confirm("Do you want to delete this item?") == true) {

            window.location.href = $('#base_url').val() + "/admin/deleteadmin/" + id;
        } else {
            return false;
        }

    }
</script>
@stop
