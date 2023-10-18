<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,
    700&display=fallback">
    <link rel="shortcut icon" href="../assets/logoblack.png" type="image/x-icon">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/6.2.0/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('../css/adminlte.min.css') }}">
    </head>
<body>
     <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/konseling" class="brand-link">
      <img src="/assets/logowhite.png" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light">Indiego</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Indiego</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ url('/admin/konseling') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    List Konseling
                   
                  </p>
                </a>
              </li>
          <li class="nav-item">
            <a href="{{ url('/admin/artikel') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 List Artikel
               
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    @yield('content')
    </div>
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/js/bootstrap.bundle.min.js')
}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>
</html>