<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h3 {
            color: #ff6347; /* Tomato */
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #20b2aa; /* Light Sea Green */
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Light Gray */
        }
    </style>
</head>
<body>
    <h3>{{ $title }}</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Asal</th>
        </tr>
        @php $no = 1; @endphp
        @foreach($daf_mhs as $mhs)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['asal'] }}</td>
        </tr>
        @endforeach
    </table>
    <p><strong> {{ $namanim }} </strong></p>
</body>
</html>
