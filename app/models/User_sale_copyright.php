<?php

class User_sale_copyright extends Model{

	protected $table = 'user_sale_copyright'; 

    protected $fillable = ['title','category_id','user_id','level','price','author','authoraddress','patenter','email','belongto','from','kind','register_code','register','registration_date','announced_date','validity_date','region_id','trading','tags','thumb','spell','keywords','introduce','content','num','hits','orders_num','comments','sorts','status'];
    
    public function adddata($data){
        
        if(is_array($data['trading'])){
            $data['trading'] = implode ( ',' , $data['trading'] );
        }
        if(is_array($data['belongto'])){
             $data['belongto'] = implode ( ',' , $data['belongto'] );
        }
        if(is_array($data['kind'])){
             $data['kind'] = implode ( ',' , $data['kind']);
        }
       // dd($data);
       return $data;
    }
    public function getData($where){
        $dataobj = $this->where($where)->paginate(2);
        return $dataobj;
    }
    public function getOne($id){
        $data = $this->find($id)->toArray();
        $data['trading'] = explode ( ',' , $data['trading']);
        $data['belongto'] = explode ( ',' , $data['belongto']);
        $data['kind'] = explode ( ',' , $data['kind']);
        return $data;
    }
}