<?php namespace search;

use Modules\search\Helpers\made;

class Zitou extends \Eloquent {

    protected $key;
    protected $type = [];

    public function scopeInit($query, $data)
    {
        $this->key = $data['key'];
        $this->type = $data['type'];

        //'1' => '（指定）字形相近',
        if(in_array('1', $this->type)) $query->Zxxj();
        //'2' => '完全相同',
        if(in_array('2', $this->type)) $query->Wqxt();
        //'3' => '换序相同',
        if(in_array('3', $this->type)) $query->Hxxt();

        return $query;
    }

    //'1' => '（指定）字形相近',
    public function scopeZxxj($query)
    {
        return $query;
    }

    //'2' => '完全相同',
    public function scopeWqxt($query)
    {
        return $query;
    }

    //'3' => '换序相同',
    public function scopeHxxt($query)
    {
        return $query;
    }

}
