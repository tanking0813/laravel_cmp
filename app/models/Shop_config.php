<?php
/**
 * 商城模块
 * version 1.0
 * User: YF
 * Date: 2015/1/14
 * Description: 商城各模块设置
 */
class Shop_config extends Model {

    protected $table = 'shop_config';
    protected $fillable = ['model','name','value'];
    public $timestamps = false;

    function getAttr($type){
        $arr = [
            'basic'=>[
                'type'=>'fieldset',
                'label'=>'基本设置',
                'fields'=>[
                    'goods_is_check'=>[
                        'type'  =>'radio',
                        'label' =>'商品是否先审核',
                        'values' => ['1'=>'是','2'=>'否']
                    ],
                    'order_is_confirm'=>[
                        'type'  =>'radio',
                        'label' =>'订单是否需要买家确认',
                        'values' => ['1'=>'是','2'=>'否']
                    ],
                    'recommend_num'=>[
                        'type'  =>'number',
                        'placeholder' => '10',
                        'label' =>'首页广告图下推荐数量',
                        'val' => 10
                    ],
                    'buy_info_num'=>[
                        'type'  =>'number',
                        'placeholder' => '10',
                        'label' =>'首页求购信息显示数量',
                        'val' => 10
                    ],
                    'sale_info_num'=>[
                        'type'  =>'number',
                        'placeholder' => '10',
                        'label' =>'首页转让信息显示数量',
                        'val' => 10
                    ],
                    'page_list_num'=>[
                        'type'  =>'number',
                        'label' =>'列表页信息显示数量',
                        'placeholder' => '10',
                        'nullable' => true,
                        'val' => 10
                    ],
                    'trade_case_num' =>[
                        'type'  =>'number',
                        'label' =>'成功案例显示数量',
                        'placeholder' => '10',
                        'nullable' => true,
                        'val' => 10
                    ],
                    'is_show_comments'=>[
                        'type'  =>'radio',
                        'label' =>'列表是否显示评价数',
                        'nullable' => true,
                        'values' => ['1'=>'是','2'=>'否']
                    ],
                    'hot_search' =>[
                        'type'  =>'text',
                        'label' =>'热搜词汇',
                        'placeholder' => '多个请用英文","分开',
                        'nullable' => true
                    ]
                ]
            ]
        ];
        //获取栏目
        $column = $this->getColumn($type);
        foreach ($column as $k => $v) {
            $arr[$k] = [
                'type'=>'fieldset',
                'label'=>$v.'SEO设置',
                'fields'=>[
                    $k.'_title'=>[
                        'type'  =>'text',
                        'label' =>'title'
                    ],
                    $k.'_keywords'=>[
                        'type'  =>'textarea',
                        'placeholder' => '一般5-6个',
                        'label' =>'keywords'
                    ],
                    $k.'_description'=>[
                        'type'  =>'textarea',
                        'placeholder' => '一般最多150字',
                        'label' =>'description'
                    ]
                ]
            ];
        }
        return $arr;
    }

    protected function getColumn($type)
    {
        $arr = [
            '1'=>[
                'index'=>'首页',
                'boutique'=>'精品商标',
                'fixedprice'=>'一口价商标',
                'foreigns'=>'涉外商标',
                'hot'=>'人气商标',
                'antique'=>'古董商标',
                'hunter'=>'商标猎头',
                'ask'=>'商标问问',
                'content'=>'详情页'
            ],
            '2'=>[
                'index'=>'首页',
                'index'=>'精品商标',
                'index'=>'一口价商标',
                'index'=>'涉外商标',
                'index'=>'人气商标',
                'index'=>'古董商标',
                'index'=>'商标猎头',
                'index'=>'商标问问'
            ],
            '3'=>[
                'index'=>'首页',
                'index'=>'精品商标',
                'index'=>'一口价商标',
                'index'=>'涉外商标',
                'index'=>'人气商标',
                'index'=>'古董商标',
                'index'=>'商标猎头',
                'index'=>'商标问问'
            ]
        ];
        return $arr[$type];
    }
}