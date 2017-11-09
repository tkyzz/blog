<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-tw">
<head>
<title>Aimee Mini Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link rel="stylesheet" href="/Admin/Template/Public/css/bootstrap.css">
<link rel="stylesheet" href="/Admin/Template/Public/css/admin.css">
</head>

<div class="container"> 
  <div class="page-header">
    <h3>404!</h3>
  </div>
  <div class="MiniBox2" style="padding-top:20px"> 我想，你走错地方了。<br>
   <a href="javascript:history.go(-1)">返回</a> </div>
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