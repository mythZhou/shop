<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>结算 || 家居饰品商城</title>
    <meta name="description" content="家居饰品商城，开发者：周岩">
    <meta name="keywords" content="家居饰品商城 | 周岩 | 黑龙江大学">
    <link rel="shortcut icon" href="__PUBLIC__/image/icon/litIcon.ico">
    <link href="__PUBLIC__/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/page_orderDetail.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/page.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- 顶部导航 -->
    <input type="hidden" value="<?php echo ($uid); ?>"/>
    <div id="top">
        <div class="car_wrap clear">
                <div class="welcome fl">
                        <span class="cor3"><a class="a-notlogin">欢迎光临，请</a>
                            <input type="hidden" value="<?php echo ($uid); ?>" id="input-uid"/>
                            <a title="会员直接登录" style="color:#FF2832;" target="_self" href="login.html" name="登录"
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
                <img src="__PUBLIC__/image/logo.png" alt="家居饰品商城" title="欢迎进入">
            </a>
        </div>
        <div class="shopCar_tit fl">
            <h1>订单详情</h1>
        </div>
        <div class="order_path order_path_2 ">
        </div>
    </div>
    <div class="car_hr"></div>
    <!-- /logo与进度反馈区域 -->
    <div id="container" style="width: auto;">
        <div id="cart">
           
            <form action="http://cart.jumei.com/cart/pay?from=new" method="post" id="check_pay_form" onsubmit="return false;" autocomplete="off" style="display:inline-block;">
                <input type="hidden" name="formToken" value="Cart_cftk_86091524033019">
                <div class="cart_left" style="*overflow: hidden">
                    <input type="hidden" name="order_id" value="">
                    <input type="hidden" name="web_site" value="sh" id="J_WebSite">
                    <div class="option" id="address_selector">
                        <div class="title">1 填写地址</div>
                        <div class="site_edit site_edit_tip" id="JS_unvalidate_tips" style="display:none;">
                            <div class="tips_tit tips_tit_tip">
                                <p>温馨提示：海外购交易单需要实名验证身份证信息。您的身份验证未通过，需要在付款后前往“<a href="http://www.jumei.com/i/order/list">我的订单</a>”验证身份证信息！</p>
                            </div>
                        </div>
                        <div id="first_add_address_wrap">
                            <div class="site_edit">
                                <div class="tips_tit">温馨提示：收件人请使用和身份证号对应的真实姓名，否则您购买的商品将无法通过海关检查!</div>
                                <div class="clearfix cow_box">
                                    <div class="fl receiver_name_box">
                                        <div class="fl lab_box">
                                            <label>收件人：<span class="tips">*</span></label>
                                        </div>
                                        <div class="fl">
                                            <input type="text" class="input" autocomplete="off" id="JS_receiver_name" placeholder="不能为昵称、x先生、x小姐等" name="receiver_name" maxlength="20" style="width: 190px;">
                                            <a href="javascript:;" class="validate_btn sp_icon" id="JS_validate_btn"></a>
                                        </div>
                                        <div class="fl error_box JS_error_box" style="display:none;"><i class="sp_icon"></i><span class="txt">请填写正确的收货人姓名</span></div>
                                        <div class="through_validate" id="JS_through_validate"></div>
                                    </div>
                                    <div class="fl">
                                        <div class="fl lab_box">
                                            <label>身份证号：<span class="tips">*</span></label>
                                        </div>
                                        <div class="fl">
                                            <input type="text" class="input" id="JS_china_id_number" name="china_id_number" maxlength="20" style="width: 190px;">
                                        </div>
                                        <div class="fl error_box JS_error_box">
                                            <a href="javascript:;" class="sp_icon_pos_tips_box"><i class="sp_icon"></i><span class="txt">为什么要身份证</span>
                        <div class="sp_icon_pos_tips">
                            免税店商品需清关后入境，根据海关要求，需要您填写您的身份证进行个人物品入境申报。<br>
                            因为海关会对您的身份信息进行验证，请确保填写正确，否则商品可能无法正常通关。<br>
                            身份证信息将加密保管，绝不对外泄露。
                            <div class="arrow_up"></div>
                        </div>
                    </a>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="clearfix cow_box">
                                    <div class="fl lab_box">
                                        <label>详细地址：<span class="tips">*</span></label>
                                    </div>
                                    <div class="fl clearfix" style="width: 790px;">
                                        <div class="fl" id="JS_confirm_show_box"></div>
                                        <div class="fl clearfix" style="*width:660px;">
                                            <div class="fl">
                                                <input type="text" class="input" maxlength="100" name="address" id="JS_address" placeholder="请填写详细地址" style="width: 320px;">
                                            </div>
                                            <div class="fl error_box JS_error_box" style="display:none;"><i class="sp_icon"></i><span class="txt">请填写详细地址，不少于3个汉字，不能全部是数字/字母</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix cow_box">
                                    <div class="fl lab_box">
                                        <label>手机号码：<span class="tips">*</span></label>
                                    </div>
                                    <div class="fl">
                                        <input type="text" class="input" id="JS_phone" maxlength="11" name="phone" style="width: 115px;">
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="fl JS_tips" style="color: #999999;margin-left: 10px;"></div>
                                    <div class="fl error_box JS_error_box" style="display:none;"><i class="sp_icon"></i><span class="txt">请填写正确的电话号码，手机号码为11位数字</span></div>
                                </div>
                                <div class="clearfix" style="margin-left: 95px;padding-top: 10px;"><a type="submit" id="JS_new_address_submit_new" class="submit_btn">确定</a></div>
                            </div>
                        </div>
                        <style type="text/css">
                        .editAddressForm {
                            position: relative;
                            background: #fff;
                            display: none;
                        }

                        #cart .cart_left #address_selector .content .option_box {
                            height: 148px;
                        }

                        #cart .cart_left #address_selector .content .address_lbl {
                            height: 116px;
                        }

                        #cart .cart_left #address_selector .content div.selected .address_lbl {
                            background: url(/assets/images/jumei/global/address_bg.png) no-repeat 0px 0;
                            height: 118px;
                        }
                        </style>
                        <div id="default_address_wrap" style="display: none;">
                            <div class="content" id="address_wrap">
                            </div>
                            <div class="address_btns_wrap clearfix">
                                <div class="address_more" style="display:none"><a href="javascript:void(0)" class="stri_open"><span></span>展开收货地址</a></div>
                                <a class="add_address_btn" href="javascript:void(0)">使用新地址</a>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="num_border"></div>
                
                <div class="num_border"></div>
                <div class="cart_left relative" style="*z-index: 5;">
                    <div class="option cart_products">
                        <div class="title">
                            2 商品清单
                        </div>
                        <input type="hidden" name="order_id_retail_global/0/" value="">
                        <div class="cart_products_v2" cart_key="retail_global/0/">
                            <h2><span><b>极速免税仓</b> 发货，24小时内从仓库发出，预计3天内送达 </span>
                                                
                                </h2>
                            <table border="0" cellpadding="1" cellspacing="0" id="cart_products" width="100%">
                                <colgroup>
                                    <col>
                                        <col>
                                            <col class="align_right">
                                                <col class="align_right">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th width="400" class="text_left padd_left">商品</th>
                                        <th width="110">数量</th>
                                        <th width="140">发货地</th>
                                        <th width="140">小计</th>
                                    </tr>
                                    <?php if(is_array($dd)): foreach($dd as $key=>$b): ?><tr id="702001016_ht150602p933681t2" class="cart_item" deal_hash_id="ht150602p933681t2">
                                        <td class="name text_left padd_left">
                                            <div style="width:320px;position: relative;line-height: 21px">
                                                <a  target="_blank" class="name_hover">
                                                      <?php echo ($b['bname']); ?>                                          <span class="item_note"></span>
                                                </a>
                                               
                                            </div>
                                        </td>
                                        <td class="number_box">
                                            <?php echo ($b['cnt']); ?> </td>
                                        <td class="price_box">
                                            <span id="item-buy-price-702001016_ht150602p933681t2"><?php echo ($b['bpsd']); ?></span>
                                        </td>
                                        <td class="count_price_box bold">
                                            ￥<span id="item-buy-total-702001016_ht150602p933681t2"><?php echo ($b['bprice']); ?></span>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                                   
                                    
                                    <tr class="order_amount">
                                        <td colspan="4" style="padding:0;">
                                            <div class="order_amount_container">
                                               
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="orders_total_amount">
                            应付总额：<span class="total_count">¥<span id="cart_total"><?php echo ($Price); ?></span></span>
                        </div>
                        <div class="inv_wrap">
                    <div>
                   
                        <span></span>
                        </div>
                        </span>
                        <div class="inv_info" style="display: block;">
                            
                            <div class="clearfix" style="_position: relative;">
                                <div class="fl">
                                    <div>
                                        
                                    <div class="inv_pro_list">
                                        <ul>
                                                   
                                                                            </ul>
                                    </div>
                                    <div class="inv_mark"></div>
                                </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
   
        <div class="cart_left cart_left_last">
            <div class="option">
                <div class="paytype">
                    <div id="paytype_gateway" class="paytype_gateway_after">
                        <div id="gateway_list" class="gateway_list" style="_height: 1%">
                            
                            <div class="gateway_ul_box">
                                <ul class="gateway_ul">
                                    <div class="title">
                                        3 支付
                                    </div>
                                  
                                   
                                    <li class="gateway_line ul_off">
                                 
                                        <label class="tit" for="">快捷支付</label>
                                        <?php if(is_array($yue)): foreach($yue as $key=>$b): ?><label class="tit gateway_desc" for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>             您的余额：     <?php echo ($b['ubalance']); ?></span></label><?php endforeach; endif; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="sure_payinfo_wrap">
            <div class="confirm_pay_box">
                <div class="confirm_pay clearfix">
                    
                    <div class="confirm_right">
                        <div class="clearfix">
                                <input type="hidden" value="0d9b9deb78d9dd8dd7e07b0405784110" name="token" id="JS_token_data">
                                <input type="hidden" value="from_cart_confirmation" name="from" id="JS_form_data">
                                <a class="btn_pink_big" id="btn-buy">确认交易</a>
                            <div class="price_sum">
                                应付总额：<span class="total_count">¥<span id="cart_total2"><?php echo ($Price); ?></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        
    </div>
    
          

    <!-- 页尾链接和版权信息 -->
    
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
            })
            $(".submit_btn").click(function(){
                var rno=$("#JS_phone").val()
                var rname=$("#JS_receiver_name").val()
                var radd=$("#JS_address").val()
                var rid=$("#JS_china_id_number").val()
                if(rno.length == 0 || rname.length == 0||radd.length==0||rid.length==0){
                	alert("信息不能为空！")
                	return
                }
                $.post("<?php echo U('Index/Index/insertadd');?>",{rno:rno,rname:rname,radd:radd,rid:rid},function(res){
                    if(res.status == 1){
                            //alert('login success!')
                            alert("地址已登记！")
                        }
                        else{
                            alert("地址存在，请进行下一步操作。")
                        }
                })
            })

            $("#btn-buy").click(function(){
                var rno=$("#JS_phone").val()
                var rname=$("#JS_receiver_name").val()
                var radd=$("#JS_address").val()
                var rid=$("#JS_china_id_number").val()
                if(rno.length == 0 || rname.length == 0||radd.length==0||rid.length==0){
                	alert("请补全地址信息！")
                	return
                }
                $.post("<?php echo U('Index/Index/submitbuy');?>",{rno:1},function(res){
                    console.log(res)
                    if(res.status == 1){
                            //alert('login success!')
                            //alert("余额充足")
                            location.href = "<?php echo U('Index/Index/result');?>"
                        }
                        else if(res.status==4){
                            alert("请选购商品")
                        }
                        else if(res.status==3){
                            alert("订单中存在商品库存不足")
                        }
                        else{
                            alert("余额不足,请充值")
                        }
                })
            })
           
        </script>
</body>

</html>