<html lang="en" dir="ltr">
<head>
    <title>Create Page</title>
    <link rel="stylesheet" href="/toko/assets/css/style.css" type="text/css" />
</head>
<body>
    <a href="http://localhost/toko/index.php/C_login/home">KEMBALI</a>
    <h2 align="center">Create Data</h2>
    <form class="" action="<?=base_url().'index.php/C_login/create_data' ?>" method="POST">
        <table style="margin:20px auto;">
            <tr>
                <td>Nama</td>
                <td> <input type="text" name="nama" value=""> </td>
            </tr>
            <tr>
                <td>username</td>
                <td> <input type="text" name="username" value=""> </td>
            </tr>
            <tr>
                <td>password</td>
                <td> <input type="text" name="password" value=""> </td>
            </tr>
            <tr>
                <td>level</td>
                <td><input type="text" name="level"></td>
            </tr>
            <tr>
                <td></td>
                <td> <button type="submit" name="button">SIMPAN</button> </td>
            </tr>
        </table>
    </form>
</body>
</html>