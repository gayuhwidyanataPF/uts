<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Produk</title>
    <style>
        body{
            background-color: #ddd;
        }
        .container{
            padding: 220px 0;
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
    <div class="container">
    <center>
        <h1>Daftar Penjualan Produk</h1>
    </center>
    <?php if(isset($_POST['submit'])):
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $tanggal = $_POST['tanggal'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        ?>
        <table>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Tanggal Jual</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Diskon 10% pembelian diatas 9</th>
                <th>Total Harga</th>
            </tr>
            <tr>
                <td><?= $kode; ?></td>
                <td><?= $nama; ?></td>
                <td><?= $tanggal; ?></td>
                <td>Rp <?= number_format($harga); ?></td>
                <td><?= $jumlah; ?></td>
                <td>
                    <?php
                        if($jumlah >= 10){
                            $tot = $harga * $jumlah;
                            $diskon = 0.01 * $tot;
                            echo "Rp " . number_format($diskon);
                        }else if($jumlah < 10 && $jumlah > 0){
                            echo "Tidak mendapatkan Diskon";
                        }
                    ?>
                </td>
                <td>
                    <?php
                        if($jumlah >= 10){
                            $tot = $harga * $jumlah;
                            $diskon = 0.01 * $tot;
                            echo "Rp ". number_format($tot - $diskon);
                        }else if($jumlah < 10 && $jumlah > 0){
                            echo "Rp ". number_format($harga * $jumlah);
                        }
                    ?>
                </td>
            </tr>
        </table>
    <?php endif; ?>

    <center>
        <a href="index.php" class="button">Kembali</a>
    </center>
</div>
</body>
</html>
