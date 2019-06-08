<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>购买结果反馈 || shop</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="shortcut icon" href="__PUBLIC__/image/icon/litIcon.ico">
        <link href="__PUBLIC__/css/page.css" rel="stylesheet" type="text/css" />
        <link href="__PUBLIC__/css/reset.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="__PUBLIC__/js/jquey-1.8.0.min.js"></script>
    </head>

    <body>
        <!-- 顶部导航 -->
        <div id="top">
            <div class="car_wrap clear">
                    <div class="welcome fl">
                            <span class="cor3"><a class="a-notlogin">欢迎光临，请</a>
                                <input type="hidden" value="<?php echo ($uid); ?>" id="input-uid"/>
                                <a title="会员直接登录" style="color:#FF2832;" target="_self" href="<?php echo U('Index/Index/login');?>" name="登录"
                                    title="请登录网站" class="a-notlogin">登录</a>
                                <a><?php echo ($uname); ?></a>
                                <a><?php echo ($uid); ?></a>
                                <a title="新用户请先注册" rel="nofollw" target="_self" href="<?php echo U('Index/Index/signup');?>" name="免费注册"
                                    title="免费注册账户" class="a-notlogin">免费注册
                                </a>
                            </span>
                        </div>
                <div class="topRight fr clear">
                    <ul class="leftNav fl">
                        <li>
                            
                        </li>
                        <li class="myOrder">
                          
                        
                        </ul>
                        <ul class="rightNav fr">
                            <li><a title="退出系统" name="退出" href="<?php echo U('Index/Index/quit');?>" class="login_a">退出</a></li>
                        </ul>
                </div>
            </div>
        </div>
        <!-- /顶部导航 -->
        <!-- logo与进度反馈区域 -->
        <div id="logo_line" class="car_wrap clear">
            <div class="logo fl">
                <a href="index.html">
                    <img src="__PUBLIC__/image/logo.png" alt="家居饰品城" title="欢迎进入">
                </a>
            </div>
            <div class="shopCar_tit fl">
                <h1>支付完成</h1>
            </div>
            <div class="order_path order_path_3 ">
            </div>
        </div>
        <div class="car_hr"></div>
        <!-- /logo与进度反馈区域 -->
        <!-- 购买结果反馈 -->
        <div class="backInfo car_wrap">
            <p class="info">您已经付款成功，我们会及时安排工作人员确认订单，以便快速给您发货! <a href="index.html"> 返回首页，再看看&gt;&gt;</a></p>
        </div>
        <div id="footer" class="clear">
            
            <p class="padt10 textc cor2 lh20">版权所有&nbsp;&copy;&nbsp;黑龙江大学
            </p>
        </div>

        <script>
                $(document).ready(function(){
                    var uid = $("#input-uid").val()
                    $(".login_a").hide()
                    console.log(uid.length)
                    if(uid.length > 0){
                        console.log("in")
                        $(".a-notlogin").hide()
                        $(".login_a").show()
                    }
                })
            </script>
    </body>

</html>