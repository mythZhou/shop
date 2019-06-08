<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>销售统计 || shop</title>
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
                <h3>销售额统计图</h3>
            </div>
            <div class="body">
                <!-- 创建图表容器 -->
                <div id="c1" style="padding-left: 180px"></div>
            </div>
        </div>
        <div class="register_box" style="background: #fff">
            <div class="head">
                <h3>销售量统计图</h3>
            </div>
            <div class="body">
                <!-- 创建图表容器 -->
                <div id="c2" style="padding-left: 180px"></div>
            </div>
        </div>
    </div>

    <!-- /注册页面主体 -->
    <div id="footer" class="padb10">
        <p class="padt5 textc cor2 lh20">版权所有&nbsp;&copy;&nbsp;黑龙江大学</p>
    </div>

    <input type="hidden" value="<?php echo ($sales1); ?>" id="input-sales1"/>
    <input type="hidden" value="<?php echo ($sales2); ?>" id="input-sales2"/>
    <input type="hidden" value="<?php echo ($sales3); ?>" id="input-sales3"/>
    <input type="hidden" value="<?php echo ($sales4); ?>" id="input-sales4"/>
    <input type="hidden" value="<?php echo ($amount1); ?>" id="input-amount1"/>
    <input type="hidden" value="<?php echo ($amount2); ?>" id="input-amount2"/>
    <input type="hidden" value="<?php echo ($amount3); ?>" id="input-amount3"/>
    <input type="hidden" value="<?php echo ($amount4); ?>" id="input-amount4"/>

    <script>
        const sales1=$("#input-sales1").val();
        const sales2=$("#input-sales2").val();
        const sales3=$("#input-sales3").val();
        const sales4=$("#input-sales4").val();

        const amount1=$("#input-amount1").val();
        const amount2=$("#input-amount2").val();
        const amount3=$("#input-amount3").val();
        const amount4=$("#input-amount4").val();

        const salesStatistics = [
            { btype: '墙纸挂饰', sales: Number(sales1) },
            { btype: '家居饰品', sales: Number(sales2) },
            { btype: '生活家具', sales: Number(sales3) },
            { btype: '摆件装饰', sales: Number(sales4) },
        ];

        console.log(salesStatistics);

        const amountStatistics = [
            { btype: '墙纸挂饰', amount: Number(amount1) },
            { btype: '家居饰品', amount: Number(amount2) },
            { btype: '生活家具', amount: Number(amount3) },
            { btype: '摆件装饰', amount: Number(amount4) },
        ];


        // Step 1: 创建 Chart 对象
        const chart1 = new G2.Chart({
            container: 'c1', // 指定图表容器 ID
            width : 600, // 指定图表宽度
            height : 300 // 指定图表高度
        });
        // Step 2: 载入数据源
        chart1.source(salesStatistics);
        // Step 3：创建图形语法，绘制柱状图
        chart1.interval().position('btype*sales').color('btype')
        // Step 4: 渲染图表
        chart1.render();

        // Step 1: 创建 Chart 对象
        const chart2 = new G2.Chart({
            container: 'c2', // 指定图表容器 ID
            width : 600, // 指定图表宽度
            height : 300 // 指定图表高度
        });
        // Step 2: 载入数据源
        chart2.source(amountStatistics);
        // Step 3：创建图形语法，绘制柱状图
        chart2.interval().position('btype*amount').color('btype')
        // Step 4: 渲染图表
        chart2.render();
        
    </script>

</body>

</html>