<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="Bookmark" href="/favicon.ico">
    <link rel="Shortcut Icon" href="/favicon.ico"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/admin/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/admin/static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="/admin/lib/Hui-iconfont/1.0.8/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="/admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>Admin Home Page</title>
    <meta name="keywords" content="Admin Home Page">
    <meta name="description" content="Admin Home Page">
</head>
<body>
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"><a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">Home Page</a>
            <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
            <span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">
                <ul class="cl">
                    <li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i
                                class="Hui-iconfont">&#xe600;</i> Add <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onclick="article_add('add information','article-add.html')"><i
                                        class="Hui-iconfont">&#xe616;</i> Information</a></li>
                            <li><a href="javascript:;" onclick="picture_add('add picture','picture-add.html')"><i
                                        class="Hui-iconfont">&#xe613;</i> Picture</a></li>
                            <li><a href="javascript:;" onclick="product_add('add product','product-add.html')"><i
                                        class="Hui-iconfont">&#xe620;</i> Product</a></li>
                            <li><a href="javascript:;" onclick="member_add('add user','member-add.html','','510')"><i
                                        class="Hui-iconfont">&#xe60d;</i> User</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li>Super administrator</li>
                    <li class="dropDown dropDown_hover">
                        <a href="#" class="dropDown_A">{{Auth::guard('admin') -> user() -> username}}<i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onClick="myselfinfo()">self information</a></li>
                            <li><a href="#">switch account</a></li>
                            <li><a href="/admin/public/logout">logout</a></li>
                        </ul>
                    </li>
                    <li id="Hui-msg"><a href="#" title="notification"><span class="badge badge-danger">1</span><i
                                class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a></li>
                    <li id="Hui-skin" class="dropDown right dropDown_hover"><a href="javascript:;" class="dropDown_A"
                                                                               title="change skin"><i class="Hui-iconfont"
                                                                                             style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="default(black)">default(black)</a></li>
                            <li><a href="javascript:;" data-val="blue" title="blue">blue</a></li>
                            <li><a href="javascript:;" data-val="green" title="green">green</a></li>
                            <li><a href="javascript:;" data-val="red" title="red">red</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="yellow">yellow</a></li>
                            <li><a href="javascript:;" data-val="orange" title="orange">orange</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> Information management<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="article-list.html" data-title="information management" href="javascript:void(0)">Information management</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> Picture management<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="picture-list.html" data-title="Picture management" href="javascript:void(0)">picture management</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe620;</i> product management<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="product-brand.html" data-title="brand management" href="javascript:void(0)">brand management</a></li>
                    <li><a data-href="product-category.html" data-title="category management" href="javascript:void(0)">category management</a></li>
                    <li><a data-href="product-list.html" data-title="product management" href="javascript:void(0)">product management</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-comments">
            <dt><i class="Hui-iconfont">&#xe622;</i> Comment management<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="http://h-ui.duoshuo.com/admin/" data-title="Comment list" href="javascript:;">comment list</a>
                    </li>
                    <li><a data-href="feedback-list.html" data-title="Feedback" href="javascript:void(0)">feedback</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> Member management<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="member-list.html" data-title="Member list" href="javascript:;">member list</a></li>
                    <li><a data-href="member-del.html" data-title="removed member" href="javascript:;">removed member</a></li>
                    <li><a data-href="member-level.html" data-title="member level management" href="javascript:;">member level management</a></li>
                    <li><a data-href="member-scoreoperation.html" data-title="credit management" href="javascript:;">credit management</a></li>
                    <li><a data-href="member-record-browse.html" data-title="browse history" href="javascript:void(0)">browse history</a>
                    </li>
                    <li><a data-href="member-record-download.html" data-title="download history" href="javascript:void(0)">download history</a>
                    </li>
                    <li><a data-href="member-record-share.html" data-title="share history" href="javascript:void(0)">share history</a>
                    </li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> administrator management<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="admin-role.html" data-title="role management" href="javascript:void(0)">role management</a></li>
                    <li><a data-href="/admin/auth/index" data-title="authority management" href="javascript:void(0)">authority management</a></li>
                    <li><a data-href="/admin/manager/index" data-title="administrator list" href="javascript:void(0)">administrator list</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-tongji">
            <dt><i class="Hui-iconfont">&#xe61a;</i> System statistics<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="charts-1.html" data-title="line chart" href="javascript:void(0)">line chart</a></li>
                    <li><a data-href="charts-2.html" data-title="Timeline line chart" href="javascript:void(0)">Timeline line chart</a></li>
                    <li><a data-href="charts-3.html" data-title="Area map" href="javascript:void(0)">area map</a></li>
                    <li><a data-href="charts-4.html" data-title="Histogram" href="javascript:void(0)">histogram</a></li>
                    <li><a data-href="charts-5.html" data-title="Pie chart" href="javascript:void(0)">pie chart</a></li>
                    <li><a data-href="charts-6.html" data-title="3D line chart" href="javascript:void(0)">3D line chart</a></li>
                    <li><a data-href="charts-7.html" data-title="3D pie chart" href="javascript:void(0)">3D pie chart</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-system">
            <dt><i class="Hui-iconfont">&#xe62e;</i> System management<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="system-base.html" data-title="system setting" href="javascript:void(0)">system setting</a></li>
                    <li><a data-href="system-category.html" data-title="section management" href="javascript:void(0)">section management</a></li>
                    <li><a data-href="system-data.html" data-title="data dictionary" href="javascript:void(0)">data dictionary</a></li>
                    <li><a data-href="system-shielding.html" data-title="block word" href="javascript:void(0)">block word</a></li>
                    <li><a data-href="system-log.html" data-title="system log" href="javascript:void(0)">system log</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a>
</div>
<section class="Hui-article-box">
    <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
        <div class="Hui-tabNav-wp">
            <ul id="min_title_list" class="acrossTab cl">
                <li class="active">
                    <span title="My desktop" data-href="/admin/index/welcome">my desktop</span>
                    <em></em></li>
            </ul>
        </div>
        <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S"
                                                  href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a
                id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a>
        </div>
    </div>
    <div id="iframe_box" class="Hui-article">
        <div class="show_iframe">
            <div style="display:none" class="loading"></div>
            <iframe scrolling="yes" frameborder="0" src="/admin/index/welcome"></iframe>
        </div>
    </div>
</section>

<div class="contextMenu" id="Huiadminmenu">
    <ul>
        <li id="closethis">close current page</li>
        <li id="closeall">close all pages</li>
    </ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
    $(function () {
        /*$("#min_title_list li").contextMenu('Huiadminmenu', {
            bindings: {
                'closethis': function(t) {
                    console.log(t);
                    if(t.find("i")){
                        t.find("i").trigger("click");
                    }
                },
                'closeall': function(t) {
                    alert('Trigger was '+t.id+'\nAction was Email');
                },
            }
        });*/
    });

    /*个人信息*/
    function myselfinfo() {
        layer.open({
            type: 1,
            area: ['300px', '200px'],
            fix: false, //不固定
            maxmin: true,
            shade: 0.4,
            title: 'view information',
            content: '<div>administrator information</div>'
        });
    }

    /*资讯-添加*/
    function article_add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*图片-添加*/
    function picture_add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*产品-添加*/
    function product_add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*用户-添加*/
    function member_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }


</script>


</body>
</html>
