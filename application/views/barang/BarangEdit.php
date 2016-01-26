<!DOCTYPE html>
<!--

 @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 @Since Jan 26, 2016
 @Time 12:03:07 PM
 @Encoding UTF-8
 @Project Belajar-CodeIgniter
 @Package Expression package is undefined on line 9, column 13 in Templates/Scripting/EmptyPHPWebPage.php.
  
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <?php $this->load->view('layout/LibraryCSS') ?>
    </head>
    <body>

        <?php $this->load->view('layout/Header') ?>

        <div class="container">

            <form action="<?php echo base_url(); ?>index.php/barang/update" method="post">

                <?php foreach ($barang as $b) { ?>

                    <div class="form-group">
                        <label>ID Barang</label>
                        <input value="<?php echo $b->idBarang; ?>" type="text" name="idBarang1" class="form-control" disabled>
                        <input value="<?php echo $b->idBarang; ?>"  type="hidden" name="idBarang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input value="<?php echo $b->namaBarang; ?>"  type="text" name="namaBarang" class="form-control" placeholder="Masukkan Nama Barang">
                    </div>

                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <input value="<?php echo $b->jenisBarang; ?>"  type="text" name="jenisBarang" class="form-control" placeholder="Masukkan Jenis Barang">
                    </div>

                    <div class="form-group">
                        <label>gambar Barang</label>
                        <input value="<?php echo $b->gambar; ?>" class="form-control" type="text" name="gambar1" disabled>
                        <input value="<?php echo $b->gambar; ?>" class="form-control" type="hidden" name="gambar">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Kadaluarsa</label>
                        <input value="<?php echo $b->tanggalKadaluarsa; ?>" type="date" name="tanggalKadaluarsa" class="form-control" placeholder="Masukkan Tanggal Kadaluarsa">
                    </div>

                <?php } ?>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>

        <?php $this->load->view('layout/LibraryJS') ?>

    </body>
</html>
