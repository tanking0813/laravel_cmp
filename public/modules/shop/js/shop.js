$(function(){

/******************************市场首页**************************/
/*产品左右轮动效果*/
	if(jQuery(".scrollBox2").length){
		jQuery(".scrollBox2").slide({ 
		titCell:".list li", mainCell:".mar_list1", effect:"leftLoop",vis:3,scroll:1,autoPlay:"true"});
	}
/*右侧用户中心新闻切换效果*/
	if(jQuery(".notice,.d-notice,.d-auc-con").length){
	jQuery(".notice,.d-notice,.d-auc-con").slide({ titCell:".tab-hd li", mainCell:".tab-bd" });
	}
/*信息上下滚动效果*/
	if(jQuery(".txtMarquee-top").length){
	jQuery(".txtMarquee-top").slide({mainCell:".bd1 ul",autoPlay:true,effect:"topMarquee",vis:10,scroll:1,interTime:50,trigger:'click'});
	}
/*首页banner轮播效果 */
	if(jQuery(".slideBox,.slideBox-p,.slideBox-c").length){
	jQuery(".slideBox,.slideBox-p,.slideBox-c").slide({mainCell:".bd ul",autoPlay:true});
	}
/*热销排行榜-换一批 */
	if(jQuery(".j-slide").length){
	jQuery(".j-slide").slide({mainCell:"ul",autoPage:true,effect:"topLoop",scroll:3,vis:3,trigger:"click"});
	}
/*品牌推荐左右轮动效果*/
	if(jQuery(".scrollBox3").length){
	jQuery(".scrollBox3").slide({ 
	titCell:".list li", mainCell:".pintui", effect:"left",vis:1,scroll:1,autoPlay:"true"});
	}


/*************************************商标市场首页********************************/
/*我的订单下拉效果*/
	if(jQuery(".nLi").length){
	jQuery(".nLi").click(function(){
		if($(this).find(".sub").css("display")== 'none'){ 
			$(this).find(".sub").slideDown();
		}else{
			$(this).find(".sub").slideUp();
		}
	});
	}
/*左菜单头部商标热门分类效果*/
	if(jQuery("#nav1,#nav,#nav-c").length){
	jQuery("#nav1,#nav,#nav-c").slide({ 
	type:"menu", //效果类型
	titCell:".mainCate1", // 鼠标触发对象
	targetCell:".subCate1,.subCate-c", // 效果对象，必须被titCell包含
	delayTime:0, // 效果时间
	triggerTime:0, //鼠标延迟触发时间
	defaultPlay:false,//默认执行
	returnDefault:true//返回默认
	});
	}



/*产品左右轮动效果*/
	if(jQuery(".scrollBox").length){
	jQuery(".scrollBox").slide({ 
	titCell:".list li", mainCell:".mar_list", effect:"leftLoop",vis:5,scroll:1,autoPlay:"true"});	
	}
/*信息上下滚动效果*/
	if(jQuery(".txtMarquee-top,.txtMarquee-top1").length){
	jQuery(".txtMarquee-top,.txtMarquee-top1").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:5,scroll:1,interTime:50,trigger:"click"});
	}
/*热门推荐轮播效果*/
	if(jQuery(".fullSlide,.fullSlide1,.fullSlide2").length){
	jQuery(".fullSlide,.fullSlide1,.fullSlide2").slide({ titCell:".hd ul", mainCell:".bd1 ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });
	}
/*今日推荐列表切换效果*/
	if(jQuery(".snBrand").length){
	jQuery(".snBrand").slide({ titCell:"ol li",mainCell:"ul",delayTime:0,triggerTime:0 });
	}


/******************************************一口价商标*************************************/
/*左部-按分类手风琴*/
	if(jQuery(".sideMenu").length){
	jQuery(".sideMenu").slide({
		titCell:"h3", //鼠标触发对象
		targetCell:".pull", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
		effect:"slideDown", //targetCell下拉效果
		delayTime:300 , //效果时间
		triggerTime:150, //鼠标延迟触发时间（默认150）
		defaultPlay:true,//默认是否执行效果（默认true）
		trigger:"click"
	});
	}
/*左部-成功案例无缝滚动*/
	if(jQuery(".ex-ml2,.ex-copy").length){
	jQuery(".ex-ml2,.ex-copy").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:6,interTime:50});
	}
//点击收藏变色
	$('.j-store').on('click', function(){
		$(this).addClass('store');
	});
//点击喜欢变色
	$('.sp1').on('click', function(){
		$(this).addClass('store');
	});
//点击喜欢加1
	$('.j-like').on('click', function(){
		var self = $(this);
		self.addClass('liked');
		setTimeout("$('.j-like').removeClass('liked');", 1000 );
	});


/******************************************人气商标*************************************/
/*产品无缝轮动效果*/
	if(jQuery(".ex-m1").length){
		jQuery(".ex-m1").slide({ 
		titCell:".list li", mainCell:".le-loop,.flo5", effect:"leftLoop",vis:4,scroll:1,autoPlay:"true"});	
		}
	});


/******************************************商标猎头*************************************/
/*栏目切换*/
	var ary = location.href.split("&");
	jQuery(".slideTxtBox,.slideTxtBox1").slide( { effect:ary[1],autoPlay:ary[2],trigger:ary[3],easing:ary[4],delayTime:ary[5],pnLoop:ary[6],trigger:"click" });
	/*内容展开隐藏*/
	if(jQuery(".bro-ud").length){
		jQuery(".bro-ud").slide({
			titCell:"h3", //鼠标触发对象
			targetCell:".j-panel", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
			effect:"slideDown", //targetCell下拉效果
			delayTime:300 , //效果时间
			triggerTime:150, //鼠标延迟触发时间（默认150）
			defaultPlay:true,//默认是否执行效果（默认true）
			trigger:"click"
		});
	}


/******************************************详情页*************************************/
/*商品详情大图轮换*/
	$('.j_toggle').mouseenter(function(){
        var img = $(this).find('img');
        var pic = img.attr('data-middle');
        $('#j_show_img').attr("src",pic);
        $(this).siblings('li').removeClass('on');
        $(this).addClass('on');
	})


/*************************************专利市场首页********************************/
/*信息上下滚动效果*/
	if(jQuery(".txtMarquee-top2,.txtMarquee-top3").length){
	jQuery(".txtMarquee-top2,.txtMarquee-top3").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:4,scroll:1,interTime:50,trigger:"click"});
	}
/*技术推荐排行榜菜单切换*/
jQuery(".slideTxtBox2,.slideTxtBox3,.slideTxtBox-c").slide( { effect:ary[1],autoPlay:ary[2],trigger:ary[3],easing:ary[4],delayTime:ary[5],pnLoop:ary[6],trigger:"click"  });
//点击赞变色
	$('.praise').on('click', function(){
		$(this).addClass('store');
	});
//点击赞加1
	$('.j-zan').on('click', function(){
		var self = $(this);
		self.addClass('zaned');
		setTimeout("$('.j-zan').removeClass('zaned');", 1000 );
	});
/*热门技术菜单切换*/
jQuery(".hot-technology,.mod2").slide({ titCell:".list2 li,.mod2-tit-list li",mainCell:".bd",delayTime:0,triggerTime:0});


/*************************************热门技术-专利********************************/
//点击赞变色
	$('.p-sp1').on('click', function(){
		$(this).addClass('store');
	});
//点击赞加1
	$('.j-zan1').on('click', function(){
		var self = $(this);
		self.addClass('zaned1');
		setTimeout("$('.j-zan1').removeClass('zaned1');", 1000 );
	});
/*热门技术-专利无缝轮播*/
jQuery(".ex-p1").slide({ titCell:".list li", mainCell:".le-loop2", effect:"leftLoop",vis:4,scroll:1,delayTime:1000,easing:"easeOutCirc",autoPlay:true});
//点击收藏变色
	$('.j-store1').on('click', function(){
		$(this).addClass('store');
	});
	
/*************************************我的收藏********************************/
//删除收藏确认
var j_confirm = $('.j-delete-confirm');
if(j_confirm.length){
	j_confirm.click(function(){
		$(this).parent().nextAll('.j-alert').show();
	});
};

/*************************************域名市场********************************/
//点击赞变色
	$('.d-zan').on('click', function(){
		$(this).addClass('store');
	});
	$('.d-zan1').on('click', function(){
		$(this).addClass('store');
	});


/*************************************著作权市场********************************/
/*信息上下滚动效果*/
	if(jQuery(".txtMarquee-top-c").length){
	jQuery(".txtMarquee-top-c").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:3,scroll:1,interTime:50,trigger:'click'});
	}

/*右部-按分类手风琴*/
	if(jQuery(".latest-online").length){
	jQuery(".latest-online").slide({
		titCell:"h3", //鼠标触发对象
		targetCell:".ladown", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
		effect:"slideDown", //targetCell下拉效果
		delayTime:300 , //效果时间
		triggerTime:150, //鼠标延迟触发时间（默认150）
		defaultPlay:true,//默认是否执行效果（默认true）
	});
	}




/******************************如果打开高度大于150px，才让锚链接显示出来**************************/
  $(window).scroll(function(){
  	var scrollTop = $(this).scrollTop(); 
  	//alert(docH);
  	//alert(scrollTop);
  	if(150<scrollTop){
  		
  		$("#scroll_menu").css({display:"block"});
  	}else{
  		$("#scroll_menu").css({display:"none"});
  	}
  });


/******************************如果打开高度大于300px，回到顶部显示出来**************************/
   $(window).scroll(function(){
  	var goTop = $(this).scrollTop(); 
  	//alert(docH);
  	//alert(scrollTop);
  	if(300<goTop){
  		$(".go-top").css({display:"block"});
  	}else{
  		$(".go-top").css({display:"none"});
  	}
  });

