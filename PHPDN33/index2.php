<!DOCTYPE html>

<html lang="en">
<head>
   <?php
    require "header.php";
   ?>
        <title>D3T Mobile</title>
    </head>
    <body>
        <?php
        require "menu2.php";
        ?>
            <div class="container-fluid">
                <div class="container" id="slide-show">
                    <div class="row">
                        <div class="col-sm-9" id="slide-show-hot">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="image/sl1.jpg" alt="Los Angeles" style="width:100%;">
                                    </div>

                                    <div class="item">
                                        <img src="image/sl2.jpg" alt="Chicago" style="width:100%;">
                                    </div>

                                    <div class="item">
                                        <img src="image/sl3.jpg" alt="New york" style="width:100%;">
                                    </div>
                                    <div class="item">
                                        <img src="image/sl4.jpg" alt="New york" style="width:100%;">
                                    </div>
                                </div>
                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3" id="service">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="html5-main-video">
                                        <i style="color: red;">Những lưu ý khi mua iphone!!</i>
                                        <video width="280px" height="176px" controls>

                                            <source src="image/10 điều cơ bản cần biết trước khi mua iPhone!.mp4" type="video/mp4">

                                            </video>
                                        </div>
                                        <div class="service">
                                            <a href="#">
                                                <div >
                                                    <img src="image/qc1.jpg" alt=""style="width: 280px;height: 115px;"/>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="container" style="padding: 0px;">
                    <div   >
                        <div>
                            <img style="width: 100%;"src="image/quangcao1.PNG" alt=""/>
                        </div>
                    </div>
                </div><br>
                <div class="container-fluid">
                    <div class="container" id="product-header">
                        <div>
                            <i class="fa fa-list-alt" style="padding-right: 5px;"></i>
                            <span style="color: #1b6d85; font-size: 23px;">Sản phẩm mới</span>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="container">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="item"><h4> 
                                <img src="image/cr1.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr2.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr3.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr4.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr5.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr6.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr7.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr8.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr9.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr10.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr11.PNG" alt=""/>
                            </h4></div>
                            <div class="item"><h4>
                                <img src="image/cr12.PNG" alt=""/>
                            </h4></div>
                        </div>
                        <script>
                            var owl = $('.owl-carousel');
                            owl.owlCarousel({
                                loop: true,
                                nav: true,
                                margin: 10,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    600: {
                                        items: 3
                                    },
                                    960: {
                                        items: 5
                                    },
                                    1200: {
                                        items: 6
                                    }
                                }
                            });
                            owl.on('mousewheel', '.owl-stage', function (e) {
                                if (e.deltaY > 0) {
                                    owl.trigger('next.owl');
                                } else {
                                    owl.trigger('prev.owl');
                                }
                                e.preventDefault();
                            });
                        </script>
                    </div>
                </div>
                <div class="container" id="product-header">
                    <div>
                        <i class="fa fa-list-alt" style="padding-right: 5px;"></i>
                        <span style="color: #1b6d85;font-size: 23px;">Top Iphone hot nhất</span>
                    </div>
                </div>
                
                <div class="container-fluid" id="product-list">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9" id="product">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-3 item-product">
                                            <div class="grid" class="item-img">
                                                <figure class="effect-zoe">
                                                    <a href="detail.html">
                                                        <img src="image/iphone-6s-plus_1.jpg" alt=""/>
                                                    </a>
                                                    <figcaption>
                                                        <p>
                                                            <span><a href="#">Thông tin chi tiết</a></span>
                                                        </p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item-name">
                                                <a href="detail.html">iphone-6s-plus</a>
                                            </div>
                                            <div class="item-price">
                                                <span class="new-price">9.000.000 đ</span>
                                                <span class="old-price">12.000.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 item-product">
                                            <div class="grid" class="item-img">
                                                <figure class="effect-zoe">
                                                    <a href="detail.html">
                                                        <img src="image/iphone-7-plus_1.jpg" alt=""/>
                                                    </a>
                                                    <figcaption>
                                                        <p>
                                                            <span>
                                                                <a href="#">Thông tin chi tiết</a>
                                                            </span>
                                                        </p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item-name">
                                                <a href="detail.html">iphone-7-plus</a>
                                            </div>
                                            <div class="item-price">
                                                <span class="new-price">10.000.000 đ</span>
                                                <span class="old-price">15.000.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 item-product">
                                            <div class="grid" class="item-img">
                                                <figure class="effect-zoe">
                                                    <a href="#">
                                                        <img src="image/iphone-6_1.jpg" alt=""/>
                                                    </a>

                                                    <figcaption>
                                                        <p>
                                                            <span>
                                                                <a href="#">Thông tin chi tiết</a>
                                                            </span>
                                                        </p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item-name">
                                                <a href="detail.html">iphone-6</a>
                                            </div>
                                            <div class="item-price">
                                                <span class="new-price">6.000.000 đ</span>
                                                <span class="old-price">8.000.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 item-product">
                                            <div class="grid" class="item-img">
                                                <figure class="effect-zoe">
                                                    <a href="detail.html">
                                                        <img src="image/iphone-7_1.jpg" alt=""/>
                                                    </a>
                                                    <figcaption>
                                                        <p>
                                                            <span>
                                                                <a href="#">Thông tin chi tiết</a>
                                                            </span>
                                                        </p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item-name">
                                                <a href="detail.html">iphone-7</a>
                                            </div>
                                            <div class="item-price">
                                                <span class="new-price">10.000.000 đ</span>
                                                <span class="old-price">15.000.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 item-product">
                                            <div class="grid" class="item-img">
                                                <figure class="effect-zoe">
                                                    <a href="detail.html">
                                                        <img src="image/iphone-8-plus_1.jpg" alt=""/>
                                                    </a>
                                                    <figcaption>
                                                        <p>
                                                            <span>
                                                                <a href="#">Thông tin chi tiết</a>
                                                            </span>
                                                        </p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item-name">
                                                <a href="detail.html">iphone-8-plus</a>
                                            </div>
                                            <div class="item-price">
                                                <span class="new-price">20.000.000 đ</span>
                                                <span class="old-price">25.000.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 item-product">
                                            <div class="grid" class="item-img">
                                                <figure class="effect-zoe">
                                                    <a href="detail.html">
                                                        <img src="image/iphone-7_1.jpg" alt=""/>
                                                    </a>
                                                    <figcaption>
                                                        <p>
                                                            <span>
                                                                <a href="#">Thông tin chi tiết</a>
                                                            </span>
                                                        </p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item-name">
                                                <a href="detail.html">iphone-7</a>
                                            </div>
                                            <div class="item-price">
                                                <span class="new-price">10.000.000 đ</span>
                                                <span class="old-price">15.000.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 item-product">
                                            <div class="grid" class="item-img">
                                                <figure class="effect-zoe">
                                                    <a href="detail.html">
                                                        <img src="image/iphone-7_1.jpg" alt=""/>
                                                    </a>
                                                    <figcaption>
                                                        <p>
                                                            <span>
                                                                <a href="#">Thông tin chi tiết</a>
                                                            </span>
                                                        </p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item-name">
                                                <a href="detail.html">iphone-7</a>
                                            </div>
                                            <div class="item-price">
                                                <span class="new-price">10.000.000 đ</span>
                                                <span class="old-price">15.000.000 đ</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 item-product">
                                            <div class="grid" class="item-img">
                                                <figure class="effect-zoe">
                                                    <a href="detail.html">
                                                        <img src="image/iphone-7-plus_1.jpg" alt=""/>
                                                    </a>
                                                    <figcaption>
                                                        <p>
                                                            <span>
                                                                <a href="#">Thông tin chi tiết</a>
                                                            </span>
                                                        </p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="item-name">
                                                <a href="#">iphone-X</a>
                                            </div>
                                            <div class="item-price">
                                                <span class="new-price">22.000.000 đ</span>
                                                <span class="old-price">28.000.000 đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-3" id="right">
                                <div class="container-fluid" id="menu-right">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="menu-right-header">
                                                <i class="fa fa-tags" style="padding-right: 2%;"></i>
                                                Sản phẩm bán chạy nhất
                                            </div>
                                            <div class="menu-right-content">
                                                <a href="#">
                                                    <div class="product-seller">
                                                        <div class="img-seller">
                                                            <img src="image/iphone-8-plus_1.jpg" alt=""/>
                                                        </div>
                                                        <div class="name-seller">
                                                            iphone-8-plus
                                                        </div>
                                                        <div class="price-seller">
                                                            <span class="new">20.000.000 đ</span>
                                                            <span class="old">25.000.000 đ</span>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="#">
                                                    <div class="product-seller">
                                                        <div class="img-seller">
                                                            <img src="image/iphone-7-plus_1.jpg" alt=""/>
                                                        </div>
                                                        <div class="name-seller">
                                                            iphone-7-plus
                                                        </div>
                                                        <div class="price-seller">
                                                            <span class="new">12.000.000 đ</span>
                                                            <span class="old">15.000.000 đ</span>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" id="footer-menu">
                   <div class="container " style="color:#ffffff">
                    <div class="col-sm-3">
                        <h3>FEAUTURED SALE</h3>
                        <p>Elexis Hudson</p>
                        <p>American Apparel</p>
                        <p>Ben Sherman</p>
                        <p>Big Buddha</p>
                        <p>Chanel</p>
                        <p>Christian Audigier</p>
                        <p>Coach</p>
                        <p>Cole Haan</p>

                    </div>
                    <div class="col-sm-3">
                        <h3>MENS STORE</h3>
                        <p>Elexis Hudson</p>
                        <p>American Apparel</p>
                        <p>Ben Sherman</p>
                        <p>Big Buddha</p>
                        <p>Chanel</p>
                        <p>Christian Audigier</p>
                        <p>Coach</p>
                        <p>Cole Haan</p>
                    </div>
                    <div class="col-sm-3">
                        <h3>WOMEN STORE</h3>
                        <p>Elexis Hudson</p>
                        <p>American Apparel</p>
                        <p>Ben Sherman</p>
                        <p>Big Buddha</p>
                        <p>Chanel</p>
                        <p>Christian Audigier</p>
                        <p>Coach</p>
                        <p>Cole Haan</p>
                    </div>
                    <div class="col-sm-3">
                        <h3>QUICK LINKS</h3>
                        <p>Elexis Hudson</p>
                        <p>American Apparel</p>
                        <p>Ben Sherman</p>
                        <p>Big Buddha</p>
                        <p>Chanel</p>
                        <p>Christian Audigier</p>
                        <p>Coach</p>
                        <p>Cole Haan</p>
                    </div>
                </div>
            </div>
        </div><!--end Footer menu-->
    </body>
    </html>
