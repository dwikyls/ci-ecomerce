<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>beli-beli</title>
	  <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    <link href="<?php echo base_url()?>assets/asie/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/jquery/jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url()?>assets/asie/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://localhost/toko/index.php/C_login/index">Edit Profile</a></li>
            <li><a href="http://localhost/toko/index.php/C_login/history">History</a></li>
            <li class="active"><a href="<?= base_url()?>index.php/Page/index">Beli</a></li>
            <li><a href="<?php echo base_url()?>shopping/tampil_cart"> Keranjang Belanja</a></li>
            <li><a href="<?php echo base_url()?>index.php/C_login/index">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <div class="list-group">
        <a href="<?php echo base_url()?>shopping/tampil_cart" class="list-group-item"><strong> KERANJANG BELANJA</strong></a>
        <?php
          $cart= $this->cart->contents();
			    if(empty($cart)) {
  			?>
        <a class="list-group-item">Keranjang Belanja Kosong</a>
        <?php
			    }
			    else{
					  $grand_total = 0;
					  foreach ($cart as $item){
							$grand_total+=$item['subtotal'];
				?>
        <a class="list-group-item"><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>)=<?php echo number_format($item['subtotal'],0,",","."); ?></a>
        <?php	
					}
				?>
        <?php		
				  }
        ?>
			</div>
    </div>
  <div class="col-lg-9">
<div class="row">