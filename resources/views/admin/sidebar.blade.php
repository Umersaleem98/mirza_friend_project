<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
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
            <li
             class="active"
             >
              <a class="sidenav-item-link" href="{{url('dashboard')}}">
                <i class="mdi mdi-briefcase-account-outline"></i>
                <span class="nav-text">Business Dashboard</span>
              </a>
            </li>
            <li class="section-title">
              Apps
            </li>
            <li
             >
              <a class="sidenav-item-link" href="{{url('student_list')}}">
                <i class="mdi mdi-wechat"></i>
                <span class="nav-text">Students List</span>
              </a>
            </li>
            <li
             >
              <a class="sidenav-item-link" href="{{url('student_create')}}">
                <i class="mdi mdi-phone"></i>
                <span class="nav-text">Add Students</span>
              </a>
            </li>
            <li
             >
              <a class="sidenav-item-link" href="team.html">
                <i class="mdi mdi-account-group"></i>
                <span class="nav-text">Team</span>
              </a>
            </li>
            <li
             >
              <a class="sidenav-item-link" href="calendar.html">
                <i class="mdi mdi-calendar-check"></i>
                <span class="nav-text">Calendar</span>
              </a>
            </li>
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                aria-expanded="false" aria-controls="email">
                <i class="mdi mdi-email"></i>
                <span class="nav-text">email</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="email"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                      <li >
                        <a class="sidenav-item-link" href="email-inbox.html">
                          <span class="nav-text">Email Inbox</span>

                        </a>
                      </li>
                      <li >
                        <a class="sidenav-item-link" href="email-details.html">
                          <span class="nav-text">Email Details</span>

                        </a>
                      </li>

                      <li >
                        <a class="sidenav-item-link" href="email-compose.html">
                          <span class="nav-text">Email Compose</span>

                        </a>
                      </li>
                </div>
              </ul>
            </li>
        </ul>

      </div>


    </div>
  </aside>
