<div class="nav-header">
    <a href="{{ url('/') }}" class="brand-logo">
        <img class="logo-abbr" src="{{ asset('images/logo.png') }}" alt="">
        <img class="logo-compact" src="{{ asset('images/logo-text.png') }}" alt="">
        <img class="brand-title" src="{{ asset('images/logo-text.png') }}" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>

<div class="header border shadow-none">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left d-flex align-items-center" style="font-size: 20px;">
                    {{-- <img class="brand-title me-2" src="{{ asset('storage/' . $schoolLogo) }}" alt="School Logo"
                        style="height: 40px; width: auto; margin-right: 10px;"> --}}

                </div>

                <ul class="navbar-nav header-right">

                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <div class="pulse-css"></div>
                        </a>

                    </li>

                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <x-responsive-nav-link :href="route('profile.edit')">
                                <i class="icon-user"></i>
                                <span class="ml-2">Profile </span>
                            </x-responsive-nav-link>

                            <div class="dropdown-item">

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="your-link-styled-class">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout</span>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
