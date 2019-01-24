var app = angular.module("transEaze", ['ui.router','oitozero.ngSweetAlert']);
app.config(["$stateProvider", "$urlRouterProvider", function ($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('home');

    $stateProvider.
        //add index view
        state('home', {
            url: '/home',
            templateUrl: 'views/index.html',
            controller: 'homeCtrl'
        }).
        //fbn view
        state('fbn', {
            url: '/fbn',
            templateUrl: 'views/fbn.html',
            controller: 'fbnCtrl'
        }).
        state('invoice', {
            url: '/invoice',
            templateUrl: 'views/invoice.html',
            controller: 'invoiceCtrl'
        }).
        state('details', {
            url: '/details',
            templateUrl: 'views/details.html',
            controller: 'detailsCtrl'
        });

}]);