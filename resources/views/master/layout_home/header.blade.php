  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>Toko Parfum</span>
      </a>

      <nav id="navbar" class="navbar navbar-expand-lg">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
          <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{ route('pricing') }}">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Premium Parfum</a></li>
              <li><a href="#">Arabian Parfum</a></li>
              <li><a href="#">Haram Parfum</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{route('login')}}">login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->