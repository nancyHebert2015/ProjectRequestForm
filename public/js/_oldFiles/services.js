"use strict";
var projectRequestServices;

projectRequestServices = angular.module("projectRequestServices", []);



projectRequestServices.projectRequestFactory= function ($http, $q) {
    
   var factory = {};
   var urlBase = 'https://projectrequestapplication-nancyhebert.c9.io/api/projects';
    
   
   //All Projects
   
   
   factory.getAllProjects = function () {
                  return $http({method: 'GET', url: urlBase}).then(function(result) {
             return result.data;
        }, function(error) {

            // promise rejected, could log the error with: console.log('error', error);
            console.log('error-getAllProject', error);
        });
    }; 
    
    
    //Specific project by id
    
    
    factory.getProject = function (id) {
                  return $http({method: 'GET', url: urlBase + '/' +id}).then(function(result) {
                    
             return result.data;
        }, function(error) {

            // promise rejected, could log the error with: console.log('error', error);
            console.log('error-getProject', error);
        });
    };

    
    
    
    
  return factory;
  
  console.log(factory);

};