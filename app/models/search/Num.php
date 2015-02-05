<?php namespace search;

use Modules\search\Helpers\made;

class Num extends \Eloquent {

    protected $key;
    protected $type = [];

    public function scopeInit($query, $data)
    {
        $this->key = $data['key'];
        $this->type = $data['type'];


        //'1' => '换序'
        if(in_array('1', $this->type)) $query->Hx();
        //'2' => '变任一数字',
        if(in_array('2', $this->type)) $query->Bsz();
        //'3' => '完全相同',
        if(in_array('3', $this->type)) $query->Wqxt();
        //'4' => '部分相同',
        if(in_array('4', $this->type)) $query->Bfxt();
        //'5' => '内含其他商标',
        if(in_array('5', $this->type)) $query->Nhsb();
        //'6' => '含在其他商标中',
        if(in_array('6', $this->type)) $query->Hysb();

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

    //'2' => '变任一数字',
    public function scopeBsz($query)
    {
        return $query;
    }

    //'3' => '完全相同',
    public function scopeWqxt($query)
    {
        return $query;
    }

    //'4' => '部分相同',
    public function scopeBfxt($query)
    {
        return $query;
    }

    //'5' => '内含其他商标',
    public function scopeNhsb($query)
    {
        return $query;
    }

    //'6' => '含在其他商标中',
    public function scopeHysb($query)
    {
        return $query;
    }






}
