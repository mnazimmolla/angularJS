<!DOCTYPE html>
<html ng-app=""><?php // declareing angular js applicatin?>
<head>
	<title>Angular JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
	<div ng-init="person=[{name: 'Hasan', age: 15}, {name: 'Riaz', age: 25}, {name: 'Shipa', age: 45}]">
		<p>{{ person[1].name }}</p><?php // working with object array in ng-init?>
	</div>
</body>
</html>