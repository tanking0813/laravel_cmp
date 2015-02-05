app.controller('ShopPatentCtrl', ['$scope', 'fdatas', function($scope, fdatas) {
   //初始化当前模型数据请求路径
    fdatas.init('shoppatent');
    $scope.model_name = '';
    $scope.model_url = '';
}]);

app.controller('ShopListCtrl', ['$scope', 'fdatas', '$state', function($scope, fdatas, $state) {
    var cmodel = fdatas.getModelPare(2);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    $scope.currentPage = 1;

    $scope.load = function () {        
        fdatas.list(1, $scope.currentPage).then(function (items) {
            $scope.shops = items.data;
            
            //分页配置
            $scope.total = items.total;
            $scope.pageSize = items.per_page;
            $scope.endPage = items.last_page;

            $scope.totalPage = Math.ceil($scope.total / $scope.pageSize);
            //生成数字链接
            if ($scope.currentPage > 1 && $scope.currentPage < $scope.totalPage) {
                $scope.pages = [
                    $scope.currentPage - 1,
                    $scope.currentPage,
                    $scope.currentPage + 1
                ];
            } else if ($scope.currentPage == 1 && $scope.totalPage > 1) {
                $scope.pages = [
                    $scope.currentPage,
                    $scope.currentPage + 1
                ];
            } else if ($scope.currentPage == $scope.totalPage && $scope.totalPage > 1) {
                $scope.pages = [
                    $scope.currentPage - 1,
                    $scope.currentPage
                ];
            }
        });
    };

    $scope.next = function () {
        if ($scope.currentPage < $scope.totalPage) {$scope.currentPage++;$scope.load();}
    };

    $scope.prev = function () {
        if ($scope.currentPage > 1) {$scope.currentPage--;$scope.load();}
    };

    $scope.loadPage = function (page) {
        $scope.currentPage = page;$scope.load();
    };


    $scope.load();
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

app.controller('ShopEditCtrl', ['$scope', 'fdatas', '$stateParams', '$state', function($scope, fdatas, $stateParams, $state) {

    var cmodel = fdatas.getModelPare(2);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    $scope.stdFormTemplate = fdatas.getAttr();
    fdatas.get($stateParams.id).then(function(shop){
        $scope.stdFormData = shop;
        //tag表单配置文件
        $scope.select2Options = {
            'multiple': true,
            'simple_tags': true,
            'tags': []  // 下拉可选tag.
        };
    });

    $scope.urlFormData = {};
    $scope.shop={};
    $scope.onSubmit = function() {
        $scope.errors = null;

        fdatas.update($stateParams.id, $scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.shop.patent.list');
            }
        });
    }

}]);

app.controller('ShopAddCtrl', ['$scope', '$state', 'fdatas', function($scope, $state, fdatas) {

    //获取模型属性
    var cmodel = fdatas.getModelPare(2);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    $scope.stdFormTemplate = fdatas.getAttr();
    $scope.stdFormData = {};
    $scope.urlFormData = {};

    $scope.select2Options = {
        'multiple': true,
        'simple_tags': true,
        'tags': []  // 下拉可选tag.
    };

    $scope.stdFormData.trading = [2];
    //提交添加
    $scope.onSubmit  = function(){
        $scope.errors = null;
        fdatas.create($scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.shop.patent.list');
            }
        });
    }
}]);

app.controller('ShopCheckCtrl', ['$scope', '$state', 'fdatas', function($scope, $state, fdatas) {
    var cmodel = fdatas.getModelPare(2);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    $scope.currentPage = 1;

    $scope.load = function () {        
        fdatas.list(2, $scope.currentPage).then(function (items) {
            $scope.shops = items.data;

            //分页配置
            $scope.total = items.total;
            $scope.pageSize = items.per_page;
            $scope.endPage = items.last_page;

            $scope.totalPage = Math.ceil($scope.total / $scope.pageSize);
            //生成数字链接
            if ($scope.currentPage > 1 && $scope.currentPage < $scope.totalPage) {
                $scope.pages = [
                    $scope.currentPage - 1,
                    $scope.currentPage,
                    $scope.currentPage + 1
                ];
            } else if ($scope.currentPage == 1 && $scope.totalPage > 1) {
                $scope.pages = [
                    $scope.currentPage,
                    $scope.currentPage + 1
                ];
            } else if ($scope.currentPage == $scope.totalPage && $scope.totalPage > 1) {
                $scope.pages = [
                    $scope.currentPage - 1,
                    $scope.currentPage
                ];
            }
        });
    };

    $scope.next = function () {
        if ($scope.currentPage < $scope.totalPage) {$scope.currentPage++;$scope.load();}
    };

    $scope.prev = function () {
        if ($scope.currentPage > 1) {$scope.currentPage--;$scope.load();}
    };

    $scope.loadPage = function (page) {
        $scope.currentPage = page;$scope.load();
    };


    $scope.load();

    $scope.onCheck = function($id, type) {
        $scope.errors = null;
        fdatas.changeStatus($id.id, type).then(function(status){
            if(status){
                $state.go($state.current, {}, {reload: true});
            }else{
                console.log('审核失败，记得重新操作哦~');
            }
        })
    }
}]);

app.controller('ShopSetCtrl', ['$scope', '$state', 'fdatas', function($scope, $state, fdatas) {

    //获取模型属性
    var cmodel = fdatas.getModelPare(2);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    $scope.stdFormTemplate = fdatas.getSetAttr();
    fdatas.getSet().then(function(sets){
        $scope.stdFormData = sets;
    });
    $scope.stdFormData = {};
    $scope.urlFormData = {};
    
    //提交添加
    $scope.onSubmit = function(){
        $scope.errors = null;
        fdatas.createSet($scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.shop.patent.set');
            }
        });
    }
}]);

// ==================== 栏目管理 ==========================================

app.controller('ShopCategoryListCtrl', ['$scope', 'fdatas', '$state', function($scope, fdatas, $state) {

    var cmodel = fdatas.getModelPare(2);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    fdatas.allCate().then(function(categories){
        $scope.categories = categories;
    });

    $scope.delete = function($id) {
        $scope.errors = null;
        fdatas.destoryCate($id.id).then(function(status){
            if(status){
                $state.go($state.current, {}, {reload: true});
            }
        })
    }

    $scope.childCate = function($id) {
        $scope.errors = null;
        fdatas.childCate($id.id).then(function(categories){
            $scope.categories = categories;
            $scope.isback = 1;
        });
        
    }

    $scope.onBack = function() {
        fdatas.allCate().then(function(categories){
            $scope.categories = categories;
        });
    }
}]);

app.controller('ShopCategoryAddCtrl', ['$scope', '$state', 'fdatas', function($scope, $state, fdatas) {

    var cmodel = fdatas.getModelPare(2);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;
    //获取模型属性
    $scope.stdFormTemplate = fdatas.getAttrCate();
    $scope.stdFormData = {};
    $scope.urlFormData = {};

    //提交添加
    $scope.onSubmit = function(){
        $scope.errors = null;
        fdatas.createCate($scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.shop.patent.category.list');
            }
        });
    }
}]);

app.controller('ShopCategoryEditCtrl', ['$scope', 'fdatas', '$stateParams', '$state', function($scope, fdatas, $stateParams, $state) {

    var cmodel = fdatas.getModelPare(2);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    $scope.stdFormTemplate = fdatas.getAttrCate();
    fdatas.getCate($stateParams.id).then(function(post){
        $scope.stdFormData = post;
    });

    $scope.urlFormData = {};
    $scope.post={};
    $scope.onSubmit = function() {
        $scope.errors = null;

        fdatas.updateCate($stateParams.id, $scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.shop.patent.category.list');
            }
        });
    }

}]);