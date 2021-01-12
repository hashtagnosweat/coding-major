  <nav
      class="navbar navbar-expand-lg navbar-light navbar-codingmajor fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="/images/logo.svg" alt="Logo" />
          <span style="color: #3252df"
            >Coding<span style="color: #152c5b">Major</span></span
          >
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('categories') }}" class="nav-link">Categories</a>
            </li>

            </li>
          </ul>
        </div>
      </div>
    </nav>