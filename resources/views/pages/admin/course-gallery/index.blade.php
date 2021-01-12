@extends('layouts.admin')

@section('title')
    Course Gallery
@endsection

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home aos-init aos-animate"
data-aios="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Course Gallery</h2>
    <p class="dashboard-subtitle">List of Course Galleries</p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('course-gallery.create') }}" class="btn btn-primary mb-3">
                        + Add New Course Gallery
                        </a>
                        <div class="table-responsive">
                        <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'course.name', name: 'course.name'},
                {data: 'photos', name: 'photos'},
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: false, 
                    searchable: false, 
                    width: '15%'},
            ]
        })
    </script>
@endpush