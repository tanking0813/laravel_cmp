<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->initSetting();
		$this->call('SentryInitSeeder');
		//市场
		$this->call('CategorySeeder');
		$this->call('ShopCategoryLogoSeeder');
		$this->call('ShopCategorypatentSeeder');
		$this->call('ShopFileSeeder');
		$this->call('ShopLogoSeeder');
		$this->call('ShopPatentSeeder');
		$this->call('ShopCopySeeder');
		$this->call('ShopCategoryChildLogoSeeder');
	}

	public function initSetting()
	{
		DB::table('setting')->insert([
			['key'=>'global_title', 'value'=>'柚皮网'],
			['key'=>'global_keyword', 'value'=>'柚皮,柚皮网,知识产权'],
			['key'=>'global_description', 'value'=>'柚皮网是国内专业的致力于为广大客户服务的大型知识产权综合平台！']
		]);
	}

}
