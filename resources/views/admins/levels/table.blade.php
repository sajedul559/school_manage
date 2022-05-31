@push('style')
<link href="{{asset('jambasangsang/assets/css/lib/data-table/buttons.bootstrap.min.css')}}" rel="stylesheet" />

@endpush

<div class="col-md-12 col-lg-12 card">
    <div class=" card">
        <div class="card-header box-header box-bordered">
            <h3 class="pull-left">{{Str::ucfirst(request()->segment(3))}}</h3>
            <a class="btn btn-primary btn-sm btn-flat pull-right" href="{{route('levels.create')}}">Create New Level</a>
        </div>
        <div class="card-body mt-2">
            <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                    <table id="datatable-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $levels as $level )
                            <tr>
                                <td>{{$level->name}}</td>
                                <td>{{$level->status}}</td>
                                <td>{{Str::limit($level->description, 50,'.......')}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-info btn-flat" href="{{route('levels.edit',$level->id)}}"><i class="fa fa-edit"></i>Edit</a>
                                        <a class="btn btn-danger btn-flat btnDelete" href="#DeleteConfirmation" data-toggle="modal"
                                        data-url="{{route('levels.destroy',$level->id)}}" ><i class="fa fa-trash"></i>Delete</a>

                                    </div>
                                </td>
                            </tr>
                            @empty
                                
                            @endforelse
                           
                            
                           
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- /# card -->
</div>

{{-- 
@push('script')
    <script src="{{asset('jambasangsang/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('jambasangsang/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('jambasangsang/assets/js/lib/data-table/buttons.flash.min.js')}}"></script>
    <script src="{{asset('jambasangsang/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('jambasangsang/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('jambasangsang/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('jambasangsang/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('jambasangsang/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('jambasangsang/assets/js/lib/data-table/datatables-init.js')}}"></script>
@endpush --}}

<x-modals.delete :title="'Level'"></x-modals.delete>