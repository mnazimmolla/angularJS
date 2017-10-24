<!DOCTYPE html>
<html ng-app=""><?php // declareing angular js applicatin?>
<head>
	<title>Angular JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
	<div ng-init="quantity=5; cost=10">
		{{ quantity * cost }}
	</div> <?php // working with regular expression with ng-init?>
</body>
</html>