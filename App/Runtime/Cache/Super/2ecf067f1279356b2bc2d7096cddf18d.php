<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html ng-app="Unicourse">
<head>
    <title>指标点分配</title>
      <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="__PUBLIC__/images/icon.png" mce_href="__PUBLIC__/images/icon.png" type="image/x-icon">
  <link  id="theme" href="__PUBLIC__/css/custom/bootstrap.style.css" rel="stylesheet">
  <link  href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet">
  <link href="__PUBLIC__/css/style.css" rel="stylesheet">

<!--[if lt IE 9]>
<script type="text/javascript" src="__PUBLIC__/js/ie-compatible.js"></script>
<![endif]-->
    <link rel="stylesheet" href="css/bootswatch/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="__PUBLIC__/css/dropzone.css">
    <style>
    .list-group-item:first-child{border-radius: 0px;border-top:none;}
    .tabtitle:visited,.tabtitle:active,.tabtitle:focus{outline: none;border:none;}
    .courseitem.cur .glyphicon-chevron-right{display:block;}
    .list-group-item{overflow: hidden;}
    .thumbnail{background-color:	#F0F0F0};
    </style>
</head>
<body ng-app="Unicourse">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header hidden-xs">
            <a class="navbar-brand" href="<?php echo U('Index/Index/index');?>">UniCourse<sup>+</sup></a>
        </div>
        <div class=" navbar-collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li id="header-home">
                    <a href="<?php echo U('Index/Index/index');?>">首页</a>
                </li>
            </ul>

            <ul class="nav navbar-nav">
                <li id="header-edit">
                    <a href="<?php echo U('Super/Target/edit',array('pno'=>1));?>">编辑</a>
                </li>
            </ul>

            <ul class="nav navbar-nav">
                <li id="header-manage">
                    <a href="<?php echo U('Super/Target/manage',array('pno'=>'11111111'));?>">管理</a>
                </li>
            </ul>

            <ul class="nav navbar-nav">
                <li id="header-backup">
                    <a href="<?php echo U('Super/Backup/index');?>">备份</a>
                </li>
            </ul>

             <ul class="nav navbar-nav navbar-right">
                <li class="dropdown hidden-xs">
                    <a href="#" id="profile" class="dropdown-toggle" data-toggle="dropdown">
                        <span><?php echo $_SESSION['uname']; ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo U('Super/SuperProfile/index');?>" id="username"><div class="list-icon"><span class="icon-user"></span></div>我的资料</a>
                        </li>
                        <li class="divider"></li>
                        <?php if (session('isAssistant')==1) { ?>
                        <li>
                            <a href="<?php echo U('Assistant/Assistant/index');?>" id="assistant"><div class="list-icon"><span class="icon-book"></span></div>我担任的助教</a>
                        </li>
                        <li class="divider"></li>
                        <?php  } ?>
                        <li>
                            <a href="<?php echo U('Index/Login/logout');?>" id="btn-logout"><div class="list-icon"><span class="icon-signout"></span></div>登出</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div id="main-container" class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs" id="main-left">
                <div id="sidebar1" class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="list-icon">
                            <span class="icon-share"></span>
                        </div>
                        一级指标点
                    </div>
                    <div class="list-group"  role="menu">
                        <?php if(is_array($levelone)): foreach($levelone as $key=>$o): ?><span class="hide"><?php echo ($o["cno"]); ?></span>
                                <a id="pno<?php echo ($o['pno']); ?>" href="<?php echo U('Super/Target/arrange',array('cno' => $_REQUEST['cno'], 'pno' => $o['pno']));?>" class="list-group-item courseitem">
                                    <?php echo ($o["pname"]); ?>
                                </a><?php endforeach; endif; ?>
                        <?php if ($levelone[0]==null): ?>
                        <span class="list-group-item" >
                            没有一级指标点
                        </span>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div id="main-right">
                <div class="row">
                    <div class="panel panel-success" style="border-color:	#008080">
                        <div class="panel-heading" style="background-color:	#008080;border-color:#008080; font-weight: bold;font-size: 120%;">二级指标点分配(<?php echo ($thislevel["0"]["pname"]); ?>)</div>
                        <div>                    
                            <div id="hasnotbacked" style="padding:20px">
                                        <table  class="table">
                                            <tr>
                                                <td width="4em"></td>
                                                <td style="font-size:20px;font-weight:bold" id="ttitle">二级指标点名称</td>
                                            </tr>
                                            <?php if(is_array($leveltwo)): foreach($leveltwo as $key=>$t): ?><tr>
                                                    <td>
                                                        <input type="hidden" name="geta" value="<?php echo getAssignment(I('cno'),$t['pno']);?>">
                                                        <input type="checkbox" name="<?php echo ($t['pno']); ?>" class="checklist" style="zoom:150%;">
                                                    </td>
                                                    <td><?php echo ($t["pname"]); ?></td>
                                                </tr><?php endforeach; endif; ?>
                                        </table>
                                        <div style="text-align:center;"><?php echo ($page); ?></div>
                                        <div class="list-group-item" style="border-color:white!important">
                                            <input type="hidden" name="cno" value="<?php echo I('cno');?>" id="cnohelp">
                                            <button id="btn_add" class="btn btn-primary">提交</button>
                                        </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">
                <div  id="corner" style="position:fixed;">
	<div id="btn-totop" class="corner-btn">
		<a href="#" title="回顶部" onclick="goTop();return false;">
			<span class=" icon-circle-arrow-up icon-3x"></span>
		</a>
	</div>
	<div id="btn-feedback" class="corner-btn" data-toggle="modal" data-target="#modal-feedback" title="意见反馈">
		<a href="#">
			<span class="icon-edit-sign icon-3x"></span>
		</a>
	</div>
</div>

<?php if($_SESSION['type']=='student') :?>
<div class="modal fade" id="modal-feedback">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="btn-closemodal">&times;</button>
				<h4 class="modal-title">意见与建议</h4>
			</div>
			<form id="form-feedback" class="form" action="<?php echo U('Index/FeedBack/Add');?>">
				<div class="modal-body">
					<div class="form-group">
						<label for="fbcontent">
							我们接受各种形式各种内容的反馈，您的意见与建议是我们前进的不竭动力~
							<img src="__PUBLIC__/images/shy.gif"></label>
						<textarea name="fbcontent" id="fbcontent" class="form-control"  placeholder="在这里输入您想说的" style="height:150px"></textarea>
						<div class="errormessage" id="blankerror">你好像啥都没写唉<img src="__PUBLIC__/images/kb.gif"></div>
					</div>
					<div class="form-group">
						<label for="feedback-chk">
							是否匿名：
							<input type="radio" name="anonymous" value="0" checked>
							否
							<input type="radio" name="anonymous" value="1">是</label>
					</div>
					<div class="form-group">
						您的吐槽将于
						<a href="<?php echo U('Index/FeedBack/Index');?>" target="_blank">吐槽区</a>
						中呈现，有什么想说的尽情说出来吧~<img src="__PUBLIC__/images/dx.gif">
						<br>
						<a href="<?php echo U('Index/FeedBack/Index');?>" target="_blank">看看大家都在说啥</a>
						<img src="__PUBLIC__/images/lks.gif"></div>
						<input type="hidden" name="title" id="feedback-title" value="">
				<input type="hidden" name="utype" value="1">
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="btn-submitfeedback">提交</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php  endif ?>
<?php if($_SESSION['type']=='teacher' || $_SESSION['issuper']==1) :?>
<div class="modal fade" id="modal-feedback">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="btn-closemodal">&times;</button>
				<h4 class="modal-title">意见与建议</h4>
			</div>
			<form id="form-feedback" class="form" action="<?php echo U('Index/FeedBack/Add');?>">
				<div class="modal-body">
					<div class="form-group">
						<label for="fbcontent">
							我们接受各种形式各种内容的反馈，您的意见与建议是我们前进的不竭动力!</label>
						<textarea name="fbcontent" class="form-control"   placeholder="在这里输入您想对我们说的" style="height:150px" id="fbcontent"></textarea>
						<div class="errormessage" id="blankerror">请输入内容</div>
					</div>
					<div class="form-group">
						<label for="feedback-chk">
							是否匿名：
							<input type="radio" name="anonymous" value="0" checked>
							否
							<input type="radio" name="anonymous" value="1">是</label>
					</div>
					<div class="form-group">
						您的意见与建议将在<a href="<?php echo U('Index/FeedBack/Index');?>" target="_blank">意见反馈</a>板块显示，如想私信请发邮件到unicourse@163.com或者直接联系我们，我们将尽快处理
					</div>
					<input type="hidden" name="title" id="feedback-title" value="">
				<input type="hidden" name="utype" value="2">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="btn-submitfeedback">提交</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php  endif ?>

            </div>
        </div>
    </div>
    <input type="hidden" value="<?php echo ($_REQUEST['pno']); ?>" id="pnohelp"/>
    <div id="info" data-item="#pno<?php echo ($_REQUEST['pno']); ?>" data-activeheader="#header-home"></div>
    <footer id="footer">
	<div class="container">
		<div class="col-lg-12">
			Copyright&nbsp;&copy;&nbsp;2013-2018&nbsp;UniCourse,&nbsp;All Rights Reserved.
		</div>
	</div>
</footer>
<script src="__PUBLIC__/dist/js/lib.js"></script>
<script src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script>
<script src="__ROOT__/Data/Ueditor/ueditor.config.js"></script>
<script src="__PUBLIC__/dist/js/unicourse.js"></script>
<script >
window.PUBLIC_URL='__PUBLIC__';
window.ROOT_URL='__ROOT__';
window.APP_URL="__APP__";
window.UNAME="<?php echo ($_SESSION['uname']); ?>"+"<?php echo ($_SESSION['tname']); ?>";
window.UID="<?php echo ($_SESSION['uid']); ?>";
window.CNO="<?php echo ($cno); ?>";
window.UEDITOR_HOME_URL = '__ROOT__/Data/Ueditor/';
window.UEDITOR_CONFIG.initialFrameHeight = 100;
</script>
<script>
    /**
     * 消息模块
     */
app.controller('messages', ['$scope', '$http', function($scope,$http){
        $http.get('<?php echo U('Index/Home/getmsg');?>').success(function(data){
                //console.log(data);
                if(data && data.message){
                    $scope.messages=data.message;
                }
            });
    }]);

</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?6c8c3ce0743dd12cf03043954fddd040";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script>
    $(document).ready(function(){
        $("#pno"+$("#pnohelp").val()).append("<span class='glyphicon glyphicon-chevron-right pull-right'></span>");
        $(".checklist").each(function(){
                if($(this).prev().val()=='y'){
                    $(this).attr("checked",true);
                }
            })
        $("#btn_add").click(function(){
            var pnolist = [];
            $(".checklist").each(function(){
                if($(this).is(':checked')){
                    pnolist.push($(this).attr("name"));
                }
            })
            var cno = $("#cnohelp").val();
            var pno = $("#pnohelp").val();
            $.post("<?php echo U('Super/Target/add');?>",{'pnolist':JSON.stringify(pnolist),'cno':cno,'bpno':pno},function(data){  
                if(data.status!=0)
				{
					alert('分配成功！');
                    CAR(1);
				}
				else
				{
					alert('分配失败 错误编号：'+data.status);
					CA(1);
				} 
            },'json'); 
        })
    })
    
</script>
</body>
</html>