<aside class="left-sidebar"
       data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">


    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <div class="navbar-header">
        <a class="navbar-brand"
           href="index.html">
          <img src="{{asset('assets/images/nss-logo-244.png')}}"
               alt="homepage"
               class="light-logo"/>
        </a>
      </div>
      <ul id="sidebarnav">
        <li class="sidebar-item selected">
          <a class="sidebar-link waves-effect waves-dark sidebar-link active"  href="/"  aria-expanded="false">
            <i class="fa-regular fa-pen-to-square me-4"></i>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item bg-light">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('all.services')}}"  aria-expanded="false">
            <i class="fa-solid fa-sliders me-4"></i>
            <span class="hide-menu">All Services</span>
          </a>
        </li>
        <li class="sidebar-item bg-light">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('all.details')}}" aria-expanded="false">
            <i class="fa-regular fa-user me-4"></i>
            <span class="hide-menu">Your Details</span>
          </a>
        </li>
      </ul>

    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
