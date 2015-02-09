//angular service with three different functions (get, update and destroy)
//the only functions we need since they will correspond to the api routesmade in our laravel routes.
//We return the promise object form our service. Dealth with in our controllers. 
angular.module('projectService', [])

    .factory('Project', function($http) {

    return {
        // get all the comments
        get : function() {
            return $http.get('/api/v1/Projects');
        },

        // save a comment (pass in comment data)
        update : function(projectData) {
            return $http({
                method: 'PUT',
                url: '/api/v1/projects',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(projectData)
            });
        },

        // destroy a comment
        destroy : function(id) {
            return $http.delete('/api/v1/Projects/' + id);
        }
    }



});