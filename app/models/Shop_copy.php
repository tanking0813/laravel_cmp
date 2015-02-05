<?php

class Shop_copy extends Shop {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'shop_copy';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

    protected $fillable = ['title','category_id','user_id','level','price','register_code','register','registration_date','announced_date','validity_date','region_id','trading','tags','thumb','spell','keywords','introduce','content','num','hits','orders_num','comments','sorts','status'];

    public function getAttr($model_name)
    {
        $column = $this->getPublicAttr($model_name);
        unset($column['server_list']);
        $arr = [
        	'category_id' => [
                'type'  =>'select',
                'label' =>$model_name.'分类',
                'empty' =>'--请选择--',
                'options' => $this->getCategories(1)
            ],
            'trading'=>[
                'type'  =>'checklist',
                'label' =>'交易方式',
                'options' => $this->getTrading()
            ]
        ];
        $column = array_merge($column,$arr);
        return $column;
    }

    public function getTrading()
    {
        $options = [
            '1'=>['label'=>'转让'],
            '2'=>['label'=>'许可使用']
        ];
        return $options;
    }

    public function category()
    {
        return $this->belongsTo('Shop_category','category_id','id');
    }

    public function images()
    {
        return $this->hasOne('Uploader','id','thumb');
    }

}
