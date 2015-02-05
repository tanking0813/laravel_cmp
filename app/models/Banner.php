<?php


class Banner extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'banners';
    protected $fillable = ['banner','slide_id'];

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

    /**
     * @return array
     */
    public function getAttr()
    {
        return [
            'banner' =>[
                'type'  =>'upload',
                'label' =>'图片'
            ]
        ];
    }

    public function slide()
    {
        return $this->belongsTo('Slide', 'slide_id');
    }


}
