<?php

class User_sale_patent extends Model  {
	protected $table = 'user_sale_patent'; 
	protected $fillable = ['title','category_id','user_id','level','price','register_code','register','registration_date','announced_date','validity_date','region_id','trading','kind','tags','thumb','spell','content','num','hits','orders_num','comments','sorts','status'];
  public function adddata($data){
        if($data['category_id']){
          $arr = explode ( "-", $data['category_id']);
          $data['category_id'] = (int) $arr[1];
        }
        if(is_array($data['trading'])){
          
            $data['trading'] = implode(',', $data['trading']);
        }
        if(is_array($data['tags'])){
           $data['tags'] = implode(',', $data['tags']);
        }
        return $data;
    }
  public function getData($where){
        $dataobj = $this->where($where)->paginate(6);
        return $dataobj;
    }
  public function getOne($id){
        $data = $this->find($id)->toArray();
        $data['trading'] = explode ( ',' , $data['trading']);
        $data['tags'] = explode ( ',' , $data['tags']);
        return $data;
    }
}