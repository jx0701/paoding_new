<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>庖丁技术微信版</title>

    <!-- Bootstrap -->
    <link href="/weixin/Public/home/css/bootstrap.min.css" rel="stylesheet">
	<link href="/weixin/Public/home/css/style.css" rel="stylesheet">
	<script src="/weixin/Public/home/js/jquery-2.0.3.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 height-50 text-center bg-red">
					<img src="/weixin/Public/home/img/logo2.png" alt="" class="width-112"/>
					<a href="<?php echo U('Index/index');?>" class="pull-right height-50"><img src="/weixin/Public/home/img/center.png" alt="" class="icon-25" /></a>
				</div>
				<div class="col-xs-12 col-sm-12 margin-top-30">
					<p class="text-center font-lg2"><b>提交成功</b></p>
				</div>
				<div class="col-xs-12 col-sm-12 margin-top-30">
					<div class="box-center hint  text-center  width-201">
						我们将有专人与您联系请保持电话畅通
					</div>
					<div class="finished box-center  text-right">
						<a href="<?php echo U('Index/index');?>" class="red-link">完成</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 fancy-heading">
					<span>or</span>
				</div>
				<div class="col-xs-12 col-sm-12 text-center line-height-25 ">
					如需我们提供产品经理咨询服务<br/>可预约产品经理
				</div>
				<div class="col-xs-12 col-sm-12 text-center">
					<a href="/weixin/index.php/Home/Proman/evaluation/apply_id/<?php echo ($apply_id); ?>" type="button" class="btn btn-blue2  white-link text-center">预约产品经理</a>
				</div>
				<div class="col-xs-12 col-sm-12 text-center font-xs">
					您也可以在微信服务号回复<a href="/weixin/index.php/Home/Proman/evaluation/apply_id/<?php echo ($apply_id); ?>" class="gray-link">【预约产品经理】</a>进入
				</div>
			</div>
		</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/weixin/Public/home/js/bootstrap.min.js"></script>
	
  </body>
</html>