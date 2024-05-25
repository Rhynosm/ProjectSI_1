<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
    <style>
        body {
            text-align: center;
        }
        h2 {
            margin-top: 20px;
        }
        table {
            margin: auto;
            width: 80%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        th, td {
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Data Pegawai</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Tanggal Masuk</th>
                <th>Jabatan</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->Nama }}</td>
                    <td>{{ $item->Email }}</td>
                    <td>{{ $item->notelp }}</td>
                    <td>{{ $item->tglmasuk }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
