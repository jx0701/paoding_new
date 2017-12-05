<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title><?php echo ($gemmap_config['shop_info_store_title']); ?></title>
    <meta name="keywords" content="<?php echo ($gemmap_config['shop_info_store_keyword']); ?>"/>
    <meta name="description" content="<?php echo ($gemmap_config['shop_info_store_desc']); ?>"/>

    <!--ios7-->
    <!--[if lte IE 8]>
    <link href="/Public/js/common/multi-checkbox.ie8" rel="stylesheet"/>
    <![endif]-->
    <link href="/Public/js/common/multi-checkbox.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- form field -->
    <link href="<?php echo (JS); ?>/form/styles/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/scripts/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/scripts/plugins/simditor/css/simditor.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/scripts/plugins/cxColor/css/jquery.cxcolor.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/scripts/plugins/uploadify/uploadify.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/scripts/plugins/uploadify/uploadify.extension.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/styles/learun-ckbox-radio.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/styles/learun-applayout.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/styles/learun-flow.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/scripts/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/scripts/bootstrap/bootstrap.extension.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/scripts/plugins/tree/tree.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/scripts/plugins/datetime/pikaday.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/scripts/plugins/wizard/wizard.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/form/styles/learun-ui.css" rel="stylesheet" />
    <link href="<?php echo (JS); ?>/advanced-datatable/css/demo_page.css" rel="stylesheet"/>
    <link href="<?php echo (JS); ?>/advanced-datatable/css/demo_table.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo (JS); ?>/data-tables/DT_bootstrap.css"/>
    <link href="<?php echo (CSS); ?>/style.css" rel="stylesheet">
    <link href="<?php echo (CSS); ?>/style-responsive.css" rel="stylesheet">

    <!--bootstrap组件start-->
    <script src="<?php echo (JS); ?>/jquery-1.10.2.min.js"></script>
    <script src="/Public/js/global.js"></script>
    <script src="/Public/js/layer/layer-min.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
    <script src="/Public/js/common.js" type="text/javascript"></script>
    <script src="<?php echo (JS); ?>/form/scripts/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/bootstrap/bootstrap.min.js"></script>

    <script src="<?php echo (JS); ?>/form/scripts/plugins/datepicker/WdatePicker.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/plugins/tree/tree.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/plugins/validator/validator.js"></script>

    <script src="<?php echo (JS); ?>/form/scripts/plugins/datetime/pikaday.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/utils/learun-ui.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/utils/learun-form.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/plugins/simditor/js/module.min.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/plugins/simditor/js/uploader.min.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/plugins/simditor/js/hotkeys.min.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/plugins/simditor/js/simditor.min.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/plugins/cxColor/js/jquery.cxcolor.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/plugins/uploadify/jquery.uploadify.min.js"></script>

    <script src="<?php echo (JS); ?>/form/scripts/utils/learun-applayout.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/plugins/flow-ui/flow.js"></script>
    <script src="<?php echo (JS); ?>/form/scripts/utils/learun-flowlayout.js"></script>


    <script type="text/javascript">
        var postData = {};//提交数据
        var frmapp = "";
        $(function () {
            initialPage();
        })
        //初始化页面
        function initialPage() {
            $('#step-2 .tab-content').height($(window).height() - 87);
            var flow = $("#flow").val();
            var url = "/index.php/Admin/Channel/channelField/action/field_config/type/<?php echo ($type); ?>/channel/<?php echo ($channel); ?>/flow/"+flow;
            $.post(url, '', function (res) {
               // alert(JSON.stringify(res));
                if (res.result == 1) {
                    setFrmInfo(res.data);
                }else{
                    bindingBase();
                }

            }, 'json');

            $("#step-2").show();

        }
        function bindingBase() {
            setFrmInfo(postData);
            return true;
        }
        /*=========基本配置（end）====================================================================*/

        /*=========表单选择（begin）==================================================================*/
        function setFrmInfo(data) {
            var _height = $(window).height() - 87 < 410 ? 410 : $(window).height() - 185;

            postData.FrmContent = data.FrmContent;

            frmapp = $('#frmdesign').frmDesign({
                Height: _height,
                frmContent: postData.FrmContent
            });
        }
        function bindingFrm() {
            var frmcotentls = frmapp.getData();
            var frmContent = new Array();//frmContent将frmcotentls的数据按照页面显示的空间顺序重新组织数据
            var d = document.getElementById("frmdesign");
            var nodeList = d.getElementsByTagName("span");
           for( i = 0;i<nodeList.length;i++){
                for(m=0;m<frmcotentls.length;m++) {
                   if(frmcotentls[m].control_label ==nodeList[i].innerHTML ) {
                       frmContent[i] = new Array();
                       frmContent[i] = frmcotentls[m];
                       frmContent[i]['order']=i+1;
                    }
                }
            }
            if (!frmcotentls) {
                return false;
            }
           postData.FrmContent = JSON.stringify(frmContent);
            return true;
        }
        /*=========表单选择（end）====================================================================*/

        /*=========创建完成（begin）==================================================================*/
        function finishbtn() {
            bindingFrm();
            var flow = $("#flow").val();
            var url = "/index.php/Admin/Channel/channelField/action/channel_add/channel/<?php echo ($channel); ?>/type/<?php echo ($type); ?>/flow/<?php echo ($flow); ?>";
            if(flow == 2){
                url = "/index.php/Admin/Channel/channelField/action/channel_edit/channel/<?php echo ($channel); ?>/type/<?php echo ($type); ?>/flow/<?php echo ($flow); ?>";
            }
            layer.load(2);

            //异步提交表单数据
            $.ajax({
                type: "post",
                url: url,
                data: postData,
                dataType: 'json',
                success: function (res) {
                    layer.closeAll('loading');
                    //alert(JSON.stringify(res));
                    if (res.result == 1) {
                        var call_index = $("#call_index").val();
                        var redirectUrl = "/index.php/Admin/Channel/channelField/action/list/channel/<?php echo ($channel); ?>/type/<?php echo ($type); ?>/flow/<?php echo ($flow); ?>";
                        setTimeout(function () {
                            window.location.href = redirectUrl;
                        }, 1000);
                    }
                    layer.msg(res.msg);

                }
            });

        }
        /*=========创建完成（end）====================================================================*/

    </script>

</head>
<style type="text/css">

    nav {
        margin-bottom: 0;
        padding-left: 15px;
        list-style: none;
    }

    .nav > li > a:hover, .nav > li > a:focus {
        background: none;
        text-decoration: none;
    }

    label {
        display: inline-block;
        margin-bottom: -8px !important;
    }

    * {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    a, img {
        border: 0;
    }

    .thumbnail img {
        width: 400px;
        height: 200px;
    }
    .header{
        border-left: none;
        border-top: none;
        border-right: none;
        border-bottom: 1px solid #dddddd;
        height: 50px;
        overflow: hidden;
    }
    .header-left{
        font-size: 20px;font-weight: bold;padding:10px;float: left
    }
    .header-right{
        text-align: right;padding:10px;float: right
    }
</style>

<body class="sticky-header">

<div class="main-content" width="100%" style="margin:0px;">
    <section class="wrapper">

        <div class="wizard" data-target="#wizard-steps" style="margin-bottom: 5px">
            <?php if($flow == 2): ?><ul class="flow-steps">
                    <li data-target="#step-1" class="active" href="/index.php/Admin/Channel/channel/action/page_edit/flow/<?php echo ($flow); ?>/channel/<?php echo ($channel); ?>">
                        <span class="step">1</span>基本配置<span class="chevron"></span>
                    </li>
                    <li data-target="#step-2"
                        <?php if($type == 1): ?>class="complete"
                            <?php else: ?>class="active"<?php endif; ?>
                        href="/index.php/Admin/Channel/channelField/action/channel_field/type/1/channel/<?php echo ($channel); ?>/flow/<?php echo ($flow); ?>">
                        <span class="step">2</span>表单内容配置<span class="chevron"></span>
                    </li>

                    <li data-target="#step-3" class="active" href="/index.php/Admin/Channel/channelField/action/list/type/1/channel/<?php echo ($channel); ?>/flow/<?php echo ($flow); ?>">
                        <span class="step">3</span>表单列表配置<span class="chevron"></span>
                    </li>
                    <li data-target="#step-6" class="active"><span class="step">4</span>配置完成<span class="chevron"></span></li>
                </ul>

                <?php else: ?>
                <ul class="flow-steps">
                    <li data-target="#step-1"><span class="step">1</span>基本配置<span class="chevron"></span></li>
                    <li data-target="#step-2"
                        <?php if($type == 1): ?>class="active"<?php endif; ?>
                        ><span class="step">2</span>表单内容配置<span class="chevron"></span>
                    </li>
                    <li data-target="#step-3"><span class="step">3</span>表单列表配置<span class="chevron"></span></li>
                    <li data-target="#step-6"><span class="step">6</span>配置完成<span class="chevron"></span></li>
                </ul><?php endif; ?>

        </div>
        <form class="form-horizontal adminex-form" method="post" id="channel_form">
            <input type="hidden" id="flow" name="flow" value="<?php echo ($flow); ?>">

                <!--body wrapper start-->
                <div class="wrapper-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <section class="panel">

                                <div class="widget-body">
                                    <div class="header">
                                        <div class="header-left">
                                            <?php echo ($channel_title); ?>
                                            <?php if($type == 1): ?>表单内容字段配置
                                                <?php else: ?>
                                                栏目内容字段配置<?php endif; ?>

                                        </div>
                                        <div class="header-right">
                                            <div class="btn-group">
                                            <a class="btn btn-default" >
                                                <i class="fa fa-floppy-o"></i> &nbsp;保存配置                                            </a>
                                            <a id="btn_finish" class="btn btn-default" onclick="finishbtn();">
                                                <i class="fa fa-mail-forward"></i> &nbsp;下一步
                                            </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="step-content wizard-step-content" id="wizard-steps">
                                        <div class="step-pane flowapp" id="step-2">
                                            <div id="frmdesign">

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section>
                        </div>
                    </div>
                </div>
                <!--body wrapper end-->

        </form>
        <input type="hidden" id="module_name" value="">
    </section>
</div>

</section>
<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo (JS); ?>/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo (JS); ?>/bootstrap.min.js"></script>
<script src="<?php echo (JS); ?>/modernizr.min.js"></script>
<script src="<?php echo (JS); ?>/jquery.nicescroll.js"></script>
<script src="/Public/js/layer/layer-min.js"></script>
<!--common scripts for all pages-->
<script src="<?php echo (JS); ?>/scripts.js"></script>

<!--ios7-->
<script src="/Public/bootstrap/js/ios-switch/switchery.js"></script>
<script src="/Public/bootstrap/js/ios-switch/ios-init.js"></script>

</body>
</html>
<script>


    $(".flow-steps li").click(function(){
        var obj = $(this);
        var flow = $("#flow").val();
        if(flow == 2){

            if(obj.hasClass('complete')){
                return;
            }
            $(".flow-steps li").removeClass('complete').addClass('active');
            obj.removeClass().addClass('complete');

            var url = obj.attr('href');
            var step = obj.attr('data-target');
            if(step == '#step-6'){
                layer.alert('应用模块配置完成，请刷新网站以加载模块菜单!', function(){
                    window.location.href = '/index.php/Admin/Channel/channel/action/page_list';
                });
                setTimeout("window.location.href = '/index.php/Admin/Channel/channel/action/page_list'", 2000);
            }else{
                if(url != undefined && url != null && url != ''){
                    window.location.href = url;
                }
            }
        }
    });


</script>