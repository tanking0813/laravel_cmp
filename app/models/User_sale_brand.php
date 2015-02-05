<?php

class User_sale_brand extends Model{

	protected $table = 'user_sale_brand';
	protected $fillable = ['title','category_id','user_id','level','price','register_code','combine','server_list','register','applicationdate','registration_date','announced_date','validity_date','region_id','trading','tags','thumb','spell','content','num','hits','orders_num','comments','sorts','status'];
	public function adddata($data){
      //  dd($data);
        if($data['category_id']){
          $arr = explode ( "-", $data['category_id']);
          $data['category_id'] = (int) $arr[1];
        }
        if(is_array($data['trading'])){
            $data['trading'] =implode(',', $data['trading']);
        }
        if(is_array($data['tags']) && $data['tags']){
            $data['tags'] =implode(',',$data['tags']);
        }
        return $data;
    }
    function getData($where){
        //dd($where);
        $dataobj = $this->where($where)->paginate(2);
        //$dataobj->setBaseUrl('listbrand?status=1');
        return $dataobj;
    }
    function downGoods($id){
        $obj = $this->find($id);
        $obj -> status = 0;
        //$this->find($id)->status = 0;
       if($obj->save()){
          return  true;
       }else{
          return false;
       }
    }
    function deleteGoods($id){
         $obj = $this->find($id);
         if($obj->delete()){
            return true;
         }else{
            return false;
         }
    }
    function getOne($id){
      $data = $this->find($id)->toArray();
      $data['trading'] = explode ( ',' , $data['trading']);
      $data['tags'] = explode ( ',' , $data['tags']);
      //dd($data);
      return $data;
    }

}