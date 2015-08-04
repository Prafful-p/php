angular.module('myApp.controllers', [])
   .controller('myCntrl', ['$scope', function($scope) {
   											$scope.typ='Select Type'
   											$scope.type = function(typ){
   												$scope.scope = ' :: ';
												$scope.ty = typ;
											};
                                                  	$scope.subj = function(sub){
												$scope.su = sub;
											};
											$scope.disp = function(dis){
												$scope.di = dis;
											};
											$scope.ticket = function(tick){
												$scope.ref = 'ref :: ';
												$scope.tic = tick;
												var ticre = $scope.tic;
												$scope.ticref= ticre.replace(/,/g," #");

											};
											
							
}]);
