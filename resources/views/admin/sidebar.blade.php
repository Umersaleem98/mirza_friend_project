<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Application Brand -->
        <div class="app-brand">
            <a href="{{url('dashboard')}}">
                <img src="admin/images/logo.png" alt="Mono">
                <span class="brand-name">MONO</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="active">
                    <a class="sidenav-item-link" href="{{url('dashboard')}}">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text">Student Dashboard</span>
                    </a>
                </li>
                <li class="section-title">
                    Apps
                </li>
                <!-- Students Section -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#students"
                        aria-expanded="false" aria-controls="students">
                        <i class="mdi mdi-email"></i>
                        <span class="nav-text">Students</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="students" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{url('student_list')}}">
                                    <span class="nav-text">Students List</span>
                                </a>
                            </li>
                            @if(Auth::user()->user_type != 'user')
                            <li>
                                <a class="sidenav-item-link" href="{{url('student_create')}}">
                                    <span class="nav-text">Add Students</span>
                                </a>
                            </li>
                            @endif
                        </div>
                    </ul>
                </li>
                <!-- Users Section -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                        aria-expanded="false" aria-controls="users">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">Users</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="users" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{url('user_list')}}">
                                    <span class="nav-text">Users List</span>
                                </a>
                            </li>
                            @if(Auth::user()->user_type != 'user')
                            <li>
                                <a class="sidenav-item-link" href="{{url('user_create')}}">
                                    <span class="nav-text">Add Users</span>
                                </a>
                            </li>
                            @endif
                        </div>
                    </ul>
                </li>
                <li>
                    <a class="sidenav-item-link" href="calendar.html">
                        <i class="mdi mdi-calendar-check"></i>
                        <span class="nav-text">Calendar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
