// A factory for retreiving
app.factory('fdatas', ['$http', '$state', function ($http) {

  var path = '';
  var factory = {};

  factory.init = function (model){
      path = backend_url+'/'+model;
  }

  factory.all = function () {
      return  $http.get(path).then(function (resp) {
          return resp.data;
      });
  };

  factory.list = function (type, page) {
      return  $http.get(path+'/?type='+type+'&page='+page).then(function (resp) {
        return resp.data;
      });
  };

  factory.get = function (id) {
      return $http.get(path+'/edit/'+id).then(function (resp) {
          return resp.data;
      });
  };

  factory.update = function (id, data) {
      return $http.put(path+'/update/'+id, data).then(function(resp){
            return resp.data.status;
     });
  };

  factory.create = function (data) {
      console.log(path);
      return $http.post(path+'/store', data).then(function(resp){
         return resp.data.status;
     });
  };

  factory.destory = function (id) {
      return $http.delete(path+'/destroy/'+id).then(function (resp){
        return resp.data.status;
    });
  };

  factory.getAttr = function () {
      return $http.get(path+'/attr').then(function (resp){
          return resp.data;
      });
  };

  /*获取审核列表*/
  factory.getCheckList = function(page){
      return  $http.get(backend_url+'/shoplogo/check-list/?page='+page).then(function (resp) {
          return resp.data;
      });
  };

  /*更改状态*/
  factory.changeStatus = function(id, type){
      return  $http.get(path+'/change-status/'+id+'/?type='+type).then(function (resp) {
          return resp.data.status;
      });
  }

  /*获取设置属性*/
  factory.getSetAttr = function () {
      return $http.get(path+'/set-attr').then(function (resp){
          return resp.data;
      });
  };

  /*获取设置值*/
  factory.getSet = function () {
      return $http.get(path+'/set-value').then(function (resp){
         return resp.data;
     });
  };

  /*保存设置*/
  factory.createSet = function (data) {
      return $http.post(path+'/set', data).then(function (resp){
         return resp.data.status;
     });
  };

  /*获取当前商城属性*/
  factory.getModelPare = function(type){
      if(type == 1){
          var cmodel = {'model_name':'商标','model_url':'logo'};
      }else if(type == 2){
          var cmodel = {'model_name':'专利','model_url':'patent'};
      }else{
          var cmodel = {'model_name':'版权','model_url':'copy'};
      } 
      return cmodel;
  };
  // ==================== 栏目管理 ==================================================================

  factory.allCate = function () {
      return $http.get(path+'/all-cate').then(function (resp) {
          return resp.data;
      });
  };

  factory.getCate = function (id) {
      return $http.get(path+'/edit-cate/'+id).then(function (resp) {
          return resp.data;
      });
  };

  factory.updateCate = function (id, data) {
      return $http.put(path+'/update-cate/'+id, data).then(function(resp){
            return resp.data.status;
     });
  };

  factory.createCate = function (data) {
      return $http.post(path+'/store-cate', data).then(function(resp){
         return resp.data.status;
     });
  };

  factory.destoryCate = function (id) {
      return $http.delete(path+'/destroy-cate/'+id).then(function (resp){
        return resp.data.status;
    });
  };

  factory.getAttrCate = function () {
      return $http.get(path+'/attr-cate').then(function (resp){
          return resp.data;
      });
  };

  factory.childCate = function (id) {
      var fdatas = $http.get(path+'/child-cate/'+id).then(function (resp){
          return resp.data;
      });
      return fdatas;
  };
  factory.changeCate = function (data) {
      return $http.post(path+'/change-cate', data).then(function(resp){
         return resp.data;
      });
  };

  return factory;
}]);