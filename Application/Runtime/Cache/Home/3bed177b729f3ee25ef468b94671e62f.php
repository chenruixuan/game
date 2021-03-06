<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>16分以下不要再玩手机了！</title>
    <meta name="description" content="还在玩手机吗？看看自己的视力水平再说吧！">
    <meta name="keywords" content="色觉測試,色弱测试,手机旅游,小游戏">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
    <meta http-equiv="expires" content="-1">
    <meta property="og:title" content="16分以下不要再玩手机了！">
    <meta property="og:description" content="你想知道自己的色彩分辨能力有多强吗？快來进行免费的色彩测试。找出所有色块里颜色不同的一个!">
    <meta name="x-share-desc" content="你想知道自己的色彩分辨能力有多強吗？快来进行免费的视觉测试！" data-custom="你想知道自己的色彩分辨能力有多強吗？快来进行免费的视觉测试！">
    <meta name="x-share-icon" content="games/color/icon.png">
    <script src="/Public/Home/Color/zepto.min.js"></script>
    <script src="/Public/Home/Color/core.min.js"></script>
    <meta property="og:image" content="icon.png">
    <link rel="stylesheet" href="/Public/Home/Color/m.css">
    <script type="text/javascript" async="" src="/Public/Home/Color/linkid.js"></script>
    <script type="text/javascript" async="" src="/Public/Home/Color/color.min.js"></script>
    <style>
        #mask {
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            display: none;
            position: fixed;
            z-index: 999;
            background-color: rgba(0, 0, 0, 0.5);
        }

        #mask img {
            top: 0px;
            right: 20px;
            position: absolute;
        }
    </style>
</head>

<body>
<img src="/Public/Home/Color/share_logo.gif" width="0" height="0" style="position:absolute">

<div id="mask" onclick="javascript:$('#mask').css('display', 'none');"><img src="/Public/Home/Color/share_white.gif"></div>
<div class="grid">
    <div class="page hide" id="index" style="display: block;">
        <h1>测测你的视力有多强</h1>

        <h1>The Color !</h1>

        <div id="help">找出所有色块里颜色不同的一个
            <br>Click on the tile that has a different color
        </div>
        <div class="btns">
            <button data-type="color" class="btn play-btn">
                开始测试
            </button>
            <br>

            <div align="center">

            </div>
        </div>

    </div>
    <div class="page hide" id="room">
        <header>
                <span class="lv">
                    得分：
                    <em>
                        0
                    </em>
                </span>
                <span class="time">
                </span>
                <span class="btn btn-pause">
                    暂停
                </span>
        </header>
        <div id="box" class="lv1">
        </div>
        <div style="position:absolute;left:20%;bottom: 5px;"><span><!--ad--></span></div>
    </div>
    <div class="page hide" id="dialog">
        <div class="inner">
            <div class="content gameover">
                <h2 style="font-size:28px;margin:5px;">0分</h2>

                <p>
                    你的视力达到以下动物的水平：
                </p>

                <h3></h3>

                <div class="btn-wrap">
                    <!--<a class="btn btn-boyaa" href="#" onclick="javascript:void(0)" style="background-color: red;">分享</a>-->
                    <!--<a class="btn btn-boyaa" href="#"-->
                    <!--onclick="javascript:$('#mask').css('display', 'block');" style="background-color: red;">分享</a>-->
                    <button class="btn btn-restart">
                        再玩一次
                    </button>
                </div>
                <br>
            </div>
            <div class="content pause">
                <h3>
                    游戏暂停
                </h3>

                <div class="btn-wrap">
                    <button class="btn btn-resume">
                        继续
                    </button>
                    <div id="ad_control">
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="appendflag" value="1"/>

<script>
    (function () {
        var libs = document.createElement('script');
        libs.type = 'text/javascript';
        libs.async = true;
        libs.src = '/Public/Home/Color/color.min.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(libs, s);
    })();
</script>
<script src="/Public/Home/Color/bottom.min.js"></script>
</body>
</html>