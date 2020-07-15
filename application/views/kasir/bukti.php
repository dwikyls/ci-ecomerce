<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="/praktikum_ptw/assets/css/style.css" type="text/css" />
    </head>
    <body>
        <h3><center>Tampil Berkas</center></h3>
        <a href="localhost/toko/index.php/C_login/kasir/home">Kembali</a>
        <table border="1" width="75%" style="text-align:center;">
            <tr>
                <th>No</th>
                <th>File</th>
                <th>Action</th>
            </tr>
            <?php 
                $no = 1;
                foreach($berkas->result() as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $row->nama; ?>"/></td>
                        <td><a href="<?php echo base_url(); ?>index.php/C_stok/download/<?php echo $row->id; ?>">Download</a></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </body>
</html>