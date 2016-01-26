/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 9:51:32 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 8, column 15 in Templates/Other/javascript.js.
 *
 */

(function() {
  'use strict';
  angular.module('Belajar-CodeIgniter')
    .directive('ngHome', ngHome);

  ngHome.$inject = ['UrlService'];

  function ngHome(UrlService) {
    return {
      restrict: 'E',
      templateUrl: UrlService.homeTemplate()
    };
  }
})();
