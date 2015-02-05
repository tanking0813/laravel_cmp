/**
 * 用户中心应用层
 */

//首页动态切换
 $(function () {
    $('#myTab a:first').tab('show');
    
//导航滑动
//topBar下拉
	$(".slidedown").hover(function(){
		$(this).find(".quickS").css({
			display:'block'
		})
	},function(){
		$(this).find(".quickS").css({
			display:'none'
		})
	})
//导航下拉列表
    $('.navBar li').hover(function(){
		$(this).find('.subNav').slideDown('fast');
	},function(){
		$(this).find('.subNav').hide();
	})
    
//账户信息显示    
	$('.info').hover(function(){
		$(".info .acountShow").slideDown('fast');
	},function(){
		$(".info .acountShow").hide();
	})
	
//买家卖家入口
	if($("#buySaler").length){
		$("#buySaler").slide({effect:"top",easing:"easeOutElastic"});
	}
	
	
//评论框插入
    $('.coment').click(function(){
    	 var str='<form action=\"\" class=\"comment mt15 ml15 row\">';
    		str+='<textarea name=\"\" rows=\"6\" cols=\"\">#评论你的话题#</textarea>';
    		str+='<a href=\"\" class=\"btn orangeBg pull-right mr30 mt10\">提交</a>';
    		str+='</form>';
    		str1=$(str);
    		if(str1){
    			str1.appendTo($(this).parents("li"));
				$(this).parents(".list").find('.commentZone').show();
				}
    });
    
//注册导航切换
 $('#regTab a:first').tab('show'); 



//daterange
/*$('input[name="daterange"]').daterangepicker(); 
*/
var datePicker = $(".my-date");
        if(datePicker.length){
            datePicker.datetimepicker({
                language:  'zh-CN',
                format: "yyyy-mm-dd",
                weekStart: 1,
                todayBtn:  1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
            });
        }
//select2初始化
//$(".select2").select2();

//我是买家、卖家左侧栏收起
$(".toggle").click(function(){
	//alert("a");
	$(this).parent().siblings("li").toggle();
});
//tab切换
$(".tabHead>li").click(function(){
	var inx = $(this).index();
	$(this).addClass("active").siblings("li").removeClass("active");
	//alert(inx);
	$(".tabContent>li").eq(inx).show().siblings("li").hide();
});
//tab1切换（与tab0样式不同）
$(".tabHead1>li").click(function(){
	var inx = $(this).index();
	$(this).addClass("active").siblings().removeClass("active");
	//alert(inx);
	$(".tabContent>li").eq(inx).show().siblings("li").hide();
});

//tab1切换下的切换
$(".subTabHead>li").click(function(){
	var inx = $(this).index();
	$(this).addClass("active").siblings().removeClass("active");
	//alert(inx);
	$(".subTabContent>li").eq(inx).show().siblings().hide();
})



//如果是选择国内，后面的disabled
$("#which").click(function(){ 
	if($('#which option:selected').text()=="国内"){
		$("#way").attr("disabled","disabled");
		$("#country").attr("disabled","disabled");
	}else{
		$("#way").attr("disabled",false);
		$("#country").attr("disabled",false);
	}

});
	
//商标分类选择  

$("#tm_classify").parent().hover(function(){ 
	$(".slideShow").show(); 
},function(){
	$(".slideShow").hide(); 
})

$(".slideShow a").click(function(){
	var thisVal=$(this).html(); 
	alert(thisVal);
	$("#tm_classify").val(thisVal);
	$(".slideShow").hide();
});

  
//出售方式1
  $(".sell_way>label input").click(function(){
  	var label_index = $(this).parent().index();
  	//alert(label_index);
  	if($(this).prop("checked")){
  		//alert(label_index);
  		$(".tipShow").show();
  		$(".tipShow li").eq(label_index).slideDown();
  	}else{  
  		if($(".sell_way>label input").prop("checked").length==0){
  			alert("a");
  		}
  		$(".tipShow li").eq(label_index).slideUp(); 
  	}
  });
   //出售方式2
  $(".sell_way1>label input").click(function(){
  	var label_index = $(this).parent().index();
  	//alert(label_index);
  	if($(this).prop("checked")){
  		//alert(label_index);
  		$(".tipShow1").show();
  		$(".tipShow1 li").eq(label_index).slideDown();
  	}else{  
  		if($(".sell_way1>label input").prop("checked").length==0){
  			alert("a");
  		}
  		$(".tipShow1 li").eq(label_index).slideUp(); 
  	}
  });
  
 //出售方式3
  $(".sell_way3>label input").click(function(){
  	var label_index = $(this).parent().index();
  	//alert(label_index);
  	if($(this).prop("checked")){
  		//alert(label_index);
  		$(".tipShow3").show();
  		$(".tipShow3 li").eq(label_index).slideDown();
  	}else{  
  		if($(".sell_way3>label input").prop("checked").length==0){
  			alert("a");
  		}
  		$(".tipShow3 li").eq(label_index).slideUp(); 
  	}
  });
 //出售方式4
  $(".sell_way4>label input").click(function(){
  	var label_index = $(this).parent().index();
  	//alert(label_index);
  	if($(this).prop("checked")){
  		//alert(label_index);
  		$(".tipShow4").show();
  		$(".tipShow4 li").eq(label_index).slideDown();
  	}else{  
  		if($(".sell_way4>label input").prop("checked").length==0){
  			alert("a");
  		}
  		$(".tipShow4 li").eq(label_index).slideUp(); 
  	}
  });
  //点击面议 输入框disabled
  $(".my").click(function(){
  	if($(this).prop("checked")){
  		//alert("a");
  		$(this).parent().siblings().children("input").attr({disabled:"disabled"});
  	}
  });
  
  //专利所属行业表
  
  var pat_classify=
			 {
		"_0": [
		{ "value":"畜牧业"},
		{ "value":"农业"},
		{ "value":"林业"},
		{ "value":"渔业" },
		{ "value":"食品饮料"},
		{ "value":"其他"}
		],
		"_1": [
		{ "value":"自行车及其配件"},
		{ "value":"汽车及其配件"},
		{ "value":"摩托车及其配件"},
		{ "value":"交通系统" },
		{ "value":"铁路交通"},
		{ "value":"海上交通"},
		{ "value":"航空航天"},
		{ "value":"纸塑包装"},
		{ "value":"管道运输"},
		{ "value":"物流仓储"},
		{ "value":"其他"}
		],
		"_2": [
		{ "value":"水处理"},
		{ "value":"废物废气处理"},
		{ "value":"环境卫生"},
		{ "value":"建材/陶瓷" },
		{ "value":"高分子材料"},
		{ "value":"工业原料"},
		{ "value":"涂染用料"},
		{ "value":"添加剂"},
		{ "value":"化工设备"},
		{ "value":"生物工程"},
		{ "value":"生物分子"}, 
		{ "value":"其他"}
		],
		"_3": [
		{ "value":"天然纺织材料"},
		{ "value":"人造纺织材料"},
		{ "value":"纺织品"},
		{ "value":"造纸" }, 
		{ "value":"其他"}
		],
		"_4": [
		{ "value":"建筑材料加工"},
		{ "value":"建筑施工"},
		{ "value":"矿产能源开采"},
		{ "value":"照明"}, 
		{ "value":"其他"}
		],
		"_5": [
		{ "value":"切削设备"},
		{ "value":"模具加工设备"},
		{ "value":"分离设备"},
		{ "value":"粉碎设备" },
		{ "value":"检测设备"},
		{ "value":"零部件"},
		{ "value":"铸造及电焊"},
		{ "value":"五金工具"},
		{ "value":"印刷排版"},
		{ "value":"其他"}
		],
		"_6": [
		{ "value":"服装鞋帽"},
		{ "value":"洗漱用品"},
		{ "value":"家具/装饰"},
		{ "value":"办公用品" },
		{ "value":"家电"},
		{ "value":"其他"}
		],
		"_7": [
		{ "value":"通信设施"},
		{ "value":"通信系统"},
		{ "value":"电子元件"},
		{ "value":"电路设计及制造" },
		{ "value":"电脑及其配件"},
		{ "value":"手机及其配件"},
		{ "value":"其他数码产品"}, 
		{ "value":"其他"}
		],
		"_8": [
		{ "value":"医疗器械"},
		{ "value":"保健器械"},
		{ "value":"保健品"},
		{ "value":"生物工程" },
		{ "value":"中药"},
		{ "value":"西药"},
		{ "value":"人造假体"},
		{ "value":"消毒洁净用品"},
		{ "value":"化妆护肤"},
		{ "value":"整形美容"},
		{ "value":"其他"}
		],
		"_9": [
		{ "value":"核技术"},
		{ "value":"电力工程"},
		{ "value":"风能、太阳能"},
		{ "value":"新能源" },
		{ "value":"动力设备"},
		{ "value":"供热设备"},
		{ "value":"干燥设备"},
		{ "value":"蒸馏设备"}, 
		{ "value":"其他"}
		],
		"_10": [
		{ "value":"其他"}
		]
		}

   var pat_c = eval(pat_classify);
//专利主要分类选择
   $("#main_c").parent().hover(function(){
   	$(".slideShow2").show();
   },function(){
   	$(".slideShow2").hide();
   });
   //点击
	$(".slideShow2 li a").click(function(){
		$("#sub_c").val("");
		var _text = $(this).html();
		var indx = $(this).parent().index();
		var name1 ="_"+indx;    
  		$(".slideShow3 li").remove();
		for(var i=0;i<pat_c[name1].length;i++){
			var lis = pat_c[name1][i].value; 
			var temp = "<li><a href='javascript:;'>"+lis+"</a></li>";  
		 $(".slideShow3").append(temp);
		}  
		$("#main_c").val(_text);
		$(".slideShow2").hide();
	
	});
	//点击小分类，将值传递给input 
//专利小分类选择 
   $("#sub_c").parent().hover(function(){
   	$(".slideShow3").show();
   	 $(".slideShow3 li").click(function(){ 
		//alert("a");
	 	var txt = $(this).children("a").html();
	 	$("#sub_c").val(txt);
	 	$(".slideShow3").hide(); 
	 })
   },function(){
   	$(".slideShow3").hide();
   });
   
   $(".icon-remove").click(function(){
   		$(this).parents("tr").remove();
   });
   
   //tooltip
   $(".tip0").tooltip();
   
   //table的最后一列左对齐
  $(".table-condensed th:last-child").css({"text-align":"left"});
    $(".table-condensed td:last-child").css({"text-align":"left"});

 });
//域名类型列表显示
$("#domain_type").click(function(){
	$(".domain_list").toggle();
});

$(".domain_list .foriegn label").click(function(){ 
		var oldV = $("#domain_type").val();
		//console.log(oldV);
		if($(this).children("input").prop("checked")==true){
			var txt =oldV+" "+$.trim($(this).text());
			$("#domain_type").val(txt);
		}/*else{
			var strs= new Array();
			var newV = "";
			strs=oldV.split(" "); //字符分割
			//oldV='';
			for (i=0;i<strs.length ;i++ ) 
			{ 
				if( strs[i] === $.trim($(this).text()) ){
					strs.splice(i,1);
				}
				newV += strs[i];
			}
			$("#domain_type").val(txt);
		}*/
})
$(".domain_list .zw label").click(function(){ 
		var oldV = $("#domain_type").val();
		if($(this).children("input").prop("checked")==true){
		var txt =oldV+" "+$.trim($(this).text());
		$("#domain_type").val(txt);   
	} 
});
/*//域名字符数
$("#domain_chars").parent().hover(function(){
	$(".selectBox").show();
	$(".selectBox label").click(function(){
		if($(this).children("input").prop("checked")==true){
			$("#domain_chars").val($.trim($(this).text()));
			$(".selectBox").hide();
		}
	})
},function(){
	$(".selectBox").hide();
});
*/
