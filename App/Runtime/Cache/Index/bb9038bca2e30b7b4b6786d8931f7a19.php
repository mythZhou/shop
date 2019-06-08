<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>添加商品 || shop</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="__PUBLIC__/image/icon/litIcon.ico">
    <link href="__PUBLIC__/css/newUser.css" rel="stylesheet">
    <link href="__PUBLIC__/css/reset.css" rel="stylesheet">
    <script src="__PUBLIC__/js/jquey-1.8.0.min.js" type="text/javascript"></script>
</head>

<body>
    <!-- 注册页面头部 -->
    <div class="register_wrap">
        <div class="register_content register_content2 clear">
            <div class="register_operate" id="__ddnav_menu">
                
            </div>
            <div class="register_logo">
                <a  href="index.html" title="返回首页" name="ddnav_logo">
                   
                </a>
            </div>
            <div class="banner clear">
                <div class="bannerHeader fr sprite"></div>
            </div>

        </div>
       <!--  <div class="registerhead_bottom"></div> -->
    </div>
    <!-- /注册页面头部 -->
    <!-- 注册页面主体 -->
    <div class="registerMian">
        <form>
            <div id="bd">
                <div class="register_box">
                    <div class="head">
                        
                        <p class="coupon_words">
                            
                        </p>
                        <h3> 添加商品</h3>
                    </div>
                    <div class="body">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                                <tr>
                                    <td class="t">
                                        商品名称：
                                    </td>
                                    <td class="z_index2">
                                        <input type="text" value="" tabindex="1" onfocus="check_username_focus()" maxlength="40" autocomplete="off" class="text" name="logname" id="txt_spname" style="border-color: rgb(127, 157, 185);">
                                        
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td class="t">
                                        图片地址：
                                    </td>
                                    <td id="in_tpdzz">
                                        <input type="text" tabindex="2" maxlength="100000" style="display:'';"  onblur="password_check()" onkeyup="txtPassword_strong_check()" onfocus="check_password_focus()" class="text" name="password" id="txt_tpdz">
                                       
                                        </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="t">
                                        商品价格：
                                    </td>
                                    <td id="in_spjgg">
                                        <input type="text" tabindex="3" style="display:'';" onpaste="return false" onkeydown="CheckdoSubmit(event)" onkeyup="repassword_session_check()" onblur="repassword_check()" onfocus="check_repassword_focus()" class="text" name="again_password" id="txt_spjg">
                                        
                                        <span style="display: none;" class="warn" id="spn_repassword_ok"></span><span class="cue" style="display: none;" id="spn_repassword_wrong"></span>
                                    </td>
                                </tr>
                                <tr style="display: " id="kcll">
                                    <td class="t">
                                        库存量：
                                    </td>
                                    <td>
                                        <input type="text"  maxlength="20" autocomplete="off" class="text" name="address" id="kcl"><span class="warn" id="spn_vcode_ok"></span><span style="display: none;" class="cue" id="kclo"></span>
                                        
                                    </td>
                                </tr>
                                <tr style="display: " id="psdd">
                                    <td class="t">
                                        配送地：
                                    </td>
                                    <td>
                                        <input type="text"  maxlength="20" autocomplete="off" class="text" name="address" id="psd"><span class="warn" id="spn_vcode_ok"></span><span style="display: none;" class="cue" id="psod"></span>
                                        
                                    </td>
                                </tr>
                                <tr style="display: " id="gjj">
                                    <td class="t">
                                        国家地区：
                                    </td>
                                    <td>
                                        <input type="text"  maxlength="20" autocomplete="off" class="text" name="address" id="gj"><span class="warn" id="spn_vcode_ok"></span><span style="display: none;" class="cue" id="goj"></span>
                                        
                                    </td>
                                </tr>
                               
                                <tr style="display: " id="cdd">
                                    <td class="t">
                                        产地：
                                    </td>
                                    <td>
                                        <input type="text"  maxlength="20" autocomplete="off" class="text" name="address" id="cd"><span class="warn" id="spn_vcode_ok"></span><span style="display: none;" class="cue" id="cod"></span>
                                        
                                    </td>
                                </tr>
                                <tr style="display: " id="ppp">
                                    <td class="t">
                                        品牌：
                                    </td>
                                    <td>
                                        <input type="text"  maxlength="20" autocomplete="off" class="text" name="address" id="pp"><span class="warn" id="spn_vcode_ok"></span><span style="display: none;" class="cue" id="pop"></span>
                                        
                                    </td>
                                </tr>
                                <tr style="display: " id="jss">
                                    <td class="t">
                                        介绍：
                                    </td>
                                    <td>
                                        <input type="text"  maxlength="20000000" autocomplete="off" class="text" name="address" id="js"><span class="warn" id="spn_vcode_ok"></span><span style="display: none;" class="cue" id="jos"></span>
                                        
                                    </td>
                                </tr>
                              
                                <tr>
                                    <td class="t">
                                        &nbsp;
                                    </td>
                                    <td>
                                        <input tabindex="7"  value="               立刻添加" title="添加" class="btn_login" name="g" id="btn_register" style="font-size:18px;line-height:36px; height:36px;">

                                    </td>
                                </tr>
                                <tr>
                                    <td class="t">
                                        &nbsp;
                                    </td>
                                    <td class="clause">
                                        <span class="float_l">
                                       
                                        <span style="display: none" class="cue" id="spn_agreement_wrong"></span><span style="display: none" class="cue" id="spn_err_msg"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            </script>
            
        </form>
    </div>
    <!-- /注册页面主体 -->
    <div id="footer" class="padb10">
        <p class="padt10 textc cor2 lh20">
           
        </p>
        <p class="padt5 textc cor2 lh20">版权所有&nbsp;&copy;&nbsp;黑龙江大学
        </p>
    </div>
    <script src="__PUBLIC__/js/jquey-1.8.0.min.js" type="text/javascript"></script>
    <!-- <script src="__PUBLIC__/js/register.js" type="text/javascript"></script> -->
    <script src="__PUBLIC__/js/check_browser.js" type="text/javascript"></script>
    <script>

        
        $(document).ready(function(){

            $("#btn_register").click(function(){
                var spname = $("#txt_spname").val()
                var tpdz = $("#txt_tpdz").val()
                var spjg=$("#txt_spjg").val()
                var kcl = $("#kcl").val()
                var psd = $("#psd").val()
                var gj = $("#gj").val()
                var cd = $("#cd").val()
                var pp = $("#pp").val()
                var js = $("#js").val()
                if(spname.length == 0 ){
                	alert("内容不能为空")
                	return
                }
                
                $.post("<?php echo U('Index/Index/addsp');?>",{"spname":spname,"tpdz":tpdz,"spjg":spjg,"kcl":kcl,"psd":psd,"gj":gj,"cd":cd,"pp":pp,"js":js},function(res){
                    console.log(res)
                    if(res.status == 1){
                        alert("成功添加")
                        location.href="<?php echo U('Index/Index/index');?>"
                    }else{
                        alert("添加失败！")
                    }

                })
            })
        })
    
    </script>




</body>

</html>