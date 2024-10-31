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
                        <h1>Blank Page</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="row g-0">
                                    <div class="p-2 rounded overflow-hidden m-0 col-6 h-fit position-relative">
                                        <span class="position-absolute top-0 mt-1 ml-1 start-100 translate-middle badge rounded-pill  bg-primary text-white">+1</span>
                                        <img alt="image" src="../assets/img/dumy/rendang.png" class="img-fluid">
                                        <h5 class="m-0">Rendang Apa aja</h5>
                                        <p class="m-0">10.000</p>     
                                    </div>
                                    <div class="p-2 rounded overflow-hidden m-0 col-6 h-fit position-relative">
                                        <span class="position-absolute top-0 mt-1 ml-1 start-100 translate-middle badge rounded-pill  bg-primary text-white">+1</span>
                                        <img alt="image" src="../assets/img/dumy/teh.png" class="img-fluid">
                                        <h5 class="m-0">Rendang Apa aja</h5>
                                        <p class="m-0">10.000</p>
                                                  
                                    </div>
                                    <div class="p-2 rounded overflow-hidden m-0 col-6 h-fit position-relative">
                                        <span class="position-absolute top-0 mt-1 ml-1 start-100 translate-middle badge rounded-pill  bg-primary text-white">+1</span>
                                        <img alt="image" src="../assets/img/dumy/ayam.png" class="img-fluid">
                                        <h5 class="m-0">Rendang Apa aja</h5>
                                        <p class="m-0">10.000</p>
                                                  
                                    </div>
                                    <div class="p-2 rounded overflow-hidden m-0 col-6 h-fit position-relative">
                                        <span class="position-absolute top-0 mt-1 ml-1 start-100 translate-middle badge rounded-pill  bg-primary text-white">+1</span>
                                        <img alt="image" src="../assets/img/dumy/lele.png" class="img-fluid">
                                        <h5 class="m-0">Rendang Apa aja</h5>
                                        <p class="m-0">10.000</p>
                                                  
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Input Text</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Customer</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Catatan</label>
                                            <textarea name="" id="" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control selectric">
                                                <option>Terbayar</option>
                                                <option>Hutang</option>
                                                <option>Batal</option>
                                                <option>Belum Terbayar</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-primary">Tambahkan</button>
                                        </div>
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