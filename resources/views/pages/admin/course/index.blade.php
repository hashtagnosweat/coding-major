@extends('layouts.admin')

@section('title')
    Course
@endsection

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home aos-init aos-animate"
data-aios="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Course</h2>
    <p class="dashboard-subtitle">List of Courses</p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('course.create') }}" class="btn btn-primary mb-3">
                        + Add New Course
                        </a>
                        <div class="table-responsive">
                        <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Owner</th>
                                        <th>Category</th>
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
                {data: 'name', name: 'name'},
                {data: 'user.name', name: 'user.name'},
                {data: 'category.name', name: 'category.name'},
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