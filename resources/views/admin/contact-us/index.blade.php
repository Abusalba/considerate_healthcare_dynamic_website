@extends('layouts.admin')
@section('title','Contact US')
@section('content')
<div class="pcoded-content">

    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->                 
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row w-100 align-items-center gy-2">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <h5 class="mb-0 me-3">Contact US</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="contact" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email-Id</th>
                                                    <th>Phone</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <!-- <th>Status</th> -->
                                                    <th>CreatedAt</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Default ordering table end -->
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
    </div>
</div>
@endsection()
@push('after-scripts')
<script>
    $(function () {
        var table = $('#contact').DataTable({
            processing: true,
            serverSide: true,
            order: [[6, 'DESC']],
            ajax: {
                url: "{{ route('admin.contactUs') }}",
                data: function (d) {
                    d.date_range = $('#date-filter').val(); // Send the selected range to the server
                }
            },
            // buttons: ['excelHtml5'],
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'phone', name: 'phone' },
                { data: 'subject', name: 'subject' },
                { data: 'description', name: 'description'},
                { data: 'created_at', name: 'created_at', orderable: true, searchable: false },
                { data: 'action', name: 'action', orderable: false, searchable: false },
                
                
            ],
            createdRow: function (row, data) {
                $(row).attr('data-id', data.id);
                $(row).attr('data-model','contact');
            }
        });
        $(document).on('click', '.delete-contact', function() {
            var contactId = $(this).data('id');
            var url = "{{ route('admin.contactUs.destroy', ':id') }}";
            url = url.replace(':id', contactId);
            
            if (confirm('Are you sure you want to delete this contact?')) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            // Refresh the table
                            table.ajax.reload();
                            // Show success message
                            alert(response.message);
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('Error: ' + xhr.responseJSON.message);
                    }
                });
            }
        });
    });
</script>
@endpush