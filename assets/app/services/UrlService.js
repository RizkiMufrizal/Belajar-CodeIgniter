/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 10:25:26 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 8, column 15 in Templates/Other/javascript.js.
 *
 */

(function() {
  'use strict';

  angular.module('Belajar-CodeIgniter')
    .service('UrlService', UrlService);

  UrlService.$inject = ['$window'];

  function UrlService($window) {
    var baseUrl = '/' + $window.location.pathname.split('/')[1];

    return {
      homeTemplate: function() {
        return baseUrl + '/assets/app/templates/HomeTemplate.html';
      }
    };

  }

})();
