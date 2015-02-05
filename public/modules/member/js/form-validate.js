 
//表单验证
$(function(){ 
	var form1 = $('#form1');

    if(form1.length) {
        form1.validate({
            rules: {
                nickname: {
                    minlength: 4
                },
                truename: {
                    minlength: 2
                },
                input1: {
                    email: true
                },
                input2: {
                    minlength: 2
                },
                input3: {
                    minlength: 8,
                    number: true
                },
                input4: {
                    minlength: 10
                },
                input5: {
                    minlength: 6,
                    number: true
                },
                input6: {
                    minlength: 10
                }
            },
            highlight: function (element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                //alert("a");
            },
            success: function (element) {
                element.closest('.form-group').removeClass('has-error').addClass('has-success');
                element.detach();
            }
        });
    }
	  //验证提交按钮edu_submit
	   $("#base_submit").click(function() {
			if ($("#form1").valid()) {
				$("#base_submit").submit();
			}
		})
	 
	 //form2
	  $('#form2').validate({ 
	    rules: {
	      name1: {
	        minlength: 2
	      },
	      salary: {
	      	minlength: 4,
	      	number:true
	      },
	      from: {
	        minlength: 6
	      },
	       address: {
	        minlength: 10
	      }
	    },
	    		highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				//alert("a");
			},
			success: function(element) {
				element.closest('.form-group').removeClass('has-error').addClass('has-success');
                element.detach();
			}
	  });
	    $("#personal_submit").click(function() {
			if ($("#form2").valid()) {
				$("#personal_submit").submit();
			}
		})
	   //讲基本资料中的用户名字复制给个人资料
	  $("#name1").val=$("#name").val();
	  
	  //form3
	  $('#form3').validate({ 
	    rules: {
              school_name: {
                minlength: 4
              }
	    },
	    		highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				//alert("a");
			},
			success: function(element) {
				element.closest('.form-group').removeClass('has-error').addClass('has-success');
                element.detach();
			}
	  });
	  //验证提交按钮edu_submit
	   $("#edu_submit").click(function() {
			if ($("#form3").valid()) {
				$("#edu_submit").submit();
			}
		})
	  
	  //账户form4
	   $('#form4').validate({ 
	    rules: {
	      company_name: {
	        minlength: 4
	      }

	    },
	    		highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				//alert("a");
			},
			success: function(element) {
				element.closest('.form-group').removeClass('has-error').addClass('has-success');
                element.detach();
			}
	  });
	  //验证提交按钮job_submit
	   $("#job_submit").click(function() {
			if ($("#form4").valid()) {
				$("#job_submit").submit();
			}
		})
	  //修改密码验证
	   $('#modifyP').validate({ 
	    rules: {
	      oldPass: {
	        minlength: 4,
	        required: true
	      },
	      newPass: {
	      	minlength: 6,
	        required: true   
	      },
	      reNewPass: {
	      	minlength: 6,
	        required: true,
	        equalTo:"#newPass"  
	      }
	    },
	    		highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				//alert("a");
			},
			success: function(element) {
				element
				.closest('.form-group').removeClass('has-error').addClass('has-success');
                element.detach();
			}
	  });
	//验证提交按钮
	$("#modify_submit").click(function(){
    if($("#modifyP").valid()){
     $("#modifyP").submit();
 }
});

//忘记密码表单
$("#forget_pass").validate({
	 rules: {
	      email: {
	        minlength: 4,
	        required: true,
	        email:true
	      },
	      code: {
	        minlength: 4,
	        required: true    
	      },
	      chacode:{
	      	 minlength: 4,
	      	 required: true  
	      }
	   },
	   		highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				//alert("a");
			},
			success: function(element) {
				element.closest('.form-group').removeClass('has-error').addClass('has-success');
                element.detach();
			}
});

//设置新密码
$("#rewite_pass").validate({
	 rules: {
	      password: {
	        minlength: 6,
	        required: true
	      },
	      repass: {
	        minlength: 6,
	        equalTo:"#password",
	        required: true    
	      }
	   },
	   		highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				//alert("a");
			},
			success: function(element) {
				element.closest('.form-group').removeClass('has-error').addClass('has-success');
				element.detach();
			}
});
$(".j-reminder").submit(function(){
    if($("#forget_pass").valid()) {
        $(this).find("input[type='submit']").attr("disabled","disabled");
        var self = $(this);
        $.post(self.attr("action"), self.serialize(), success, "json");
        return false;

        function success(data) {
        	$(this).find("input[type='submit']").attr("disabled","");
            if (data.status) {
                $(".j-email-url").attr('href', data.email_url);
                var usrNm = $(".username").val();
                $(".userAccount").html(usrNm);
                $(".userEmail").html(usrNm);
                $(".step1").hide();
                $(".step2").css({
                    display:"block"
                });
                $(this).parents(".innerContainer").find(".progress1>li").eq(1).addClass("active");
            } else {
                self.find(".check-tips").text(data.msg);
                //刷新验证码
                $(".j-code").click();
            }
        }
    }
});

$("#next2").click(function(){
    if($("#forget_pass").valid()){ 
	//发送验证码提醒******第二步
	$(".tip").css({display:'block'});
	function hideTip(){
		$(".tip").slideUp();
		window.location='repass.html';
	}
	setTimeout(hideTip,2000);
	$(".getCode").click(function(){
		$(this).addClass("disabled");
	})
 }
 })

$(".j-next3").submit(function(){
    if($("#rewite_pass").valid()){
        $(this).find("input[type='submit']").attr("disabled","disabled");
        var self = $(this);
        $.post(self.attr("action"), self.serialize(), success, "json");
        return false;

        function success(data) {
            if (data.status) {
                //修改完成提醒
                $(".step3").hide();
                $(".j-nav").find('li').eq(3).addClass("active");
                $(".step4").show();
            } else {
                self.find(".check-tips").text(data.msg);
            }
        }
 }
 })

//登录验证
$("#logform").validate({
	 rules: {
	      useername: {
	        minlength: 6,
	        required: true,
	        email:true
	      },
	      password: {
	        minlength: 6,
	        required: true    
	      }
	   },
	   		highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				//alert("a");
			},
			success: function(element) {
				element.closest('.form-group').removeClass('has-error').addClass('has-success');
                element.detach();
			}
});

$("#login_submit").click(function(){
    if($("#logform").valid()){ 
        $(this).submit();
    }
 })

/***注册验证*****/
//个人注册
$("#single").validate({
	 rules: {
	      email: {
	        minlength: 6,
	        required: true,
	        email:true
	      },
	      password0: {
	        minlength: 6,
	        required: true    
	      },
         repassword0: {
	        minlength: 6,
	        required: true ,
	        equalTo:"#password0"
	      }
	   },
	   		highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			success: function(element) {
				element.closest('.form-group').removeClass('has-error').addClass('has-success');
                element.detach();
			}
});
$("#group").validate({
	 rules: {
	      username1: {
	        minlength: 6,
	        required: true,
	        email:true
	      },
	      password1: {
	        minlength: 6,
	        required: true    
	      },
         repassword1: {
	        minlength: 6,
	        required: true ,
	        equalTo:"#password1"
	      },
	       group_name: {
	        minlength: 8,
	        required: true
	      }
	   },
	   		highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				//alert("a");
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.form-group').removeClass('has-error').addClass('has-success');
				//alert("a");
			}
});

//发布商标表单
$("#pub_tm").validate({
	rules: {
		title: {
			//minlength: 6,
			required: true
		},
		category_id: {
			//minlength: 6,
			required: true
		},
		register_code: {
			//minlength: 6,
			required: true
		},
		server_list: {
			//minlength: 8,
			required: true
		},
		register:{
			//minlength: 8,
			required: true
		},
		announced_date: {
			//minlength: 6,
			required: true
		},
		product_imgs: {
			required: true
		},
		validity_date:{
			required: true
		},
		trading:{
			required: true
		},
		content:{
			required: true
		},
	},
	highlight: function(element) {
		$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		//alert("a");
	},
	success: function(element) {
		element
			.text('OK!').addClass('valid')
			.closest('.form-group').removeClass('has-error').addClass('has-success');
		//alert("a");
	}
});
$("#tm_submit").click(function() {
	if ($("#pub_tm").valid()) {
		//修改完成提醒  
	}
});

//发布求购商标表单
$("#pur_tm").validate({
	rules: {
		pur_title: {
			//minlength: 6,
			required: true
		},
		category_id: {
			//minlength: 6,
			required: true
		},
		trading: {
			//minlength: 6,
			required: true
		},
		/*pur_price: {
			//minlength: 8,
			required: true
		},*/
		pur_date:{
			//minlength: 8,
			required: true
		},
		buy_name:{
			//minlength: 8,
			required: true
		},

	
	},
	highlight: function(element) {
		$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		//alert("a");
	},
	success: function(element) {
		element
			.text('OK!').addClass('valid')
			.closest('.form-group').removeClass('has-error').addClass('has-success');
		//alert("a");
	}
});
//发布求购专利表单
$("#pur_pat").validate({
	rules: {
		pur_title: {
			//minlength: 6,
			required: true
		},
		type: {
			//minlength: 6,
			required: true	
		},
		category_id: {
			//minlength: 6,
			required: true
		},
		trading: {
			//minlength: 6,
			required: true
		},
		buy_name:{
			//minlength: 8,
			required: true
		},
	
	},
	highlight: function(element) {
		$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		//alert("a");
	},
	success: function(element) {
		element
			.text('OK!').addClass('valid')
			.closest('.form-group').removeClass('has-error').addClass('has-success');
		//alert("a");
	}
});
//发布求购著作权表单
$("#pur_copy").validate({
	rules: {
		pur_title: {
			//minlength: 6,
			required: true
		},
		use_field: {
			//minlength: 6,
			required: true
		},
		use_country: {
			//minlength: 6,
			required: true
		},
		trading: {
			//minlength: 6,
			required: true
		},
		tags: {
			//minlength: 6,
			required: true
		},
		/*pur_price: {
			//minlength: 8,
			required: true
		},*/
		buy_name:{
			//minlength: 8,
			required: true
		},
	
	},
	highlight: function(element) {
		$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		//alert("a");
	},
	success: function(element) {
		element
			.text('OK!').addClass('valid')
			.closest('.form-group').removeClass('has-error').addClass('has-success');
		//alert("a");
	}
});
//发布求购域名表单
$("#pur_domain").validate({
	rules: {
		domain: {
			//minlength: 6,
			required: true
		},
		domain_type: {
			//minlength: 6,
			required: true
		},
		chars: {
			//minlength: 6,
			required: true
		},
		pur_description: {
			//minlength: 8,
			required: true
		},
		buy_name:{
			//minlength: 8,
			required: true
		},
	
	},
	highlight: function(element) {
		$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		//alert("a");
	},
	success: function(element) {
		element
			.text('OK!').addClass('valid')
			.closest('.form-group').removeClass('has-error').addClass('has-success');
		//alert("a");
	}
});


$("#tm_submit").click(function() {
	if ($("#pub_tm").valid()) {
		//修改完成提醒  
	}
});

$("#reg_submit1").click(function(){
    if($("#single").valid()) {
        var agree = $(this).parents('form').find('input[name=agree]');
        if (agree.prop('checked') == false) {
            alert('请同意柚皮网用户协议！');
            return false;
        }
        this.form.submit();
    }
 })
/*
$("#reg_submit2").click(function(){
    if($("#group").valid()){ 
	//注册完成提醒 
	$(".tip").css({display:'block'})
	function hideTip(){
		$(".tip").slideUp(); 
		window.location.href="login.html";
	}
	setTimeout(hideTip,3000); 
 }
 })*/
})
	