var app = angular.module('projectRequestsApp', ['ngRoute', 'ui.bootstrap']);

app.run([
  "$rootScope", function($rootScope) {
    $rootScope.log = function(thing) {
      return console.log(thing);
    };
    return $rootScope.alert = function(thing) {
      return alert(thing);
    };
  }
]);


app.config(function($routeProvider, $locationProvider) { 
    
    // use the HTML5 History API
    // pretty URLs by removing the #
    $locationProvider.html5Mode(true);
    
    
    $routeProvider.when('/dashboard', {
    templateUrl: 'js/projects/projects.html',
    controller: 'ProjectsController'
    });
        
    $routeProvider.when('/dashboard/projects/:projectId', {
    templateUrl: 'js/projects/projects.html',
    controller: 'ProjectsController'
    
    });

});


app.factory('dataFactory', ['$http', function($http) {
    
    
    var urlBase = '/api/projects';
    var dataFactory = {};

    dataFactory.getAllProjects = function () {
        return $http.get(urlBase);
    };

    dataFactory.getProject = function (id) {
        return $http.get(urlBase + '/' + id);
    };

    dataFactory.updateProject = function (proj) {
        return $http.put(urlBase + '/' + proj.ID, proj);
    };

    dataFactory.deleteProject = function (id) {
        return $http.delete(urlBase + '/' + id);
    };

    return dataFactory;

    
}]);