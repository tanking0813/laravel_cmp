// A factory for retreiving
app.factory('fdatas', ['$http', '$state', function ($http) {

  var path = '';
  var factory = {};

  factory.init = function (model){
      path = backend_url+'/'+model;
  };

  factory.all = function () {
      return  $http.get(path).then(function (resp) {
          return resp.data;
      });
  };

  factory.list = function (page) {
      return  $http.get(path+'/?page='+page).then(function (resp) {
        return resp.data;
      });
  };

  factory.get = function (id) {
      return $http.get(path+'/edit/'+id).then(function (resp) {
          return resp.data.data;
      });
  };

  factory.update = function (id, data) {
      return $http.put(path+'/update/'+id, data).then(function(resp){
            return resp.data.status;
     });
  };

  factory.create = function (data) {
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
          return resp.data.data;
      });
  };

  // ==================== 栏目管理 ===========================

  factory.allCate = function () {
      return $http.get(path+'/all-cate').then(function (resp) {
          return resp.data.data;
      });
  };

  factory.listCate = function (pid) {
    return $http.get(path+'/list-cate/'+pid).then(function (resp) {
        return resp.data.data;
    });
  };

  factory.getCate = function (id) {
      return $http.get(path+'/edit-cate/'+id).then(function (resp) {
          return resp.data.data;
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
          return resp.data.data;
      });
  };


  factory.childCate = function (id) {
      var fdatas = $http.get(path + '/child-cate/' + id).then(function (resp) {
          return resp.data.data;
      });
      return fdatas;
  };

  factory.getCascade = function () {
      return $http.get(path + '/cascade').then(function (resp) {
          return resp.data.data;
      });
  };

  return factory;
}]);