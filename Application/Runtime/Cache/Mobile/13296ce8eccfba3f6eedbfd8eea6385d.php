<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>申请认证</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/my.css">
</head>
<body style="padding-top:356px;">
<div class="my_company">
    <input id="company" class="new_name" type="text" placeholder="公司名称">
</div>
<div class="my_company">
    <input id="job" class="new_name" type="text" placeholder="职务">
</div>
<a class="change_name_save" >保存</a>
</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script src='<?php echo (MOBILE); ?>/js/common.js'></script>
<script src='<?php echo (MOBILE); ?>/js/return.js'></script>
<script>
    // 判断输入内容不为空时按钮状态改变
    $(".new_name").keyup(function(){
        if($("#company").val()!="" && $("#job").val()!=""){
            $('.change_name_save').css('background','#333');
        }else{
            $('.change_name_save').css('background','#ccc');
        }
    })

    $(".change_name_save").on('click',function () {
        var company=$("#company").val();
        var job=$("#job").val();
        if(company==null || job==''){
            return false;
        }else{
            window.location.href='/index.php/Mobile/User/user_authen?company='+company+'&job='+job;
        }

    })
</script>
</html>