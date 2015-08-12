var resume = angular.module('resume' , [] );
resume.controller( 'myCntrl', function($scope) {
										$scope.employes=[];
										$scope.submit = function(emp) {
																	$scope.employes.push(emp);
																	$scope.emp = {};
  }
  
$scope.removeItem = function(index){
		
			$scope.ind = index;
			
		}
  $scope.deleteRows = function(ind){

$scope.employes.splice(ind,1);
};
	
		});
 										
 										
 										 
