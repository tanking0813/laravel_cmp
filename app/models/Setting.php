<?php


use Illuminate\Support\Facades\Cache;

class Setting extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'setting';
    protected $fillable = ['key','value'];
    public $timestamps = false;

    /**
     * Validation rules
     *
     * @var Array
     */
    protected static $rules = array();

    /**
     * Custom messages
     *
     * @var Array
     */
    protected static $messages = array();

    public function cacheSetting()
    {
        $setting = self::all();
        $set = [];
        foreach($setting as $k => $v){
            $set[$v['key']] = $v['value'];
        }
        Cache::forever('setting', $set);
    }

}
