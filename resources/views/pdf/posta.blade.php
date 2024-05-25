<!DOCTYPE html>
<html>
<head>
    <title>Data Pengembangan Pegawai</title>
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
    <h2>Data Pengembangan Pegawai</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Hadir</th>
                <th>Waktu Hadir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posta as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tglhadir }}</td>
                    <td>{{ $item->waktuhadir }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
