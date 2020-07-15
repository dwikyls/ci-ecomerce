<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Create Page</title>
    <link rel="stylesheet" href="/toko/assets/css/style.css" type="text/css" />
</head>
<body>
    <a href="http://localhost/toko/index.php/C_stok/home">KEMBALI</a>
    <h2 align="center">Status Pembelian</h2>
    <table border="1" style="margin:20px auto;">
        <thead>
            <tr>
                <td>No.</td>
                <td>kode pesanan</td>
                <td>kode barang</td>
                <td>jumlah</td>
                <td>harga</td>
                <td>status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data as $result) :
            ?>
            <form class="" action="<?=base_url().'index.php/C_stok/gopembelian' ?>" method="post">
                <input type="text" hidden="hidden" name="id" value="<?=$result['id'];?>">
                <tr>
                    <td><?=$result['id'];?></td>
                    <td><?=$result['order_id'];?></td>
                    <td><?=$result['produk'];?></td>
                    <td><?=$result['qty'];?></td>
                    <td><?=$result['harga'];?></td>
                    <td><?=$result['status'];?></td>
                    <td> <button type="submit" name="button">UPDATE</button> </td>
                </tr>
            </form>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
</body>
</html>