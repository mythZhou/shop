<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title><?php echo ($cname); ?>　问题</title>
	  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="__PUBLIC__/images/icon.png" mce_href="__PUBLIC__/images/icon.png" type="image/x-icon">
  <link  id="theme" href="__PUBLIC__/css/custom/bootstrap.style.css" rel="stylesheet">
  <link  href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet">
  <link href="__PUBLIC__/css/style.css" rel="stylesheet">

<!--[if lt IE 9]>
<script type="text/javascript" src="__PUBLIC__/js/ie-compatible.js"></script>
<![endif]-->

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?837af77cdd844632ad02ef10fb7851f0";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Index/Index/index');?>">UniCourse<sup>+</sup></a>
        </div>
        <div class="collapse navbar-collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li id="header-home">
                    <a href="<?php echo U('Teacher/Home/index',array('cno' =>$_REQUEST['cno']));?>">首页</a>
                </li>
                <li class="dropdown" id="header-course">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        课程 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php  foreach (session('selectedCourses') as $key => $value) { ?>
                        <li>
                            <a href="<?php echo U('Teacher/Course/index',array('cno' =>$value['cno']));?>" ><?php echo ($value['cname']); ?></a>
                        </li>
                        <?php  } ?>
                        <?php  foreach (session('secondcourse') as $key => $value) { ?>
                        <li>
                            <a href="<?php echo U('Teacher/Course/index',array('cno' =>$value['cno']));?>" ><?php echo ($value['cname']); ?></a>
                        </li>
                        <?php  } ?>                          
                    </ul>
                </li> 
                   
            </ul>
            <ul class="nav navbar-nav navbar-right">  
                     
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $_SESSION['tname']; ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                        <a href="<?php echo U('Teacher/UserProfile/index');?>"><div class="list-icon"><span class="icon-user"></span></div>我的资料</a>
                        </li>
                        <li class="divider"></li>
                       <!--  <?php if (session('isAssistant')==1) { ?>
                        <li>
                            <a href="<?php echo U('Assistant/Assistant/index');?>" id="assistant"><div class="list-icon"><span class="icon-book"></span></div>我担任的助教</a>
                        </li>
                        <li class="divider"></li>
                        <?php  } ?> -->
                        <?php if (session('examiner')==1) { ?>
                        <li>
                            <a href="<?php echo U('Examiner/Home/index');?>" id="assistant"><div class="list-icon"><span class="icon-user"></span></div>我参与评审的课程</a>
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
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10" id="main-left">
				<div id="sidebar1" class="panel panel-info" style="width:110%">
		<div class="panel-heading"><?php echo ($cname); ?></div>
		<div class="list-group"  role="menu">
			<a id="left-home" class="list-group-item" href="<?php echo U('Teacher/Course/index',array('cno' => $_REQUEST['cno']));?>">
				<div class="list-icon">
					<span class="icon-home"></span>
				</div>
				主页
			</a>
			<a id="left-announcement" class="list-group-item" href="<?php echo U('Teacher/Notice/index',array('cno' => $_REQUEST['cno']));?>">
				<div class="list-icon">
					<span class="icon-reorder"></span>
				</div>
				公告
			</a>
			<a id="left-question" class="list-group-item" href="<?php echo U('Teacher/Question/index',array('cno' => $_REQUEST['cno']));?>" >
				<div class="list-icon">
					<span class="icon-comments"></span>
				</div>
				问答
			</a>
			<a id="left-group" class="list-group-item" href="<?php echo U('Teacher/Group/index',array('cno' => $_REQUEST['cno']));?>">
				<div class="list-icon">
					<span class="icon-group"></span>
				</div>
				小组
			</a>
			<a id="left-homework" class="list-group-item" href="<?php echo U('Teacher/Homework/index',array('cno' => $_REQUEST['cno']));?>">
				<div class="list-icon">
					<span class="icon-edit"></span>
				</div>
				作业
			</a>
			<a id="left-document" class="list-group-item" href="<?php echo U('Teacher/Document/index',array('cno' => $_REQUEST['cno']));?>">
				<div class="list-icon">
					<span class="icon-file-text"></span>
				</div>
				课件
			</a>
			<a id="left-intro" class="list-group-item" href="<?php echo U('Teacher/Management/index',array('cno' => $_REQUEST['cno']));?>">
				<div class="list-icon">
					<span class="icon-info"></span>
				</div>
				课程管理
			</a>

			<a id="left-outline" class="list-group-item" href="<?php echo U('Teacher/Outline/index',array('cno' => $_REQUEST['cno']));?>">
				<div class="list-icon">
					<span class="icon-check-sign"></span>
				</div>
				课程大纲
			</a>
			<!--a id="left-save" class="list-group-item" href="<?php echo U('Teacher/Homework/saveAllHomework',array('cno' => $_REQUEST['cno']));?>">
				<div class="list-icon">
					<span class="icon-copy"></span>
				</div>
				作业备份

			</a-->
			<a id="left-save" class="list-group-item" href="<?php echo U('Teacher/Backup/index',array('cno' => $_REQUEST['cno']));?>">
				<div class="list-icon">
					<span class="icon-copy"></span>
				</div>
				作业备份
			</a>
			<a id="left-chart" class="list-group-item" href="<?php echo U('Teacher/Charts/index',array('cno' => $_REQUEST['cno']));?>">
				<div class="list-icon">
					<span class="icon-bar-chart"></span>
				</div>
				达成度分析
			</a>		
		</div>
	</div>

	<div id="sidebar2" style="width:110%">
		<div class="panel panel-success">
			<div class="panel-heading">您的课程</div>
			<div class="list-group">
				<?php foreach (session('selectedCourses') as $key => $value): ?>
				<a id="course<?php echo ($value['cno']); ?>" class="left-changecourse list-group-item" href="<?php echo U('Teacher/Course/index',array('cno' =>$value['cno']));?>" ><?php echo ($value['cname']); ?></a>
				<?php endforeach ?>
				<?php foreach (session('secondcourse') as $key => $value): ?>
				<a id="course<?php echo ($value['cno']); ?>" class="left-changecourse list-group-item" href="<?php echo U('Teacher/Course/index',array('cno' =>$value['cno']));?>" ><?php echo ($value['cname']); ?></a>
				<?php endforeach ?></div>

		</div>


	</div>


    </div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-10">
				<div id="main-right">
					<div class="row">
						<form id="question-form" class="form">
	<div class="form-group">
		<label for="title" class="sr-only">问题标题</label>
		<input type="text" id="question-title" name="title" placeholder="我要提问" class="form-control">
		<div class="errormessage" id="qtitle-check"></div>
	</div>
	<div id="question-collapse">
		<div class="form-group">
			<label for="content" class="sr-only">问题内容</label>
			<textarea id="question-detail" name="content" placeholder="这里是内容" ></textarea>
			<div class="errormessage" id="qdetail-check"></div>
		</div>
		<div class="form-group">
			<input type="hidden" name="cno" value="<?php echo I('cno');?>" class="form-control">
			<a class="btn btn-primary" id="btn-question">发布</a>
			<a class="btn btn-default" id="btn-cancel">取消</a>
		</div>
	</div>
</form>
					</div>
					<?php if(is_array($question)): foreach($question as $key=>$v): ?><div class="row">
							<div class="panel panel-default">
	<div class="panel-body">
		<small class="hide"><?php echo ($v["qno"]); echo ($v["cno"]); ?></small>
		<div>
			<small class="pull-right time"><?php echo ($v["raise_time"]); ?></small>
			<span>
				<a><?php echo ($v["sname"]); ?></a>
				:
			</span>
			<span class="title">				
				<a href="<?php echo U('Teacher/Question/questiondetail',array('qno' =>$v['qno'],'cno'=>I('cno')));?>" target="_blank"><?php echo ($v["qtitle"]); ?></a>
			</span>
		</div>
		<div  class="ellipsis"><?php echo ($v["content"]); ?></div>
		<div class="question-bar">
			<form class="questionnumber">
				<input type="hidden" name="qno" value="<?php echo ($v['qno']); ?>">
				<input type="hidden" name="cno" value="<?php echo ($cno); ?>">
				<?php if($v['isFocus']==0): ?><a class="focus btn btn-success btn-xs">关注</a>
					(
					<span class="attnum"><?php echo ($v["attnum"]); ?></span>
					人关注)
					<?php else: ?>
					<a class="cancelfocus btn btn-xs btn-warning">取消关注</a>
					(
					<span class="attnum"><?php echo ($v["attnum"]); ?></span>
					人关注)<?php endif; ?>
				<a  href="<?php echo U('Teacher/Question/questiondetail',array('qno' =>$v['qno'],'cno'=>I('cno')));?>" target="_blank"><?php echo ($v["rplynum"]); ?>个回答</a>
				<?php if($v['raise_sno']==session('uid')): ?><a class="btn btn-warning pull-right btn-delete btn-xs">删除</a><?php endif; ?>
			</form>
		</div>
	</div>
</div>
						</div><?php endforeach; endif; ?>
					<?php if ($question[0]==null): ?>
					<div class="row">
						<div class="panel panel-default">
							<div class="panel-body">还没有问答呢~~</div>
						</div>
					</div>
					<?php endif ?>
					<div class="page"><?php echo ($page); ?></div>
				</div>
			</div>
      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
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
  <div id="info" data-activeitem="#left-question"></div>
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
        var editor = new UE.ui.Editor();
        editor.render("question-detail");
        $(".edui-editor-breadcrumb").hide();//让那个多余的“元素路径”消失
        $("#btn-question").click(function(){
        $(".errormessage").text("");
        if($("#question-title").val().replace(/[ ]/g,"")==""){$("#question-title").siblings('.errormessage').text("请输入问题的标题");$("#question-title").focus();return false;}
        if(editor.getContentTxt().replace(/\ /g,"")==""){$("#question-detail").siblings('.errormessage').html("请输入问题的内容");$("#question-detail").focus();return false;}
        $("#btn-question").text('发布中……');
        $.ajax({
            url:"<?php echo U('Teacher/Question/createQuestion');?>",
            type:'POST',
            dataType:'json',
            data:$("#question-form").serialize(),
            success:function(data){
                if(data.status==1||data.status==2){
                    alert("发布成功");
                    $("#question-title").val("");
                    $("#question-detail").val("");
                    CAR(0.5);}
                else{alert("貌似发布失败了……");
                $("#btn-question").text('发布');CA(2);}
            },
            error:function(){
                alert("出错了");
                $("#btn-question").text('发布');
                CA(2);
            }}
            );
        return false;
        });
        $("#question-title").keypress(function(event) {
            $(this).siblings('.errormessage').text("");
        });
        $("#question-detail").keypress(function(event) {
            $(this).siblings('.errormessage').text("");
        });
        $("#question-collapse").hide();
        $("#question-title").focus(function(event) {
            $("#question-collapse").slideDown("fast");
            $("#question-title").attr('placeholder', '这里输入标题');
        });
        $("#btn-cancel").click(function(event) {
            $("#question-collapse").slideUp("fast");
            $("#question-title").val("");
            $("#question-detail").val("");
            $(".errormessage").text("");
        });
    });
</script>
  <script type="text/javascript">
    function focus($s){
      $.post("<?php echo U('Teacher/Question/focus');?>",
            $s.parent().serialize(),
            function(data) {
           if (data.status == 1) {
            $s.removeClass('focus').removeClass('btn-success').addClass('unfocus').addClass('btn-warning').text("取消关注");
              var num=parseInt($s.next("span").text());
              num=num+1;
              $s.next("span").text(num);
              $s.unbind('click');
              $s.click(function(event) {
                unfocus($s);
              });

            } else {;
            }
          }, "json");
    }
    function unfocus($s){
      $.post("<?php echo U('Teacher/Question/unFocus');?>",
            $s.parent().serialize(),
            function(data) {
            if (data.status == 1) {
              $s.removeClass('unfocus').removeClass('btn-warning').addClass('focus').addClass('btn-success').text("关注");
              var num=parseInt($s.next("span").text());
              num=num-1;
              $s.next("span").text(num);
              $s.unbind('click');
              $s.click(function(event) {
                focus($s);
              });
            } else {
              ;
            }
          }, "json");
    }
    $(document).ready(function(){
      $(".cancelfocus").click(function() {
            unfocus($(this));
        });
        $(".focus").click(function() {
          focus($(this));
        });

        $(".btn-delete").click(function() {
          var $t=$(this);
          $.post("<?php echo U('Teacher/Question/deleteQuestion');?>",
            $t.parent().serialize(),
            function(data) {
            if (data.status == 1) {
              $t.closest('.row').fadeOut('normal',function(){$(this).remove();});
            } else {;}
          }, "json");
        });
    });
  </script>
</body>
</html>