@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background:#cc2f6f;">
    <div class="container">

        {{-- Brand --}}
        <a href="{{ route('shop') }}" class="navbar-brand d-flex align-items-center">
            <img src="{{ Vite::asset('resources/images/logo.png') }}"
                 alt="neabeauty Logo"
                 class="me-2"
                 style="height: 28px;">
            <span class="fw-semibold">Nea Beauty Tissue</span>
        </a>

        {{-- Toggler --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            {{-- Menu Kiri --}}
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('shop') }}"
                       class="nav-link {{ $currentRouteName === 'shop' ? 'active fw-semibold' : '' }}">
                        <i class="bi bi-house me-1"></i>
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('katalog') }}"
                       class="nav-link {{ $currentRouteName === 'katalog' ? 'active fw-semibold' : '' }}">
                        <i class="bi bi-grid me-1"></i>
                        Katalog
                    </a>
                </li>
            </ul>

            {{-- Menu Kanan --}}
            <ul class="navbar-nav ms-auto align-items-center gap-2">

                @auth
                    {{-- Icon Riwayat Transaksi --}}
                    <li class="nav-item">
                        <a href="{{ route('transaksi.riwayat') }}"
                           class="nav-link position-relative {{ $currentRouteName === 'transaksi.riwayat' ? 'active' : '' }}"
                           data-bs-toggle="tooltip"
                           data-bs-placement="bottom"
                           title="Riwayat Transaksi">
                            <i class="bi bi-clock-history fs-5"></i>
                        </a>
                    </li>

                    {{-- Profile Dropdown --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center"
                           href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle fs-5 me-1"></i>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                            <span class="dropdown-item-text text-muted small">
                                {{ Auth::user()->email }}
                            </span>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item text-danger"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right me-1"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}"
                                  method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">
                            <i class="bi bi-box-arrow-in-right fs-5"></i>
                        </a>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>
