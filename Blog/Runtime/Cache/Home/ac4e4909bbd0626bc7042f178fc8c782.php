<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php echo (C("blogname")); ?>_<?php echo (C("subtitle")); ?></title>
     <!--[if lt IE 9]>
        <script src="/Template/Default/Style/Js/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/Template/Default/Style/Css/normalize.css">
    <link rel="stylesheet" href="/Template/Default/Style/Css/style.css">
    <meta name="keywords" content="<?php echo (C("keywords")); ?>" />
    <meta name="description" content="<?php echo (C("description")); ?>">

</head> 
<body>
<header id="header" class="clearfix">
    <div class="container">
        <div class="col-group">
            <div class="site-name">
                <a id="logo" href="">
                   <?php echo (C("blogname")); ?>
                </a>
                                    <h1><?php echo (C("blogname")); ?></h1>
                            </div>
            <div>
                <nav id="nav-menu" class="clearfix">
          <?php if(is_array($menu)): foreach($menu as $key=>$m): ?><a class="
          <?php if(($m["mname"] == 关于)): ?>current<?php else: endif; ?>" 
          
          href="/<?php echo ($m["url"]); ?>"  title="<?php echo ($m["mname"]); ?>"><?php echo ($m["mname"]); ?></a><?php endforeach; endif; ?>
				</nav>
            </div>
        </div>
    </div>
</header>
<div id="body">
    <div class="container">
        <div class="col-group"><div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h1 class="post-title">
					<?php echo ($one["title"]); ?>
				</h1>
			</header>
			<div class="page-content post-content">
				<p>	<?php echo (htmlspecialchars_decode($one["content"])); ?></p>
			</div>
		</article>
		<div id="comments">
                </div>	</div>
</div>
		</div>
    </div>
</div>
<footer id="footer">
	<div class="container">
		<?php echo (C("copy")); ?>
	</div>
</footer> 
</body>
</html>