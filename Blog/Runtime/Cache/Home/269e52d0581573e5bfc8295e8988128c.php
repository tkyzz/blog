<?php if (!defined('THINK_PATH')) exit();?>﻿<section class="widget">
  <h3 class="widget-title">部落格分類</h3>
  <ul class="widget-list">

    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li><a href="/list/<?php echo ($v["cid"]); ?>"><?php echo ($v["cname"]); ?></a>
              <?php if($v["child"]): ?><ul>
                       <?php if(is_array($v["child"])): foreach($v["child"] as $key=>$k): ?><li><a href="<?php echo U('/list/'.$k['cid']);?>"><?php echo ($k["cname"]); ?></a></li><?php endforeach; endif; ?>
                   </ul><?php endif; ?> 
          </li><?php endforeach; endif; ?>

  </ul>
</section>