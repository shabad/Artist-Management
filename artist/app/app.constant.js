(function() {
    'use strict';
    angular
        .module('ArtistAdmin')

        .constant('config', {
            API: 'http://localhost:8000/artist/server/'
        });
})();
