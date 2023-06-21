<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">JNEC-EIC</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        

       
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->email}}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-hand-index"></i><span>Content Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/add_slider_image">
              <i class="bi bi-circle"></i><span>Add Slider Image</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/add_advisory">
              <i class="bi bi-circle"></i><span>Add Advisory</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/add_incubates">
              <i class="bi bi-circle"></i><span>Add Incubates</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/add_mentor">
              <i class="bi bi-circle"></i><span>Add Mentor</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/add_stakeholder">
              <i class="bi bi-circle"></i><span>Add Stakeholder</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/add_facilities">
              <i class="bi bi-circle"></i><span>Add Facilities</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
      
      
        <li class="nav-item">
          <a class="nav-link " href="/dashboard/add_event">
            <i class="bi bi-calendar2-event"></i>
            <span>Event Management</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link " href="/dashboard/view_feedback">
            <i class="bi bi-person-x"></i>
            <span>View Feedback</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link " href="/dashboard/view_application">
            <i class="bi bi-text-left"></i>
            <span>View Applications</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link " href="/dashboard/add_home">
            <i class="bi bi-shop"></i>
            <span>Home Page Content</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link " href="/dashboard/add_about">
            <i class="bi bi-pencil-square"></i>
            <span>About Page Content</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link " href="/dashboard/add_documents">
            <i class="bi bi-receipt"></i>
            <span>Documents</span>
          </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link " href="/dashboard/add_FAQ">
            <i class="bi bi-receipt"></i>
            <span>FAQ</span>
          </a>
        </li><!-- End Dashboard Nav -->
      </li><!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/add_admin">
              <i class="bi bi-circle"></i><span>Add Admin</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>

  </aside><!-- End Sidebar-->