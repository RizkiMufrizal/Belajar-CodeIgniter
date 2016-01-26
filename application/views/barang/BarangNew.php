<!DOCTYPE html>
<!--

 @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 @Since Jan 26, 2016
 @Time 10:18:29 AM
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

        <?php echo $error;?>
        
        <div class="container">
            <?php echo form_open_multipart('BarangController/saveBarang'); ?>
            
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="namaBarang" class="form-control" placeholder="Masukkan Nama Barang">
            </div>
            
            <div class="form-group">
                <label>Jenis Barang</label>
                <input type="text" name="jenisBarang" class="form-control" placeholder="Masukkan Jenis Barang">
            </div>
            
            <div class="form-group">
                <label>gambar Barang</label>
                <input class="form-control" type="file" name="gambar">
            </div>
            
            <div class="form-group">
                <label>Tanggal Kadaluarsa</label>
                <input type="date" name="tanggalKadaluarsa" class="form-control" placeholder="Masukkan Tanggal Kadaluarsa">
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>

        </div>

        <?php $this->load->view('layout/LibraryJS') ?>

    </body>
</html>

