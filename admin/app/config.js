// app.js
var Admin = angular.module('Admin', ['ui.router', 'ui.bootstrap']);

Admin.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/home');

    $stateProvider

        
        .state('home', {
            url: '/home',
            templateUrl: './app/views/home.php'
        })

        .state('artists', {   
            url: '/users',
            templateUrl: './app/views/users.php',
            controller: 'artistsCtrl'
        })

        .state('create', {   
            url: '/newuser',
            templateUrl: './app/views/newuser.php',
            controller: 'newuserCtrl'
        })


});