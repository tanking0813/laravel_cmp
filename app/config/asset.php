<?php
//cdn资源服务器
return [

    //是否启用CDN加速
    'cdn'   => false,

    //CDN库
    'remote' => [
        'js'    =>[
            'jquery'    => 'http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js',
            'bootstrap' => 'http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js',
            'select2'   => 'http://apps.bdimg.com/libs/select2/3.4.8/select2.min.js',
            'echart'    => 'http://apps.bdimg.com/libs/echarts/2.0.4/echarts.js',
            'dropzone'  => 'http://apps.bdimg.com/libs/dropzone/3.8.4/dropzone.min.js'
        ],
        'css'   =>[
            'font-awesome'  =>'http://apps.bdimg.com/libs/fontawesome/4.2.0/css/font-awesome.min.css',
            'animate'       =>'http://apps.bdimg.com/libs/animate.css/3.1.0/animate.min.css',
            'bootstrap'     =>'http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.css',
        ]

    ],

    //本地
    'local' => [
        'js'    =>[
            'common'            => 'static/js/common.js',
            'jquery'            => 'static/js/jquery/jquery.min.js',
            'jquery-cookie'     => 'static/js/jquery/jquery.cookie.js',
            'jquery-pager'      => 'static/js/jquery/jquery.pager.js',
            'jquery-ui'         => 'static/js/jquery/jquery-ui-1.10.3.custom.min.js',
            'jquery-ui-1.10.1'  => 'static/js/jquery/jquery-ui-1.10.1.custom.min.js',
            'jquery-validate'   => 'static/js/jquery/validate/jquery.validate.min.js',

            'bootstrap'         => 'static/js/bootstrap/bootstrap.js',
            'superslide'        => 'static/js/jquery/superslide/jquery.SuperSlide.2.1.js',
            'select2'           => 'static/js/jquery/select2/select2.min.js',
            'fullcalendar'      => 'static/js/jquery/fullcalendar/fullcalendar.min.js',
            'datepicker'        => 'static/js/jquery/datepicker/js/bootstrap-datetimpicker.min.js',
            'echart'            => 'static/js/echarts/echarts.js',
            'dropzone'          => 'static/js/dropzone/dropzone.min.js',
        ],
        'css'   =>[
            'base'              => 'static/css/base.css',
            'bootstrap'         => 'static/css/bootstrap.min.css',
            'font-awesome'      => 'static/css/font-awesome.min.css',
            'jquery-ui'         => 'static/css/jquery-ui-1.10.4.custom.min.css',
            'select2'           => 'static/css/select2.min.css',
            'animate'           => 'static/css/animate.css',
            'jquery-chart'      => 'static/css/jquery.easy-pie-chart.css', 
        ]
    ]
];