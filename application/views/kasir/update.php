<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Update Page</title>
    <link rel="stylesheet" href="/toko/assets/css/style.css" type="text/css" />
</head>
<body>
    <h1>Update Mahasiswa</h1>
    <a href="http://localhost/toko/index.php/C_stok/home">KEMBALI</a>
    <table style="margin:10px auto;">
        <?php
            foreach ($data as $result) :
        ?>
        <form class="mt-3" action="<?=base_url().'index.php/C_stok/sendupdate' ?>" method="post">
            <tr>
                <td>Nama barang</td>
                <td> <input type="text" name="nama_produk" value="<?= $result['nama_produk']; ?>"> </td>
            </tr>
            <tr>
                <td>ukuran</td>
                <td> <input type="text" name="ukuran" value="<?= $result['ukuran']; ?>"> </td>
            </tr>
            <tr>
                <td>harga</td>
                <td> <input type="text" name="harga" value="<?= $result['harga']; ?>"> </td>
            </tr>
            <tr>
                <td>stok</td>
                <td><input type="text" name="stok" value="<?= $result['stok']; ?>"></td>
            </tr>
            <tr>
                <td><input type="text" name="id" value="<?= $result['id']; ?>" hidden="hidden"></td>
                <td> <button type="submit" name="button">Masukan Data</button> </td>
            </tr>
        </table>
    </form>
    <?php
        endforeach;
    ?>
</body>
</html>