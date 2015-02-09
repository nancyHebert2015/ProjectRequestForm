'use strict';

angular.module('projectRequestsApp')

.controller('ProjectsDetailController', ['$scope', 'dataFactory', 
   
    function ($scope, dataFactory, $routeParams) {
        
        $scope.status;
        $scope.projects;
        
        
        getProject();

       
  
       $scope.getProject = function (id) {
        var proj;
       
        dataFactory.getProject(proj)
          .success(function () {
              
            for (var i = 0; i < $scope.projects.length; i++) {
                var currProj = $scope.projects[i];
                if (currProj.ID === id) {
                    proj = currProj;
                    break;
                }
            }

              $scope.status = 'Updated project! Refreshing project list.';
          })
          .error(function (error) {
              $scope.status = 'Unable to update customer: ' + error.message;
          });
        };
        
       
           
            
}]);
