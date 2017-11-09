<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<title>Admin | KyoMini Blog</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <link rel="stylesheet" href="/Blog/Admin/View/Public/Css/bootstrap.css">
     <link rel="stylesheet" href="/Blog/Admin/View/Public/Css/admin.css">
     <link rel="shortcut icon" href="favicon.ico" >
            <!--[if lt IE 9]>
               <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
               <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
             <![endif]-->
</head>


<body>
<?php  $db=M('Admin'); $admin=$db->where('id=1')->getField('nickname'); ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo U('/Admin');?>"><?php echo (L("_Admin_Logo_")); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo U('/Admin');?>"><?php echo (L("Survey")); ?></a></li>
            <li><a href="<?php echo U('/Admin/Article/Article_add');?>"><?php echo (L("Write")); ?></a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo (L("Manage")); ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo U('/Admin/Article ');?>"><?php echo (L("Article")); ?></a></li>
                    <li><a href="<?php echo U('/Admin/Category');?>"><?php echo (L("Classify")); ?></a></li>
                    <li><a href="<?php echo U('/Admin/Comment ');?>"><?php echo (L("Review")); ?></a></li>
                    <li><a href="<?php echo U('/Admin/Page');?>"><?php echo (L("One_page")); ?></a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo U('/Admin/Menu');?>"><?php echo (L("Navigation")); ?></a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo (L("Config")); ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo U('/Admin/Settings');?>"><?php echo (L("Basic_config")); ?></a></li>
                    <li><a href="<?php echo U('/Admin/Picture');?>"><?php echo (L("Picture")); ?></a></li>
                    <li><a href="<?php echo U('/Admin/Template');?>"><?php echo (L("Surface")); ?></a></li>
                    <li><a href="<?php echo U('/Admin/Lang');?>?l=<?php echo (C("LANG_LIST")); ?>"><?php echo (L("_Language_")); ?></a></li>
                     

                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo (L("hi")); ?>，<?php echo ($admin); ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href=""><?php echo (L("Into_web")); ?></a></li>
                    <li><a href="<?php echo U('Index/cache_del');?>"><?php echo (L("Update_cache")); ?></a></li>
                    <li id="aboutus_menu"><a href="<?php echo U('/Admin/About');?>"><?php echo (L("About")); ?></a></li>
                    <li class="divider"></li>
                    <li><a href="#" data-toggle="modal" data-target="#password"><?php echo (L("Set_Password")); ?></a></li>
                </ul>
            </li>
            <li><a href="<?php echo U('Index/login_out');?>"><?php echo (L("Sign_out")); ?></a>
            </li>
        </ul>
    </div>
</nav>
<div style="display:none"><script src="http://s5.cnzz.com/z_stat.php?id=1253237888&web_id=1253237888" language="JavaScript"></script></div>

<div class="container">
  <div class="page-header">
    <h2>Kyomini Blog</h2>
  </div>
  <div class="MiniBox1">
    <p>这是一款基于 ThinkPHP 框架开发的极简Blog程序，稳定、安全以及简约风格一贯是KYOMINI团队宗旨！</p>
    <p>通过精心打磨的设计图形，依然是你熟悉的面孔，更多了一份成熟与贴心。每一行代码和每一个逻辑，都只爲离完美更进一步。</p>
    <a href="http://www.kyomini.com" class="btn btn-info" >进入官网</a> </div>
  <div class="row">
    <div class="col-md-4">
      <div class="page-header miniheight1">
        <h4> 我的数据</h4>
      </div>
      <canvas id="canvas" height="250" width="250"></canvas>
      <div class="canvascode">
        <ul>
          <li><span class="canvas1"></span><?php echo ($pagecount); ?>项独立页</li>
          <li><span class="canvas4"></span><?php echo ($articlecount); ?>篇文章</li>
          <li><span class="canvas3"></span><?php echo ($categorycount); ?>个分类</li>
          <li><span class="canvas2"></span><?php echo ($commentcount); ?>条评论</li>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
      <div class="page-header miniheight1">
        <h4> 最近文章</h4>
      </div>
      <ul>
        <?php if(is_array($articles)): foreach($articles as $key=>$a): ?><li><span><?php echo (date('Y-m-d',$a["time"])); ?></span><a href="#"><?php echo ($a["title"]); ?></a></li><?php endforeach; endif; ?>
      </ul>
    </div>
    <div class="col-md-4">
      <div class="page-header miniheight1">
        <h4> 最新评论</h4>
      </div>
      <ul>
        <?php if(is_array($comment)): foreach($comment as $key=>$b): ?><li><a href="#">[<?php echo ($b["couname"]); ?>]  <?php echo (substr($b["content"],0,100)); ?></a></li><?php endforeach; endif; ?>
      </ul>
    </div>
  </div>
  <div class="footer">
        <p>&copy; 2014 <a href="#">www.kyomini.com</a> All Rights Reserved.</p>
        <span>KyoMini V0.1</span>
</div>
<script src="/Blog/Admin/View/Public/Js/jquery-1.11.0.min.js"></script> 
<script src="/Blog/Admin/View/Public/Js/bootstrap.min.js"></script> 
  <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">修改密码</h4>
      </div>
      <form method="post" action="/index.php/Admin/Index/update">
      <div class="modal-body">
     
   
   
   
   
   
   
   
   

   
   
   <table width="100%">
        	<tr>
            	<td width="33%" align="right"><span class="cName">登陆帐号</span></td>
                <td width="67%" style="height:65px;
                text-align:left"><?php echo ($user["name"]); ?>
                
                
                </td>
            </tr>
            <tr>
            	<td align="right"><span class="cName">修改您称</span></td>
                <td>      <input type="text" class="form-control miniinput2" name="nickname" value="<?php echo ($user["nickname"]); ?>">
</td>
            </tr>
            <tr>
            	<td align="right"><span class="cName">修改密码</span></td>
                <td>      <input type="text" class="form-control miniinput2" name="password">
</td>
            </tr>
        </table>


      </div>
      <div class="modal-footer">
    <input type="hidden" name="id" value="<?php echo ($user["id"]); ?>" />
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">修改</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  
    
    
    
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 </div>
<script src="/Blog/Admin/View/Public/Js/Chart.js"></script> 
<script>
var doughnutData = [
				{
					value: <?php echo ($pagecount); ?>,
					color:"#8bd7ac"
				},
				{
					value : <?php echo ($articlecount); ?>,
					color : "#f78d98"
				},
				{
					value : <?php echo ($categorycount); ?>,
					color : "#ffc467"
				},
				{
					value : <?php echo ($commentcount); ?>,
					color : "#46BFBD"
				},

			
			];

	var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);
    </script>
</body>
</html>