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
                    <h2>Detail Menu</h2>
                    <div class="clearfix"></div>
                    
                  </div>

                  <div class="x_content">                   
                    <div class="row">
                    	<div class="col-md-5 col-sm-6">
                    		<img src="<?= base_url(); ?>uploads/<?= $gambar; ?>" style="width:100%">                    		
                    	</div>
                    

                    <div class="col-md-6 col-sm-6">
                    	<table class="table table-stripped">
                    		<tr>
                    			<td width="100px">Nama menu</td>
                    			<td>: <? $nama_menu; ?></td>
                    		</tr>
                    		<tr>
                    			<td width="100px">Harga Menu</td>
                    			<td>: <? 'Rp. '.number_format($harga, 0, ',','.'); ?></td>
                    		</tr>
                    		<tr>
                    			<td width="100px">Deskripsi</td>
                    			<td>: <? $deskripsi; ?></td>
                    		</tr>
                    	</table>
                    	<a href="#" class="btn btn-warning">Edit</a>
                    	<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>                    	
                    	<a href="#" class="btn btn-success" onclick="window.history.go(-1)">Kembali</a>
                    </div>                
                    </div>
                  </div>
                </div>
              </div>              
            </div>          
          </div>


<!-- /page content -->

<?php
include ("footer.php")
?>