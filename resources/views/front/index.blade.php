@extends('front.layout.master');
@section('body');
@section('sidebar');
    @include('front.layout.sidebar');
@endsection
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
            @yield('sidebar');
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <h4>Sản phẩm khuyến mãi </h4>
                <ul class="thumbnails">
                    @foreach($productDiscout as $productDiscout)
                        <li class="span3">
                            <div class="thumbnail">
                                <a  href="product_details.html"><img src="front/img/products/6.jpg" alt=""/></a>
                                <div class="caption">
                                    <h5>{{$productDiscout->title}}</h5>
                                    <p>

                                    </p>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <h4>Sản phẩm nổi bật </h4>
                <ul class="thumbnails">
                    @foreach($product as $product)
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="product_details.html"><img src="front/img/products/6.jpg" alt=""/></a>
                            <div class="caption">
                                <h5>{{$product->title}}</h5>
                                <p>

                                </p>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <h4>Sản phẩm mới </h4>
                <ul class="thumbnails">
                    @foreach($productNew as $productNew)
                        <li class="span3">
                            <div class="thumbnail">
                                <a  href="product_details.html"><img src="front/img/products/6.jpg" alt=""/></a>
                                <div class="caption">
                                    <h5>{{$productNew->title}}</h5>
                                    <p>

                                    </p>
                                    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>

@endsection
