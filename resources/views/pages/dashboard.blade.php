@extends('layouts.dashboard')

@section('title')
    Coding Major | Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div
class="section-content section-dashboard-home aos-init aos-animate"
data-aios="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Dashboard</h2>
    <p class="dashboard-subtitle">Semangat kk</p>
    </div>
    <div class="dashboard-content">
    <div class="row mt-3">
        <div class="col-12 mt-2">
        <h5 class="mb-3">Kelas Terakhir Yang Diakses</h5>
        <a
            href="#"
            class="card card-list d-block"
        >
            <div class="card-body">
            <div class="row">
                <div class="col-md-1 card-image">
                <img
                    src="/images/dashboard-icon-product-1.png"
                    alt=""
                    class="rounded"
                />
                </div>
                <div class="col-md-10">Python</div>
                <div class="col-md-1 d-none d-md-block">
                <img
                    src="/images/dashboard-arrow-right.svg"
                    alt=""
                />
                </div>
            </div>
            </div>
        </a>
        <a
            href="#"
            class="card card-list d-block"
        >
            <div class="card-body">
            <div class="row">
                <div class="col-md-1 card-image">
                <img
                    src="/images/dashboard-icon-product-1.png"
                    alt=""
                    class="rounded"
                />
                </div>
                <div class="col-md-10">Python</div>
                <div class="col-md-1 d-none d-md-block">
                <img
                    src="/images/dashboard-arrow-right.svg"
                    alt=""
                />
                </div>
            </div>
            </div>
        </a>
        <a
            href="{{ url('/dashboard/class/{id}') }}"
            class="card card-list d-block"
        >
            <div class="card-body">
            <div class="row">
                <div class="col-md-1 card-image">
                <img
                    src="/images/dashboard-icon-product-1.png"
                    alt=""
                    class="rounded"
                />
                </div>
                <div class="col-md-10">Python</div>
                <div class="col-md-1 d-none d-md-block">
                <img
                    src="/images/dashboard-arrow-right.svg"
                    alt=""
                />
                </div>
            </div>
            </div>
        </a>
        </div>
    </div>
    </div>
</div>
</div>
@endsection