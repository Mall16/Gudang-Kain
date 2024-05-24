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
    <center>Laporan Data Pemasok</center>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pemasok</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach($pemasok as $no => $pemasok)
            <tr>
                <td>{{$no +1}}</td>
                <td>{{$pemasok->nama_pemasok}}</td>
                <td>{{$pemasok->alamat}}</td>
                <td>{{$pemasok->telepon}}</td>
                <td>{{$pemasok->email}}m</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>