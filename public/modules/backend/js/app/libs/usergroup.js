app.controller('UsergroupCtrl', ['$scope','fdatas', function($scope, fdatas) {

    fdatas.init('usergroup');

}]);

app.controller('UsergroupListCtrl', ['$scope', 'fdatas', '$state', function($scope, fdatas, $state) {
    fdatas.all().then(function(usergroups){
        $scope.usergroups = usergroups;
    });

    $scope.delete = function($id) {
        if(confirm('确认删除?')){
            $scope.errors = null;
            fdatas.destory($id.id).then(function(status){
                if(status){
                    $state.go($state.current, {}, {reload: true});
                }
            })
        }
    }
}]);

app.controller('UsergroupEditCtrl', ['$scope', 'fdatas', '$stateParams', '$state', function($scope, fdatas, $stateParams, $state) {

    $scope.stdFormTemplate = fdatas.getAttr();
    fdatas.get($stateParams.id).then(function(usergroup){
        $scope.stdFormData = usergroup;
    });

    $scope.urlFormData = {};
    $scope.usergroup={};
    $scope.onSubmit = function() {
        $scope.errors = null;

        fdatas.update($stateParams.id, $scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.usergroup.list');
            }
        });
    }

}]);

app.controller('UsergroupAddCtrl', ['$scope', '$state', 'fdatas', function($scope, $state, fdatas) {

    //获取模型属性
    $scope.stdFormTemplate = fdatas.getAttr();
    $scope.stdFormData = {activated:true};
    $scope.urlFormData = {};

    //提交添加
    $scope.onSubmit = function(){
        $scope.errors = null;
        fdatas.create($scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.usergroup.list');
            }
        });
    }
}]);

app.controller('UsergroupAccessCtrl', ['$scope', 'groupAccess', '$stateParams', '$state', function($scope, groupAccess, $stateParams, $state) {

    $scope.stdFormTemplate = groupAccess.getGroupAccessAttr();

    groupAccess.getAccess($stateParams.id).then(function(usergroup){
        $scope.stdFormData = usergroup;
    });

    $scope.onSubmit = function(){
        $scope.errors = null;

        groupAccess.updateAccess($stateParams.id, $scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.usergroup.list');
            }
        });
    }

}]);

//用户组成员管理
app.controller('UsergroupMembersCtrl', ['$scope', 'groupAccess', '$stateParams', '$state', function($scope, groupAccess, $stateParams, $state) {

    groupAccess.groupMembersall($stateParams.id).then(function(userGroupMembers){
        $scope.userGroupMembers = userGroupMembers;
        if($stateParams.id == 2){
            $scope.group = {status:'disabled'};
        }
    });

    $scope.urlFormData = {};

    $scope.onCancel = function($id){
        if(confirm('确认解除?')){
            $scope.errors = null;
            groupAccess.cancelAccess($id.id, $stateParams.id).then(function(status){
                if(status){
                    $state.go($state.current, {}, {reload: true});
                }
            })
        }
    }


}]);

//自定义方法
app.factory('groupAccess', ['$http', function ($http) {

    var factory = {};

    //获取所有权限列表
    factory.getGroupAccessAttr = function (){
        return $http.get(backend_url + '/usergroup/access-attr').then(function (resp){
            return resp.data.data;
        });
    };

    //获取当前用户组权限
    factory.getAccess = function (id){
        var fdata = $http.get(backend_url+'/usergroup/access/'+id).then(function (resp){
            return resp.data.data;
        });
        return fdata;
    };

    factory.updateAccess = function(id, data){
        var status = $http.put(backend_url + '/usergroup/access/'+id, data).then(function (resp){
            return resp.data.status;
        });
        return status; 
    };

    factory.groupMembersall = function(id){
        return $http.get(backend_url + '/usergroup/members/'+id).then(function (resp){
            return resp.data.data;
        });
    };

    //解除授权
    factory.cancelAccess = function(id, groupid) {
        var fdata = $http.get(backend_url+'/usergroup/cancel-access/'+id+'/?group_id='+groupid).then(function (resp){
           return resp.data.status;
        });
        return fdata;
    }

    return factory;

}]);
