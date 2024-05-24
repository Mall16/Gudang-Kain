<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gudang Kain - Kain</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('tamplate/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('tamplate/css/sb-admin-2.min.css')}}" rel="stylesheet">

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
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Data Kain</h1>
                    <a href="{{ route('kain.index') }}" class="btn btn-secondary btn-icon-split" style="margin-bottom: 10px; padding: 0;">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>
                        <div class="card">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Data Kain</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('kain.update', $kain->id_kain) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3">
                                      <label for="nama" class="form-label">Nama Kain</label>
                                      <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama',$kain->nama_kain) }}">
                                    </div>
                                    <div class="mb-3">
                                      <label for="warna" class="form-label">Warna</label>
                                      <input type="text" class="form-control" id="warna" name="warna" value="{{ old('nama',$kain->warna) }}"></input>
                                    </div>
                                    <div class="mb-3">
                                      <label for="bahan" class="form-label">Bahan</label>
                                      <input type="text" class="form-control" id="bahan" name="bahan" value="{{ old('nama',$kain->bahan) }}"></input>
                                    </div>
                                    <div class="mb-3">
                                      <label for="lebar" class="form-label">Lebar</label>
                                      <input type="number" class="form-control" id="lebar" name="lebar" value="{{ old('nama',$kain->lebar) }}"></input>
                                    </div>
                                    <div class="mb-3">
                                      <label for="harga" class="form-label">Harga \m</label>
                                      <input type="number" class="form-control" id="harga" name="harga" value="{{ old('nama',$kain->harga_per_meter) }}"></input>
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

</body>

</html>