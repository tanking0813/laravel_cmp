<?php

class LogoLoreSeeder extends Seeder {

	/**
	 * Run the LogoLore seeds.
	 *
	 * @return void
	 */
	public function run()
	{	 
		DB::table('logo_lore')->insert(
			array(
        		array( 
				    "title"=>"商标知识1",
				    "source"=>"本站",
		            "content"=>"商标注册网上能直接办理吗？" 
				),
				array( 
				    "title"=>"商标知识2",
				    "source"=>"本站",
		            "content"=>"商标注册网上能直接办理吗？" 
				),
				array( 
				    "title"=>"商标知识3",
				    "source"=>"本站",
		            "content"=>"商标注册网上能直接办理吗？" 
				),
				array( 
				    "title"=>"商标知识4",
				    "source"=>"本站",
		            "content"=>"商标注册网上能直接办理吗？" 
				),
				array( 
				    "title"=>"商标知识5",
				    "source"=>"本站",
		            "content"=>"商标注册网上能直接办理吗？" 
				)
			)
		);

	}
}