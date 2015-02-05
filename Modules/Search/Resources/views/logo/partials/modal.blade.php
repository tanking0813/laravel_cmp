<!-- 登录、注册弹出框 -->
<div id="registerLogin-Modal" class="registerLogin-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog row">
        <!-- 登录框 -->
        <div class="modal-content login-box">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">登录</h4>
            </div>
            <div class="modal-body">
               {{ Form::open(['route'=>'auth.dologin', 'id'=>'logform','role'=>'form']) }}
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon message-img"></div>
                            {{ Form::text('username', '',['class'=>'form-control','placeholder'=>'用户名']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon password-img"></div>
                            {{ Form::password('password',['class'=>'form-control','placeholder'=>'密码']) }}
                        </div>
                    </div>
                    <div class="checkbox row">
                        <label class="col-xs-5 control-label">
                        {{ Form::checkbox('remember','',false) }}自动登录
                        </label>
                        <div class="col-xs-4 col-xs-offset-3">
                            <a href="{{ route('auth.forgetpass') }}" class="pull-right">忘记密码</a>
                        </div>
                    </div>
                     {{ Form::button('登 录', ['class'=>'btn btn-login','id'=>'login_submit']) }}
                    <p>还没有账号？立刻<a href="javascript:;" class="register-change">免费注册</a>吧</p>
                </form>
            </div>
        </div>
        <!-- 注册框 -->
        <div class="modal-content register-box">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">注册</h4>
            </div>
            <div class="modal-body">
           {{ Form::open(['route'=>'auth.store','class'=>'','id'=>'single','role'=>'form']) }}
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon message-img"></div>
                             {{ Form::text('email','',['placeholder'=>'邮箱','class'=>'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon password-img"></div>
                                {{ Form::password('password0',['placeholder'=>'密码','class'=>'form-control','id'=>'password0']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon password-img"></div>
                             {{ Form::password('repassword0',['placeholder'=>'确认密码','class'=>'form-control','id'=>'repassword0']) }}
                        </div>
                    </div>
<!--                     <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon authcode-img"></div>
                            <input class="form-control authcode-input" type="text" placeholder="请输入验证码">
                            <button type="button" class="btn authcode-btn pa0">获取验证码</button>
                            <div class="hint row">
                                <p>短信已发送至你的手机/邮箱，请输入其中的验证码。</p>
                                <span></span>
                            </div>
                        </div>
                    </div> -->
                    {{ Form::button('立即注册', ['class'=>'btn btn-login','id'=>'reg_submit1']) }}
                    <p>已有账号？点击这里<a href="javascript:;" class="login-change">立即登录</a>吧</p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- 免责声明 -->
<div id="disclaimer-Modal" class="disclaimer-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog row">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">免责声明</h4>
            </div>
            <div class="modal-body">
                <p>“柚皮网”免费提供商标注册信息查询，根据国际惯例，查询所涉及的商标注册信息仅供参考，无任何法律效力。尽管如此，国家工商行政管理总局商标局仍会尽最大努力向中外公众提供尽可能准确的商标注册信息，并及时更新商标注册数据库信息。如有不准确的商标注册信息，以国家工商行政管理总局商标局编辑出版的《商标公告》为准。因使用本网站商标注册信息而造成后果的，本局不承担任何责任。</p>
                <button type="button" id="agree" aria-hidden="true" data-dismiss="modal" class="btn btn-login pa0">我接受</button>
            </div>
        </div>
    </div>
</div>
<!-- 登录提醒 -->
<div id="loginremind-Modal" class="loginremind-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog row">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">登录提醒</h4>
            </div>
            <div class="modal-body">
                <p>您当前未登录，不能享受专业查询服务！</p>
                <p>柚皮商标查询为您提供专业的查询服务！</p>
                <button type="button" class="btn btn-login" onclick="window.location.href='{{ route('auth.login') }}'">登录</button>
                <button type="button" class="btn btn-login" onclick="window.location.href='{{ route('auth.register') }}'">注册</button>
            </div>
        </div>
    </div>
</div>

<!-- 弹出框 1-->
<div class="modal-box modal fade" id="modalBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog container">
                <div class="modal-content row">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">选择分类</h4>
                    </div>
                    <div class="modal-body">
                        <div class="detail-box" id="detail-box"></div>
                        <div class="hot-sort-box">
                            <h4 class="mb10">热门分类</h4>
                            <form role="form" class="form-inline">
                                <div class="checkbox">
                                    <label rel="33"><input type="checkbox">酒精饮料商标（33类）</label>
                                    <label rel="29"><input type="checkbox">肉食蜜饯商标（29类）</label>
                                    <label rel="05"><input type="checkbox">医用药品商标（05类）</label>
                                    <label rel="30"><input type="checkbox">小食配料商标（30类）</label>
                                    <label rel="09"><input type="checkbox">科学仪器商标（09类）</label>
                                    <label rel="11"><input type="checkbox">家用电器商标（11类）</label>
                                    <label rel="43"><input type="checkbox">餐饮住宿商标（43类）</label>
                                    <label rel="18"><input type="checkbox">皮革皮具商标（18类）</label>
                                    <label rel="03"><input type="checkbox">日化用品商标（03类）</label>
                                </div>
                                <div class="popular-pro">
                                    <div class="pp-title">
                                        <p class="form-control-static ml10">热门行业</p>
                                        <button type="button" class="btn VIP pa0">VIP</button>
                                        <img src="{{ asset('modules/search/images/dragDown1.png') }}" class="pp-dragPack" />
                                    </div>
                                    <div class="pp-upVIP">
                                        <span></span>
                                        <p class="mb0">您当前是普通会员，更多查询请升级为VIP会员!</p><a href="">确定</a>
                                    </div>
                                    <div class="pp-content row">
                                        <p>yyyyyyyyyyyyyyyyyyyyyyyyyyyy</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <form class="form-inline" role="form">
                            <div class="checkbox">
                                <ul id="dlist-box" class="list-unstyled">
                                    @for($i=1; $i<46; $i++)
                                    <li class="mainCate"><label><input type="checkbox">第{{ $i }}类</label></li>
                                    @endfor
                                </ul>
                            </div>
                            <button id="broadHead" type="button" data-dismiss="modal" class="btn btn-ensure">确定</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!--弹出框2-->
    <div class="modal-box modal fade" id="modalBox1" tabindex="-1" role="dialog"aria-hidden="true">
        <div class="modal-dialog container">
            <div class="modal-content row">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">选择小分类</h4>
                </div>
                <div class="modal-body">
                    <div id="sub-dlistBox">

                    </div>
                </div>
            </div>
          </div>
    </div>
</div>