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
            <h3><?php echo (L("Write")); ?></h3>
        </div>
        <div class="MiniBox2">
            <form role="form" method="post" action="<?php echo U('addcontent');?>" enctype="multipart/form-data">
                <div class="MiniBox2_left">
                    <input type="text" class="form-control miniinput" placeholder="<?php echo (L("_title_")); ?>" name="title" />
                </div>
                <div class="MiniBox2_rifht">
                    <select class="form-control miniinput2" name="cid">
                        <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["cid"]); ?>"><?php echo ($v["html"]); echo ($v["cname"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </div>
                <textarea class="form-control miniinput3" rows="20" id="editor_id" name="content"></textarea>
                <div id="write_high">
                    <div class="overflow">
                        <input size="16" type="text" class="form-control form_datetime" placeholder="<?php echo (L("_date_")); ?>" name="time" value="<?php date_default_timezone_set(PRC); echo date("Y-m-d G:i:s"); ?>">
                        <input type="text" class="form-control miniinput4" placeholder="<?php echo (L("_key_")); ?>" name="tag">
                        <input type="text" class="form-control miniinput8" value="1" name="click">
                        <div class="miniinput10">
                            <input type="radio" name="hot" value="1" id="optionsRadios1" checked>&nbsp;<?php echo (L("_default_")); ?>&nbsp;
                            <input type="radio" name="hot" value="0">&nbsp;<?php echo (L("_stick_")); ?></div>
                    </div>
                    <div class="form-group">
                        <input class="miniinput9" name="img" id="img" type="file">
                    </div>
                    <textarea class="form-control miniinput3" rows="3" name="summary" id="zhaiyao" placeholder="<?php echo (L("_summary_")); ?>"></textarea>
                </div>

                
                <button type="submit" class="btn btn-info minibtn"><?php echo (L("_release_")); ?></button>
                <div class="btn-group">
                    <button type="button" class="btn btn-info minibtn dropdown-toggle" data-toggle="dropdown"><?php echo (L("_choice_")); ?> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" id="reset"><?php echo (L("_rewrite_")); ?></a>
                        </li>
                        <li> <a href="#" id="write_high_open"><?php echo (L("_senior_")); ?></a>
                            <a href="#" id="write_high_close"><?php echo (L("_close_")); ?></a>
                        </li>
                    </ul>
                </div>
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


    <script charset="utf-8" src="/Blog/Admin/View/Public/editor/kindeditor.js"></script>
    <script charset="utf-8" src="/Blog/Admin/View/Public/editor/lang/zh_TW.js"></script>
    <script>
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('textarea[name="content"]', {
                uploadJson: '/Blog/Admin/View/Public/editor/php/upload_json.php',
                fileManagerJson: '/Blog/Admin/View/Public/editor/php/file_manager_json.php',
                themeType: 'simple',
                  langType:'<?php echo (C("LANG_LIST")); ?>', 
                allowFileManager: false,
                allowPreviewEmoticons: true, 
                allowImageUpload: true,
                afterBlur: function() {
                    this.sync();
                },
                items: ['source', '|', 'fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste', 'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright', 'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript', 'superscript', 'title', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline', 'strikethrough', 'removeformat', '|', 'image', 'flash', 'media', 'advtable', 'emoticons', 'link', 'unlink', '|', 'baidumap', 'code', 'about'],
            });
        });
    </script>

    <script>
        $("#reset").click(function() {
            $("input, #zhaiyao").val("");
            editor.html('');
        });
        $("#write_high_open").click(function() {
            $("#write_high").fadeIn();
            $("#write_high_open").hide(1);
            $("#write_high_close").show(1);
        });
        $("#write_high_close").click(function() {
            $("#write_high").hide();
            $("#write_high_close").hide(1);
            $("#write_high_open").show(1);
        });
    </script>
  
    <script>
	
	$('#password').modal(options);
    $('#example').popover(options);
    
    </script>
    </html>