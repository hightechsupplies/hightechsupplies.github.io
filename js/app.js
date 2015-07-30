var app = angular.module("hightech",[]);

app.directive('menu', function() {
  return {
    restrict: 'A',
    scope: false,
    templateUrl: 'menu.html'
  };
});