@extends('member::layouts.2columns-left')

@section('style')
{{ HTML::style('static/js/jquery/datepicker/css/bootstrap-datetimepicker.min.css') }}
{{ HTML::style('static/js/jquery/select2/select2.min.css') }}
{{ HTML::style('static/css/jquery.easy-pie-chart.css') }}
{{ HTML::style('static/css/jquery.easy-pie-chart.css') }}
@stop

@section('leftbar')
<div class="account row mt20">
    <h1 class="tit">
        <img src="{{ asset('modules/member/images/account_03.jpg') }}"/><span class="ml15">账户管理</span>
    </h1>
    <div class="center">
    <div class="number"  data-percent="85"><span>+85</span>%</div>
    <a class="title" href="#">您的资料完整度</a>
    </div>
</div>
<div class="common-use common mt20">
    <ul>
        <li class="active"><a href="account.html">账户管理</a></li>
        <li><a href="modify_pass.html">密码修改</a></li>
    </ul>
</div>
@stop

@section('content')
<div class="pv20 whiteBg accountInfo">
    <ul class="nav nav-tabs pl20" role="tablist">
      <li role="presentation" class="active"><a href="#baseInfo" role="tab" data-toggle="tab">基本信息</a></li>
      <li role="presentation"><a href="#singleInfo" role="tab" data-toggle="tab">个人信息</a></li>
      <li role="presentation"><a href="#singleAvar" role="tab" data-toggle="tab">个人头像</a></li>
      <li role="presentation"><a href="#school" role="tab" data-toggle="tab">教育经历</a></li>
      <li role="presentation"><a href="#workExp" role="tab" data-toggle="tab">工作经历</a></li>
    </ul>
    <!-- 切换内容 -->
    <div class="tab-content">
    <!--基本信息-->
      <div role="tabpanel" class="tab-pane active" id="baseInfo">
        <div class="mv60">
            {{ Form::model($uinfo_all, ['route'=>'member.account.update', 'class'=>'form-horizontal base', 'id'=>'form1']) }}
                <!--我的昵称-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">我的昵称：</label>
                    <div class="col-xs-4">
                        {{ Form::text('nickname',null,['class'=>'form-control','placeholder'=>'我的昵称']) }}
                    </div>
                </div>
                <!--我的姓名-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">我的姓名：</label>
                    <div class="col-xs-4">
                        {{ Form::text('truename',null,['class'=>'form-control','placeholder'=>'我的姓名']) }}
                    </div>
                    <div class="col-xs-4">
                        <label class="radio-inline">性别：</label>
                        <label class="radio-inline">
                            {{ Form::radio('sex','男') }} 男
                        </label>
                        <label class="radio-inline">
                            {{ Form::radio('sex','女') }} 女
                        </label>
                    </div>
                </div>
                <!--会员身份-->
                <!--
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">会员身份：</label>
                    <div class="col-xs-6">
                        <label class="radio-inline">
                          <input type="radio" id="inlineRadio1" name="status" value="status1" checked="checked"> 专家
                        </label>
                        <label class="radio-inline">
                          <input type="radio" id="inlineRadio2" name="status" value="status2"> 发明人
                        </label>
                        <label class="radio-inline">
                          <input type="radio" id="inlineRadio2" name="status" value="status2"> 代理人
                        </label>
                        <label class="radio-inline">
                          <input type="radio" id="inlineRadio2" name="status" value="status2"> 投资人
                        </label>
                        <label class="radio-inline">
                          <input type="radio" id="inlineRadio2" name="status" value="status2"> 其他
                        </label>
                    </div>
                </div>
                -->
                <!--自我介绍-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">自我介绍：</label>
                    <div class="col-xs-8">
                        {{ Form::textarea('description',null,['class'=>'form-control','cols'=>80,'rows'=>10]) }}
                    </div>
                </div>
                <!--账户类型-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">账户类型：</label>
                    <div class="col-xs-4">
                        <label for="input1" class="col-xs-3">个人</label>
                    </div>
                </div>
                <!--邮箱-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">邮箱：</label>
                    <div class="col-xs-4">
                        <label class="col-xs-3 control-label">{{ Sentry::getUser()->email }}</label>
                    </div>
                </div>
                <!--电话号码-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">电话号码：</label>
                    <div class="col-xs-4">
                        {{ Form::text('phone',null,['class'=>'form-control','placeholder'=>'电话号码']) }}
                    </div>
                </div>
                <!--邮编地址-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">邮编地址：</label>
                    <div class="col-xs-4">
                        {{ Form::text('zip_code',null,['class'=>'form-control','placeholder'=>'邮编地址']) }}
                    </div>
                </div>
                <!--联系地址-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">联系地址：</label>
                    <div class="col-xs-4">
                        {{ Form::text('address',null,['class'=>'form-control','placeholder'=>'联系地址']) }}
                    </div>
                </div>
                <!--兴趣爱好-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">兴趣爱好：</label>
                    <div class="col-xs-8">
                        <select class="j-tags form-control" multiple="multiple" name="hobby2[]">
                            @if($uinfo_all->hobby)
                                @foreach(explode(',', $uinfo_all->hobby) as $v)
                                    <option selected="selected">{{ $v }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <!--保存-->
                <div class="form-group">
                    <div class="col-xs-2 col-xs-offset-3">
                        {{ Form::submit('保存', ['class'=>'form-control btn btn-info','id'=>'base_submit']) }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>
      </div>
      <!--个人信息-->
      <div role="tabpanel" class="tab-pane" id="singleInfo">
            <div class="mv60">
            {{ Form::model($uinfo_all, ['route'=>'member.account.update', 'class'=>'form-horizontal base', 'id'=>'form2']) }}
                <!--我的姓名-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">我的姓名：</label>
                    <div class="col-xs-4">
                        {{ Form::text('truename',null,['class'=>'form-control','disabled'=>'disabled','placeholder'=>'我的姓名']) }}
                    </div>
                </div>
                <!--我的生日-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">我的生日：</label>
                    <div class="col-xs-4">
                        <div class="input-group date j-date">
                            {{ Form::text('birthday',null,['class'=>'form-control']) }}
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                    </div>
                <!--我的血型-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">我的血型：</label>
                    <div class="col-xs-4">
                        {{ Form::select('blood_type',['a'=>'A型','b'=>'B型','ab'=>'AB型','o'=>'O型','other'=>'其它'],null,['class'=>'form-control']) }}
                    </div>

                </div>
                <!--我的籍贯-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">我的籍贯：</label>
                    <div class="col-xs-8 form-inline">
                        <label for="province">省：</label><select name="native_place2['province']" id="province" class="form-control" data-old="{{ $uinfo_all->province }}"></select>
                        <label for="city">市：</label><select name="native_place2['city']" id="city" class="form-control" data-old="{{ $uinfo_all->city }}"></select>
                        <label for="area">区：</label><select name="native_place2['area']" id="area" class="form-control" data-old="{{ $uinfo_all->area }}"></select>
                    </div>
                </div>
                <!--收入水平-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">收入水平：</label>
                    <div class="col-xs-4">
                        {{ Form::text('income',null,['class'=>'form-control','placeholder'=>'收入水平']) }}
                    </div>
                </div>
                <!--宗教信仰-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">宗教信仰：</label>
                    <div class="col-xs-4">
                        {{ Form::text('religion',null,['class'=>'form-control','placeholder'=>'宗教信仰']) }}
                    </div>
                </div>
                <!--个人主页-->
                <div class="form-group">
                    <label for="input1" class="col-xs-3 control-label">个人主页：</label>
                    <div class="col-xs-4">
                        {{ Form::text('homepage',null,['class'=>'form-control','placeholder'=>'个人主页']) }}
                    </div>
                </div>

                <!--保存-->
                <div class="form-group">
                    <div class="col-xs-2 col-xs-offset-3">
                        {{ Form::submit('保存', ['class'=>'form-control btn btn-info','id'=>'personal_submit']) }}
                    </div>
                </div>
            </form>
        </div>
      </div>
      <!--个人头像-->
      <div role="tabpanel" class="tab-pane" id="singleAvar">
        <div class="mt60">
            <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" WIDTH="650" HEIGHT="450" id="myMovieName">
                <PARAM NAME=movie VALUE="{{ asset('static/avatar.swf') }}">
                <PARAM NAME=quality VALUE=high>
                <PARAM NAME=bgcolor VALUE=#FFFFFF>
                <param name="flashvars" value="imgUrl={{ $uinfo_all->avatar }}&uploadUrl=/file/avatar&uploadSrc=false" />
                <EMBED src="{{ asset('static/avatar.swf') }}" quality=high bgcolor=#FFFFFF WIDTH="650" HEIGHT="450" wmode="transparent" flashVars="imgUrl={{ $uinfo_all->avatar }}&uploadUrl=/file/avatar&uploadSrc=false" NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" allowScriptAccess="always"
                PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
                </EMBED>
            </OBJECT>
            <div id="avatar_priview"></div>
        </div>
      </div>
      <!--教育经历-->
      <div role="tabpanel" class="tab-pane" id="school">
        <div class="mv60">
        {{ Form::model($uinfo_all, ['route'=>'member.account.update', 'class'=>'form-horizontal base', 'id'=>'form3']) }}
            <!--学校名称-->
            <div class="form-group">
                <label for="input1" class="col-xs-3 control-label">学校名称：</label>
                <div class="col-xs-4">
                    {{ Form::text('edu_school', null, ['class'=>'form-control', 'placeholder'=>'学校名称']) }}
                </div>
            </div>
            <!--院系班级-->
            <div class="form-group">
                <label for="input1" class="col-xs-3 control-label">院系班级：</label>
                <div class="col-xs-4">
                    {{ Form::text('edu_department', null, ['class'=>'form-control', 'placeholder'=>'院系班级']) }}
                </div>
            </div>
            <!--入学年份-->
            <div class="form-group">
                <label for="input1" class="col-xs-3 control-label">就学时间：</label>
                <div class="col-xs-4">
                    <div class="input-prepend input-group">
                        <span class="add-on input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        {{ Form::text('edu_time2[start]', $uinfo_all->edu_timeStart, ['class'=>'form-control j-date', 'placeholder'=>'入学年份']) }}
                        {{ Form::text('edu_time2[end]', $uinfo_all->edu_timeEnd, ['class'=>'form-control j-date', 'placeholder'=>'结业年份']) }}
                    </div>
                </div>
            </div>
            <!--我的学历-->
            <div class="form-group">
                <label for="input1" class="col-xs-3 control-label">我的学历：</label>
                <div class="col-xs-4">
                    {{ Form::select('edu_education',Config::get('member::account.edu'),null,['class'=>'form-control select2']) }}
                </div>
            </div>
            <!--隐私设置-->
            <div class="form-group">
                <label for="input1" class="col-xs-3 control-label">隐私设置：</label>
                <div class="col-xs-4">
                    {{ Form::select('edu_education', Config::get('member::account.privacy'),null,['class'=>'form-control select2']) }}
                </div>
            </div>
            <!--保存-->
            <div class="form-group">
                <div class="col-xs-2 col-xs-offset-3">
                    {{ Form::submit('保存', ['class'=>'form-control btn btn-info']) }}
                </div>
            </div>
        {{ Form::close() }}
        </div>
      </div>
      <!--工作经历-->
      <div role="tabpanel" class="tab-pane" id="workExp">
            <div class="mv60">
                {{ Form::model($uinfo_all, ['route'=>'member.account.update', 'class'=>'form-horizontal base', 'id'=>'form4']) }}
            <!--公司机构-->
            <div class="form-group">
                <label for="input1" class="col-xs-3 control-label">公司机构：</label>
                <div class="col-xs-4">
                    {{ Form::text('company_name',null,['class'=>'form-control','placeholder'=>'公司机构'] ) }}
                </div>
            </div>
            <!--部门-->
            <div class="form-group">
                <label for="input1" class="col-xs-3 control-label">部门：</label>
                <div class="col-xs-4">
                    {{ Form::text('company_department',null,['class'=>'form-control','placeholder'=>'部门'] ) }}
                </div>
            </div>
            <!--工作时间-->
            <div class="form-group">
                <label for="input1" class="col-xs-3 control-label">工作时间：</label>
                <div class="col-xs-4">
                    <div class="input-prepend input-group">
                        <span class="add-on input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        {{ Form::text('company_time2[start]', $uinfo_all->company_timeStart, ['class'=>'form-control j-date', 'placeholder'=>'起始年份']) }}
                        {{ Form::text('company_time2[end]', $uinfo_all->company_timeEnd, ['class'=>'form-control j-date', 'placeholder'=>'结束年份']) }}
                    </div>
                </div>
            </div>
            <!--职位-->
            <div class="form-group">
                <label for="input1" class="col-xs-3 control-label">职位：</label>
                <div class="col-xs-4">
                    {{ Form::text('company_position',null,['class'=>'form-control','placeholder'=>'职位'] ) }}
                </div>
            </div>
            <!--隐私设置-->
            <div class="form-group">
                <label for="input1" class="col-xs-3 control-label">隐私设置：</label>
                <div class="col col-xs-4">
                {{ Form::select('company_privacy',Config::get('member::account.privacy'),null,['class'=>'form-control','placeholder'=>'职位']) }}
                </div>
            </div>
            <!--保存-->
            <div class="form-group">
                <div class="col-xs-2 col-xs-offset-3">
                    {{ Form::submit('保存',['class'=>'form-control btn btn-info']) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
      </div>
    </div>
</div>
@stop

@section('script')
{{ HTML::script('static/js/jquery/select2/select2.full.min.js') }}
{{ HTML::script('static/js/jquery/datepicker/js/bootstrap-datetimepicker.js') }}
{{ HTML::script('static/js/jquery/datepicker/js/locales/bootstrap-datetimepicker.zh-CN.js') }}
{{ HTML::script('static/js/jquery/charts/easypiechart/jquery.easy-pie-chart.js') }}
{{ HTML::script('static/js/jquery/datepicker/js/bootstrap-datetimepicker.js') }}
{{ HTML::script('static/js/jquery/validate/jquery.validate.min.js') }}
{{ HTML::script('static/js/libs/city.js') }}
{{ HTML::script('modules/member/js/form-validate.js') }}
<script>
    $(function(){
        //城市选择
        city_selector();
        //爱好填写
        $(".j-tags").select2({
            //tags: ['red', 'blue', 'green']
            tags:"true"
        });
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

	    $('.number').easyPieChart({ animate: 2000,barColor:'#2da9b8',lineWidth:'5',scaleColor:'none' });
    });
</script>
@stop