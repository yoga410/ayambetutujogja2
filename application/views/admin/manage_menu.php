<?php
include ("header.php")
?>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">
          <div class="x_title">
            <h2>Managemen Menu</h2>
              <div style="float:right">
                <a href="<?= base_url(); ?>index.php/menu/add_menu" class="btn btn-primary">Tambah Menu</a>
              </div>
              <div class="clearfix"></div>
          </div>
              

        <div class="x_content">
          <br/>
          <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama menu</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($data->result() as $menu): 
              ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $menu->nama_menu; ?></td>
                <td><?= 'Rp ' .number_format($menu->harga,0,',','.'); ?></td>
                <td><?= $menu->deskripsi; ?></td>                
                <td>
                  <a href="<?= base_url(); ?>index.php/menu/detail/<?= $menu->id_menu; ?>" class="btn btn-success"><i class="fa fa-search-plus"></i></a>
                  <a href="<?= base_url(); ?>index.php/menu/update_menu/<?= $menu->id_menu; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

        <!-- /page content -->
<?php
include ("footer.php")
?>