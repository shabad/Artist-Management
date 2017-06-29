(function() {
    'use strict';
    angular
        .module('ArtistAdmin')
        .controller('imagesCtrl', ['$scope', '$http',  function($scope, $http) {

            $scope.images = [];

               $scope.properties= [
          {"text": "True", "value": "true"},
          {"text": "False", "value": "false"}
                            ]; 



        $http({
            url: 'http://localhost:8000/artist/server/categorylist.php',
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
                        url: 'http://localhost:8000/artist/server/mywork.php',
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
                        url: 'http://localhost:8000/artist/server/deleteImage.php',
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