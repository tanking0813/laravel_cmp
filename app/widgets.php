<?php

//广告插件
Widget::register('ad', 'AdWidget@init');
//资源插件
Widget::register('asset', function($slug, $type){
    $local  = ($type == 'style')?Config::get('asset.local.css'):Config::get('asset.local.js');
    $remote  = ($type == 'style')?Config::get('asset.remote.css'):Config::get('asset.remote.js');

    if(!Config::get('asset.cdn')){
        return HTML::$type($local[$slug]);
    }else{
        return isset($remote[$slug])?HTML::$type($remote[$slug]):HTML::$type($local[$slug]);
    }
});


Widget::register('datalist', function($model, $view, $filter=[], $skip=0, $limit=10, $fields=[], $with='', $with_filter=[])
{ 
    $model = new $model;
    if($with){
        if(is_array($with_filter) && !empty($with_filter)){
            $data = $model->select($fields)->where(function($query) use($filter){        
                foreach ($filter as $v) {
                    $query->where($v[0], $v[1], $v[2]);        
                }           
            })->skip($skip)->take($limit)->with(array($with => function($query) use($with_filter){
                foreach ($with_filter as $key=>$val){
                    $query->$key($val);        
                }
            }))->get()->toArray();
        }else{
            $data = $model->select($fields)->where(function($query) use($filter){        
                foreach ($filter as $v) {
                    $query->where($v[0], $v[1], $v[2]);        
                }           
            })->skip($skip)->take($limit)->with($with)->get()->toArray();
        }       
    }else{
        $data = $model->select('id')->where(function($query) use($filter){        
            foreach ($filter as $v) {
                $query->where($v[0], $v[1], $v[2]);        
            }           
        })->skip($skip)->take($limit)->get()->toArray();
    }
    //dd($data);
    return View::make($view,compact('data'))->render();
});
