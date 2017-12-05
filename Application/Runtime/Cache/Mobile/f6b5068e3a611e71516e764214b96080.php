<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title><?php echo ($seoTitle); ?></title>
	<link rel="shortcut icon" href="/Template/5u/mobile/Static/img/favicon.ico">
	<meta name="keywords" content="<?php echo ($seoKeywords); ?>">
	<meta name="description" content="<?php echo ($seoDescription); ?>">
	<link rel="stylesheet" type="text/css" href="/Template/5u/mobile/Static/css/weui.min.css"/>
	<link rel="stylesheet" type="text/css" href="/Template/5u/mobile/Static/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="/Template/5u/mobile/Static/css/swiper.min.css"/>
	<link rel="stylesheet" type="text/css" href="/Template/5u/mobile/Static/css/index.css"/>
	<script>
		//百度统计
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "https://hm.baidu.com/hm.js?f095b63fbc1984edb5ae1cef37dd08a6";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hm, s);
		})();
		//清除信息
		<?php if(!empty($clearAll)): ?>if(localStorage.getItem("clearAll") && localStorage.getItem("clearAll") == <?php echo ($clearAll); ?>){
			localStorage.clear();
		}<?php endif; ?>
	</script>
</head>
	<body>
		<div class="web">
			<div class="personal_head">
				<div class="personal_head_tou">
					<?php if($mobile != null): ?><a href="<?php echo U('User/detail');?>"><img class="weui-media-box__thumb" src="<?php echo session('head_url');?>" alt=""></a>
					<?php else: ?>
						<a href="javascript:;"><img class="weui-media-box__thumb" src="<?php echo session('head_url');?>" alt=""></a><?php endif; ?>
				</div>
				<p class="personal_head_name"><?php echo session('nickname');?></p>
				<p class="personal_head_zhang">账号：</p>
				<?php if($mobile != null): ?><span style="color: #000000;" class="personal_head_hao"><?php echo ($mobile); ?></span>
					<a href="<?php echo U('User/detail');?>" class="chevron-right"><i class="fa fa-chevron-right"></i></a>
				<?php else: ?>
					<a href="<?php echo U('User/connect');?>" class="personal_head_hao">绑定手机</a>
					<a href="javascript:;" class="chevron-right"><i class="fa fa-chevron-right"></i></a><?php endif; ?>
			</div>
			<div class="weui-cells">
	            <a class="weui-cell weui-cell_access height" href="<?php echo U('User/user_sciences');?>" style="padding: 10px;">
	                <div class="weui-cell__bd">
	                    <p>我提交的需求</p>
	                </div>
	                <div class="weui-cell__ft height2">
	                </div>
	            </a>
	            <a class="weui-cell weui-cell_access height" href="<?php echo U('User/user_tasks');?>" style="padding: 10px;">
	                <div class="weui-cell__bd">
	                    <p>我提交的方案</p>
	                </div>
	                <div class="weui-cell__ft height2">
	                </div>
	            </a>
	            
	        </div>
			
			<div class="weui-cells">
	            <a class="weui-cell weui-cell_access height" href="<?php echo U('User/service');?>" style="padding: 10px;">
	                <div class="weui-cell__bd">
	                    <p>服务介绍</p>
	                </div>
	                <div class="weui-cell__ft height2">
	                </div>
	            </a>
	        </div>
			</a>
			
			<div class="index_foot">
				<div class="weui-tabbar">
	                <a href="<?php echo U('Topic/index');?>" class="weui-tabbar__item">
	                    <img src="/Template/5u/mobile/Static/img/index_jishu.png" alt="" class="weui-tabbar__icon">
	                    <p class="weui-tabbar__label">技术</p>
	                </a>
	                <a href="<?php echo U('Task/index');?>" class="weui-tabbar__item">
	                    <img src="/Template/5u/mobile/Static/img/index_need.png" alt="" class="weui-tabbar__icon">
	                    <p class="weui-tabbar__label">需求</p>
	                </a>
	                <?php if($check == true): ?><a href="<?php echo U('User/personal');?>" class="weui-tabbar__item">
		                    <img src="/Template/5u/mobile/Static/img/index_my-active.png" alt="" class="weui-tabbar__icon">
		                    <p class="weui-tabbar__label">我的</p>
		                </a>
	                <?php else: ?>
	                	<a href="<?php echo U('User/service');?>" class="weui-tabbar__item">
		                    <img src="/Template/5u/mobile/Static/img/index_my-active.png" alt="" class="weui-tabbar__icon">
		                    <p class="weui-tabbar__label">关于</p>
		                </a><?php endif; ?>
	            </div>
			</div>
		</div>	
	</body>
<script src="/Template/5u/mobile/Static/js/jquery-2.1.0.js" type="text/javascript" charset="utf-8"></script>
<script src="/Template/5u/mobile/Static/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/Template/5u/mobile/Static/js/index.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/Public/home/js/jquery.md5.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="/Public/js/vue.js"></script>
</html>