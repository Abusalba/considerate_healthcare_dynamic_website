@extends('layouts.admin')
@section('title', 'Abouts')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row w-100 align-items-center gy-2">
                                            <div class="col-md-6 col-sm-12">
                                                <h5 class="mb-0 me-3">Abouts</h5>
                                                <a href="{{ route('admin.abouts.create') }}" class="btn btn-primary btn-round  btn-sm">Create 
                                                    About</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="abouts" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Image</th>
                                                        <th>Image 2</th>
                                                        <th>Status</th>
                                                        <th>CreatedAt</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('after-scripts')
    <script>
        $(function () {
        var table = $('#abouts').DataTable({
            processing: true,
            serverSide: true,
            order: [[4, 'DESC']],
            ajax: {
                url: "{{ route('admin.abouts') }}",
                data: function (d) {
                    d.date_range = $('#date-filter').val(); // Send the selected range to the server
                }
            },
            // buttons: ['excelHtml5'],
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'title', name: 'title'},
                { data: 'image', name: 'image', orderable: false, searchable: false },
                { data: 'image2', name: 'image2', orderable: false, searchable: false },
                { data: 'status', name: 'status', orderable: false, searchable: false },
                { data: 'created_at', name: 'created_at', orderable: true, searchable: false },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
            createdRow: function (row, data) {
                $(row).attr('data-id', data.id);
                $(row).attr('data-model','abouts');
            }
        });
        });
    </script>
@endpush
