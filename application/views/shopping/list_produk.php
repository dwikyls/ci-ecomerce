<h2>Daftar Produk</h2>
<?php
	foreach ($produk as $row) {
?>
<div class="col-lg-4 col-md-6 mb-4">
  <div class="kotak">
    <form method="post" action="<?php echo base_url();?>shopping/tambah" accept-charset="utf-8">
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
        <input type="number" id="qty" name="qty" value="1" min="1" max="<?= number_format($row['stok']);?>" />
        <button type="submit" class="btn btn-primary">Beli</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Detail
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Baju dengan kualitas yang hebat</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<?php
	}
?>
