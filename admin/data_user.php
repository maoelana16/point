<?php
	session_start();
	include "../koneksi.php";

	if ($_SESSION['status']== "") {
		header("location:index.html");
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/admin.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/admin.png" alt="">
        <span class="d-none d-lg-block">Admin Point</span>
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
            <img src="assets/img/profile.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['nama_admin']?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['nama_admin']?></h6>
              <span>Admin</span>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
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
        <a class="nav-link collapsed" href="beranda.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapse" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_user.php" class="active">
              <i class="bi bi-circle"></i><span>User</span>
            </a>
          </li>
          <li>
            <a href="data_poin.php">
              <i class="bi bi-circle"></i><span>Poin</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Penilaian</span>
            </a>
          </li>
          </ul>
      </li><!-- End Components Nav -->
      
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="beranda.php">Home</a></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active">User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data User</h5>

              <!-- Basic Modal -->
              <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#basicModal">
                Tambah Data
              </button>
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Data User</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="proses_tambah.php" method="POST">
                    <div class="modal-body">
                      <input type="text" name="nis" class="form-control mb-2" id="yourNis" placeholder="NIS" required>
                      <input type="text" name="nama" class="form-control mb-2" id="yourName" placeholder="Nama" required>
                      <input type="date" name="ttl" class="form-control mb-2" id="yourBirth" required>
                      <select name="jk" class="form-select mb-2" id="yourJk">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                      <select name="kelas" class="form-select mb-2" id="yourKelas">
                        <option value="XI TKJ 1">XI TKJ 1</option>
                        <option value="XI TKJ 2">XI TKJ 2</option>
                        <option value="XI TKJ 3">XI TKJ 3</option>
                      </select>
                      <textarea name="alamat" class="form-control mb-2" id="yourAlamat" placeholder="Alamat" required></textarea>
                      <input type="email" name="email" class="form-control mb-2" id="yourEmail" placeholder="Email" required>
                      <input type="password" name="password" class="form-control mb-2" id="yourPassword" placeholder="Password" required>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
                    </div>
                  </form>
                  </div>
                </div>
              </div><!-- End Basic Modal-->


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "select *from user");
                    while ($data = mysqli_fetch_array($query)) {  
                  ?>
                  <tr>
                    <th scope="row"><?php echo $no++?></th>
                    <td><?php echo $data['nis']?></td>
                    <td><?php echo $data['nama']?></td>
                    <td><?php echo $data['tanggal_lahir']?></td>
                    <td><?php echo $data['jk']?></td>
                    <td><?php echo $data['kelas']?></td>
                    <td><?php echo $data['alamat']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['password']?></td>
                    <td>
                     

                       <!-- Basic Modal -->
              <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#basicModal2<?php echo $data['nis'];?>">
                Edit
              </button>
              <div class="modal fade" id="basicModal2<?php echo $data['nis'];?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Data User</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="proses_edit.php" method="POST">
                    <div class="modal-body">
                      <input type="text" name="nis" class="form-control mb-2" readonly value="<?php echo $data['nis'];?>">
                      <input type="text" name="nama" class="form-control mb-2" id="yourName" value="<?php echo $data['nama'];?>" required>
                      <input type="date" name="ttl" class="form-control mb-2" id="yourBirth" value="<?php echo $data['tanggal_lahir'];?>" required>
                      <select name="jk" class="form-select mb-2" id="yourJk">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                      <select name="kelas" class="form-select mb-2" id="yourKelas">
                        <option value="XI TKJ 1">XI TKJ 1</option>
                        <option value="XI TKJ 2">XI TKJ 2</option>
                        <option value="XI TKJ 3">XI TKJ 3</option>
                      </select>
                      <textarea name="alamat" class="form-control mb-2" id="yourAlamat" required><?php echo $data['alamat'];?></textarea>
                      <input type="email" name="email" class="form-control mb-2" id="yourEmail" placeholder="Email" value="<?php echo $data['email'];?>" required>
                      <input type="password" name="password" class="form-control mb-2" id="yourPassword" placeholder="Password" value="<?php echo $data['password'];?>" required>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <input type="submit" name="submit" value="Edit" class="btn btn-primary">
                    </div>
                  </form>
                  </div>
                </div>
              </div><!-- End Basic Modal-->

                      <!-- Disabled Backdrop Modal -->
              <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#disablebackdrop<?php echo $data['nis'];?>">
                Hapus
              </button>
              <div class="modal fade" id="disablebackdrop<?php echo $data['nis'];?>" tabindex="-1" data-bs-backdrop="false">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Konfirmasi Hapus</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Apakah anda yakin untuk menghapusnya?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <a href="hapus_user.php?nis=<?php echo $data['nis'];?>"><button type="button" class="btn btn-primary">Yakin</button></a>
                    </div>
                  </div>
                </div>
              </div><!-- End Disabled Backdrop Modal-->
                    
              </td>
                  </tr>
                  
                <?php }?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>AdminPoint</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

  <?php if(@$_SESSION['sukses']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Sukses',    
                    text: 'data berhasil dihapus',                        
                    timer: 3000,                                
                    showConfirmButton: false
                })
            </script>
      <?php unset($_SESSION['sukses']); } ?>

</body>

</html>