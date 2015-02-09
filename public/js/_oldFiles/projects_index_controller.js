angular.module("projectRequestsApp").controller("ProjectIndexController", [
  "$scope", "projectService", function($scope, projectService) {
    $scope.pageTitle = "Projects";
    $scope.projects = projectService.getAllProjects();
    console.log("Projects received");
    return console.log($scope.projects);
  }
]);