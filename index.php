<!DOCTYPE html>
<html><?php // declareing angular js applicatin?>
<head>
	<title>Angular JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
	<form ng-app="" name="myform">
		<input type="email" name="name" ng-model="myName">
		<span ng-show="myform.name.$error.email">Ivallid Email Address</span>
	</form>
</body>
</html>