<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body shadow-sm">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list-nested"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link">
                    <i class="bi bi-house-door me-1"></i> Home
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link">
                    <i class="bi bi-telephone me-1"></i> Contact
                </a>
            </li>
        </ul>
        <!--end::Start Navbar Links-->

        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
            <!--begin::Navbar Search-->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                         class="user-image rounded-circle shadow-sm"
                         alt="User Image" width="35" height="35">
                    <span class="d-none d-md-inline fw-bold">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!-- User Header -->
                    <li class="user-header text-bg-primary text-center">
                        <img src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                             class="rounded-circle border border-light shadow-sm"
                             alt="User Image" width="80" height="80">
                        <p class="mt-2">
                            {{ Auth::user()->name }} <br>
                            <small class="text-white-50">{{ Auth::user()->email }}</small>
                            <small class="d-block">Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer -->
                    <li class="user-footer text-center">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-sm text-white me-2">Profile</a>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Sign out</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
        <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>
<!--end::Header-->

<!-- Custom CSS -->
<style>
    .nav-link:hover {
        background-color: #f8f9fa;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .user-image {
        object-fit: cover;
    }
    .user-header img {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
</style>
