<header class="main-header" id="header">
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>

        <span class="page-title">Dashboard</span>

        <div class="navbar-right">
            <!-- search form -->
            <div class="search-form">
                <form action="index.html" method="get">
                    <div class="input-group input-group-sm" id="input-group-search">
                        <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
                        <div class="input-group-append">
                            <button class="btn" type="button">/</button>
                        </div>
                    </div>
                </form>
            </div>

            <ul class="nav navbar-nav">
                <!-- Offcanvas -->

                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <img src="admin/images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                        <span class="d-none d-lg-inline-block">
                            {{ Auth::user()->name }}
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a class="dropdown-link-item" href="user-profile.html">
                                <i class="mdi mdi-account-outline"></i>
                                <span class="nav-text">My Profile</span>
                            </a>
                        </li>

                        <li class="dropdown-footer">
                            <a class="dropdown-link-item" href="{{ url('logout') }}">
                                <i class="mdi mdi-logout"></i> Log Out
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>


<script>
    function clearCacheAndLogout() {
        if ('caches' in window) {
            caches.keys().then(function(names) {
                for (let name of names) caches.delete(name);
            });
        }
        window.location.href = '{{ url("logout") }}';
    }
</script>
