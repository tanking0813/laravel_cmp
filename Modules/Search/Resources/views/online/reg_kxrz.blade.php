@extends('search::online.layouts.blank')

@section('alert')
<!-- 消息提示 -->
	<div id="cwWarn-Modal" class="createDomain-box cwWarn-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">消息提示</h4>
				</div>
				<div class="modal-body">
					<div class="add-info-form">
						<p>您好，是否确认以此信息注册通用网址?</p>
						<div class="btn-group">
							<button type="reset" class="btn">返回</button>
							<button type="submit" class="btn">确定</button>
						</div>
					</div>
					<div class="accept-box" style="display:none;">
						<p>请您阅读并勾选“服务条款”</p>
						<div class="btn-group">
							<button type="submit" class="btn">确定</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 消息提示 -->
	<div id="cwWarn-Modal" class="createDomain-box cwWarn-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">消息提示</h4>
				</div>
				<div class="modal-body">
					<div class="add-info-form">
						<p>您好，是否确认以此信息注册通用网址?</p>
						<div class="btn-group">
							<button type="reset" class="btn">返回</button>
							<button type="submit" class="btn">确定</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 服务条款 -->
	<div id="serviceTerms-Modal" class="createDomain-box serviceTerms-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">条款服务</h4>
				</div>
				<div class="modal-body">
					<div class="service-terms-para">
						<p>感谢您选择柚皮网的“可信网站验证”服务在线申请服务。现万网委托阿里云计算有限公司（以下简称“阿里云”）负责经营推广域名服务，请您认真细致地阅读以下的《 “可信网站验证”服务在线注册服务条款》（以下简称“服务条款”）。您只有同意了下述服务条款才能正式进入可信网络服务(“可信网站验证”服务)在线申请程序。如果您愿意接受我们的服务并同意此条款，请点击“我同意”继续进行注册；否则，请退出申请程序。</p>
						<p>“可信网站验证”服务在线申请服务条款</p>
						<P>在以下条款中，“用户”是指通过柚皮网提供的服务，申请“可信网站验证”服务的主体。</P>
						<P>用户同意此《“可信网站验证”服务在线注册服务条款》对用户具有法律约束力。</P>
						<p>第一条  项目和术语解释</p>
						<P>1-1	“可信网站验证”，是由中国互联网络信息中心（CNNIC）提供技术支持，由北龙中网（北京）科技有限责任公司（中网公司）负责实施的第三方网站身份信息权威验证服务。</P>
						<p>第二条  用户的权利和义务</p>
						<P>2-1	用户应为拥有服务器操作权限的域名持有人及域名所对应网站的所有人，否则中网公司有权撤销该”可信网站验证”服务。</P>
						<P>2-2用户接受本在线条款不会违反用户以前签署的其他文件，也不会置万网或阿里云于违约或者违法的境地。</P>
						<P>2-3用户应按照CNNIC和/或中网公司的规定提供真实、完整和准确的信息及相关材料。如用户在万网规定的时间内未提供完整、合格的申请资料，将被视为自动放弃所申请的”可信网站验证”服务；如用户提供虚假的信息，中网公司有权将已签发的”可信网站验证”服务废止。由此给用户或他人造成的损失，均由用户自行承担。“可信网络”验证作废前，用户因使用该“可信网站”验证给他人造成损失的，由用户承担赔偿责任。</P>
						<P>2-4 在可信网站”验证服务有效期内，如用户的域名持有人及企事业信息发生变更的，应在上述信息变更后的三个工作日内向万网提交变更材料，万网及中网公司审核通过后将签发新的“可信网站”验证，新“可信网站”验证服务的有效期与原“可信网站”验证服务有效期相同。</P>
						<P>2-2用户接受本在线条款不会违反用户以前签署的其他文件，也不会置万网或阿里云于违约或者违法的境地。</P>
						<P>2-3用户应按照CNNIC和/或中网公司的规定提供真实、完整和准确的信息及相关材料。如用户在万网规定的时间内未提供完整、合格的申请资料，将被视为自动放弃所申请的”可信网站验证”服务；如用户提供虚假的信息，中网公司有权将已签发的”可信网站验证”服务废止。由此给用户或他人造成的损失，均由用户自行承担。“可信网络”验证作废前，用户因使用该“可信网站”验证给他人造成损失的，由用户承担赔偿责任。</P>
						<P>2-4 在可信网站”验证服务有效期内，如用户的域名持有人及企事业信息发生变更的，应在上述信息变更后的三个工作日内向万网提交变更材料，万网及中网公司审核通过后将签发新的“可信网站”验证，新“可信网站”验证服务的有效期与原“可信网站”验证服务有效期相同。</P>
						<P>2-2用户接受本在线条款不会违反用户以前签署的其他文件，也不会置万网或阿里云于违约或者违法的境地。</P>
						<P>2-3用户应按照CNNIC和/或中网公司的规定提供真实、完整和准确的信息及相关材料。如用户在万网规定的时间内未提供完整、合格的申请资料，将被视为自动放弃所申请的”可信网站验证”服务；如用户提供虚假的信息，中网公司有权将已签发的”可信网站验证”服务废止。由此给用户或他人造成的损失，均由用户自行承担。“可信网络”验证作废前，用户因使用该“可信网站”验证给他人造成损失的，由用户承担赔偿责任。</P>
						<P>2-4 在可信网站”验证服务有效期内，如用户的域名持有人及企事业信息发生变更的，应在上述信息变更后的三个工作日内向万网提交变更材料，万网及中网公司审核通过后将签发新的“可信网站”验证，新“可信网站”验证服务的有效期与原“可信网站”验证服务有效期相同。</P>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop


@section('content')
<div class="content">
	<div class="container">
		<!-- content d-matter start -->
		<div class="d-matter">
			<div class="d-details">
				<!-- 查询结果 -->
				<div class="result-list-box add-info-box">
					<div class="special-title">可信认证</div>
					<div class="common-website appro-info-box">
						<!-- 提示文字 -->
						<div class="hint-info-word">
							<div class="i-title">填写信息</div>
							<p>请填写真实有效的购买信息，以便于您办理业务，柚皮网承诺不向第三方提供信息</p>
							<p>提示：带“<span style="color: #F80808;">*</span>”的栏目必须填写</p>
						</div>
						<!-- 域名信息 -->
						<div class="domain-info-form">
							<div class="i-title">请填写信息</div>
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="price" class="col-xs-2 control-label">价格：<span>*</span></label>
									<p class="form-control-static web-price">1500元/1年</p>
								</div>
								<div class="form-group">
									<label for="webName" class="col-xs-2 control-label">站点名称：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<input type="text" class="form-control" id="webName" placeholder="">
									</div>
									<p class="hint-word col-xs-10">（站点名称可以由中文、字母(A-Z，a-z，大小写等价)、数字(0-9)或符号(-,!)组成，最多不超过31个字符；站点名称和申请网站所指向的URL要有相关性）</p>
								</div>
								<div class="form-group">
									<label for="webDomain" class="col-xs-2 control-label">站点域名：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<input type="text" class="form-control" id="webDomain" placeholder="">
									</div>
									<p class="hint-word col-xs-10">（最多三个域名，中间用"；"分隔，三个域名要指向同一网页。域名如快到期了，请先办理域名续费。业务购  买后域名可以变更，也可以再增加域名（需另收费）。</p>
								</div>
								<div class="form-group">
									<label for="dataType" class="col-xs-2 control-label">申请资料类型：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<div class="dropdown-toggle personal" data-toggle="dropdown" id="applyType"><span class="info-input-type">企业营业执照</span><span class="icon"><span></span></span></div>
										<ul class="list-unstyled dropdown-menu mb0 ptType dataType" role="menu">
											<li>企业营业执照</li>
											<li>2年</li>
											<li>3年</li>
											<li>4年</li>
										</ul>
									</div>
								</div>
								<div class="form-group">
									<label for="comName" class="col-xs-2 control-label">申请单位名称：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<input type="text" class="form-control" id="comName" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="zc-number" class="col-xs-2 control-label">注册号：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<input type="text" class="form-control" id="zc-number" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="address" class="col-xs-2 control-label">选择地区：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<select id="s1">
											<option>省份</option>
										</select>
										<select id="s2">
											<option>地级市</option>
										<select>
										<select id="s3">
											<option>市、县级市、县</option>
										<select>
									</div>
								</div>
								<div class="form-group">
									<label for="personName-cn" class="col-xs-2 control-label">经办人姓名：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<input type="text" class="form-control" id="personName-cn" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="papersType" class="col-xs-2 control-label">经办人证件类型：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<div class="dropdown-toggle personal" data-toggle="dropdown" id="applyType"><span class="info-input-type">身份证</span><span class="icon"><span></span></span></div>
										<ul class="list-unstyled dropdown-menu mb0 ptType dataType" role="menu">
											<li>身份证</li>
											<li>2年</li>
											<li>3年</li>
										</ul>
									</div>
								</div>
								<div class="form-group">
									<label for="ID-code" class="col-xs-2 control-label">经办人证件号码：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<input type="text" class="form-control" id="ID-code" placeholder="">
									</div>
								</div>
								<div class="form-group special-item">
									<label for="tel" class="col-xs-2 control-label">经办人联系电话：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<input type="text" class="form-control" id="tel" placeholder="" style="width: 50px!important; margin-left: 0;">-
										<input type="text" class="form-control" placeholder="">-
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-4 hint-word">
										<p>格式：029-8888-8888</p>
									</div>
								</div>
								<div class="form-group special-item">
									<label for="fax" class="col-xs-2 control-label">经办人联系传真：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<input type="text" class="form-control" id="fax" placeholder="" style="width: 50px!important; margin-left: 0;">-
										<input type="text" class="form-control" placeholder="">-
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-4 hint-word">
										<p>格式：029-8888-8888</p>
									</div>
								</div>
								<div class="form-group">
									<label for="telephone" class="col-xs-2 control-label">经办人手机号码：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<input type="email" class="form-control" id="telephone" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-xs-2 control-label">经办人电子邮箱：<span>*</span></label>
									<div class="col-xs-3 pa0">
										<input type="email" class="form-control" id="email" placeholder="">
									</div>
								</div>
							</form>
						</div>
						<div class="c-w-mix">
							<div class="terms-service"><span></span>
								我已阅读，理解并接受【<a href="javascript:;" data-toggle="modal" data-target="#serviceTerms-Modal">通用网址在线注册服务条款</a>】
							</div>
							<div class="btn-group">
								<button type="reset" class="btn">重置</button>
								<button type="submit" class="btn" data-toggle="modal" data-target="#cwWarn-Modal">确定</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
