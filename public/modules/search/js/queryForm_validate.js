/**
 * 数据来源处理
 * @param page 当前页码
 * @param sort 排序，default、num、date
 * @returns {Array}
 */
function initData(page, sort, pagenum)
{
    var data = jQuery("body").data('logo-data');
    data_parse = JSON.parse(data);

    //pager
    var data_page = [];
    $.each(data_parse.data, function(index, u){
        if(index >= (page*pagenum - pagenum + 1) && index < (page*pagenum + 1)){
            data_page.push(u);
        }
    });

    //排序
    if(sort !== 'default'){
        if(sort == 'num'){
            data_page.sort(function(x, y){
                return (x.num < y.num) ? 1 : -1
            });
        }else if(sort == 'date'){
            data_page.sort(function(x, y){
                return (x.start_time < y.start_time) ? 1 : -1
            });
        }
    }

    $("#logo-pager").pager({ pagenumber: page, pagecount: Math.ceil(data_parse.count/pagenum), buttonClickCallback: PageClick });
    return data_page;
}

function PageClick(page) {
    var data = jQuery("body").data('logo-data');
    data_parse = JSON.parse(data);

    var pager = $("#logo-pager");
    var role = pager.parent('div').find('.bd .lh:visible').attr('data-role');

    if(role == 'default'){
        do_default_push(page, 'default', 5);
    }else if(role == 'list'){
        do_list_push(page, 'default', 10);
    }else if(role == 'img'){
        do_pic_push(page, 'default', 6);
    }
}

//默认视图
function do_default_push(page, sort, pagenum)
{
    var data = initData(page, sort, pagenum);
    var html = '';
    $.each(data, function(index, each) {
        html += '<li>' +
            '<div class="col-xs-4 brand-img">' +
            '<a href="aa"><img src="' + each['logo'] + '" /></a>' +
            '</div>' +
            '<div class="col-xs-7 col-xs-offset-1 brand-detail">' +
            '<p>商标名称：<mark>' + each['name'] + '</mark><span>注册号：<mark>' + each.num + '</mark></span><button type=\"button\" class="btn pa0">已注册</button></p>' +
            '<p><mark>申请人：' + each.owner + '<span>申请日：' + each.start_time + '</span><span>分类：'+each.ics+'</span></mark></p>' +
            '<p>注册公告期号：963<span>注册日期：' + each.register_time + '</span></p>' +
            '<p>代理公司：' + each.company + '</p>' +
            '<p><a href="m-bDetail.html">详细信息>></a></p>' +
            '</div></li>';
    });
    $('#j-appro').find('#j-default-show').html(html);
}

//列表视图
function do_list_push(page, sort, pagenum)
{
    var data = initData(page, sort, pagenum);
    var html = '';
    $.each(data, function(index, each) {
       html += '<tr>'+
            '<td>'+each.id+'</td>'+
            '<td>'+each.num+'</td>'+
            '<td>'+each.ics+'</td>'+
            '<td>'+each.name+'</td>'+
            '<td><a href="m-bDetail.html">查看</a></td>'+
            '</tr>';
    });
    $('#j-appro').find('#j-list-show').html(html);
}

//图形视图
function do_pic_push(page, sort, pagenum)
{
    var data = initData(page, sort, pagenum);
    var html = '';
    $.each(data, function(index, each) {
        html += '<li>'+
            '<a href="m-bDetail.html" class="txbrand-img"><img src="'+each.logo+'" /></a>'+
            '<div class="txbrand-detail">'+
            '<p>商标名称：<a href="m-bDetail.html">'+each.name+'</a></p>'+
            '<p>注册号：<mark>'+each.num+'</mark></p>'+
            '<p>法律状态：<mark>已注册</mark></p>'+
            '<p>类别：<mark>第'+each.ics+'类</mark></p>'+
            '</div>'+
            '</li>';
    });
    $('#j-appro').find('#j-img-show').html(html);
}


/****************查询表单验证********************/
$(function(){
	//近似查询
	$('#approximate_query').validate({ 
	    rules: {
	      q: {
	        minlength: 2,
	        required: true
	      },
          ics: {
	        minlength: 2,
	        number:true,
	        required: true
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
	  
	  //提交验证
	   $("#a_quary").click(function() {
			if ($("#approximate_query").valid()) {
				$(this).attr({
					"data-toggle":"modal",
					"data-target":"#disclaimer-Modal"
				});
				$("#agree").click(function(){ 
					$(this)
					$("#a_quary").submit();
				});
			}else{
                return false;
            }
		});
		
		
	//状态查询state_query 
		$('#state_query').validate({ 
	    rules: {
	      brandName1: {
	        minlength: 6,
	        number:true,
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
	  //验证提交按钮s_submit
	   $("#s_query").click(function() {
	   //	alert("a");
			if ($("#state_query").valid()) {
				$("#s_query").submit();
			}
		});

    /*
    * 高级查询js验证
    * */
    var validate_config = {
        rules: {
            ics: {required: true}
        },
        messages: {
          ics: {required: '请选择国际分类号'},
            q: {minlength:'请输入2位以上关键字', required: '请输入要查询的内容'}
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function(element) {
            element.closest('.form-group').removeClass('has-error').addClass('has-success');
            element.detach();
        }
    };

    //* validate自定义方法
    jQuery.validator.addMethod("chinese", function(value, element) {
        var chinese = /^[\u4e00-\u9fa5]+$/;
        return this.optional(element) || (chinese.test(value));
    }, "请输入中文");
    jQuery.validator.addMethod("chr", function(value, element) {
        var chrnum = /^([a-zA-Z]+)$/;
        return this.optional(element) || (chr.test(value));
    }, "只能输入字母(字符A-Z, a-z)");

    //国标查询
    var logo_stand = $("#logo-stand");
    if(logo_stand.length){
        validate_config.rules.q = {
            minlength: 2, required: true
        };
        logo_stand.validate(validate_config);
        logo_stand.submit(function(){
            if(logo_stand.valid()) ajax_get(logo_stand);return false;
        });
    }

    //中文查询
    var logo_zhongwen = $("#logo-zhongwen");
    if(logo_zhongwen.length){
        validate_config.rules.q = {
            minlength: 2, required: true, chinese: true
        };
        logo_zhongwen.validate(validate_config);
        logo_zhongwen.submit(function(){
            if(logo_zhongwen.valid()) ajax_get(logo_zhongwen);return false;
        });
    }

    //英文查询
    var logo_yingwen = $("#logo-yingwen");
    if(logo_yingwen.length){
        validate_config.rules.q = {
            minlength: 3, required: true, chr:true
        };
        logo_yingwen.validate(validate_config);
        logo_yingwen.submit(function(){
            if(logo_yingwen.valid()) ajax_get(logo_yingwen);return false;
        });
    }

    //pinyin 查询
    var logo_pinyin = $("#logo-pinyin");
    if(logo_pinyin.length){
        validate_config.rules.q = {
            required: true
        };
        logo_pinyin.validate(validate_config);
        logo_pinyin.submit(function(){
            if(logo_pinyin.valid()) ajax_get(logo_pinyin);return false;
        });
    }

    //chunpinyin 查询
    var logo_chunpinyin = $("#logo-chunpinyin");
    if(logo_chunpinyin.length){
        validate_config.rules.q = {
            required: true, chr:true
        };
        logo_chunpinyin.validate(validate_config);
        logo_chunpinyin.submit(function(){
            if(logo_chunpinyin.valid()) ajax_get(logo_chunpinyin);return false;
        });
    }

    //shuzi 查询
    var logo_shuzi = $("#logo-shuzi");
    if(logo_shuzi.length){
        validate_config.rules.q = {
            number:true, required: true
        };
        logo_shuzi.validate(validate_config);
        logo_shuzi.submit(function(){
            if(logo_shuzi.valid()) ajax_get(logo_shuzi);return false;
        });
    }

    //zitou 查询
    var logo_zitou = $("#logo-zitou");
    if(logo_zitou.length){
        validate_config.rules.q = {
            maxlength: 3, required: true, chr: true
        };
        logo_zitou.validate(validate_config);
        logo_zitou.submit(function(){
            if(logo_zitou.valid()) ajax_get(logo_zitou);return false;
        });
    }

    //tuxing 查询
    var logo_tuxing = $("#logo-tuxing");
    if(logo_tuxing.length){
        validate_config.rules.q = {
            required: true
        };
        logo_tuxing.validate(validate_config);
        logo_tuxing.submit(function(){
            if(logo_tuxing.valid()) ajax_get(logo_tuxing);return false;
        });
    }


    function ajax_get(obj)
    {
        var self = obj;
        $.get(self.attr('action'), self.serialize(), success, "json");

        function success(data){
            if(data.status){
                $('#j-appro').show();
                location.hash="#j-appro";

                jQuery("body").data('logo-data', JSON.stringify(data.data));
                do_default_push(1, 'default', 5);

            }else{
                self.find('.j-errors').html(data.msg);
            }
        }
    }


    $("#j-channel").change(function(){
        var channel = $('#j-channel-show');
        channel.find('.j-default').hide();
        channel.find('.'+$(this).val()).siblings('div').hide();
        channel.find('.'+$(this).val()).show();
    })

});
