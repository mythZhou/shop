<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>用户地址 || shop</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="__PUBLIC__/image/icon/litIcon.ico">
    <link href="__PUBLIC__/css/newUser.css" rel="stylesheet">
    <link href="__PUBLIC__/css/reset.css" rel="stylesheet">
    <script src="__PUBLIC__/js/jquey-1.8.0.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/js/g2.min.js"></script>
</head>

<body>
    
    <!-- /注册页面头部 -->
    <!-- 注册页面主体 -->
    <div class="registerMian">
        <div class="register_box" style="background: #fff">
            <div class="head">
                <h3>用户详细地址</h3>
            </div>
            <div class="body">
                <?php if(is_array($add)): foreach($add as $key=>$b): ?><table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="t">
                                手机号码：
                            </td>
                            <td class="z_index2">
                                <li clstag="h|keycount|2015|09b1"><a target="_blank" ><span></span><?php echo ($b['rno']); ?></a></li>
                                
                               
                            </td>
                        </tr>
                        <tr>
                            <td class="t">
                                用户姓名：
                            </td>
                            <td id="in_password">
                                <li clstag="h|keycount|2015|09b1"><a target="_blank" ><span></span><?php echo ($b['rname']); ?></a></li>
                                </span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="t">
                                用户地址：
                            </td>
                            <td id="in_repassword">
                                <li clstag="h|keycount|2015|09b1"><a target="_blank" ><span></span><?php echo ($b['radd']); ?></a></li>
                                <span style="display: none;" class="warn" id="spn_repassword_ok"></span><span class="cue" style="display: none;" id="spn_repassword_wrong"></span>
                            </td>
                        </tr>
                        <tr style="display: " id="tb_tr_reg_vcode">
                            <td class="t">
                                身份证号：
                            </td>
                            <td>
                                <li clstag="h|keycount|2015|09b1"><a target="_blank" ><span></span><?php echo ($b['rid']); ?></a></li>
                                
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
                </table><?php endforeach; endif; ?>
            </div>
        </div>
    </div>

    <!-- /注册页面主体 -->
    <div id="footer" class="padb10">
        <p class="padt5 textc cor2 lh20">版权所有&nbsp;&copy;&nbsp;黑龙江大学</p>
    </div>

  


</body>

</html>