<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="style/img/favicon.png" rel="icon">
  <link href="style/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="style/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="style/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="style/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="style/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="style/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="style/img/logo.png" alt="">
        <span class="d-none d-lg-block">ManMin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 2 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Job Task</h4>
                <p>Pengecekan Lamaran Pendaftar</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Meeting</h4>
                <p>Meeting Dibatalkan</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="style/img/profile1.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Octaryo Simamora</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Octaryo Lucas Martua Simamora</h6>
              <span>HRD</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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
        <a class="nav-link " href="{{ ('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Pegawai</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ ('posts') }}">
              <i class="bi bi-circle"></i><span>Form Pegawai</span>
            </a>
          </li>
          <li>
            <a href="{{ ('postp') }}">
              <i class="bi bi-circle"></i><span>Form Pengguna</span>
            </a>
          </li>
          <li>
            <a href="{{ ('postq') }}">
              <i class="bi bi-circle"></i><span>Form Pendidikan</span>
            </a>
          </li>
          <li>
            <a href="{{ ('posta') }}">
              <i class="bi bi-circle"></i><span>Form Absensi</span>
            </a>
          </li>
          <li>
            <a href="{{ ('postn') }}">
              <i class="bi bi-circle"></i><span>Form Pengembangan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gaji</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ ('postg') }}">
              <i class="bi bi-circle"></i><span>Form Gaji</span>
            </a>
          </li>
          <li>
            <a href="{{ ('postt') }}">
              <i class="bi bi-circle"></i><span>Form Tunjangan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Ijin</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ ('posti') }}">
              <i class="bi bi-circle"></i><span>Form Pengajuan Ijin</span>
            </a>
          </li>
          <li>
            <a href="{{ ('postj') }}">
              <i class="bi bi-circle"></i><span>Form Jenis Ijin</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

            </div>
          </div>


            </div>
          </div>

        </div>

        <div class="container mt-5">
          <div class="row">
              <div class="col-md-12">
                  <div>
                      <h3 class="text-center my-4">DATA GAJI PEGAWAI</h3>    
                      <hr>
                  </div>
                  <div class="card border-0 shadow-sm rounded">
                      <div class="card-body">
                          <a href="{{ route('postg.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                          <a href='{{ url('postg/view/pdf') }}' class="btn btn-danger fa fa-download ml-5">Download PDF</a>
                          <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">GAJI</th>
                                  <th scope="col">GRADE GAJI</th>
                                </tr>
                              </thead>
                              <tbody>
                                @forelse ($postg as $posth)
                                  <tr>
                                      <td>{{ $posth->gaji }}</td> 
                                      <td>{{ $posth->grade }}</td>
                                      <td class="text-center">
                                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('postg.destroy', $posth->id) }}" method="POST">
                                              <a href="{{ route('postg.show', $posth->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                              <a href="{{ route('postg.edit', $posth->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                          </form>
                                      </td>
                                  </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Post belum Tersedia.
                                    </div>
                                @endforelse
                              </tbody>
                            </table>  
                      </div>
                  </div>
              </div>
          </div>
      </div>

            </div>
          </div>

 

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="style/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="style/vendor/chart.js/chart.umd.js"></script>
  <script src="style/vendor/echarts/echarts.min.js"></script>
  <script src="style/vendor/quill/quill.js"></script>
  <script src="style/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="style/vendor/tinymce/tinymce.min.js"></script>
  <script src="style/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="style/js/main.js"></script>

</body>

</html>