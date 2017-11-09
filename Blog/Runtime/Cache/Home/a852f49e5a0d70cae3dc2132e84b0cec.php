<?php if (!defined('THINK_PATH')) exit();?>﻿
<section class="widget">

<h3 class="widget-title">其它</h3>
    <ul class="widget-list">
       <?php if(($_SESSION['id']== 1)): ?><li><a  href="<?php echo U('Admin/Index/login_out');?>">退出后台</a></li>
                          <?php else: ?>
                                <li><a href="/Admin">登陆后台</a></li><?php endif; ?>
      
      
      
      <li><a href="http://www.kyomini.com">KyoMini</a></li>

</ul>
<div style="display:none"><script src="http://s5.cnzz.com/z_stat.php?id=1253237888&web_id=1253237888" language="JavaScript"></script></div>

</section>