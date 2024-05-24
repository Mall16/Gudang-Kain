<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #8fa8ff;
            color: #000:
        }
        center{
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <center>Laporan Data Stok</center>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kain</th>
                <th>Jumlah</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th>Nama Pemasok</th>
            </tr>
        </thead>

        <tbody>
            @foreach($stok as $no => $stok)
            <tr>
                <td>{{$no +1}}</td>
                <td>{{$stok->Kain->nama_kain}}</td>
                <td>{{$stok->jumlah}}</td>
                <td>{{$stok->tanggal_masuk}}</td>
                <td>{{$stok->tanggal_keluar}}m</td>
                <td>{{$stok->Pemasok->nama_pemasok}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>