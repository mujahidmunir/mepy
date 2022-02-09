@extends('layouts.master-admin')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Basic DataTable</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-nowrap" id="example1">
                <thead>
                    <tr>
                        <th width="3%" class="wd-15p border-bottom-0">No</th>
                        <th width="20%"class="wd-15p border-bottom-0">Title</th>
                        <th width="40%" class="wd-20p border-bottom-0">Description</th>
                        <th class="wd-15p border-bottom-0">Created</th>
                        <th class="wd-10p border-bottom-0">Status</th>
                        <th width="10%" class="wd-25p border-bottom-0">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $key => $data )

                    @endforeach
                    <tr>
                        <td>{{$key + 1 }}</td>
                        <td>{{$data->title}}</td>
                        <td>{{Str::limit($data->description, 100, ' ...')}}</td>
                        <td>{{date('d-m-Y', strtotime($data->created_at))}}</td>
                        <td>
                            @if ($data->status == 0)
                                    Active
                                    @else
                                    @disabled
                            @endif
                        </td>
                        <td class="text-center">
                                <a href="{{url('admin/page/show', $data->id)}}" class="btn btn-info btn-sm" data-bs-placement="top" data-bs-toggle="tooltip" title="Detail" type="button">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{url('admin/page/edit', $data->id)}}" class="btn btn-warning btn-sm" data-bs-placement="top" data-bs-toggle="tooltip" title="Edit" type="button">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{url('admin/page/disabled', $data->id)}}" class="btn btn-danger btn-sm" data-bs-placement="top" data-bs-toggle="tooltip" title="Disabled" type="button">
                                    <i class="fa fa-times"></i>
                                </a>

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('head')
<link href="{{asset ('assets/admin/plugins/datatables/DataTables/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
<link href="{{asset ('assets/admin/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css')}}"  rel="stylesheet">
<link href="{{asset ('assets/admin/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" />
@endpush

@push('js')
<script src="{{asset('assets/admin/js/tooltip.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/DataTables/js/jquery.dataTables.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/DataTables/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/Buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/Buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/JSZip/jszip.min.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/Buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/Buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/Buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/Responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset ('assets/admin/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset ('assets/admin/js/datatables.js')}}"></script>

@endpush
