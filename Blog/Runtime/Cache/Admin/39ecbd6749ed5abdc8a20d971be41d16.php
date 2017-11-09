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
<span id="result"></span>

  
  
  
  
  
  
  
  
  
  
  <div class="container">
  <!--内容开始-->
  
  <div class="page-header">
  <h3>文章</h3>

  </div>
    <div class="input-append">
         <a href="<?php echo U('Article_add');?>" class="btn btn-info sousuo"><?php echo (L("Write_articler")); ?></a>
         
</div>
  <div class="MiniBox2">
  
  
  <form method="post" action="/index.php/Admin/Article/del">
  <table width="100%" border="0" class="table table-hover" id="list" >
  <tr>
  <td width="5%" ><input type="checkbox"  id="all">
         </td>
    <td width="5%"><b>ID</b></td>
    <td width="55%" class="biaoti"><b><?php echo (L("_title_")); ?></b></td>
    <td width="10%" ><b><?php echo (L("Classify")); ?></b></td>
    <td width="15%" ><b><?php echo (L("_top_")); ?></b></td>
    <td width="15%"><b><?php echo (L("_operation_")); ?></b></td>
  </tr>
    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
            <td><input type="checkbox"  value="<?php echo ($vo["aid"]); ?>" name="<?php echo ($vo["aid"]); ?>"></td>

    <td><?php echo ($vo["aid"]); ?></td>
    <td  class="biaoti"><?php echo ($vo["title"]); ?></td>
    <td><?php echo ($vo["cname"]); ?></td>
    
    
   <!-- http://127.0.0.1/AimeeBlog/admin.php/Article/hot/hot/2/id/1
    <a href="<?php echo U('Article/hot?hot=2&id='.$vo["aid"]);?>">默认</a>
-->
    
    
    
    
    <td>
   <?php if($vo["hot"] == '1'): ?><a href="/index.php/Admin/Article/hot/hot/2/id/<?php echo ($vo["aid"]); ?>"><?php echo (L("_default_")); ?></a>
                        <?php else: ?>
                        <a href="/index.php/Admin/Article/hot/hot/1/id/<?php echo ($vo["aid"]); ?>" ><?php echo (L("_top_")); ?></a><?php endif; ?>
    
    </td>
    
    
    
    
    
    
    
    
    
    
    
    <td class="hand">
    <span onclick="location.href='/index.php/Admin/Article/mod/id/<?php echo ($vo["aid"]); ?>'"><?php echo (L("_editor_")); ?></span>
   <span onclick="if(confirm('<?php echo (L("_suredel_")); ?>'))window.location.href='/index.php/Admin/Article/del/id/<?php echo ($vo["aid"]); ?>'"><?php echo (L("_del_")); ?></span>
    </td>
  </tr><?php endforeach; endif; ?>
      <tr>
        <td colspan="6" class="biaoti" style="padding-top:25px;"><button type="submit" class="btn btn-success"><?php echo (L("batchdell_del")); ?></button>
        
            <?php echo ($page); ?>
         </td>
      </tr>
</table>
</form>
  
  
  
  
  </div>
  
  
  
  


  
  
  
  
  
  
  
  
  
  <!--内容结束-->
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
  
<script>
    $("#all").on('click', function() {
    $(this)
    .parents('table') 
    .find(':checkbox')                     
    .prop('checked', $(this).is(':checked'));
})
    </script>



  
  

 






















  
  
  
  
  
  
  
  
  
  
  
  


</html>