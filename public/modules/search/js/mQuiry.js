
//查询结果标签切换效果
	jQuery(".tab-change,.searchR-content,.index-tab-change,.mix-tab,.monitor-box").slide({delayTime:0 ,trigger:"click"});

//商标分类中的小分类弹出效果
	jQuery("#dlist-box").slide({ 
		type:"menu", //效果类型
		titCell:".mainCate", // 鼠标触发对象
		targetCell:".subCate", // 效果对象，必须被titCell包含
		delayTime:0, // 效果时间
		triggerTime:0, //鼠标延迟触发时间
		defaultPlay:false,//默认执行
		returnDefault:true//返回默认
	});

//商标分类手风琴效果
	jQuery(".cly-content,.jc-appro-items").slide({
		titCell:"h4", //鼠标触发对象
		targetCell:".cly-detail", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
		effect:"slideDown", //targetCell下拉效果
		delayTime:300 , //效果时间
		triggerTime:150, //鼠标延迟触发时间（默认150）
		trigger:"click",
		defaultPlay:true,//默认是否执行效果（默认true）
		returnDefault:false //鼠标从.sideMen移走后返回默认状态（默认false）
		});
//内容切换及收起、展开效果
$(document).ready(function(){

// 导出表格相关弹出内容
	$("img.excel").mouseover(function(){
		$(".warning").css("display","block");
	});
	$("img.excel").mouseout(function(){
		$(".warning").css("display","none");
	});
	$("img.excel").click(function(){
		if($(".warning-upgrade").css("display")=="none"){
			$("img.excel").mouseover(function(){
				$(".warning").css("display","none");
			});
			$(".warning-upgrade").css("display","block");
			$(".warning").css("display","none");
		}
		else{
			$(".warning-upgrade").css("display","none");
			$("img.excel").mouseover(function(){
				$(".warning").css("display","block");
			});
		}
	});

// 查询结果收缩展开效果
	$(".dragPack").click(function(){
		var self=$(this);
		if(self.attr("src")=="../images/quiry/m-tm-quiry/packUp.png"){
		    self.attr("src","../images/quiry/m-tm-quiry/dragDown.png");
			}
		else{
		    self.attr("src","../images/quiry/m-tm-quiry/packUp.png");
				}
		self.parents(".searchR-title").siblings().slideToggle(700);
								   });
		$(".check img").css("cursor","pointer");

// VIP升级提示
	$(".VIP").click(function(){
		if($(".pp-upVIP").css("display")=="none"){
		$(".pp-upVIP").css("display","block");
		}else{$(".pp-upVIP").css("display","none");}
	});

// 热门行业展开效果
	$(".pp-dragPack").click(function(){
		var self=$(this);
		if(self.attr("src")=="../images/quiry/m-tm-quiry/dragDown1.png"){
		    self.attr("src","../images/quiry/m-tm-quiry/packUp1.png");
			}
		else{
		    self.attr("src","../images/quiry/m-tm-quiry/dragDown1.png");
				}
		self.parents(".pp-title").siblings(".pp-content").slideToggle(700);
								   });
		$(".pp-title img").css("cursor","pointer");

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

//提示会员升级
	$.fn.extend({
			tantan:function(tip){
			$(this).click(function(){
				if(!$("div.VIP_up")){
					alert("a");
				}else{
			var str = '<div class=\"VIP_up\"><p>';
			str += tip;
			str += '</p><a href=\'\'>升级会员</a>';
			str += '<span></span></div>';
			$(this).parent().append(str);
			setTimeout("$(\".VIP_up\").remove()",5000);//过5s后自动隐藏
				}
			});
		}
	});
	$(".quiKey li.word a").tantan("您当前是普通会员，不能生成WORD文档！");
	$(".quiKey li.pdf a").tantan("您当前是普通会员，不能生成PDF文档！");
	$("#zjrecord-box li a").tantan("您当前是普通会员，不能查询最近记录！");
	
//列表及表格相关效果
$(function(){

//历史记录中最后一个li无下划线样式
	$(".his-content ul.h-result-list,.monitor-left .monitor-nav ul").each(function(){
		$(this).children("li:last").css({"border-bottom":"none","border-right":"none","padding-bottom":"0","margin-bottom":"0"});
	});

//控制表格样式
	$("td:even",$(".bDetail-message tr,.jc-i-table tr")).css({
		"font-size":"14px",
		width:"168px"
	}); 
	 $("td:odd",$(".bDetail-message tr")).css({
		width:"156px"
	}); 
	$("td:even",$(".bDetail-message tr:even,.jc-i-table tr")).css({
		background:"#f7f7f7"
	});
	$("td",$(".searchR-content .liebiao tr:even,.jcs-i-list tr:even")).css({
		background:"#f7f7f7",
		"border-top": "solid 1px #ebebeb"
	});
	$("tr:even",$(".jc-iprice-table table")).css({
		background:"#f7f7f7"
	});
	$(".jc-i-dlist tr").children("td:first-child").css({"text-align":"left","padding-left":"10px"});
	$("#jc-indent-Modal tr").children("td:first-child").css({"width":"120px"});
	$(".jc-iprice-table td.title").next().css({"width":"340px","text-align":"left"});
	$(".jc-iprice-table tr,.jc-igprice-table tr").children("td:first-child").css({"text-align":"left"});
	$(".jc-an-right .jc-i-table tr,.jc-al-box .jc-i-table tr").children("td:last-child").css({"max-width":"693px!important"});
	$(".jc-igprice-table tr").children("td:first-child").css({"background":"#f7f7f7"});

	// 对比页面表格样式
	$(".pt-contrast tbody tr").children("td:first-child").addClass("ptc-i-list");
	$(".pt-contrast tbody").children("tr:first-child").addClass("ptc-tr-first");
	$(".ptDetail .a-lh-box tr").children("td:last-child").css({"text-align":"left"});
});


//表单相关
});
$(document).ready(function(){
		var brandSort = {first:[
									{"name":"【0101】- 工业气体，单质"},
						  			{"name":"【0102】- 用于工业、科学、农业、园艺、林业的工业化工原料"},
						  			{"name":"【0103】- 放射性元素及其化学品"},
						  			{"name":"【0104】- 工业气体，单质"},
						  			{"name":"【0105】- 用于工业、科学、农业、园艺、林业的工业化工原料"},
						  			{"name":"【0106】- 放射性元素及其化学品"},
						  			{"name":"【0107】- 工业气体，单质"},
						  			{"name":"【0108】- 用于工业、科学、农业、园艺、林业的工业化工原料"},
						  			{"name":"【0109】- 放射性元素及其化学品"}
					  			],
					  	"第2类":[{name:"【0201】- 工业气体，单质"},
					  			 {name:"【0202】- 用于工业、科学、农业、园艺、林业的工业化工原料"},
					  			 {name:"【0203】- 放射性元素及其化学品"}],
					  	"第3类":[{name:"【0301】- 工业气体，单质"},
					  			 {name:"【0302】- 用于工业、科学、农业、园艺、林业的工业化工原料"},
					  			 {name:"【0303】- 放射性元素及其化学品"}],
					  	"第4类":[{name:"【0401】- 工业气体，单质"},
					  			 {name:"【0402】- 用于工业、科学、农业、园艺、林业的工业化工原料"},
					  			 {name:"【0403】- 放射性元素及其化学品"}]
					  };
		$("#dlist-box li").each(function(){
			for(var i=1;i<46;i++){
				if($(this).index()+1==i){
					if($(this).index()<9){
						i="0"+i;
					}
				$(this).attr("value",i);
				}
			}
		}); 
		//选择时写入上面的选择框内
		 $("#dlist-box input[type='checkbox']").click(function(){
		 	//alert($(this).attr("checked"));
		 	if($(this).prop("checked") ){
		 		var txt = $(this).parent().text();
		 		//alert(txt);
		 		var _index = $(this).parents("li").index()+1;
		 		if(_index<10){
		 			_index = ("0"+_index).toString();
		 		}
		 		//alert(_index);
		 		var insertLi = "<li class='row mh30' data-rel="+_index+"><b>"+txt+" </b><span class='del pull-right icon icon-remove-circle'></span></li>";
		 			$("#detail-box").append(insertLi);
		 		
		 	}else{
		 		//取消选择时删除相对应的项
		 		var txt = $(this).parent().text(); 
		 		//alert(txt);
		 	
		 	}
		 	$(".del").click(function(){
		 		$(this).parent().remove();
		 	})
		 });
		 //热门分类点选
		 $(".hot-sort-box input[type='checkbox']").click(function(){
		 	if($(this).prop("checked") ){
		 		var rel = $(this).parent().attr("rel");
		 		//alert($(this).parent().attr("rel"));
		 		var insertLi = "<li class='row mh30' data-rel="+rel+"><b>第"+rel+"类</b><span class='del pull-right icon icon-remove-circle'></span></li>";
		 		$("#detail-box").append(insertLi);
		 	}
		 });
		 
		 //点击确定，大类中value传给input的value
		 
		 $("#broadHead").click(function(){
		 	var str0 = "";
		 	$("#detail-box li").each(function(){
		 		str0 += $(this).attr("data-rel")+";";
		 		//alert(str0);
		 	})
		 	str0 = str0.substr(0,str0.length-1);
		 	//alert(str0);
		 	$("#classNumber").val(str0);
		 })
		 
		 //小分类选择
		 $("#selectSub").click(function(){
		 	var num = $("#classNumber").val();
		 	alert(num);
		 	var arr = num.split(";"); 
	 		var h2=$("<h2>所选大类："+arr+"</h2>");
		 	
	 		$("#sub-dlistBox h2").remove();
	 		$("#sub-dlistBox h3").remove();
		 		if($("#sub-dlistBox ul li").hasClass(arr[i])){
		 			$(this).each(function(){
	 				$(this).remove();
	 			});
	 			}

				$("#sub-dlistBox").append(h2);
				for(var i=0;i<arr.length;i++){
					$("#sub-dlistBox").append($("<ul class="+arr[i]+"><h3>第"+arr[i]+"类</h3></ul>"));
					//获取json对象属性
					var subObj =eval(brandSort);
					for(var j=0;j<subObj.first.length;j++){
						var aa = subObj.first[j].name;
						var li = $("<li><label><input type=\"checkbox\">"+aa+"</label>");
						$("#sub-dlistBox ul").append(li);
					}
			}
		}) 
		 
	});


// ---------------------------------商标监测相关js效果-------------------------------------------
$(document).ready(function(){

	

	// $(".jc-sp-wdetail").children().css({"display":"none"});
	// $(".set-complete").click(function(){
	// 	$(".jc-stateWarning-box").remove();
	// 	$(".jc-sp-wdetail").css({"display":"block"});
	// });

	// 个人商标监测弹出框
	$(".pl-body li").click(function(){
		$("this").children("span").addClass("active");
	});
	$(".ID-btn").click(function(){
		$(".person-list").css({"display":"block"});
	});
	$(".pl-header .close-btn").click(function(){
		$(".person-list").css({"display":"none"});
	});
	
	// 单选框
	$("#search-type").children("li:first-child").children("span").addClass("active");
	$("#search-type li,.pl-body li").click(function(){
		$(this).children("span").addClass("active");
		$(this).siblings().children("span").removeClass("active");
		$(".person-list").css({"display":"none"});
	});
	// 点击我的状态统计弹出框中的效果
	$(".pl-body li").click(function(){
		var txt = $(this).children("mark").text();
		$("p.replace-content").css({"display":"none"});
		$("div.replace-content").css({"display":"block"});
		$("div.replace-content p").html(txt);
	});
	$(".ensure-btn").click(function(){
		$(".mystate-box").css({"display":"none"});
		$(".mystate-box-reset").css({"display":"block"});
	});
	$(".replace-btn").click(function(){
		$(".mystate-box,p.replace-content").css({"display":"block"});
		$(".mystate-box-reset,div.replace-content").css({"display":"none"});
		$(".pl-body li").children("span").removeClass("active");
	});

	//下拉菜单选择赋值
	$(".mate-box li").click(function(){
		var value=$(this).text();
		$(".dropdown-toggle span").html(value);
	}); 

	// 创建状态/近似监测页面中不同步骤的显示效果
	$(".state-ui ul").children("li").eq(0).addClass("on");
	if($(".state-a-table1 tbody:has(tr)").length!=0){
		$(".state-ui ul").children("li").eq(1).addClass("on");
	}
	if($(".state-a-table2 tbody:has(tr)").length!=0){
		$(".state-ui ul").children("li").eq(2).addClass("on");
	}
//状态提醒弹出框
	$(".sendReminders-box .btn").click(function(){
		$(".sendReminders-box").css({"display":"none"});
		$(".completeSet-box").css({"display":"block"});
	});
	$(".jc-stateWarning-box .modal-header .close").click(function(){
		$(".sendReminders-box").css({"display":"block"});
		$(".completeSet-box").css({"display":"none"});
	});

//重新设置按钮隐藏
	$(".jc-sp-wdetail .btn-group").hide();
	// 点击完成设置
	$(".set-complete").click(function(){
		 $(".jc-sp-wdparag ul li").remove();
		 $(".jc-sp-wdetail .btn-group").show();
		 $(".completeSet-box").css({"display":"none"});
		 $(".sendReminders-box").css({"display":"block"});
		$(".all-list-items li").each(function(){
			if($(this).children("span").hasClass("active")){
				var txt = $.trim($(this).text());
				$(".jc-sp-wdparag ul").append("<li><span class=\"icon icon-remove\"></span>"+txt+"</li>");
				$(".jc-sp-wdparag li span").click(function(){
					$(this).parents("li").remove();
				});
			}
		})

	})

	//多选框相关
	$(".jc-sp-wlists li").click(function(){
		if($(this).children("span").hasClass("active")){
			$(this).children("span").removeClass("active");
		}else{
			$(this).children("span").addClass("active");
			var old_txt = $(this).text();

			//alert(old_txt);
		}
	});
	$(".jc-sp-wlists li.all,.jc-i-select .check-all").click(function(){
		if($(this).children("span").hasClass("active")){
			$(this).siblings().find("span").addClass("active");  
		}else{  
			$(this).siblings().find("span").removeClass("active");
		}
	});

	// 内容多时的展开收缩效果
	$(".more-btn").click(function(){
		$(".all-list-items").toggleClass("all-list-items1");
		if($(this).parents(".all-title").siblings("div").hasClass("all-list-items1")){
			$(this).children("i").addClass("icon-chevron-up");
			$(this).children("i").removeClass("icon-chevron-down");
		}else{
			$(this).children("i").addClass("icon-chevron-down");
			$(this).children("i").removeClass("icon-chevron-up");
		}
	});

	// 我的商标近似监测
	$(".jcs-an-list td a.tab-text").click(function(){
		var prev=$(this).parents("td").prev().children("a");
		if(prev.css("display")=="inline-block"){ 
			prev.css({"display":"none"});
			$(this).html("设为被监测");
		}else{
			prev.css({"display":"inline-block"});
			$(this).html("不再监测");
		}
	});

	$(".delete-special1").click(function(){
		var txt=$(this).parents("tr").children("td").eq(0).text();
		alert("确定删除系统自动给您添加的体验申请人："+ txt +"吗？");
	});
	$(".delete-special2").click(function(){
		var txt=$(this).parents("tr").children("td").eq(0).text();
		alert(txt +"不是系统自动给您添加的体验申请人，不能被删除！");
	});

	// $("a.delete").click(function(){
	// 	$(this).parents("tr").remove();
	// });
	//创建状态/近似监测页中的查询结果“查看”效果
	$.fn.extend({
		tBox:function(){
			$(this).hover(function(){
				var str ='<div class=\"rNumber\">';
				str += '<div class=\"rN-title\">注册号</div><ul class=\"list-inline\">';
				str += '<li>10278706</li><li>10278706</li><li>10278706</li><li>10278706</li><li>10278706</li><li>10278706</li><li>10278706</li><li>10278706</li><li>10278706</li><li>10278706</li><li>10278706</li>';
				str += '</ul></div>';
				$(this).parent().append(str);
			},function(){
				$(this).siblings(".rNumber").remove();
			});
		}
	});
	$(".state-a-table1").find("a").tBox();
})