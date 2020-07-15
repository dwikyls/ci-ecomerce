<!DOCTYPE html>
<html>
<head>
	<title>Suatu Percubaan yang mantapu</title>
    <style>
        h1,h2{
            text-align: center;
        }
        form{
            border: 1px solid black;
            padding-left: 20px;
            margin-left: 560px;
            width: 180px;
            border-radius: 10px;
            height: 200px;
            font-family: Dense;
            font-size: 25px;
        }
    </style>
</head>
<body>
	<h1>Selamat Datang di beli-beli.com</h1>
    <h2>Silahkan Login Terlebih Dahulu</h2>
    <form action="<?php echo base_url();?>index.php/C_login/login" method="POST">
		<table>
            <tr>
                <td>Username: </td>
            </tr>
            <tr>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password: </td>
            </tr>
            <tr>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="LOGIN"></td>
            </tr>
        </table>
	</form>
</body>
</html>

