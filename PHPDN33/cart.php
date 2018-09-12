<!DOCTYPE html>

<html lang="en">
<head>
   <?php
    require "header.php";
   ?>
    <title>Giỏ hàng</title>
</head>

<body>
     <div class="container-fluid w3-yellow" id="topheader">
        <div class="container">
            <div class="row ">
                <div class="col-sm-4 list">
                    <a href="#">
                        <span class="fa fa-bell-o"></span>Thông báo</a>
                    </div>
                    <div class="col-sm-4 list">
                        <a href="#">
                          <span class="fa fa-question-circle"></span>Trợ giúp</a>
                      </div>
                      <div class="col-sm-4 list">
                        <span class="glyphicon glyphicon-user"></span>
                        <a href="#">Tài khoản cá nhân</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="header" style="box-shadow: 1px 3px #7094db">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-3" id="logo">
                        <a href="index.php">
                            <img src="image/logo.jpg" alt="logo" width="110px" height="60px">
                        </a>
                    </div>
                    <div class="col-xs-9  col-sm-9">
                        <div class="container-fluid">
                            <div class="row" id="search">
                                <div class="col-sm-12" style="padding-right: 1px;">
                                    <input type="search" name="txtSearch" id="txtSearch" placeholder="Bạn cần tìm gì?">
                                </div>
                                
                            </div>
                        </div>
                    </div>                                      
                </div>
            </div>
        </div>
        <div class="container content-cart">
        <div class="container title-cart">
            Giỏ hàng
        </div>
        <div class="container hello">
            <span class="glyphicon glyphicon-info-sign" style="color:#7094db;margin-right: 10px;"></span>Chào mừng đến với D3T.vn!
        </div>
        <div class="container table-cart">
            <table class="table table-bordered table-responsive table-condensed table-hover">
                <tr>
                    <th><input type="checkbox"></th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Số tiền</th>
                    <th>Thao tác</th>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td>IphoneX</td>
                    <td>1</td>
                    <td>20.000.000</td>
                    <td><a class="btn btn-danger">Xóa</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td>IphoneX</td>
                    <td>1</td>
                    <td>20.000.000</td>
                    <td><a class="btn btn-danger">Xóa</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td>IphoneX</td>
                    <td>1</td>
                    <td>20.000.000</td>
                    <td><a class="btn btn-danger">Xóa</a></td>
                </tr>
            </table>
        </div>
        
        <div class="container hello">
            <span class="glyphicon glyphicon-plane" style="color:#7094db;margin-right: 10px;"></span>Miễn Phí Vận Chuyển cho đơn hàng từ 200.000 (giảm tối đa 40.000)
        </div>
        <div class="container">
            <table class="table table-hover table-condensed table-responsive table-bordered info-cart">
                <tr>
                    <td><h2>Chọn tất cả</h2></td>
                    <td style="color: blue;"><h2>Tổng tiền hàng (3 sản phẩm): 60.000.000</h2></td>
                </tr>
                <tr>
                    <td>3 Sản phẩm</td>
                    <td><a href="order.php" class="btn btn-success">Mua ngay</a>
                        <a href="index.php" class="btn btn-info">Tiếp tục mua</a>
                    </td>

                </tr>
            </table>
        </div>
        </div>
        <div class="seen-product container">
            <h2>Có thể bạn cũng thích</h2>
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
       <?php
       require "footer.php";
       ?>
</body>
</html>