<div class="container-fluid w3-yellow" id="topheader">
        <div class="container">
            <div class="row ">
                <div class="col-sm-3 list">
                    <a href="#">
                        <span class="fa fa-bell-o"></span>Thông báo</a>
                    </div>
                    <div class="col-sm-3 list">
                        <a href="d3tcare.php">
                            <span class="fa fa-question-circle"></span>Trợ giúp</a>
                        </div>
                        <div class="col-sm-3 list">
                            <a href="register.php">Đăng ký</a>
                        </div>
                        <div class="col-sm-3 list">
                            <a href="login.php">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3" id="logo">
                           <a href="index.php">
                            <img src="image/logo.jpg" alt="logo" width="110px" height="60px">
                            </a>
                        </div>
                        <div class="col-xs-6  col-sm-6">
                            <div class="container-fluid">
                                <div class="row" id="search">
                                    <div class="col-sm-8" style="padding-right: 1px;">
                                        <input type="search" name="txtSearch" id="txtSearch" placeholder="Bạn cần tìm gì?">
                                    </div>
                                    <div class="col-sm-3" style="padding: 0px;">
                                        <div id="select-box">
                                            <select name="categoryId">
                                                <option value="" selected>Iphone</option>
                                                <option value="nam">SamSung</option>
                                                <option value="nu">Sony</option>
                                                <option value="treem">Xiaomi</option>
                                                <option value="phukien">Nokia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1" style="padding: 0px;">
                                        <button type="button" id="btnSearch">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3  col-sm-3" id="cart">
                            <a href="cart.php">
                                <button type="button" class="btn btn-default">
                                    <i class="fa fa-cart-arrow-down" style="font-size: 24px;"></i>
                                    <span class="badge">0</span>
                                </button>
                            </a>
                        </div>                    
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-inverse" role="navigation" id="myHeader" >
                <div class="container-fluid" style="background: #1b6d85;">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <span class="glyphicon glyphicon-home" style="color:#ffffff"></span>
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <li id="menuheader">
                                    <a href="#">Sản phẩm bán chạy</a>
                                </li>
                                <li class="dropdown" id="menuheader">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Điện Thoại
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="danhmucIP.php">Iphone</a>
                                        </li>
                                        <li>
                                            <a href="#">Samsung</a>
                                        </li>
                                        <li>
                                            <a href="#">Sony</a>
                                        </li>
                                        <li>
                                            <a href="#">Xiaomi</a>
                                        </li>
                                        <li>
                                            <a href="#">Nokia</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown" id="menuheader">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tablet
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Iphone</a>
                                        </li>
                                        <li>
                                            <a href="#">Samsung</a>
                                        </li>
                                        <li>
                                            <a href="#">Sony</a>
                                        </li>
                                        <li>
                                            <a href="#">Xiaomi</a>
                                        </li>
                                        <li>
                                            <a href="#">Nokia</a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="menuheader">
                                    <a href="#">Phụ kiện</a>
                                </li>
                                <li id="menuheader">
                                    <a href="#">Ưu đãi</a>
                                </li>
                                <li id="menuheader">
                                    <a href="#">Thay màn</a>
                                </li>
                                <li id="menuheader">
                                    <a href="#">Review</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <script>
               window.onscroll = function() {myFunction()};

               var header = document.getElementById("myHeader");
               var sticky = header.offsetTop;

               function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        </script>