<?php
require_once __DIR__ . '/../Model/Model.php';
require_once __DIR__ . '/../Model/Category.php';



if (isset($_POST["submit"])) {
  $category = [
    "name" => $_POST["name"]
  ];
  if(strlen($_POST["name"]) > 225){
    echo "<script>alert('kategori kepanjangan'); window.location.href = 'create-category.php';</script>";
    die;
  }
  $categories = new category();
  $result = $categories->create($category);
  if ($result !== false) {
    echo "<script>alert('kategori dengan nama {$result['name']} berhasil di tambahkan '); window.location.href = 'create-category.php';</script>";
  } else {
    echo "<script>alert('kategori gagal di tambahkan '); window.location.href = 'create-category.php';</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../dist/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../dist/assets/css/style.css">
  <link rel="stylesheet" href="../dist/assets/css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php include('../component/layout/nav.php'); ?>

      <!-- Sidebar -->
      <?php include('../component/layout/sidebar.php'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Category</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <img src="../assets/img/image.png" alt="">
                </div>


              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Input Text</h4>
                  </div>
                  <form action="" method="POST" class="card-body">
                    <div class="form-group">
                      <label>Nama Category</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                    <div class="d-flex justify-content-end">
                      <button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                    </form>
                </div>


              </div>
            </div>

          </div>
      </div>
      </section>
    </div>
    <?php include('../component/layout/footer.php'); ?>
  </div>
  </div>

  <!-- General JS Scripts -->
  <script src="../dist/assets/modules/jquery.min.js"></script>
  <script src="../dist/assets/modules/popper.js"></script>
  <script src="../dist/assets/modules/tooltip.js"></script>
  <script src="../dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../dist/assets/modules/moment.min.js"></script>
  <script src="../dist/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="../dist/assets/js/scripts.js"></script>
  <script src="../dist/assets/js/custom.js"></script>
</body>

</html>