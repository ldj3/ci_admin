<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <base href = "<?php echo $base_url;?>"/>
    <meta name="Keywords" content="网站关键词">
    <meta name="Description" content="网站介绍">
    <link rel="stylesheet" href="./public/login/css/base.css">
    <link rel="stylesheet" href="./public/login/css/iconfont.css">
    <link rel="stylesheet" href="./public/login/css/reg.css">
</head>
<body>
<div id="ajax-hook"></div>
<div class="wrap">
    <div class="wpn">
        <div class="form-data pos">
            <a href="javascript:void(0)"><img src="./public/login/img/logo.png" class="head-logo"></a>
            <div class="form1">
                <p class="p-input pos">
                    <input type="text" id="num" placeholder="手机号/账号" >
                    <span class="tel-warn num-err hide"><em>账号或密码错误，请重新输入</em><i class="icon-warn"></i></span>
                </p>
                <p class="p-input pos">
                    <input type="password" style="display:none"/>
                    <input type="password" id="pass" autocomplete="new-password" placeholder="请输入密码">
                    <span class="tel-warn pass-err hide"><em>账号或密码错误，请重新输入</em><i class="icon-warn"></i></span>
                </p>
                <p class="p-input pos code hide">
                    <label for="veri">请输入验证码</label>
                    <input type="text" id="veri">
                    <img src="">
                    <span class="tel-warn img-err hide"><em>账号或密码错误，请重新输入</em><i class="icon-warn"></i></span>
                    <!-- <a href="javascript:;">换一换</a> -->
                </p>
            </div>
            <div class="form2 hide">
                <p class="p-input pos">
                    <label for="num2">手机号</label>
                    <input type="number" id="num2">
                    <span class="tel-warn num2-err hide"><em>账号或密码错误</em><i class="icon-warn"></i></span>
                </p>
                <p class="p-input pos">
                    <label for="veri-code">输入验证码</label>
                    <input type="number" id="veri-code">
                    <a href="javascript:;" class="send">发送验证码</a>
                    <span class="time hide"><em>120</em>s</span>
                    <span class="tel-warn error hide">验证码错误</span>
                </p>
            </div>
            <button class="lang-btn off log-btn">登录</button>
            <p class="right"><?php echo OWER; ?></p>
        </div>
    </div>
</div>
<script src="./public/login/js/jquery.js"></script>
<script src="./public/login/js/agree.js"></script>
<script src="./public/login/js/login.js"></script>
<div style="text-align:center;">
</div>
</body>
</html>