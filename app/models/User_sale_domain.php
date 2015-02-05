<?php

class User_sale_domain extends Eloquent{
	protected $table = 'user_sale_domain'; 

    protected $fillable = ['title','category_id','user_id','level','price','domain','domainsuffix','sex_domain','register_date','validity_date','trading','thumb','spell','keywords','introduce','content','num','hits','orders_num','comments','sorts','status'];
    
    public function adddata($data){
        // var_dump($data);
        if(isset($data['sex_domain']) &&  is_array($data['sex_domain'])){
            $data['sex_domain'] = implode(',', $data['sex_domain']);
        }
        if(isset($data['trading']) && is_array($data['trading']) ){
            $data['trading'] = implode(',', $data['trading']);
        }
       return $data;
    }
    function getData($where){
        $dataobj = $this->where($where)->paginate(2);
        return $dataobj;
    }
    function getOne($id){
        $data = $this->find($id)->toArray();
        $data['trading'] = explode ( ',' , $data['trading']);
        $data['sex_domain'] = explode ( ',' , $data['sex_domain']);
        //dd($data);
        return $data;
    }
}