<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/my.css">
</head>
<body>
<div class="mask" style="display: none;"></div>
<div class="psw_reset" style="display: none;">
    <p>密码重置成功</p>
    <a href="">马上去登录...</a>
</div>
<div class="regist_main" style="margin-top:120px">
    <div class="regist_input">
        <span class="regist_span">手机</span>
        <input type="text" placeholder="输入11位手机号">
        <input type='button' class="fr getIdentify" value='发送验证码'>
    </div>

    <div class="regist_input">
        <span class="regist_span">验证码</span>
        <input type="text" placeholder="输入您收到的验证码">
    </div>

    <div class="regist_input">
        <span class="regist_span">新密码</span>
        <input type="text" placeholder="新密码由6-20位字符组成，区分大小写" style="width:550px">
    </div>
    <a href="" class="register_btn">重置密码</a>
</div>

<div class="register_logo">
    <img src="<?php echo (MOBILE); ?>/images/zc-logo.png" alt="">
</div>
</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script src='<?php echo (MOBILE); ?>/js/common.js'></script>
<script src='<?php echo (MOBILE); ?>/js/return.js'></script>
</html>