<!DOCTYPE html>
<html>
<head>
    <title>Data Gaji Pegawai</title>
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
    <h2>Data Gaji Pegawai</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>GAJI</th>
                <th>GRADE GAJI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postg as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->gaji }}</td>
                    <td>{{ $item->grade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
