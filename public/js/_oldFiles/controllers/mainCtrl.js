angular.module('mainCtrl', [])

   // inject the Project service into our controller
.controller('mainController', function($scope, $http, Project) {
    // object to hold all the data for the new comment form
    $scope.projectData = {};

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    // get all the comments first and bind it to the $scope.comments object
    // use the function we created in our service
    // GET ALL COMMENTS ==============
    Project.get()
        .success(function(data) {
            $scope.projects = data;
            $scope.loading = false;
        });

 
    // Update a project  ================
    $scope.submitComment = function() {
        $scope.loading = true;

        // update the project. pass in project data from the form
        // use the function we created in our service
        Project.update($scope.projectData)
            .success(function(data) {

                // if successful, we'll need to refresh the comment list
                Project.get()
                    .success(function(getData) {
                        $scope.projects = getData;
                        $scope.loading = false;
                    });

            })
            .error(function(data) {
                console.log(data);
            });
    };

    // function to handle deleting a projec
    // DELETE A project ====================================================
    $scope.deleteProject = function(id) {
        $scope.loading = true; 

        // use the function we created in our service
        Project.destroy(id)
            .success(function(data) {

                // if successful, we'll need to refresh the comment list
                Project.get()
                    .success(function(getData) {
                        $scope.projects = getData;
                        $scope.loading = false;
                    });

            });
    };

    

});