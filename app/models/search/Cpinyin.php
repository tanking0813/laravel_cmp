<?php namespace search;

use Modules\search\Helpers\made;

class Cpinyin extends \Eloquent {

    protected $key;
    protected $type = [];

    public function scopeInit($query, $data)
    {
        $this->key = $data['key'];
        $this->type = $data['type'];

        //'1' => '换序'
        if(in_array('1', $this->type)) $query->Hx();
        //'2' => '减字母',
        if(in_array('2', $this->type)) $query->Jzm();
        //'3' => '变字母',
        if(in_array('3', $this->type)) $query->Bzm();
        //'4' => '完全相同',
        if(in_array('4', $this->type)) $query->Wqxt();
        //'5' => '部分相同',
        if(in_array('5', $this->type)) $query->Bfxt();
        //'6' => '任意位置加字母',
        if(in_array('6', $this->type)) $query->Jizm();
        //'7' => '内含其他商标',
        if(in_array('7', $this->type)) $query->Nhsj();
        //'8' => '含在其他商标中',
        if(in_array('8', $this->type)) $query->Hysj();
        //'9' => '逆序',
        if(in_array('9', $this->type)) $query->Nx();

        return $query;
    }

    //换序
    public function scopeHx($query)
    {
        $made = new Made();
        $key_array = $made->splitWord($this->key);

        $made->getSort($key_array);
        foreach ($made->getSort($key_array) as $v) {
            $query->orWhere('title', 'like','%'.$this->key.'%');
            var_dump($made->getSort($v));
        }
        return $query;
    }

    //减字母
    public function scopeJzm($query)
    {
        return $query;
    }

    //'3' => '变字母',
    public function scopeBzm($query)
    {
        return $query;
    }

    //'4' => '20%相似',
    public function scopeXs($query)
    {
        return $query;
    }

    //'5' => '读音近似'
    public function scopeDyxj($query)
    {
        return $query;
    }

    //'6' => '完全相同',
    public function scopeWqxt($query)
    {
        return $query;
    }

    //'7' => '部分相同',
    public function scopeBfxt($query)
    {
        return $query;
    }

    //'8' => '任意位置加字母',
    public function scopeJizm($query)
    {
        return $query;
    }

    //'9' => '内含其他商标',
    public function scopeNhsj($query)
    {
        return $query;
    }

    //'10' => '含在其他商标中',
    public function scopeHysj($query)
    {
        return $query;
    }

    //'11' => '逆序',
    public function scopeNx($query)
    {
        return $query;
    }

}
