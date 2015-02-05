<?php namespace search;

use Modules\search\Helpers\made;

class Img extends \Eloquent {

    protected $key;
    protected $type = [];

    public function scopeInit($query, $data)
    {
        $this->key = $data['key'];
        $this->type = $data['type'];

        //'1' => '包含查询',
        if(in_array('1', $this->type)) $query->Bhcx();
        //'2' => '完全相同',
        if(in_array('2', $this->type)) $query->Wqxt();

        return $query;
    }

    //'1' => '包含查询',
    public function scopeBhcx($query)
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

    //'2' => '完全相同',
    public function scopeWqxt($query)
    {
        return $query;
    }



}
