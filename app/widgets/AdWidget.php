<?php
/*
 * 广告Widget
 */
class AdWidget{

    public function init($id)
    {
        $slide = Slide::find($id);

        /*'1' => 'SuperSlide','2' => '静态图片','3' => '纯Javascript'*/
        switch($slide->type){
            case 1:
                $banners = $slide->banners;
                $view = 'superSlide';
                break;
            case 2:
                $banners = $slide->banners->first();
                $view = 'img';
                break;
            default:
                $banners = $slide->banners->first();
                $view = 'img';
                break;
        }
        return View::make('ad.'.$view, compact('banners'))->render();
    }
}