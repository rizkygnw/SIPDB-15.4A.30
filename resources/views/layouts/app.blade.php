<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- JS Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome untuk icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <script src="{{ asset('build/assets/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- Notifikasi Popup --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        :root {
            --primary-color: #3b82f6;
            --secondary-color: #64748b;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --warning-color: #f59e0b;
            --info-color: #06b6d4;
            --dark-color: #1e293b;
            --light-color: #f8fafc;
            --border-color: #e2e8f0;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--dark-color);
            background-color: #f1f5f9;
            font-size: 14px;
        }

        /* Container styling */
        .main-container {
            min-height: 100vh;
            background-color: #f1f5f9;
        }

        /* Header styling */
        .page-header {
            background: #ffffff;
            border-bottom: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
        }

        .header-content {
            padding: 1.5rem 0;
        }

        .header-title {
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.5rem;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .header-icon {
            color: var(--primary-color);
            font-size: 1.25rem;
        }

        /* Main content styling */
        .main-content {
            padding: 2rem 0;
        }

        /* Card styling */
        .content-card {
            background: #ffffff;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-color);
            padding: 2rem;
            margin-bottom: 1.5rem;
        }

        /* Button styling */
        .btn {
            border-radius: var(--radius-md);
            font-weight: 500;
            padding: 0.625rem 1.25rem;
            font-size: 0.875rem;
            transition: all 0.2s ease;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: #2563eb;
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .btn-secondary {
            background-color: var(--secondary-color);
            color: white;
        }

        .btn-secondary:hover {
            background-color: #475569;
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .btn-success {
            background-color: var(--success-color);
            color: white;
        }

        .btn-success:hover {
            background-color: #059669;
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .btn-danger {
            background-color: var(--danger-color);
            color: white;
        }

        .btn-danger:hover {
            background-color: #dc2626;
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .btn-outline-primary {
            background-color: transparent;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        /* Form styling */
        .form-control {
            border-radius: var(--radius-md);
            border: 1px solid var(--border-color);
            padding: 0.625rem 1rem;
            font-size: 0.875rem;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            outline: none;
        }

        .form-label {
            font-weight: 500;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
        }

        /* Table styling */
        .table {
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border-color);
        }

        .table thead th {
            background-color: #f8fafc;
            border-bottom: 1px solid var(--border-color);
            font-weight: 600;
            color: var(--dark-color);
            font-size: 0.875rem;
            padding: 1rem;
        }

        .table tbody td {
            padding: 1rem;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.875rem;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        /* Alert styling */
        .alert {
            border-radius: var(--radius-md);
            border: none;
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .alert-success {
            background-color: #ecfdf5;
            color: #065f46;
            border-left: 4px solid var(--success-color);
        }

        .alert-danger {
            background-color: #fef2f2;
            color: #991b1b;
            border-left: 4px solid var(--danger-color);
        }

        .alert-warning {
            background-color: #fffbeb;
            color: #92400e;
            border-left: 4px solid var(--warning-color);
        }

        .alert-info {
            background-color: #f0f9ff;
            color: #0c4a6e;
            border-left: 4px solid var(--info-color);
        }

        /* Badge styling */
        .badge {
            font-size: 0.75rem;
            font-weight: 500;
            padding: 0.375rem 0.75rem;
            border-radius: var(--radius-md);
        }

        /* Navigation enhancements */
        nav {
            background: #ffffff;
            border-bottom: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .header-content {
                padding: 1rem 0;
            }

            .header-title {
                font-size: 1.25rem;
            }

            .content-card {
                margin: 0 0.5rem 1.5rem 0.5rem;
                padding: 1.5rem;
            }

            .main-content {
                padding: 1rem 0;
            }

            .btn {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
            border-radius: var(--radius-sm);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--dark-color);
        }

        /* Input group styling */
        .input-group {
            border-radius: var(--radius-md);
            overflow: hidden;
        }

        .input-group .form-control {
            border-radius: 0;
        }

        .input-group .form-control:first-child {
            border-top-left-radius: var(--radius-md);
            border-bottom-left-radius: var(--radius-md);
        }

        .input-group .form-control:last-child {
            border-top-right-radius: var(--radius-md);
            border-bottom-right-radius: var(--radius-md);
        }

        /* Card hover effect */
        .content-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            transition: all 0.2s ease;
        }

        /* Loading spinner */
        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
        }

        /* Utility classes */
        .text-muted {
            color: var(--secondary-color) !important;
        }

        .border-radius-lg {
            border-radius: var(--radius-lg) !important;
        }

        .shadow-sm {
            box-shadow: var(--shadow-sm) !important;
        }

        .shadow-md {
            box-shadow: var(--shadow-md) !important;
        }

        .shadow-lg {
            box-shadow: var(--shadow-lg) !important;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="main-container">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="page-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header-content">
                            <div class="max-w-7xl mx-auto px-4 px-sm-3 px-lg-4">
                                <h1 class="header-title">
                                    <i class="fas fa-dashboard header-icon"></i>
                                    {{ $header }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="content-card">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission loading state
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function() {
                const submitBtn = form.querySelector('button[type="submit"]');
                if (submitBtn && !submitBtn.disabled) {
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Loading...';
                    submitBtn.disabled = true;

                    // Re-enable after 5 seconds as fallback
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 5000);
                }
            });
        });

        // Auto-hide alerts after 5 seconds
        document.querySelectorAll('.alert').forEach(alert => {
            setTimeout(() => {
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-10px)';
                setTimeout(() => alert.remove(), 300);
            }, 5000);
        });
    </script>
</body>
</html>
