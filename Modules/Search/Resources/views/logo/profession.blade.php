@extends('search::logo.layouts.2columns-right')

@section('content')
    <!-- 近似查询 -->
    <div class="appro-module">
    <h3 class="mt0 mb0">近似查询类型</h3>
    <div class="apr-m-content tab-change">
        <div class="hd" style="border-right:0;">
            <ul class="c-nav-list list-unstyled" role="navigation">
                <li>标局查询</li>
                <li>中文商标</li>
                <li>英文商标</li>
                <li>拼音商标</li>
                <li>单纯拼音</li>
                <li>数字商标</li>
                <li>字头商标</li>
                <li>图形商标</li>
            </ul>
        </div>
        <div class="bd" id="j-tab">
            <div class="lh">
                {{ Form::open(['name'=>'myform', 'class'=>'form-inline','id'=>'logo-stand', 'method'=>'get']) }}
                    <div class="form-group">
                        <label for="classNumber">国际分类号：</label>
                        {{ Form::text('ics', null, ['class'=>'form-control j-classNumber']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择分类</button>
                    </div>
                    <div class="form-group">
                        <label for="classNumber">类似群号：</label>
                        {{ Form::text('similar_no', null, ['class'=>'form-control']) }}
                        <button type="button" id="selectSub" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox1">选择群号</button>
                    </div>
                    <div class="form-group">
                        <label for="classNumber">查询方式：</label>
                        {{ Form::select('channel', ['0'=>'请选择查询方式','zhongwen'=>'中文','yingwen'=>'英文','pinyin'=>'拼音','chunpinyin'=>'纯拼音','shuzi'=>'数字','zitou'=>'字头','tuxing'=>'图形'], 0, ['class'=>'form-control','id'=>'j-channel']) }}
                        <p class="form-control-static ml10">有七种查询方式供选择：汉字、拼音、纯拼音、英语、数字、字头、图形。</p>
                    </div>
                    <div class="form-group">
                        <label for="queryType">查询类型：</label>
                        <div class="queryType-box" id="j-channel-show">
                             <span class="j-default">请先选择查询方式</span>
                             @foreach(Config::get('search::logo.advance') as $key=>$channel)
                                 <div class="{{ $key }} none">
                                      @foreach($channel as $k=>$v)
                                          <label class="checkbox-inline ml10 mr30" for="inlineCheckbox1">
                                              {{ Form::checkbox('type[]', $k) }} {{ $v }}
                                          </label>
                                      @endforeach
                                 </div>
                             @endforeach

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="queryContent">查询内容：</label>
                        {{ Form::text('q', null, ['class'=>'form-control','id'=>'queryContent']) }}
                    </div>
                    <div class="j-errors"></div>
                    <div class="btn-group">
                        <button type="submit" class="btn" @if(!Sentry::check()) data-toggle="modal" data-target="#loginremind-Modal" onclick="return false;" @endif>自动查询</button>
                        <button type="submit" class="btn" @if(!Sentry::check()) data-toggle="modal" data-target="#loginremind-Modal" onclick="return false;" @endif>选择查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                {{ Form::close() }}
            </div>
            <!--zhongwen-->
            <div class="lh">
                {{ Form::open(['route'=>['search.logo.profession', 'zhongwen'], 'id'=>'logo-zhongwen',"class"=>"form-inline" ,'method'=>'get']) }}
                    <div class="form-group">
                        <label for="classNumber">国际分类号：</label>
                        {{ Form::text('ics', null, ['class'=>'form-control j-classNumber']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择分类</button>
                    </div>
                    <div class="form-group">
                        <label for="classNumber">类似群号：</label>
                        {{ Form::text('similar_no', null, ['class'=>'form-control']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox1">选择群号</button>
                    </div>
                    <div class="form-group">
                        <label for="queryType">查询类型：</label>
                        <div class="queryType-box" id="queryType">
                            @foreach(Config::get('search::logo.advance.zhongwen') as $k=>$v)
                                <label class="checkbox-inline ml10 mr30" for="inlineCheckbox1">
                                    {{ Form::checkbox('type[]', $k) }} {{ $v }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="queryContent">查询内容：</label>
                        {{ Form::text('q', null, ['class'=>'form-control']) }}
                        <p class="form-control-static ml10">请输入简体汉字，文字之间不能有空格</p>
                    </div>
                    <div class="j-errors"></div>
                    <div class="btn-group">
                        <button type="button" class="btn" @if(!Sentry::check()) data-toggle="modal" data-target="#loginremind-Modal" @endif>自动查询</button>
                        <button type="submit" class="btn" @if(!Sentry::check()) data-toggle="modal" data-target="#loginremind-Modal" @endif>选择查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                {{ Form::close() }}
            </div>
            <!--yingwen-->
            <div class="lh">
                {{ Form::open(['route'=>['search.logo.profession', 'yingwen'],'id'=>'logo-yingwen', "class"=>"form-inline" ,'method'=>'get']) }}
                    <div class="form-group">
                        <label for="classNumber">国际分类号：</label>
                        {{ Form::text('ics', null, ['class'=>'form-control j-classNumber']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择分类</button>
                    </div>
                    <div class="form-group">
                        <label for="classNumber">类似群号：</label>
                        {{ Form::text('similar_no', null, ['class'=>'form-control']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择群号</button>
                    </div>
                    <div class="form-group">
                        <label for="queryType">查询类型：</label>
                        <div class="queryType-box" id="queryType">
                            @foreach(Config::get('search::logo.advance.yingwen') as $k=>$v)
                                <label class="checkbox-inline ml10 mr30" for="inlineCheckbox1">
                                   {{ Form::checkbox('type[]', $k) }} {{ $v }}
                               </label>
                           @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="queryContent">查询内容：</label>
                        {{ Form::text('q', null, ['class'=>'form-control']) }}
                        <p class="form-control-static ml10">请输入3个以上的英文字母，3个以下请选择字头查询</p>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">自动查询</button>
                        <button type="submit" class="btn">选择查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                {{ Form::close() }}
            </div>
            <!--pinxin-->
            <div class="lh">
                {{ Form::open(['route'=>['search.logo.profession', 'pinyin'],'id'=>'logo-pinyin', "class"=>"form-inline" ,'method'=>'get']) }}
                    <div class="form-group">
                        <label for="classNumber">国际分类号；</label>
                        {{ Form::text('ics', null, ['class'=>'form-control j-classNumber']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择分类</button>
                    </div>
                    <div class="form-group">
                        <label for="classNumber">类似群号：</label>
                        {{ Form::text('similar_no', null, ['class'=>'form-control']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择群号</button>
                    </div>
                    <div class="form-group">
                        <label for="queryType">查询类型：</label>
                        <div class="queryType-box" id="queryType">
                            @foreach(Config::get('search::logo.advance.pinyin') as $k=>$v)
                                <label class="checkbox-inline ml10 mr30" for="inlineCheckbox1">
                                   {{ Form::checkbox('type[]', $k) }} {{ $v }}
                               </label>
                           @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="queryContent">查询内容：</label>
                        {{ Form::text('q', null, ['class'=>'form-control']) }}
                        <p class="form-control-static ml10">请输入拼音，每个字的拼音之间加空格</p>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">自动查询</button>
                        <button type="submit" class="btn">选择查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                {{ Form::close() }}
            </div>
            <!--chunpinyin-->
            <div class="lh">
                {{ Form::open(['route'=>['search.logo.profession', 'chunpinyin'],'id'=>'logo-chunpinyin', "class"=>"form-inline" ,'method'=>'get']) }}
                    <div class="form-group">
                        <label for="classNumber">国际分类号：</label>
                        {{ Form::text('ics', null, ['class'=>'form-control j-classNumber']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择分类</button>
                    </div>
                    <div class="form-group">
                        <label for="classNumber">类似群号：</label>
                        {{ Form::text('similar_no', null, ['class'=>'form-control']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择群号</button>
                    </div>
                    <div class="form-group">
                        <label for="queryType">查询类型：</label>
                        <div class="queryType-box" id="queryType">
                            @foreach(Config::get('search::logo.advance.chunpinyin') as $k=>$v)
                                <label class="checkbox-inline ml10 mr30" for="inlineCheckbox1">
                                     {{ Form::checkbox('type[]', $k) }} {{ $v }}
                                 </label>
                             @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="queryContent">查询内容：</label>
                        {{ Form::text('q', null, ['class'=>'form-control']) }}
                        <p class="form-control-static ml10">请输入拼音，每个字的拼音之间加空格</p>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">自动查询</button>
                        <button type="submit" class="btn">选择查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                {{ Form::close() }}
            </div>
            <!--shuzi-->
            <div class="lh">
                {{ Form::open(['route'=>['search.logo.profession', 'shuzi'],'id'=>'logo-shuzi', "class"=>"form-inline" ,'method'=>'get']) }}
                    <div class="form-group">
                        <label for="classNumber">国际分类号：</label>
                        {{ Form::text('ics', null, ['class'=>'form-control j-classNumber']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择分类</button>
                    </div>
                    <div class="form-group">
                        <label for="classNumber">类似群号：</label>
                        {{ Form::text('similar_no', null, ['class'=>'form-control']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择群号</button>
                    </div>
                    <div class="form-group">
                        <label for="queryType">查询类型：</label>
                        <div class="queryType-box" id="queryType">
                            @foreach(Config::get('search::logo.advance.shuzi') as $k=>$v)
                                <label class="checkbox-inline ml10 mr30" for="inlineCheckbox1">
                                     {{ Form::checkbox('type[]', $k) }} {{ $v }}
                                 </label>
                             @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="queryContent">查询内容：</label>
                        {{ Form::text('q', null, ['class'=>'form-control']) }}
                        <p class="form-control-static ml10">请输入阿拉伯数字</p>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">自动查询</button>
                        <button type="submit" class="btn">选择查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                {{ Form::close() }}
            </div>
            <!--zitou-->
            <div class="lh">
                {{ Form::open(['route'=>['search.logo.profession', 'zitou'],'id'=>'logo-zitou', "class"=>"form-inline" ,'method'=>'get']) }}
                    <div class="form-group">
                        <label for="classNumber">国际分类号：</label>
                        {{ Form::text('ics', null, ['class'=>'form-control j-classNumber']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择分类</button>
                    </div>
                    <div class="form-group">
                        <label for="classNumber">类似群号：</label>
                        {{ Form::text('similar_no', null, ['class'=>'form-control']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择群号</button>
                    </div>
                    <div class="form-group">
                        <label for="queryType">查询类型：</label>
                        <div class="queryType-box" id="queryType">
                            @foreach(Config::get('search::logo.advance.zitou') as $k=>$v)
                                <label class="checkbox-inline ml10 mr30" for="inlineCheckbox1">
                                     {{ Form::checkbox('type[]', $k) }} {{ $v }}
                                 </label>
                             @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="queryContent">查询内容：</label>
                        {{ Form::text('q', null, ['class'=>'form-control']) }}
                        <p class="form-control-static ml10">请输入1~2个英文字母，3个以上请另选英文查询</p>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">自动查询</button>
                        <button type="submit" class="btn">选择查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                {{ Form::close() }}
            </div>
            <div class="lh">
                {{ Form::open(['route'=>['search.logo.profession', 'tuxing'],'id'=>'logo-zitou', "class"=>"form-inline" ,'method'=>'get']) }}
                    <div class="form-group">
                        <label for="classNumber">国际分类号：</label>
                        {{ Form::text('ics', null, ['class'=>'form-control j-classNumber']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择分类</button>
                    </div>
                    <div class="form-group">
                        <label for="classNumber">类似群号：</label>
                        {{ Form::text('similar_no', null, ['class'=>'form-control']) }}
                        <button type="button" class="btn btn-selSort ml10" data-toggle="modal" data-target="#modalBox">选择群号</button>
                    </div>
                    <div class="form-group">
                        <label for="queryType">查询类型：</label>
                        <div class="queryType-box" id="queryType">
                            @foreach(Config::get('search::logo.advance.tuxing') as $k=>$v)
                                <label class="checkbox-inline ml10 mr30" for="inlineCheckbox1">
                                     {{ Form::checkbox('type[]', $k) }} {{ $v }}
                                 </label>
                             @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="queryContent">查询内容：</label>
                        {{ Form::text('q', null, ['class'=>'form-control']) }}
                        <p class="form-control-static ml10">请输入图形编码</p>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">自动查询</button>
                        <button type="submit" class="btn">选择查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    </div>
    <!-- 近似查询结果 -->
    <div class="search-result none" id="j-appro">
        <div class="searchR-title">
            <h4 class="sR-cleft">查询结果：</h4>
            <div class="sR-cright">
                <div class="btn-box">
                    <button type="button" class="zs-result-btn btn pa0">柚皮查询结果</button>
                    <button type="button" class="bj-result-btn btn pa0">标局查询结果</button>
                </div>
                <p class="sR-record mb0">101项符合查询结果</p>
                <div class="excel-about">
                    <P class="warning-upgrade"><span></span>您当前是普通会员，不能将查询结果导出Excel!<a href="javascript:void(0)">升级会员</a></P>
                    <p class="warning"><span></span>导出到Excel</p>
                    <a href="{{ route("search.logo.export") }}"><img src="{{ asset('modules/search/images/excel.png') }}" class="excel" @if(!Sentry::check()) data-toggle="tooltip" data-placement="top" data-original-title="Tooltip on top" onclick="return false;" @endif /></a>
                </div>
                <div class="check">
                    <img src="{{ asset('modules/search/images/packUp.png') }}" class="dragPack" />
                </div>
            </div>
        </div>
        <div class="dragPack-wrap">
            <!-- 列表内容 -->
            <div class="searchR-content">
                <div class="row">
                    <div class="hd col-xs-8" style="border-right:0;">
                        <ul class="searchR-nav-list list-unstyled" role="navigation">
                            <li class="shitu-icon" onclick="do_default_push(1,'default',5);"><i class="fa fa-search"></i>视图搜索</li>
                            <li class="liebiao-icon" onclick="do_list_push(1,'default',10);"><i class="fa fa-reorder"></i>列表视图</li>
                            <li class="tuxing-icon" onclick="do_pic_push(1,'default',6);"><i class="fa fa-th-large"></i>图形视图</li>
                        </ul>
                    </div>
                </div>
                <div class="bd">
                    <!-- 视图模块 -->
                    <div class="lh" data-role="default">
                        <div class="rank">
                            <ul class="list-unstyled list-inline">
                                <li class="registr-id" onclick="do_default_push(1,'num',5);">注册号排序</li>
                                <li class="date-id" onclick="do_default_push(1,'date',5);">申请日排序</li>
                            </ul>
                        </div>
                        <div class="brandDetail-list">
                            <ul class="list-unstyled shitu" id="j-default-show"></ul>
                        </div>
                    </div>
                    <!-- 列表模块 -->
                    <div class="lh" data-role="list">
                        <div class="rank">
                            <ul class="list-unstyled list-inline">
                                <li class="registr-id" onclick="do_list_push(1,'num',10);">注册号排序</li>
                                <li class="date-id" onclick="do_list_push(1,'date',10);">申请日排序</li>
                            </ul>
                        </div>
                        <table class="liebiao">
                            <thead><tr><th>序号</th><th>注册号/申请号</th><th>类别</th><th>商标</th> <th>操作</th></tr></thead>
                            <tbody id="j-list-show"></tbody>
                        </table>
                    </div>
                    <!-- 图形模块 -->
                    <div class="lh" data-role="img">
                        <div class="rank">
                            <ul class="list-unstyled list-inline">
                                <li class="registr-id" onclick="do_pic_push(1,'num',6);">注册号排序</li>
                                <li class="date-id" onclick="do_pic_push(1,'date',6);">申请日排序</li>
                            </ul>
                        </div>
                        <div class="brandDetail-list">
                            <ul class="list-unstyled tuxing list-inline" id="j-img-show"></ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="paging" id="logo-pager"></div> -->
            <!-- 换页 -->
            <div class="paging">
                <ul class="list-inline list-unstyled paging-list ml0 mb0">
                    <li><a href="javascript:void(0)">首页</a></li>
                    <li><a href="javascript:void(0)">上一页</a></li>
                    <li><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">下一页</a></li>
                    <li class="pform ml10">
                        <span>转到第</span>
                        <input type="text" placeholder="1" class="num-box">
                        <span>页</span>
                        <span class="go">GO</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- 状态查询 -->
    <div class="status-module">
    <h3 class="mt0 mb0">状态查询类型</h3>
    <div class="apr-m-content tab-change">
        <div class="hd">
            <ul class="nav c-nav-list list-unstyled" role="navigation">
                <li>注册号查询</li>
                <li>商标名称查询</li>
                <li>申请人查询</li>
                <li>商标状态查询</li>
            </ul>
        </div>
        <div class="bd">
            <div class="lh">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label for="IDNumber">注册号/申请号：</label>
                        <input type="text" class="form-control" id="IDNumber" placeholder="">
                        <p class="form-control-static ml10">最多可输入10个注册号，用逗号、空格分隔</p>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                </form>
            </div>
            <div class="lh">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label for="brandName">商标名称：</label>
                        <input type="text" class="form-control" id="brandName" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="queryType">匹配方式：</label>
                        <div class="queryType-box" id="queryType">
                            <label class="radio-inline ml10 mr30">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 前包含
                            </label>
                            <label class="radio-inline ml10 mr30">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 精确
                            </label>
                            <label class="radio-inline ml10 mr30">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 后包含
                            </label>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                </form>
            </div>
            <div class="lh">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label for="brandpName">商标人名称：</label>
                        <input type="text" class="form-control" id="brandpName" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="queryType">匹配方式：</label>
                        <div class="queryType-box" id="queryType">
                            <label class="radio-inline ml10 mr30">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 前包含
                            </label>
                            <label class="radio-inline ml10 mr30">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 精确
                            </label>
                            <label class="radio-inline ml10 mr30">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 后包含
                            </label>
                            <label class="radio-inline ml10 mr30">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4"> 包含
                            </label>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                </form>
            </div>
            <div class="lh">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label for="IDNumber">注册号/申请号：</label>
                        <input type="text" class="form-control" id="IDNumber" placeholder="">
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- 状态查询内容 -->
    <div class="search-result none">
    <div class="searchR-title">
        <h4 class="sR-cleft">查询结果：</h4>
        <div class="sR-cright">
            <p class="sR-record mb0">101项符合查询结果</p>
            <div class="excel-about">
                <P class="warning-upgrade"><span></span>您当前是普通会员，不能将查询结果导出Excel!<a href="javascript:void(0)">升级会员</a></P>
                <p class="warning"><span></span>导出到Excel</p>
                <a href="javascript:;"><img src="{{ asset('modules/search/images/excel.png') }}" class="excel" /></a>
            </div>
            <div class="check">
                <img src="{{ asset('modules/search/images/packUp.png') }}" class="dragPack" />
            </div>
        </div>
    </div>
    <div class="dragPack-wrap">
        <!-- 列表内容 -->
        <div class="searchR-content">
            <div class="row">
                <div class="hd col-xs-8" style="border-right:0;">
                    <ul class="searchR-nav-list list-unstyled" role="navigation">
                        <li class="liebiao-icon"><i class="fa fa-reorder"></i>列表视图</li>
                    </ul>
                </div>
            </div>
            <div class="bd">
                <!-- 列表模块 -->
                <div class="lh">
                    <table class="liebiao zx-liebiao">
                        <thead>
                            <tr>
                                <th>序号</th>
                                <th>注册号/申请号</th>
                                <th>类别</th>
                                <th>商标</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>5759792</td>
                                <td>9</td>
                                <td>阿迪达斯</td>
                                <td><a href="{{ asset('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="brand-condition">
                        <div class="bc-title">
                            <p class="mb0">商标注册号/申请号：5074833<span>类别：9</span><span>商标状态详情</span></p>
                        </div>
                        <div class="bc-show">
                            <span class="line"></span>
                            <ul class="list-unstyled">
                                <li>2004-03-26<span>商标注册待审中</span></li>
                                <li>2006-10-07<span>初步审定（1042）</span></li>
                                <li>2007-01-07<span>已注册（1054）</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- 专项查询 -->
    <div class="special-module" id="special-module">
    <h3 class="mt0 mb0">专项查询类型</h3>
    <div class="apr-m-content tab-change">
        <div class="hd">
            <ul class="nav c-nav-list list-unstyled" role="navigation">
                <li>图形匹配查询</li>
                <li>代理机构</li>
                <li>非规范商品</li>
            </ul>
        </div>
        <div class="bd">
            <div class="lh">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label for="IDNumber">注册号/申请号：</label>
                        <input type="text" class="form-control" id="IDNumber" placeholder="">
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                </form>
            </div>
            <div class="lh">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label for="insName">代理机构：</label>
                        <input type="text" class="form-control" id="insName" placeholder="">
                        <p class="form-control-static ml10">请输入全称</p>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                </form>
            </div>
            <div class="lh">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label for="keywords">商品关键字：</label>
                        <input type="text" class="form-control" id="keywords" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="quiryType">查询类型：</label>
                        <div class="queryType-box" id="quiryType">
                            <label class="checkbox-inline ml10 mr30" for="inlineCheckbox2">
                                <input type="checkbox" id="inlineRadio2" value="option2">完全相同
                            </label>
                            <label class="checkbox-inline ml10 mr30" for="inlineCheckbox3">
                                <input type="checkbox" id="inlineRadio3" value="option3">部分相同
                            </label>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn">查询</button>
                        <button type="reset" class="btn">重填</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- 专项查询内容 -->
    <div class="search-result none">
    <div class="searchR-title">
        <h4 class="sR-cleft">查询结果：</h4>
        <div class="sR-cright">
            <p class="sR-record mb0">101项符合查询结果</p>
            <div class="excel-about">
                <P class="warning-upgrade"><span></span>您当前是普通会员，不能将查询结果导出Excel!<a href="javascript:void(0)">升级会员</a></P>
                <p class="warning"><span></span>导出到Excel</p>
                <a href="javascript:;"><img src="{{ asset('modules/search/images/excel.png') }}" class="excel" /></a>
            </div>
            <div class="check">
                <img src="{{ asset('modules/search/images/packUp.png') }}" class="dragPack" />
            </div>
        </div>
    </div>
    <div class="dragPack-wrap">
        <!-- 列表内容 -->
        <div class="searchR-content">
            <div class="row">
                <div class="hd col-xs-8" style="border-right:0;">
                    <ul class="searchR-nav-list list-unstyled" role="navigation">
                        <li class="liebiao-icon"><i class="fa fa-reorder"></i>列表视图</li>
                    </ul>
                </div>
            </div>
            <div class="bd">
                <!-- 列表模块 -->
                <div class="lh">
                    <table class="liebiao zx-liebiao">
                        <thead>
                            <tr>
                                <th>序号</th>
                                <th class="sbname">商标名称</th>
                                <th>群组</th>
                                <th>引证注册号</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>绿茶和运动饮料用儿茶酚(食品用化学品)[非规或旧版]</td>
                                <td>0102</td>
                                <td>5759792</td>
                                <td><a href="{{ asset('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>绿茶和运动饮料用儿茶酚(食品用化学品)[非规或旧版]</td>
                                <td>0102</td>
                                <td>5759792</td>
                                <td><a href="{{ asset('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>绿茶和运动饮料用儿茶酚(食品用化学品)[非规或旧版]</td>
                                <td>0102</td>
                                <td>5759792</td>
                                <td><a href="{{ asset('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>绿茶和运动饮料用儿茶酚(食品用化学品)[非规或旧版]</td>
                                <td>0102</td>
                                <td>5759792</td>
                                <td><a href="{{ asset('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>绿茶和运动饮料用儿茶酚(食品用化学品)[非规或旧版]</td>
                                <td>0102</td>
                                <td>5759792</td>
                                <td><a href="{{ asset('search.logo.logoDetail') }}">查看</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- 换页 -->
    </div>
    </div>
@stop

@section('sidebar')
    <!-- 商标查询说明 -->
    @include('search::logo.partials._block_doc')
    <!-- 商标状态统计 -->
    @include('search::logo.partials._block_state')
    <!-- 查询记录 -->
    @include('search::logo.partials._block_record')
    <!-- 商标知识 -->
    @include('search::logo.partials._block_know')
@stop

@section('script')
   {{ HTML::script('static/js/jquery/jquery.cookie.js') }}
   {{ HTML::script('static/js/jquery/jquery.pager.js') }}
   {{ HTML::script('static/js/jquery/validate/jquery.validate.min.js') }}
   {{ HTML::script('modules/search/js/queryForm_validate.js') }}


   {{--  按需加载 --}}
   {{ HTML::script('modules/search/js/datepicker.js') }}
   {{ HTML::script('modules/search/js/jquery-ui-1.10.1.custom.min.js') }}
@stop