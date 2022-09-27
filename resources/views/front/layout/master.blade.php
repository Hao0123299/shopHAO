<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title') | Shop Điện Máy Hào</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Less styles -->
    <!-- Other Less css file //different less files has different color scheam-->
    <link rel="stylesheet/less" type="text/css" href="front/less/simplex.less">
    <link rel="stylesheet/less" type="text/css" href="front/less/classified.less">
    <link rel="stylesheet/less" type="text/css" href="front/less/amelia.less">

    <link rel="stylesheet/less" type="text/css" href="front/less/bootshop.less">
    <script src="front/js/less.js" type="text/javascript"></script>

    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="front/bootshop/bootstrap.min.css" media="screen"/>
    <link href="front/css/base.css" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->
    <link href="front/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="front/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="front/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="front/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="front/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="front/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="front/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="front/img/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>
</head>
<body>
<div id="header">
    <div class="container">
        <div id="welcomeLine" class="row">
            <div class="span6">Xin chào!<strong> Hào</strong></div>
            <div class="span6">
                <div class="pull-right">
{{--                    <a href="product_summary.html"><span class="">Fr</span></a>--}}
{{--                    <a href="product_summary.html"><span class="">Es</span></a>--}}
{{--                    <span class="btn btn-mini">En</span>--}}
{{--                    <a href="product_summary.html"><span>&pound;</span></a>--}}
                    <span class="btn btn-mini">15.500</span>
                    <a href="product_summary.html"><span class="">đ</span></a>
                    <a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Giỏ hàng của bạn </span> </a>
                </div>
            </div>
        </div>
        <!-- Navbar ================================================== -->
        <div id="logoArea" class="navbar">
            <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-inner">
                <a class="brand" href="index.html"><img src="front/img/logo.png" alt="Bootsshop"/></a>
                <form class="form-inline navbar-search" method="post" action="products.html" >
                    <input id="srchFld" class="srchTxt" type="text" />
                    <select class="srchTxt">
                        <option>Tất cả</option>
                        <option>CLOTHES </option>
                        <option>FOOD AND BEVERAGES </option>
                        <option>HEALTH & BEAUTY </option>
                        <option>SPORTS & LEISURE </option>
                        <option>BOOKS & ENTERTAINMENTS </option>
                    </select>
                    <button type="submit" id="submitButton" class="btn btn-primary">Tìm kiếm</button>
                </form>
                <ul id="topMenu" class="nav pull-right">
                    <li class=""><a href="special_offer.html">Sản phẩm giảm giá</a></li>
{{--                    <li class=""><a href="normal.html">Delivery</a></li>--}}
                    <li class=""><a href="contact.html">Liên hệ</a></li>
                    <li class="">
                        <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Đăng nhập</span></a>
                        <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3>Thông tin đăng nhập</h3>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal loginFrm">
                                    <div class="control-group">
                                        <input type="text" id="inputEmail" placeholder="Tài khoản email">
                                    </div>
                                    <div class="control-group">
                                        <input type="password" id="inputPassword" placeholder="Mật khẩu">
                                    </div>
                                    <div class="control-group">
                                        <label class="checkbox">
                                            <input type="checkbox"> Ghi nhứ thông tin
                                        </label>
                                    </div>
                                </form>
                                <button type="submit" class="btn btn-success">Đăng nhập</button>
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Đóng</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header End====================================================================== -->

{{--Body--}}
@yield('body');
<!-- Footer ================================================================== -->
<div  id="footerSection">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h5>ACCOUNT</h5>
                <a href="login.html">YOUR ACCOUNT</a>
                <a href="login.html">PERSONAL INFORMATION</a>
                <a href="login.html">ADDRESSES</a>
                <a href="login.html">DISCOUNT</a>
                <a href="login.html">ORDER HISTORY</a>
            </div>
            <div class="span3">
                <h5>INFORMATION</h5>
                <a href="contact.html">CONTACT</a>
                <a href="register.html">REGISTRATION</a>
                <a href="legal_notice.html">LEGAL NOTICE</a>
                <a href="tac.html">TERMS AND CONDITIONS</a>
                <a href="faq.html">FAQ</a>
            </div>
            <div class="span3">
                <h5>OUR OFFERS</h5>
                <a href="#">NEW PRODUCTS</a>
                <a href="#">TOP SELLERS</a>
                <a href="special_offer.html">SPECIAL OFFERS</a>
                <a href="#">MANUFACTURERS</a>
                <a href="#">SUPPLIERS</a>
            </div>
            <div id="socialMedia" class="span3 pull-right">
                <h5>SOCIAL MEDIA </h5>
                <a href="#"><img width="60" height="60" src="front/img/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="#"><img width="60" height="60" src="front/img/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="#"><img width="60" height="60" src="front/img/youtube.png" title="youtube" alt="youtube"/></a>
            </div>
        </div>
        <p class="pull-right">&copy; Bootshop</p>
    </div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="front/js/jquery.js" type="text/javascript"></script>
<script src="front/js/bootstrap.min.js" type="text/javascript"></script>
<script src="front/js/google-code-prettify/prettify.js"></script>

<script src="front/js/bootshop.js"></script>
<script src="front/js/jquery.lightbox-0.5.js"></script>

<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
    <link rel="stylesheet" href="front/switch/themeswitch.css" type="text/css" media="screen" />
    <script src="front/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
    <div id="themeContainer">
        <div id="hideme" class="themeTitle">Style Selector</div>
        <div class="themeName">Oregional Skin</div>
        <div class="images style">
            <a href="front/css/#" name="bootshop"><img src="front/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
            <a href="front/css/#" name="businessltd"><img src="front/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
        </div>
        <div class="themeName">Bootswatch Skins (11)</div>
        <div class="images style">
            <a href="front/css/#" name="amelia" title="Amelia"><img src="front/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="spruce" title="Spruce"><img src="front/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
            <a href="front/css/#" name="superhero" title="Superhero"><img src="front/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="cyborg"><img src="front/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="cerulean"><img src="front/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="journal"><img src="front/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="readable"><img src="front/switch/images/clr/readable.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="simplex"><img src="front/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="slate"><img src="front/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="spacelab"><img src="front/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="united"><img src="front/switch/images/clr/united.png" alt="bootstrap business templates"></a>
            <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
        </div>
        <div class="themeName">Background Patterns </div>
        <div class="images patterns">
            <a href="front/css/#" name="pattern1"><img src="front/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
            <a href="front/css/#" name="pattern2"><img src="front/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern3"><img src="front/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern4"><img src="front/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern5"><img src="front/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern6"><img src="front/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern7"><img src="front/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern8"><img src="front/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern9"><img src="front/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern10"><img src="front/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

            <a href="front/css/#" name="pattern11"><img src="front/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern12"><img src="front/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern13"><img src="front/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern14"><img src="front/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern15"><img src="front/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

            <a href="front/css/#" name="pattern16"><img src="front/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern17"><img src="front/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern18"><img src="front/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern19"><img src="front/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
            <a href="front/css/#" name="pattern20"><img src="front/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

        </div>
    </div>
</div>
<span id="themesBtn"></span>
</body>
</html>
