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
    <center>Laporan Data Kain</center>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kain</th>
                <th>Warna</th>
                <th>Bahan</th>
                <th>Lebar</th>
                <th>Harga /m</th>
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
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>