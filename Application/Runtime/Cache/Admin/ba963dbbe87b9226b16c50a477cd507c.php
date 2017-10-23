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
    <style>
        .form-group:nth-of-type(2){display:none !important;}
    </style>
</head>

<body class="sticky-header">
<section>
    <div class="main-content" width="100%" style="margin:0px;">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            栏目类别
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="reset" class="btn btn-default">重填
                                    </button>
                                    <button type="button" id="postbutton" class="btn btn-default "
                                            onclick="ajax_submit_form('form_id_name')">提交
                                    </button>
                                    <a href="javascript:history.go(-1)" data-toggle="tooltip" title=""
                                       class="btn btn-default">返回</a>
                                </div>
                            </div>
                        </header>
                        <div class="panel-body">
                            <!--表单数据-->
                            <form class="form-horizontal adminex-form" method="post" id="form_id_name">
                                <input type="hidden" id="id" name="id" value="<?php echo ($id); ?>">
                                <input type="hidden" id="channel" name="channel" value="<?php echo ($channel); ?>">
                                <div id="extends_div" class="extends_group">

                                </div>
                            </form><!--表单数据-->
                        </div>
                    </section>
                </div>

            </div>
        </section>
    </div>
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo (JS); ?>/jquery-1.10.2.min.js"></script>
<script src="<?php echo (JS); ?>/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo (JS); ?>/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo (JS); ?>/bootstrap.min.js"></script>
<script src="<?php echo (JS); ?>/modernizr.min.js"></script>
<script src="<?php echo (JS); ?>/extends.js"></script>
<script src="<?php echo (JS); ?>/jquery.nicescroll.js"></script>
<script src="/Public/js/layer/layer-min.js"></script>
<script src="<?php echo (JS); ?>/laydate/laydate.js"></script>
<!--common scripts for all pages-->
<script src="<?php echo (JS); ?>/scripts.js"></script>
<script src="<?php echo (JS); ?>/Validform_v5.3.2_min.js"></script>
<script src="/Public/js/pinyin.js"></script>
<script type="text/javascript">
    $(function(){
        var url = "/index.php/Admin/Activity/category/action/extends/channel/<?php echo ($channel); ?>/type/<?php echo ($type); ?>/id/<?php echo ($id); ?>";
        var id = $("#id").val();
        var site = "<?php echo session('site_name');?>";
        loadExtends(site, url, id, 'extends_div');

        $("#sort_num").bind('keyup',function(){

            var value = $(this).val();

            value=value.replace(/[^\d{1,}\.\d{1,}|\d{1,}]/g,'');

            $(this).val(value);
        });

        $('#form_id_name').Validform({
            tiptype: 3,
            postonce: true
        });
    });
    function preview(id) {
        var src = $('#' + id).val();
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
    }
    $(function () {
        $("#sort_num").val("99");
    })

//    $(function (){
//        $("#cat_name").live("keyup keydown change blur",function (){
//            $("#call_index").val($(this).toPinyin());
//        });
//    });



    //表单提交判断，id为空则URL表示添加，否则表示编辑
    function ajax_submit_form(form_id) {
        //判断id值是否存在
        var id = $("#id").val();
        var cat_name=$("#cat_name").val();
        if(cat_name==''){
            layer.msg("类别名称不能为空");
            return false;
        }
        var channel = $("#channel").val();
        var action = '';
        if (id == '') {
            //不存在，表示添加
            action = "/index.php/Admin/Activity/category/action/add/channel/<?php echo ($channel); ?>/type/<?php echo ($type); ?>";
        } else {
            //存在，表示编辑
            action = "/index.php/Admin/Activity/category/action/edit/channel/<?php echo ($channel); ?>/type/<?php echo ($type); ?>/id/<?php echo ($id); ?>";
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
                        window.location.href = "/index.php/Admin/Activity/category/action/page_list/channel/<?php echo ($channel); ?>/type/<?php echo ($type); ?>";
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