<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Update Page</title>
    <link rel="stylesheet" href="/toko/assets/css/style.css" type="text/css" />
</head>
<body>
    <h1>Konfirmasi Pembelian</h1>
    <a href="http://localhost/toko/index.php/C_stok/home">KEMBALI</a>
    <table style="margin:10px auto;">
        <?php
            foreach ($data as $result) :
        ?>
        <form class="mt-3" action="sendpembelian" method="post">
            <tr>
                <td>Kode Pesanan</td>
                <td> <input type="text" name="order_id" value="<?= $result['order_id']; ?>"> </td>
            </tr>
            <tr>
                <td>Kode Produk</td>
                <td> <input type="text" name="produk" value="<?= $result['produk']; ?>"> </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td> <input type="text" name="qty" value="<?= $result['qty']; ?>"> </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?= $result['harga']; ?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="radio" name="status" value="pending">Pending
                    <input type="radio" name="status" value="sukses">Sukses</td>
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