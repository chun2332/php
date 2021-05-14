<?php
session_start();
require_once './db.inc.php';
// require_once './template/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTITIED</title>
    <style>
        .w200px {
            width: 200px;
        }
    </style>
    <?php require_once './template/linkTemplate.php' ?>

</head>

<body>

    <div class="container px-0 px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.php"><span class="font-weight-bold text-uppercase text-dark">ARTITIED</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <!-- Link--><a class="nav-link" href="index.html"></a>
                    </li>
                    <li class="nav-item">
                        <!-- Link--><a class="nav-link" href="shop.html"></a>
                    </li>
                    <li class="nav-item">
                        <!-- Link--><a class="nav-link" href="detail.html"></a>
                    </li>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="cart.html"> <i class="fas fa-dolly-flatbed mr-1 text-white"></i><small class="text-gray"></small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> <i class="fas fa-user-alt mr-1 text-white"></i></a></li>
                    </ul>

                </ul>
            </div>
        </nav>
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0">SIGN UP</h1>
                    </div>
                    <div class="col-lg-6 text-lg-right">

                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <form name="myForm" method="POST" action="./addUser.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="text-small text-uppercase">上傳大頭貼</label>
                            <img class="w200px" src="./images/<?php echo $arr['userImg'] ?>" />
                            <input class="form-control form-control-lg" type="file" name="userImg">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputUsername">帳號</label>
                            <input type="text" class="form-control" id="inputUsername" name="userMail" placeholder="請輸入電子信箱" value="" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword">密碼</label>
                            <input type="password" class="form-control" id="inputPassword" name="userPwd" placeholder="請輸入密碼" value="" required="required">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">姓名</label>
                            <input type="text" class="form-control" id="inputName" name="userName" placeholder="請輸入您的姓名" value="" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputGender">性別</label>
                            <select id="inputGender" name="userGender" class="form-control">
                                <option value="男" selected>男</option>
                                <option value="女">女</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPhoneNumber">手機號碼</label>
                            <input type="text" class="form-control" id="inputPhoneNumber" name="userPhone" placeholder="請輸入手機電話號碼" value="" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputBirthday">生日</label>
                            <input type="date" class=" form-control" id="inputBirthday" name="userBirth" placeholder="請輸入出生年月日" value="" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="inputAddress">住址</label>
                            <input type="text" class="form-control" id="inputAddress" name="userAddress" placeholder="請輸入住址" required="required">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">註冊</button>
                </form>
            </div>

        </section>
    </div>
    <?php require_once './template/footer.php' ?>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/front.js"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>