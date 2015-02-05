@extends('member::layouts.2columns-left')

@section('style')
    {{ HTML::style('static/css/daterangepicker.css') }}
@stop

@section('leftbar')
    @include('member::partials.publish_sidebar')
@stop

@section('content')
    <div class="identify whiteBg ml0">
        <i class="bao"></i><span class="orange">公司未认证，</span><span>柚皮网普通会员 <a href="" class="ocean">【购买柚皮通服务】</a></span>
    </div>
    <div class="row mt45">
        <div class="pad_15 ml15 whiteBg col-xs-12">
            <!--我要发布-->
            <ul class="tabHead">
                <li><a href="{{ route('member.publish.buyer.add', 'logo') }}" class="kuai1 tm">求购商标</a></li>
                <li class="active"><a href="{{ route('member.publish.buyer.add', 'patent') }}" class="kuai1 pat">求购专利</a></li>
                <li><a href="{{ route('member.publish.buyer.add', 'copy') }}" class="kuai1 copy">求购版权</a></li>
                <li><a href="{{ route('member.publish.buyer.add', 'domain') }}" class="kuai1 domain">求购域名</a></li>
            </ul>
            <ul class="mt30">
                <!--求购专利-->
                 <li style="display:inline-block;">
                    {{ Form::model($data, ['route' => ['member.publish.buyer.store', $type],'class' =>'form-horizontal base','id' =>'pur_pat']) }}
                        <!--求购标题-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">求购标题：<span class="orange">*</span>
                            </label>
                            <div class="col-xs-4">
                            {{ Form::text('pur_title', null, ['class' => 'form-control','id' =>'pat_name','placeholder'=>'求购标题']) }}    
                            </div>
                        </div> 
                        <!--专利类型-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">专利类型：
                            </label>
                            <div class="col-xs-6">
                            @foreach(Config::get('member::publish.patent.type') as $k=>$v)
                                 <label class="radio-inline">
                                    {{ Form::radio('type',$k) }} {{ $v }}
                                 </label>
                            @endforeach
                            </div>
                        </div>
                        <!--专利所属行业-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">专利所属行业：<span class="orange">*</span>
                            </label>
                            <div class="col-xs-4">
                                {{ Form::text('category_id',null,['class'=>'category_id form-control downSelect downSelectOption','id'=>'main_c']) }}
                                {{ Form::hidden('category_id',null,['id'=>'mycategory']) }}   
                                <div class="slideShow2">
                                    <ul>
                                    @foreach($cate as $k=>$v)
                                        <li><a href="javascript:;" pvalue = {{ $k }} >{{ $v['label'] }}</a>
                                        </li>
                                    @endforeach   
                                    </ul>
                                </div>  
                                
                            </div> 
                        </div>
                        <!--交易方式-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">交易类型：<span class="orange">*</span>
                            </label>
                            <div class="col-xs-6 sell_way1">
                            @foreach(Config::get('member::publish.Transaction.trading') as $k=>$v)
                                <label class="checkbox-inline">
                                    {{ Form::checkbox('trading',$k) }} {{ $v }}
                                </label>
                            @endforeach
                            </div> 
                        </div>
                        <!--预购价格-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">预购价格：<span class="orange">*</span>
                            </label>
                            <div class="col-xs-3">
                             {{ Form::text('pur_price',null,['class'=>'form-control','id'=>'pur_price','placeholder'=>'预购价格']) }}
                            </div> 
                            <div class="col-xs-2">
                                <label class="checkbox-inline ml15">
                                   {{ Form::checkbox('pur_price', null, false, array('class' => 'my')) }} 面议
                                </label> 
                            </div> 
                        </div> 
                        <!--求购期限-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">求购期限：
                            </label>
                            <div class="col-xs-4">
                                <div class="input-prepend input-group">
                                {{ Form::text('pur_date',null,['class'=>'form-control j-date','id'=>'','placeholder'=>'年-月-日']) }}
                                    <span class="add-on input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div> 
                        <!--有效时间-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">有效时间：
                            </label>
                            <div class="col-xs-4">
                                <div class="input-prepend input-group">
                                {{ Form::text('effectivetime','', ['class'=>'form-control j-date','id'=>'', 'placeholder'=>'年-月-日']) }}
                                    <span class="add-on input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>  
                        
                        <!--标签-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">标签：
                            </label>
                            <div class="col-xs-3"> 
                            {{ Form::text('tags','', ['class'=>'tags form-control','size'=>8, 'placeholder'=>'回车或点击按钮生成标签']) }} 
                            </div>
                        </div> 
                        <!--相关图片-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">相关图片：
                            </label>
                            <div class="col-xs-6">
                                {{ Form::file('thumb', array('class' => 'form-control','id'=>'product_imgs','placeholder'=>'商标图片')) }}
                            </div>
                        </div>
                        <!--求购描述-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">求购描述：
                            </label>
                            <div class="col-xs-6">
                                 {{ Form::textarea('pur_description', null, ['class' => 'form-control','rows'=> 8]) }}
                            </div>
                        </div> 
                        <!--求购方名称-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">求购方名称：<span class="orange">*</span>
                            </label>
                            <div class="col-xs-4">
                            {{ Form::text('buy_name', null, ['class' => 'form-control','placeholder'=>'请输入求购方名称']) }}          
                            </div>
                        </div>
                        <!--提交-->
                        <div class="form-group">
                            <div class="col-xs-2 col-xs-offset-3">
                                {{ Form::submit('提交', ['class' => 'form-control btn btn-info','id' => 'tm_submit']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6 col-xs-offset-3">
                                <p><span class="orange">！</span>知识产权交易与有形资产交易不同，若本站用户在未选择本站经纪人服务的条件下，自行进 行交易，本站对因交易行为产生的经济风险、法律风险、技术风险等风险概不负责。为您的安 全着想，本站强烈建议您选用本站的经纪人服务。
                                    <a href="" class="orange">（什么是经纪人服务？）</a>
                                </p>
                            </div>
                        </div>
                    {{ Form::close() }}
                </li>
            </ul>
        </div>
    </div>
@stop
@section('script')
    <script type="text/javascript">
        $(function(){
            //时间选择器
            var datePicker = $(".j-date");
            if(datePicker.length){
                datePicker.datetimepicker({
                    language:  'zh-CN',
                    format: "yyyy-mm-dd",
                    weekStart: 1,
                    todayBtn:  1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });
            }
        })
    </script>
    {{ HTML::script('static/js/select2.full.js') }}
    <script src="http://s0.jmstatic.com/templates/jumei/js/jquery/placeholder.min.js"></script>
    {{ HTML::script('static/js/bootstrap/bootstrap.js') }}
    {{ HTML::script('static/js/date.js') }}
    {{ HTML::script('static/js/daterangepicker.js') }}
    {{ HTML::script('static/js/jquery/gritter/jquery.gritter.js') }}
    {{ HTML::script('static/js/jquery/fullcalendar/fullcalendar.min.js') }}
    {{ HTML::script('static/js/jquery/charts/easypiechart/jquery.easy-pie-chart.js') }}

    {{ HTML::script('static/js/jquery/datepicker/js/bootstrap-datetimepicker.js') }}
    {{ HTML::script('static/js/jquery/datepicker/js/locales/bootstrap-datetimepicker.zh-CN.js') }}
    {{ HTML::script('static/js/jquery/validate/jquery.validate.min.js') }}
    {{ HTML::script('modules/member/js/form-validate.js') }}
    <script type="text/javascript">
        var tm_classify = [];
    </script>
@stop
