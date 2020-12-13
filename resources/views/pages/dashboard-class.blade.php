@extends('layouts.dashboard')

@section('title')
    Coding Major | My Class
@endsection

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home aos-init aos-animate"
data-aios="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">My Class</h2>
    <p class="dashboard-subtitle">Kelas Yang Diikuti</p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <a href="{{ route('categories') }}" class="btn btn-success"> Add New Class </a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a
            href="/dashboard-class-details.html"
            class="card card-dashboard-class d-block"
        >
            <div class="card-body">
            <img
                src="/images/class-card-1.png"
                alt=""
                class="w-100 mb-2"
            />
            <div class="class-title">Python</div>
            <div class="class-details">Desktop Development</div>
            </div>
        </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a
            href="/dashboard-class-details.html"
            class="card card-dashboard-class d-block"
        >
            <div class="card-body">
            <img
                src="/images/class-card-1.png"
                alt=""
                class="w-100 mb-2"
            />
            <div class="class-title">Python</div>
            <div class="class-details">Desktop Development</div>
            </div>
        </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a
            href="/dashboard-class-details.html"
            class="card card-dashboard-class d-block"
        >
            <div class="card-body">
            <img
                src="/images/class-card-1.png"
                alt=""
                class="w-100 mb-2"
            />
            <div class="class-title">Python</div>
            <div class="class-details">Desktop Development</div>
            </div>
        </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a
            href="/dashboard-class-details.html"
            class="card card-dashboard-class d-block"
        >
            <div class="card-body">
            <img
                src="/images/class-card-1.png"
                alt=""
                class="w-100 mb-2"
            />
            <div class="class-title">Python</div>
            <div class="class-details">Desktop Development</div>
            </div>
        </a>
        </div>
    </div>
    </div>
</div>
</div>


@endsection