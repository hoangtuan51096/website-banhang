
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link href="css/layout.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="favicon.png">
    <link href="css/effect.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="js/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link href="js/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/assets/owl.carousel.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <link rel="icon" href="favicon.png">

    <script>
        $(window).resize(function () {
            if ($(this).width() < 1024) {
                    //An|Hien|Add|Remove class cho menu-right khi thay doi kich thuoc man hinh
                    $("#right").hide();
                    $("div#product").removeClass("col-sm-9");
                    $("div#product").addClass("col-sm-12");

                    //An|Hien|Add|Remove class cho menu-right khi thay doi kich thuoc man hinh
                    $("#service").hide();
                    $("div#slide-show-hot").removeClass("col-sm-9");
                    $("div#slide-show-hot").addClass("col-sm-12");

                    $("#search").hide();
                } else
                {
                    $("#right").show();
                    $("div#product").removeClass("col-sm-12");
                    $("div#product").addClass("col-sm-9");

                    $("#service").show();
                    $("div#slide-show-hot").removeClass("col-sm-12");
                    $("div#slide-show-hot").addClass("col-sm-9");

                    $("#search").show();
                }
            });

        </script>
   