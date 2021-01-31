<h4><i class="fa fa-shopping-cart"></i> Data Belanja</h4>
<hr />
<br />
<?= validation_errors('<p style="color:red">','</p>'); ?>
<div align="right">
   <div class="table-responsive">
      <table class="table table-bordered">
      <thead>
         <tr>
            <th width="5%" class="center">#</th>
            <th width="40%" class="center">Nama Barang</th>
            <th width="5%" class="center">Jumlah</th>
            <th width="15%" class="center">Harga Total</th>
            <th width="15%" class="center">opsi</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $i = 1;
         foreach($this->cart->contents() as $key) :
            ?>
         <tr>
            <td class="center"><?= $i++; ?></td>
            <td><?= $key['nama_menu']; ?></td><td class="center"><?= $key['qty']; ?></td>
            <td style="text-align:right">Rp. <?= number_format(($key['qty'] * $key['harga']), 0, ',', '.'); ?>,-</td>
            <td style="text-align:right">
               <a href="#<?= $key['rowid']; ?>" class="btn-floating orange"><i class="fa fa-edit"></i></a>
               <a href="<?= base_url(); ?>cart/delete/<?= $key['rowid']; ?>" class="btn-floating red" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"><i class="fa fa-trash"></i></a>
            </td>
         </tr>
         <div class="modal" id="<?= $key['rowid']; ?>">
            <form action="<?= base_url(); ?>cart/update/<?= $key['rowid']; ?>" method="post">
               <div class="row">
                  <div class="col m10 s12 offset-m1">
                     <div class="modal-content">
                        <h5><i class="fa fa-edit"></i> Edit Pesanan</h5>
                        <br />
                        <div class="input-field">
                           <input type="text" name="qty" value="<?= $key['name']; ?>" id="name<?= $key['rowid']; ?>" readonly="readonly">
                           <label for="name<?= $key['rowid']; ?>">Nama Barang</label>
                        </div>
                        <div class="input-field">
                           <input type="number" name="qty" value="<?= $key['qty']; ?>" id="qty<?= $key['rowid']; ?>" autofocus>
                           <p style="color:#6b6b6b; margin-top:-15px;"><i>* Isi dengan angka</i></p>
                           <label for="qty<?= $key['rowid']; ?>">Jumlah Pesan</label>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="submit" name="submit" value="Submit" class="modal-action btn blue">Simpan</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      <?php endforeach; ?>
      <tr>
         <td colspan="4" class="center"><b>Total</b></td>
         <td colspan="1" style="text-align:right">Rp. <?= number_format($this->cart->total(), 0, ',','.'); ?>,-</td>
         <td></td>
      </tr>
      </tbody>
   </table>
</div>
<br />
<div class="right">
   <button type="button" class="btn red" onclick="window.history.go(-1)">Kembali</button>
   <button type="button" class="btn green" ">Checkout</button>
</div>
<br/>
