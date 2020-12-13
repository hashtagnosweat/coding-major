@extends('layouts.app')

@section('title')
    Coding Major Category Page
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-home">
      <!-- 3 3 10 Slicing Landing Page Section Trend Categories Sytling -->
      <section class="codingmajor-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Course Categories</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <!-- Refer ke halaman categories (belum ada) -->
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/categories-web.svg" alt="" class="pt-3" />
                </div>
                <p class="categories-text mt-5 web1">Web Development</p>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <!-- Refer ke halaman categories (belum ada) -->
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-mobile.svg"
                    alt=""
                    class="pt-3"
                  />
                </div>
                <p class="categories-text">Mobile Development</p>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <!-- Refer ke halaman categories (belum ada) -->
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-desktop.svg"
                    alt=""
                    class="pt-3"
                  />
                </div>
                <p class="categories-text">Desktop Development</p>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <!-- Refer ke halaman categories (belum ada) -->
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-datascience.svg"
                    alt=""
                    class="pt-3"
                  />
                </div>
                <p class="categories-text mt-5">Data Science</p>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Course Catalog -->
      <section class="codingmajor-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Course Catalog</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-javascript.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                  The Complete JavaScript Course 2020: From Zero to Expert!
                </div>
                <div class="products-price">Rp126,000</div></a
              >
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-xamarin.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                  The Complete Xamarin Developer Course: iOS And Android!
                </div>
                <div class="products-price">Rp156,000</div></a
              >
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/products-c++.jpg')"
                  ></div>
                </div>
                <div class="products-text">
                  C++ Programming - From Beginner to Beyond
                </div>
                <div class="products-price">Rp146,000</div></a
              >
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('/images/products-python.jpg')"
                  ></div>
                </div>
                <div class="products-text">
                  Python Programming for Beginners in Data Science
                </div>
                <div class="products-price">Rp176,000</div></a
              >
            </div>
          </div>
        </div>
      </section>
    </div>

@endsection