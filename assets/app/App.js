/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 9:44:15 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 8, column 15 in Templates/Other/javascript.js.
 *
 */

(function() {
  'use strict';
  angular
    .module('Belajar-CodeIgniter', [
      'ui.router',
      'oc.lazyLoad',
      'angular-loading-bar'
    ]).config(function($stateProvider, $urlRouterProvider, cfpLoadingBarProvider, $windowProvider) {

    var baseUrl = '/' + $windowProvider.$get().location.pathname.split('/')[1];

    cfpLoadingBarProvider.includeSpinner = true;

    $urlRouterProvider.otherwise('/home');

    $stateProvider
      .state('home', {
        url: '/home',
        views: {
          'lazyLoadView': {
            template: '<ng-home></ng-home>'
          }
        },
        resolve: {
          loadMyCtrl: ['$ocLazyLoad', function($ocLazyLoad) {
            return $ocLazyLoad.load([
              baseUrl + '/assets/app/services/UrlService.js',
              baseUrl + '/assets/app/directives/ngHome.js'
            ]);
          }]
        }
      })
      .state('karyawan', {
        url: '/karyawan',
        views: {
          'lazyLoadView': {
            template: '<ng-karyawan></ng-karyawan>'
          }
        },
        resolve: {
          loadMyCtrl: ['$ocLazyLoad', function($ocLazyLoad) {
            return $ocLazyLoad.load([
              baseUrl + '/assets/app/services/UrlService.js',
              baseUrl + '/assets/app/services/KaryawanService.js',
              baseUrl + '/assets/app/controllers/KaryawanController.js',
              baseUrl + '/assets/app/directives/ngKaryawan.js'
            ]);
          }]
        }
      });

  });
})();
