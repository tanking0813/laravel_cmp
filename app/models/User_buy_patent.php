<?php

class User_buy_patent extends Model  {
	
	protected $table = 'user_buy_patent'; 
    protected $fillable = ['pur_title','category_id','user_id','level','trading','type','kids','purchase','pur_price','pur_date','effectivetime','thumb','tags','pur_description','buy_name','spell','num','hits','orders_num','logo_status','sorts','status'];

    public function adddata($data){

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
       /* if(is_array($data['tags'])){
            foreach($data['tags'] as $v){
                $str .= $v.",";
            }
            $data['tags'] = $str;
            $str = "";
        }*/
	    //$result = $this->save($data);
        if($this->create($data)){
            return true;
        }else{
            return false;
        }
    }
    
}