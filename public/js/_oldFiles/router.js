'use strict'
angular.module("projectRequestsApp").config(function($routeProvider, $locationProvider) { 
    
    // use the HTML5 History API
    // pretty URLs by removing the #
    $locationProvider.html5Mode(true);
    
    
    $routeProvider.when('/projects', {
    templateUrl: 'js/projects/dashboard.html',
    //templateUrl: 'js/templates/dashboard.html',
    controller: 'ProjectIndexController'
    });
        
    // $routeProvider.when('/projects/:projectId', {
    // templateUrl: 'js/projects/projectShow.html',
    // //templateUrl: 'js/templates/dashboard.html',
    // controller: 'ProjectShowController'
    // });
    
    
});