<?php

class SentryInitSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //创建用户组
        Sentry::createGroup(
            array(
                'name'        => 'Admin',
                'is_admin'    => 1,
                'permissions' => []
            )
        );
        Sentry::createGroup(
            array(
                'name'        => 'Guest',
                'is_admin'    => 0,
                'permissions' => []
            )
        );

        $user = Sentry::createUser(array(
            'email'     => 'admin@admin.com',
            'username'  => 'admin',
            'password'  => '123456',
            'activated' => true,
        ));
        $adminGroup = Sentry::findGroupById(1);
        $user->addGroup($adminGroup);

        Uinfo::create(['uid'=>$user->id]);
    }

}
