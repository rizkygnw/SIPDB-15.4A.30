<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <div class="bg-white/20 backdrop-blur-sm p-2 rounded-lg">
                        {{-- <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg> --}}
                        <img src="{{ asset('image/Logo SIPSIS.png') }}" alt="Logo SIPSIS" class="w-12 h-12 rounded-lg" />
                    </div>
                    <a href="{{ Auth::user()->usertype == 'admin' ? route('admin.dashboard') : route('dashboard') }}" class="flex items-center space-x-3 hover:opacity-80 transition-opacity duration-200">
                        <div class="hidden lg:block">
                            <h1 class="text-xl font-bold text-gray-800">SIPSIS</h1>
                            <p class="text-xs text-gray-500">Sistem Informasi Penerimaan Siswa Baru</p>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="Auth::user()->usertype == 'admin' ? route('admin.dashboard') : route('dashboard')" :active="Auth::user()->usertype == 'admin' ? request()->routeIs('admin.dashboard') : request()->routeIs('dashboard')" class="nav-link-modern">
                        <i class="fas fa-home me-2"></i>
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    {{-- Admin Links --}}
                    @if (Auth::user()->usertype == 'admin')
                    <x-nav-link href="{{ url('admin/students') }}" :active="request()->is('students')" class="nav-link-modern">
                        <i class="fas fa-users me-2"></i>
                        {{ __('Students') }}
                    </x-nav-link>

                    <x-nav-link href="{{ url('admin/documents') }}" :active="request()->routeIs('documents')" class="nav-link-modern">
                        <i class="fas fa-file-alt me-2"></i>
                        {{ __('Documents') }}
                    </x-nav-link>

                    <x-nav-link href="{{ url('admin/departments') }}" :active="request()->routeIs('departments')" class="nav-link-modern">
                        <i class="fas fa-building me-2"></i>
                        {{ __('Departments') }}
                    </x-nav-link>

                    <x-nav-link href="{{ url('admin/payments') }}" :active="request()->routeIs('payments')" class="nav-link-modern">
                        <i class="fas fa-credit-card me-2"></i>
                        {{ __('Payments') }}
                    </x-nav-link>

                    <x-nav-link href="{{ url('admin/logs') }}" :active="request()->routeIs('logs')" class="nav-link-modern">
                        <i class="fas fa-list-alt me-2"></i>
                        {{ __('Logs') }}
                    </x-nav-link>
                    @endif

                    {{-- User Links --}}
                    @if (Auth::user()->usertype == 'user')
                    <x-nav-link href="{{ url('user/registrations/create') }}" :active="request()->routeIs('registrations')" class="nav-link-modern">
                        <i class="fas fa-plus-circle me-2"></i>
                        {{ __('Pendaftaran') }}
                    </x-nav-link>

                    <x-nav-link href="{{ url('user/registrations') }}" :active="request()->routeIs('registrations')" class="nav-link-modern">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ __('Status') }}
                    </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-lg text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-semibold text-sm">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                                </div>
                                <div class="text-left">
                                    <div class="font-medium">{{ Auth::user()->name }}</div>
                                    <div class="text-xs text-gray-500">{{ Auth::user()->usertype }}</div>
                                </div>
                                <svg class="fill-current h-4 w-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-3 border-b border-gray-100">
                            <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                        </div>

                        <x-dropdown-link :href="route('profile.edit')" class="flex items-center px-4 py-2 hover:bg-gray-50">
                            <i class="fas fa-user me-3 text-gray-400"></i>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <div class="border-t border-gray-100">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" class="flex items-center px-4 py-2 text-red-600 hover:bg-red-50"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt me-3"></i>
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-lg text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-200 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white border-t border-gray-100">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50">
                <i class="fas fa-home me-3 text-gray-400"></i>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            {{-- Admin Mobile Links --}}
            @if (Auth::user()->usertype == 'admin')
            <x-responsive-nav-link href="{{ url('admin/students') }}" :active="request()->is('students')" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50">
                <i class="fas fa-users me-3 text-gray-400"></i>
                {{ __('Students') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ url('admin/documents') }}" :active="request()->routeIs('documents')" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50">
                <i class="fas fa-file-alt me-3 text-gray-400"></i>
                {{ __('Documents') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ url('admin/departments') }}" :active="request()->routeIs('departments')" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50">
                <i class="fas fa-building me-3 text-gray-400"></i>
                {{ __('Departments') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ url('admin/payments') }}" :active="request()->routeIs('payments')" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50">
                <i class="fas fa-credit-card me-3 text-gray-400"></i>
                {{ __('Payments') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ url('admin/logs') }}" :active="request()->routeIs('logs')" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50">
                <i class="fas fa-list-alt me-3 text-gray-400"></i>
                {{ __('Logs') }}
            </x-responsive-nav-link>
            @endif

            {{-- User Mobile Links --}}
            @if (Auth::user()->usertype == 'user')
            <x-responsive-nav-link href="{{ url('user/registrations/create') }}" :active="request()->routeIs('registrations')" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50">
                <i class="fas fa-plus-circle me-3 text-gray-400"></i>
                {{ __('Pendaftaran') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ url('user/registrations') }}" :active="request()->routeIs('registrations')" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50">
                <i class="fas fa-check-circle me-3 text-gray-400"></i>
                {{ __('Status') }}
            </x-responsive-nav-link>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 bg-gray-50">
            <div class="px-4 py-2">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                        <span class="text-white font-semibold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                    </div>
                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        <div class="text-xs text-blue-600 font-medium">{{ ucfirst(Auth::user()->usertype) }}</div>
                    </div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="flex items-center px-4 py-3 text-gray-700 hover:bg-white">
                    <i class="fas fa-user me-3 text-gray-400"></i>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" class="flex items-center px-4 py-3 text-red-600 hover:bg-red-50"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt me-3"></i>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>

    <style>
        /* Custom navigation styles */
        .nav-link-modern {
            display: inline-flex;
            align-items: center;
            padding: 0.75rem 1rem;
            margin: 0 0.125rem;
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 0.875rem;
            transition: all 0.2s ease;
            color: #6b7280;
            text-decoration: none;
        }

        .nav-link-modern:hover {
            background-color: #f3f4f6;
            color: #374151;
            transform: translateY(-1px);
        }

        .nav-link-modern.active {
            background-color: #3b82f6;
            color: white;
            box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.3);
        }

        .nav-link-modern.active:hover {
            background-color: #2563eb;
            color: white;
        }

        /* Dropdown enhancements */
        .dropdown-menu {
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 1px solid #e5e7eb;
        }

        /* Mobile menu improvements */
        @media (max-width: 640px) {
            .nav-mobile-link {
                border-radius: 0.375rem;
                margin: 0.125rem 0.5rem;
            }
        }

        /* Animation for dropdown arrow */
        button[aria-expanded="true"] svg {
            transform: rotate(180deg);
        }

        /* Notification badge pulse */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .notification-badge {
            animation: pulse 2s infinite;
        }
    </style>
</nav>
