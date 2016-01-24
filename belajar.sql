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

create table karyawan(
    idKaryawan int not null auto_increment,
    nama varchar(50) not null,
    jenisKelamin varchar(5) not null,
    tanggalLahir date not null,
    alamat varchar(150) not null,
    primary key(idKaryawan)
)Engine=InnoDB;