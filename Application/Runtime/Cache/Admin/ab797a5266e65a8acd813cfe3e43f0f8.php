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

    <script src="/Public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/Public/js/global.js"></script>
    <script src="/Public/js/myFormValidate.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/Public/js/layer/layer-min.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
    <script src="/Public/js/myAjax.js"></script>

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
    <div class="main-content" width="100%" style="margin:0px;">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <header class="panel-heading">
                            <?php if($info["role_id"] == null): ?>添加常见问题
                                <?php else: ?>
                                编辑常见问题<?php endif; ?>
                            <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="button" id="postbutton" class="btn btn-default "
                                                    onclick="ajax_submit_form('form_id_name')"><i class="fa fa-save"></i>提交
                                            </button>
                                            <a href="javascript:history.go(-1)" data-toggle="tooltip" title=""
                                               class="btn btn-default" data-original-title="返回功能介绍列表"><i class="fa fa-reply"></i>返回</a>
                                        </div>
                                    </div>

                        </header>
                        <!-- /.box-header -->
                        <div class="panel-body">
                            <form class="form-horizontal adminex-form" method="post" id="form_id_name">
                                <input type="hidden" id="id" name="id" value="<?php echo ($info["id"]); ?>">
                                <input type="hidden" id="create_user_id" name="create_user_id" value="<?php echo ($info["create_user_id"]); ?>">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">标题：</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="标题" class="form-control form-input large"
                                               name="title" id="title" datatype="*1-40" nullmsg="标题名称为空" value="<?php echo ($info["title"]); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">详细：</label>
                                    <div class="col-sm-9">
                                        <input  type="text" placeholder="详细" class="form-control form-input large"
                                               name="content" id="content" datatype="*1-40" nullmsg="详细为空"
                                               value="<?php echo ($info["content"]); ?>">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<script type="text/javascript" src="<?php echo (JS); ?>/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo (JS); ?>/Validform_v5.3.2_min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo (JS); ?>/jquery-1.10.2.min.js"></script>
<script src="<?php echo (JS); ?>/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo (JS); ?>/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo (JS); ?>/bootstrap.min.js"></script>
<script src="<?php echo (JS); ?>/modernizr.min.js"></script>
<script src="<?php echo (JS); ?>/jquery.nicescroll.js"></script>
<script src="/Public/js/layer/layer-min.js"></script>
<!--common scripts for all pages-->
<script src="<?php echo (JS); ?>/scripts.js"></script>

<script>
    //表单提交判断，id为空则URL表示添加，否则表示编辑
    function ajax_submit_form(form_id) {
        //判断id值是否存在
        var id = $("#id").val();
        var action = '';
        if (id == '') {
            //不存在，表示添加
            action = "/index.php/Admin/System/introduction/action/add";
        } else {
            //存在，表示编辑
            action = "/index.php/Admin/System/introduction/action/edit";
        }

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
                        window.location.href = "/index.php/Admin/System/introduction/action/page_list";
                    }, 1000);
                }
                if (res.result == 0) {
                    layer.msg(res.msg);
                }
            }
        })


    }

</script>
</body>
</html>