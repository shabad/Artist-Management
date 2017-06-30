(function() {
    'use strict';
    angular
        .module('Admin')

        .constant('config', {
            API: 'http://localhost:8000/admin/server/'
        });
})();
