
//查询结果标签切换效果
jQuery(".quick-stat,.sRc-list-detail,.pt-apply,.history-contrast").slide({delayTime:0 ,trigger:"click"});

//专利申请手风琴效果（与商标分类引用的同一个js）
	jQuery(".cly-content").slide({
		titCell:"h4", //鼠标触发对象
		targetCell:".cly-detail", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
	    effect:"fold", //targetCell下拉效果
		delayTime:300 , //效果时间
		triggerTime:150, //鼠标延迟触发时间（默认150）
		trigger:"click",
		defaultPlay:true,//默认是否执行效果（默认true）
		returnDefault:false //鼠标从.sideMen移走后返回默认状态（默认false）
		});

// 领证通知消息滚动效果
	jQuery(".a-col-notice").slide({mainCell:".a-col-bd ul",autoPage:true,effect:"top",autoPlay:true,vis:1});

// 自定义动态效果
$(document).ready(function(){
	// 点击切换cn、fn标题及内容
	$(".heading span").click(function(){
		if($(".fn").css("display")=="none",$(".fn-list").css("display")=="none"){
			$(this).siblings(".fn").css("display","block");
			$(this).siblings(".cn").css("display","none");
			$(".fn-list").css("display","block");
			$(".cn-list").css("display","none");
		}else{
			$(this).siblings(".fn").css("display","none");
			$(this).siblings(".cn").css("display","block");
			$(".fn-list").css("display","none");
			$(".cn-list").css("display","block");
		}
	});
	
	//多选框相关
	$(".checkbox-gather li span,.qs-details li span").addClass("active");
	$(".checkbox-gather li,.qs-details li").click(function(){
		if($(this).children("span").hasClass("active")){
			$(this).children("span").removeClass("active");
		}else{
			$(this).children("span").addClass("active");
		}
	});
	$(".checkbox-gather li.all,.qs-details li.all").click(function(){
		if($(this).children("span").hasClass("active")){
			$(this).siblings().children("span").addClass("active");  
		}else{  
			$(this).siblings().children("span").removeClass("active");
		}
	});

	//单选框相关
	$("#applyHonor ul").children("li:last-child").children("span").addClass("active");
	$(".select-radio li,.pta-info li").click(function(){
		$(this).children("span").addClass("active");
		$(this).siblings().children("span").removeClass("active");
	});

	// 快捷统计操作下拉效果
	$(".quick-stat .qs-name li").click(function(){
		$(".qs-details").css({"display":"block"});
		$(this).addClass("focus");
		$(this).siblings().removeClass("focus");
	});

	//筛选的下拉菜单选中效果
	$(".filtrate .dropdown-menu").each(function(){
		var firstLi=$(this).children("li:first").text();
		$(this).children("li:first").children("span").addClass("active");
		$(this).siblings(".dropdown-toggle").children(".listDetail").html(firstLi);
	})
	$(".filtrate .dropdown-menu li").click(function(){
		var tick=$(this).children("span");
			listDetail=$(this).text();
		if(tick.hasClass("active")){
			tick.removeClass("active");
		}else{ 
			tick.addClass("active");
			$(this).siblings().children("span").removeClass("active");
		}
		$(this).parents("ul").siblings(".dropdown-toggle").children(".listDetail").html(listDetail);
	});
	
	// 对比页面中表格
	$(".pt-liebiao span.contrast").parents("td").css({"position":"relative","padding-left":"15px"});
	$(".pt-apply .a-service .cly-content").children("h4:first").css({"border-top":"none"});
	
	// 列表视图下拉效果
	$(".ptl-content").eq(0).addClass("visible");
	$(".ptl-title").eq(0).find("a").addClass("active");
	$(".pt-pullDown .ptl-title").click(function(){
		$(this).find("a").addClass("active");
		$(this).siblings().find("a").removeClass("active");
		var odd=$(this).next(".ptl-content");
		odd.toggleClass("visible");
		odd.siblings().removeClass("visible");
	});

	// 专利申请提交成功提示弹出框
	$("button.tjsq-btn").click(function(){
		$(".pt-tijiao-box").addClass("pttj-box");
	});
	$(".pt-tijiao-box .close").click(function(){
		$(".pt-tijiao-box").removeClass("pttj-box");
	});

	// 对比页面表格样式
	$(".pt-contrast tbody tr").children("td:first-child").addClass("ptc-i-list");
	$(".pt-contrast tbody").children("tr:first-child").addClass("ptc-tr-first");
	$(".ptDetail .a-lh-box tr").children("td:last-child").css({"text-align":"left"});

	$(".pt-contrast th span").click(function(){
		var indx=$(this).parent().index();
		$(".pt-contrast tr").each(function(){
			if($(this).children().length<=2){
				alert('不能删除最后一条记录！');
				return false;
			}else{
			$(this).children(":eq("+indx+")").remove(); 
			}
		})
		});

	// Locarno分类检索
	$(".lc-detail").eq(0).css({"display":"block"});
	$("h4.lc-title").click(function(){
		$(this).next().toggleClass("lc-matter");
		// $(this).next().siblings("div").css({"display":"none"})
	});

	// IPC分类检索
	$(".IPC-content div i").addClass("turnoff");
	$(".IPC-content").click(function(){ 
		var tar = event.target; //获取事件对象
		$(tar).children("div").toggleClass("show");
		  $(tar).css({"padding-left":"20px"})
	});
	
function toggleShow(){
		$(this).children("div").toggleClass("show"); 
	}
// $(".IPC-content div").attr("onClick","toggleShow()");
	

	// 高级检索相关效果
	$(".high-search-title h4.cn").addClass("on");
	$(".high-search-title h4.cn").click(function(){
		$(this).addClass("on");
		$(".high-search-title h4.fn").removeClass("on");
		$(".cn-list,.cn-peculiar").css({"display":"block"});
		$(".fn-list,.fn-peculiar").css({"display":"none"});
	});
	$(".high-search-title h4.fn").click(function(){
		$(this).addClass("on");
		$(".high-search-title h4.cn").removeClass("on");
		$(".fn-list,.fn-peculiar").css({"display":"block"});
		$(".cn-list,.cn-peculiar").css({"display":"none"});
	});

	// 高级检索提示框弹出效果
	$("input").click(function(){
		$(this).parents(".high-search-detail").find(".hint-box").css({"display":"none"}); 
		$(this).siblings(".hint-box").css({"display":"block"});
	});
	$("input").blur(function(){
		$(".hint-box").css({display:"none"});
	})

	// 高级检索字段效果
	$("li.esiB-field").click(function(){
		$(".field-content").css({"display":"block"});
	});
	$(".field-content .close-icon").click(function(){
		$(".field-content").css({"display":"none"});
	});

	// 图表弹出框
	$(".again-btn").click(function(){
		$(".schart-mix-box").css({"display":"none"});
		$(".filtrate-item-box").css({"display":"block"});
	});
	$(".again-analyze-btn").click(function(){
		$(".schart-mix-box").css({"display":"block"});
		$(".filtrate-item-box").css({"display":"none"});
	});
})
