<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>活动</title>
    <meta name="description" content="庖丁科技众包服务平台携手国内外先进技术科研院所、顶级技术专家，以实现科技成果市场化为核心，为企业提供快速精准的需求匹配服务，从而实现企业以及科技资源的有效对接，帮助企业实现产业技术升级，助力先进技术完成产业化发展。" />
    <meta name="keywords" content="庖丁众包、智能技术、机械制造、健康医疗、材料科学、能源环保、生产流程优化"/>
    <meta name='viewport' content='user-scalable=no,width=750'>
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/common_new.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/activity.css">
    <link rel="stylesheet" href="<?php echo (MOBILE); ?>/css/swiper.css">
</head>
<body>
<div class="activity_banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#">
                    <img src="<?php echo (MOBILE); ?>/images/hd-lunbo1.png" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img src="<?php echo (MOBILE); ?>/images/hd-lunbo2.png" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img src="<?php echo (MOBILE); ?>/images/hd-lunbo3.png" alt="">
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="activity_nav clear">
    <li class="activity_nav_part fl" style="margin-left:90px;background: url(<?php echo (MOBILE); ?>/images/icon-activity-salon.png) center 0 no-repeat;">
        <div class="activity_nav_part_icon"></div>
        <p class="activity_nav_part_theme">沙龙分享</p>
    </li>
    <li class="activity_nav_part fl" style="background: url(<?php echo (MOBILE); ?>/images/icon-activity-fortum.png) center 0 no-repeat;">
        <div class="activity_nav_part_icon"></div>
        <p class="activity_nav_part_theme">主题论坛</p>
    </li>
    <li class="activity_nav_part fl" style="background: url(<?php echo (MOBILE); ?>/images/icon-activity-joint.png) center 0 no-repeat;">
        <div class="activity_nav_part_icon"></div>
        <p class="activity_nav_part_theme">对接会</p>
    </li>
</div>
<div class="activity_grey"></div>

<div class="activity_lately">
    <div class="activity_lately_tit clear">
        <div class="activity_tit_icon fl" style="background: url(<?php echo (MOBILE); ?>/images/icon-activity-previous.png);"></div>
        <span class="activity_lately_span fl">最近举办</span>
    </div>

    <div class="activity_main">
        <img class="activity_main_img" src="<?php echo (MOBILE); ?>/images/hd-zjjb1.png" alt="">
        <div class="activity_main_time clear">
            <p class="fl">报名截止时间：2017-09-20</p>
            <p class="fr">了解详情<img src="<?php echo (MOBILE); ?>/images/icon-right.png" alt=""></p>
        </div>
    </div>
    <div class="activity_main">
        <img class="activity_main_img" src="<?php echo (MOBILE); ?>/images/hd-zjjb2.png" alt="">
        <div class="activity_main_time clear">
            <p class="fl">报名截止时间：2017-09-20</p>
            <p class="fr">了解详情<img src="<?php echo (MOBILE); ?>/images/icon-right.png" alt=""></p>
        </div>
    </div>
</div>
<div class="activity_grey"></div>

<div class="activity_lately">
    <div class="activity_lately_tit clear">
        <div class="activity_tit_icon fl"  style="background: url(<?php echo (MOBILE); ?>/images/icon-activity-previous.png) center 0 no-repeat;"></div>
        <span class="activity_lately_span fl">往期活动</span>
    </div>

    <div class="activity_lately_section clear">
        <div class="activity_section_left fl">
            <img src="<?php echo (MOBILE); ?>/images/hd-wqhd1.png" alt="">
        </div>
        <div class="activity_section_right fr">
            <p class="activity_right_tit">广东省家具行业推行绿色清洁生产与挥发性有机污染物</p>
            <p class="activity_right_p">
                <span class="activity_right_span">广州 天河区</span>
                <span>09/16</span>
            </p>
            <p  class="activity_right_p">
                浏览<span class="activity_right_span"> 2068</span>
                收藏<span> 1258</span>
            </p>
        </div>
    </div>

    <div class="activity_lately_section clear">
        <div class="activity_section_left fl">
            <img src="<?php echo (MOBILE); ?>/images/hd-wqhd1.png" alt="">
        </div>
        <div class="activity_section_right fr">
            <p class="activity_right_tit">广东省家具行业推行绿色清洁生产与挥发性有机污染物</p>
            <p class="activity_right_p">
                <span class="activity_right_span">广州 天河区</span>
                <span>09/16</span>
            </p>
            <p  class="activity_right_p">
                浏览<span class="activity_right_span"> 2068</span>
                收藏<span> 1258</span>
            </p>
        </div>
    </div>

</div>

<div class="nav">
    <a class="nav_option" href="">
        <img src="<?php echo (MOBILE); ?>/images/icon-tabbar-technology-default.png" alt="">
        <p>技术</p>
    </a>
    <a class="nav_option" href="">
        <img src="<?php echo (MOBILE); ?>/images/icon-tabbar-demand-default.png" alt="">
        <p>需求</p>
    </a>
    <a class="nav_option" href="/index.php/Mobile/Activity/activity">
        <img src="<?php echo (MOBILE); ?>/images/icon-tabbar-activity-selected.png" alt="">
        <p style="color:#ff971d;">活动</p>
    </a>
    <a class="nav_option" href="/index.php/Mobile/User/user_center">
        <img src="<?php echo (MOBILE); ?>/images/icon-tabbar-my-default.png" alt="">
        <p>我的</p>
    </a>
</div>
</body>
<script src='<?php echo (MOBILE); ?>/js/jquery-3.0.0.min.js'></script>
<script src='<?php echo (MOBILE); ?>/js/swiper.min.js'></script>
<script>
    // 轮播
    var mySwiper = new Swiper('.swiper-container', {
        pagination : '.swiper-pagination',
        paginationClickable :true,
        loop:true,
        // autoplay: 3000
    })
</script>
</html>