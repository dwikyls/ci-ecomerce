<html lang="en" dir="ltr">
<head>
    <title>Create Page</title>
    <link rel="stylesheet" href="/toko/assets/css/style.css" type="text/css" />
</head>
<body>
    <a href="http://localhost/toko/index.php/C_stok/home">KEMBALI</a>
    <h2 align="center">Create Data</h2>
    <form class="" action="<?=base_url().'index.php/C_stok/create_data' ?>" method="POST">
        <table style="margin:20px auto;">
            <tr>
                <td>Nama barang</td>
                <td> <input type="text" name="nama_produk" value=""> </td>
            </tr>
            <tr>
                <td>ukuran</td>
                <td> <input type="text" name="ukuran" value=""> </td>
            </tr>
            <tr>
                <td>harga</td>
                <td> <input type="text" name="harga" value=""> </td>
            </tr>
            <tr>
                <td>stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr>
                <td></td>
                <td> <button type="submit" name="button">SIMPAN</button> </td>
            </tr>
        </table>
    </form>
</body>
</html>