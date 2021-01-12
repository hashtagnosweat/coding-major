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
    <p class="dashboard-subtitle">Edit Course</p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('course.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                           <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Course Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $item->name }}"" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Owner</label>
                                        <select name="users_id" class="form-control">
                                            <option value="{{ $item->users_id }}" selected>{{ $item->user->name }}</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Category</label>
                                         <option value="{{ $item->categories_id }}" selected>{{ $item->category->name }}</option>
                                        <select name="categories_id" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Description</label>
                                        <textarea name="description" id="editor">{!! $item->description !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5">
                                        Save Now
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush