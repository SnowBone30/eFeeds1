 <div class="sidebar">
            <div class="logo">
                <img src="{{ asset('image/logo.png') }}" alt="eFeeds Go Logo" class="logo-img">
                <div>
                    <h1>eFeeds Go.</h1>
                    <p>Ready. Set. Feed.</p>
                </div>
            </div>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link">
                        <div class="nav-icon">
                            <img src="{{ asset('image/dashboard_icon.png') }}">
                        </div>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('inventory') }}" class="nav-link">
                        <div class="nav-icon">
                            <img src="{{ asset('image/icon_inventory.png') }}">
                        </div>
                        Inventory
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('user_management') }}" class="nav-link">
                        <div class="nav-icon">
                            <img src="{{ asset('image/user_role_icon.png') }}">
                        </div>
                        User Management
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('reports') }}" class="nav-link">
                        <div class="nav-icon">
                            <img src="{{ asset('image/report_icon.png') }}">
                        </div>
                        Reports
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/welcome') }}" class="nav-link">
                        <div class="nav-icon">
                            <img src="{{ asset('image/logout_icon.png') }}">
                        </div>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
