var toDo = angular.module('toDo', []); 
toDo.controller('myCntrl', function($scope) {
    $scope.todoList = [{todoText:'add new', done:false}];

    $scope.submit = function() {
        $scope.todoList.push({todoText:$scope.todoInput ;todoText.$scope.date, done:false}
        $scope.todoInput = "";
        $scope.date="";
    };
    

    $scope.remove = function() {
        						var oldList = $scope.todoList;
        						$scope.todoList = [];
        						angular.forEach(oldList, function(x) {
           													 if (!x.done) $scope.todoList.push(x);
           													 else{
            															$scope.count=$scope.count-1 ;
            															$scope.done=$scope.done+1;
            														}
            
       														 });
   							 };
});
