'use strict'
var app = angular.module('projectRequestsApp', ["ngRoute", "ngResource"]);






// app.run([]);
  
  
//   // this handles the routing
//   app.config(function($routeProvider, $locationProvider) {
    
//     $locationProvider.html5Mode(true);
    
//     $routeProvider.when('/dashboard',{
//       templateUrl:'js/templates/dashboard.html',
//       controller:'ProjectsController'
//     });
    
    
//     $routeProvider.otherwise({ redirectTo: '/admin' });

    
//   });
  


  
//   app.service("apiService", "dataFactory" ['$http','$routeParams', function ($http, $routeParams, dataFactory) {
    
//     var urlBase = '/api/projects';
    
//     //var factory = {};
    
    
//     dataFactory.getAllProjects = function () {
//         return $http.get(urlBase);
//     };
    

//     dataFactory.getProject = function (id) {
//       return $http.get(urlBase + '/' + id);
//     };
    
    
//     dataFactory.updateProject = function (proj) {
//         return $http.put(urlBase + '/' + proj.ID, proj)
//     };
    
    
//     dataFactory.deleteProject = function (id) {
//         return $http.delete(urlBase + '/' + id);
//     };
    
    
//     //factory
    
//   }]);
  
  
  
  
  
  
  
  
  
//     app.factory('dataFactory', ['$http', function($http) {

//     var urlBase = '/api/projects';
//     var dataFactory = {};
    
//     dataFactory.getAllProjects = function () {
//         return $http.get(urlBase);
//     };
    
//     dataFactory.getProjects = function (id) {
//         return $http.get(urlBase + '/' + id);
//     };
    
//     dataFactory.updateProjects = function (proj) {
//         return $http.put(urlBase + '/' + proj.ID, proj);
//     };
    
//     dataFactory.deleteProjects = function (id) {
//         return $http.delete(urlBase + '/' + id);
//     };
  
//   return dataFactory;
  
//   }]);
  
  
  
  
  
  
  
  
    
// myApp.config(function (localStorageServiceProvider) {
//   localStorageServiceProvider
//     .setPrefix('projectRequestsApp')
//     .setStorageType('localStorage')
//     .setStorageCookie(45, '/')
//     .setStorageCookieDomain('')
//     .setNotify(true, true);
//});


//Controller for the logout button. removes the localstorage logged in order for the login modal to show once again on load.
// myApp.controller('logoutCtrl', function ($scope, localStorageService) {
  
//   $scope.logout = function removeItem(key) {
//   return localStorageService.remove('logged');
//   };
   
// });


//Modal login popover controller
// myApp.controller('MainCtrl', function ($scope, localStorageService) {
  
//     //check if the browser supports localstorage, session storage
//     if(localStorageService.isSupported) {
//       console.log('localstorage supported');
      
//       var loggedStatus = localStorageService.get('logged');
      
//       if (loggedStatus !== null) {
        
//         console.log('status is NOT nothing' + loggedStatus);
        
//         $scope.showModal = false;
        
        
//       } else {
        
//         console.log('status is nothing');
//         $scope.showModal = true;
         
//       }
      
//     }
   
      
//       $scope.submit = function(key, val) {
        
//       console.log('form submitted');
      
//       $scope.showModal = false;
//       return localStorageService.set('logged', 'true');
    
//       //rest call to check if user is logged in
//       //if logged hide the login popover
//       //else show the login popover
       
//       };
          
//       $scope.toggleModal = function(){
//           $scope.showModal = !$scope.showModal;
//       };
    
  
    
    
//   });
  
  
  
// //Directive for the login modal window
// myApp.directive('modal', function () {
//     return {
//       template: '<div class="modal fade">' + 
//           '<div class="modal-dialog">' + 
//             '<div class="modal-content">' + 
//               '<div class="modal-header">' + 
//                 '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>' + 
//                 '<h4 class="modal-title">{{ title }}</h4>' + 
//               '</div>' + 
//               '<div class="modal-body" ng-transclude></div>' + 
//             '</div>' + 
//           '</div>' + 
//         '</div>',
//       restrict: 'E',
//       transclude: true,
//       replace:true,
//       scope:true,
//       link: function postLink(scope, element, attrs) {
//         scope.title = attrs.title;

//         scope.$watch(attrs.visible, function(value){
//           if(value === true)
//             $(element).modal('show');
//           else
//             $(element).modal('hide');
//         });

//         $(element).on('shown.bs.modal', function(){
//           scope.$apply(function(){
//             scope.$parent[attrs.visible] = true;
//           });
//         });

//         $(element).on('hidden.bs.modal', function(){
//           scope.$apply(function(){
//             scope.$parent[attrs.visible] = false;
//           });
//         });
//       }
//     };
//   });