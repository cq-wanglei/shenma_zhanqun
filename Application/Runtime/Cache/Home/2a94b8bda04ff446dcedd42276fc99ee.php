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
<div class="main1">
    <div class="m1_left FL">
        <div class="m1_box1 FL">
            <h2><a href="/page-<?php echo ($t24[0]['id']); ?>.html"><?php echo ($t24[0]['tagname']); ?></a></h2>
            <p>篇一、<?php echo ($t24[0]['tagname']); ?> <?php echo str_replace('<p>','',mb_substr($t24[0]['neirong'], 0,15,'utf-8')); ?>…<a href="#">[详细]</a></p>

        </div>
        <ul class="m1_box2 FL">
            <?php $__FOR_START_3656__=1;$__FOR_END_3656__=4;for($i=$__FOR_START_3656__;$i < $__FOR_END_3656__;$i+=1){ ?><li><a href="/page-<?php echo ($t24[$i]['id']); ?>.html"><img src="<?php echo ($t24[$i]['img']); ?>" alt="<?php echo ($t24[$i]['tagname']); ?>" /><br /><?php echo ($t24[$i]['tagname']); ?></a></li><?php } ?>
        </ul>
        <ul class="m1_box3 FL">
            <?php $__FOR_START_13537__=4;$__FOR_END_13537__=17;for($i=$__FOR_START_13537__;$i < $__FOR_END_13537__;$i+=1){ ?><li>·<a href="/page-<?php echo ($t24[$i]['id']); ?>.html"><?php echo ($t24[$i]['tagname']); ?></a></li><?php } ?>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="m1_right FR">
        <div class="m1_box4">
            <script language='javascript'>
                linkarr = new Array();
                picarr = new Array();
                textarr = new Array();
                var swf_width=406;
                var swf_height=250;
                //文字颜色|文字位置|文字背景颜色|文字背景透明度|按键文字颜色|按键默认颜色|按键当前颜色|自动播放时间|图片过渡效果|是否显示按钮|打开方式
                var configtg='0xffffff|0|0xc10000|5|0xffffff|0xC5DDBC|0x000033|2|3|1|_blank';
                var files = "";
                var links = "";
                var texts = "";
                //这里设置调用标记
                <?php $a1 = 1; ?>
                <?php $__FOR_START_16902__=17;$__FOR_END_16902__=22;for($i=$__FOR_START_16902__;$i < $__FOR_END_16902__;$i+=1){ ?>linkarr[<?php echo ($a1); ?>] = "/page-<?php echo ($t24[$i]['id']); ?>.html";
                    picarr[<?php echo ($a1); ?>]  = "<?php echo ($t24[$i]['img']); ?>";
                    textarr[<?php echo ($a1); ?>] = "<?php echo ($t24[$i]['tagname']); ?>";
                    <?php $a1 = $a1 + 1; } ?>

                for(i=1;i<picarr.length;i++){
                    if(files=="") files = picarr[i];
                    else files += "|"+picarr[i];
                }
                for(i=1;i<linkarr.length;i++){
                    if(links=="") links = linkarr[i];
                    else links += "|"+linkarr[i];
                }
                for(i=1;i<textarr.length;i++){
                    if(texts=="") texts = textarr[i];
                    else texts += "|"+textarr[i];
                }
                document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
                document.write('<param name="movie" value="/Public/images/bcastr3.swf"><param name="quality" value="high">');
                document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
                document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'">');
                document.write('<embed src="/Public/images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'&menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>');
            </script>
        </div>
        <div class="m1_box5">
            <ul>
                <?php $__FOR_START_8391__=22;$__FOR_END_8391__=24;for($i=$__FOR_START_8391__;$i < $__FOR_END_8391__;$i+=1){ ?><li>
                        <a href="/page-<?php echo ($t24[$i]['id']); ?>.html"><img src="<?php echo ($t24[$i]['img']); ?>" alt="<?php echo ($t24[$i]['tagname']); ?>" /></a>
                        <h3><a href="/page-<?php echo ($t24[$i]['id']); ?>.html"><?php echo ($t24[$i]['tagname']); ?></a></h3>
                        <p>篇一、<?php echo ($t24[$i]['tagname']); ?> <?php echo str_replace('<p>','',mb_substr($t24[$i]['neirong'], 0,15,'utf-8')); ?>...</p>
                    </li><?php } ?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="main2">
    <div class="m2_box1">
        <div class="m2_box2 FL">
            <div class="m2_tit">
                <h3><a href="/list-<?php echo ($lanmus[0]['id']); ?>.html"><?php echo ($lanmus[0]['name']); ?></a></h3>
                <span><a href="/list-<?php echo ($lanmus[0]['id']); ?>.html">更多</a></span>
            </div>
            <div class="m2_box3">
                <a href="/page-<?php echo ($z1[0]['id']); ?>.html"><img src="<?php echo ($z1[0]['img']); ?>" alt="<?php echo ($z1[0]['tagname']); ?>" /></a>
                <h4><a href="/page-<?php echo ($z1[0]['id']); ?>.html"><?php echo ($z1[0]['tagname']); ?></a></h4>
                <p>篇一、<?php echo ($z1[0]['tagname']); echo str_replace('<p>','',mb_substr($z1[0]['neirong'], 0,15,'utf-8')); ?>...</p>
            </div>
            <ul class="m2_box4">
                <?php $__FOR_START_18164__=1;$__FOR_END_18164__=7;for($i=$__FOR_START_18164__;$i < $__FOR_END_18164__;$i+=1){ ?><li>·<a href="/page-<?php echo ($z1[$i]['id']); ?>.html"><?php echo (mb_substr($z1[$i]['tagname'], 0,15,'utf-8')); ?></a></li><?php } ?>
            </ul>
        </div>
        <div class="m2_box2 FL">
        <div class="m2_tit">
            <h3><a href="/list-<?php echo ($lanmus[1]['id']); ?>.html"><?php echo ($lanmus[1]['name']); ?></a></h3>
            <span><a href="/list-<?php echo ($lanmus[1]['id']); ?>.html">更多</a></span>
        </div>
        <div class="m2_box3">
            <a href="/page-<?php echo ($z2[0]['id']); ?>.html"><img src="<?php echo ($z2[0]['img']); ?>" alt="<?php echo ($z2[0]['tagname']); ?>" /></a>
            <h4><a href="/page-<?php echo ($z2[0]['id']); ?>.html"><?php echo ($z2[0]['tagname']); ?></a></h4>
            <p>篇一、<?php echo ($z2[0]['tagname']); echo str_replace('<p>','',mb_substr($z2[0]['neirong'], 0,15,'utf-8')); ?>...</p>
        </div>
        <ul class="m2_box4">
            <?php $__FOR_START_15901__=1;$__FOR_END_15901__=7;for($i=$__FOR_START_15901__;$i < $__FOR_END_15901__;$i+=1){ ?><li>·<a href="/page-<?php echo ($z2[$i]['id']); ?>.html"><?php echo (mb_substr($z2[$i]['tagname'], 0,15,'utf-8')); ?></a></li><?php } ?>
        </ul>
    </div>
        <div class="m2_box2 FL">
        <div class="m2_tit">
            <h3><a href="/list-<?php echo ($lanmus[2]['id']); ?>.html"><?php echo ($lanmus[2]['name']); ?></a></h3>
            <span><a href="/list-<?php echo ($lanmus[2]['id']); ?>.html">更多</a></span>
        </div>
        <div class="m2_box3">
            <a href="/page-<?php echo ($z3[0]['id']); ?>.html"><img src="<?php echo ($z3[0]['img']); ?>" alt="<?php echo ($z3[0]['tagname']); ?>" /></a>
            <h4><a href="/page-<?php echo ($z3[0]['id']); ?>.html"><?php echo ($z3[0]['tagname']); ?></a></h4>
            <p>篇一、<?php echo ($z3[0]['tagname']); echo str_replace('<p>','',mb_substr($z3[0]['neirong'], 0,15,'utf-8')); ?>...</p>

        </div>
        <ul class="m2_box4">
            <?php $__FOR_START_30866__=1;$__FOR_END_30866__=7;for($i=$__FOR_START_30866__;$i < $__FOR_END_30866__;$i+=1){ ?><li>·<a href="/page-<?php echo ($z3[$i]['id']); ?>.html"><?php echo (mb_substr($z3[$i]['tagname'], 0,15,'utf-8')); ?></a></li><?php } ?>

        </ul>
    </div>
        <div class="m2_box2 FL">
        <div class="m2_tit">
            <h3><a href="/list-<?php echo ($lanmus[3]['id']); ?>.html"><?php echo ($lanmus[3]['name']); ?></a></h3>
            <span><a href="/list-<?php echo ($lanmus[3]['id']); ?>.html">更多</a></span>
        </div>
        <div class="m2_box3">
            <a href="/page-<?php echo ($z4[0]['id']); ?>.html"><img src="<?php echo ($z4[0]['img']); ?>" alt="<?php echo ($z4[0]['tagname']); ?>" /></a>
            <h4><a href="/page-<?php echo ($z4[0]['id']); ?>.html"><?php echo ($z4[0]['tagname']); ?></a></h4>
            <p>篇一、<?php echo ($z4[0]['tagname']); echo str_replace('<p>','',mb_substr($z4[0]['neirong'], 0,15,'utf-8')); ?>...</p>

        </div>
        <ul class="m2_box4">
            <?php $__FOR_START_611__=1;$__FOR_END_611__=7;for($i=$__FOR_START_611__;$i < $__FOR_END_611__;$i+=1){ ?><li>·<a href="/page-<?php echo ($z4[$i]['id']); ?>.html"><?php echo (mb_substr($z4[$i]['tagname'], 0,15,'utf-8')); ?></a></li><?php } ?>

        </ul>
    </div>
        <div class="m2_box2 FL">
        <div class="m2_tit">
            <h3><a href="/list-<?php echo ($lanmus[4]['id']); ?>.html"><?php echo ($lanmus[4]['name']); ?></a></h3>
            <span><a href="/list-<?php echo ($lanmus[4]['id']); ?>.html">更多</a></span>
        </div>
        <div class="m2_box3">
            <a href="/page-<?php echo ($z5[0]['id']); ?>.html"><img src="<?php echo ($z5[0]['img']); ?>" alt="<?php echo ($z5[0]['tagname']); ?>" /></a>
            <h4><a href="/page-<?php echo ($z5[0]['id']); ?>.html"><?php echo ($z5[0]['tagname']); ?></a></h4>
            <p>篇一、<?php echo ($z5[0]['tagname']); echo str_replace('<p>','',mb_substr($z5[0]['neirong'], 0,15,'utf-8')); ?>...</p>

        </div>
        <ul class="m2_box4">
            <?php $__FOR_START_24160__=1;$__FOR_END_24160__=7;for($i=$__FOR_START_24160__;$i < $__FOR_END_24160__;$i+=1){ ?><li>·<a href="/page-<?php echo ($z5[$i]['id']); ?>.html"><?php echo (mb_substr($z5[$i]['tagname'], 0,15,'utf-8')); ?></a></li><?php } ?>
        </ul>
    </div>
        <div class="m2_box2 FL">
        <div class="m2_tit">
            <h3><a href="/list-<?php echo ($lanmus[5]['id']); ?>.html"><?php echo ($lanmus[5]['name']); ?></a></h3>
            <span><a href="/list-<?php echo ($lanmus[5]['id']); ?>.html">更多</a></span>
        </div>
        <div class="m2_box3">
            <a href="/page-<?php echo ($z6[0]['id']); ?>.html"><img src="<?php echo ($z6[0]['img']); ?>" alt="<?php echo ($z6[0]['tagname']); ?>" /></a>
            <h4><a href="/page-<?php echo ($z6[0]['id']); ?>.html"><?php echo ($z6[0]['tagname']); ?></a></h4>
            <p>篇一、<?php echo ($z6[0]['tagname']); echo str_replace('<p>','',mb_substr($z6[0]['neirong'], 0,15,'utf-8')); ?>...</p>

        </div>
        <ul class="m2_box4">
            <?php $__FOR_START_7961__=1;$__FOR_END_7961__=7;for($i=$__FOR_START_7961__;$i < $__FOR_END_7961__;$i+=1){ ?><li>·<a href="/page-<?php echo ($z6[$i]['id']); ?>.html"><?php echo (mb_substr($z6[$i]['tagname'], 0,15,'utf-8')); ?></a></li><?php } ?>

        </ul>
    </div>
        <div class="m2_box2 FL">
        <div class="m2_tit">
            <h3><a href="/list-<?php echo ($lanmus[6]['id']); ?>.html"><?php echo ($lanmus[6]['name']); ?></a></h3>
            <span><a href="/list-<?php echo ($lanmus[6]['id']); ?>.html">更多</a></span>
        </div>
        <div class="m2_box3">
            <a href="/page-<?php echo ($z7[0]['id']); ?>.html"><img src="<?php echo ($z7[0]['img']); ?>" alt="<?php echo ($z7[0]['tagname']); ?>" /></a>
            <h4><a href="/page-<?php echo ($z7[0]['id']); ?>.html"><?php echo ($z7[0]['tagname']); ?></a></h4>
            <p>篇一、<?php echo ($z7[0]['tagname']); echo str_replace('<p>','',mb_substr($z7[0]['neirong'], 0,15,'utf-8')); ?>...</p>

        </div>
        <ul class="m2_box4">
            <?php $__FOR_START_3038__=1;$__FOR_END_3038__=7;for($i=$__FOR_START_3038__;$i < $__FOR_END_3038__;$i+=1){ ?><li>·<a href="/page-<?php echo ($z7[$i]['id']); ?>.html"><?php echo (mb_substr($z7[$i]['tagname'], 0,15,'utf-8')); ?></a></li><?php } ?>

        </ul>
    </div>
        <div class="m2_box2 FL">
        <div class="m2_tit">
            <h3><a href="/list-<?php echo ($lanmus[7]['id']); ?>.html"><?php echo ($lanmus[7]['name']); ?></a></h3>
            <span><a href="/list-<?php echo ($lanmus[7]['id']); ?>.html">更多</a></span>
        </div>
        <div class="m2_box3">
            <a href="/page-<?php echo ($z8[0]['id']); ?>.html"><img src="<?php echo ($z8[0]['img']); ?>" alt="<?php echo ($z8[0]['tagname']); ?>" /></a>
            <h4><a href="/page-<?php echo ($z8[0]['id']); ?>.html"><?php echo ($z8[0]['tagname']); ?></a></h4>
            <p>篇一、<?php echo ($z8[0]['tagname']); echo str_replace('<p>','',mb_substr($z8[0]['neirong'], 0,15,'utf-8')); ?>...</p>

        </div>
        <ul class="m2_box4">
            <?php $__FOR_START_25023__=1;$__FOR_END_25023__=7;for($i=$__FOR_START_25023__;$i < $__FOR_END_25023__;$i+=1){ ?><li>·<a href="/page-<?php echo ($z8[$i]['id']); ?>.html"><?php echo (mb_substr($z8[$i]['tagname'], 0,15,'utf-8')); ?></a></li><?php } ?>

        </ul>
    </div>
        <div class="m2_box2 FL">
            <div class="m2_tit">
                <h3><a href="/list-<?php echo ($lanmus[8]['id']); ?>.html"><?php echo ($lanmus[8]['name']); ?></a></h3>
                <span><a href="/list-<?php echo ($lanmus[8]['id']); ?>.html">更多</a></span>
            </div>
            <div class="m2_box3">
                <a href="/page-<?php echo ($z9[0]['id']); ?>.html"><img src="<?php echo ($z9[0]['img']); ?>" alt="<?php echo ($z9[0]['tagname']); ?>" /></a>
                <h4><a href="/page-<?php echo ($z9[0]['id']); ?>.html"><?php echo ($z9[0]['tagname']); ?></a></h4>
                <p>篇一、<?php echo ($z9[0]['tagname']); echo str_replace('<p>','',mb_substr($z9[0]['neirong'], 0,15,'utf-8')); ?>...</p>

            </div>
            <ul class="m2_box4">
                <?php $__FOR_START_140__=1;$__FOR_END_140__=7;for($i=$__FOR_START_140__;$i < $__FOR_END_140__;$i+=1){ ?><li>·<a href="/page-<?php echo ($z9[$i]['id']); ?>.html"><?php echo (mb_substr($z9[$i]['tagname'], 0,15,'utf-8')); ?></a></li><?php } ?>

            </ul>
        </div>
        <div class="clear"></div>
    </div>
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