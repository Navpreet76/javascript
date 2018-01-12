<!DOCTYPE html>
<html>
<head>
<title>Angular shopping list</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
</head>
<body>
<script>
var app = angular.module('myShoppingList', []);
app.controller('myCtrl', function($scope){
	$scope.products = ["Milk", "Bread", "Cheese", "Vegetables", "Juice", "Eggs", "Butter"];
	$scope.addItem = function(){
		$scope.products.push($scope.addMe);
	}
	$scope.removeItem = function(x){
		$scope.products.splice(x, 1);
	}
});
</script>

<div ng-app="myShoppingList" ng-controller="myCtrl">

<ul>
	<li ng-repeat="x in products">{{ x }}
	<span ng-click="removeItem($index)">&times;</span>	
	</li>
</ul>
<input ng-model="addMe">
<button ng-click="addItem()">Add</button>
	
</div>

<p>Add Items in the input field to add them to the shopping list</p>
</body>
</html>