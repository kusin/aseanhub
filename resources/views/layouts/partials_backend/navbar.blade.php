<ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
</ul>
<ul class="navbar-nav ml-auto">
    <li class="nav-item d-none d-sm-inline-block">

        @if (Auth::guard('admin')->check())
            <span class="nav-link text-muted">
                <i class="fa-solid fa-user-gear mr-2"></i>You are logged in as Administrator
            </span>
        @endif

        @if (Auth::guard('judge')->check())
            <span class="nav-link text-muted">
                <i class="fa-solid fa-user-gear mr-2"></i>You are logged in as Judges
            </span>
        @endif

        @if (Auth::guard('participant')->check())
            <span class="nav-link text-muted">
                <i class="fa-solid fa-user-gear mr-2"></i>You are logged in as Participants
            </span>
        @endif

    </li>
</ul>
