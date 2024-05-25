<!DOCTYPE html>
<html>
<head>
    <title>Data JENIS IJIN Pegawai</title>
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
    <h2>Data JENIS IJIN Pegawai</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Ijin</th>
                <th>Keterangan Ijin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postj as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
