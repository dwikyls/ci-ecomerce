<h2>Konfirmasi Check Out</h2>
<div class="kotak2">
<?php
$grand_total = 0;
if ($cart = $this->cart->contents())
	{
		foreach ($cart as $item)
			{
				$grand_total = $grand_total + $item['subtotal'];
			}
		echo "<h4>Total Belanja: Rp.".number_format($grand_total,0,",",".")."</h4>";	
?>
<form class="form-horizontal" action="<?php echo base_url()?>shopping/proses_order" method="post" name="frmCO" id="frmCO">
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="firstName">Nama :</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="lastName">Alamat:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="lastName">Metode Pembayaran:</label>
            <div class="col-xs-9">
                <tr>
                    <td><input type="radio" name="metode" value="indomart">Indomart</td>
                    <td><input type="radio" name="metode" value="gopay" style="margin-left: 30px;">Go-Pay</td>
                    <td><input type="radio" name="metode" value="bni" style="margin-left: 30px;">Rekening BNI</td>
                </tr>
            </div>
        </div>
        <input type="hidden" name="status" value="pending">
        <div class="form-group  has-success has-feedback">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit">Bayar</button>
            </div>
        </div>
    </form>
    <?php
	}
	else
		{
			echo "<h5>Shopping Cart masih kosong</h5>";	
		}
	?>
</div>