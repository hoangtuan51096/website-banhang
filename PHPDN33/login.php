<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            require "header.php";
        ?>
        <title>Trang đăng nhập</title>
    </head>
    <body>
    <?php
        require "menu.php";
    ?>
        <div class="container">
            <form action="index2.php" method="POST">
                <div class="form-group">
                    <div>
                        <h1>THÔNG TIN TÀI KHOẢN</h1>
                        <label for="usr" class="text-primary">Tên tài khoản</label>
                        <input type="text" class="form-control" id="usr" required="required">
                        <label for="pwd" class="text-primary">Mật khẩu</label>
                        <input type="password" class="form-control" id="pwd" required="required"> 
                    </div>                   
                </div>
                <button type="button" class="btn btn-primary"><a href="index2.php" style="color: white !important;">Đăng nhập</a></button>               
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php
        require "footer.php";
        ?>
    </body>
</html>