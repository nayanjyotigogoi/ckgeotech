<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Ck Geo Tech Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicon -->
    <link rel="icon" href="images/favicon_io/favicon.ico" type="image/x-icon">

    <!-- Standard Icon -->
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico" type="image/x-icon">

    <!-- PNG Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">

    <!-- Android & Chrome -->
    <link rel="manifest" href="images/favicon_io/site.webmanifest">

    <!-- Safari Pinned Tab -->
    <link rel="mask-icon" href="images/favicon_io/safari-pinned-tab.svg" color="#0054a6">

    <!-- Microsoft Tiles -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon_io/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/admin" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-sm-block">Ck Geo Tech Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <!-- End Search Icon -->

        <li class="nav-item dropdown">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a>
          <!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Ck Geo Tech Admin</h6>
              <span>ADMIN</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              <!-- <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a> -->
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- Dashboard -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- About Page -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#aboutMenu" role="button" aria-expanded="false"
          aria-controls="aboutMenu">
          <i class="bi bi-info-circle"></i>
          <span>About Page</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <div class="collapse" id="aboutMenu">
          <ul class="nav flex-column ms-3">

            {{-- Optional "Add" link - only if you add a separate create form later --}}
            {{--
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.about.create') }}">
                <i class="bi bi-plus-circle"></i> Add About
              </a>
            </li>
            --}}

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.about.edit') }}">
                <i class="bi bi-pencil"></i> Edit About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.about.view') }}">
                <i class="bi bi-eye"></i> View About
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Product Page -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#productMenu" role="button" aria-expanded="false"
          aria-controls="productMenu">
          <i class="bi bi-box-seam"></i>
          <span>Product Page</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <div class="collapse" id="productMenu">
          <ul class="nav flex-column ms-3">


            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.product.create') }}">
                <i class="bi bi-plus-circle"></i> Add Product
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.product.view') }}">
                <i class="bi bi-eye"></i> View Product
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Projects Page -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#projectMenu" role="button" aria-expanded="false"
          aria-controls="projectMenu">
          <i class="bi bi-grid-3x3-gap"></i>


          <span>Projects Page</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <div class="collapse" id="projectMenu">
          <ul class="nav flex-column ms-3">

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.project.create') }}">
                <i class="bi bi-plus-circle"></i> Add Project
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.project.view') }}">
                <i class="bi bi-eye"></i> View Projects
              </a>
            </li>

          </ul>
        </div>
      </li>

      <!-- Silchar Survey Work Uploads -->
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.silchar.users') ? '' : 'collapsed' }}"
          href="{{ route('admin.silchar.users') }}">
          <i class="bi bi-folder-symlink"></i>
          <span>Silchar Survey Uploads</span>
        </a>
      </li>

      <!-- Gallery Section -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#galleryMenu" role="button" aria-expanded="false"
          aria-controls="galleryMenu">
          <i class="bi bi-images"></i>
          <span>Gallery</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <div class="collapse" id="galleryMenu">
          <ul class="nav flex-column ms-3">

            {{-- Optional: Link to add gallery image --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.gallery.create') }}">
                <i class="bi bi-plus-circle"></i> Add Image
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.gallery.index') }}">
                <i class="bi bi-card-image"></i> View Gallery
              </a>
            </li>

          </ul>
        </div>
      </li>

    </ul>
  </aside>
  <!-- End Sidebar -->



  <!-- Vendor JS Files -->
  <script src="/admin_assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/admin_assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/admin_assets/vendor/echarts/echarts.min.js"></script>
  <script src="/admin_assets/vendor/quill/quill.min.js"></script>
  <script src="/admin_assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/admin_assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/admin_assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/admin_assets/js/main.js"></script>

</body>

</html>