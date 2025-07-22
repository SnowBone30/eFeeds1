<!-- Sidebar -->
<div class="sidebar">
    <div class="logo">
        <img src="{{ asset('image/logo.png') }}" alt="eFeeds Go Logo" class="logo-img">
        <div>
            <h1>eFeeds Go.</h1>
            <p>Ready. Set. Feed.</p>
        </div>
    </div>

    <ul class="nav-menu">
        <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <div class="nav-icon">
                    <img src="{{ asset('image/dashboard_icon.png') }}" alt="Dashboard">
                </div>
                Dashboard
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('inventory.*') ? 'active' : '' }}">
            <a href="{{ route('inventory.index') }}" class="nav-link">
                <div class="nav-icon">
                    <img src="{{ asset('image/icon_inventory.png') }}" alt="Inventory">
                </div>
                Inventory
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
            <a href="{{ route('users.index') }}" class="nav-link">
                <div class="nav-icon">
                    <img src="{{ asset('image/user_role_icon.png') }}" alt="User Management">
                </div>
                User Management
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('reports.*') ? 'active' : '' }}">
            <a href="{{ route('reports.index') }}" class="nav-link">
                <div class="nav-icon">
                    <img src="{{ asset('image/report_icon.png') }}" alt="Reports">
                </div>
                Reports
            </a>
        </li>
        <li class="logout-nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                    <div class="nav-icon">
                        <img src="{{ asset('image/logout_icon.png') }}" alt="Logout">
                    </div>
                    Logout
                </a>
            </form>
        </li>
    </ul>
</div>