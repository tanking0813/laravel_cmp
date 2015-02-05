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
                <form role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon message-img"></div>
                            <input class="form-control" type="email" placeholder="邮箱/手机">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon password-img"></div>
                            <input class="form-control" type="password" placeholder="密码">
                        </div>
                    </div>
                    <div class="checkbox row">
                        <label class="col-xs-5 control-label">
                          <input type="checkbox">自动登录
                        </label>
                        <div class="col-xs-4 col-xs-offset-3">
                            <a href="">忘记密码?</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-login">立即登录</button>
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
                <form role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon message-img"></div>
                            <input class="form-control" type="email" placeholder="邮箱/手机">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon password-img"></div>
                            <input class="form-control" type="password" placeholder="密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon password-img"></div>
                            <input class="form-control" type="password" placeholder="确认密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon authcode-img"></div>
                            <input class="form-control authcode-input" type="text" placeholder="请输入验证码">
                            <button type="button" class="btn authcode-btn pa0">获取验证码</button>
                            <div class="hint row">
                                <p>短信已发送至你的手机/邮箱，请输入其中的验证码。</p>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-login">立即注册</button>
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