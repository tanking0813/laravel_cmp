@extends('layouts.auth')

@section('content')
<div class="content container whiteBg">
	<div class="regBox row">

		<div class="tab-content mt30">

			<div role="tabpanel" class="tab-pane active" id="personReg">
			    @if($email)
                    <h3>账户申请成功，点击{{ link_to($email, '激活', ['target'=>'_blank']) }}即可完成注册喔!{{ link_to($email, '去激活', ['target'=>'_blank']) }}</h3>
			    @else
			        <h3>账户申请成功，请前往邮箱进行账户激活！</h3>
			    @endif
			</div>
		</div>
	</div>
 <!--提醒弹框-->
</div>
@stop