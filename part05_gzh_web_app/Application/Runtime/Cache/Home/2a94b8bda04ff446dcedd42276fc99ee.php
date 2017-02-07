<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>公众号</title>
    <meta name="description" content="想看什么电影，关注公众号，告诉我们电影名称"/>
    <meta name="keywords" content="电影"/>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="./Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">object, embed {
        -webkit-animation-duration: .001s;
        -webkit-animation-name: playerInserted;
        -ms-animation-duration: .001s;
        -ms-animation-name: playerInserted;
        -o-animation-duration: .001s;
        -o-animation-name: playerInserted;
        animation-duration: .001s;
        animation-name: playerInserted;
    }

    @-webkit-keyframes playerInserted {
        from {
            opacity: 0.99;
        }
        to {
            opacity: 1;
        }
    }

    @-ms-keyframes playerInserted {
        from {
            opacity: 0.99;
        }
        to {
            opacity: 1;
        }
    }

    @-o-keyframes playerInserted {
        from {
            opacity: 0.99;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes playerInserted {
        from {
            opacity: 0.99;
        }
        to {
            opacity: 1;
        }
    }


    </style>
</head>


<body>

<div class="header">
    <div class="logo"><a href="http://www.baidu.com"><img width="126" height="35" alt="logo"
                                                          src="/uploads/160920/4-16092019551MC.png"></a></div>
    <form id="ffsearch" name="ffsearch" method="post" action="/plus/search.php">
        <div class="input-append">
            <input class="input-block-level" type="text" placeholder="输入影片名进行搜索" name="q">
            <button class="btn" type="button">搜索</button>
        </div>
    </form>
</div>
<header>
    <div class="nav-wrapper">
        <ul class="nav nav-tabs">
            <li class="active"><a href='/zuixin/'>最新电影</a></li>
            <li><a href='/jingdian/'>经典合集</a></li>
            <li><a href='/renwu/'>人物系列</a></li>
            <li><a href='/zongyi/'>综艺</a></li>
            <li><a href='/dianshiju/'>电视剧</a></li>
            <li><a href='/yanchanghui/'>演唱会</a></li>

        </ul>
    </div>
</header>

<DIV align="center">
    <a href="/uploads/170118/4-1F11R3335DP.jpg">
        <img src="/uploads/170118/4-1F11R333102L.jpg" width="100%" border="0"/>
    </a>
</DIV>


<div id="content">
    <div class="c-box" id="resize_list">
        <div class="title" align="center"><h2>热门最新电影推荐：</h2></div>
        <div class="plist">
            <ul class="list_tab_img">
                <?php
 foreach( $data as $item){ echo '<li><a href="/dianying/2017/0207/4325.html">
                <div class="picsize">
                    <img src="/uploads/170207/4-1F20H15321200.JPG">
                    <label class="title"></label>
                    <label class="name">'.$item['title'].'</label>
                </div>
            </a>
                </li>'; } ?>
            </ul>
        </div>


    </div>
</div>

<!--<DIV align="center">-->
<!--<font color="red"><b>➷想看什么电影，关注下面公众号↓↓告诉我们电影名称⇙</b></font>-->
<!--<font color="blue"><b>➷假如有哪部电影失效了↓↓也告诉我们电影名称⇙</b></font>-->
<!--<img src="/uploads/161123/4-161123161142I5.jpg" width="100%" border="0"/>-->
<!--<font color="red"><b>▲长按二维码“识别”关注▲</b></font>-->
<!--</DIV>-->

<div class="profile_info">
    <a id="weui_btn" class="btn btn-block btn-info" href="http://www.58look.cn/dianying/">
        <div class="profile_opr">点击更多热门电影</div>
    </a>
</div>


<!--<div id="content">-->
    <!--<div class="c-box" id="resize_list">-->
        <!--<div class="title"><h2>热门电视剧推荐：</h2></div>-->
        <!--<div class="plist">-->
            <!--<ul class="list_tab_img">-->

                <!--<li>-->
                    <!--<a href="/dianshiju/_shentanxialuoke4_/">-->
                        <!--<div class="picsize">-->
                            <!--<img src="/uploads/170105/4-1F105015K4b2.JPG">-->
                            <!--<label class="title"></label>-->
                            <!--<label class="name">《神探夏洛克4》</label>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            <!--</ul>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->


<!--<DIV align="center">-->
    <!--<a href="http://mp.weixin.qq.com/s/nPiTn4pv2d2lqVoUKAS3vw">-->
        <!--<img src="/uploads/161125/4-161125115555431.jpg" width="100%" border="0"/>-->
    <!--</a>-->
<!--</DIV>-->


<!--<div class="profile_info">-->
    <!--<a id="weui_btn" href="http://www.58look.cn/dianshiju/">-->
        <!--<div class="profile_opr">点击更多电视剧</div>-->
    <!--</a>-->
<!--</div>-->

<!--<div id="content">-->
    <!--<div class="c-box" id="resize_list">-->
        <!--<div class="title"><h2>热门演唱会推荐：</h2></div>-->
        <!--<div class="plist">-->
            <!--<ul class="list_tab_img">-->

                <!--<li>-->
                    <!--<a href="/yanchanghui/BEYOND/">-->
                        <!--<div class="picsize">-->
                            <!--<img src="/uploads/161031/4-161031005R53a.jpg">-->
                            <!--<label class="title"></label>-->
                            <!--<label class="name">BEYOND</label>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            <!--</ul>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->


<!--<DIV align="center">-->
    <!--<a href="http://mp.weixin.qq.com/s/nPiTn4pv2d2lqVoUKAS3vw">-->
        <!--<img src="/uploads/161125/4-161125115555431.jpg" width="100%" border="0"/>-->
    <!--</a>-->
<!--</DIV>-->


<!--<div class="profile_info">-->
    <!--<a id="weui_btn" href="http://www.58look.cn/yanchanghui/">-->
        <!--<div class="profile_opr">点击更多演唱会</div>-->
    <!--</a>-->
<!--</div>-->

<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    if (top.location != self.location) {
        top.location = self.location;//防止页面被框架包含
    }
</script>
<div id="footer">Copyright &copy; 狂人影院 | <a href="#header">回到顶部</a> 如有侵权请发邮件至：ys933@qq.com 我们会及时删除侵权内容，谢谢合作。</div>


</div></div></div></div></div>


</body>
</html>