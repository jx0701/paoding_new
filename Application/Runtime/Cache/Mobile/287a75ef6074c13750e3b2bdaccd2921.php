<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title><?php echo ($seoTitle); ?></title>
    <link rel="shortcut icon" href="/Template/5u/mobile/Static/img/favicon.ico">
    <meta name="keywords" content="<?php echo ($seoKeywords); ?>">
    <meta name="description" content="<?php echo ($seoDescription); ?>">
    <link rel="stylesheet" type="text/css" href="/Template/5u/mobile/Static/css/weui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Template/5u/mobile/Static/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Template/5u/mobile/Static/css/swiper.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Template/5u/mobile/Static/css/index.css"/>
    <style>
        [v-cloak] {display: none !important;}
    </style>
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
<section id="template" v-cloak>
    <body>
    <div class="web">
        <div class="topic_head">
            <img style="width: 100%;" src="/Template/5u/mobile/Static/img/topic_head.png"/>
        </div>
        <div class="topic_body">
        <div class="weui-cell" style="padding: 10px;">
        <div class="weui-cell__bd">
        <p style="font-size: 14px;color: #333333;">推荐专题</p>
        </div>
        <a href="<?php echo U('Article/t_detail');?>"><div class="weui-cell__ft" style="font-size: 13px;color: #586c94;">更多</div></a>
        </div>
        <div class="swiper-container topic-container">
        <div class="swiper-wrapper">
        <li v-for="zt in ztData">
            <a @click="getZtDetail(zt.id)" class="swiper-slide topic-slide">
                <img v-bind:src="zt.cover_url"/>
                <div class="section">
                <p class="section1" v-text="zt.title"></p>
                <p class="section3"><img style="width: 11px;height: 9px;padding-right: 5px;" src="/Template/5u/mobile/Static/img/topic_kan.png"/></p>
                </div>
            </a>
        </li>
        </div>
        </div>
        <!--</div>-->
        <div class="topic_body">
            <div class="weui-cell" style="padding: 10px;">
                <div class="weui-cell__bd">
                    <p style="font-size: 14px;color: #333333;">推荐技术</p>
                </div>
                <a href="/index.php/Mobile/Article/data_list/channel/js"><div class="weui-cell__ft" style="font-size: 13px;color: #586c94;">更多</div></a>
            </div>
            <div class="weui-panel weui-panel_access" style="margin-top: 0px;">
                <div class="weui-panel__bd">
                    <li v-for="list in listData">
                        <a @click="getDetail(list.id)" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd" style="width: 100px;height: 75px;">
                                <img style="height: 100%;" class="weui-media-box__thumb" v-bind:src="list.cover_url" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">{{list.title}}</h4>
                                <p class="weui-media-box__desc">{{list.desc}}</p>
                            </div>
                        </a>
                        <div class="index_sectionB">
                            <p class="index_sectionB1">{{list.cat_name}}</p>
                            <p class="index_sectionB5">{{list.clicks}}阅读</p>
                            <!--<p class="index_sectionB3"><?php echo ($v["level_name"]); ?></p>-->
                            <p class="index_sectionB3">{{list.csd}}</p>
                        </div>
                    </li>
                </div>
                <div class="weui-panel__ft">
                    <a href="/index.php/Mobile/Article/data_list/channel/js">
                        <div class="weui-cell weui-cell_access weui-cell_link" style="padding: 10px;">
                            <div class="weui-cell__bd" style="text-align: center;">查看全部技术</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <a href="/index.php/Mobile/Index/science_js"><div class="index_send"><p>发布技术</p></div></a>
        <div class="index_footK"></div>
        <div class="index_foot">
            <div class="weui-tabbar">
                <a href="/index.php/Mobile/Index" class="weui-tabbar__item">
                    <img src="/Template/5u/mobile/Static/img/index_jishu-active.png" alt="" class="weui-tabbar__icon">
                    <p class="weui-tabbar__label">技术</p>
                </a>
                <a href="/index.php/Mobile/Article/data_list/channel/xq" class="weui-tabbar__item">
                    <img src="/Template/5u/mobile/Static/img/index_need.png" alt="" class="weui-tabbar__icon">
                    <p class="weui-tabbar__label">需求</p>
                </a>
                <a href="/index.php/Mobile/User/user_center" class="weui-tabbar__item">
                    <img src="/Template/5u/mobile/Static/img/index_my.png" alt="" class="weui-tabbar__icon">
                    <p class="weui-tabbar__label">我的</p>
                </a>
            </div>
        </div>
    </div>
    </body>
</section>
<script src="/Template/5u/mobile/Static/js/jquery-2.1.0.js" type="text/javascript" charset="utf-8"></script>
<script src="/Template/5u/mobile/Static/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/Template/5u/mobile/Static/js/index.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/Public/home/js/jquery.md5.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="/Public/js/vue.js"></script>
<script>
    var vm = new Vue({
        el:'#template',
        data:{
            listData: '', //列表数据
            categoryData: '',
            configData:'',
            countData:'',
            page :  '0',
            ztData:'',
            bool : 'true'
        },
        mounted: function () {
            this.$nextTick(function () {
                this.getData();
                this.getCategoryData();
                this.getCount();
                this.getZt();
            })
        },
        updated:function(){
        },
        filters: {
        },
        methods:{
            getCount:function () {
                var _this = this;
                var url = "/<?php echo (API_PATH); ?>/ChannelIndex/index/action/count/channel/js/type/1";
                $.get(url,"", function (res) {
                    _this.countData = res.data;
                })
            },
            getZt:function(){
                var _this=this;
                var url="/<?php echo (API_PATH); ?>/ChannelIndex/index/action/dataList/channel/ztgl/type/1";
                $.get(url,function(res){
                    _this.ztData = res.data;
                });
            },
            getZtDetail:function (id) {
              window.location.href="/index.php/Mobile/Article/tlist/channel/tlist/type/1/data_id/"+id;
            },
            getData:function () {
                var _this = this;
                var url = "/<?php echo (API_PATH); ?>/ChannelIndex/index/action/dataList/channel/js/type/1";
                var data={
                    "page":1,
                    "page_num":10,
                    "order_field":"create_time",
                    "order_by":"DESC",
                }
                $.post(url,data, function (res) {
                    _this.listData = res.data;
                })
            },
            getCategoryData:function () {
                var _this = this;
                var url = "/<?php echo (API_PATH); ?>/ChannelIndex/index/action/dataList/channel/js/type/2";
                $.get(url, function (res) {
                    _this.categoryData = res.data;
                })
            },
            getDetail:function (id) {
                window.location.href="/index.php/Mobile/Article/data_list/channel/js/type/1/data_id/"+id;
            },
            showDetail:function (url) {
                window.location.href=url;
            },
            search:function(id){
                var _this = this;
                var url = "/<?php echo (API_PATH); ?>/ChannelIndex/index/action/dataList/channel/js/type/1/limit_start/0/limit_end/10/category_id/"+id;
                var data={
                    "page":1,
                    "page_num":10,
                    "order_field":"create_time",
                    "order_by":"DESC",
                }
                $.post(url,data,function (res) {
                    _this.listData = res.data;
//					$('.science_tabLi a').removeClass('science_tabLi_a_active');
//					$('#' + id).addClass('science_tabLi_a_active');
                })
            }
        }
    });
</script>




<script type="text/javascript">
    var swiper1 = new Swiper('.swiper-container', {
        slidesPerView : 'auto',
    });
</script>

</html>