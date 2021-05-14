  <?php
    require_once('./checkSession.php'); //引入登入判斷
    require_once('./db.inc.php'); //引用資料庫連線
    ?>
  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>ARTDDICT</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <?php
        require_once './template/linkTemplate.php';
        ?>
      <style>
          .border {
              border: 1px #aaaaff solid;
              text-align: center;
          }

          .w200px {
              width: 100px;
          }

          .page_size {
              font-size: 20px;
          }

          .button_style {
              background-color: #ffffff;
              border: 1px solid #ffffff;
          }

          .whitewordcolor {
              background-color: #111111;
              color: #ffffff;
          }
      </style>
  </head>
  <style>

  </style>
  </head>

  <body>
      <div class="page-holder">
          <!-- navbar-->
          <header class="header bg-white">
              <div class="container px-0 px-lg-3">
                  <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="../index.php"><span class="font-weight-bold text-uppercase text-dark">ARTDICCT</span></a>
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
              </div>
          </header>
          <!--  Modal -->
          <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-body p-0">
                          <div class="row align-items-stretch">
                              <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
                              <div class="col-lg-6">
                                  <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  <div class="p-5 my-md-4">
                                      <ul class="list-inline mb-2">
                                          <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                          <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                          <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                          <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                          <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                      </ul>
                                      <h2 class="h4">Red digital smartwatch</h2>
                                      <p class="text-muted">$250</p>
                                      <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                                      <div class="row align-items-stretch mb-4">
                                          <div class="col-sm-7 pr-sm-0">
                                              <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                                  <div class="quantity">
                                                      <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                      <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                                      <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
                                      </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container">
              <!-- HERO SECTION-->
              <section class="py-5 bg-light">
                  <div class="container">
                      <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                          <div class="col-lg-6">
                              <h1 class="h2 text-uppercase mb-0">LOGIN</h1>
                          </div>
                          <div class="col-lg-6 text-lg-right">

                          </div>
                      </div>
                  </div>
              </section>
          </div>

          <div class="container pb-5">
              <?php
                require_once("./templates/titles.php")
                ?>
              <div class="pt-5">
                  <h3>商品編輯</h3>
                  <form action="./update.php" name="myForm" method="POST" enctype="multipart/form-data">
                      <table class="border">
                          <thead class="whitewordcolor">
                              <tr>
                                  <th class="border">商品名稱</th>
                                  <th class="border">商品分類</th>
                                  <th class="border">商品照片路徑</th>
                                  <th class="border">商品價格</th>
                                  <th class="border">商品數量</th>
                                  <th class="border">新增時間</th>
                                  <th class="border">更新時間</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $sql = "SELECT `i`.`id`,`i`.`aucClass`,`i`.`aucName`,`i`.`aucQty`,`i`.`aucDes`,`i`.`aucId`,`i`.`aucPriceStart`,`i`.`aucPriceNow`,`i`.`aucImg`,`i`.`created_at`,`i`.`updated_at`,`categories`.`categoryId`, `categories`.`categoryName`
                                FROM `auctionitems` AS `i` INNER JOIN `categories`
                                ON `i`.`aucClass` = `categories`.`categoryId`
                                WHERE `id` = ? ";
                                $arrParam = [
                                    (int)$_GET['id']
                                ];
                                //查詢
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute($arrParam);
                                //資料數量大於 0，則列出相關資料
                                if ($stmt->rowCount() > 0) {
                                    $arr = $stmt->fetchAll()[0];
                                ?>
                                  <tr>
                                      <!-- 商品名稱 -->
                                      <td class="border">
                                          <input type="text" name="aucName" value="<?php echo $arr['aucName'] ?>" maxlength="100" />
                                      </td>
                                      <!-- 商品分類 -->
                                      <td class="border">
                                          <select name="itemCategoryId">
                                              <option value="<?php echo $arr['categoryId']; ?>"><?php echo $arr['categoryName'] ?></option>
                                              <?php
                                                //顯示所有商品種類
                                                $catsql = "SELECT `categoryId`, `categoryName` FROM `categories` ";
                                                $stmt = $pdo->query($catsql);
                                                if ($stmt->rowCount() > 0) {
                                                    $catarr = $stmt->fetchAll();
                                                    for ($i = 0; $i < count($catarr); $i++) {
                                                ?>
                                                      <option value="<?php echo $catarr[$i]['categoryId'] ?>"><?php echo $catarr[$i]['categoryName'] ?></option>
                                              <?php
                                                    }
                                                }
                                                ?>
                                          </select>
                                      </td>
                                      <!-- 商品圖片 -->
                                      <td class="border">
                                          <img class="itemImg w200px" src="./images/items/<?php echo $arr['aucImg'] ?>" /><br />
                                          <input type="file" name="aucImg" value="" />
                                      </td>
                                      <!-- 商品價格 -->
                                      <td class="border">
                                          <input type="text" name="aucPriceStart" value="<?php echo $arr['aucPriceStart'] ?>" maxlength="11" />
                                      </td>
                                      <!-- 商品數量 -->
                                      <td class="border">
                                          <input type="text" name="aucQty" value="<?php echo $arr['aucQty'] ?>" maxlength="3" />
                                      </td>
                                      <td class="border"><?php echo $arr['created_at'] ?></td>
                                      <td class="border"><?php echo $arr['updated_at'] ?></td>
                                  </tr>
                              <?php
                                } else {
                                ?>
                                  <tr>
                                      <td colspan="7">沒有資料</td>
                                  </tr>
                              <?php
                                }
                                ?>
                          </tbody>
                      </table>
                      <input type="hidden" name="id" value="<?php echo (int)$_GET['id']; ?>">
                      <td class="border" colspan="7"><input type="submit" name="smb" value="更新"></td>
                  </form>
              </div>
          </div>

          <?php
          require_once './template/footer.php';
          ?>

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