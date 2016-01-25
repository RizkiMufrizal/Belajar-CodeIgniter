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

    function getKaryawans() {
      KaryawanService.getKaryawans(1, 5).success(function(data) {
        karyawan.dataKaryawan = data.content;
      });
    }

    getKaryawans();

  }

})();
