var crud = angular.module('CRUDSrvc',[]);
 
crud.factory("CRUD",function($http){
 
    return{
        all: function(){
          //get all posts
        },
        create: function(data){
          //create a new post
        },
        get: function(id){
          //get a specific post
        },
        update: function(id,data){
          //update a specific post
        },
        delete: function(id){
          //delete a specific post
        }
    }
 
});


all: function(){
           var request = $http({method:'GET', url:'api/v1/Projects'});
           return request;
       },
       