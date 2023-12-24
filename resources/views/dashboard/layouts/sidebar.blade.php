<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" /dashboard " >
        <img src="{{ asset('assets/dashboard/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">App Name</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/dashboard">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/dashboard/profile">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Unit</h6>
        </li>
        @if (Auth::user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link " href="{{ Route('unit.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-building text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Unit</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ Route('advertisement.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-notification-70 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Iklan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ Route('faq.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chat-round text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">FAQ</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ Route('user.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-circle-08 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">User Management</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ Route('order.list') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bag-17 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Riwayat Pesanan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ Route('setting.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-settings text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pengaturan</span>
          </a>
        </li>
        @endif

        @if(Auth::user()->role == 'marketing')
        <li class="nav-item">
          <a class="nav-link " href="{{ Route('advertisement.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-notification-70 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Iklan</span>
          </a>
        </li>
        @endif
        
        @if(Auth::user()->role == 'penjaga')
        <li class="nav-item">
          <a class="nav-link " href="{{ Route('order.list') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bag-17 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Riwayat Pesanan</span>
          </a>
        </li>
        @endif

        @if (Auth::user()->role == 'user')
        <li class="nav-item">
          <a class="nav-link " href="{{ Route('order.history') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bag-17 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Riwayat Pesanan</span>
          </a>
        </li>
        @endif
      </ul>
    </div>
    <div class="sidenav-footer mx-4 ">
      <a href="/dashboard/profile" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Profile</a>
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm mb-0 w-100"> Logout </button>
      </form>
    </div>
  </aside>