<!DOCTYPE html>
<!--

 @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 @Since Jan 26, 2016
 @Time 10:05:41 AM
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

            <div class="row">

                <a href="<?php echo base_url(); ?>index.php/barang/new">
                    <button class="btn btn-primary">
                        tambah
                    </button>
                </a>

                <p>

                </p>

                <table class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center">ID Barang</th>
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Jenis Barang</th>
                            <th class="text-center">Tanggal Kadaluarsa</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($barangs as $b) {
                            ?>
                            <tr>
                                <td><?php echo $b->idBarang; ?></td>
                                <td><?php echo $b->namaBarang; ?></td>
                                <td><?php echo $b->jenisBarang; ?></td>
                                <td><?php echo $b->tanggalKadaluarsa; ?></td>
                                <td><?php echo $b->gambar; ?></td>
                                <td class="text-center">
                                    <button class="btn btn-success"> 
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger"> 
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <?php echo $pagination; ?>
            </div>

        </div>

        <?php $this->load->view('layout/LibraryJS') ?>

    </body>
</html>
