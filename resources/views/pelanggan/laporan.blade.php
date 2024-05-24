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
    <center>Laporan Data Pelanggan</center>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pelanggan</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach($pelanggan as $no => $pelanggan)
            <tr>
                <td>{{$no +1}}</td>
                <td>{{$pelanggan->nama_pengguna}}</td>
                <td>{{$pelanggan->username}}</td>
                <td>{{$pelanggan->email}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>