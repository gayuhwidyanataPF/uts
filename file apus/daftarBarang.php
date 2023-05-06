<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <style>
        body{
            background-color: #ddd;
        }
        center{
            padding: 150px 0;
            border: 3px solid none;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 0 auto;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #111;
        }
        th{
            background-color: ghostwhite;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 10px;
            font-size: 16px;
            margin: 12px 0;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <h1>Daftar Barang</h1>
            <table>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td>R-001</td>
                    <td>Rinso</td>
                    <td>10.000</td>
                </tr>
                <tr>
                    <td>I-002</td>
                    <td>Indomie Goreng</td>
                    <td>20.000</td>
                </tr>
                <tr>
                    <td>G-003</td>
                    <td>Gulaku</td>
                    <td>15.000</td>
                </tr>
            </table>
        <a href="index.php" class="button">Input Data Jual</a>
    </center>
</body>
</html>