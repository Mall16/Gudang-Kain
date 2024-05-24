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
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kain</h6>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary mb-3" role="button" aria-disabled="true" href="{{route('kain.create')}}">Tambah Data</a>
                                <a href="{{ url('/kainPDF') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-bottom: 15px;"><i
                                    class="fas fa-download fa-sm text-white-70" style="padding: 8px;"></i>Buat Laporan</a>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Kain</th>
                                                <th>Warna</th>
                                                <th>Bahan</th>
                                                <th>Lebar</th>
                                                <th>Harga /m</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
    
                                        <tbody>
                                            @foreach($kain as $no => $kain)
                                            <tr>
                                                <td>{{$no +1}}</td>
                                                <td>{{$kain->nama_kain}}</td>
                                                <td>{{$kain->warna}}</td>
                                                <td>{{$kain->bahan}}</td>
                                                <td>{{$kain->lebar}}m</td>
                                                <td>{{$kain->harga_per_meter}}</td>
                                                <td>
                                                    <form action="{{ route('kain.destroy',$kain->id_kain) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="{{ route('kain.edit',$kain->id_kain) }}" class="btn btn-success btn-sm" style="padding: 7px;">Edit</a>
                                                        <button class="btn btn-danger btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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