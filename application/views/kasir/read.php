<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Create Page</title>
    <link rel="stylesheet" href="/toko/assets/css/style.css" type="text/css" />
</head>
<body>
    <a href="http://localhost/toko/index.php/C_stok/home">KEMBALI</a>
    <h2 align="center">Read Data</h2>
    <form class="" action="" method="post">
        <table border="1" style="margin:20px auto;">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Nama barang</td>
                    <td>ukuran</td>
                    <td>harga</td>
                    <td>stok</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($data as $result) :
                ?>
                <tr>
                    <td><?=$result['id'];?></td>
                    <td><?=$result['nama_produk'];?></td>
                    <td><?=$result['ukuran'];?></td>
                    <td><?=$result['harga'];?></td>
                    <td><?=$result['stok'];?></td>
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </form>
</body>
</html>