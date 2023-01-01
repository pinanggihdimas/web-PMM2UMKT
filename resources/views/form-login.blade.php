<!-- <link href="/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">

<form action="{{ route("proses_login") }}" method="post">
 @csrf

 <div class="col-lg-6">
    <div class="p-5">
        <center><h3>LOGIN</h3></center>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan username ..." required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan password ..." required>
        </div>
        <div class="form-group">
            <label>Level</label>
            <select name="level" class="form-control form-control-user" required>
                      <option value="">Pilih Level</option>
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
            </select>
        </div>
        <button class="btn btn-info btn-user btn-block" type="submit">Log In</button>
    </div>
</div>

</form> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="template/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="template/assets/img/favicon.png">
  <title>
    PINANGGIH | Website
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="template/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="template/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body class="">
<form action="{{ route("proses_login") }}" method="post">
 @csrf
  <!-- Navbar -->

  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('template/assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Welcome!</h1>
              <p class="text-lead text-white">Silahkan masukkan Username, Password dan Level anda untuk masuk ke dalam website!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                
              <div class="card-body">
                <form role="form text-left">
                  <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username . . ." aria-label="Name" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password . . ." aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                        <select name="level" class="form-control form-control-user" required>
                            <option value="">Pilih Level</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select></div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Login</button>
                  </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
      <div class="container">
        <div class="row">
          
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © 2022 by PINANGGIH | Website
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  </main>
  <!--   Core JS Files   -->
  <script src="template/assets/js/core/popper.min.js"></script>
  <script src="template/assets/js/core/bootstrap.min.js"></script>
  <script src="template/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="template/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</form>
</body>

</html>
