<?php
/**
 * 商城模块
 * version 1.0
 * User: YF
 * Date: 2015/1/14
 * Description: 专利模型
 */

class Shop_patent extends Shop {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shop_patent';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    protected $fillable = ['title','category_id','user_id','level','price','register_code','register','registration_date','announced_date','validity_date','region_id','trading','tags','thumb','spell','content','num','hits','orders_num','comments','sorts','hot','fixedprice','foreigns','popularity','status'];

    public function getAttr($model_name)
    {
        $column = $this->getPublicAttr($model_name);
        unset($column['server_list']);
        unset($column['combine']);

        $arr = [
            'category_id' => [
                'type'  =>'select',
                'label' =>$model_name.'分类',
                'empty' =>'--请选择--',
                'options' => $this->getCategories(2)
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

    public function adddata($data){
        $str = '';
        if($data['category_id']){
          $arr = explode ( "-", $data['category_id']);
          $data['category_id'] = (int) $arr[1];
        }
        if(is_array($data['trading'])){
            foreach($data['trading'] as $v){
                $str .= $v.",";
            }
            $data['trading'] = $str;
            $str = "";
        }
        if(is_array($data['tags'])){
            foreach($data['tags'] as $v){
                $str .= $v.",";
            }
            $data['tags'] = $str;
            $str = "";
        }
//        $result = $this->save($data);
        if($this->create($data)){
            return true;
        }else{
            return false;
        }
    }

}
