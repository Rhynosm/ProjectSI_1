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
                <th>Pendidikan Terakhir</th>
                <th>Nama Institusi</th>
                <th>Tahun Lulus</th>
                <th>GPA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postq as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->pendtera }}</td>
                    <td>{{ $item->namainstitusi }}</td>
                    <td>{{ $item->tahunlulus }}</td>
                    <td>{{ $item->gpa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
