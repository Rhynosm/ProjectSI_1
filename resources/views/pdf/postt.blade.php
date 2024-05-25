<!DOCTYPE html>
<html>
<head>
    <title>Data Tunjangan Pegawai</title>
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
    <h2>Data Tunjangan Pegawai</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tunjangan</th>
                <th>Keuntungan</th>
                <th>Taggal Mulai</th>
                <th>Tanggal Berakhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postt as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->namatunjangan }}</td>
                    <td>{{ $item->keuntungan }}</td>
                    <td>{{ $item->tanggalmulai }}</td>
                    <td>{{ $item->tanggalberakhir }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
