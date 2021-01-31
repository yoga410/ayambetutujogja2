<?php
include ("header.php")
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?= base_url(); ?>front_assets/Images/slide.jpg" alt="Image">
      </div>      
     </div>
</div>
  

<div class="container">    
  <h3>Menu</h3><br>

  <div class="row">

    <?php foreach($data as $row) { ?>

      <form method="post" action="<?php echo base_url(); ?>index.php/cart/add/" method="post" accept-charset="utf-8">

    <div class="col-sm-4">
      <div class="thumbnail"> 

      <img src="<?php echo base_url() .'uploads/'.$row['gambar']; ?>"/>

      <div class="caption">
      <span class="card-title"><?php echo $row['nama_menu'];?></span>
      <div class="card-content">
        <p>Rp. <?php echo  number_format( $row['harga'], 0, ',', '.'); ?></p>        
      
        <div class="row text-center">
          <button type="submit" method="post" class="btn btn-success btn-product"><i class="glyphicon glyphicon-shopping-cart"></i>Cart</a>
        </div>
      </div>
      <br>
      </div>     
    </div>
    </div>

    <?php } ?>

  </div>
</div><br><br>

<!-- Footer -->
<?php
include ("footer.php")
?>