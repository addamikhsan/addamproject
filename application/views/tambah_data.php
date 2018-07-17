<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Crud Codeigniter</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font/glyphicons-halflings-regular.ttf'); ?>">

  </head>
  <body>

    <?php
          if(isset($_SESSION['input_sukses']))
          {
        ?>
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sukses!</strong> <?php echo $_SESSION['input_sukses']; ?>
            </div>
        <?php
          }
        ?>

<!-- KONTEN UTAMA -->
    <div class="container">
      <h2>Masukkan File Gambar</h2>
      <div class="row">
        <form action="<?=base_url()?>gallery/insertdata" method="post" enctype="multipart/form-data">
          <label>Nama</label><br>
          <input type="text" name="nama" value="<?php echo set_value('nama'); ?>">
                  <?php echo form_error('name'); ?><br><br>
          <label>Alamat</label><br>
          <textarea name="alamat" rows="8" cols="80"><?php echo set_value('alamat'); ?></textarea<?php echo form_error('alamat'); ?>><br>
          <label>foto</label><br>
          <input type="file" name="fotopost"><?php echo form_error('foto'); ?><br><br>

          <input type="submit" name="submit" value="Submit" class="btn btn-default">
        </form>

      </div>
    </div>
<!-- END KONTEN UTAMA -->

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  </body>
</html>
