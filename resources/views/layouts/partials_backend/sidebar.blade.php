<div class="user-panel mt-3 mb-3 pb-3 d-flex align-items-center">
    <div class="image">
        <img src="{{ asset('img/dki-jakarta.png') }}" class="img-fluid">
    </div>
    <div class="info">
        <a href="{{ route('admin.dashboard') }}" class="d-block text-light">ASEAN HUB 2026</a>
    </div>
</div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @if (Auth::guard('admin')->check())
            {{-- DASHBOARD --}}
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link @yield('nav-dashboard')">
                    <i class="nav-icon fa-solid fa-building-columns"></i>
                    <p>Main Dashboard</p>
                </a>
            </li>

            {{-- USER ACCESS --}}
            <li class="nav-header mt-2">USER ACCESS</li>
            <li class="nav-item">
                <a href="{{ route('admin.judges.index') }}" class="nav-link @yield('nav-judges')">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>Judges</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.participants.index') }}" class="nav-link @yield('nav-participants')">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>Participants</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.voters.index') }}" class="nav-link @yield('nav-voters')">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>Voters</p>
                </a>
            </li>

            {{-- PARTICIPANT RESULTS --}}
            <li class="nav-header mt-2">PARTICIPANT RESULTS</li>
            <li class="nav-item">
                <a href="{{ route('admin.urban-design.index') }}" class="nav-link @yield('nav-urban-design')">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>Urban Design</p>
                </a>
            </li>
        @endif

        @if (Auth::guard('judge')->check())
            <li class="nav-item">
                <a href="{{ route('judges.dashboard') }}" class="nav-link @yield('nav-dashboard')">
                    <i class="nav-icon fas fa-building-columns"></i>
                    <p>Main Dashboard</p>
                </a>
            </li>
            <li class="nav-header mt-2">PROFILE JUDGES</li>
            <li class="nav-item">
                <a href="{{ route('judges.update-profile.index') }}" class="nav-link @yield('nav-update-profile')">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>Update Profile</p>
                </a>
            </li>
            <li class="nav-header mt-2">RESULTS OF JUDGES</li>
            <li class="nav-item">
                <a href="{{ route('judges.urban-design.index') }}" class="nav-link @yield('nav-urban-design')">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>Urban Design</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('judges.assessment-results.index') }}" class="nav-link @yield('nav-assessment-results')">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>Assessment Results</p>
                </a>
            </li>
        @endif

        @if (Auth::guard('participant')->check())
            {{-- DASHBOARD --}}
            <li class="nav-item">
                <a href="{{ route('participants.dashboard') }}" class="nav-link @yield('nav-dashboard')">
                    <i class="nav-icon fas fa-building-columns"></i>
                    <p>Main Dashboard</p>
                </a>
            </li>

            <li class="nav-header mt-2">PROFILE PARTICIPANT</li>
            <li class="nav-item">
                <a href="{{ route('participants.update-profile.index') }}" class="nav-link @yield('nav-update-profile')">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>Update Profile</p>
                </a>
            </li>

            {{-- PARTICIPANT RESULTS --}}
            <li class="nav-header mt-2">PARTICIPANT RESULTS</li>
            <li class="nav-item">
                <a href="{{ route('participants.urban-design.index') }}" class="nav-link @yield('nav-urban-design')">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>Urban Design</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('participants.assessment-results.index') }}" class="nav-link @yield('nav-assessment-results')">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>Assessment Results</p>
                </a>
            </li>
        @endif

        {{-- LOGOUT --}}
        <li class="nav-header mt-2">LOGOUT</li>
        <li class="nav-item">
            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                <p>Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>

    </ul>
</nav>
