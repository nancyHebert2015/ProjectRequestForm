"use strict";
var app;
var projectRequestServices;
var projectRequestFactory;

app = angular.module('projectRequestsApp', ["ngResource", "ngRoute", "ngAnimate", "projectRequestControllers", "projectRequestServices", "projectRequestFactory", "ui.bootstrap"]);

app.factory('projectRequestFactory', projectRequestServices.projectRequestFactory);



app.config(function ($httpProvider) {

  var logsOutUserOn401 = ['$q', '$location', function ($q, $location) {
    var success = function (response) {
      return response;
    };

    var error = function (response) {

      if (response.status === 401) {
        //redirect them back to login page
        window.location.href='admin';
        return $q.reject(response);
      } 
      else {
        return $q.reject(response);
      }
    };

    return function (promise) {
      return promise.then(success, error);
    };
  }];

  $httpProvider.responseInterceptors.push(logsOutUserOn401);
});





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
    
    
    $routeProvider.when('/projects', {
    templateUrl: 'js/templates/projects/dashboard.html',
    //templateUrl: 'js/templates/dashboard.html',
    controller: 'projectRequestControllers.ProjectIndexController'
    });
        
    // $routeProvider.when('/projects/:projectId', {
    // templateUrl: 'js/templates/projects/projectShow.html',
    // //templateUrl: 'js/templates/dashboard.html',
    // controller: 'ProjectShowController'
    // });
    
    
});


// app.service('apiService', ["$http", "$routeParams", function($http, $routeParams) {
    
//     var factory;
//     var urlBase = 'https://projectrequestapplication-nancyhebert.c9.io/api/projects';
    
//     factory = {};
    
//     factory.getAllProjects = function () {

//     return $http.get(urlBase); 
//     };
    
    
//     factory.getProject = function (id) {
//       return $http.get(urlBase + '/' + id);
//     };
    
    
//     factory.updateProject = function (proj) {
//         return $http.put(urlBase + '/' + proj.ID, proj)
//     };
    
    
//     factory.deleteProject = function (id) {
//         return $http.delete(urlBase + '/' + id);
//     };
    
//     return factory;
    
//   }

// ]);

