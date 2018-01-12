<!DOCTYPE html>
<html>
<head>
<title>Shopping list with validation</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
	font-family: 'Open Sans', sans-serif;
}
body li{
	padding: 1.25em;
	list-style-type: none;
	font-size: 15px;
	width: 180px;
}
body li:hover{
	background-color: orange;
}
span{
	padding: 3.25em;
}
span:hover{
	cursor: pointer;
}

</style>
</head>
<body>
<script>
var app = angular.module("myShoppingList", []);
app.controller("myCtrl", function($scope){
	$scope.products = ["Milk", "Bread", "Cheese", "Vegetables", "Juice", "Eggs", "Butter"];
	$scope.addItem = function(){
		$scope.errortext = "";
		if(!$scope.addMe) {return;}
		if($scope.products.indexOf($scope.addMe) == -1){
			$scope.products.push($scope.addMe);
		} else {
			$scope.errortext = "This item is already in your shopping list!!";
		}
	}
	$scope.removeItem = function(x){
		$scope.errortext = "";
		$scope.products.splice(x, 1);
	}
});	
</script>

<div id="wrapper">
<div class="col-md-8">
<h1 class="text-danger text-center">Angular Shopping List</h1>
<h4 class="text-info text-center">Add items in the add item field</h4>
<h4 class="text-info text-center">Remove items by clicking the x icon next to the name</h4>
<h4 class="text-info text-center">Error Checking to catch repeat items</h4>
<div ng-app="myShoppingList" ng-controller="myCtrl">
<ul class="stack">
	<li class="text-info text-center" ng-repeat="x in products">{{ x }}
	<span ng-click="removeItem($index)">x</span></li>
</ul>
<div class="col-md-8">
<input ng-model="addMe">
<button ng-click="addItem()">Add</button>	
<p class="text-danger text-center">{{errortext}}</p>
</div>
</div>
</div>
</div>
</body>
</html>