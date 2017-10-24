<!DOCTYPE html>
<html ng-app=""><?php // declareing angular js applicatin?>
<head>
	<title>Angular JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
	<div ng-init="person=[5, 20, 52, 85]">
		<p>{{ person[1] }}</p><?php // working with array in ng-init?>
	</div>
</body>
</html>