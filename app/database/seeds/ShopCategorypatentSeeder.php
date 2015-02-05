<?php

class ShopCategoryPatentSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //创建
        DB::table('shop_categories')->insert(
        	array(
        		array(
		            'pid' => '2',
		            'name' => '机械/加工/设备',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '2',
		            'name' => '通信/电子/数码',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '2',
		            'name' => '化工/冶金/生物',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
        		array(
		            'pid' => '2',
		            'name' => '医疗/保健/美容',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '2',
		            'name' => '农林渔牧/食品',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '2',
		            'name' => '交通/运输/包装',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '2',
		            'name' => '建筑/采挖/照明',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '2',
		            'name' => '服饰/日用/家电',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '2',
		            'name' => '纺织/造纸',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '3',
		            'name' => '文字',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '3',
		            'name' => '口述',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '3',
		            'name' => '美术',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '3',
		            'name' => '音乐',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '3',
		            'name' => '摄影',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '3',
		            'name' => '电影',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '3',
		            'name' => '软件',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '3',
		            'name' => '动漫',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '3',
		            'name' => '表演',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            ),
	            array(
		            'pid' => '3',
		            'name' => '录制',
		            'slug'=> '',
		            'thumb'=>'',
		            'description' => '',
		            'created_at'  => new DateTime,
		            'updated_at'  => new DateTime,
	            )
	        )
        );
    }

}
