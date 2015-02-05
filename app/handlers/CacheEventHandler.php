<?php

class CacheEventHandler {

    public function subscribe($events)
    {
        $events->listen('cache.init','CacheEventHandler@init');
    }

    //缓存触发接口
    public function init()
    {
        $this->initRoutes();
        $this->initShopCategory();
        $this->initShopConfig();
        $this->initRoutesFormat();
    }

    protected function initRoutes()
    {
        if(!Cache::get('routes') || !Cache::get('routes_simple')){
            $route_collection = Route::getRoutes();
            foreach ($route_collection as $route) {
                if($route->getName() && $route->getPrefix()){
                    $group = explode('@', $route->getActionName());
                    $routes[$route->getPrefix()][$group[0]][$route->getName()] = $route->getName();
                    $routes_simple[] = $route->getName();
                }
            }
            Cache::forever('routes', $routes);
            Cache::forever('routes_simple', $routes_simple);
        }
    }

    //初始化
    protected function initRoutesFormat()
    {
        if(!Cache::get('routes_format')){
            $routes = Cache::get('routes');

            $data = [];
            foreach ($routes as $k => $v) {
                $data[$k]['type'] = 'fieldset';
                $data[$k]['label'] = $k;
                $fields = [];
                foreach ($v as $key=>$option) {
                    $options = [];
                    foreach ($option as $child) {
                        $options[str_replace('.','_',$child)] = ['label'=>$child];
                    };

                    if(strpos($child, '.') !== false){
                        preg_match('/[^.]+\.[^.]+/', $child, $child);
                    }
                    $child = is_array($child)?$child[0]:$child;
                    $data[$k]['fields'][$child] = ['type' =>'checklist','label'=>$child,'options' =>$options];
                };
            };
            Cache::forever('routes_format', $data);
        }
    }

    //初始化市场分类
    protected function initShopCategory()
    {
        if(!Cache::get('shop_category')){
            $shop_category = new Shop_category; 
            $shop_category_arr[1] = $shop_category->where('pid','=',1)->orderBy('slug','asc')->get()->toArray();
            $shop_category_arr[2] = $shop_category->where('pid','=',2)->orderBy('sorts','asc')->get()->toArray();
            $shop_category_arr[3] = $shop_category->where('pid','=',3)->orderBy('sorts','asc')->get()->toArray();
            Cache::forever('shop_category', $shop_category_arr);
        }
    }

    //初始化市场配置信息
    protected function initShopConfig()
    {
        if(!Cache::get('shop_config')){
            $shop_config = new Shop_config; 
            $shop_config_arr = $shop_config->all()->toArray();
            foreach ($shop_config_arr as $key => $value) {
               $shop_configs[$value['model']][$value['name']] = $value['value'];
            }
            Cache::forever('shop_config', $shop_configs);
        }
    }

}