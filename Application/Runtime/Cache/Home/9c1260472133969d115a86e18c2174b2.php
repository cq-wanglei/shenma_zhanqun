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
        <div class="m4_t1">当前位置：<a href='/'>主页</a> > <a href='/list-<?php echo ($info['lid']); ?>.html'><?php echo ($info['name']); ?></a> >  正文</div>
        <div class="m4_box3">
            <!-- Baidu Button BEGIN -->
            <div id="bdshare" class="bdshare_b" style="line-height: 12px;"><img src="http://bdimg.share.baidu.com/static/images/type-button-5.jpg" />
            </div>
            <script type="text/javascript" id="bdshare_js" data="type=button&uid=336026" ></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <script type="text/javascript">
                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
            </script>
            <!-- Baidu Button END -->
        </div>
        <h2 class="m4_box4"><?php echo ($info['tagname']); ?></h2>
        <div class="m4_box5">时间：<?php echo (date("y-m-d",$info['creattime'])); ?> 12:56 来源：未知 作者：admin 阅读：000次</div>
        <div class="m4_box6">
            <p>
                　　篇一、<?php echo ($info['tagname']); ?>
            </p>
            <p>
                <img src="<?php echo ($info['img']); ?>" alt="<?php echo ($info['tagname']); ?>">
            </p>
            <?php echo ($info['neirong']); ?>
        </div>
        <div class="dede_pagess">
            <ul class="pagelist">
                <li><a>共1页: </a></li><li><a href='#'>上一页</a></li><li class="thisclass"><a href='#'>1</a></li><li><a href='#'>下一页</a></li>
            </ul>
        </div>
        <div class="newdigg" id="newdigg">
            <div class="diggbox digg_good" onmousemove="this.style.backgroundPosition='left bottom';" onmouseout="this.style.backgroundPosition='left top';" onclick="javascript:postDigg('good',2890)">
                <div class="digg_act">顶一下</div>
                <div class="digg_num">(0)</div>
                <div class="digg_percent">
                    <div class="digg_percent_bar"><span style="width:0%"></span></div>
                    <div class="digg_percent_num">0%</div>
                </div>
            </div>
            <div class="diggbox digg_bad" onmousemove="this.style.backgroundPosition='right bottom';" onmouseout="this.style.backgroundPosition='right top';" onclick="javascript:postDigg('bad',2890)">
                <div class="digg_act">踩一下</div>
                <div class="digg_num">(0)</div>
                <div class="digg_percent">
                    <div class="digg_percent_bar"><span style="width:0%"></span></div>
                    <div class="digg_percent_num">0%</div>
                </div>
            </div>
        </div>
        <script language="javascript" type="text/javascript">getDigg(2890);</script>
        <div class="m4_box7">
            上一篇：<a href='/page-<?php echo ($np['id']); ?>.html'><?php echo ($np['tagname']); ?></a> <br />
            下一篇：没有了
        </div>
        <div class="m4_box21">
            <div class="m4_t2">相关内容</div>
            <ul class="m4_box23">
                <?php if(is_array($xiangguan1)): $i = 0; $__LIST__ = $xiangguan1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><li><a href="/page-<?php echo ($vi["id"]); ?>.html"><img src="<?php echo ($vi["img"]); ?>" alt="<?php echo ($vi["tagname"]); ?>" /><?php echo ($vi["tagname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </ul>
            <ul class="m4_box22">
                <?php if(is_array($xiangguan2)): $i = 0; $__LIST__ = $xiangguan2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><li><a href="/page-<?php echo ($vi["id"]); ?>.html"><?php echo ($vi["tagname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
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
<div class="m_pinglun FL">
    <!-- //AJAX评论区 -->
    <!-- //主模板必须要引入/include/dedeajax2.js -->
    <a name='postform'></a>
    <div class="mt1">
        <dl class="tbox">
            <dt>
                <strong>发表评论</strong>
                <span class="more"></span>
            </dt>
            <dd>
                <div class="dede_comment_post">
                    <form action="#" method="post" name="feedback">
                        <input type="hidden" name="dopost" value="send" />
                        <input type="hidden" name="comtype" value="comments">
                        <input type="hidden" name="aid" value="2890" />
                        <input type="hidden" name="fid" id='feedbackfid' value="0" />
                        <div class="dcmp-title">
                            <small>请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论。</small>
                        </div><!-- /dcmp-title -->
                        <!-- <div class="dcmp-stand">
                            <strong>评价:</strong>
                                <input type="radio" name="feedbacktype" checked="1" value="feedback" id="dcmp-stand-neu" /><label for="dcmp-stand-neu"><img src="/templets/default/images/cmt-neu.gif" />中立</label>
                                <input type="radio" name="feedbacktype" value="good" id="dcmp-stand-good" /><label for="dcmp-stand-good"><img src="/templets/default/images/cmt-good.gif" />好评</label>
                                <input type="radio" name="feedbacktype" value="bad" id="dcmp-stand-bad" /><label for="dcmp-stand-bad"><img src="/templets/default/images/cmt-bad.gif" />差评</label>
                        </div>/dcmp-stand -->
                        <!--<div class="clr"></div>
                        <div class="dcmp-mood">
                            <ul>
                                    <li><input type="radio" name="face" value="1" checked="1" /><img src="/templets/default/images/mood/ico-mood-1.gif" /></li>
                                    <li><input type="radio" name="face" value="2"/><img src="/templets/default/images/mood/ico-mood-2.gif" /></li>
                                    <li><input type="radio" name="face" value="3"/><img src="/templets/default/images/mood/ico-mood-3.gif" /></li>
                                    <li><input type="radio" name="face" value="4"/><img src="/templets/default/images/mood/ico-mood-4.gif" /></li>
                                    <li><input type="radio" name="face" value="5"/><img src="/templets/default/images/mood/ico-mood-5.gif" /></li>
                                    <li><input type="radio" name="face" value="6"/><img src="/templets/default/images/mood/ico-mood-6.gif" /></li>
                                    <li><input type="radio" name="face" value="7"/><img src="/templets/default/images/mood/ico-mood-7.gif" /></li>
                                    <li><input type="radio" name="face" value="8"/><img src="/templets/default/images/mood/ico-mood-8.gif" /></li>
                                    <li><input type="radio" name="face" value="9"/><img src="/templets/default/images/mood/ico-mood-9.gif" /></li>
                                    <li><input type="radio" name="face" value="10"/><img src="/templets/default/images/mood/ico-mood-10.gif" /></li>
                                    <li><input type="radio" name="face" value="11"/><img src="/templets/default/images/mood/ico-mood-11.gif" /></li>
                                    <li><input type="radio" name="face" value="12"/><img src="/templets/default/images/mood/ico-mood-12.gif" /></li>
                            </ul>
                        </div> /dcmp-mood -->
                        <div class="dcmp-content">
                            <textarea cols="60" name="msg" rows="5" class="ipt-txt"></textarea>
                        </div><!-- /dcmp-content -->
                        <div class="dcmp-post"><!--未登陆-->
                            <div class="dcmp-userinfo" id="_ajax_feedback">


                                <input type="checkbox" name="notuser" id="dcmp-submit-guest" /><label for="dcmp-submit-guest" />匿名? </label>
                            </div>

                            <div class="dcmp-submit">
                                <button type="button" onClick='PostComment()'>发表评论</button>
                            </div>
                        </div>
                    </form>
                </div>
            </dd>
        </dl>
    </div><!-- //评论表单区结束 -->

    <!-- //评论内容区 -->
    <a name='commettop'></a>
    <div class="mt1">
        <dl class="tbox">
            <dt>
                <strong>最新评论</strong>
                <span class="more"><a href="/plus/feedback.php?aid=2890">进入详细评论页&gt;&gt;</a></span>
            </dt>
            <!-- //这两个ID的区块必须存在，否则JS会出错 -->
            <dd id='commetcontentNew'></dd>
            <dd id='commetcontent'></dd>
        </dl>
    </div>
    <!--
    //由于评论载入时使用异步传输，因此必须在最后一步加载（DIGG和评论框须放在评论内容前面）
    //如果一定需要提前的把myajax.SendGet改为myajax.SendGet2，但可能会引起页面阻滞
    -->
    <script language='javascript'>
        function LoadCommets(page)
        {
            var taget_obj = document.getElementById('commetcontent');
            var waithtml = "<div style='line-height:50px'><img src='/images/loadinglit.gif' />评论加载中...</div>";
            var myajax = new DedeAjax(taget_obj, true, true, '', 'x', waithtml);
            myajax.SendGet2("/plus/feedback_ajax.php?dopost=getlist&aid=2890&page="+page);
            DedeXHTTP = null;
        }
        function PostComment()
        {
            var f = document.feedback;
            var nface = '6';
            var nfeedbacktype = 'feedback';
            var nvalidate = '';
            var nnotuser = '';
            var nusername = '';
            var npwd = '';
            var taget_obj = $DE('commetcontentNew');
            var waithtml = "<div style='line-height:30px'><img src='/images/loadinglit.gif' />正在发送中...</div>";
            if(f.msg.value=='')
            {
                alert("评论内容不能为空！");
                return;
            }
            if(f.validate)
            {
                if(f.validate.value=='') {
                    alert("请填写验证码！");
                    return;
                }
                else {
                    nvalidate = f.validate.value;
                }
            }
            if(f.msg.value.length > 500)
            {
                alert("你的评论是不是太长了？请填写500字以内的评论。");
                return;
            }
            if(f.feedbacktype) {
                for(var i=0; i < f.feedbacktype.length; i++)
                    if(f.feedbacktype[i].checked) nfeedbacktype = f.feedbacktype[i].value;
            }
            if(f.face) {
                for(var j=0; j < f.face.length; j++)
                    if(f.face[j].checked) nface = f.face[j].value;
            }
            if(f.notuser.checked) nnotuser = '1';
            if(f.username) nusername = f.username.value;
            if(f.pwd) npwd = f.pwd.value;

            var myajax = new DedeAjax(taget_obj, false, true, '', '', waithtml);
            myajax.sendlang = 'gb2312';
            myajax.AddKeyN('dopost', 'send');
            myajax.AddKeyN('aid', '2890');
            myajax.AddKeyN('fid', f.fid.value);
            myajax.AddKeyN('face', nface);
            myajax.AddKeyN('feedbacktype', nfeedbacktype);
            myajax.AddKeyN('validate', nvalidate);
            myajax.AddKeyN('notuser', nnotuser);
            myajax.AddKeyN('username', nusername);
            myajax.AddKeyN('pwd', npwd);
            myajax.AddKeyN('msg', f.msg.value);
            myajax.SendPost2('/plus/feedback_ajax.php');
            f.msg.value = '';
            f.fid.value = 0;
            if(f.validate)
            {
                if($DE('validateimg')) $DE('validateimg').src = "/include/vdimgck.php?"+f.validate.value;
                f.validate.value = '';
            }
        }
        function quoteCommet(fid)
        {
            document.feedback.fid.value = fid;
        }
        LoadCommets(1);
    </script><!-- //评论内容区结束 -->

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