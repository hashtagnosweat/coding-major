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
                    <a href="/index.html">Home</a>
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
          <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" alt="" class="w-100 main-image">
            </transition>
          </div>

          <!-- Gallery Kanan -->
          <div class="col-lg-2">
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
              <h1>Pengertian dan Fungsi JavaScript dalam Pemrograman Web</h1>
              <div class="owner">
                Written by Andhika
              </div>
           
            </div>
            <div class="col-lg-2" data-aos="zoom-in">
              <a href="{{ route('course') }}" class="btn btn-success px-10 text-white btn-block mb-3">
                Mulai Kelas Ini!
              </a>

            </div>
          </div>
        </div>
      </section>
      <section class="codingmajor-description">
        <div class="container">
          <row>
             <div class="col-12 col-lg-8">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam accusamus fugiat minima ex sint similique nostrum. 
            Iste, ea voluptas fugit reprehenderit error non nobis adipisci iure consectetur dolores tempora quam.
          </p>
<p>loremLorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam harum adipisci ullam, laudantium qui quis, doloreLorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam harum adipisci ullam, laudantium qui quis, doloreLorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam harum adipisci ullam, laudantium qui quis, dolore sequi neque illum in nobis fugit perspiciatis, officia quia nesciunt dolor commodi velit. Adipisci.</p>
             </div>
          </row> 
         
          
          
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
    {
      id: 1,
      url: "/images/products-flutter.jpg"
    },
    {
      id: 2,
      url: "/images/products-javascript.jpg"
    },
    {
      id: 3,
      url: "/images/products-c++.jpg"
    },
    {
      id: 4,
      url: "/images/products-php.jpg"
    },
      ],
    },
    methods: {
      changeActive(id) {
        this.activePhoto = id;

      }
    }
  })
      </script>
    
@endpush