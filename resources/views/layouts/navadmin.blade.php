@php
    $currentRouteName = Route::currentRouteName();
@endphp
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="bi-shield-check"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Nea Beauty Tissue </div>
    </a>
    <hr class="sidebar-divider my-0" style="color: white">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('adminsatuan.index') }}">
            <i class="bi bi-box"></i>
            <span>Manajemen Varian Produk</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('adminproduk.index') }}">
            <i class="bi bi-boxes"></i>
            <span>Manajemen Produk </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admintransaksi.index') }}">
            <i class="bi bi-currency-dollar"></i>
            <span>Manajemen Transaksi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i>
            <span>{{ __('Logout') }}</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </li>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>

