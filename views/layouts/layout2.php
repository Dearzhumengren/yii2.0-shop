<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="all">

    <title>商品分类 - Yii2.0商城</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/red.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">


    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="wrapper">
    <!-- ============================================================= TOP NAVIGATION ============================================================= -->
    <nav class="top-bar animate-dropdown">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-margin">
                <ul>
                    <li><a href="<?php echo yii\helpers\Url::to(['index/index']) ?>">首页</a></li>
                    <?php if (\Yii::$app->session['isLogin'] == 1): ?>
                        <li><a href="<?php echo yii\helpers\Url::to(['cart/index']) ?>">我的购物车</a></li>
                        <li><a href="<?php echo yii\helpers\Url::to(['order/index']) ?>">我的订单</a></li>
                    <?php endif; ?>
                </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-6 no-margin">
                <ul class="right">
                    <?php if (\Yii::$app->session['isLogin'] == 1): ?>
                        您好 , 欢迎您回来 <?php echo \Yii::$app->session['loginname']; ?> , <a href="<?php echo yii\helpers\Url::to(['member/logout']); ?>">退出</a>
                    <?php else: ?>
                        <li><a href="<?php echo yii\helpers\Url::to(['member/auth']); ?>">注册</a></li>
                        <li><a href="<?php echo yii\helpers\Url::to(['member/auth']); ?>">登录</a></li>
                    <?php endif; ?>
                </ul>
            </div><!-- /.col -->
        </div><!-- /.container -->
    </nav><!-- /.top-bar -->
    <!-- ============================================================= TOP NAVIGATION : END ============================================================= -->		<!-- ============================================================= HEADER ============================================================= -->
    <header>
        <div class="container no-padding">

            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                <!-- ============================================================= LOGO ============================================================= -->
                <div class="logo">
                    <a href="<?php echo yii\helpers\Url::to(['index/index']) ?>">
                        <img alt="logo" src="/assets/images/yiilogo.PNG" width="233" height="54"/>
                    </a>
                </div><!-- /.logo -->
                <!-- ============================================================= LOGO : END ============================================================= -->		</div><!-- /.logo-holder -->

            <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
                <div class="contact-row">
                    <div class="phone inline">
                        <i class="fa fa-phone"></i> (+086) 123 456 7890
                    </div>
                    <div class="contact inline">
                        <i class="fa fa-envelope"></i> contact@<span class="le-color">jason.com</span>
                    </div>
                </div><!-- /.contact-row -->
                <!-- ============================================================= SEARCH AREA ============================================================= -->
                <div class="search-area">
                    <form>
                        <div class="control-group">
                            <input class="search-field" placeholder="搜索商品" />

                            <ul class="categories-filter animate-dropdown">
                                <li class="dropdown">

                                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category-grid.html">所有分类</a>

                                    <ul class="dropdown-menu" role="menu" >
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>

                                    </ul>
                                </li>
                            </ul>

                            <a style="padding:15px 15px 13px 12px" class="search-button" href="#" ></a>

                        </div>
                    </form>
                </div><!-- /.search-area -->
                <!-- ============================================================= SEARCH AREA : END ============================================================= -->		</div><!-- /.top-search-holder -->

            <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
                <div class="top-cart-row-container">

                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                    <div class="top-cart-holder dropdown animate-dropdown">

                        <div class="basket">

                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <div class="basket-item-count">
                                    <span class="count"><?php echo count($this->params['cart']['products']) ?></span>
                                    <img src="/assets/images/icon-cart.png" alt="" />
                                </div>

                                <div class="total-price-basket">
                                    <span class="lbl">您的购物车:</span>
                                    <span class="total-price">
                    <span class="sign">￥</span><span class="value"><?php echo $this->params['cart']['total'] ?></span>
                    </span>
                                </div>
                            </a>

                            <ul class="dropdown-menu">
                                <?php foreach((array)$this->params['cart']['products'] as $product): ?>
                                    <li>
                                        <div class="basket-item">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                    <div class="thumb">
                                                        <img alt="" src="<?php echo $product['cover'] ?>-picsmall" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-8 col-sm-8 no-margin">
                                                    <div class="title"><?php echo $product['title'] ?></div>
                                                    <div class="price">￥ <?php echo $product['price'] ?></div>
                                                </div>
                                            </div>
                                            <a class="close-btn" href="<?php echo yii\helpers\Url::to(['cart/del', 'cartid' => $product['cartid']]) ?>"></a>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                                <li class="checkout">
                                    <div class="basket-item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="<?php echo yii\helpers\Url::to(['cart/index']) ?>" class="le-button inverse">查看购物车</a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="<?php echo yii\helpers\Url::to(['cart/index']) ?>" class="le-button">去往收银台</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div><!-- /.basket -->
                    </div><!-- /.top-cart-holder -->
                </div><!-- /.top-cart-row-container -->
                <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->		</div><!-- /.top-cart-row -->

        </div><!-- /.container -->

        <!-- ========================================= NAVIGATION ========================================= -->
        <nav id="top-megamenu-nav" class="megamenu-vertical animate-dropdown">
            <div class="container">
                <div class="yamm navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mc-horizontal-menu-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div><!-- /.navbar-header -->
                    <div class="collapse navbar-collapse" id="mc-horizontal-menu-collapse">
                        <ul class="nav navbar-nav">
                            <?php
                            foreach((array)$this->params['menu'] as $menu):
                                ?>
                                <li class="dropdown">
                                    <a href="<?php echo yii\helpers\Url::to(['product/index', 'cateid' => $menu['cateid']]) ?>" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><?php echo $menu['title'] ?></a>
                                    <ul class="dropdown-menu">
                                        <li><div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-12 col-xs-12 col-sm-12">
                                                        <ul>
                                                            <?php foreach((array)$menu['children'] as $child): ?>
                                                                <li><a href="<?php echo yii\helpers\Url::to(['product/index', 'cateid' => $child['cateid']]) ?>"><?php echo $child['title'] ?></a></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div><!-- /.col -->

                                                </div><!-- /.row -->
                                            </div><!-- /.yamm-content --></li>
                                    </ul>
                                </li>
                            <?php
                            endforeach;
                            ?>
                        </ul><!-- /.navbar-nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.navbar -->
            </div><!-- /.container -->
        </nav><!-- /.megamenu-vertical -->
        <!-- ========================================= NAVIGATION : END ========================================= -->
    </header>
    <?php echo $content ?>

    <footer id="footer" class="color-bg">

        <div class="container">
            <div class="row no-margin widgets-row">
                <div class="col-xs-12  col-sm-4 no-margin-left">
                    <!-- ============================================================= FEATURED PRODUCTS ============================================================= -->
                    <div class="widget">
                        <h2>推荐商品</h2>
                        <div class="body">
                            <ul>
                                <?php foreach($this->params['tui'] as $pro): ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 no-margin">
                                                <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]); ?>"><?php echo $pro->title ?></a>
                                                <div class="price">
                                                    <div class="price-prev">￥<?php echo $pro->price ?></div>
                                                    <div class="price-current">￥<?php echo $pro->saleprice ?></div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-3 no-margin">
                                                <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]) ?>" class="thumb-holder">
                                                    <img alt="<?php echo $pro->title ?>" src="<?php echo $pro->cover ?>-picsmall" data-echo="<?php echo $pro->cover ?>-picsmall" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- /.body -->
                    </div> <!-- /.widget -->
                    <!-- ============================================================= FEATURED PRODUCTS : END ============================================================= -->            </div><!-- /.col -->

                <div class="col-xs-12 col-sm-4 ">
                    <!-- ============================================================= ON SALE PRODUCTS ============================================================= -->
                    <div class="widget">
                        <h2>热卖商品</h2>
                        <div class="body">
                            <ul>
                                <?php foreach($this->params['hot'] as $pro): ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 no-margin">
                                                <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]); ?>"><?php echo $pro->title ?></a>
                                                <div class="price">
                                                    <div class="price-prev">￥<?php echo $pro->price ?></div>
                                                    <div class="price-current">￥<?php echo $pro->saleprice ?></div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-3 no-margin">
                                                <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]) ?>" class="thumb-holder">
                                                    <img alt="<?php echo $pro->title ?>" src="<?php echo $pro->cover ?>-picsmall" data-echo="<?php echo $pro->cover ?>-picsmall" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- /.body -->
                    </div> <!-- /.widget -->
                    <!-- ============================================================= ON SALE PRODUCTS : END ============================================================= -->            </div><!-- /.col -->

                <div class="col-xs-12 col-sm-4 ">
                    <!-- ============================================================= TOP RATED PRODUCTS ============================================================= -->
                    <div class="widget">
                        <h2>最新商品</h2>
                        <div class="body">
                            <ul>
                                <?php foreach($this->params['new'] as $pro): ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 no-margin">
                                                <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]); ?>"><?php echo $pro->title ?></a>
                                                <div class="price">
                                                    <div class="price-prev">￥<?php echo $pro->price ?></div>
                                                    <div class="price-current">￥<?php echo $pro->saleprice ?></div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-3 no-margin">
                                                <a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]) ?>" class="thumb-holder">
                                                    <img alt="<?php echo $pro->title ?>" src="<?php echo $pro->cover ?>-picsmall" data-echo="<?php echo $pro->cover ?>-picsmall" />
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- /.body -->
                    </div><!-- /.widget -->
                    <!-- ============================================================= TOP RATED PRODUCTS : END ============================================================= -->            </div><!-- /.col -->

            </div><!-- /.widgets-row-->
        </div><!-- /.container -->

        <div class="sub-form-row">
            <!--<div class="container">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                    <form role="form">
                        <input placeholder="Subscribe to our newsletter">
                        <button class="le-button">Subscribe</button>
                    </form>
                </div>
            </div>--><!-- /.container -->
        </div><!-- /.sub-form-row -->

        <div class="link-list-row">
            <div class="container no-padding">
                <div class="col-xs-12 col-md-4 ">
                    <!-- ============================================================= CONTACT INFO ============================================================= -->
                    <div class="contact-info">
                        <div class="footer-logo">
                            <img alt="logo" src="/assets/images/yiilogo.PNG" width="233" height="54"/>
                        </div><!-- /.footer-logo -->

                        <p class="regular-bold"> 请通过电话，电子邮件随时联系我们</p>

                        <p>
                            西城区二环到三环德胜门外大街10号TCL大厦3层(马甸桥南), 北京市西城区, 中国
                            <br>
                        </p>

                        <!--<div class="social-icons">
                            <h3>Get in touch</h3>
                            <ul>
                                <li><a href="http://facebook.com/transvelo" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-pinterest"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-stumbleupon"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="#" class="fa fa-vk"></a></li>
                            </ul>
                        </div>--><!-- /.social-icons -->

                    </div>
                    <!-- ============================================================= CONTACT INFO : END ============================================================= -->            </div>

                <div class="col-xs-12 col-md-8 no-margin">
                    <!-- ============================================================= LINKS FOOTER ============================================================= -->
                    <div class="link-widget">
                        <div class="widget">
                            <h3>最新商品</h3>
                            <ul>
                                <?php foreach($this->params['new'] as $pro): ?>
                                    <li><a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]) ?>"><?php echo $pro->title; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.link-widget -->

                    <div class="link-widget">
                        <div class="widget">
                            <h3>热门商品</h3>
                            <ul>
                                <?php foreach($this->params['hot'] as $pro): ?>
                                    <li><a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]) ?>"><?php echo $pro->title; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.link-widget -->

                    <div class="link-widget">
                        <div class="widget">
                            <h3>促销商品</h3>
                            <ul>
                                <?php foreach($this->params['sale'] as $pro): ?>
                                    <li><a href="<?php echo yii\helpers\Url::to(['product/detail', 'productid' => $pro->productid]) ?>"><?php echo $pro->title; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.link-widget -->
                    <!-- ============================================================= LINKS FOOTER : END ============================================================= -->            </div>
            </div><!-- /.container -->
        </div><!-- /.link-list-row -->

        <div class="copyright-bar">
            <div class="container">
                <div class="col-xs-12 col-sm-6 no-margin">
                    <div class="copyright">
                        &copy; <a href="<?php echo yii\helpers\Url::to(['index/index']) ?>">yii2.com</a> - all rights reserved
                    </div><!-- /.copyright -->
                </div>
                <div class="col-xs-12 col-sm-6 no-margin">
                    <div class="payment-methods ">
                        <ul>
                            <li><img alt="" src="/assets/images/payments/payment-visa.png"></li>
                            <li><img alt="" src="/assets/images/payments/payment-master.png"></li>
                            <li><img alt="" src="/assets/images/payments/payment-paypal.png"></li>
                            <li><img alt="" src="/assets/images/payments/payment-skrill.png"></li>
                        </ul>
                    </div><!-- /.payment-methods -->
                </div>
            </div><!-- /.container -->
        </div><!-- /.copyright-bar -->

    </footer><!-- /#footer -->

    <!-- ============================================================= FOOTER : END ============================================================= -->	</div><!-- /.wrapper -->

<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery-1.10.2.min.js"></script>
<script src="/assets/js/jquery-migrate-1.2.1.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/gmap3.min.js"></script>
<script src="/assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/css_browser_selector.min.js"></script>
<script src="/assets/js/echo.min.js"></script>
<script src="/assets/js/jquery.easing-1.3.min.js"></script>
<script src="/assets/js/bootstrap-slider.min.js"></script>
<script src="/assets/js/jquery.raty.min.js"></script>
<script src="/assets/js/jquery.prettyPhoto.min.js"></script>
<script src="/assets/js/jquery.customSelect.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/scripts.js"></script>

<script>
    $("#createlink").click(function(){
        $(".billing-address").slideDown();
    });
    $("li.disabled").hide();
    $(".expressshow").hide();
    $(".express").click(function(e){
        e.preventDefault();
    });
    $(".express").hover(function(){
        var a = $(this);
        if ($(this).attr('data') != 'ok') {
            $.get('<?php echo yii\helpers\Url::to(['order/getexpress']) ?>', {'expressno':$(this).attr('data')}, function(res) {
                var str = "";
                if (res.message = 'ok') {
                    for(var i = 0;i<res.data.length;i++) {
                        str += "<p>"+res.data[i].context+" "+res.data[i].time+" </p>";
                    }
                }
                a.find(".expressshow").html(str);
                a.attr('data', 'ok');
            }, 'json');
        }
        $(this).find(".expressshow").show();
    }, function(){
        $(this).find(".expressshow").hide();
    });
</script>

</body>
</html>
