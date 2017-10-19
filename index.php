<!DOCTYPE html>
<html ng-app="myApp"><?php // declareing angular js applicatin?>
<head>
	<title>Angular JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
	<div ng-controller="myController"> <?php // declareing angular js controller?>
		<p>{{ name }}</p>
	</div>
	<script type="text/javascript">
		var data = angular.module("myApp", []); <?php // declareing angular js module?>
		data.controller('myController', function($scope){ <?php // working with controller?>
			$scope.name = 'Hello World';
		});
	</script>
</body>
</html>