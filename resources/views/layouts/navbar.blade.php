<nav class="top-navbar navbar navbar-expand-lg navbar-light"
    style="background: linear-gradient(to right, #FFFFFF 15%, #191970);">
    <div class="container">
        <span style="margin-left: -1rem">
            <span>
                <img src="{{ asset('build/assets/TelkomIndonesia.png') }}" alt="Logo Telkom"
                    style="width: 3rem; margin-right:0rem; padding-bottom:0.8rem; margin-left: -5rem;">
            </span>

            <a class="navbar-brand" href="{{ route('user_sheet.index') }}">PCP TELKOM</a>

        </span>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle profile-link" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
                        <!-- Sidebar Content -->
                        <div class="sidebar-content p-3 bg-gray-200 rounded mt-8">
                            <strong>Your Roles:</strong>
                            @if($userRoles->isEmpty())
                                <span>No Roles</span>
                            @else
                                {{ $userRoles->join(', ') }}
                            @endif
                        </div>
                    </ul>
                </li>
            </ul>
        </div>

        <style>
            .profile-link {
                color: #ffffff;
                /* Warna teks menjadi putih */
            }

            .profile-link:focus,
            .profile-link:active,
            .profile-link.show {
                color: #ffffff;
                /* Warna teks tetap putih saat dropdown terbuka atau aktif */
            }

            .profile-link.dropdown-toggle::after {
                color: #ffffff;
                /* Warna ikon dropdown tetap putih */
            }

            /* Opsional: menambahkan hover effect */
            .profile-link:hover {
                color: #cccccc;
                /* Warna teks saat hover menjadi abu-abu muda */
            }

            /* Flexbox untuk memastikan elemen ke kanan */
            .navbar-nav.flex-right {
                margin-left: 10rem;
            }
        </style>


    </div>
</nav>