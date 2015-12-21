<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="customersCtrl"> 

<ul>
  <li ng-repeat="x in names">
    {{ x.ID + ', ' + x.Source }}
  </li>
</ul>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("http://192.168.99.100:32793/api/v1/words")
  .then(function (response) {$scope.names = response.data.records;});
});
</script>

</body>
</html>