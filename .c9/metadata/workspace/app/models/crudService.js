{"filter":false,"title":"crudService.js","tooltip":"/app/models/crudService.js","undoManager":{"mark":7,"position":7,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":22,"column":3},"action":"insert","lines":["var crud = angular.module('CRUDSrvc',[]);"," ","crud.factory(\"CRUD\",function($http){"," ","    return{","        all: function(){","          //get all posts","        },","        create: function(data){","          //create a new post","        },","        get: function(id){","          //get a specific post","        },","        update: function(id,data){","          //update a specific post","        },","        delete: function(id){","          //delete a specific post","        }","    }"," ","});"]}]}],[{"group":"doc","deltas":[{"start":{"row":22,"column":3},"end":{"row":23,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":0},"end":{"row":25,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":0},"end":{"row":28,"column":9},"action":"insert","lines":["all: function(){","           var request = $http({method:'GET', url:'api/posts'});","           return request;","       },"]}]}],[{"group":"doc","deltas":[{"start":{"row":28,"column":9},"end":{"row":29,"column":0},"action":"insert","lines":["",""]},{"start":{"row":29,"column":0},"end":{"row":29,"column":7},"action":"insert","lines":["       "]}]}],[{"group":"doc","deltas":[{"start":{"row":26,"column":51},"end":{"row":26,"column":60},"action":"remove","lines":["api/posts"]},{"start":{"row":26,"column":51},"end":{"row":26,"column":67},"action":"insert","lines":["api/v1/Projects/"]}]}],[{"group":"doc","deltas":[{"start":{"row":26,"column":66},"end":{"row":26,"column":67},"action":"remove","lines":["/"]}]}]]},"ace":{"folds":[],"scrolltop":115.5,"scrollleft":0,"selection":{"start":{"row":29,"column":7},"end":{"row":29,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1422288893588,"hash":"2759276320cd2419fd03d1569f6a86b0ae15a32b"}