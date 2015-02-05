<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    protected $fillable = ['username','email', 'password', 'activated', 'truename'];

    public function getAttr()
    {
        return [
            'email' =>[
                'type'  =>'text',
                'label' =>'邮箱'
            ],
            'truename' =>[
                'type'  =>'text',
                'label' =>'真实姓名'
            ],
            'password'=>[
                'type'  =>'password',
                'label' =>'密码'
            ],
            'activated' =>[
                'type'  =>'switch',
                'label' =>'状态',
                'values'=>["1" => "正常","0"=>"禁用"]
            ]
        ];
    }

    public function getGroupAttr()
    {
        return [
            'name' =>[
                'type'  =>'text',
                'label' =>'用户组名'
            ]
        ];
        
    }
}
