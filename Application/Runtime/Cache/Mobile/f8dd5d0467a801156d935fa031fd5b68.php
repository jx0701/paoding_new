<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>企业/单位认证</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/index.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/my.css">
</head>
<body>
<div class="mask" style="display:none;"></div>
<div class="identify_tip">
    <p>认证信息提交成功</p>
    <a href="">两个工作日后通知认证结果</a>
</div>

<p class="apply_tit">申请认证</p>
<p class="apply_tip">你当前未通过平台合格认证，请填写认证信息！</p>
<div class="my_content">
    <div class="apply_content_box clear">
        <span class='apply_word fl'>手机号</span>
        <input class='apply_means fr' type="text" value="159****6033" readonly="readonly">
    </div>


    <div class="apply_content_box chose clear">
        <span class='apply_word fl'>企业/单位名</span>
        <input class='apply_means fr' type="text" placeholder="请输入企业/单位名">
    </div>


    <div class="apply_content_box chose clear">
        <span class='apply_word fl'>主营业务</span>
        <input class='apply_means fr' type="text" placeholder="请输入主营业务">
    </div>

    <div class="apply_content_box chose clear">
        <span class='apply_word fl'>企业地址</span>
        <input class='apply_means fr' type="text" placeholder="省--市--区--街">
    </div>

    <div class="apply_content_box chose clear">
        <span class='apply_word fl'>联系人</span>
        <input class='apply_means fr' type="text" placeholder="请输入联系人姓名">
    </div>

    <div class="apply_content_box clear">
        <span class='apply_word fl'>关注领域</span>
        <input class='apply_means fr' type="text"  placeholder="请选择关注领域" readonly="readonly">
    </div>
    <div class="areas_main clear">
        <li class="areas_default">电子信息</li>
        <li class="areas_default">先进制造</li>
        <li class="areas_default">新材料</li>
        <li class="areas_default">新能源与节能</li>
        <li class="areas_default">环境保护</li>
        <li class="areas_default">健康医疗</li>
        <li class="areas_default">智能技术</li>
    </div>

    <div class="cer-middle">
        <p class='mid_p'>营业执照</p>
        <div class="IDcardDiv" style="text-align:center">
            <input type="file" name="pic" accept="image/*" class="picFM" style='display:none'/>
            <img class='fileFm' src="<?php echo (MOBILE); ?>/images/yyzz.png" alt="">
        </div>
    </div>

</div>
<p href="" class="apply_form">提 交</p>
</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script src='<?php echo (MOBILE); ?>/js/return.js'></script>
<script>

    // 需求领域  单选
    $(".areas_default").on("click",function(){
        $(this).addClass('areas_selected').removeClass('areas_default').siblings().addClass('areas_default').removeClass('areas_selected');
    });
    // 点击触发拍照上传功能
    $('.fileFm').on('click',function(){
        $('.picFM').click();
    });

    $(".apply_form").on("click",function(){
        alert("信息提交成功,两个工作日后通知认证结果");
        window.location.href='my.html';
    })



</script>
</html>