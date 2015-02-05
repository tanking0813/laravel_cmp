<?php namespace search;

use Modules\search\Helpers\made;

class Pinyin extends \Eloquent {

    protected $key;
    protected $type = [];

    public function scopeInit($query, $data)
    {
        $this->key = $data['key'];
        $this->type = $data['type'];

        //'1' => '读音近似',
        if(in_array('1', $this->type)) $query->Js();
        //'2' => '读音相同',
        if(in_array('2', $this->type)) $query->Xt();

        return $query;
    }

    //'1' => '读音近似',
    public function scopeJs($query)
    {
        return $query;
    }

    //'2' => '读音相同',
    public function scopeXt($query)
    {
        return $query;
    }



}
