/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 9:44:49 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 8, column 15 in Templates/Other/javascript.js.
 *
 */

(function() {
  'use strict';
  angular.module('Belajar-CodeIgniter')
    .factory('KaryawanService', KaryawanService);

  KaryawanService.$inject = ['$http', 'UrlService'];

  function KaryawanService($http, UrlService) {
    return {
      getKaryawans: function(page, size) {
        return $http.get(UrlService.getKaryawans(page, size));
      },
      getKaryawan: function(key, value) {
        return $http.get(UrlService.getKaryawan(key, value));
      },
      saveKaryawan: function(karyawan) {
        return $http.post(UrlService.saveKaryawan(), karyawan);
      },
      updateKaryawan: function(karyawan, idKaryawan) {
        return $http.put(UrlService.updateKaryawan(idKaryawan), karyawan);
      },
      deleteKaryawan: function(idKaryawan) {
        return $http.delete(UrlService.deleteKaryawan(idKaryawan));
      }
    };
  }

})();
