<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .info {
            margin-bottom: 15px;
        }
        .info p {
            margin: 5px 0;
        }
        .name {
            color: #ff6347; /* Coral color */
        }
        .origin {
            color: #4682b4; /* Steel blue color */
        }
        .your-name {
            color: #20b2aa; /* Light sea green color */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="info">
            <p><strong>Nama:</strong> <span class="name">{{ $nama }}</span></p>
            <p><strong>Asal:</strong> <span class="origin">{{ $asal }}</span></p>
        </div>
        <p><strong> {{ $namanim }} </strong></p>
    </div>
</body>
</html>
