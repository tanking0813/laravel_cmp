<?php namespace search;

use Modules\search\Helpers\made;

class Cn extends \Eloquent {

    protected $key;
    protected $type = [];

    public function scopeInit($query, $data)
    {
        $this->key = $data['key'];
        $this->type = $data['type'];

        //'1' => '换序'
        if(in_array('1', $this->type)) $query->Hx();
        //'2' => '减汉字',
        if(in_array('2', $this->type)) $query->Jhz();
        //'3' => '任意位置加汉字'
        if(in_array('3', $this->type)) $query->Rywz();
        //'4' => '内含其他商标'
        if(in_array('4', $this->type)) $query->Nhsb();
        //'5' => '完全相同'
        if(in_array('5', $this->type)) $query->Wqxt();
        //'6' => '部分相同'
        if(in_array('6', $this->type)) $query->Bfxt();
        //'7' => '变汉字'
        if(in_array('7', $this->type)) $query->Bhz();
        //'8' => '含在其它商标中'
        if(in_array('8', $this->type)) $query->Hsbz();
        //'9' => '读音相同'
        if(in_array('9', $this->type)) $query->Dyxt();
        //'10' => '逆序'
        if(in_array('10', $this->type)) $query->Nx();

        return $query;
    }

    /**
     * 换序
     * @param $query
     * @return mixed
     */
    public function scopeHx($query)
    {
        $made = new Made();
        $farb = $made->farb($this->key);

        foreach($farb as $v){
            $query->OrWhere('name',$v);
        }
        return $query;
    }

    //减汉字
    public function scopeJhz($query)
    {
        return $query;
    }

    //任意位置加汉字
    public function scopeRywz($query)
    {
        return $query;
    }


    //内含其他商标
    public function scopeNhsb($query)
    {
        return $query;
    }


    //完全相同
    public function scopeWqxt($query)
    {
        $query->orWhere('title','=',$this->key);
        return $query;
    }


    //部分相同
    public function scopeBfxt($query)
    {
        return $query;
    }


    //变汉字
    public function scopeBhz($query)
    {
        return $query;
    }


    //含在其它商标中
    public function scopeHsbz($query)
    {
        return $query;
    }


    //读音相同
    public function scopeDy($query)
    {
        return $query;
    }

    //逆序
    public function scopeNx($query)
    {
        return $query;
    }



    

    

}
