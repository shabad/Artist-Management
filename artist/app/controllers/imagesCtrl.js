(function() {
    'use strict';
    angular
        .module('ArtistAdmin')
        .controller('imagesCtrl', ['$scope', '$http', 'config',  function($scope, $http, config) {

            $scope.images = [];

               $scope.properties= [
          {"text": "True", "value": "true"},
          {"text": "False", "value": "false"}
                            ]; 



        $http({
            url: config.API+'categorylist.php',
            method: "GET",
        })
        .then(function(response) {
            $scope.categories = response.data;
            
            
        }, 
        function(response) { // optional
                // failed
        });



  $scope.submit = function(){


                   $http({
                        url: config.API+'mywork.php',
                        method: "POST",
                        data: { 'cat' : $scope.category }
                    })
                    .then(function(response) {
                        $scope.images = response.data;
                        
                    }, 
                    function(response) { // optional
                            // failed
                    });


}


                 $scope.delete = function(id){
    


                $http({
                        url: config.API+'deleteImage.php',
                        method: "POST",
                        data: { 'id' : id }
                    })
                    .then(function(response) {
                        window.location.reload();
                        
                    }, 
                    function(response) { // optional
                            // failed
                    });
            


                };





			

         }]);
})();