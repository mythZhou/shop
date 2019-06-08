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
        <link href="__PUBLIC__/css/detailPage.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- 顶部导航 -->
        <input type="hidden" value="<?php echo ($bno); ?>" class="input-bno"/>
        <div id="top">
            <div class="wrap clear">
                    <div class="welcome fl">
                            <span class="cor3"><a class="a-notlogin">欢迎光临，请</a>
                                <input type="hidden" value="<?php echo ($uid); ?>" id="input-uid"/>
                                <input type="hidden" value="<?php echo ($utype); ?>" id="input-utype"/>
                                <input type="hidden" value="<?php echo ($KC); ?>" id="input-kc"/>
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
                        
                        
                        <ul class="rightNav fr">
                            
                            <li><a title="退出系统" name="退出" href="<?php echo U('Index/Index/quit');?>" class="login_a">退出</a></li>
                        </ul>
                </div>
            </div>
        </div>
        <!-- /顶部导航 -->
        <!-- logo与search区域 -->
        <div id="logo_line" class="wrap clear">
            <div class="logo fl">
                <a href="<?php echo U('Index/Index/index');?>">
                    <img src="__PUBLIC__/image/logo.png" alt="家居饰品商城" title="欢迎进入家居饰品商城">
                </a>
            </div>
            <div class="search fr">
              
            </div>
           
            <div id="cart_box" class="cart_box fr clear ccc">
                <a id="cart" class="cart_link" rel="nofollow"  href="<?php echo U('Index/Index/lookshoppingcar');?>">
                    <img src="__PUBLIC__/image/icon/cart.gif" width="28" height="28" class="cart_gif">
                    <span class="text">去购物车结算</span>
                    <span class="num" style="display: none;"></span>
                    <s class="icon_arrow_right"></s>
                </a>
                
            </div>
        </div>
        <!-- /logo与search区域 -->
        <!-- 导航条 -->
        <div id="navbar">
            <div class="wrap clear">
                <h3 class="navindex"><a  title="欢迎购买">家居饰品商城</a></h3>
                <ul>
                    <li class=""><a  title="进入主页" href="<?php echo U('Index/Index/index');?>">主页</a></li>
                    <li class="today">
                        <a class="current" title="浏览商品列表" href="<?php echo U('Index/Index/bypageshow',array('btype'=>'0'));?>">浏览家居
                                <em class="white_arrow"></em>
                            </a>
                        <div id="looktab">
                            <ul class="looktabnav">
                               
                            </ul>
                        </div>
                    </li>
           
                    
                   
                </ul>
                <div class="sales fr"></div>
            </div>
        </div>
        <!-- /导航条 -->
        <!-- 商品内容列表区域上部 -->
        <div id="content" class="wrap clear">
            <div class="userPosition wrap clear">
                
            </div>
            <div class="description clear">
                <div class="dleftArea fl">
                    <div class="topItem">
                        <?php if(is_array($zs)): foreach($zs as $key=>$b): ?><a >
                            <img src="<?php echo ($b['bimg']); ?>" alt="" height="400" width="400">
                        </a><?php endforeach; endif; ?>
                    </div>
                   
                    <div class="social">
                        
                    </div>
                </div>
                <div class="drightArea fl clear">
                    <?php if(is_array($zs)): foreach($zs as $key=>$b): ?><div class="itemInfo fl clear">
                        <div id="name">
                            <h1><?php echo ($b['bname']); ?></h1>
                           
                        </div>
                        <div id="compare">
                            
                        </div>
                        <div id="summary">
                            <div id="comment-count" clstag="shangpin|keycount|product|1|pingjiabtn">
                               
                                <a class="count J-comm-1279804" ><?php echo ($b['bdp']); ?></a>
                            </div>
                            <div id="summary-price">
                                <div class="dt">商 城 价：</div>
                                <div class="dd">
                                    <strong class="p-price" id="jd-price">￥<?php echo ($b['bprice']); ?></strong>
                                    <a data-type="1" data-sku="1279804" id="notice-downp" class="J-notify-1"  clstag="shangpin|keycount|product|1|jiangjia"></a>
                                </div>
                            </div>
                            <div id="J-summary-top" class="summary-top">
                                <div id="summary-promotion" class="hide" style="display: block;">
                                    
                                </div>
                            </div>
                            <div id="summary-stock" class="clear">
                                <div class="dt">配 送 地：</div>
                                <div class="dd clearfix">
                                    <div id="store-selector" class="">
                                        
                                        <div class="content">
                                            <div data-widget="tabs" class="m JD-stock" id="JD-stock">
                                                <div class="mt">
                                                   
                                                    <div class="stock-line"></div>
                                                </div>
                                                
                                            </div><span class="clr"></span>
                                        </div>
                                        <div class="close" onclick="$('#store-selector').removeClass('hover')"></div>
                                    </div>
                                    <div id="store-prompt">
                                        <?php echo ($b['bpsd']); ?>
                                    
                                    </div>
                                </div>
                                <span class="clr"></span>
                            </div>
                            
                        </div>
                        <!-- 选择商品规格 -->
                        <div id="summary-service" clstag="shangpin|keycount|product|1|fuwu">
                            
                        </div>
                        <div id="summary-service" clstag="shangpin|keycount|product|1|fuwu">
                            
                        </div>
                        <!-- /选择商品规格 -->
                       
                        <dl class="amount dl clear">
                            <dt class="property-type">数&nbsp;&nbsp;量：</dt>
                            <dd>
                                
                                <em>(库存<span id="J_SpanStock" class="count"><?php echo ($b['bkc']); ?></span>件)</em>
                            </dd>
                        </dl>
                       
                        <div id="J_juValid" class="action clear">
                            <div class="btn-buy fl">
                               
                            </div>
                            <div class="fl btn-add" >
                                <a  title="加入购物车" id="addcar" class="J_LinkAdd" data-spm-click="gostr=/tbdetail;locaid=d2" shortcut-key="a" shortcut-label="加入购物车" shortcut-effect="click" data-spm-anchor-id="2013.1.20140002.9"><i class="iconfont"></i>加入购物车</a>
                            </div>
                            <div class="fl btn-add" >
                                <a  title="删除商品" id="del"    shortcut-label="删除商品"  ><i class="iconfont"></i>删除商品</a>
                            </div>
                        </div>
                 
                        <div class="dl">
                            <dl class="mod_detailInfor_ensure clear">
                                <dt class="dt">保&nbsp;&nbsp;障</dt>
                                <dd class="dd clear">
                                    <div class="payment" id="payment">
                                       
                                    </div>
                                    <div id="payServiceList">
                                        <a >正品保障</a>
                                        <a title="假一赔三" >假一赔三</a>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="goodStandard clear">
                            
                            <ul>
                                <li>国家：<?php echo ($b['bgj']); ?></li>
                                <li>产地：<?php echo ($b['bcd']); ?></li>
                                <li>品牌：<?php echo ($b['bpp']); ?></li>
                                
                            </ul>
                            <ul>
                               
                                <li>承诺声明：<?php echo ($b['bjs']); ?></li>
                                
                            </ul>
                            
                        </div>
                    </div><?php endforeach; endif; ?>
                
                    <div class="dadd fr" id="r_mod">
                        <div class="mod_change" id="r_mod_change">
                            <div class="cha_t">看了还看
                                
                            </div>
                            <ul class="seeclip_list clear">
                                <?php if(is_array($rd)): foreach($rd as $key=>$b): ?><li>
                                    <a href="<?php echo U('Index/Index/showDetail',array('bno'=>$b['bno']));?>"><img src="<?php echo ($b['bimg']); ?>" alt=""></a>
                                </li><?php endforeach; endif; ?>

                            </ul>
                            <p class="see_more">
                                
                              
                            </p>
                        </div>
                    </div>
                   
                </div>
                
            </div>
            
        </div>
        
        <div id="service-2014" clstag="h|keycount|2015|32a">
            <div class="slogen clear">
                <span class="item fore1">
                    <i></i><b>多</b>品类齐全，轻松购物
                </span>
                <span class="item fore2">
                    <i></i><b>快</b>多仓直发，极速配送
                </span>
                <span class="item fore3">
                    <i></i><b>好</b>正品行货，精致服务
                </span>
                <span class="item fore4">
                    <i></i><b>省</b>天天低价，畅选无忧
                </span>
            </div>
            <div class="w wrap clear">
                
               
             
               
                <div id="coverage">
                    <div class="dt">
                        自营覆盖区县
                    </div>
                    <div class="dd">
                        <p>已向全国2050个区县提供自营配送服务，支持货到付款、POS机刷卡和售后上门服务。</p>
                        
                    </div>
                </div>
                <span class="clr"></span>
            </div>
        </div>
      
        <!-- 页尾链接和版权信息 -->
        <div id="footer" class="">
            
           
            <p class="padt10 textc cor2 lh20">版权所有&nbsp;&copy;&nbsp;黑龙江大学&nbsp;&nbsp;
            </p>
            
        </div>
        <!-- /页尾链接和版权信息 -->
        <script src="__PUBLIC__/js/jquey-1.8.0.min.js"></script>
        <script src="__PUBLIC__/js/imgTab.js"></script>
        <!--script src="__PUBLIC__/js/bootstrap.min.js"></script>-->

        <script>
                $(document).ready(function(){
                    var bkc=$("#input-kc").val()
                    console.log(bkc)
                    var uid = $("#input-uid").val()
                    var utype=$("#input-utype").val()
                    var aa=$("#input-utype").val()
                    $(".login_a").hide()
                    $("#addcar").hide()
                    $('.ccc').hide()
                   $('#del').hide()
                    console.log(uid.length)
                    if(uid.length > 0){
                        console.log("in")
                        $(".a-notlogin").hide()
                        $(".login_a").show()
                        $("#addcar").show()
                        $(".ccc").show()
                    }
                    console.log(utype.length)
                    if(utype.length==2){
                        $("#del").show()
                        $("#addcar").hide()
                        $('.ccc').hide()
                    }
                    $("#addcar").click(function(){
                        //console.log("?")
                        
                     
                            if(bkc==0)
                            {
                                alert("库存不足！")
                                return
                            }
                            $.post("<?php echo U('Index/Index/addToCar');?>",{bno:$(".input-bno").val()},function(res){
                            if(res.status == 1){
                                location.href = "<?php echo U('Index/Index/lookShoppingCar');?>"
                            }
                        })
                        
                        
                    })

                  /*  $("#del").click(function(){
                        $.post("<?php echo U('Index/Index/delsp');?>",{bno:$(".input-bno").val()},function(res){
                            if(res.status == 1){
                                alert("删除成功！")
                                location.href = "<?php echo U('Index/Index/index');?>"
                            }else{
                                alert("删除失败！")
                            }
                    })*/
                })
                
            </script>
            <script>
                $(document).ready(function(){
                    $("#del").click(function(){
                        $.post("<?php echo U('Index/Index/delsp');?>",{bno:$(".input-bno").val()},function(res){
                            if(res.status == 1){
                                alert("删除成功！")
                                location.href = "<?php echo U('Index/Index/index');?>"
                            }else{
                                alert("删除失败！")
                            }
                    })
                }
                    )})
            </script>
    </body>

</html>