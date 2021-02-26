<link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="{{asset('javascript:void(0)')}}">
            <span class="nav-link-text-default" >TRACKING COVID</span>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('admin')}}">
                <i class="fa fa-home text-default"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            </ul>
            <br>
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="nav-link">
                    <span class="nav-link-text"><b>Master Data</b></span>
                </div>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/provinsi')}}">
                <i class="fa fa-building text-default"></i>
                <span class="nav-link-text">Provinsi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/kota')}}">
                <i class="fa fa-building-o text-default"></i>
                <span class="nav-link-text">Kota / Kabupaten</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/kecamatan')}}">
                <i class="fa fa-building text-default"></i>
                <span class="nav-link-text">Kecamatan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/desa')}}">
                <i class="fa fa-building-o text-default"></i>
                <span class="nav-link-text">Kelurahan / Desa</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/rw')}}">
                  <i class="fa fa-building text-default"></i>
                  <span class="nav-link-text">RW</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/kasus')}}">
                  <i class="fa fa-circle text-default"></i>
                  <span class="nav-link-text">Kasus</span>
                </a>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
