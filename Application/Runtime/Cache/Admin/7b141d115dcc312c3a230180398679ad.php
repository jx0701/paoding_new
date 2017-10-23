<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title><?php echo ($gemmap_config['shop_info_store_title']); ?></title>
    <meta name="keywords" content="<?php echo ($gemmap_config['shop_info_store_keyword']); ?>"/>
    <meta name="description" content="<?php echo ($gemmap_config['shop_info_store_desc']); ?>"/>

    <link href="<?php echo (CSS); ?>/style.css" rel="stylesheet">
    <link href="<?php echo (CSS); ?>/style-responsive.css" rel="stylesheet">

    <!-- jQuery 2.1.4 -->
    <script src="/Public/js/global.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
</style>

<body class="sticky-header">
<section>

    <!-- main content start-->
    <div class="main-content" width="100%" style="margin:0px;">


        <!--body wrapper start-->
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            修改信息
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" id="postbutton" class="btn btn-default "
                                            onclick="ajax_submit_form('form_id_name')"><i
                                            class="fa fa-floppy-o"></i>提交
                                    </button>
                                            <a href="javascript:history.go(-1)" data-toggle="tooltip" title=""
                                       class="btn btn-default" data-original-title="返回"><i class="fa fa-mail-reply"></i>返回</a>
                                </div>
                            </div>
                        </header>
                        <div class="panel-body ">
                            <!--表单数据-->
                            <form class="form-horizontal adminex-form" method="post" id="form_id_name"
                                  action="#">
                                <input type="hidden" id="id" name="id" value="<?php echo ($info["user_id"]); ?>">

                                <div class="form-group">
                                    <div class="nav-button ">
                                        <label class="col-sm-2 col-sm-2 control-label">头像：</label>
                                        <input type="text" readonly="readonly" class="form-control form-input" style="float:left;    margin-left: 15px;"
                                               name="avatar" id="head_pic" value="<?php echo ($info["head_pic"]); ?>">

                                        <div class="col-sm-3">
                                            <input type="button" class="btn btn-info" style="float: left;"
                                                   onClick="GetUploadify(1,'head_pic','head_pic','')" value="上传图片"/>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-info " type="button" onclick="preview('head_pic')">预览</button>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">昵称：</label>
                                    <div class="col-sm-10">
                                        <input type="text" datatype="*" nullmsg="请填写昵称" class="form-control form-input"
                                               name="nickname" value="<?php echo ($info["nickname"]); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">邮箱：</label>

                                    <div class="col-sm-10">
                                        <input type="text" datatype="e" nullmsg="请填写邮箱" class="form-control form-input"
                                               name="email" value="<?php echo ($info["email"]); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">手机：</label>
                                    <div class="col-sm-10">
                                        <input type="text" datatype="m" nullmsg="请填写手机" class="form-control form-input"
                                               name="phone" value="<?php echo ($info["mobile"]); ?>" placeholder="11位手机号码"
                                               onkeyup="this.value = this.value.replace(/[^\d.]/g, '')"
                                               onpaste="this.value=this.value.replace(/[^\d.]/g,'')"/>
                                    </div>
                                </div>
                            </form><!--表单数据-->
                        </div>

                    </section>
                </div>

            </div>

        </section>
    </div>
    </div>
    <!-- main content end-->
</section>
<script type="text/javascript" src="<?php echo (JS); ?>/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo (JS); ?>/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
    $("#confrim").bind('click',function(){
       $('form').submit();
    });
    document.getElementById("postbutton").value="<?php echo ($user["postbutton"]); ?>";
    function preview(id) {
        var src = "";
        if ($('#' + id).val()) {
            src = $('#' + id).val();
        } else {
            src = $('#' + id).attr("src");
        }
        var content;
        if (src == "") {
            content = '没有图片可供预览';
            layer.msg(content);
        }
        else {
            content = "<img width='300' height='300' src='" + src + "'>";
            layer.open({
                type: 1,
                title: false,
                closeBtn: false,
                area: ['300px', '300px'],
                skin: 'layui-layer-nobg', //没有背景色
                shadeClose: true,
                content: content
            });
        }
    }    //表单提交判断，id为空则URL表示添加，否则表示编辑
    function ajax_submit_form(form_id) {
        //判断id值是否存在
        var id = $("#id").val();

        var action = "/index.php/Admin/Admin/admin_update/action/edit";

        //异步提交表单数据
        $.ajax({
            type: "post",
            url: action,
            data: $('#' + form_id).serialize(),
            dataType: 'json',
            success: function (res) {
                if (res.result == 1) {
                    layer.msg(res.msg);
                    setTimeout(function () {
                        window.location.href = "/index.php/Admin/Index/welcome";
                    }, 1000);
                }
                if (res.result == 0) {
                    layer.msg(res.msg);
                }
            }
        })

    }
</script>
<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo (JS); ?>/jquery-1.10.2.min.js"></script>
<script src="<?php echo (JS); ?>/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo (JS); ?>/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo (JS); ?>/bootstrap.min.js"></script>
<script src="<?php echo (JS); ?>/modernizr.min.js"></script>
<script src="<?php echo (JS); ?>/jquery.nicescroll.js"></script>
<script src="/Public/js/layer/layer-min.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
<!--common scripts for all pages-->
<script src="<?php echo (JS); ?>/scripts.js"></script>
<script src="<?php echo (JS); ?>/js/pickers-init.js"></script>

</body>
</html>