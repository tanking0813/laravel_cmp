<?php

class Shop_logo extends Shop {

	protected $table = 'shop_logo';
    protected $fillable = ['title','category_id','user_id','level','price','register_code','combine','server_list','register','registration_date','announced_date','validity_date','region_id','trading','tags','thumb','spell','content','num','hits','orders_num','comments','recomment','hot','sale','boutique','fixedprice','foreigns','antique','sorts','status'];

    public function getAttr($model_name)
    {
        $column = $this->getPublicAttr($model_name);
        $arr = [
        	'category_id' => [
                'type'  =>'select',
                'label' =>$model_name.'分类',
                'empty' =>'--请选择--',
                'options' => $this->getCategories(1,$model_name)
            ]
        ];
        $column = array_merge($column,$arr);
        return $column;
    }

    public function getFile($thumb,$isOne)
    {
        if($thumb){
            $file = new Uploader;
            $ids = explode(',', $thumb);
            $files = $file->whereIn('id',$ids)->get()->toArray();
            if(is_array($files) && !empty($files)){
                if($isOne == 1){
                    $data = $files['0']['path'];
                }else{
                    foreach ($files as $key => $value) {
                        $data[$key] = $value['path'];
                    }
                }
                return $data;
            }
            return '';          
        }
        return '';       
    }

    public function category()
    {
        return $this->belongsTo('Shop_category','category_id','id');
    }

    public function images()
    {
        return $this->hasOne('Uploader','id','thumb');
    }
    
    public function adddata($data){

        dd($data);
        $str = '';
        if($data['category_id']){
          $arr = explode ( "-", $data['category_id']);
          $data['category_id'] = (int) $arr[1];
        }
        if(is_array($data['trading'])){
            foreach($data['trading'] as $v){
                $str .= $v.",";
            }
            $data['trading'] = $str;
            $str = "";
        }
        if(is_array($data['tags'])){
            foreach($data['tags'] as $v){
                $str .= $v.",";
            }
            $data['tags'] = $str;
            $str = "";
        }
//        $result = $this->save($data);
        if($this->create($data)){
            return true;
        }else{
            return false;
        }
    }

}
