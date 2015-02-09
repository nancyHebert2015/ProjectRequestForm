"use strict";
var projectRequestControllers;
var ProjectIndexController;

projectRequestControllers = angular.module("projectRequestControllers",[]);


projectRequestControllers.ProjectIndexController = function ($scope, $http, $location, projectRequestFactory) {

    $scope.projects=new Object();
    
    var allProjects = [];
      //programs.push({_id:"", name:"Choose a program"})
      projectRequestFactory.getAllProjects().then(function (data){ 
            $scope.projects= data; 
    });
    
    
};

x