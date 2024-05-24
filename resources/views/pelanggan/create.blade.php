<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gudang Kain - Pelanggan</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('tamplate/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('tamplate/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('nav')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('topnav')
                <div class="container-fluid ">
                    <h1 class="h3 mb-2 text-gray-800">Data Pelanggan</h1>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px; padding: 0;">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>
                        <div class="card">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Input Data Pelanggan</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('pelanggan.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Pelanggan</label>
                                        <input type="text" class="form-control" id="nama" name="nama">
                                      </div>
                                      <div class="mb-3">
                                        <label for="user" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="user" name="user"></input>
                                      </div>
                                      <div class="mb-3">
                                        <label for="pass" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="pass" name="pass"></input>
                                      </div>
                                      <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"></input>
                                      </div>
                                    <button type="submit" class="btn btn-success btn-icon-split float-end" style="padding: 0">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Simpan</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('logout')

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('tamplate/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('tamplate/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('tamplate/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('tamplate/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('tamplate/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('tamplate/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('tamplate/js/demo/chart-pie-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>