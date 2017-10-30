<!DOCTYPE html>
<html><?php // declareing angular js applicatin?>
<head>
	<title>Angular JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
	<div ng-app="">
		<input type="name" name="name" ng-model="name">
		<p>
			{{ name | lowercase }}
		</p>
	</div>
</body>
</html>