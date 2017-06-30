(function() {
    'use strict';
    angular
        .module('Admin')
        .controller('artistsCtrl', ['$scope', '$http', 'config',  function($scope, $http, config) {



    // $scope.users = [];


        	$scope.alerts = [

                          ];

            $scope.closeAlert = function(index) {
              $scope.alerts.splice(index, 1);
            };






        	$http.get(config.API+"users.php")
				.then(function (response) {
                    $scope.users = response.data
                });









			$scope.remove= function(id, user){

                
                





				 var dataObj = {
        				id : id,
        		};


        		console.log(dataObj);


				$http.post(config.API+'user-delete.php', dataObj).then(function(response) {

                    if(response.data == "success"){
					
                    location.reload();
					
                }

                    
				}, function errorCallback(response){
					$scope.alerts.push({type: 'danger', msg: 'A Error has occured.'});
				});



			}
			

         }]);
})();