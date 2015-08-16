@extends('layout.master')
@section('content')
    <h2 class="margin-none">All Departments &nbsp;<i class="fa fa-fw fa-pencil text-muted"></i><a
                href="{{URL::to('dept/create')}}" style="float:right; margin-bottom: 20px;" class="btn btn-inverse">Add
            Department</a></h2>

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
                        <th>Vehicle</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Engine</th>

                        <th>Action</th>
                        </thead>
                        <tbody>
                        <?php $i = 0;?>
                        @foreach($vehicles as $item)
                            <tr>
                                <td><?php echo ++$i;?> </td>

                                <td>{{$item->vehicle_name}} </td>
                                <td>{{$item->Brand->brand_name}} </td>
                                <td>{{$item->Moodel->model_name}} </td>
                                <td>{{$item->Engine->engine_name}} </td>


                                <td>
                                    <a href="{{URL::to('vehicle/edit/').'/'.$item->vehicle_id}}" title="Edit"
                                       class="btn btn-circle btn-success"><i class="icon-compose"></i></a>

                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-circle btn-danger" data-toggle="modal"
                                            data-target="#delModal{{$item->vehicle_id}}"><i
                                                class="fa fa-trash-o"></i></button>




                                    <div id="delModal{{$item->vehicle_id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" style="color: #cc3a3a">Delete Confirmation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are You Sure Want To Delete {{$item->vehicle_name}}
                                                        Department?<br/>Click "Delete" To Continue. </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info delete"
                                                            data-id="{{$item->vehicle_id}}">Delete
                                                    </button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                        Cancel
                                                    </button>
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
        $(".delete").click(function () {
            var id = $(this).attr('data-id');
            $.ajax({
                url: $("#base_url").val() + "/deletevehicle",
                type: 'POST',
                data: {id: id},
                dataType: 'html',
                success: function (result) {
                    if (result == "Success") {
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
