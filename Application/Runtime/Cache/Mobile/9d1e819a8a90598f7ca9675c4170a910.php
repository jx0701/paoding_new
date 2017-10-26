<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name='viewport' content='user-scalable=no,width=750'>
    <title>修改头像</title>
    <link rel="stylesheet" type="text/css" href="<?php echo ($smarty["const"]["RECEPTION_CSS"]); ?>normalize.css" />
    <link href="<?php echo (MOBILE); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo (MOBILE); ?>/css/cropper.css" rel="stylesheet">
    <link href="<?php echo (MOBILE); ?>/css/main.css" rel="stylesheet">
    <!--[if IE]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
    <style>
        .tooltip-inner{
            display: none;}
        .btn{
            font-size: 30px;
            width:180px;
            height:92px;
            line-height: 77px;
            border-radius: 10px;
        }
        .back{
            background: rgba(102,102,102,0.38);
            width:650px;
            height: 650px;
            margin:20px auto;
        }
    </style>
</head>
<body>
<div class="htmleaf-container">
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- <h3 class="page-header">Demo:</h3> -->
                <div class="img-container back">
                    <img id="image" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 docs-buttons" style="text-align: center;">
                <!-- <h3 class="page-header">Toolbar:</h3> -->
                <div class="btn-group">
                    <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate Right">
                        旋转90º
                    </button>
                </div>

                <div class="btn-group">

                    <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                        <input class="sr-only" id="inputImage" name="file" type="file" accept="image/*">
                        选择图片
                    </label>

                </div>

                <div class="btn-group btn-group-crop">
                    <button class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 180, &quot;height&quot;: 90 }" type="button">
                        上传头像
                    </button>
                </div>

                <!-- Show the cropped image in modal -->
                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" type="button" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-dismiss="modal" type="button">Close</button>
                                <a class="btn btn-primary" id="download" href="javascript:void(0);">Download</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->

            </div><!-- /.docs-buttons -->
        </div>
    </div>
    <!-- Alert -->
    <div class="tip"></div>
    <script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
    <script src="<?php echo (MOBILE); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo (MOBILE); ?>/js/cropper.js"></script>
    <script src="<?php echo (MOBILE); ?>/js/main330.js"></script>
    <script src="<?php echo (MOBILE); ?>/js/return.js"></script>
</body>
</html>