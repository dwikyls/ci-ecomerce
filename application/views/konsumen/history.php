<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
        }
        table thead{
            border: 1px solid black;
        }
        table thead tr{
            border: 1px solid black;
        }
        table thead tr th{
            border: 1px solid black;
        }
        table tbody tr td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<a href="<?php echo base_url()?>index.php/page/index">Kembali</a>
<h2>History</h2>
<table>
    <thead>
        <tr>
            <th>No. </th> <th>Tanggal</th> <th>Kode Produk</th> <th>Jumlah</th> <th>Harga</th> <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    foreach ($data as $row){
        ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->tanggal;?></td>
        <td><?php echo $row->produk;?></td>
        <td><?php echo $row->qty;?></td>
        <td><?php echo $row->harga;?></td>
        <td><?php echo $row->status;?></td>
    </tr>
    <?php
            $no++;
    }
        ?>
    </tbody>
</table>
</body>
</html>