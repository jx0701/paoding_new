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
                            <?php if($info["role_id"] == null): ?>添加角色
                                <?php else: ?>
                                编辑角色<?php endif; ?>
                            <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="button" id="postbutton" class="btn btn-default "
                                                    onclick="ajax_submit_form('form_id_name')"><i
                                                    class="fa fa-floppy-o"></i>提交
                                            </button>
                                            <a href="javascript:history.go(-1)" data-toggle="tooltip" title=""
                                               class="btn btn-default" data-original-title="返回角色列表">
                                                <i class="fa fa-mail-reply"></i>返回</a>
                                        </div>
                            </div>

                        </header>
                        <!-- /.box-header -->
                        <div class="panel-body">
                            <form class="form-horizontal adminex-form" method="post" id="form_id_name">
                                <!--<input type="hidden" id="id" name="id" value="<?php echo ($info["role_id"]); ?>">-->
                                <input type="hidden" id="id" name="id" value="<?php echo ($info["role_id"]); ?>">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">角色名称：</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="角色名称" class="form-control form-input large"
                                               name="role_name" id="name" datatype="*1-40" nullmsg="角色名称为空" value="<?php echo ($info["role_name"]); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">角色描述：</label>
                                    <div class="col-sm-9">
                                        <input  type="text" placeholder="角色描述" class="form-control form-input large"
                                               name="role_desc" id="full_name" datatype="*1-40" nullmsg="角色描述为空"
                                               value="<?php echo ($info["role_desc"]); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">权限分配：</label>
                                    <div class="col-sm-9 ">
                                        <table id="sty" class="table table-bordered table-hover col-sm-8"
                                               style="width:70%;border:1px solid #ccc;height:35px;font-size: 14px;">
                                            <tr role="row"
                                                style="height: 35px;border-bottom: solid 1px #ccc;background-color: #ffffbc"
                                                class="">
                                                <td width="40%">权限名称</td>
                                                <td width="60%">操作</td>
                                            </tr>

                                        </table>
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
            action = "/index.php/Admin/Admin/role/action/add";
        } else {
            //存在，表示编辑
            action = "/index.php/Admin/Admin/role/action/edit";
        }
        if($("input[type='checkbox']").is(":checked")){

        }else {
            layer.msg('没有配置权限，无法保存');
            return false;
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
                        window.location.href = "/index.php/Admin/Admin/role/action/page_list";
                    }, 1000);
                }
                if (res.result == 0) {
                    layer.msg(res.msg);
                }
            }
        })


    }

    //自动加载菜单权限
    $(function () {
        var actionRole = JSON.parse('<?php echo ($menuTree); ?>');
        var str = '';
        var id = $("#id").val();
            $.each(actionRole, function (i, item) {
                if (item.level / 2 ==3) {
                    str += '<tr role="row" style="height: 35px;border-bottom: solid 1px #ccc;">';
                    str += '<td width="40%" style="text-indent: ' + item.level * 7 + 'px">' + item.title + '</td>';

                    str += '<td width="60%" class="actionRole">';
                    str += '<div class="col-lg-10">';
                    str += '<label class="checkbox-inline">';
                    if (item.action != null) {
                        if (item.action.show == 1) {
                            if ('<?php echo ($info["role_id"]); ?>' != '') {
                                str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][show]" value="'+item.mod_id+'" checked> 查看';
                            } else {
                                str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][show]" value="'+item.mod_id+'" > 查看';
                            }
                        } else {
                            str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][show]" value="'+item.mod_id+'" > 查看';
                        }
                    } else {
                        str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][show]" value="'+item.mod_id+'" > 查看';
                    }
                    str += '</label>';
                    str += '<label class="checkbox-inline">';
                    if (item.action != null) {
                        if (item.action.add == 1) {
                            if ('<?php echo ($info["role_id"]); ?>' != '') {
                                str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][add]" value="'+item.mod_id+'" checked> 添加';
                            } else {
                                str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][add]" value="'+item.mod_id+'" > 添加';
                            }
                        } else {
                            str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][add]" value="'+item.mod_id+'" > 添加';
                        }
                    } else {
                        str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][add]" value="'+item.mod_id+'" > 添加';
                    }
                    str += '</label>';
                    str += '<label class="checkbox-inline">';
                    if (item.action != null) {
                        if (item.action.edit == 1) {
                            if ('<?php echo ($info["role_id"]); ?>' != '') {
                                str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][edit]" value="'+item.mod_id+'" checked> 编辑';
                            } else {
                                str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][edit]" value="'+item.mod_id+'" > 编辑';
                            }
                        } else {
                            str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][edit]" value="'+item.mod_id+'" > 编辑';
                        }
                    } else {
                        str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][edit]" value="'+item.mod_id+'" > 编辑';
                    }
                    str += '</label>';
                    str += '<label class="checkbox-inline">';
                    if (item.action != null) {
                        if (item.action.del == 1) {
                            if ('<?php echo ($info["role_id"]); ?>' != '') {
                                str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][del]" value="'+item.mod_id+'" checked> 删除';
                            } else {
                                str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][del]" value="'+item.mod_id+'" > 删除';
                            }
                        } else {
                            str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][del]" value="'+item.mod_id+'" > 删除';
                        }
                    } else {
                        str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][del]" value="'+item.mod_id+'" > 删除';
                    }
                    str += '</label>';
                    str += '</div>';
                    str += '</td>';
                    str += '</tr>';
                } else {
                    str += '<tr role="row" style="height: 35px;border-bottom: solid 1px #ccc;" class="active">';
                    str += '<td width="40%" style="text-indent: ';
                    if (item.level / 2 == 2) {
                        str += item.level * 5;
                    } else if (item.level / 2 == 1) {
                        str += 0;
                    }
                    str += 'px">' + item.title + '</td>';
                    str += '<td width="60%" class="actionRole">';
                    str += '<div class="col-lg-10">';
                    str += '<label class="checkbox-inline">';
                    //alert(JSON.stringify(item.action));
                    if ('<?php echo ($info["role_id"]); ?>' != '') {
                        if(item.action != null && item.action.show != null && item.action.show == 1){
                            str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][show]" value="'+item.mod_id+'" checked> 查看';
                        }else{
                            str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][show]" value="'+item.mod_id+'" > 查看';
                        }

                    } else {
                        str += '<input type="checkbox" id="'+item.a+'" name="roleAction[' + item.mod_id + '][show]" value="'+item.mod_id+'" > 查看';
                    }
                    str += '</label>';
                    str += '</div>';
                    str += '</td>';
                    str += '</tr>';
                }
            });
         $('#sty').append(str);
    })
</script>
</body>
</html>