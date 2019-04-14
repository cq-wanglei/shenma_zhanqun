<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo ($title); ?></title>
    <meta name="description" content="<?php echo ($description); ?>" />
    <meta name="keywords" content="<?php echo ($keywords); ?>" />
    <link rel="stylesheet" href="/Public/css/style.css" type="text/css" />
    <script language="javascript" type="text/javascript" src="/Public/js/dedeajax2.js"></script>
</head>
<body class="Mubanzhijia_Com">
<div class="Top">
    <span><a href="/login.php" target="_blank">会员登录</a> - <a href="/login.php" target="_blank">用户注册</a> - <a href=""onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo ($webdomian); ?>');">设为首页</a> - <a href="javascript:window.external.AddFavorite('<?php echo ($webdomian); ?>','<?php echo ($title); ?>')">加入收藏</a> - <a href="/sitemap.html" target="_blank">网站地图</a></span>
    <?php echo ($title); ?>(<?php echo ($webdomian); ?>)！
</div>
<div class="Head">
    <div class="logo FL"><h1><a href="<?php echo ($webdomian); ?>"><img src="/Public/images/logo.jpg" alt="<?php echo ($title); ?>" /></a></h1></div>
</div>
<div class="Nav">
    <a href='/'>主页</a>
    <?php if(is_array($lanmus)): $i = 0; $__LIST__ = $lanmus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><a href='/list-<?php echo ($vi["id"]); ?>.html'><?php echo ($vi["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div class="Nav_box">
    <div class="so FR">
        <form action="/search.php" name="formsearch">
            <input type="hidden" name="kwtype" value="0" />
            <input name="keyword" type="text" class="search-keyword FL" id="search-keyword" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}"  onblur="if(this.value==''){this.value='在这里搜索...';}"/>
            <button type="submit" class="search-submit FL">搜索</button>
        </form>
    </div>
</div>
<!-- /header -->
<div class="main4">
    <div class="m4_left FL">
        <div class="m4_t1">当前位置：<a href='/'>主页</a> > <a href='/list-<?php echo ($lanmu_names['id']); ?>.html'><?php echo ($lanmu_names['name']); ?></a> > </div>
        <ul class="m4_box1">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><li><span><?php
 if(!empty($vi['creattime'])){ echo date("Y-m-d",$vi["creattime"]); }else{ echo date("Y-m-d",time()); } ?></span>·<a href="/page-<?php echo ($vi["id"]); ?>.html"><?php echo ($vi["tagname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="dede_pages">
            <ul class="pagelist">
            </ul>
        </div>
    </div>
    <div class="m4_right FR">
    <div class="m4_box2">
        <div class="m4_t2">栏目分类</div>
        <ul class="m4_box10">

            <div class="clear"></div>
        </ul>
    </div>
    <div class="m4_box2">
        <div class="m4_t2">最新内容</div>
        <ul>
            <?php if(is_array($r1)): $i = 0; $__LIST__ = $r1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><li>·<a href="/page-<?php echo ($vi["id"]); ?>.html"><?php echo ($vi["tagname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="m4_box20">
        <div class="m4_t2">推荐内容</div>
        <ul>
            <?php if(is_array($r2)): $i = 0; $__LIST__ = $r2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><li><a href="/page-<?php echo ($vi["id"]); ?>.html"><img src="<?php echo ($vi["img"]); ?>" alt="<?php echo ($vi["tagname"]); ?>" /><?php echo ($vi["tagname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="clear"></div>
        </ul>
    </div>
    <div class="m4_box2">
        <div class="m4_t2">热点内容</div>
        <ul>
            <?php if(is_array($r3)): $i = 0; $__LIST__ = $r3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><li>·<a href="/page-<?php echo ($vi["id"]); ?>.html"><?php echo ($vi["tagname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
</div>
    <div class="clear"></div>
</div>
<div class="flink">
    <div class="flink_tit"><a href="/flink.php" target="_blank">--  友情链接 --</a></div>
    <ul class="f5">
        <li><a href="/flink_add.php" target="_blank" style="color:#c10000">申请加入</a></li>
    </ul>
</div>
<div class="footer">
    <p>
        <a href="#">关于网站</a>  |
        <a href="#">网站声明</a>  |
        <a href="#">用户反馈</a>  |
        <a href="#">合作伙伴</a>  |
        <a href="#">友情链接</a>  |
        <a href="#">联系我们</a>  |
        <a href="#">服务收费</a>
    </p>
    <p><a href="/" target="_blank">情感网</a> 版权所有 </p>
</div>
<!-- /footer -->

</body>
</html>