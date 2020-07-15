<h2>Daftar Produk</h2>
<?php
	foreach ($produk as $row) {
?>
<div class="col-lg-4 col-md-6 mb-4">
  <div class="kotak">
    <form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf-8">
      <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'assets/images/'.$row['gambar']; ?>"/></a>
      <div class="card-body">
        <h4 class="card-title">
        <p><?php echo $row['nama_produk'];?></p>
        </h4>
        <p>Stok: <?php echo number_format($row['stok']);?></p>
        <h5>Rp. <?php echo number_format($row['harga'],0,",",".");?></h5>
        Ukuran:<p class="card-text"><?php echo $row['ukuran'];?></p>
      </div>
      <div class="card-footer">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
        <input type="hidden" name="nama" value="<?php echo $row['nama_produk']; ?>" />
        <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
        <input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>" />
        <input type="hidden" name="qty" value="1" />
        <button type="submit"> Beli</button>
      </div>
    </form>
  </div>
</div>
<?php
	}
?>