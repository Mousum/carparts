@extends('layout.master')
@section('content')
<h2 class="margin-none">All Brands &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i><a href="{{URL::to('/createbrand/')}}" style="float:right; margin-bottom: 20px;" class="btn btn-inverse">Add Brand</a></h2>

<div class="separator-h"></div>
@if(Session::has('success'))
<div class="alert alert-success">
    <h2>{!! Session::get('success') !!}</h2>
</div>
@endif
<div class="row">
    <div class="widget widget-body-white widget-heading-simple">
        <div class="widget-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <table class="display" cellspacing="0" width="100%" id="myTable">
                    <thead class="bg-gray">
                    <th>Id</th>
                    <th>Logo</th>
                    <th>Brand Name</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($brands as $item)
                        <tr>
                            <td>{{$ct= $item['brand_id']}} </td>
                            <td><img src="{{$item['brand_logo']}}" alt="Smiley face" height="42" width="42"></td>
                            <td>{{$item['brand_name']}} </td>
                           
                            <td>
                                <a href="{{URL::to('/editadmin/').'/'.$ct}}" title="Edit" class="btn btn-circle btn-success"><i class="icon-compose"></i></a>
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
    function block_admin(id)
    {
        $.ajax({
            url: $("#base_url").val() + "/blockadmin",
            type: 'POST',
            data: {id: id},
            dataType: 'json',
            success: function (result) {
                if (result.status)
                {
                    $('#status_' + id).html('Block');
                    $('#block_admin_' + id).hide();
                    $('#unblock_admin_' + id).show();
                }
            }
        });
    }
    function unblock_admin(id)
    {
        $.ajax({
            url: $("#base_url").val() + "/unblockadmin",
            type: 'POST',
            data: {id: id},
            dataType: 'json',
            success: function (result) {
                if (result.status)
                {
                    $('#status_' + id).html('Active');
                    $('#unblock_admin_' + id).hide();
                    $('#block_admin_' + id).show();
                }


            }
        });
    }
    function myfunction(id) {

        if (confirm("Do you want to delete this item?") == true) {

            window.location.href = $('#base_url').val() + "/deleteadmin/" + id;
        } else {
            return false;
        }

    }
</script>
@stop
