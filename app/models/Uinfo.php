<?php


class Uinfo extends Model{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_info';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    public $timestamps = false;

    protected $fillable = ['uid','truename','sex','phone','tel','zip_code','address','birthday','blood_type','native_place','income','religion','homepage','hobby','edu_eduction','edu_depatment','edu_time','edu_paivacy','company_name','company_department','company_time','company_position','company_privacy','description'];

    /**
     * Validation rules
     *
     * @var Array
     */
    protected static $rules = [];

    /**
     * Custom messages
     *
     * @var Array
     */
    protected static $messages = array();

    /**
     * @param $mail
     */
    public function getMail($mail){
        $t=explode('@',$mail);
        $t=strtolower($t[1]);
        if($t=='163.com'){
            return 'http://mail.163.com';
        }else if($t=='vip.163.com'){
            return 'http://vip.163.com';
        }else if($t=='126.com'){
            return 'http://mail.126.com';
        }else if($t=='qq.com'||$t=='vip.qq.com'||$t=='foxmail.com'){
            return 'http://mail.qq.com';
        }else if($t=='gmail.com'){
            return 'http://mail.google.com';
        }else if($t=='sohu.com'){
            return 'http://mail.sohu.com';
        }else if($t=='tom.com'){
            return 'http://mail.tom.com';
        }else if($t=='vip.sina.com'){
            return 'http://vip.sina.com';
        }else if($t=='sina.com.cn'||$t=='sina.com'){
            return 'http://mail.sina.com.cn';
        }else if($t=='tom.com'){
            return 'http://mail.tom.com';
        }else if($t=='yahoo.com.cn'||$t=='yahoo.cn'){
            return 'http://mail.cn.yahoo.com';
        }else if($t=='tom.com'){
            return 'http://mail.tom.com';
        }else if($t=='yeah.net'){
            return 'http://www.yeah.net';
        }else if($t=='21cn.com'){
            return 'http://mail.21cn.com';
        }else if($t=='hotmail.com'){
            return 'http://www.hotmail.com';
        }else if($t=='sogou.com'){
            return 'http://mail.sogou.com';
        }else if($t=='188.com'){
            return 'http://www.188.com';
        }else if($t=='139.com'){
            return 'http://mail.10086.cn';
        }else if($t=='189.cn'){
            return 'http://webmail15.189.cn/webmail';
        }else if($t=='wo.com.cn'){
            return 'http://mail.wo.com.cn/smsmail';
        }else if($t=='139.com'){
            return 'http://mail.10086.cn';
        }else {
            return '';
        }
    }
}
