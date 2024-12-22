<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark" aria-label="Main Sidebar">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand py-3 px-3 text-center border-bottom">
        <a href="../" class="brand-link text-decoration-none d-flex align-items-center">
            <!--begin::Brand Image-->
            <img src="../../../dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" width="40">
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light ms-2 text-white">SIPDB</span>
            <!--end::Brand Text-->
        </a>
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <!-- Master Data Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <i class="bi bi-database me-2"></i> <!-- Bootstrap Icon -->
                        <span>Master Data</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="nav nav-treeview collapse ms-4">
                        <li class="nav-item">
                            <a href="{{url('/student')}}" class="nav-link text-light small">
                                <i class="bi bi-person me-2"></i>Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/userdata')}}" class="nav-link text-light small">
                                <i class="bi bi-people me-2"></i>Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/departments')}}" class="nav-link text-light small">
                                <i class="bi bi-building me-2"></i>Departments
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Transaction Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <i class="bi bi-cash-coin me-2"></i>
                        <span>Transaction</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="nav nav-treeview collapse ms-4">
                        <li class="nav-item">
                            <a href="{{url('/registrations')}}" class="nav-link text-light small">
                                <i class="bi bi-clipboard-check me-2"></i>Registration
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/payments')}}" class="nav-link text-light small">
                                <i class="bi bi-wallet2 me-2"></i>Payments
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Log and Document Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <i class="bi bi-file-earmark-text me-2"></i>
                        <span>Log and Document</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul class="nav nav-treeview collapse ms-4">
                        <li class="nav-item">
                            <a href="{{url('/logs')}}" class="nav-link text-light small">
                                <i class="bi bi-list-task me-2"></i>Logs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/documents')}}" class="nav-link text-light small">
                                <i class="bi bi-folder2-open me-2"></i>Documents
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
