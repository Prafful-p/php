angular.module("myApp" , ['firebase'])
 .controller('TicTacController' , ['$scope', '$firebase' , function($scope) {

	var cells = ['','','','','','','','',''];
	var currentMark = 'o';
	var empty = true;
	moves = 1;
	gameover = false;
	grid = [
			[ "" , "" , "" ],
			[ "" , "" , "" ],
			[ "" , "" , "" ]
	];
	$scope.player1Score = 0;
	$scope.player2Score = 0;
	
	$scope.total = 0;
	$scope.tie = 0;
	

	$scope.cells = cells;
	$scope.setName1 = function(player1Name) {
		$scope.player1Name = '';
	}

	$scope.setName2 = function(player2Name) {
		$scope.player2Name = '';
	}

	

	$scope.drawMark = function(index) {
		$scope.player = $scope.player1Name;
				$scope.chance = 'turn ! ';
		if (gameover == false && cells[index] == '') {
			if (currentMark == 'o') {
				$scope.player = $scope.player2Name;
				$scope.chance = 'turn ! ';
				$scope.cells[index] = 'x';
				currentMark = 'x';
			} else {
				$scope.player = $scope.player1Name;
				$scope.chance = 'turn ! ';
				$scope.cells[index] = 'o';
				currentMark = 'o';
			}
		}
		var row = Math.floor(index/3);
		var column = (index % 3);
		grid[row][column] = currentMark;
		if (gameover == false) evaluateWin();
	}

	var evaluateWin = function() {
		if (grid[0][0] == "x" && grid[0][1] == "x" && grid[0][2] == "x") {
			xwin();
		} else if (grid[1][0] == "x" && grid[1][1] == "x" && grid[1][2] == "x") {
			xwin();
		} else if (grid[2][0] == "x" && grid[2][1] == "x" && grid[2][2] == "x") {
			xwin();
		} else if (grid[0][0] == "x" && grid[1][0] == "x" && grid[2][0] == "x") {
			xwin();
		} else if (grid[0][1] == "x" && grid[1][1] == "x" && grid[2][1] == "x") {
			xwin();
		} else if (grid[0][2] == "x" && grid[1][2] == "x" && grid[2][2] == "x") {
			xwin();
		} else if (grid[0][0] == "x" && grid[1][1] == "x" && grid[2][2] == "x") {
			xwin();
		} else if (grid[0][2] == "x" && grid[1][1] == "x" && grid[2][0] == "x") {
			xwin();
		} else if (grid[0][0] == "o" && grid[0][1] == "o" && grid[0][2] == "o") {
			owin();
		} else if (grid[1][0] == "o" && grid[1][1] == "o" && grid[1][2] == "o") {
			owin();
		} else if (grid[2][0] == "o" && grid[2][1] == "o" && grid[2][2] == "o") {
			owin();
		} else if (grid[0][0] == "o" && grid[1][0] == "o" && grid[2][0] == "o") {
			owin();
		} else if (grid[0][1] == "o" && grid[1][1] == "o" && grid[2][1] == "o") {
			owin();
		} else if (grid[0][2] == "o" && grid[1][2] == "o" && grid[2][2] == "o") {
			owin();
		} else if (grid[0][0] == "o" && grid[1][1] == "o" && grid[2][2] == "o") {
			owin();
		} else if (grid[0][2] == "o" && grid[1][1] == "o" && grid[2][0] == "o") {
			owin();
		} else if (moves == 9) {
			var messagebox = document.getElementById('message');
			draw();
		} else {
			moves += 1;
		}
	}

	
	$scope.removeFocus1 = function(key) {
		if (key.keyCode == 13) {
			key.target.blur();
		}
	}

	$scope.removeFocus2 = function(key) {
		if (key.keyCode == 13) {
			key.target.blur();
		}
	}
	
	var xwin = function () {		
		$scope.Result = $scope.player1Name + " wins!";
		gameover = true;
		alert($scope.player1Name + " wins!");
		$scope.player1Score += 1;
		$scope.total +=1;
		clearBoard();
	}

	var owin = function () {
		alert($scope.player2Name + " wins!");
		$scope.Result = $scope.player2Name + " wins!";
		gameover = true;
		$scope.player2Score += 1;
		$scope.total +=1;
		clearBoard();
	}
	var draw = function (){
		alert('draw');
		$scope.Result = "DRAW";
		gameover = true;
		$scope.tie += 1;
		$scope.total +=1;
		clearBoard();
		}

	var clearBoard = function() {
		console.log('you tried to clear the board');
		for (var j = 0; j < cells.length; j++) {
			$scope.cells[j] = '';
		}
		$scope.Result = "";
		currentMark = 'o';
		var empty = true;
		moves = 1;
		gameover = false;
		$scope.player = '';
		$scope.chance = '';
		grid = [
				[ "" , "" , "" ],
				[ "" , "" , "" ],
				[ "" , "" , "" ]
		];
	};
	

}])

