
//内容切换及收起、展开效果
$(document).ready(function(){


//登录、注册弹出框切换效果
	$("a.login,a.login-change").click(function(){
			$(".register-box").css("display","none");
			$(".login-box").css("display","block");
		});
	$("a.register,a.register-change").click(function(){
			$(".login-box").css("display","none");
			$(".register-box").css("display","block");
		});

//点击获取验证码时的提示
	$(".register-box .authcode-btn").click(function(){
		$(".register-box .hint").css("display","block");
	});
	$(".register-box .authcode-input").click(function(){
		$(".register-box .hint").css("display","none");
	});

});
