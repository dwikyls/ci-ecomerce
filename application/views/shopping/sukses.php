<h2>Proses Order sedang di proses</h2>
<div class="kotak2">
<p>Silahkan upload bukti pembayaran anda di bawah ini, <p>
<p>setelah upload bukti pembayaran permintaan anda akan segera kami proses. <p>
<p>terima kasih telah belanja di beli-beli.com</p>
<?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/upload/proses">
            <table>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file" name="berkas[]"></td>
                </tr>
            </table>
            <input type="submit" value="Simpan"/>
        </form>
</div>