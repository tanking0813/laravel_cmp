
require.config({
		paths: {
			echarts: '../../../static/js/echarts'
		}
	}); 

// 按需加载 
require(
	[
		'echarts',
		'echarts/chart/line',
		'echarts/chart/bar'
	],
	function(ec) { 

//我商标监测统计
option = {
    title : {
        text: '',
        subtext: ''
    },
   
    tooltip : {
        trigger: 'axis'
    }, 
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: true},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : ['全部','已注册','待审中','续展期','宽展期','无效','异议','驳回','初步审定','异议复审','驳回复审','撤销三年']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'我商标状态统计',
            type:'bar',
            data:[11, 5, 9, 4, 14, 6, 7, 8, 3, 10, 6, 12],
            itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                        ];
                        return colorList[params.dataIndex]
                    },
                    label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                }
            }
          
        }
    ]
};

//我手动添加状态统计
option2 = {
    title : {
        text: '',
        subtext: ''
    },
   
    tooltip : {
        trigger: 'axis'
    }, 
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: true},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : ['全部','已注册','待审中','续展期','宽展期','无效','异议','驳回','初步审定','异议复审','驳回复审','撤销三年']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'我商标状态统计',
            type:'bar',
            data:[13, 1, 10, 6, 3, 6, 0, 15, 3, 2, 6, 9],
            itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                        ];
                        return colorList[params.dataIndex]
                    },
                    label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                }
            }
          
        }
    ]
};

//我近似商标统计
option3 = {
    title : {
        text: '',
        subtext: ''
    },
   
    tooltip : {
        trigger: 'axis'
    }, 
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: true},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : ['1426期','1427期','1428期','1429期','1430期','1431期','1432期','1433期','1434期','1435期','1436期','1437期']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'我商标状态统计',
            type:'bar',
            data:[1, 2, 3, 4, 5, 6, 8, 10, 12, 14, 14, 5],
            itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                        ];
                        return colorList[params.dataIndex]
                    },
                    label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                }
            }
          
        }
    ]
};

//我手动添加近似统计
option4 = {
    title : {
        text: '',
        subtext: ''
    },
   
    tooltip : {
        trigger: 'axis'
    }, 
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: true},
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : ['1426期','1427期','1428期','1429期','1430期','1431期','1432期','1433期','1434期','1435期','1436期','1437期']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'我商标状态统计',
            type:'bar',
            data:[2, 7, 4, 9, 13, 4, 6, 8, 2, 12, 14, 5],
            itemStyle: {
                normal: {
                    color: function(params) {
                        // build a color map as your need.
                        var colorList = [
                          '#C1232B','#B5C334','#FCCE10','#E87C25','#27727B',
                           '#FE8463','#9BCA63','#FAD860','#F3A43B','#60C0DD',
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'
                        ];
                        return colorList[params.dataIndex]
                    },
                    label: {
                        show: true,
                        position: 'top',
                        formatter: '{c}'
                    }
                }
            }
          
        }
    ]
}; 
		
		// 基于准备好的dom，初始化echarts图表
		var myChart = ec.init(document.getElementById('my_tmState'));
		var myChart2 = ec.init(document.getElementById('my_tmState_handle'));
		var myChart3 = ec.init(document.getElementById('my_tmState_similar'));
		var myChart4 = ec.init(document.getElementById('my_tmState_similar_handle')); 
                    
		// 为echarts对象加载数据 
		myChart.setOption(option);
		myChart2.setOption(option2);
		myChart3.setOption(option3);
		myChart4.setOption(option4); 

	}
);