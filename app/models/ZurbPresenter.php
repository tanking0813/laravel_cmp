<?php 
    class ZurbPresenter extends Illuminate\Pagination\Presenter {
    
    public function getPageLinkWrapper($url, $page, $rel = null)
    {
        $rel = is_null($rel) ? '' : ' rel="'.$rel.'"';

        return '<li><a href=javascript:goodslist("'.$url.'");>'.$page.'</a></li>';
    }
   
    public function getDisabledTextWrapper($text)
    {
        return '<li class="disabled"><span>'.$text.'</span></li>';
    }

    public function getActivePageWrapper($text)
    {
        return '<li class="active"><span>'.$text.'</span></li>';
    }

}