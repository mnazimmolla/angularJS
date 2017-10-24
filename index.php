<!DOCTYPE html>
<html ng-app=""><?php // declareing angular js applicatin?>
<head>
	<title>Angular JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
	<div ng-init="person={name : 'Hasam', age : 15}">
		{{ person.age }}
	</div> <?php // working with object ng-init?>
</body>
</html>