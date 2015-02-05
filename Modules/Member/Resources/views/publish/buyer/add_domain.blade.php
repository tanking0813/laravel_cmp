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
                <li><a href="{{ route('member.publish.buyer.add', 'patent') }}" class="kuai1 pat">求购专利</a></li>
                <li><a href="{{ route('member.publish.buyer.add', 'copy') }}" class="kuai1 copy">求购版权</a></li>
                <li class="active"><a href="{{ route('member.publish.buyer.add', 'domain') }}" class="kuai1 domain">求购域名</a></li>
            </ul>
            <ul class="mt30">
                <!--求购域名-->
                <li style="display:inline-block;">
                    {{ Form::model($data, ['route' => ['member.publish.buyer.store', $type],'class' =>'form-horizontal base','id' =>'pur_domain']) }}
                        <!--求购域名-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">求购域名：<span class="orange">*</span>
                            </label>
                            <div class="col-xs-4">
                                {{ Form::text('domain',null,['class'=>'form-control','id'=>'domain_name','placeholder'=>'域名']) }}
                            </div>
                        </div>
                        <!--域名类型-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">域名类型：<span class="orange">*</span>
                            </label>
                            <div class="col-xs-4">
                                {{ Form::text('domain_type',null,['class'=>'form-control','id'=>'domain_type','placeholder'=>'域名类型']) }}
                            </div>
                        </div>
                        <div class="form-group domain_list"> 
                            <div class="col-xs-8 col-xs-offset-3">  
                                <div class="foriegn">
                                    <h3>英文域名</h3>
                                @foreach(Config::get('member::publish.domain.english') as $k=>$v)
                                    <label class="checkbox-inline">
                                    {{ Form::checkbox('tags',$k) }} {{ $v }}
                                    </label>
                                @endforeach        
                                </div>
                                <div class="zw">
                                    <h3>中文域名</h3>
                                @foreach(Config::get('member::publish.domain.chinese') as $k=>$v)
                                    <label class="checkbox-inline">
                                    {{ Form::checkbox('tags',$k) }} {{ $v }}
                                    </label>
                                @endforeach    
                                </div>
                            </div>
                        </div>
                        <!--域名字符数-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">域名字符数：<span class="orange">*</span>
                            </label>
                            <div class="col-xs-4 reltv">
                                {{ Form::text('chars',null,['class'=>'form-control','id'=>'domain_chars','placeholder'=>'域名字符数']) }}
                                 <div class="selectBox">
                                @foreach(Config::get('member::publish.domain.chars') as $k=>$v)
                                    <label class="radio-inline">
                                    {{ Form::radio('chars',$k,true,['id'=>'exclusiveUp']) }} {{ $v }}  
                                    </label>
                                @endforeach  
                                 </div>
                            </div>
                        </div>
                        <!--求购期限-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">求购期限：
                            </label>
                            <div class="col-xs-4">
                                <div class="input-prepend input-group">
                                {{ Form::text('pur_date','', ['class'=>'form-control j-date','id'=>'apply_date', 'placeholder'=>'年-月-日']) }}
                                    <span class="add-on input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </span>
                                </div>  
                            </div>
                            <!--快速设置-->
                            <!-- <div class="col-xs-2"> 
                               {{ Form::text('pat_time',null,['class'=>'form-control downSelect downSelectOption','placeholder'=>'快速设置']) }} 
                                <div class='full-width slideShow3'>
                                    <ul>
                                        <li><a href="javascript:;">7天</a></li>
                                        <li><a href="javascript:;">15天</a></li>
                                        <li><a href="javascript:;">1个月</a></li>
                                        <li><a href="javascript:;">3个月</a></li>
                                        <li><a href="javascript:;">半年</a></li>
                                        <li><a href="javascript:;">1年</a></li>
                                        <li><a href="javascript:;">3年</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div> 
                        <!--有效时间-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">有效时间：</label>
                            <div class="col-xs-4">
                                <div class="input-prepend input-group">
                                {{ Form::text('effectivetime',null, ['class'=>'form-control j-date','id'=>'apply_date', 'placeholder'=>'年-月-日']) }}
                                    <span class="add-on input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>   
                        
                        <!--求购描述-->
                        <div class="form-group">
                            <label class="col-xs-3 control-label">求购描述：<span class="orange">*</span>
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

    
@stop
