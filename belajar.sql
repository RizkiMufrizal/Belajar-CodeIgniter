/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 6:07:29 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 8, column 15 in Templates/Other/SQLTemplate.sql.
 * 
 */

create table if not exists tb_karyawan (
    idKaryawan varchar(150) not null,
    nama varchar(50) not null,
    jenisKelamin varchar(5) not null,
    tanggalLahir date not null,
    alamat varchar(150) not null,
    primary key(idKaryawan)
)Engine=InnoDB;

create table if not exists tb_user (
    email varchar(50) not null,
    nama varchar(50) not null,
    password varchar(50) not null,
    enable tinyint,
    role varchar(10),
    primary key(email)
)Engine=InnoDB;

create table if not exists tb_barang (
    idBarang varchar(150) not null,
    namaBarang varchar(50) not null,
    jenisBarang  varchar(5) not null,
    gambar varchar(150) not null,
    tanggalKadaluarsa date,
    primary key(idBarang)
)Engine=InnoDB;