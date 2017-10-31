<!DOCTYPE html>
<html><?php // declareing angular js applicatin?>
<head>
	<title>Angular JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
	<div ng-app="myApp" ng-controller="myController">
		<p>{{ url }}</p>	
	</div>
	<script type="text/javascript">
		var app = angular.module('myApp', []);
		app.controller('myController', function($scope, $location){
			$scope.url = $location.absUrl();
		});
	</script>
</body>
</html>