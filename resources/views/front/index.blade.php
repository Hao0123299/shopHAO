@extends('front.layout.master');
@section('body');
@section('title', 'Trang chủ');

<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <a href="register.html"><img style="width:100%" src="front/img/carousel/1.png" alt="special offers"/></a>
                    <div class="carousel-caption">
                        <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <div id="sidebar" class="span3">
                <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="front/img/ico-cart.png" alt="cart">3 Sản phẩm  <span class="badge badge-warning pull-right">15.500đ</span></a></div>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                    <li class="subMenu"><a> Điện thoại </a>
                        <ul style="display:none">
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>
                            <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>
                        </ul>
                    </li>
                </ul>
                <br/>
                <div class="thumbnail">
                    <img src="front/img/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
                    <div class="caption">
                        <h5>Panasonic</h5>
                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> Xem chi tiết<i class="icon-zoom-in"></i></a> <a class="btn" href="#">Thêm hàng vào <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">22.200đ</a></h4>
                    </div>
                </div><br/>

                <div class="thumbnail">
                    <img src="front/img/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
                    <div class="caption">
                        <h5>Phương thức thanh toán</h5>
                    </div>
                </div>
            </div>
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <div class="well well-small">
                    <h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
                    <div class="row-fluid">
                        <div id="featured" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="front/img/products/b1.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="front/img/products/b2.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="front/img/products/b3.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="front/img/products/b4.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="front/img/products/5.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <i class="tag"></i>
                                                <a href="product_details.html"><img src="front/img/products/6.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="front/img/products/7.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="front/img/products/8.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="front/img/products/9.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="front/img/products/10.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="front/img/products/11.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="front/img/products/1.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="front/img/products/2.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="front/img/products/3.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="front/img/products/4.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="product_details.html"><img src="front/img/products/5.jpg" alt=""></a>
                                                <div class="caption">
                                                    <h5>Product name</h5>
                                                    <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                        </div>
                    </div>
                </div>
                <h4>Sản phẩm mới </h4>
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="front/img/products/6.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>

                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="front/img/products/7.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>Product name</h5>
                                <p>
                                    Lorem Ipsum is simply dummy text.
                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>

@endsection
