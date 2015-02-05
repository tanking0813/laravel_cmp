<?php
class Img{

    protected $code_width;
    protected $code_height;
    protected $code_num;

    /**
     * 初始化验证码格式
     */
    public function __construct()
    {
        $this->code_width = Config::get('Img.captcha.width');
        $this->code_height = Config::get('Img.captcha.height');
        $this->code_num = Config::get('Img.captcha.num');
    }
    /**
     * @return mixed
     */
    public function code()
    {
        return $this->makeCode();
    }

    /**
     * @return mixed
     */
    protected function makeCode()
    {
        $charset = "2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY";
        $cWidth = $this->code_width;  //画布宽度
        $cHeight = $this->code_height;  //画布高度
        $code = "";
        $color =  ['#99c525','#fc9721','#8c659d','#00afd8'];
        $img = Image::canvas($cWidth, $cHeight, '#ccc');
        for ($i=0;$i<$this->code_num;$i++) {
            //画出干扰线
            $img->line(mt_rand(0,$cWidth),mt_rand(0,$cHeight),mt_rand(0,$cWidth),mt_rand(0,$cHeight), function ($draw) use ($color){
                $draw->color($color[array_rand($color,1)]);
            });
            //随机取出验证码
            $code .= $charset[mt_rand(0,strlen($charset)-1)];
            //画出验证码
            $img->text($code[$i],($this->code_width/$this->code_num)*$i+5,25,function($font) use($color){
                $font->file('static/fonts/arial.ttf');
                $font->size(18);
                $font->color($color[array_rand($color,1)]);
                $font->angle(mt_rand(-30,30));
            });
        }
        //在session中放置code
        Session::put('code', Str::lower($code));
        $response = Response::make($img->encode('png'));

        $response->header('Content-Type', 'image/png');
        return $response;
    }
}