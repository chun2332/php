<?php
require_once './checkSession.php';
require_once('./db.inc.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <?php
    require_once './template/linkTemplate.php';
    ?>
</head>

<body>
    <div class="page-holder">
        <?php
        require_once './template/navbar.php';
        require_once './template/modal.php';
        ?>
        <div class="container">
            <!-- HERO SECTION------------------------------------------------>
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="h2 text-uppercase mb-0">New product</h1>
                        </div>

                    </div>
                </div>
            </section>
            <section class="py-5">
                <!-- BILLING ADDRESS-->
                <h2 class="h5 text-uppercase mb-4">商品資訊</h2>
                <div class="row">
                    <div class="col-lg-8">
                        <form name="myForm" method="POST" action="./insert.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label class="text-small text-uppercase" for="firstName">商品名稱</label>
                                    <input class="form-control form-control-lg" id="proName" name="proName" type="text" placeholder="輸入名稱">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="text-small text-uppercase" for="lastName">商品類別</label>
                                    <input class="form-control form-control-lg" id="proClass" name="proClass" type="text" placeholder="類別">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="text-small text-uppercase">商品編號</label>
                                    <input class="form-control form-control-lg" id="proId" name="proId" type="text" placeholder="#">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="text-small text-uppercase" for="phone">商品描述</label>
                                    <input class="form-control form-control-lg" id="proDes" name="proDes" type="text" placeholder="描述商品">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="text-small text-uppercase" for="company">商品價格</label>
                                    <input class="form-control form-control-lg" id="proPrice" name="proPrice" type=" text">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="text-small text-uppercase" for="company">商品數量</label>
                                    <input class="form-control form-control-lg" id="proQty" name="proQty" type=" text">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="text-small text-uppercase" for="address">上傳圖片</label>
                                    <input class="form-control form-control-lg" type="file" name="proImg">
                                </div>

                                <div class="col-lg-12 form-group">
                                    <input class="btn btn-dark" type="submit" name="smb" value="建立">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <footer class="bg-dark text-white">
            <div class="container py-4">
                <div class="row py-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">Customer services</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
                            <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
                            <li><a class="footer-link" href="#">Online Stores</a></li>
                            <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">Company</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#">What We Do</a></li>
                            <li><a class="footer-link" href="#">Available Services</a></li>
                            <li><a class="footer-link" href="#">Latest Posts</a></li>
                            <li><a class="footer-link" href="#">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-uppercase mb-3">Social media</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#">Twitter</a></li>
                            <li><a class="footer-link" href="#">Instagram</a></li>
                            <li><a class="footer-link" href="#">Tumblr</a></li>
                            <li><a class="footer-link" href="#">Pinterest</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-top pt-4" style="border-color: #1d1d1d !important">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="small text-muted mb-0">&copy; 2020 All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 text-lg-right">
                            <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstraptemple.com/p/bootstrap-ecommerce">Bootstrap Temple</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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
    </div>
</body>

</html>