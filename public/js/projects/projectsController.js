'use strict';

angular.module('projectRequestsApp')

.controller('ProjectsController', ['$scope', 'dataFactory', 
   
    function ($scope, dataFactory) {
        
        $scope.status;
        $scope.projects;
        
        
        getAllProjects();

        function getAllProjects() {
            dataFactory.getAllProjects()
                .success(function (projs) {
                    $scope.projects = projs.project;
                    console.log( $scope.projects) ; 
                    console.log( projs) ;  
                })
                .error(function (error) {
                    $scope.status = 'Unable to load project data: ' + error.message;
                    console.log( $scope.status );
                });
          
        }
       
      
      
        $scope.updateProject = function (id) {
        var proj;
       
        dataFactory.updateProject(proj)
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
        
        
        
        $scope.deleteProject = function (id) {
        dataFactory.deleteProject(id)
        .success(function () {
            $scope.status = 'Deleted project! Refreshing project list.';
            for (var i = 0; i < $scope.projects.length; i++) {
                var proj = $scope.projects[i];
                if (proj.ID === id) {
                    $scope.projects.splice(i, 1);
                    break;
                }
            }
        
        })
        .error(function (error) {
            $scope.status = 'Unable to delete customer: ' + error.message;
        });
        };
       
           
            
}]);
