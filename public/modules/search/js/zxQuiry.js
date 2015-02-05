
//商标详情切换效果
jQuery(".quick-stat,.sRc-list-detail,.pt-apply,.history-contrast,.bbd-tab-box").slide({delayTime:0 ,trigger:"click"});

// 导航二级菜单
jQuery(".nav-items").slide({ 
	type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
	titCell:".m", //鼠标触发对象
	targetCell:".sub", //titCell里面包含的要显示/消失的对象
	effect:"slideDown", //targetCell下拉效果
	delayTime:300 , //效果时间
	triggerTime:0, //鼠标延迟触发时间（默认150）
	returnDefault:false //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
});

// 荣誉资质滚动效果
jQuery(".zx-o-detail").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});

// 自定义效果
$(document).ready(function(){

// 商标、专利、著作权等样式
$(".brand-business .b-b-detail .bbd-list").children("li:even").css("border-right","dashed 1px #dfe2e4");

// 购物车数量增加
	$(".b-para p.proposer a").click(function(){
		$(this).addClass("active");
		$(this).siblings().removeClass("active");
	});
	$(".shopping-cart,.buy").click(function(){
		if($(".proposer").children("a").hasClass("active")){
			$(".standard-select").css("display","none");
			$(".plus-success").css("display","block");
		}else{
			$(".standard-select").css("display","block");
			$(".plus-success").css("display","none");
		}
	});
var num = $("#number").val("1"); 
	$(".minus").click(function(){
	if(parseInt($("#number").val())==1){
		alert("至少是数量1！");
		return false;
	}else{
		$("#number").val(parseInt($("#number").val())-1);
	}
	})

$(".plus").click(function(){
	var num1 = parseInt($("#number").val());
		$("#number").val(num1+1);
	});

$(".a-ii-para tr").children("td:first-child").css({"width":"150px","text-align":"right"});

// 已有域名信息
$("span.ei-detail").hover(function(){
	$(this).append("<span class=\"edit\" data-toggle=\"modal\" data-target=\"#existDomain-Modal\">编辑</span>");
},function(){
	$(this).children(".edit").remove();
}
);
$(".terms-service span,.appro-s-para li span").addClass("active");
$(".yiyou-admian-info").children("li:first-child").find(".radio-icon").addClass("active");
$("span.radio-icon").click(function(){
	$(this).addClass("active");
	$(this).parents("li").siblings("li").find(".radio-icon").removeClass("active");
});

// 下拉选框相关
$("ul.ptType li").click(function(){
	var txt = $(this).text();
	$(this).parents("ul.ptType").siblings(".dropdown-toggle").children(".info-input-type").html(txt);
});
$("select").parent().css("width","300px");

//*******************************************************************同域名查询的效果相同

// 查询结果详情页表格相关
	$(".cn-message tr").children("td:first-child").css({"width":"130px","text-align":"right"});

	// 更新最新信息相关
	$(".gain-time a").hover(function(){
		$(this).siblings("div").css({"display":"block"});
	},function(){
		$(this).siblings("div").css({"display":"none"});
	});

	// 搜索处的下拉菜单
	$(".com-box").click(function(){
		if($(".hidden-checkbox").hasClass("hidden-mix-ck")){
			$(".hidden-checkbox").removeClass("hidden-mix-ck");
			// $(this).css("display","block");
		}else{
			$(".hidden-checkbox").addClass("hidden-mix-ck");
			$(this).css("display","none");
		}
	});
	// 单选框相关
	$("li.en-radio").children().addClass("active");
	$("li.radio").click(function(){
		$(this).children().addClass("active");
		$(this).siblings(".radio").children().removeClass("active");
		if($("li.en-radio").children().hasClass("active")){
			$(".list-en-items").css("display","block");
			$(".list-cn-items").css("display","none");
		}
		if($("li.cn-radio").children().hasClass("active")){
			$(".list-cn-items").css("display","block");
			$(".list-en-items").css("display","none");
		}
	});
	// 多选框相关
	$("li.all-select,li.check-all").click(function(){
		$(".list-items li").children().addClass("active");
		$(this).children().addClass("active");
		$(this).siblings(".all-cancel,.check-delete").children().removeClass("active");
	});
	$("li.all-cancel,li.check-delete").click(function(){
		$(".list-items li").children().removeClass("active");
		$(this).children().addClass("active");
		$(this).siblings(".all-select,.check-all").children().removeClass("active");
	});
	$(".hidden-checkbox .list-items li,li.register-able").click(function(){
		$(this).children().toggleClass("active");
	});
	// 点击按钮相关
	$(".close-icon").click(function(){
		$(".hidden-checkbox").removeClass("hidden-mix-ck");
		$(".com-box").css("display","block");
	});

	// 查询列表收缩展开
	$(".rl-mix-box .shrink").click(function(){
		$(".list-details").toggleClass("list-details1");
		if($(this).parents(".rl-mix-box").siblings(".list-details").hasClass("list-details1")){
			$(this).children().addClass("icon-double-angle-up");
			$(this).children().removeClass("icon-double-angle-down");
		}else{
			$(this).children().addClass("icon-double-angle-down");
			$(this).children().removeClass("icon-double-angle-up");
		}
	});

})