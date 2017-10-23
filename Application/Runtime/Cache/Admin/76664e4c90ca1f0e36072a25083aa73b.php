<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>表单设计器</title>
    <meta name="keyword" content="拖拽式表单设计器">
    <meta name="description" content="拖拽式表单设计器">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <!--<link href="/Public/css/style.css" rel="stylesheet">-->
    <link href="/Public/plugins/channel-config-assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/plugins/channel-config-assets/css/lib/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/Public/plugins/channel-config-assets/css/custom.css" rel="stylesheet">
    <link href="/Public/css/define_page/Template-style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Public/css/channel-config/aui.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/channel-config/aui-pull-refresh.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/channel-config/common.css" />

    <!--<link href="/Public/css/bootstrap-reset.css" rel="stylesheet">-->

    <style>
        h2{ font-size: 20px; }
        body { padding: 10px; padding-bottom: 10px; background: #EFF0F4; }
        .main-content{ background: #fff; }
        .panel-heading{ height: 40px; padding:5px; }
        .wx-header { background-image: url(/Public/plugins/pageconfig/css/bootstrap/img/titlebar@2x.png); background-repeat: no-repeat; background-size: 100%; color: white; text-align: center; padding-top: 18px; line-height: 56px; }
        #target fieldset{ background: #efeff4; overflow:auto; max-height: 680px; }
        .tabbable{ overflow:auto; height: 680px; }
        ::-webkit-scrollbar{ width:5px; }
        ::-webkit-scrollbar-track{ background-color:#bee1eb; }
        ::-webkit-scrollbar-thumb{ background-color:#00aff0; }
        ::-webkit-scrollbar-thumb:hover { background-color:#9c3; }
        ::-webkit-scrollbar-thumb:active { background-color:#00aff0; }


    </style>
    <script src="/Public/js/jquery-1.10.2.min.js" ></script>
    <script src="/Public/js/layer/layer.js"></script>
    <script src="/Public/js/global.js"></script>
</head>
<body>
<div class="main-content" width="100%" style="margin:0px;">
    <section class="wrapper">
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left"> <h4>编辑自定义列表</h4></div>
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" id="postbutton" class="btn btn-default">保存</button>
                        <button type="reset" class="btn btn-default">取消</button>
                        <a href="javascript:history.go(-1)" data-toggle="tooltip" title=""
                           class="btn btn-default" >返回</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <!-- Components -->
            <div class="span4">
            <h2>列表样式效果图</h2>
                <img src="/Public/images/system_page_type/system_pagelist<?php echo ($imgid); ?>.png" />
                <div class="tabbable" >
                    <ul class="nav nav-tabs" id="formtabs" style="display:none">
                        <!-- Tab nav -->
                    </ul>
                    <form class="form-horizontal" id="components" style="display:none">
                        <fieldset>
                            <div id="comp_tab" class="tab-content" >
                                <!-- Tabs of snippets go here -->
                            </div>
                        </fieldset>
                    </form>
                </div>
        </div>
            <!-- / Components -->

            <!-- Building Form. -->
            <div class="span4" style="margin-left: 50px;">
                <div class="clearfix">
                    <h2>表单列表展示</h2>
                    <div id="build">
                        <form id="target" class="form-horizontal">
                        </form>
                    </div>
                </div>
            </div>
            <!-- / Building Form. -->

        </div> <!-- /container -->
        <input type="hidden" id="id" value="<?php echo ($id); ?>">
        <input type="hidden" id="url" value="/index.php/Admin/ChannelConfig/page_config/action/info/id/">
    </section>
</div>

<script data-main="/Public/plugins/channel-config-assets/js/main-built-channel-edit.js" src="/Public/plugins/channel-config-assets/js/lib/require.js" ></script>

<script>
    $("#postbutton").click(function(){
        var html = $("#render").val().replace(/[\r\n]/g, '');
        var title = $(html).find("legend").text();

        var legend = $(html).find("legend").prop("outerHTML");
        html = html.replace(legend, '');
        html = encodeURI(html);
        var datas = get_page_data();

        var url = "/index.php/Admin/ChannelConfig/page_config/action/add";
        if($("#id").val() != null && $("#id").val() != ''){
            url = "/index.php/Admin/ChannelConfig/page_config/action/edit/id/"+$("#id").val();
        }
        var data = {'html': html, 'title': title, 'form_data': datas};
        // alert(JSON.stringify(data));
        $.ajax({
            url: url,
            type: 'post',
            data: data,
            dataType: 'json',
            success: function(ret){
                if(ret.result == 1){
                    layer.msg(ret.msg);
                    setTimeout(function(){
                        window.location.href = "/index.php/Admin/System/channel/action/page_list";
                    },'1500')
                }else{
                    layer.msg(ret.msg);
                }
            }
        });
    });

    function get_page_data(){
        var datas = new Array();
        $("#target .component").each(function(i, el){
            var form =  $(this).attr('data-content');
            var fdata = $(form).serializeArray();
            var title = $(this).attr('data-title');

            var data = {'title': title, 'data':fdata};
            datas[i] = data;
        });
        return datas;
    }

    function tagging(id){
        //var this_ = $("#"+ id);
        $('#title1').css('border', 'none');
        $('#title2').css('border', 'none');
        $('#title3').css('border', 'none');
        $('#title4').css('border', 'none');
        $('#title5').css('border', 'none');
        $('#title6').css('border', 'none');
        $("#"+ id).css('border', '1px solid red');
    }


</script>
</body>
</html>