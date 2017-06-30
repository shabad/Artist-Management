// app.js
var ArtistAdmin = angular.module('ArtistAdmin', ['ui.router', 'ui.bootstrap']);



ArtistAdmin.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/home');

    $stateProvider

        // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/home',
            templateUrl: './app/views/home.php'
        })

        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('profile', {
            // we'll get to this in a bit     
            url: '/profile',
            templateUrl: './app/views/profile.php',
            controller: 'profileCtrl'
        })

        .state('gallery', {
            // we'll get to this in a bit     
            url: '/gallery',
            templateUrl: './app/views/gallery.php',
            controller: 'galleryCtrl'
        })

        .state('images', {
            // we'll get to this in a bit     
            url: '/images',
            templateUrl: './app/views/images.php',
            controller: 'imagesCtrl'
        })



});

