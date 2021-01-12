@extends('layouts.app')

@section('title')
    Coding Major Detail Page
@endsection

@section('content')
<!-- Page Content -->
    <div class="page-content page-details">
      <section class="codingmajor-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="breadcrumb-item active">
                    Course Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery Kiri -->

    <section class="codingmajor-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-9" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" alt="" class="w-100 main-image">
            </transition>
          </div>

          <!-- Gallery Kanan -->
          <div class="col-lg-2" style="display: none">
            <div class="row">
              <div class="col-3 col-lg-12 mt-12 mt-lg-0" v-for="(photo, index) in photos"
              :key="photo.id"
              data-aos="zoom-in"
              data-aos-delay="100">
              <a href="#" @click="changeActive(index)">
                <img :src="photo.url" class="w-100 thumbnail-image" :class="{ active: index == activePhoto }" alt="">
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="codingmajor-details-container" data-aos="fade-up">
      <section class="codingmajor-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h1>{{ $course->name }}</h1>

           
            </div>
          </div>
        </div>
      </section>
      <section class="codingmajor-description">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              {!! $course->description !!}
            </div>     
        </div>
      </section>

    </div>
    </div>

@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
    <script> var gallery = new Vue({
      el: "#gallery",
    mounted() {
      AOS.init();
    },
    data: {
      activePhoto: 0,
      photos: [
        @foreach($course->galleries as $gallery)
        {
          id: {{ $gallery->id }},
          url: "{{ Storage::url($gallery->photos) }}",
        },
        @endforeach
      ],
    },
    methods: {
      changeActive(id) {
        this.activePhoto = id;

      }
    }
  });
      </script>
    
@endpush