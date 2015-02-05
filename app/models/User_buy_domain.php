<?php

class User_buy_domain extends Model  {

	protected $table = 'user_buy_domain';
    
    protected $fillable = ['domain','domainsuffix','user_id','level','chars','purchase','pur_price','pur_date','effectivetime','thumb','tags','pur_description','buy_name','trading','spell','num','hits','orders_num','logo_status','sorts','status'];

	public function adddata($data){
        $str = '';
        if(is_array($data['tags'])){
            foreach($data['tags'] as $v){
                $str .= $v.",";
            }
            $data['tags'] = $str;
            $str = "";
        }
		// $result = $this->save($data);
        if($this->create($data)){
            return true;
        }else{
            return false;
        }
    }
}