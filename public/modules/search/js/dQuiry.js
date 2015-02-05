
//查询结果标签切换效果
jQuery(".quick-stat,.sRc-list-detail,.pt-apply,.history-contrast").slide({delayTime:0 ,trigger:"click"});

// FAQ手分琴效果
jQuery(".FAQ-lists").slide({
	titCell:"h3", //鼠标触发对象
	targetCell:".parag", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
	effect:"slideDown", //targetCell下拉效果
	delayTime:300 , //效果时间
	triggerTime:150, //鼠标延迟触发时间（默认150）
	trigger:"click",
	defaultPlay:true,//默认是否执行效果（默认true）
	returnDefault:false //鼠标从.sideMen移走后返回默认状态（默认false）
	});


$(document).ready(function(){
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


// 相似度
// $(document).ready(function(){
// 	var x = data("10%","20%","30%","40%","50%"),
// 		y = bg("one","two","three","four","five"),
// 		y = x;
// 	if ( $(".star span").val()=="x") {
// 		$(this).parents("li").addClass(y);
// 	};
// })