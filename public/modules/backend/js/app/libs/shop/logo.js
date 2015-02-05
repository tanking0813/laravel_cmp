app.controller('ShopLogoCtrl', ['$scope', 'fdatas', function($scope, fdatas) {
   //初始化当前模型数据请求路径
    fdatas.init('shoplogo');
    
}]);

app.controller('ShopListCtrl', ['$scope', 'fdatas', '$state','$rootScope', function($scope, fdatas, $state, $rootScope) {
    $rootScope.loading = 'active';

    var cmodel = fdatas.getModelPare(1);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    $scope.currentPage = 1;

    $scope.load = function () {        
        fdatas.list(1, $scope.currentPage).then(function (items) {
            $scope.shops = items.data;
            $rootScope.loading = '';
            
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

    var cmodel = fdatas.getModelPare(1);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    //文件上传
    $scope.dropzones = {};
    $scope.dropzoneConfig = {
        'item': '',
        'options': {
            'url': '/file/upload'
        },
        'eventHandlers': {
            'addedfile': function(file){
                $rootScope.loading = 'active';
                var removeButton = Dropzone.createElement('<a class="dz-remove">Remove file</a>');
                var _this = this;

                removeButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    if(file.id){
                        $.ajax({type: "POST", url: "/file/delete-image", data: {id: file.id}, success: '', error: ''});
                    }
                    _this.removeFile(file);
                    $scope.dropzones = 0;
                });

                // Add the button to the file preview element.
                file.previewElement.appendChild(removeButton);
            },
            'sending': function (file, xhr, formData) {
            },
            'success': function (file, response) {
                $scope.dropzones = response.data;
                $rootScope.loading = '';
            }
        }
    };

    $scope.stdFormTemplate = fdatas.getAttr();
    fdatas.get($stateParams.id).then(function(shop){
        $scope.stdFormData = shop;
        $scope.dropzoneConfig.item = shop.thumb;
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
        //图片上传字段需要独立处理
        if($scope.dropzones == 0){
            $scope.stdFormData.thumb = '';
        }else if($scope.dropzones && $scope.dropzones != 0){
            $scope.stdFormData.thumb = $scope.dropzones.id
        }else{
            $scope.stdFormData.thumb = post.thumb;
        }
        fdatas.update($stateParams.id, $scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.shop.logo.list');
            }
        });
    }

}]);

app.controller('ShopAddCtrl', ['$scope', '$state', 'fdatas', function($scope, $state, fdatas) {

    //获取模型属性
    var cmodel = fdatas.getModelPare(1);
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

    //文件上传
    $scope.dropzones = {};
    $scope.dropzoneConfig = {
        'item' : '',
        'options': {
            'url': '/file/upload'
        },
        'eventHandlers': {
            'addedfile': function(file){
                var removeButton = Dropzone.createElement('<a class="dz-remove">Remove file</a>');
                var _this = this;

                removeButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    if(file.id){
                        $.ajax({type: "POST", url: "/file/delete-image", data: {id: file.id}, success: '', error: ''});
                    }
                    _this.removeFile(file);
                    $scope.$emit('dropzones', 0);
                });

                // Add the button to the file preview element.
                file.previewElement.appendChild(removeButton);
            },
            'sending': function (file, xhr, formData) {
            },
            'success': function (file, response) {
                $scope.dropzones = response.data;
            }
        }
    };
    //初始化表单单选 多选数据
    $scope.stdFormData.combine=[1];
    $scope.stdFormData.recomment=[0];
    $scope.stdFormData.hot=[0];
    $scope.stdFormData.sale=[0];
    $scope.stdFormData.boutique=[0];
    $scope.stdFormData.fixedprice=[0];
    $scope.stdFormData.foreigns=[0];
    $scope.stdFormData.antique=[0];
    //提交添加
    $scope.onSubmit  = function(){
        $scope.errors = null;
        //缩略图
        $scope.stdFormData.thumb = $scope.dropzones.id;
        fdatas.create($scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.shop.logo.list');
            }
        });
    }
}]);

app.controller('ShopCheckCtrl', ['$scope', '$state', 'fdatas','$rootScope', function($scope, $state, fdatas, $rootScope) {
    $rootScope.loading = 'active';

    var cmodel = fdatas.getModelPare(1);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    $scope.currentPage = 1;

    $scope.load = function () {        
        fdatas.list(2, $scope.currentPage).then(function (items) {
            $scope.shops = items.data;
            $rootScope.loading = '';

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
                //alert('审核失败，记得重新操作哦~');
            }
        })
    }
}]);

app.controller('ShopSetCtrl', ['$scope', '$state', 'fdatas', function($scope, $state, fdatas) {

    //获取模型属性
    var cmodel = fdatas.getModelPare(1);
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
                alert('设置成功~');
                $state.go('app.shop.logo.set');
            }
        });
    }
}]);

// ==================== 栏目管理 ==========================================

app.controller('ShopCategoryListCtrl', ['$scope', 'fdatas', '$state','$rootScope', function($scope, fdatas, $state, $rootScope) {
    $rootScope.loading = 'active';
    
    var cmodel = fdatas.getModelPare(1);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    fdatas.allCate().then(function(categories){
        $scope.categories = categories;
        $rootScope.loading = '';
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
        });
        
    };
    $scope.cate = {
        idss: []
    };
    $scope.checkAll = function() {
        $scope.cate.idss = $scope.categories.map(function(item) { return item.id; });
    };

    $scope.uncheckAll = function() {
        $scope.cate.idss = [];
    };

    //更改状态
    $scope.onApply = function(){
        if($scope.cate.idss.length == 0){
            alert('请选择操作的内容~');
        }else{
            var isAction = 2;      
            if($scope.cate.actions){
                if($scope.cate.actions == 1){
                    if(confirm('删除后子类也将被删除，确认删除?')){
                        isAction = 1;
                    }
                }else{
                    isAction = 1;
                } 
            }else{
                alert('请选择操作~');
            }
            
            if(isAction == 1){
                $scope.errors = null;
                fdatas.changeCate($scope.cate).then(function(res){
                    if(res.status){
                        alert('设置成功~');
                        $scope.categories = res.data;
                        //$state.go('app.shop.logo.category.list');
                    }else{
                        alert('设置失败，麻烦请重新操作~');
                    }
                });
            }
        }     
    }
}]);

app.controller('ShopCategoryAddCtrl', ['$scope', '$state', 'fdatas', function($scope, $state, fdatas) {

    var cmodel = fdatas.getModelPare(1);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;
    
    //文件上传
    $scope.dropzones = {};
    $scope.dropzoneConfig = {
        'item' : '',
        'options': {
            'url': '/file/upload'
        },
        'eventHandlers': {
            'addedfile': function(file){
                var removeButton = Dropzone.createElement('<a class="dz-remove">Remove file</a>');
                var _this = this;

                removeButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    if(file.id){
                        $.ajax({type: "POST", url: "/file/delete-image", data: {id: file.id}, success: '', error: ''});
                    }
                    _this.removeFile(file);
                    $scope.$emit('dropzones', 0);
                });

                // Add the button to the file preview element.
                file.previewElement.appendChild(removeButton);
            },
            'sending': function (file, xhr, formData) {
            },
            'success': function (file, response) {
                $scope.dropzones = response.data;
            }
        }
    };

    //获取模型属性
    $scope.stdFormTemplate = fdatas.getAttrCate();
    $scope.stdFormData = {};
    $scope.urlFormData = {};

    //提交添加
    $scope.onSubmit = function(){
        $scope.errors = null;
        $scope.stdFormData.thumb = $scope.dropzones.id;
        fdatas.createCate($scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.shop.logo.category.list');
            }
        });
    }
}]);

app.controller('ShopCategoryEditCtrl', ['$scope', 'fdatas', '$stateParams', '$state','$rootScope', function($scope, fdatas, $stateParams, $state,$rootScope) {

    var cmodel = fdatas.getModelPare(1);
    $scope.model_name = cmodel.model_name;
    $scope.model_url = cmodel.model_url;

    //文件上传
    $scope.dropzones = {};
    $scope.dropzoneConfig = {
        'item': '',
        'options': {
            'url': '/file/upload'
        },
        'eventHandlers': {
            'addedfile': function(file){
                $rootScope.loading = 'active';
                var removeButton = Dropzone.createElement('<a class="dz-remove">Remove file</a>');
                var _this = this;

                removeButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    if(file.id){
                        $.ajax({type: "POST", url: "/file/delete-image", data: {id: file.id}, success: '', error: ''});
                    }
                    _this.removeFile(file);
                    $scope.dropzones = 0;
                });

                // Add the button to the file preview element.
                file.previewElement.appendChild(removeButton);
            },
            'sending': function (file, xhr, formData) {
            },
            'success': function (file, response) {
                console.log(response.data);
                $scope.dropzones = response.data;
                $rootScope.loading = '';
            }
        }
    };

    $scope.stdFormTemplate = fdatas.getAttrCate();
    fdatas.getCate($stateParams.id).then(function(post){
        $scope.stdFormData = post;
        $scope.dropzoneConfig.item = post.thumb;       
    });


    $scope.onSubmit = function() {
        $scope.errors = null;

        //图片上传字段需要独立处理
        console.log($scope.dropzones);
        if($scope.dropzones == 0){
            console.log(1);
            $scope.stdFormData.thumb = '';
        }else if($scope.dropzones && $scope.dropzones != 0){
            console.log(2);
            $scope.stdFormData.thumb = $scope.dropzones.id
        }else{
            console.log(3);
            $scope.stdFormData.thumb = post.thumb;
        }
          console.log(3); 
        fdatas.updateCate($stateParams.id, $scope.stdFormData).then(function(status){
            if(status){
                $state.go('app.shop.logo.category.list');
            }
        });
    }

}]);