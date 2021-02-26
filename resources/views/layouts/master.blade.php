<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Tracking Covid</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets/img/brand/favicon.png" type="image/png')}}">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css" type="text/css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css')}}">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.2.0" type="text/css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Sidenav -->
    @include('layouts.components.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.components.navbar')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">

              <div class="col-lg-6 col-5 text-right">
              </div>
            </div>
            <!-- Card stats -->
            {{-- <div class="row">
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats"> --}}
                  <!-- Card body -->
                  {{-- <div class="card-body">
                    <div class="row"> --}}
                      {{-- <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Positif</h5>
                        <span class="h2 font-weight-bold mb-0"></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-red text-white rounded-circle shadow">
                          <i class="ni ni-active-40"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                      <span class="text-mr-2">Orang </span>
                      <span class="text-nowrap"></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Sembuh</h5>
                        <span class="h2 font-weight-bold mb-0"></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-green text-white rounded-circle shadow">
                          <i class="ni ni-chart-pie-35"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                      <span class="text-mr-2">Orang</span>
                      <span class="text-nowrap"></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Meninggal</h5>
                        <span class="h2 font-weight-bold mb-0"></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                          <i class="ni ni-money-coins"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                      <span class="text-mr-2"></span>
                      <span class="text-nowrap">Orang</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Indonesia</h5>
                        <span class="h2 font-weight-bold mb-0"></span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                          <i class="ni ni-chart-bar-32"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                      <span class="text mr-2"></span>
                      <span class="text-nowrap">Orang</span>
                    </p> --}}
                  {{-- </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>

    <!-- Page content -->
    @yield('content')
      <!-- Footer -->
      @include('layouts.components.footer')
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>
