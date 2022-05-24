
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Tsibog Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('js/app.js') }}">
  <link rel="shortcut icon" type="image/x-icon" href="tsibogicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
  <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>


  <style>

    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
    background-color: #2995fa;

    }


    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
      .tablesizes {height: 150px;}
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
      .tablesizes {height: 200px;}
    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
      .tablesizes {height: 250px;}
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
      .tablesizes {height: 400px;}
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
      .tablesizes {height: 470px;}
    }

    @media only screen and (min-width: 1366px ) {
      .tablesizes {height: 520px;}
    }
</style>

</head>
<body class="hold-transition sidebar-mini" >
<div class="wrapper">
  <!-- Navbar -->
  @yield('nav')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:rgb(30, 30, 69);max-height: calc(100vh - 9rem);
      overflow-y: auto; z-index: 99" >
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link" style="background-color:rgb(30, 30, 69)">

      <img src="{{ asset('admin/dist/img/logot.svg') }}" alt="Tsibog"  style ="height:50px; width:200px;">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-4 pb-2 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          {{-- <p style="color:white">{{auth()->user()->name}}</p> --}}
          <p style="color:white">Merchant</p>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- vendor -->

           <!-- store users -->
        <li class="nav-item ">
            <a href="/merchant-storeuser" class="nav-link ">
              <i class="nav-icon fas fa-person-booth"></i>
              <p>
                Store User
                <i class="fas right"></i>
              </p>
            </a>
        </li>
          <!-- store users -->



              <!-- category -->
        <li class="nav-item ">
          <a href="/merchant-category" class="nav-link ">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Category
              <i class="fas right"></i>
            </p>
          </a>
        </li>
        <!-- category -->

        <!-- stores -->
        <li class="nav-item ">
          <a href="/merchant-store" class="nav-link ">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Stores
              <i class="fas right"></i>
            </p>
          </a>
        </li>
        <!-- stores -->

        <!-- voucher -->
        <li class="nav-item ">
            <a href="/merchant-voucher" class="nav-link ">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Voucher
                <i class="fas right"></i>
              </p>
            </a>
          </li>
          <!-- voucher -->

              <!-- voucher -->
        <li class="nav-item ">
          <a href="/merchant-product" class="nav-link ">
            <i class="nav-icon fas fa-tag"></i>
            <p>
              Product
              <i class="fas right"></i>
            </p>
          </a>
        </li>
        <!-- voucher -->

        <!-- order -->
        <li class="nav-item ">
            <a href="/merchant-order" class="nav-link ">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Order
                <i class="fas right"></i>
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="/merchant-withdrawal" class="nav-link ">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Withdrawal
                <i class="fas right"></i>
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="/merchant-rating" class="nav-link ">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Ratings
                <i class="fas right"></i>
              </p>
            </a>
          </li>
        <!-- order -->

            {{-- <!-- stores -->
        <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- stores -->

            <!-- stores -->
        <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-money-bill-alt"></i>
              <p>
                Payment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- stores -->

            <!-- stores -->
        <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                COD Request
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- stores --> --}}

            <!-- zone -->
        {{-- <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <p>
                Zone
                <i class="fas right"></i>
              </p>
            </a>

          </li>
          <!-- zone --> --}}

            <!-- logout -->
        <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <i class="fas right"></i>
              </p>
            </a>

          </li>
          <!-- logout -->

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top: 1px !important;
   margin: 0 !important;">
      <div class="container-fluid">
        <!-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div> -->
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer ">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; by Filsotech Inc Powered by <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>

</body>
</html>
