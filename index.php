<!DOCTYPE html>
<html ng-app=""><?php // declareing angular js applicatin?>
<head>
	<title>Angular JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
	<div ng-init="person=['Hasan', 'Jahid', 'Sumon']">
		<p ng-repeat="x in person">{{ x }}</p><?php // working with ng-repeat as array?>
	</div>
</body>
</html>