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
                <th>Nama Pelatihan</th>
                <th>Penyelenggara</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Berakhir</th>
                <th>Biaya</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postn as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->namapel }}</td>
                    <td>{{ $item->penyelenggara }}</td>
                    <td>{{ $item->tanggalmulai }}</td>
                    <td>{{ $item->tanggalberakhir }}</td>
                    <td>{{ $item->biaya }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
