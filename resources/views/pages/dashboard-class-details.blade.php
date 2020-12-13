@extends('layouts.app')

@section('title')
    Coding Major | My Class
@endsection

@section('content')
        
    <!-- Accordion -->

    <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <h1>Materi Pada Kelas Ini</h1>
            <div class="accordion mt-5" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="clearfix mb-0">
                    <a href="index.html" class="btn btn-link"
                      >sdadsadas <i class="fa fa-angle-down"></i
                    ></a>
                  </h2>
                  <div
                    id="collapseOne"
                    class="collapse"
                    aria-labelledby="headingOne"
                    data-parent="#accordionExample"
                  ></div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="clearfix mb-0">
                    <a class="btn btn-link"
                      >sdadsadas <i class="fa fa-angle-down"></i
                    ></a>
                  </h2>
                  <div
                    id="collapseOne"
                    class="collapse"
                    aria-labelledby="headingOne"
                    data-parent="#accordionExample"
                  ></div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="clearfix mb-0">
                    <a class="btn btn-link"
                      >sdadsadas <i class="fa fa-angle-down"></i
                    ></a>
                  </h2>
                  <div
                    id="collapseOne"
                    class="collapse"
                    aria-labelledby="headingOne"
                    data-parent="#accordionExample"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Content -->
      <div class="page-content page-details">
        <div class="codingmajor-details-container" data-aos="fade-up">
          <section class="codingmajor-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h1>Pengertian dan Fungsi JavaScript dalam Pemrograman Web</h1>
                  <div class="owner">Written by Andhika</div>
                </div>
              </div>
            </div>
          </section>
          <section class="codingmajor-description">
            <div class="container">
              <row>
                <div class="col-12 col-lg-8">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                    accusamus fugiat minima ex sint similique nostrum. Iste, ea
                    voluptas fugit reprehenderit error non nobis adipisci iure
                    consectetur dolores tempora quam.
                  </p>
                  <p>
                    loremLorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Veniam harum adipisci ullam, laudantium qui quis, doloreLorem
                    ipsum dolor, sit amet consectetur adipisicing elit. Veniam
                    harum adipisci ullam, laudantium qui quis, doloreLorem ipsum
                    dolor, sit amet consectetur adipisicing elit. Veniam harum
                    adipisci ullam, laudantium qui quis, dolore sequi neque illum
                    in nobis fugit perspiciatis, officia quia nesciunt dolor
                    commodi velit. Adipisci.
                  </p>
                </div>
              </row>
            </div>
          </section>
        </div>
      </div>
  


@endsection