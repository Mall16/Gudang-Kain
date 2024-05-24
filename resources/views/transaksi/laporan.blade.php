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
    <center>Laporan Data Transaksi</center>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kain</th>
                <th>Jenis transaksi</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
            </tr>
        </thead>

        <tbody>
            @foreach($transaksi as $no => $transaksi)
            <tr>
                <td>{{$no +1}}</td>
                <td>{{$transaksi->Kain->nama_kain}}</td>
                <td>{{$transaksi->jenis_transaksi}}</td>
                <td>{{$transaksi->jumlah}}</td>
                <td>{{$transaksi->tanggal}}m</td>
                <td>{{$transaksi->keterangan}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>