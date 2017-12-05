<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>模块类别管理</title>
    <meta name="keywords" content="<?php echo ($gemmap_config['shop_info_store_keyword']); ?>"/>
    <meta name="description" content="<?php echo ($gemmap_config['shop_info_store_desc']); ?>"/>

    <!--dynamic table-->

    <link href="<?php echo (CSS); ?>/style.css" rel="stylesheet">
    <link href="<?php echo (CSS); ?>/style-responsive.css" rel="stylesheet">
    <link href="<?php echo (CSS); ?>/channel-type.css" rel="stylesheet">
    <!--GEMMAP自带的矢量图标库 font-awesome.min.css-->
    <link href="/Public/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Public/js/html5shiv.js"></script>
    <script src="/Public/js/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.1.4 -->
    <script src="/Public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/Public/js/global.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/Public/js/layer/layer-min.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->

</head>
<style type="text/css">
    .boby{
        scroll:"no";
    }
    .navbar-default {
        background-color: #fff;
        border-bottom: 1px solid #e7e7e7;
    }

    .panel {
        border: 1px solid #ddd;
    }

    .icon-title {
    margin: 30px 0;
    text-shadow: 0 1px 1px rgba(255,255,255,.9);
    font-size: 24px;
    color: #2196F3;
    font-weight: bold;
}


    .icon-wid {height:200px !important;}
    .icon-title {margin: 15px 0 !important;}
    .app-edit-icon{margin-top:15px !important;}
    #ascrail2000{display:none !important;}
</style>

<body class="sticky-header">

<section>

    <!-- main content start-->
    <div class="main-content" width="100%" style="margin:0px;">

        <form id="search" role="search" method="post">

            <!--body wrapper start-->
            <div class="wrapper">
                <!--  -->
                <div class="row">
                    <div class="col-sm-12">

                        <div class="panel">
                         <header class="panel-body panel-heading ">
                            <div class="pull-left ">
                                频道模型选择
                            </div>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <a href="javascript:history.go(-1)" class="btn btn-default"><i class="fa fa-reply"></i>返回</a>

                                </div>
                            </div>
                        </header>

                            <div class="edit-icon-pane">
                                <div class="icon-wid" >
                                    <div class="app-edit-icon  add"></div>
                                    <div class="icon-detail">创建全新的模型</div>
                                    <div class="icon-title">空模型</div>
                                </div>

                                <a href="/index.php/Admin/Channel/channelListType/channel_type/Article">
                                <div class="icon-wid" >
                                    <div class="app-edit-icon news"></div>
                                    <div class="icon-detail">用于展示新闻、动态、资讯……</div>
                                    <div class="icon-title">资讯模型</div>
                                </div>
                                    </a>
                                <div class="icon-wid" >
                                    <div class="app-edit-icon sns"></div>
                                    <div class="icon-detail">社区、朋友圈、论坛……</div>
                                    <div class="icon-title">互动模型</div>
                                </div>
                                <a href="/index.php/Admin/Channel/channelListType/channel_type/Activity">
                                <div class="icon-wid" >
                                    <div class="app-edit-icon activity"></div>
                                    <div class="icon-detail">发布活动内容，吸引粉丝参与</div>
                                    <div class="icon-title">活动模型</div>
                                </div>
                                </a>
                            </div>
                            <div class="edit-icon-pane">

                                <div class="icon-wid" >
                                    <div class="app-edit-icon shop"></div>
                                    <div class="icon-detail">发布商品信息</div>
                                    <div class="icon-title">商品模型</div>
                                </div>
                                <div class="icon-wid" >
                                    <div class="app-edit-icon question"></div>
                                    <div class="icon-detail">量表、调查问卷</div>
                                    <div class="icon-title">问卷模型</div>
                                </div>
                                <div class="icon-wid" >
                                    <div class="app-edit-icon yu"></div>
                                    <div class="icon-detail">发布预约信息</div>
                                    <div class="icon-title">预约模型</div>
                                </div>
                                <div class="icon-wid" >
                                    <div class="app-edit-icon form"></div>
                                    <div class="icon-detail">用于收集各类型的数据</div>
                                    <div class="icon-title">数据采集模型</div>
                                </div>

                            </div>
                            <div class="edit-icon-pane">
                                <a href="/index.php/Admin/Channel/channelListType/channel_type/Company">
                                <div class="icon-wid" >
                                    <div class="app-edit-icon shop"></div>
                                    <div class="icon-detail">管理企业数据</div>
                                    <div class="icon-title">企业模型</div>
                                </div>
                                </a>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!--body wrapper end-->
        </form>


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo (JS); ?>/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo (JS); ?>/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo (JS); ?>/bootstrap.min.js"></script>
<script src="<?php echo (JS); ?>/modernizr.min.js"></script>
<script src="<?php echo (JS); ?>/jquery.nicescroll.js"></script>



<!--common scripts for all pages-->
<script src="<?php echo (JS); ?>/scripts.js"></script>

</body>
</html>