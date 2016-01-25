/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 9:45:09 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 8, column 15 in Templates/Other/javascript.js.
 *
 */

(function() {
  'use strict';
  angular.module('Belajar-CodeIgniter')
    .controller('KaryawanController', KaryawanController);

  KaryawanController.$inject = ['KaryawanService'];

  function KaryawanController(KaryawanService) {

    var karyawan = this;

    karyawan.dataKaryawan = {};
    karyawan.inputKaryawan = {};
    karyawan.paging = {
      page: 1,
      jumlah: 5
    };

    function getKaryawans() {
      KaryawanService.getKaryawans(karyawan.paging.page, karyawan.paging.jumlah).success(function(data) {
        karyawan.dataKaryawan = data.content;
        karyawan.paging.totalPages = data.totalPages;
      });
    }

    getKaryawans();

    karyawan.getKaryawan = function(key, value) {
      KaryawanService.getKaryawan(key, value).success(function(data) {
        if (angular.equals(data.content, [])) {
          alert('Data tidak tersedia');
        } else {
          karyawan.dataKaryawan = data.content;
        }
      });
    };

    karyawan.getKaryawans = function() {
      KaryawanService.getKaryawans(1, 5).success(function(data) {
        karyawan.dataKaryawan = data.content;
        karyawan.paging.totalPages = data.totalPages;
      });
    };

    //paging
    karyawan.nextPage = function() {
      if (karyawan.paging.page < karyawan.paging.totalPages) {
        karyawan.paging.page++;
        getKaryawans();
      }
    };

    karyawan.hasNextPage = function() {
      if (karyawan.paging.page < karyawan.paging.totalPages) {
        return false;
      }
      return true;
    };

    karyawan.previousPage = function() {
      if (karyawan.paging.page > 1) {
        karyawan.paging.page--;
        getKaryawans();
      }
    };

    karyawan.hasPreviousPage = function() {
      if (karyawan.paging.page > 1) {
        return false;
      }
      return true;
    };

    //end paging

    karyawan.newKaryawan = function() {
      karyawan.inputKaryawan = {};
      karyawan.enable = true;
    };

    karyawan.saveKaryawan = function(k) {
      KaryawanService.saveKaryawan(k).success(function(data) {
        getKaryawans();
        alert('Data Tersimpan');
      });
    };

    karyawan.editKaryawan = function(k) {
      karyawan.inputKaryawan.idKaryawan = k.idKaryawan;
      karyawan.inputKaryawan.nama = k.nama;
      karyawan.inputKaryawan.jenisKelamin = k.jenisKelamin;
      karyawan.inputKaryawan.tanggalLahir = new Date(k.tanggalLahir);
      karyawan.inputKaryawan.alamat = k.alamat;
      karyawan.enable = false;
    };

    karyawan.updateKaryawan = function(k) {
      KaryawanService.updateKaryawan(k, k.idKaryawan).success(function(data) {
        getKaryawans();
        alert('Data Berhasil DiUpdate');
      });
    };

    karyawan.deleteKaryawan = function(idKaryawan) {
      KaryawanService.deleteKaryawan(idKaryawan).success(function(data) {
        getKaryawans();
        alert('Data berhasil dihapus');
      });
    };

  }

})();
