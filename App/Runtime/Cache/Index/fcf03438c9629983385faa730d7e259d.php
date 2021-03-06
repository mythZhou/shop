<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>家居饰品商城 || shop</title>
        <meta name="description" content="家居饰品商城，开发者：周岩">
        <meta name="keywords" content="家居饰品商城 | 周岩 | 黑龙江大学">
        <link rel="shortcut icon" href="__PUBLIC__/image/icon/litIcon.ico">
        <link href="__PUBLIC__/css/reset.css" rel="stylesheet" type="text/css" />
        <link href="__PUBLIC__/css/page.css" rel="stylesheet" type="text/css" />
        <script src="__PUBLIC__/js/jquey-1.8.0.min.js"></script>
        <script type="text/javascript" src="..js/index.js"></script>
    </head>

    <body>
        
        </div>
        <!-- 顶部导航 -->
        <div id="top">
            <div class="wrap clear">
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
                        <li class="myOrder">
                           
                            
                        </li>
                        <li class="myOrder">
                           
                            
                        </li>
                  
                       
                        </ul>
                        <ul class="rightNav fr">
                            
                            <li><a title="退出系统" name="退出" href="<?php echo U('Index/Index/quit');?>" class="login_a">退出</a></li>
                        </ul>
                </div>
            </div>
        </div>
   
        <div id="logo_line" class="wrap clear">
            <div class="logo fl">
                <a href="<?php echo U('Index/Index/index');?>">
                    <img src="__PUBLIC__/image/logo.png" alt="家居饰品商城" title="欢迎进入家居饰品商城">
                </a>
            </div>
            <div class="search fr">
                
                <input type="text" name="searchMess" autocomplete="on" placeholder="输入您想充值的金额" class="text gray" id="input-top">
                <input type="submit" name="g" value="充值" class="button" title="点击我充值吧！" id="btn-top">
               
           
            </div>
          
            <div id="cart_box" class="cart_box fr clear">
                <a id="cart" class="cart_link" rel="nofollow"  href="<?php echo U('Index/Index/lookShoppingCar');?>">
                    <img src="__PUBLIC__/image/icon/cart.gif" width="28" height="28" class="cart_gif">
                    <span class="text">去购物车结算</span>
                    <span class="num" style="display: none;"></span>
                    <s class="icon_arrow_right"></s>
                </a>
                <div class="cart_content" id="cart_content">
                    <i class="cart-icons"></i>
                    
                    
                </div>
            </div>
        </div>
   
        <div id="navbar">
            <div class="wrap clear">
               
               
            </div>
        </div>
      

      
        <div id="footer" class="">
            
            
            <p class="padt10 textc cor2 lh20">版权所有&nbsp;&copy;&nbsp;黑龙江大学
            </p>
            
        </div>
        <!-- /页尾链接和版权信息 -->
        <script src="__PUBLIC__/js/jquery-1.4.2.min.js"></script>
        <script src="__PUBLIC__/js/imgTab.js"></script>

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

                   

                    $("#btn-top").click(function(){
                        $.post("<?php echo U('Index/Index/inserttop');?>",{money:$("#input-top").val()},function(res){
                            if(res.status == 1){
                                    //alert('login success!')
                                    alert("充值成功")
                                }
                                else{
                                    alert("充值失败！")
                                }
                        })
                    })
                })
                
            </script>

    </body>

</html>