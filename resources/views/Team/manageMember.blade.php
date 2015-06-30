
@extends('layout.master')
@section('content')
<h2 class="margin-none">Manage Member &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i><a href="{{URL::to('/createMember/')}}" style="float:right; margin-bottom: 20px;" class="btn btn-inverse">Add Admin</a></h2>

<div class="separator-h"></div>

<div class="row">
    <div class="widget widget-body-white widget-heading-simple">
        <div class="widget-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <table class="display" cellspacing="0" width="100%" id="myTable">
                    <thead class="bg-gray">
                    <th>Id</th>
                    <th>Member name</th>
                    <th>Email</th>
                    <th>Facebook Link</th>
                    <th>Twitter Link</th>
                    <th>Linkdin Link</th>
                    <th>Contact</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($members as $cat)
                        <tr>
                            <td>{{$ct= $cat['member_id']}} </td>
                            <td>{{$cat['member_name']}} </td>
                            <td>{{$cat['member_email']}}</td>
                            <td>{{$cat['member_fb_link']}} </td>
                            <td>{{$cat['member_twitter_link']}} </td>
                            <td>{{$cat['member_linkdin_link']}} </td>
                            <td>{{$cat['member_contact']}} </td>
                            <td>
                                <a href="{{URL::to('/editmember/').'/'.$ct}}" title="Edit" class="btn btn-circle btn-success"><i class="icon-compose"></i></a>

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

    function myfunction(id) {

        if (confirm("Do you want to delete this item?") == true) {

            window.location.href = $('#base_url').val() + "/deletemember/" + id;
        } else {
            return false;
        }

    }
</script>
@stop
