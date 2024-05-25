<!DOCTYPE html>
<html>
<head>
    <title>Data PENGAJUAN IJIN Pegawai</title>
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
    <h2>Data PENGAJUAN IJIN Pegawai</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Status Ijin</th>
                <th>Keterangan Ijin</th>
                <th>Durasi Ijin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posti as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->alasan }}</td>
                    <td>{{ $item->durasi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
