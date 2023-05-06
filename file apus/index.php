<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual Barang</title>
    <link rel="stylesheet" href="style1.css">
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
    </center>

    <div class="container">
        <form action="tampilProduk.php" method="post">
            <label for="kode">Kode Barang</label>
            <input type="text" name="kode" id="kode" required placeholder="contoh: G-003"><br>
            <label for="nama">Nama Barang</label>
            <input type="text" name="nama" id="nama" required placeholder="contoh: Gulaku"><br>
            <label for="tanggal">Tanggal Jual</label>
            <input type="date" name="tanggal" id="tanggal" required><br>
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" required placeholder="contoh: 15000"><br>
            <label for="jumlah">Jumlah</label>
            <input type="text" name="jumlah" id="jumlah" required placeholder="contoh: 0-1000"><br>
            <center style="margin: 15px;">
                <button name="submit" class="button">Tampilkan</button>
                <a href="daftarBarang.php" class="button">Cancel</a>
            </center>
        </form>
    </div>
</body>
</html>