@extends('layouts.dashboard')

@section('title')
    Coding Major | My Account
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">My Account</h2>
    <p class="dashboard-subtitle">Update your current profile</p>
  </div>
  <div class="dashboard-content">
    <div class="row">
      <div class="col-12">
        <form action="">
          <div class="card">
            <div class="card-body">
              <div class="row mb-2">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Your Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      aria-describedby="emailHelp"
                      name="name"
                      value="Ratih"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Your Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      aria-describedby="emailHelp"
                      name="email"
                      value="email@gmail.com"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="addressOne"
                      >Input Old Password</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="addressOne"
                      aria-describedby="emailHelp"
                      name="addressOne"
                      value="Setra Duta Cemara"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="addressTwo"
                      >Input New Password</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="addressTwo"
                      aria-describedby="emailHelp"
                      name="addressTwo"
                      value="Blok B2 No. 34"
                    />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Occupation">Occupation</label>
                    <select
                      name="Occupation"
                      id="Occupation"
                      class="form-control"
                    >
                      <option value="College Student">
                        College Student
                      </option>
                      <option value="Employee">Employee</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col text-right">
                  <button
                    type="submit"
                    class="btn btn-success px-5"
                  >
                    Save Now
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection