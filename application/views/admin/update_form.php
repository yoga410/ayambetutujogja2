<?php
include ("header.php")
?>

          <!-- page content -->
          <div class="right_col" role="main">

          <!-- page content -->
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?= $header; ?></h2>
                     <div class="clearfix"></div>
                     
                  </div>

                  <div class="x_content">
                    <br />

                    <form class="form-horizontal form-label-left" action="" enctype="multipart/form-data" method="post">
                    <?php echo form_open_multipart('index.php/menu/update_menu');?>


                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" >Nama Menu</label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                           <input type="text" class="form-control col-md-7 col-xs-12" name="nama" value="<?= $nama_menu; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">Harga Menu</label>
                      <div class="col-md-4 col-sm-6">
                         <input class="form-control col-md-7 col-xs-12" type="number" name="harga" value="<?= $harga; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">Deskripsi</label>
                      <div class="col-md-9 col-sm-6">
                         <textarea class="form-control" rows="4" name="desk" value="<?= $deskripsi; ?>"></textarea>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12" >Gambar Menu</label>
                      <div class="col-md-5 col-sm-6 col-xs-12">
                        <?php
                         if (isset($gambar)) {
                            echo '<input type="hidden" name="old_pict" value="'.$gambar.'">';
                            echo '<img src="'.base_url().'uploads/'.$gambar.'" width="30%">';
                            echo '<div class="clear-fix"></div><br />';
                         }
                        ?>
                      <input type="file" class="form-control col-md-7 col-xs-12" name="userfile"/>                      
                    </div>
                    <br /><br />

                    
                    <div class="ln_solid"></div>


                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-success"  value="submit">Submit</button>
                      <button type="button" onclick="window.history.go(-1)" class="btn btn-primary" >Kembali</button>
                      </div>
                    </div>

                    <? php echo form_close() ?>
                  </div>
                </div>
              </div>
            </div>          
          </div>


<!-- /page content -->

<?php
include ("footer.php")
?>