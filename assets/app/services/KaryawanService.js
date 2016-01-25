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
      }
    };
  }

})();
