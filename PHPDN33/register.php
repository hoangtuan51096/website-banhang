<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trang Đăng ký</title>
        <?php
        require "header.php";
        ?>
    </head>
    <body>
        <?php
        require "menu.php";
        ?>
        <div class="container">
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>THÔNG TIN TÀI KHOẢN</h1>
                            <label for="usr" class="text-primary">Tên tài khoản</label>
                            <input type="text" class="form-control" id="usr" required="required">
                            <label for="pwd" class="text-primary">Mật khẩu</label>
                            <input type="password" class="form-control" id="pwd" required="required">
                            <label for="repwd" class="text-primary">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="repwd" required="required">
                        </div>
                        <div class="col-sm-6">
                            <h1>THÔNG TIN LIÊN HỆ</h1>
                            <label for="name" class="text-primary">Họ tên của bạn</label>
                            <input type="text" class="form-control" id="name">
                            <label for="phone" class="text-primary">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone">
                            <label for="email" class="text-primary">Địa chỉ email</label>
                            <input type="text" class="form-control" id="email">
                            <label for="address" class="text-primary">Địa chỉ (số nhà, đường, tỉnh thành)</label>
                            <input type="text" class="form-control" id="address">

                        </div>

                    </div>
                    <button type="button" class="btn btn-primary">Đăng ký</button>
                </div>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php 
        require "footer.php";
        ?>
    </body>
</html>