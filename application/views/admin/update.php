<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Update Page</title>
    <link rel="stylesheet" href="/toko/assets/css/style.css" type="text/css" />
</head>
<body>
    <h1>Update Mahasiswa</h1>
    <a href="http://localhost/toko/index.php/C_login/home">KEMBALI</a>
    <table style="margin:10px auto;">
        <?php
            foreach ($data as $result) :
        ?>
        <form class="mt-3" action="sendupdate" method="post">
            <tr>
                <td>Nama</td>
                <td> <input type="text" name="nama" value="<?= $result['nama']; ?>"> </td>
            </tr>
            <tr>
                <td>username</td>
                <td> <input type="text" name="username" value="<?= $result['username']; ?>"> </td>
            </tr>
            <tr>
                <td>password</td>
                <td> <input type="text" name="password" value="<?= $result['password']; ?>"> </td>
            </tr>
            <tr>
                <td>level</td>
                <td><input type="text" name="level" value="<?= $result['level']; ?>"></td>
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