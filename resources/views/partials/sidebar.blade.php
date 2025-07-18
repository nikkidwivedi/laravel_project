{{-- ======= Sidebar ======= --}}
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>{{-- End Dashboard Nav --}}

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li>{{-- End Tables Nav --}}

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('settings.profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>{{-- End Profile Page Nav --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li>{{-- End Blank Page Nav --}}

    </ul>

  </aside>{{-- End Sidebar--}}