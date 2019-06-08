<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>登录 || shop</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="shortcut icon" href="__PUBLIC__/image/icon/litIcon.ico">
        <link href="__PUBLIC__/css/page.css" rel="stylesheet" type="text/css" />
        <link href="__PUBLIC__/css/reset.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="__PUBLIC__/js/jquey-1.8.0.min.js"></script>
    </head>

    <body>
        <div class="unLoginWrap">
            <div class="register_wrap">
                <div class="register_content register_content2 clear">
                    <div class="register_operate" id="__ddnav_menu">
                        <p id="nickname">欢迎光临，请
                            <a name="ddnav_login" href="login.html" target="_self" class="login_link">登录</a>
                            <a name="ddnav_register" href="<?php echo U('Index/Index/signup');?>" target="_self" class="login_link">免费注册</a>
                        </p>
                    </div>
                    <div class="register_logo">
                        <a href="index.html" title="返回首页" name="ddnav_logo">
                            
                        </a>
                    </div>
                    <div class="banner clear">
                        <div class="bannerHeader fr sprite"></div>
                    </div>
                </div>
           
            </div>
            <div id="login" class="clear">
               
                <div class="loginFace fr">
                <div class="loginHeader clear">
                    <h2>登录</h2>
                 
                </div>

                        <div class="loginName">
                            <label for="logname" class="login_name"><span></span></label>
                            <Input type=text id="logname" autofocus autocomplete="off" placeholder="手机号">
                        </div>
                       <!-- <script>
                            $(function () {
                                $(".loginName").click(function  () {
                                    $(this).addClass("focus");
                                })
                            });
                        </script>
                        -->
                        <div class="loginPaw">
                            <label for="password" class="login_paw"><span></span></label>
                            <Input type=password id="password" autocomplete="off" placeholder="密码">
                        </div>
                        <div class="login_links clear">
                            
                          

                            <a class="fr" href="<?php echo U('Index/Index/signup');?>"> <span>免费注册</span></a>
                        </div>
                            <input type="submit" name="g" value="登录" id="btn-login">
            


                    <div class="backcontent ">
                   
                      

                    </div>
                </div>
            </div>
            <div id="footer" class="clear">
                <p class="padt10 textc cor2 lh20">
                
                </p>
                <p class="padt10 textc cor2 lh20">版权所有&nbsp;&copy;&nbsp;黑龙江大学
                </p>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $("#btn-login").click(function(){
                    var logname = $("#logname").val()
                    var logpasswd = $("#password").val()
                    $.post("<?php echo U('Index/Index/insertlogin');?>",{logname:logname,logpasswd:logpasswd},function(res){
                        console.log(res)
                        if(res.status == 1){
                            //alert('login success!')
                            location.href = "<?php echo U('Index/Index/index');?>"
                        }
                        else{
                            alert("login failed!")
                        }
                    })
                })
            })
        </script>
    </body>

</html>